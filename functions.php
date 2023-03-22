<?php 

function generate_psw($length) {

    $chars = 'abcdefghilmnopqrstuvzxwyABCDEFGHILMNOPQRSTUVZXWY';
    $numbers = '0123456789';
    $symbols = ',.!?_-:;*#@+$"/|^';
    $chars .= strtoupper($chars);
    $chars .= $numbers;
    $chars .= $symbols;
    $psw='';
    for($i = 0; $i < $length; $i++) {
        $psw_length = strlen($chars) - 1;
        $rand = rand(0, $psw_length);
        $char = $chars[$rand];
        
        $psw .= $char;
    }
    
    return $psw;
}

?>