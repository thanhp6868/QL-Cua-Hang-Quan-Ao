<?php
    function chuyendoi($string) {
    if(!$string) return false;
    $utf8 = array(
            'a'=>'á|à|?|ã|?|a|?|?|?|?|?|â|?|?|?|?|?|Á|À|?|Ã|?|A|?|?|?|?|?|Â|?|?|?|?|?',
            'd'=>'d|Ð',
            'e'=>'é|è|?|?|?|ê|?|?|?|?|?|É|È|?|?|?|Ê|?|?|?|?|?',
            'i'=>'í|ì|?|i|?|Í|Ì|?|I|?',
            'o'=>'ó|ò|?|õ|?|ô|?|?|?|?|?|o|?|?|?|?|?|Ó|Ò|?|Õ|?|Ô|?|?|?|?|?|O|?|?|?|?|?',
            'u'=>'ú|ù|?|u|?|u|?|?|?|?|?|Ú|Ù|?|U|?|U|?|?|?|?|?',
            'y'=>'ý|?|?|?|?|Ý|?|?|?|?',
            );
    foreach($utf8 as $ascii=>$uni) $string = preg_replace("/($uni)/i",$ascii,$string);
    $string = utf8Url($string);
    return $string;
}

function utf8Url($string){        
    $string = strtolower($string);
    $string = str_replace( "ß", "ss", $string);
    $string = str_replace( "%", "", $string);
    $string = preg_replace("/[^_a-zA-Z0-9 -]/", "",$string);
    $string = str_replace(array('%20', ' '), '-', $string);
    $string = str_replace("----","-",$string);
    $string = str_replace("---","-",$string);
    $string = str_replace("--","-",$string);
    return $string;
}  
?>