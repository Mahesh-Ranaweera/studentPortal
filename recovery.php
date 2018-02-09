<?php
    include './_app/front_end.php';
    web_header(config('site_header'));
?>

<div class='uk-container'>
    <div class="floating-container">
        <div class="uk-card uk-card-default uk-card-body card-border-radius">
            <div class='uk-card-title'>Sign Up</div>

            <div class='uk-margin'>
                <form class='uk-grid-small' method='POST' uk-grid>
                    <div class='uk-width-1-1'>
                        <label for=''>Email:</label>
                        <input class='uk-input' name='strEmail' type='email' placeholder='' required>
                    </div>

                    <div class="uk-margin">
                        <div class="uk-text-right">
                            <button class="uk-button uk-button-primary" name="btnRecover" type="submit">Recover</button>
                            <a href="/">
                                <button class="uk-button uk-button-default" type="button">HOME</button>
                            </a>
                        </div>
                    </div>
                </form>
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