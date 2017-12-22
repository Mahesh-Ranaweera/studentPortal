<?php
    /**
     * Store site global var and settings
     */
    function config($key = ''){
        $config = [
            'site_header' => 'A/L Physics e Learn',
            'site' => 'Advanced Level Physics e learning',
            'nav_home' => '/',
            'nav_signup' => '/studentPortal/signup',
            'nav_career' => '/studentPortal/careers',
            'nav_about' => '/studentPortal/about',
        ];

        return isset($config[$key]) ? $config[$key] : null;
    }