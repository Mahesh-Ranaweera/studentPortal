<?php
    include '../_app/admin_end.php';
    web_header(config('site_header'));
?>

<div class='uk-container'>
    <div class='container-wrapper'>

        <div class='dashb_section min-margin'>
            <div class='uk-card uk-card-default uk-card-body card-border-radius'>
                <div class='uk-grid-match uk-grid-small uk-text-center' uk-grid>
                    <div class='uk-width-1-2@m'>
                        <h4><?php echo config('admin'); ?></h4>
                    </div>
                    <div class='uk-width-1-2@m'>
                        <ul class='uk-subnav uk-subnav-pill'>
                            <li class=''><a href='<?php echo config('admin_home') ?>'>ADMIN</a></li>
                            <li class='uk-active'><a href='<?php echo config('admin_quest') ?>'>QUESTIONS</a></li>
                            <li class=''><a href='<?php echo config('admin_regist') ?>'>REGISTRATION</a></li>
                            <li class=''><a href='<?php echo config('signout') ?>'>SIGN OUT<span uk-icon='icon: sign-out'></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class='dashb_section min-margin'>
            <div class='uk-card uk-card-default uk-card-body card-border-radius'>

                <div class='uk-grid-match uk-grid-small' uk-grid>
                    <div class='uk-width-expand@m'>
                        <div class='uk-card-title'>Student Questions</div>
                        
                        <div class='uk-margin'>
                            <div class='user_tab'>
                                <p>Info</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
</div>


<?php
    web_footer();
?>