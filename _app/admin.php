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
            header('Location: ../_admin/stud_registeration');
        }else{
            echo 'UDPATE FAILED';
            header('Location: ../_admin/stud_registeration');
        }
    }

    //update status of the student
    if(isset($_POST['btnStateDeny'])){
        $email = $_POST['stud_email'];

        $sql = "UPDATE `users` SET `accepted`=FALSE WHERE `email`='".$email."'";

        if($conn->query($sql) === TRUE){
            echo 'UPDATED';
            header('Location: ../_admin/stud_registeration');
        }else{
            echo 'UDPATE FAILED';
            header('Location: ../_admin/stud_registeration');
        }
    }

    //deliver the requested cv file
    if(isset($_POST['btnCareerFile'])){
        $email = $_POST['email'];

        $sql = "SELECT `email`, `cv_name`, `cv_type`, `cv_size`, `cv_data` FROM `career` WHERE `email`='".$email."'";

        $res = $conn->query($sql);
        $row = mysqli_fetch_assoc($res);

        if($res->num_rows<=0){
            echo "DATA NOT FOUND";
        }else{
            if($row['email'] == $email){
                #echo "EMAIL FOUND";

                $type = $row['cv_type'];
                $size = $row['cv_size'];
                $name = $row['cv_name'];
                
                $content = base64_decode($row['cv_data']);
                file_put_contents($name,$content);

                #set the header for downloading the file
                header("Pragma: public"); 
                header("Expires: 0");
                header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
                header("Content-Type: $type");
                header("Content-Disposition: attachment; filename=\"".basename($name)."\";" );
                header("Content-Transfer-Encoding: binary");
                header("Content-Length", $size);
                echo $content;

                //delete file saving into server
                unlink($name);
                exit;
                
            }else{
                echo "EMAIL NOT FOUND";
                header('Location: ../_admin/admin');
            }
        }
    }

    //Delete the user
    if(isset($_POST['btnCareerDelete'])){
        $email = $_POST['email'];

        $sql = "DELETE FROM `career` WHERE `email`='".$email."'";

        if($conn->query($sql) === TRUE){
            echo "USER DELETED";
            header('Location: ../_admin/admin');
        }else{
            echo "FAILED TO DELETE";
            header('Location: ../_admin/admin');
        }
    }