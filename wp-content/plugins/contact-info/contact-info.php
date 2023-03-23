<?php
/**
 *  @package ContactInfo
 */


   /*

Plugin Name: Contact Info
Plugin URI:https://jonah
Author: Jonah Kiptoo
Author URI: https://jonah
Description: Custom plugin for contact information for vanced theme.
Version: 1.0
License: GPL v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


*/

/**
 * Securing A plugin
 */
if(!defined('ABSSPATH')){
    die;
}
 class ContactReg{
    function __construct(){
       

        $this->pass_data_to_db();   
    }

    function activate(){ 
        $this->create_table_to_db();
        flush_rewrite_rules();
    }

    function deactivate(){
   
        flush_rewrite_rules();
    }

    function create_table_to_db(){
        global $wpdb;

        $table_name = 'wp_contacts';
       

        $contact_details = "CREATE TABLE $table_name(
            useremail varchar(35) NOT NULL,
            message text NOT NULL
        );";

      

        require_once(ABSPATH.'wp-admin/includes/upgrade.php');
        dbDelta($contact_details);
    }

    function pass_data_to_db(){
        if (isset($_POST['submitcontact'])){
            $data = array(
                'useremail'=>$_POST['useremail'],
                'message'=>$_POST['message']
            );
            global $wpdb;
            $tableName= 'wp_contacts';
            $result = $wpdb->insert($tableName, $data, $format=NULL);
        
            if($result == true){
                echo "<script>alert('Contact Details Captured Succesfully');</script>";
            }else{
                echo "<script>alert('Unable to Register');</script>";
            }
        }
    }
}

if (class_exists('ContactReg')){
    $contactRegInstance = new ContactReg();
}

//activation
register_activation_hook(__FILE__, array($contactRegInstance, 'activate'));

//deactivate
register_deactivation_hook(__FILE__, array($contactRegInstance, 'deactivate'));
