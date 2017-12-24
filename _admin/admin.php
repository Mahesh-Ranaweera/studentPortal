<?php
    include '../_app/dependency.php';
    include '../_templates/template.php';
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
                            <li class=''><a href='<?php echo config('admin_quest') ?>'>QUESTIONS</a></li>
                            <li class=''><a href='<?php echo config('admin_regist') ?>'>REGISTRATION</a></li>
                            <li class=''><a href='<?php echo config('signout') ?>'>SIGN OUT</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<?php
    web_footer();
?>