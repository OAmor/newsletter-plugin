<?php

include_once plugin_dir_path(__FILE__).'newsLetterWidget.php';

class newsLetter{
    public function __construct(){
        add_action('wp_enqueue_scripts',array($this,'add_scripts'));
        add_action('widgets_init',array($this,'register_widget'));
    }

    public function register_widget(){
        register_widget('newsLetterWidget');
    }

    public function add_scripts(){
        wp_enqueue_script('test-script',get_template_directory_uri().'/plugins/plugin-starter/scripts/main.js');
        wp_enqueue_style('test-style',get_template_directory_uri().'/plugins/plugin-starter/styles/main.css');
    }
}