<?php
    /**
     * Store site global var and settings
     */
    function config($key = ''){
        $config = [
            'site' => 'Site Name',
            'adminportal' => '../_admin',
            'userportal' => '../_dashb',
            'menu' => [
                'home' => 'HOME',
                'signup' => 'SIGNUP',
                'signin' => 'SIGNIN',
                'careers'=> 'CAREERS',
                'about' => 'ABOUT',
            ]
        ];

        return isset($config[$key]) ? $config[$key] : null;
    }