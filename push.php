<?php
require_once __DIR__ . '/vendor/autoload.php';


function Push($push_type,$push_data)
{
    $ch = curl_init ();
    curl_setopt ( $ch, CURLOPT_URL, "http://127.0.0.1:9191?type=".$push_type."&data=".$push_data );
    curl_setopt ( $ch, CURLOPT_POST, 1 );
    curl_setopt ( $ch, CURLOPT_HEADER, 0 );
    curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
    curl_setopt ( $ch, CURLOPT_POSTFIELDS, $post_data );
    $return = curl_exec ( $ch );
    curl_close ( $ch );
//    var_export($return);
}