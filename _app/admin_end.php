<?php
    /**
     * Global Dependencies
     */
    session_start();
    include 'config.php';
    include 'user.php';
    include 'db.php';
    include 'notifier.php';
    include 'query.php';
    include 'admin.php';
    include '../_templates/template.php';

    if(!$_SESSION){
        printf("<script>location.href='../index'</script>");
    }
    
    