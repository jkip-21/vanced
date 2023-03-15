<?php
/**
 * @package  Project-data
 *  * Plugin Name:       Project Data
 * Plugin URI:        https://jonah
 * Description:       Custom plugin to store project data
 * Author:            Jonah Kiptoo
 * Author URI:        https://jonah
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://jonah
 * Text Domain:       project data
 */

//Securing plugin
if(!defined('ABSPATH')){
    die;
}

if(file_exists(dirname(__FILE__)
.'/vendor/autoload.php')){
    require_once(dirname(__FILE__).'/vendor/autoload.php');
};

function activateExternally(){
    Inc\Base\Activate::activate();
}
register_activation_hook(__FILE__, 'activateExternally');

function deactivateExternally(){
    Inc\Base\Deactivate::deactivate();
}
register_deactivation_hook(__FILE__, 'deactivateExternally');

// Class as a service
if(class_exists('Inc\\Init')){
    Inc\Init::register_services();
}