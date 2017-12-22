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
                        <h4>Advanced Level Physics e learning</h4>
                    </div>
                    <div class='uk-width-1-2@m'>
                        <ul class='uk-subnav uk-subnav-pill'>
                            <li class=''><a href='<?php echo config('nav_home') ?>'>HOME</a></li>
                            <li class=''><a href='<?php echo config('nav_signup') ?>'>SIGN UP</a></li>
                            <li class=''><a href='<?php echo config('nav_career') ?>'>CAREERS</a></li>
                            <li class='uk-active'><a href='<?php echo config('nav_about') ?>'>ABOUT US</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class='dashb_section min-margin'>
            <div class='uk-card uk-card-default uk-card-body card-border-radius'>

                <div class='uk-grid-match uk-grid-small' uk-grid>
                    <div class='uk-width-expand@m'>

                        <div class='uk-card-title'>Contact</div>

                        <div class='uk-margin'>
                            <div class='uk-width-expand@m'>
                                <p><b>Coordinator:</b></p>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;N.P.M.Karunarathna</p>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;madhusankankarunarathna1@gmail.com</p>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;071xxxxxxxxx</p>
                            </div>
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