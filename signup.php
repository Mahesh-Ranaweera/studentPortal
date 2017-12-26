<?php
    include './_app/front_end.php';
    web_header(config('site_header'));
?>

<div class='uk-container'>
    <div class='container-wrapper'>

        <div class='dashb_section min-margin'>
            <div class='uk-card uk-card-default uk-card-body card-border-radius'>
                <div class='uk-grid-match uk-grid-small uk-text-center' uk-grid>
                    <div class='uk-width-1-2@m'>
                        <h4><?php echo config('site'); ?></h4>
                    </div>
                    <div class='uk-width-1-2@m'>
                        <ul class='uk-subnav uk-subnav-pill'>
                            <li class=''><a href='<?php echo config('nav_home') ?>'>HOME</a></li>
                            <li class='uk-active'><a href='<?php echo config('nav_signup') ?>'>STUDENT</a></li>
                            <li class=''><a href='<?php echo config('nav_career') ?>'>CAREERS</a></li>
                            <li class=''><a href='<?php echo config('nav_about') ?>'>ABOUT US</a></li>
                            <li class=''><a href='#'>ADMIN</a></li>

                            <!--signin-->
                            <div uk-dropdown>
                                <ul class="uk-nav uk-dropdown-nav">
                                    <li><a href="#">STUDENT PORTAL</a></li>
                                    <li><a href="#" uk-toggle="target: #admin">ADMIN PORTAL</a></li>
                                </ul>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class='dashb_section min-margin'>
            <div class='uk-card uk-card-default uk-card-body card-border-radius'>

                <div class='uk-grid-match uk-grid-small' uk-grid>
                    <div class='uk-width-expand@m'>
                        <div class='uk-card-title'>Sign Up</div>

                        <div class='uk-highlight'>
                            <p><b>Only 100 Rs for Registration. You can find 100 solutions  500 rs per month.  Ez cash your money for confirm Registration to 071xxxxxxxx</b></p>
                        </div>
                        
                        <div class='uk-margin'>
                            <form class='uk-grid-small' method='POST' uk-grid>
                                <div class='uk-width-1-1'>
                                    <label for=''>Email:</label>
                                    <input class='uk-input' name='strEmail' type='email' placeholder='' required>
                                </div>
                                <div class='uk-width-1-2@s'>
                                    <label for=''>First Name:</label>
                                    <input class='uk-input' name='strFname' type='text' placeholder='' required>
                                </div>
                                <div class='uk-width-1-2@s'>
                                    <label for=''>Last Name:</label>
                                    <input class='uk-input' name='strLname' type='text' placeholder='' required>
                                </div>
                                <div class='uk-width-1-1'>
                                    <label for=''>Parents Name:</label>
                                    <input class='uk-input' name='strParent' type='text' placeholder='' required>
                                </div>
                                <div class='uk-width-1-1'>
                                    <label for=''>School:</label>
                                    <input class='uk-input' name='strSchool' type='text' placeholder='' required>
                                </div>
                                <div class='uk-width-1-1'>
                                    <label for=''>District:</label>
                                    <input class='uk-input' name='strDistrict' type='text' placeholder='' required>
                                </div>
                                <div class='uk-width-1-1'>
                                    <label for=''>Field you following:</label>
                                    <input class='uk-input' name='strField' type='text' placeholder='' required>
                                </div>
                                <div class='uk-width-1-1'>
                                    <label for=''>Contact Information:</label>
                                    <input class='uk-input' id='phone' name='strContact' type='text' placeholder='' required>
                                </div>

                                <div class='uk-margin'>
                                    <button class='uk-button uk-button-primary' name='submitSignup' type='submit'>SIGN UP</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class='uk-width-1-3@m'>
                        AD
                    </div>
                </div>

                <div class='uk-grid-match uk-grid-small uk-text-center' uk-grid>
                    <div class='uk-width-expand@m'>
                        AD
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

<script>
    function success(msg){
        UIkit.notification({message: msg, status: 'success'})
    }

    function failed(msg){
        UIkit.notification({message: msg, status: 'warning'})
    }

    jQuery(function($){
        $("#phone").mask("(999) 999-9999");
    });
</script>

<?php
    $errtype = $notify['type'];
    $msg = $notify['msg'];

    $notify['type'] = '';
    $notify['msg'] = '';

    if($errtype == 'good'){
        printf("<script>success('".$msg."')</script>");
    }
    
    if($errtype == 'error'){
        printf("<script>failed('".$msg."')</script>");
    }

    web_footer();
?>