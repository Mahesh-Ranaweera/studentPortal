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
                            <li class=''><a href='<?php echo config('admin_quest') ?>'>QUESTIONS</a></li>
                            <li class='uk-active'><a href='<?php echo config('admin_regist') ?>'>REGISTRATION</a></li>
                            <li class=''><a href='<?php echo config('signout') ?>'>SIGN OUT</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class='dashb_section min-margin'>
            <div class='uk-card uk-card-default uk-card-body card-border-radius'>

                <div class='uk-grid-match uk-grid-small' uk-grid>
                    <div class='uk-width-expand@m'>
                        <div class='uk-card-title'>Student Registration</div>
                        
                        <div class='uk-margin'>
                        <table class="uk-table uk-table-middle uk-table-divider">
                            <thead>
                                <tr>
                                    <th class="uk-width-small">#</th>
                                    <th>Student Name</th>
                                    <th class="uk-width-small">Accept</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $count = 1;
                                    $sql = 'SELECT * FROM `users`';
                            
                                    $res = $conn->query($sql);
                            
                                    if($res->num_rows<=0){
                                        echo 'NO DATA';
                                    }else{
                                        $modal = '';

                                        while($row=mysqli_fetch_array($res)){
                                            $stud_name = $row['fname'].' '.$row['lname'];
                                            $email = $row['email'];
                                            $parent = $row['parent'];
                                            $school = $row['school'];
                                            $district = $row['district'];
                                            $field = $row['field'];
                                            $contact = $row['contact'];
                            
                                            #idname
                                            $idname = "modal".$count;
                            
                                            #entry
                                            $data = "<tr><td>$count</td><td>
                                            <a href='#' uk-toggle='target: #$idname'>$stud_name</a></td><td>";
                                            
                                            if($row['accepted'] == TRUE){
                                                $data .="<form method='POST' action=''>
                                                            <input type='hidden' name='stud_email' value='$email' />
                                                            <button class='uk-button uk-button-default' name='btnStateDeny' type='submit'>Deny</button>
                                                        </form>";
                                            }
                            
                                            if($row['accepted'] == FALSE){
                                                $data .="<form method='POST' action=''>
                                                            <input type='hidden' name='stud_email' value='$email' />
                                                            <button class='uk-button uk-button-primary' name='btnStateAccept' type='submit'>ACCEPT</button>
                                                        </form>";
                                            }
                            
                                            $data .= "</td></tr>";
                            
                                            #Modal
                                            $modal .= "<div id='$idname' class='uk-flex-top' uk-modal>
                                                            <div class='uk-modal-dialog uk-modal-body uk-margin-auto-vertical'>
                                                                <button class'uk-modal-close-default' type='button' uk-close onclick='modal_hide($idname)'></button>
                                                                <p>Name: $stud_name</p>
                                                                <p>Parent Name: $parent</p>
                                                                <p>School: $school</p>
                                                                <p>District: $district</p>
                                                                <p>Field: $field</p>
                                                                <p>Contact: $contact</p>
                                                        </div></div>";
                                            
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