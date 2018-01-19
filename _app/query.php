<?php
    /**
     * DB query
     */
    include 'email.php';

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
        $reckey = recCode(); //get the recovery code

        $code = codegen();
        $passwd = password_hash($code, PASSWORD_BCRYPT);
        #echo $email.$code.$fname.$lname.$parent.$school.$district.$field.$contact;

        //content array
        $content = array(
            "email" => $email,
            "name" => $fname." ".$lname,
            "school" => $school,
            "field" => $field,
            "contact" => $contact,
            "edu_qual" => "",
            "prof_qual" => "",
            "stud_passwd" => $code,
        );

        //query
        $sql = "INSERT INTO `users`(`email`, `fname`, `lname`, `parent`, `school`, `district`, `field`, `contact`, `passwd`, `rec_key`) 
                VALUES ('$email', '$fname', '$lname', '$parent', '$school', '$district', '$field', '$contact', '$passwd', '$reckey')";

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
                /**Send signup notification */
                sendMail(config('admin_email'), $content, "student_signup");
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
            #echo "USER NOT FOUND";
            $notify['type'] = 'error';
            $notify['msg'] = 'User not found';
        }else{
            if(password_verify($passw ,$row['passwd'])){
                session_start();

                $user_data = array(
                    'email' => $row['email'],
                    'type' => $row['admin_type']
                );

                $_SESSION['udata'] = $user_data;
                
                header('Location: ./_admin/admin');
            }else{
                $notify['type'] = 'error';
                $notify['msg'] = 'Enter correct password';
            }
        }
     }

     //Login into admin panel
    if(isset($_POST['btnStudLogin'])){
        $email = $_POST['stud_email'];
        $passw = $_POST['stud_password'];

        $sql = "SELECT `email`, `passwd` FROM `users` WHERE `email`='".$email."'";

        $res = $conn->query($sql);
        $row = mysqli_fetch_assoc($res);

        if($res->num_rows<=0){
            #echo "USER NOT FOUND";
            $notify['type'] = 'error';
            $notify['msg'] = 'User not found';
        }else{
            if(password_verify($passw ,$row['passwd'])){
                session_start();

                $user_data = array(
                    'email' => $row['email'],
                    'name' => $row['fname'].' '.$row['lname'],
                    'parent' => $row['parent'],
                    'school' => $row['school'],
                    'district' => $row['district'],
                    'field' => $row['field'],
                    'contact' => $row['contact'],
                );

                $_SESSION['udata'] = $user_data;
                
                header('Location: ./_user/portal');
            }else{
                $notify['type'] = 'error';
                $notify['msg'] = 'Enter correct password';
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
     
     //file upload size:lets limit it to 1MB
     $max_file_size = 1024*1000;

     //career form
     if(isset($_POST['submitCareer']) && $_FILES['upload_file']['size'] !=0){
        $fname = $_POST['strFname'];
        $lname = $_POST['strLname'];
        $edu   = $_POST['strEduQ'];
        $prof  = $_POST['strProfQ'];
        $address= $_POST['strAddress'];
        $phone = $_POST['strPhone'];
        $email = $_POST['strEmail'];

        //content array
        $content = array(
            "email" => $email,
            "name" => $fname." ".$lname,
            "school" => "",
            "field" => "",
            "contact" => $phone,
            "edu_qual" => $edu,
            "prof_qual" => $prof,
            "stud_passwd" => "",
        );

        #echo $fname.$lname.$edu.$prof.$address.$phone.$email.config('admin_email');

        //file
        $file = $_FILES['upload_file']['tmp_name'];
        $file_name = $_FILES['upload_file']['name'];
        $file_type = $_FILES['upload_file']['type'];
        $file = file_get_contents($file);
        $file = base64_encode($file);

        $f_size = $_FILES['upload_file']['size'];
        $f_tmp  = explode('.', $file_name);
        $f_ext  = end($f_tmp);

        //accepted file type
        $extArr = array('pdf', 'docx', 'doc', 'odt');
        $error = FALSE;

        #check the file type
        if(in_array($f_ext, $extArr) === FALSE){
            $error = TRUE;
        }

        #check the file size
        if($f_size <= 0 || $f_size >= $max_file_size){
            $error = TRUE;
        }

        #if no error continue
        if(!$error){
            $sql = "INSERT INTO `career`(`email`, `fname`, `lname`, `edu`, `prof`, `address`, `phone`, `cv_name`, `cv_type`, `cv_size`, `cv_data`)
                    VALUES('$email', '$fname', '$lname', '$edu', '$prof', '$address', '$phone', '$file_name', '$file_type', '$f_size', '$file')";

            if($conn->query($sql) === TRUE){
                #echo 'DONE';
                $notify['type'] = 'good';
                $notify['msg'] = 'Successfully Submit Your Form';
                /**Send career notification */
                sendMail(config('admin_email'), $content, "career_signup");
            }else{
                #echo 'FAILED';
                $notify['type'] = 'error';
                $notify['msg'] = 'Something Went Wrong, Try Again';
            }
        }else{
            #echo 'FILE ERROR';
            $notify['type'] = 'error';
            $notify['msg'] = 'File Error';
        }
        
     }


    /**
    * User account recovery for admin and students 
    */

    if(isset($_POST['btnRecover'])){
        $email = $_POST['strEmail'];
        
        $sql = "SELECT `email`, `accepted` FROM `users` WHERE `email`='".$email."'";

        $res = $conn->query($sql);
        $row = mysqli_fetch_assoc($res);

        if($res->num_rows<=0){
            #echo "USER NOT FOUND";
            $notify['type'] = 'error';
            $notify['msg'] = 'User not found';
        }else{

            //check whether the account is accepted
            if($row['accepted'] == TRUE){
                //generate and upload new rec_code
                $reckey = recCode();

                //update the recovery key
                $sql2 = "UPDATE `users` SET `rec_key`='".$reckey."' WHERE `email`='".$email."'";

                if($conn->query($sql2) === TRUE){
                    //send email

                    $notify['type'] = 'good';
                    $notify['msg'] = 'Check your email for recovery information';
                }else{
                    $notify['type'] = 'error';
                    $notify['msg'] = 'Something Went Wrong, Try Again';
                }
            }else{
                $notify['type'] = 'error';
                $notify['msg'] = 'Account Not Accepted, Contact the Admin';
            }
        }
    }