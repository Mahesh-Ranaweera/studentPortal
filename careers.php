<?php
    include './_app/render.php';
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
                            <li class=''><a href='<?php echo config('nav_signup') ?>'>SIGN UP</a></li>
                            <li class='uk-active'><a href='<?php echo config('nav_career') ?>'>CAREERS</a></li>
                            <li class=''><a href='<?php echo config('nav_about') ?>'>ABOUT US</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class='dashb_section min-margin'>
            <div class='uk-card uk-card-default uk-card-body card-border-radius'>

                <div class='uk-grid-match uk-grid-small' uk-grid>
                    <div class='uk-width-expand@m'>
                        <div class="uk-highlight">
                            <p><b>Only 100 Rs for Registration. You can find 100 solutions  500 rs per month.  Ez cash your money for confirm Registration to 071xxxxxxxx</b></p>
                        </div>

                        <div class='uk-card-title'>Sign Up</div>
                        
                        <div class='uk-margin'>
                            <form class="uk-grid-small" uk-grid>
                                <div class="uk-width-1-2@s">
                                    <label for="">First Name:</label>
                                    <input class="uk-input" name='first_name' type="text" placeholder="">
                                </div>
                                <div class="uk-width-1-2@s">
                                    <label for="">Last Name:</label>
                                    <input class="uk-input" name='last_name' type="text" placeholder="">
                                </div>
                                <div class="uk-width-1-1">Education Qualification:</label>
                                    <input class="uk-input" name='strParent' type="text" placeholder="">
                                </div>
                                <div class="uk-width-1-1">
                                    <label for="">Professional Qualification:</label>
                                    <input class="uk-input" name='strSchool' type="text" placeholder="">
                                </div>
                                <div class="uk-width-1-1">
                                    <label for="">Home Address:</label>
                                    <input class="uk-input" name='strDistrict' type="text" placeholder="">
                                </div>
                                <div class="uk-width-1-1">
                                    <label for="">Contact Information:</label>
                                    <input class="uk-input" name='strField' type="text" placeholder="">
                                </div>
                                <div class="uk-width-1-1">
                                    <label for="">E-Mail:</label>
                                    <input class="uk-input" name='strContact' type="text" placeholder="">
                                </div>

                                <div class='uk-margin'>
                                    <button class='uk-button uk-button-primary' type='submit'>SIGN UP</button>
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

<?php
    web_footer();
?>