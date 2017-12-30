<?php
    include '../_app/admin_end.php';
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
                            <li class='uk-active'><a href='<?php echo config('admin_home') ?>'>ADMIN</a></li>
                            <li class=''><a href='<?php echo config('admin_quest') ?>'>QUESTIONS</a></li>
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
                        <div class='uk-card-title'>Admin Settings</div>
                        
                        <div class='uk-margin'>
                            <label for=''>Upload ADs:</label>
                            <!--ad 1 upload--> 
                            <div class='uk-width-1-1'>
                                <div class='js-upload uk-placeholder uk-width-1-1'>
                                    <div uk-form-custom>
                                        <input type='file' name='upload_file' accept='.pdf, .docx, .doc, .odt' required>
                                        <span class='uk-link'><span uk-icon='icon: cloud-upload'></span> Upload AD1</span>
                                    </div>
                                </div>

                                <progress id='js-progressbar' class='uk-progress' value='0' max='100' hidden></progress>
                            </div>


                            <!--ad 2 upload--> 
                            <div class='uk-width-1-1'>
                                <div class='js-upload uk-placeholder uk-width-1-1'>
                                    <div uk-form-custom>
                                        <input type='file' name='upload_file' accept='.pdf, .docx, .doc, .odt' required>
                                        <span class='uk-link'><span uk-icon='icon: cloud-upload'></span> Upload AD1</span>
                                    </div>
                                </div>

                                <progress id='js-progressbar' class='uk-progress' value='0' max='100' hidden></progress>
                            </div>
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>

        <div class='dashb_section min-margin'>
            <div class='uk-card uk-card-default uk-card-body card-border-radius'>

                <div class='uk-grid-match uk-grid-small' uk-grid>
                    <div class='uk-width-expand@m'>
                        <div class='uk-card-title'>Career</div>
                        
                        <div class='uk-margin'>
                        <table class="uk-table uk-table-middle uk-table-divider">
                            <thead>
                                <tr>
                                    <th class="uk-width-small">#</th>
                                    <th>Student Name</th>
                                    <th class="uk-width-small">CV link</th>
                                    <th class="uk-width-small"><span uk-icon='icon: database'></span></th>
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