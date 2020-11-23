<?php

if(isset($_POST)){
    extract($_POST);
    $operators = array('+', '-', '*', '/', '.', '=');
    $output = '';
    switch($action){
        case 'equal':
            $last = '';
            if(strlen($old)>0) {
                $last = substr($old, -1);
            }
            if($old <> '' and !in_array($last, $operators)){
               $output = eval("return ($old);");
            } else {
                $output = $old;
            }
        break;
        case 'operation':
            $last = '';
            if(strlen($old)>0) {
                $last = substr($old, -1);
            } 
            if( in_array($last, $operators) and in_array($number, $operators) ){
                
                    $output = $old;
              
            } else if($old == '' and in_array($number, $operators ) and $number<>'.'){
                $output = '';
            } else {
                $output = $old.$number;
            }
        break;
        default: $output = $old;
    }
    echo $output;
} 
?>