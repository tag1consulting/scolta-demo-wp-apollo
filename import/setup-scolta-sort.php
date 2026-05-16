<?php
$settings = get_option( 'scolta_settings', [] );
$settings['sortable_fields'] = [ 'date' ];
$settings['sortable_field_descriptions'] = [
	'date' => 'Post publication date',
];
update_option( 'scolta_settings', $settings );
