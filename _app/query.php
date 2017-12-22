<?php
    /**
     * DB query
     */

     //insert user to db
     if(isset($_POST['submitSignup'])){
        $fname = $_POST['strFname'];
        $lname = $_POST['strLname'];
        $parent = $_POST['strParent'];
        $school = $_POST['strSchool'];
        $district = $_POST['strDistrict'];
        $field = $_POST['strField'];
        $contact = $_POST['strContact'];

        echo $fname.$lname.$parent.$school.$district.$field.$contact;

        $sql = 'INSERT INTO `USERS`(`fname`, `lname`, `parent`, `school`, `district`, `field`, `contact`)
                VALUES ($fname, $lname, $parent, $school, $district, $field, $field, $contact)';

        if($conn->query($sql) === TRUE){
            echo "DONE";
        }else{
            echo "FAILED";
        }
        
     }
    