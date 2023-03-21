<?php 

function generate_psw($length, $chars) {
    
    $psw = [];
    $psw_length = strlen($chars) - 1;
    for($i = 0; $i < $length; $i++) {
         $rand = rand(0, $psw_length);
         $psw[] = $chars[$rand];
         
     }
    
    return $psw;
}

?>