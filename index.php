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
                            <li class=''><a href='<?php echo config('nav_signup') ?>'>STUDENT</a></li>
                            <li class=''><a href='<?php echo config('nav_career') ?>'>CAREERS</a></li>
                            <li class=''><a href='<?php echo config('nav_about') ?>'>ABOUT US</a></li>
                            <li class=''><a href='#'>SIGN IN<span uk-icon='icon: sign-in'></span></a></li>

                            <!--signin-->
                            <div uk-dropdown>
                                <ul class="uk-nav uk-dropdown-nav">
                                    <li><a href="#" uk-toggle="target: #stud">STUDENT PORTAL</a></li>
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

<script>
    function success(msg){
        UIkit.notification({message: msg, status: 'success'})
    }

    function failed(msg){
        UIkit.notification({message: msg, status: 'warning'})
    }
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