<?php
/**
 * @package vanced-pms
 */

namespace Inc\Pages;

class Contact{
    function register(){
        $this->createTable();
        $this->insertDataTable();
    }

    function createTable(){
        global $wpdb;
        $contact_table = $wpdb->prefix.'contact';
        $charset_collate = $wpdb->get_charset_collate();

        $contact_details = "CREATE TABLE IF NOT EXISTS $contact_table(
            id int NOT NULL auto_increment,
            email text NOT NULL,
            message text NOT NULL,
            PRIMARY KEY (id)
        )$charset_collate;";

        require_once (ABSPATH. '/wp-admin/includes/upgrade.php');
        dbDelta($contact_details);
    }

    function insertDataTable(){
        global $wpdb;

        if(isset($_POST['send'])){
            $data = array(
                'email'     =>  sanitize_text_field( $_POST['email']),
                'message'   =>  sanitize_textarea_field($_POST['message'])
            );
        
            $contact_table = $wpdb->prefix.'contact';

            $format = array(
                '%s',
                '%s',
                '%s',
                '%s'
            );

            $result = $wpdb->insert($contact_table, $data, $format);
            if($result==true){
                echo '<script>alert("Contact Form Submitted Successfully");</script>' ;
            }else{
                echo '<script>alert("Contact Form Not Submitted");</script>' ;
            }
        }
    }
}