<?php

class Find_Your_Do_Admin 
{

    private $plugin_name;
    private $version;

    public function __construct( $plugin_name, $version ) 
    {

        $this->plugin_name = $plugin_name;
        $this->version = $version;

    }

    /**
     * Register the stylesheets for the admin area.
     *
     */
    public function enqueue_styles() 
    {

        wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/find-your-do-admin.css', array(), $this->version, 'all' );

    }

    /**
     * Register the JavaScript for the admin area.
     *
     */
    public function enqueue_scripts() 
    {

        wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/find-your-do-admin.js', array( 'jquery' ), $this->version, false );

    }

}
