<?php 
define( 'INCLUDE_DIR', dirname( __FILE__ ) . '/app/pages/' );

$rules = array( 
    'terms-and-conditions'  => '/terms-and-conditions',
    'thank-you'             => '/thank-you',
    'about-us'              => "/about-us",
    'contact-us'            => "/contact-us",
    'packages'              => "/packages",
    'home'                  => "/"
);

$uri = rtrim( dirname($_SERVER["SCRIPT_NAME"]), '/' );
$uri = '/' . trim( str_replace( $uri, '', $_SERVER['REQUEST_URI'] ), '/' );
$uri = urldecode( $uri );

foreach ( $rules as $action => $rule ) {
    if ( preg_match( '~^'.$rule.'$~i', $uri, $params ) ) {
        /* now you know the action and parameters so you can 
         * include appropriate template file ( or proceed in some other way )
         */
        include( INCLUDE_DIR . $action . '.php' );

        // exit to avoid the 404 message 
        exit();
    }
}

// nothing is found so handle the 404 error
include( INCLUDE_DIR . 'home.php' );

?>