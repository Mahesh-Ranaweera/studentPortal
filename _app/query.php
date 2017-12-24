<?php
    /**
     * DB query
     */

     //insert user to db
    if(isset($_POST['submitSignup'])){
        $email = strtolower($_POST['strEmail']);
        $fname = $_POST['strFname'];
        $lname = $_POST['strLname'];
        $parent = $_POST['strParent'];
        $school = $_POST['strSchool'];
        $district = $_POST['strDistrict'];
        $field = $_POST['strField'];
        $contact = $_POST['strContact'];

        $passwd = password_hash(codegen(), PASSWORD_BCRYPT);

        //query
        $sql = "INSERT INTO `users`(`email`, `fname`, `lname`, `parent`, `school`, `district`, `field`, `contact`, `passwd`) 
                VALUES ('$email', '$fname', '$lname', '$parent', '$school', '$district', '$field', '$contact', '$passwd')";

        $checkdb = "SELECT `email` FROM `users` WHERE `email`='".$email."'";
        //check whether users is already registered
        $res = $conn->query($checkdb);
        $row = mysqli_fetch_assoc($res);

        if($res->num_rows <= 0){
            #echo 'USER NOT FOUND';

            if($conn->query($sql) === TRUE){
                #echo "DONE";
                $notify['type'] = 'good';
                $notify['msg'] = 'Successfully Registered';
            }else{
                $notify['type'] = 'error';
                $notify['msg'] = 'Something Went Wrong, Try Again';
            }
        }else{
            #echo 'USER ALREADY REGISTERED';
            $notify['type'] = 'good';
            $notify['msg'] = 'Already Registered';
        }
     }

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

                $user_data = array(
                    'email' => $row['email'],
                    'type' => $row['admin_type']
                );

                $_SESSION['udata'] = $user_data;
                
                header('Location: ./_admin/admin');
            }
        }
     }

     //admin register
     if(isset($_POST['btnAdmin'])){
        $email = strtolower($_POST['email']);
        $passw = password_hash($_POST['passw'], PASSWORD_BCRYPT);

        $sql = "INSERT INTO `admin`(`email`, `admin_type`, `passwd`)
                VALUES ('$email', '0', '$passw')";

        if($conn->query($sql) === TRUE){
            echo "REGISTERED";
        }else{
            echo "FAILED REGISTERED";
        }
        
     }