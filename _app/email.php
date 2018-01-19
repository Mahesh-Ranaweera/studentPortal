<?php
    /**
     * Mail to admin about the registration
     */
    function sendMail($strEmail, &$content, $msgType){
        $to=$strEmail;
        $subject = "";

        $message = "<html><body>";

        switch($msgType){
            case "student_signup":
                $message .= "<h1>Student Registration/h1>";
                $message .= "<p>Name: ".$content['name']."</p>";
                $message .= "<p>Email: ".$content['email']."</p>";
                $message .= "<p>School: ".$content['school']."</p>";
                $message .= "<p>Field: ".$content['field']."</p>";
                $message .= "<p>Contact: ".$content['contact']."</p>";       
                $message .= "<code>Student Password: ".$content['stud_passwd']."</code>";
                $subject = "Student Registration"; 
                break;
            case "career_signup":
                $message .= "<h1>Career Application</h1>";
                $message .= "<p>Name: ".$content['name']."</p>";
                $message .= "<p>Email: ".$content['email']."</p>";
                $message .= "<p>Education Qualification: ".$content['edu_qual']."</p>";
                $message .= "<p>Professional Qualification: ".$content['prof_qual']."</p>";
                $message .= "<p>Contact: ".$content['contact']."</p>";   
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

    function recoveryEmail($strEmail, $recKey){
        $to=$strEmail;
        $subject = "Account Recovery"; 

        $message = "<html><body>";
        $message .= "<h1>Student Registration/h1>";
        $message .= "<p>Here is your recovery key: ".$recKey."</p>";
        $message .= "<p></p>";
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