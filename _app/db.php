<?php
    /**
     * Connect to the database
     */
    $dbhost = 'localhost:3306';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'stud_portal';

    //create the connection
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    if($conn->connect_error){
        die('Connection Error');
    }

    //create tables
    $sql = 'CREATE DATABASE IF NOT EXISTS stud_portal';

    if($conn->query($sql) === TRUE){
        $sql2 = 'CREATE TABLE `USERS` (
                    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    fname VARCHAR(30) NOT NULL,
                    lname VARCHAR(30) NOT NULL,
                    parent VARCHAR(100) NOT NULL,
                    school VARCHAR(100) NOT NULL,
                    district VARCHAR(60) NOT NULL,
                    field VARCHAR(60) NOT NULL,
                    contact VARCHAR(60) NOT NULL,
                    reg_date TIMESTAMP
                );';

        if($conn->query($sql2) === TRUE){
            //echo "DONE";
        }
    }

    $conn->close();