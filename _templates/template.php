<?php

    function web_header($webtitle){
        echo "<!DOCTYPE html>
                <html lang='en'>
                <head>
                <title>$webtitle</title>
                <meta name='viewport' content ='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no'>
                <link rel='stylesheet' type='text/css' href='/studentPortal/_public/uikit/css/uikit.min.css'>
                <link rel='stylesheet' type='text/css' href='/studentPortal/_public/css/main.css'>

                <script src='https://code.jquery.com/jquery-3.1.1.min.js' integrity='sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=', crossorigin='anonymous'></script>
                <script src='/studentPortal/_public/js/jquery.maskedinput.min.js'></script>
                <script src='/studentPortal/_public/uikit/js/uikit.min.js'></script>
                <script src='/studentPortal/_public/uikit/js/uikit-icons.min.js'></script>
        
                <!--favicon-->
                </head><body>";
    } 

    function web_footer(){
        echo "
        <!-- Admin Login Modal -->
        <div id='admin' uk-modal>
            <div class='uk-modal-dialog uk-modal-body'>
                <div class='uk-card-title'>Admin Login</div>
        
                <form class='uk-grid-small' method='POST' uk-grid>
                    <div class='uk-width-1-1'>
                        <label for=''>Admin Email:</label>
                        <input class='uk-input' name='admin_email' type='email' placeholder='' required>
                    </div>
                    <div class='uk-width-1-1'>
                        <label for=''>Password:</label>
                        <input class='uk-input' name='admin_password' type='password' placeholder='' required>
                    </div>
                    <div class='uk-width-1-1'>
                        <a href='#'>Forgot my password</a>
                    </div>
                    <div class='uk-margin'>
                        <p class='uk-text-right'>
                            <button class='uk-button uk-button-primary' name='btnAdminLogin' type='submit'>SIGN IN</button>
                            <button class='uk-button uk-button-default uk-modal-close' type='button'>Cancel</button>
                        </p>
                    </div>
                </form>
            </div>
        </div>
        
        <!-- Student Login Modal -->
        <div id='stud' uk-modal>
            <div class='uk-modal-dialog uk-modal-body'>
                <div class='uk-card-title'>Student Login</div>
        
                <form class='uk-grid-small' method='POST' uk-grid>
                    <div class='uk-width-1-1'>
                        <label for=''>Student Email:</label>
                        <input class='uk-input' name='stud_email' type='email' placeholder='' required>
                    </div>
                    <div class='uk-width-1-1'>
                        <label for=''>Password:</label>
                        <input class='uk-input' name='stud_password' type='password' placeholder='' required>
                    </div>
                    <div class='uk-width-1-1'>
                        <a href='#'>Forgot my password</a>
                    </div>
                    <div class='uk-margin'>
                        <p class='uk-text-right'>
                            <button class='uk-button uk-button-primary' name='btnStudLogin' type='submit'>SIGN IN</button>
                            <button class='uk-button uk-button-default uk-modal-close' type='button'>Cancel</button>
                        </p>
                    </div>
                </form>
            </div>
        </div>
        
        </body></html>";
    }
