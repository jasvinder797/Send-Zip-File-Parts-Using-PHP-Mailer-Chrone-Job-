<?php
    //variables of php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    require 'config.php';

    $gmail_email = $EMAIL; // gmail email address
    $gmail_pass = $PASSWORD; // gmail password

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    // read file from directory
    $dir    = 'C:/Users/Perfect/Desktop/chrone job/File Splitter/splits/';
    // asending
    //$files1 = scandir($dir); 
    //print_r($files1);
    //descending
    $files2 = scandir($dir, 1);
    for($i=0;$i<sizeof($files2);$i++){
        $mail = new PHPMailer(); // create a new object
        $mail->IsSMTP(); // enable SMTP
        $mail->SMTPDebug = false; // debugging: 1 = errors and messages, 2 = messages only
        $mail->SMTPAuth = true; // authentication enabled
        $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465; // or 587
        $mail->IsHTML(true);
        $mail->Username = $gmail_email;
        $mail->Password = $gmail_pass;
        $mail->SetFrom($gmail_email);
        $mail->Subject = "Contact Us";
        $mail->AddAddress("email address to whom send the parts");
        $mail->Body = "File part ".$files2[$i] ;
        $mail->addAttachment($dir."/".$files2[$i]);
        if(!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } 
        else {
                echo "Message has been sent ".$i;
        }
        //break;
        unlink($dir."/".$files2[$i]);
    }
    echo "Done! ".br();
    exit;
    function br() {
        return (!empty($_SERVER['SERVER_SOFTWARE']))?'<br>':"\n";
    }
?> 
