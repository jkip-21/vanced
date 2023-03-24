<?php
/**
 * @package vanced-pms
 */

namespace Inc\Pages;

class CustomFunctions{

    public $template;

    public function register(){
        add_filter( 'login_redirect', array($this, 'my_login_redirect'), 10, 3);
       
    }

    
    /**
     * Redirect user after successful login.
     */
    
     function my_login_redirect( $redirect_to, $request, $user ) {
        //is there a user to check?
        if ( isset( $user->roles ) && is_array( $user->roles ) ) {
            //check for admins
            if ( in_array( 'administrator', $user->roles ) ) {
                // redirect them to the default place
                return $redirect_to;
            } else {
                return esc_url(home_url( '/dashboard'));
            }
        } else {
            return $redirect_to;
        }
    }

    function my_non_logged_redirect()
    {
        if ((is_page('dashboard') || is_page('projects1')|| is_page('employees') || is_page('view-profile') || is_page('project-users') || is_page('all-employees') || is_page('user-profile') || is_page('completed-projects') || is_page('create-projects')) && !is_user_logged_in() )
        {
            wp_redirect( home_url() );
            die();
        }
    } 

    


}