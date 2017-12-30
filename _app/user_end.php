<?php
    /**
     * Global Dependencies
     */
    session_start();
    if(!$_SESSION){
        printf("<script>location.href='../index'</script>");
    }else{
        $user_email = $_SESSION['udata']['email'];
        $user_name = $_SESSION['udata']['name'];
        $user_parent = $_SESSION['udata']['parent'];
        $user_school = $_SESSION['udata']['school'];
        $user_district = $_SESSION['udata']['district'];
        $user_field = $_SESSION['udata']['field'];
        $user_contact = $_SESSION['udata']['contact'];
    }

    include '../_app/config.php';
    include '../_app/db.php';
    include '../_app/user.php';
    include '../_templates/template.php';