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
            'admin' => 'ADMIN PORTAL',
            'admin_home' => '/studentPortal/_admin/admin',
            'admin_quest' => '/studentPortal/_admin/stud_questions',
            'admin_regist' => '/studentPortal/_admin/stud_registeration',
            'signout' => '/studentPortal/_app/signout',
            'user' => 'USER PORTAL',
            'user_home' => '/studentPortal/portal',
            'ckeditor' => '/studentPortal/_public/ckeditor',
            'passwdlen' => 8,
            'admin_email' => 'testadmin@gmail.com',
            'app_KEY' => 'c947370ae60acd65f6d073cb3dc84d4c',
            'app_IV' => '22553355'
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

    //uniqueID generator
    function uniqueID(){
        $len = 6;
        $char = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charLen = strlen($char);
        $ranStr = '';
        for ($i = 0; $i < $len; $i++) {
            $ranStr .= $char[rand(0, $charLen - 1)];
        }
        $ranStr = $ranStr.time();
        return $ranStr;
    }

    //generate recovery key
    function recCode(){
        $len = 6;
        $char = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charLen = strlen($char);
        $ranStr = '';
        for ($i = 0; $i < $len; $i++) {
            $ranStr .= $char[rand(0, $charLen - 1)];
        }
        return $ranStr;
    }