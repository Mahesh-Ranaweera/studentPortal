<?php
    /**
     * Admin query
     */

    //Login into admin panel
    if(isset($_POST['btnAdminLogin'])){
        $email = $_POST['admin_email'];
        $passw = $_POST['admin_password'];

        $sql = "SELECT `email`, `passwd` FROM `admin` WHERE `email`='".$email."'";

        $res = $conn->query($sql);
        $row = mysqli_fetch_assoc($res);

        if($res->num_rows<=0){
            echo "USER NOT FOUND";
        }else{
            if(password_verify($passw ,$row['passwd'])){
                session_start();
                header('Location: ./_admin/admin');
            }
        }
     }