<?php 
    function get_header(){
        require 'witget/header.php';
    }

    function get_footer(){
        require 'witget/footer.php';
    }

    function get_sidebar(){
        require 'witget/sidebar.php';
    }

    function get_slider(){
        require 'witget/slider.php';
    }

    function get_search(){
        require 'witget/search_form.php';
    }

    function show_array($data){
        if(is_array($data)){
            echo "<pre>";
            print_r($data);
            echo "</pre>";
        }
    }
?>