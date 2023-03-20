<?php
/**
 * @package vanced-pms
 */
 /* 
 * Plugin Name:       Vanced PMS
 * Plugin URI:        https://Jonah
 * Description:       Custom Plugin to help in project data management
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Jonah
 * Author URI:        https://Jonah
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://Jonah
 * Text Domain:       project
 * Domain Path:       /languages
 */

 //Security
 defined('ABSPATH') or die('gerara here!');

if(file_exists(dirname(__FILE__).'/vendor/autoload.php')){
    require_once dirname(__FILE__). '/vendor/autoload.php';
}

function activateExternally(){
    Inc\Base\Activate::activate();
}
register_activation_hook(__FILE__, 'activateExternally');

function deactivateExternally(){
    Inc\Base\Deactivate::deactivate();
}
register_deactivation_hook(__FILE__, 'deactivateExternally');

//class as service
if(class_exists('Inc\\Init')){
    Inc\Init::register_services();
}