<?php
    /**
     * Admin query
     */

    //update status of the student
    if(isset($_POST['btnStateAccept'])){
        $email = $_POST['stud_email'];

        $sql = "UPDATE `users` SET `accepted`=TRUE WHERE `email`='".$email."'";

        if($conn->query($sql) === TRUE){
            echo 'UPDATED';
            header('Location: ../_admin/stud_registeration?msg=added');
        }else{
            echo 'UDPATE FAILED';
            header('Location: ../_admin/stud_registeration?msg=error');
        }
    }

    //update status of the student
    if(isset($_POST['btnStateDeny'])){
        $email = $_POST['stud_email'];

        $sql = "UPDATE `users` SET `accepted`=FALSE WHERE `email`='".$email."'";

        if($conn->query($sql) === TRUE){
            echo 'UPDATED';
            header('Location: ../_admin/stud_registeration?msg=added');
        }else{
            echo 'UDPATE FAILED';
            header('Location: ../_admin/stud_registeration?msg=error');
        }
    }