/**
 * @file
 * Rich search result cards for Counting Down Apollo.
 *
 * Registers two Scolta renderers: a result renderer that paints a dispatch's
 * hero photograph, its date and its categories alongside the title and
 * highlighted excerpt, and a suggestion renderer that puts the same photograph
 * on the search-as-you-type rows. Everything they need comes from the search
 * index — the thumbnail URL and the category labels ride along in the
 * fragment's meta map, put there by apollo_blog_scolta_enrich() — so neither a
 * card nor a suggestion costs a per-result server call.
 *
 * Load order matters. scolta.js defines window.Scolta when it executes and
 * calls Scolta.init() on DOMContentLoaded, so this file must run after the
 * former and before the latter. The theme enqueues it at wp_footer with
 * scolta-search as a dependency, which puts it exactly there; registering at
 * top level (not inside a DOMContentLoaded handler) keeps it there.
 */
(function (global) {
  'use strict';

  if (!global.Scolta || typeof global.Scolta.setResultRenderer !== 'function') {
    // A bundle without the render seam is not something to work around here.
    console.warn('[apollo] Scolta.setResultRenderer unavailable; leaving the built-in card in place.');
    return;
  }

  var ENTITIES = {
    '&': '&amp;',
    '<': '&lt;',
    '>': '&gt;',
    '"': '&quot;',
    "'": '&#39;',
  };

  function escapeHtml(value) {
    return String(value === null || value === undefined ? '' : value)
      .replace(/[&<>"']/g, function (c) { return ENTITIES[c]; });
  }

  /**
   * Escapes a URL for an attribute and neutralizes non-http(s) schemes.
   *
   * The thumbnail URL is written into the index as a root-relative path, but
   * it arrives here as raw index data, so it gets the same treatment Scolta
   * gives the result href rather than an assumption about who wrote it.
   */
  function safeImageUrl(value) {
    var url = String(value === null || value === undefined ? '' : value).trim();
    if (url === '') {
      return '';
    }
    if (/^[a-z][a-z0-9+.-]*:/i.test(url) && !/^https?:/i.test(url)) {
      return '';
    }
    return escapeHtml(url);
  }

  /**
   * Drops the thumbnail when its image fails to load.
   *
   * Adding a class rather than removing the node keeps the handler cheap and
   * lets the stylesheet decide what an imageless card looks like.
   */
  global.apolloScoltaThumbFailed = function (img) {
    var card = img.closest ? img.closest('.apollo-result') : null;
    if (card) {
      card.classList.add('apollo-result--thumb-failed');
    }
  };

  global.apolloScoltaSaytThumbFailed = function (img) {
    var box = img.closest ? img.closest('.apollo-sayt__thumb') : null;
    if (box) {
      box.removeChild(img);
      box.classList.add('apollo-sayt__thumb--empty');
    }
  };

  /**
   * How many category badges a card paints. Mirrors the indexer's own cap,
   * which is what actually bounds the string; this is the client-side belt.
   */
  var BADGE_LIMIT = 2;

  /**
   * Renders a dispatch's category badges.
   *
   * data.meta.badges is raw index data: a JSON-encoded array of category
   * names, already capped by apollo_blog_scolta_enrich(). JSON and not a
   * delimited string because a category name is free text, so there is no
   * separator a future one provably cannot contain.
   *
   * Anything that does not parse into an array counts as no badges. 81 of the
   * 206 indexed items are uncategorised and simply show none — the same
   * graceful path a missing image takes, not a broken card.
   */
  function badges(encoded) {
    if (!encoded) {
      return '';
    }
    var labels;
    try {
      labels = JSON.parse(encoded);
    } catch (e) {
      return '';
    }
    if (!Array.isArray(labels)) {
      return '';
    }
    var out = '';
    for (var i = 0; i < labels.length && i < BADGE_LIMIT; i++) {
      var label = String(labels[i] === null || labels[i] === undefined ? '' : labels[i]).trim();
      if (label !== '') {
        out += '<span class="apollo-result__badge">' + escapeHtml(label) + '</span>';
      }
    }
    return out;
  }

  /**
   * Renders one result.
   *
   * Escaping: every ctx value used here ends in Html, Attr or Text, or is
   * safeUrl, so Scolta has already escaped it exactly as its own card would.
   * Everything read from data.meta — image, image_alt, badges — is raw index
   * data and is escaped here. ctx.query and ctx.highlightTerms are raw and
   * never reach the markup.
   *
   * The date leads the meta row rather than trailing it, which is the one
   * place this card departs from the others in the rollout. On an archive
   * written from 1961 to 1975 the date is not filing metadata, it is the
   * primary fact: it is what tells you whether a dispatch about the lunar
   * module predates the first flight of one. It is set in the theme's mono
   * face so it reads as a log entry.
   *
   * A dispatch with no hero image gets the same card without the thumbnail,
   * not Scolta's built-in one. Only 70 of the 206 indexed items have one, so
   * the imageless card is the common case here rather than the exception, and
   * mixing two card designs down one list would read as a broken page rather
   * than a designed fallback.
   */
  global.Scolta.setResultRenderer(function (data, ctx) {
    var meta = (data && data.meta) || {};
    var imageUrl = safeImageUrl(meta.image);
    var alt = escapeHtml(meta.image_alt || '');
    var badgeHtml = badges(meta.badges);

    var metaRow = '';
    if (ctx.dateHtml || badgeHtml) {
      metaRow = '<div class="apollo-result__meta">'
        + (ctx.dateHtml ? '<span class="apollo-result__date">' + ctx.dateHtml + '</span>' : '')
        + badgeHtml
        + '</div>';
    }

    // The thumbnail is decorative: the title link beside it goes to the same
    // dispatch, so it stays out of the tab order and out of the accessible
    // tree.
    var thumb = imageUrl === '' ? ''
      : '<a class="apollo-result__thumb" href="' + ctx.safeUrl + '" target="_blank" rel="noopener"'
        + ' tabindex="-1" aria-hidden="true">'
        + '<img src="' + imageUrl + '" alt="' + alt + '" loading="lazy" decoding="async"'
        + ' onerror="apolloScoltaThumbFailed(this)">'
        + '</a>';

    // target/rel match the built-in card: within one result list, a card with
    // a thumbnail must not open differently from one without.
    return '<div class="scolta-result-card apollo-result">'
      + thumb
      + '<div class="apollo-result__body">'
      + '<a class="scolta-result-title apollo-result__title" href="' + ctx.safeUrl + '"'
      + ' target="_blank" rel="noopener" title="' + ctx.titleAttr + '">' + ctx.titleHtml + '</a>'
      + metaRow
      + '<div class="scolta-result-excerpt apollo-result__excerpt">' + ctx.excerptHtml + '</div>'
      + '</div>'
      + '</div>';
  });

  // Behind its own guard rather than the file-level one: this seam landed
  // after setResultRenderer, so a bundle old enough to lack it still gets the
  // rich cards above, and the dropdown degrades to the themed but imageless
  // rows instead of throwing.
  if (typeof global.Scolta.setSuggestionRenderer !== 'function') {
    return;
  }

  /**
   * Renders one search-as-you-type suggestion row.
   *
   * Returns the row's INNER markup only. The option element around it is the
   * bundle's, and it is what carries the combobox contract — role="option",
   * the stable id the input's aria-activedescendant points at, aria-selected,
   * the data-scolta-sayt-index the keyboard and click handlers dispatch on,
   * and the href in navigate mode. None of that is restated here, because a
   * renderer cannot break by omission what it never writes.
   *
   * Escaping: ctx.titleHtml and ctx.excerptHtml arrive pre-escaped, escaped
   * exactly as the built-in row escapes them. suggestion.meta.* is raw index
   * data and is escaped here. ctx.query is raw and never reaches the markup.
   *
   * A recent search is handed back to the built-in row by returning null: it
   * has no fragment, no photograph and nothing to add, and the built-in row is
   * already the themed glyph treatment this dropdown wants for history.
   */
  global.Scolta.setSuggestionRenderer(function (suggestion, ctx) {
    if (!suggestion || suggestion.type !== 'title') {
      return null;
    }

    var meta = suggestion.meta || {};
    var imageUrl = safeImageUrl(meta.image);

    // Decorative, and deliberately not carrying meta.image_alt: an option's
    // accessible name is computed from its contents, so alt text here would be
    // announced in front of the title it illustrates. The title names the row.
    //
    // A row with no photograph still gets the box, empty and with its border
    // and fill removed. Two dispatches in three have none, so without the
    // spacer the dropdown would mix indented and flush-left rows and stop
    // reading as one list — and an empty grey rectangle on most rows would be
    // worse than either.
    var thumb = imageUrl === ''
      ? '<span class="apollo-sayt__thumb apollo-sayt__thumb--empty" aria-hidden="true"></span>'
      : '<span class="apollo-sayt__thumb" aria-hidden="true">'
        + '<img src="' + imageUrl + '" alt="" loading="lazy" decoding="async"'
        + ' onerror="apolloScoltaSaytThumbFailed(this)">'
        + '</span>';

    return '<span class="apollo-sayt">'
      + thumb
      // Both classes on purpose. The scolta-* one carries the look the theme
      // already gives a suggestion's title and excerpt, so a title row and a
      // recent-search row stay typographically identical; the apollo-* one
      // adds only the layout this row needs. Two classes at the same
      // specificity, resolved by source order, rather than a nested selector.
      + '<span class="apollo-sayt__text">'
      + '<span class="scolta-sayt-title apollo-sayt__title">' + ctx.titleHtml + '</span>'
      + (ctx.excerptHtml
        ? '<span class="scolta-sayt-excerpt apollo-sayt__excerpt">' + ctx.excerptHtml + '</span>'
        : '')
      + '</span>'
      + '</span>';
  });

})(window);
