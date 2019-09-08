<?php
$user_agent = $_SERVER[ 'HTTP_USER_AGENT' ];
if( !strstr( $user_agent, 'curl' ) ){
    $file = '404.html';
    if (file_exists($file)) {
        header( 'Content-Description: File Transfer' );
        header( 'Content-Type: text/html' );
        header( 'Expires: 0' );
        header( 'Cache-Control: must-revalidate' );
        header( 'Pragma: public' );
        header( 'Content-Length: ' . filesize( $file ) );
        readfile( $file );
        exit;
    }
} else {

include ( './php/ansi_escape_sequence.php' );

echo "
" . red_light .
"░█▀█░ █▀▀█ ░█▀█░ 
█▄▄█▄ █▄▀█ █▄▄█▄ 
░░░█░ █▄▄█ ░░░█░" . reset . " 

 Page Not Found

 ";
}
?>
