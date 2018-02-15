<?php
    /**
     * This file is used to encrypt/decrypt the given text using the appkey
     * @param string $method: define encryption and decryption
     * @param string $content: parse the string to be encrypted or decrypted
     */
    require 'config.php'

    function encrypt_decrypt($method, $content){
        $out_string = null;

        $enc_method = "AES-256-CBC";
        $secret     = config('app_KEY');
        $secret_iv  = config('app_IV');

        $key = hash('sha256', $secret);
        $iv  = substr(hash('sha256', $secret_iv), 0, 16);

        if($method == 'ENC'){
            $out_string = base64_encode(openssl_encrypt($content, $enc_method, $key, 0, $iv));
        }else if ($method == 'DEC'){
            $out_string = openssl_decrypt(base64_decode($content), $enc_method, $key, 0, $iv);
        }

        return $out_string;
    }