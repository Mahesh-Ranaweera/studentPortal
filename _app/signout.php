<?php
    /**
     * User signout
     */
    session_start();

    if(session_destroy()){
        header("location: ../index");
    }