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
                                    <textarea name="postQuestion" id="postQuestion" required></textarea>
                                    <script type="text/javascript">
                                        CKEDITOR.config.customConfig = '<?php echo config('ckeditor'); ?>/user-config.js';
                                        CKEDITOR.replace('postQuestion');
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
                                    <th>Manage</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                    $count = 1;
                                    $sql = "SELECT * FROM `question` WHERE `email`='".$user_email."' ORDER BY `create_date`";
                            
                                    $res = $conn->query($sql);
                            
                                    if($res->num_rows<=0){
                                        echo 'NO DATA';
                                    }else{
                                        $modal = '';

                                        while($row=mysqli_fetch_array($res)){
                                            $id = $row['id'];
                                            $question = $row['question'];
                                            $answer = $row['answer'];
                                            
                                            #idname
                                            $idname = "modal".$count;

                                            #entry
                                            $data = "<tr><td>$count</td>
                                                     <td><a href='#' uk-toggle='target: #$idname'>Question $count";
                                            
                                            if($answer == 'null'){
                                                $data .= "_(NOT ANSWERED)</a></td>";    
                                            }else{
                                                $data .= "_<b>(ANSWERED)</b></a></td>";
                                            }

                                            if($answer == 'null'){
                                                $data .= "<td>DELETE</td>";    
                                            }

                                            $data .= "</tr>";
                            
                                            #Modal
                                            $modal .= "<div id='$idname' class='uk-modal-full' uk-modal>
                                                        <div class='uk-modal-dialog'>
                                                            <button class='uk-modal-close-full uk-close-large' type='button' uk-close onclick='modal_hide($idname)'></button>
                                                            <div class='uk-padding-large' uk-height-viewport>
                                                                <div class='uk-card-title'>Question</div>
                                                                <p>$question</p>
                                                                <hr class='uk-margin-small'></hr>
                                                                <div class='uk-card-title'>Answer</div>
                                                                <p>$answer</p>
                                                            </div>
                                                        </div>
                                                    </div>";

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