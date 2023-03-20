<?php
/**
 * @package  Contact-Vanced
 */
 
 namespace Inc\Base;

 class Functions{
    public function register(){
        if(file_exists(dirname(__FILE__). '/cmb2/init.php')){
            require_once dirname(__FILE__).'/cmb2/init.php';
        }elseif(file_exists(dirname(__FILE__) . '/CMB2/init.php')){
            require_once dirname(__FILE__) .'/CMB2/init.php';
        }

        add_action('cmb2_admin_init', array($this, 'contact_add_metabox'));
        add_action('cmb2_admin_init', array($this, 'yourprefix_register_user_profile_metabox'));

    }
    /**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
 */
function contact_add_metabox(){
    /**
	 * Sample metabox to demonstrate each field type included
	 */
    $cmb_demo = new_cmb2_box(array(
        'id'=> 'contact_metabox',
        'title'=> esc_html__('Contact Metabox', 'cmb2'),
        'object_types'=> array('contact'), //post type
        'contect'=> 'normal',
        'priority' => 'default',
    ));
	$cmb_demo->add_field( array(
		'name'       => esc_html__( 'Contact Message', 'cmb2' ),
		'desc'       => esc_html__( 'Contact Message', 'cmb2' ),
		'id'         => 'contact_desc',
		'type'       => 'text',
		'date_format'=> 'F j, Y',
	) );

}
/**
 * Hook in and add a metabox to add fields to the user profile pages
 */
function yourprefix_register_user_profile_metabox() {

	/**
	 * Metabox for the user profile screen
	 */
	$cmb_user = new_cmb2_box( array(
		'id'               => 'yourprefix_user_edit',
		'title'            => esc_html__( 'User Profile Metabox', 'cmb2' ), // Doesn't output for user boxes
		'object_types'     => array( 'user' ), // Tells CMB2 to use user_meta vs post_meta
		'show_names'       => true,
		'new_user_section' => 'add-new-user', // where form will show on new user page. 'add-existing-user' is only other valid option.
	) );

	$cmb_user->add_field( array(
		'name'     => esc_html__( 'Extra Info', 'cmb2' ),
		'desc'     => esc_html__( 'field description (optional)', 'cmb2' ),
		'id'       => 'yourprefix_user_extra_info',
		'type'     => 'title',
		'on_front' => false,
	) );

	$cmb_user->add_field( array(
		'name'    => esc_html__( 'Avatar', 'cmb2' ),
		'desc'    => esc_html__( 'field description (optional)', 'cmb2' ),
		'id'      => 'yourprefix_user_avatar',
		'type'    => 'file',
	) );

	$cmb_user->add_field( array(
		'name' => esc_html__( 'Facebook URL', 'cmb2' ),
		'desc' => esc_html__( 'field description (optional)', 'cmb2' ),
		'id'   => 'yourprefix_user_facebookurl',
		'type' => 'text_url',
	) );

	$cmb_user->add_field( array(
		'name' => esc_html__( 'Twitter URL', 'cmb2' ),
		'desc' => esc_html__( 'field description (optional)', 'cmb2' ),
		'id'   => 'yourprefix_user_twitterurl',
		'type' => 'text_url',
	) );

	$cmb_user->add_field( array(
		'name' => esc_html__( 'Google+ URL', 'cmb2' ),
		'desc' => esc_html__( 'field description (optional)', 'cmb2' ),
		'id'   => 'yourprefix_user_googleplusurl',
		'type' => 'text_url',
	) );

	$cmb_user->add_field( array(
		'name' => esc_html__( 'Linkedin URL', 'cmb2' ),
		'desc' => esc_html__( 'field description (optional)', 'cmb2' ),
		'id'   => 'yourprefix_user_linkedinurl',
		'type' => 'text_url',
	) );

	$cmb_user->add_field( array(
		'name' => esc_html__( 'User Field', 'cmb2' ),
		'desc' => esc_html__( 'field description (optional)', 'cmb2' ),
		'id'   => 'yourprefix_user_user_text_field',
		'type' => 'text',
	) );

}

}
