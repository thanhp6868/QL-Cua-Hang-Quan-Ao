<?php
    function chuyendoi($string) {
    if(!$string) return false;
    $utf8 = array(
            'a'=>'�|�|?|�|?|a|?|?|?|?|?|�|?|?|?|?|?|�|�|?|�|?|A|?|?|?|?|?|�|?|?|?|?|?',
            'd'=>'d|�',
            'e'=>'�|�|?|?|?|�|?|?|?|?|?|�|�|?|?|?|�|?|?|?|?|?',
            'i'=>'�|�|?|i|?|�|�|?|I|?',
            'o'=>'�|�|?|�|?|�|?|?|?|?|?|o|?|?|?|?|?|�|�|?|�|?|�|?|?|?|?|?|O|?|?|?|?|?',
            'u'=>'�|�|?|u|?|u|?|?|?|?|?|�|�|?|U|?|U|?|?|?|?|?',
            'y'=>'�|?|?|?|?|�|?|?|?|?',
            );
    foreach($utf8 as $ascii=>$uni) $string = preg_replace("/($uni)/i",$ascii,$string);
    $string = utf8Url($string);
    return $string;
}

function utf8Url($string){        
    $string = strtolower($string);
    $string = str_replace( "�", "ss", $string);
    $string = str_replace( "%", "", $string);
    $string = preg_replace("/[^_a-zA-Z0-9 -]/", "",$string);
    $string = str_replace(array('%20', ' '), '-', $string);
    $string = str_replace("----","-",$string);
    $string = str_replace("---","-",$string);
    $string = str_replace("--","-",$string);
    return $string;
}  
?>