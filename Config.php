<?php

    if (!function_exists('connect')) { 
        function connect() {
            $connect = mysqli_connect("localhost","root","","lvn");
        
            return $connect;
        }
    }

    function form_error($lableField){
        global $error;
        if (!empty($error[$lableField])) return "<p class='error'>{$error[$lableField]} </p>";
    }

    function set_value($lableField){
        global $$lableField;
        if(!empty($$lableField)) return $$lableField;
    }

    function get_data_cookie($cookie_data){
        if(!empty($_COOKIE[$cookie_data]))
        return $_COOKIE[$cookie_data];
    }
?>