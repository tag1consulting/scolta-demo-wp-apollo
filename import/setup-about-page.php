<?php
/**
 * Creates the "About This Demo" page for Counting Down to Apollo.
 * Run with: wp eval-file /var/www/html/import/setup-about-page.php
 * Idempotent: skips creation if the page already exists.
 */

$existing = get_page_by_path('about-this-demo', OBJECT, 'page');
if ($existing) {
    echo "About This Demo page already exists — skipping.\n";
    return;
}

$content = <<<'HTML'
<h2>About This Site</h2>
<p><strong>Counting Down to Apollo is a fictional blog.</strong> It was created by Tag1 Consulting to demonstrate the capabilities of Scolta, an open-source AI-powered search platform, on a WordPress blog with rich narrative content.</p>

<h2>What You Are Looking At</h2>
<p>This site is a WordPress demonstration built to show how Scolta performs on personal narrative and journalistic content. The site presents a fictional American's firsthand account of following the U.S. space program from Gagarin's flight in April 1961 through the final Apollo 17 mission in December 1972.</p>

<p>The blog contains approximately 200 entries written from the perspective of a civilian observer — not a scientist or journalist — recording his reactions to each major event as it happened. The content covers:</p>
<ul>
  <li>Mercury program (1961–1963): from Shepard's suborbital flight to Gordon Cooper's 22-orbit mission</li>
  <li>Gemini program (1964–1966): rendezvous, spacewalks, and the techniques that made Apollo possible</li>
  <li>Apollo program (1967–1972): the Apollo 1 fire, the Moon landings, and Apollo 13's survival mission</li>
  <li>Supplementary pages: Mission Timeline, Glossary, and Resources</li>
</ul>

<h2>What Scolta Does Here</h2>
<p>The search bar uses Scolta to let you explore twelve years of space history using natural language. Try these example queries:</p>
<ul>
  <li>"What happened during Apollo 13?"</li>
  <li>"How did Neil Armstrong feel about landing on the Moon?"</li>
  <li>"Tell me about the Apollo 1 fire"</li>
  <li>"What was the first spacewalk like?"</li>
  <li>"Buzz Aldrin's experience on the Moon"</li>
</ul>
<p>Scolta uses Pagefind for full-text indexing, Claude via the Anthropic API for query expansion and AI-generated overviews, and a custom BM25-based scoring layer. The result is a search experience that understands narrative context, not just keywords.</p>

<h2>About Tag1 Consulting</h2>
<p>Tag1 Consulting is one of the leading Drupal development and consulting firms in the world. Tag1 built and open-sources Scolta as a demonstration of what AI-augmented content discovery can look like on modern web platforms — including WordPress. For more information about Tag1 and Scolta, visit <a href="https://tag1.com">tag1.com</a>.</p>

<h2>Reuse and Attribution</h2>
<p>If you are evaluating Scolta for your organization and have questions about how this demo was built or how to implement Scolta for your use case, contact Tag1 Consulting.</p>
HTML;

$page_id = wp_insert_post([
    'post_title'   => 'About This Demo',
    'post_name'    => 'about-this-demo',
    'post_content' => $content,
    'post_status'  => 'publish',
    'post_type'    => 'page',
    'post_author'  => 1,
]);

if (is_wp_error($page_id)) {
    echo "ERROR: Failed to create About This Demo page: " . $page_id->get_error_message() . "\n";
    return;
}

echo "Created 'About This Demo' at /about-this-demo/ (post ID: $page_id)\n";
