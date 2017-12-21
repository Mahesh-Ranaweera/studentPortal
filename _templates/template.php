<?php

    function web_header($webtitle){
        echo "<!DOCTYPE html>
                <html lang='en'>
                <head>
                <title>$webtitle</title>
                <meta name='viewport' content ='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no'>
                <link rel='stylesheet' type='text/css' href='./_public/uikit/css/uikit.min.css'>
                <link rel='stylesheet' type='text/css' href='./_public/css/main.css'>

                <script src='https://code.jquery.com/jquery-3.1.1.min.js' integrity='sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=', crossorigin='anonymous'></script>
                <script src='./_public/uikit/js/uikit.min.js'></script>
        
                <!--favicon-->
                </head>";
    } 

    function web_footer(){
        echo "</html>";
    }