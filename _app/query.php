<?php
    /**
     * DB query
     */

     //insert user to db
    if(isset($_POST['submitSignup'])){
        $email = $_POST['strEmail'];
        $fname = $_POST['strFname'];
        $lname = $_POST['strLname'];
        $parent = $_POST['strParent'];
        $school = $_POST['strSchool'];
        $district = $_POST['strDistrict'];
        $field = $_POST['strField'];
        $contact = $_POST['strContact'];

        $passwd = codegen();

        $sql = "INSERT INTO `users`(`email`, `fname`, `lname`, `parent`, `school`, `district`, `field`, `contact`, `passwd`) 
                VALUES ('$email', '$fname', '$lname', '$parent', '$school', '$district', '$field', '$contact', '$passwd')";
        
        //echo $sql;

        $checkdb = "SELECT `email` FROM `users` WHERE `email`='".$email."'";
        //check wether users is already registered
        $res = $conn->query($checkdb);
        $row = mysqli_fetch_assoc($res);

        if($res->num_rows <= 0){
            echo 'USER NOT FOUND';

            if($conn->query($sql) === TRUE){
                echo "DONE";
                printf("<script>success()</script>");
            }else{
                printf("<script>failed()</script>");
            }
        }else{
            echo 'USER ALREADY REGISTERED';
        }
     }
    

    //Login into admin panel
     if(isset($_POST['btnAdminLogin'])){
        $email = $_POST['admin_email'];
        $passw = $_POST['admin_password'];

        
     }