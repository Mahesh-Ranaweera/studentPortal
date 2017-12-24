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
                            <li class='uk-active'><a href='<?php echo config('nav_home') ?>'>HOME</a></li>
                            <li class=''><a href='<?php echo config('nav_signup') ?>'>SIGN UP</a></li>
                            <li class=''><a href='<?php echo config('nav_career') ?>'>CAREERS</a></li>
                            <li class=''><a href='<?php echo config('nav_about') ?>'>ABOUT US</a></li>
                            <li class=''><a href='#' uk-toggle="target: #admin">ADMIN</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class='dashb_section min-margin'>
            <div class='uk-card uk-card-default uk-card-body card-border-radius'>

                <div class='uk-grid-match uk-grid-small' uk-grid>
                    <div class='uk-width-expand@m' uk-grid>
                        <div class='uk-width-1-1'>
                            PHOTO
                        </div>
                        <div class='uk-width-1-1'>
                            <p class='web-description-txt'><b>When studying your Advanced levels you have to face lot of problems when 
                            doing question papers. So you have to find answers quickly and you will have some 
                            questions to ask from generous. Our web site serves that facility to you. Upload 
                            that kind of questions to us. We will find you the  solutions. You will able to 
                            contact with us even Sinhala also.</b></p>
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

<!-- Admin Login Modal -->
<div id="admin" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <div class='uk-card-title'>Admin Login</div>

        <form class='uk-grid-small' method='POST' uk-grid>
            <div class='uk-width-1-1'>
                <label for=''>Admin Email:</label>
                <input class='uk-input' name='admin_email' type='email' placeholder=''>
            </div>
            <div class='uk-width-1-1'>
                <label for=''>Password:</label>
                <input class='uk-input' name='admin_password' type='password' placeholder=''>
            </div>

            <div class='uk-margin'>
                <p class="uk-text-right">
                    <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                    <button class="uk-button uk-button-primary" name='btnAdminLogin' type="submit">SIGN IN</button>
                </p>
            </div>
        </form>
    </div>
</div>

<?php
    web_footer();
?>