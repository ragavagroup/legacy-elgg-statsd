<?php

	$english = array(
            
            'elgg-statsd:enabled' => 'Enable statsd logging',
            'elgg-statsd:bucket' => 'Bucket (useful to distinguish between stats from different elgg installs)',
            'elgg-statsd:host' => 'StatsD Host',
            'elgg-statsd:port' => 'StatsD Port',
            'elgg-statsd:log_exceptions' => 'Log Exceptions',
            'elgg-statsd:log_errors' => 'Log PHP Errors',
            'elgg-statsd:log_messages' => 'Log User Popup Messages (system messages and errors)',
            'elgg-statsd:log_warnings' => 'Log PHP Warnings',
            'elgg-statsd:log_notices' => 'Log PHP Notices',
            'elgg-statsd:log_events' => 'Log Elgg Events',
            'elgg-statsd:log_hooks' => 'Log Elgg Hooks',
            'elgg-statsd:log_time' => 'Log Script Execution Times',
            'elgg-statsd:log_database' => 'Log Database Calls',
            'elgg-statsd:log_users' => 'Track Users',
            'elgg-statsd:log_loggedoutusers' => 'Track Loggedout Sessions',
	);
					
	add_translation("en",$english);