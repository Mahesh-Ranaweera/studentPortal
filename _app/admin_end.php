<?php
    /**
     * Global Dependencies
     */
    session_start();
    include '../_app/config.php';
    include '../_app/db.php';
    include '../_app/admin.php';
    include '../_app/email.php';
    include '../_templates/template.php';

    if(!$_SESSION){
        printf("<script>location.href='../index'</script>");
    }
    
    