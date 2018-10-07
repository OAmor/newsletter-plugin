<?php

/*
Plugin Name: Plugin Starter
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: A brief description of the Plugin.
Version: 1.0
Author: AMOR Oussama
Author URI: http://URI_Of_The_Plugin_Author
License: A "Slug" license name e.g. GPL2
*/

class plugin_starter{
    public function __construct(){
        include_once plugin_dir_path(__FILE__).'inc/newsLetter.php';
        new newsLetter();
    }
}

new plugin_starter();




