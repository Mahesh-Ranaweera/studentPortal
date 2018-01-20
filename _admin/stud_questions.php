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
                        <table class="uk-table uk-table-middle uk-table-divider">
                            <thead>
                                <tr>
                                    <th class="uk-width-small">#</th>
                                    <th>Question</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                    $count = 1;
                                    $check = 'null';
                                    $sql = "SELECT * FROM `question` WHERE `answer`='".$check."' ORDER BY `create_date`";
                            
                                    $res = $conn->query($sql);
                            
                                    if($res->num_rows<=0){
                                        echo 'NO DATA';
                                    }else{
                                        $modal = '';

                                        while($row=mysqli_fetch_array($res)){
                                            $id = $row['id'];
                                            $question = $row['question'];
                                            $answer = $row['answer'];

                                            $path = config('ckeditor').'/user-config.js';
                                            
                                            #idname
                                            $idname = "modal".$count;
                                            $idanswer = "ckeditor".$count;

                                            #entry
                                            $data = "<tr><td>$count</td>
                                                     <td><a href='#' uk-toggle='target: #$idname'>Question $count</a></td></tr>";
                                            
                                            #Modal
                                            $modal .= "<div id='$idname' class='uk-modal-full' uk-modal>
                                                        <div class='uk-modal-dialog'>
                                                            <button class='uk-modal-close-full uk-close-large' type='button' uk-close onclick='modal_hide($idname)'></button>
                                                            <div class='uk-padding-large' uk-height-viewport>
                                                                <div class='uk-card-title'>Question</div>
                                                                <p>$question</p>
                                                                <hr class='uk-margin-small'></hr>
                                                                <div class='uk-card-title'>Answer</div>
                                                                <form class='uk-grid-small' method='POST'>
                                                                    <div class='uk-margin'>
                                                                        <textarea name='postAnswer' id='$idanswer' required></textarea>
                                                                        <input name='questionID' type='hidden' value='$id'/>
                                                                        <script type='text/javascript'>
                                                                            CKEDITOR.config.customConfig = '$path';
                                                                            CKEDITOR.replace('$idanswer');
                                                                        </script>
                                                                    </div>

                                                                    <div class='uk-margin'>
                                                                        <button class='uk-button uk-button-primary' name='submitAnswer' type='submit'>SUBMIT ANSWER</button>
                                                                    </div>
                                                                </form>
                                                            </div></div></div>";

                                            $count++;
                                            echo $data;
                                        }
                                        $entry_modals = $modal;
                                    }
                                ?>
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
    echo $entry_modals;
?>

<script>
    function modal_hide(modalid){
        UIkit.modal(modalid).hide();
    }
</script>

<?php
    web_footer();
?>