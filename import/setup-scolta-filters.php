<?php
/**
 * Configure Scolta filter fields for Counting Down Apollo.
 *
 * Run with: ddev wp eval-file import/setup-scolta-filters.php
 */
$settings = get_option('scolta_settings', []);

$settings['filter_fields'] = ['program', 'category'];
$settings['filter_field_descriptions'] = [
    'program' => 'Space program era. Map the user\'s query to one of these values: Apollo (Moon missions, lunar landing, Saturn V, 1967-1972, Apollo 11, Apollo 13), Mercury (first American astronauts, orbital flights, 1958-1963, John Glenn, Alan Shepard), Gemini (EVA, docking, rendezvous, endurance, 1965-1966, Ed White, Gemini 4), Space Race (Cold War context, competition, Sputnik, politics, NASA founding), Technology (rockets, spacecraft engineering, guidance computers, life support, spacesuits), Reflections (personal reflections, commentary, legacy, cultural impact)',
    'category' => 'Specific mission or topic category. Use for precise mission queries like "Apollo 13" or "Gemini 4".',
];

$settings['sortable_fields'] = ['date'];
$settings['sortable_field_descriptions'] = [
    'date' => 'Publication date of the blog post (diary entries are chronological with the space program timeline)',
];

update_option('scolta_settings', $settings);
echo "Scolta filter settings updated.\n";
