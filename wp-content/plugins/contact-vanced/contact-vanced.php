<?php
/*
  @package  Contact-Vanced
  Plugin Name:       Contact Vanced
  Plugin URI:        https://jonah
  Description:       Custom plugin to store project data
  Author:            Jonah Kiptoo
  Author URI:        https://jonah
  License:           GPL v2 or later
  License URI:       https://www.gnu.org/licenses/gpl-2.0.html
  Update URI:        https://jonah
  Text Domain:       Contact vanced
 */

//Securing plugin
if(!defined('ABSPATH')){
    die;
}

if(file_exists(dirname(__FILE__)
.'/vendor/autoload.php')){
    require_once(dirname(__FILE__).'/vendor/autoload.php');
};

function ExternalActivation(){
    Inc\Base\Activate::activate();
}
register_activation_hook(__FILE__, 'externalactivation');

function ExternalDeactivation(){
    Inc\Base\Deactivate::deactivate();
}
register_deactivation_hook(__FILE__, 'externaldeactivation');

// Class as a service
if(class_exists('Inc\\Init')){
    Inc\Init::register_services();
}

