<?php
    /**
     * Mail to admin about the registration
     */
    function mailAdmin($strEmail, strContent){
        $to=$strEmail;

        $message = "<html><body>";
        $message .= "<h1>$strContent</h1>";
        $message .= "</body></html>";

        $subject = "Student Registration";

        $headers = "Content-Type: text/html; charset=ISO-8859-1\r\n";
        $headers .= "From: StudentPortal <studentportal.com>\r\n";
        $headers .= "Reply-To: StudentPortal: studentportal@mail.com";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();
        
        if(mail($to, $subject, $message, $headers)){
            return 1;
        }else{
            return 0;
        }
    }