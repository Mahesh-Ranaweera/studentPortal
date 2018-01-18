<?php
    /**
     * Mail to admin about the registration
     */
    function sendMail($strEmail, $strContent, $subject, $msgType){
        $to=$strEmail;
        $subject = "";

        $message = "<html><body>";

        switch($msgType){
            case "student_signup":
                $message .= "<h1>Student Registration/h1>";
                $message .= "<p>Name: </p>";
                $message .= "<p>Email: </p>";
                $message .= "<p>School: </p>";
                $message .= "<p>Field: </p>";
                $message .= "<p>Contact: </p>";       
                $subject = "Student Registration"; 
                break;
            case "career_signup":
                $message .= "<h1>Career Application</h1>";
                $message .= "<p>Name: </p>";
                $message .= "<p>Email: </p>";
                $message .= "<p>Education Qualification: </p>";
                $message .= "<p>Professional Qualification: </p>";
                $message .= "<p>Contact: </p>";   
                $subject = "Career Application";
                break;
            default:
                $message .= "";
                $subject = "";
        }
        
        $message .= "</body></html>";

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