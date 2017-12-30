<?php
    include '../_app/user_end.php';
    web_header(config('site_header'));

    $entry_modals = '';
?>

<div class='uk-container'>
    <div class='container-wrapper'>

        <div class='dashb_section min-margin'>
            <div class='uk-card uk-card-default uk-card-body card-border-radius'>
                <div class='uk-grid-match uk-grid-small uk-text-center' uk-grid>
                    <div class='uk-width-1-2@m'>
                        <h4><?php echo config('user'); ?></h4>
                    </div>
                    <div class='uk-width-1-2@m'>
                        <ul class='uk-subnav uk-subnav-pill'>
                            <li class='uk-active'><a href='<?php echo config('user_home') ?>'>HOME</a></li>
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
                        <div class='uk-card-title'>Ask Question</div>
                        
                        <div class='uk-margin'>
                            <form class='uk-grid-small' method='POST'>
                                <div class='uk-margin'>
                                    <textarea name="eventCont" id="eventCont" required></textarea>
                                    <script type="text/javascript">
                                        CKEDITOR.config.customConfig = '<?php echo config('ckeditor'); ?>/user-config.js';
                                        CKEDITOR.replace('eventCont');
                                    </script>
                                </div>

                                <div class='uk-margin'>
                                    <button class='uk-button uk-button-primary' name='submitQuestion' type='submit'>SUBMIT QUESTION</button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>

        <div class='dashb_section min-margin'>
            <div class='uk-card uk-card-default uk-card-body card-border-radius'>

                <div class='uk-grid-match uk-grid-small' uk-grid>
                    <div class='uk-width-expand@m'>
                        <div class='uk-card-title'>Questions and Answers</div>
                        
                        <div class='uk-margin'>
                        <table class="uk-table uk-table-middle uk-table-divider">
                            <thead>
                                <tr>
                                    <th class="uk-width-small">#</th>
                                    <th>Question</th>
                                    <th>Answer</th>
                                </tr>
                            </thead>
                            <tbody>

                                
                            </tbody>
                            </table>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<?php   
    #echo $entry_modals;
?>

<script>
    function modal_hide(modalid){
        UIkit.modal(modalid).hide();
    }
</script>

<?php
    web_footer();
?>