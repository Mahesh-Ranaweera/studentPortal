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
            'passwdlen' => 8,
        ];

        return isset($config[$key]) ? $config[$key] : null;
    }

    //generate the password for user
    function codegen(){
        $len = config('passwdlen');
        $char = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charLen = strlen($char);
        $ranStr = '';
        for ($i = 0; $i < $len; $i++) {
            $ranStr .= $char[rand(0, $charLen - 1)];
        }
        return $ranStr;
    }