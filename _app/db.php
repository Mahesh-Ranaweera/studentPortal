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
        $sql2 = 'CREATE TABLE `users` (
                    email VARCHAR(100) PRIMARY KEY,
                    fname VARCHAR(100),
                    lname VARCHAR(100),
                    parent VARCHAR(100),
                    school VARCHAR(100),
                    district VARCHAR(100),
                    field VARCHAR(100),
                    contact VARCHAR(100),
                    passwd VARCHAR(100),
                    accepted BOOLEAN DEFAULT FALSE,
                    reg_date TIMESTAMP
                );';

        $sql2 .= 'CREATE TABLE `admin`(
                    email VARCHAR(100) PRIMARY KEY,
                    admin_type INT(10),
                    passwd VARCHAR(100)
                );';

        $sql2 .= 'CREATE TABLE `career`(
                    email VARCHAR(100) PRIMARY KEY,
                    fname VARCHAR(100),
                    lname VARCHAR(100),
                    edu VARCHAR(100),
                    prof VARCHAR(100),
                    address VARCHAR(200),
                    phone VARCHAR(100),
                    cv_name VARCHAR(100),
                    cv_data BLOB
                );';

        $res = mysqli_multi_query($conn, $sql2);
    }

    //$conn->close();