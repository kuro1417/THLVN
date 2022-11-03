<?php

    if (!function_exists('connect')) { 
        function connect() {
            $connect = mysqli_connect("localhost","root","","lvn");
        
            return $connect;
        }
    }
?>