<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
| Cache Settings
| -------------------------------------------------------------------
| 'path'  = The path where cache files should be stored
| 'time'  = Number of minutes for which to cache
*/
$cache_path = APPPATH . 'cache/';

$config['cache_path'] = $cache_path;
$config['cache_default_expires'] = 60; // Cache expires in 60 minutes
$config['cache_file_prefix'] = 'ss_cache_';

// File System Cache Driver Configuration
$config['cache_drivers'] = array(
    'file' => array(
        'adapter' => 'file',
        'backup' => 'file',
        'key_prefix' => 'ss_',
        'path' => $cache_path
    )
);

// Cache items that rarely change
$config['cache_items'] = array(
    'navigation' => 3600,        // Cache navigation for 1 hour
    'sidebar' => 3600,          // Cache sidebar for 1 hour
    'footer' => 3600,           // Cache footer for 1 hour
    'featured_content' => 1800,  // Cache featured content for 30 minutes
    'lesson_list' => 1800       // Cache lesson lists for 30 minutes
);
