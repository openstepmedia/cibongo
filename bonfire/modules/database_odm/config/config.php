<?php defined('BASEPATH') || exit('No direct script access allowed');

$config['module_config'] = array(
    'author'      => 'Bonfire Team',
    'description' => 'Provides tools for working with your database(s).',
    'version'     => '0.7.3',
    'menus'       => array(
        'developer' => 'database_odm/developer/menu',
    ),
    'menu_topic'  => array(
        'developer' => 'lang:bf_menu_db_odm_tools',
    ),
    'name' => 'Database Tools (MongoDB)',
);
