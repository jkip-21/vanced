<?php
/**
 * @package  Contact-Vanced
 */

namespace Inc;

final class Init{

    public static function getClasses(){
        return[
            Base\BaseController::class,
            Base\Enqueue::class,
            Page\CustomFunctions::class,
            Page\CPT::class,
            Base\Functions::class,
            Page\Roles::class,
            
        ];
    }

    public static function register_services(){
        foreach(self::getClasses() as $classes){
            $service = self::instantiate($classes);
            if(method_exists($service, 'register')){
                $service->register();
            }
        }
    }

    public static function instantiate($classes){
        $service = new $classes();
        return $service;
    }
}

add_filter( 'rest_pre_serve_request', function( $served, $result, $request, $server ) {
    if ( 'myplugin/v1' === $request->get_route() ) {
        $server->send_header( 'Content-Type', 'application/xml; charset=' . get_option( 'blog_charset' ) );
    }
    return $served;
}, 10, 4 );


