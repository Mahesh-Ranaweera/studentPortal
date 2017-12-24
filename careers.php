<?php
    include './_app/dependency.php';
    include './_templates/template.php';
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
                            <li class=''><a href='#' uk-toggle="target: #admin">ADMIN</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class='dashb_section min-margin'>
            <div class='uk-card uk-card-default uk-card-body card-border-radius'>

                <div class='uk-grid-match uk-grid-small' uk-grid>
                    <div class='uk-width-expand@m'>

                        <div class='uk-card-title'>Careers</div>
                        
                        <div class='uk-margin'>
                            <form class='uk-grid-small' uk-grid>
                                <div class='uk-width-1-2@s'>
                                    <label for=''>First Name:</label>
                                    <input class='uk-input' name='first_name' type='text' placeholder=''>
                                </div>
                                <div class='uk-width-1-2@s'>
                                    <label for=''>Last Name:</label>
                                    <input class='uk-input' name='last_name' type='text' placeholder=''>
                                </div>
                                <div class='uk-width-1-1'>Education Qualification:</label>
                                    <input class='uk-input' name='strEduQ' type='text' placeholder=''>
                                </div>
                                <div class='uk-width-1-1'>
                                    <label for=''>Professional Qualification:</label>
                                    <input class='uk-input' name='strProfQ' type='text' placeholder=''>
                                </div>
                                <div class='uk-width-1-1'>
                                    <label for=''>Home Address:</label>
                                    <input class='uk-input' name='strAddress' type='text' placeholder=''>
                                </div>
                                <div class='uk-width-1-1'>
                                    <label for=''>Contact Information:</label>
                                    <input class='uk-input' name='strContact' type='text' placeholder=''>
                                </div>
                                <div class='uk-width-1-1'>
                                    <label for=''>E-Mail:</label>
                                    <input class='uk-input' name='strEmail' type='text' placeholder=''>
                                </div>

                                <div class='uk-width-1-1'>
                                    <label for=''>Upload your Resume/CV:</label>
                                    <div class='js-upload uk-placeholder uk-width-1-1'>
                                        <span uk-icon='icon: cloud-upload'></span>
                                        <span class='uk-text-middle'>Drop Files Here or</span>
                                        <div uk-form-custom>
                                            <input type='file' name='upload_file' multiple>
                                            <span class='uk-link'>browse to select</span>
                                        </div>
                                    </div>

                                    <progress id='js-progressbar' class='uk-progress' value='0' max='100' hidden></progress>
                                </div>

                                <div class='uk-margin'>
                                    <button class='uk-button uk-button-primary' name='submitCareer' type='submit'>SUBMIT</button>
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

<script>

    var bar = document.getElementById('js-progressbar');

    UIkit.upload('.js-upload', {

        url: '',
        multiple: true,

        beforeSend: function () {
            console.log('beforeSend', arguments);
        },
        beforeAll: function () {
            console.log('beforeAll', arguments);
        },
        load: function () {
            console.log('load', arguments);
        },
        error: function () {
            console.log('error', arguments);
        },
        complete: function () {
            console.log('complete', arguments);
        },

        loadStart: function (e) {
            console.log('loadStart', arguments);

            bar.removeAttribute('hidden');
            bar.max = e.total;
            bar.value = e.loaded;
        },

        progress: function (e) {
            console.log('progress', arguments);

            bar.max = e.total;
            bar.value = e.loaded;
        },

        loadEnd: function (e) {
            console.log('loadEnd', arguments);

            bar.max = e.total;
            bar.value = e.loaded;
        },

        completeAll: function () {
            console.log('completeAll', arguments);

            setTimeout(function () {
                bar.setAttribute('hidden', 'hidden');
            }, 1000);

            alert('Upload Completed');
        }

    });

</script>

<?php
    web_footer();
?>