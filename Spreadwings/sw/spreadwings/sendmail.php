<?php
date_default_timezone_set('Asia/Calcutta');
require("class.phpmailer.php");

$message_body = 'INQUIRY has been submitted by  <strong> </strong>. <br />Information is detailed below :<br />';

    $Mail = new PHPMailer();
    
    try {
            $Mail->IsSendmail(); // Use SMTP
            $Mail->Host        = "smtp.gmail.com"; // Sets SMTP server
            $Mail->SMTPDebug   = 3; // 2 to enable SMTP debug information
            $Mail->SMTPAuth    = true; // enable SMTP authentication
            $Mail->SMTPSecure  = "tls"; //Secure conection
            $Mail->Port        = 587; // set the SMTP port
            $Mail->Username    = 'dummykonakart@gmail.com'; // SMTP account username
            $Mail->Password    = 'dummydum'; // SMTP account password
            $Mail->Priority    = 1; // Highest priority - Email priority (1 = High, 3 = Normal, 5 = low)
            $Mail->XMailer     = 'Eastern Support';
            $Mail->CharSet     = 'UTF-8';
            $Mail->Encoding    = '8bit';
            $Mail->Subject     = 'Eastern Techno Solutions - Inquiry';
            $Mail->ContentType = 'text/html; charset=utf-8\r\n';
            $Mail->From        = 'dummykonakart@gmail.com';
            $Mail->FromName    = 'Eastern Techno Solutions - Admin';
            $Mail->WordWrap    = 900; // RFC 2822 Compliant for Max 998 characters per line
            $Mail->AddReplyTo('contact@easternts.com');
            $Mail->AddAddress('contact@easternts.com');
            $Mail->isHTML( TRUE );
            $Mail->Body    = $message_body;
            $Mail->Send();
            $Mail->SmtpClose();
            $Mail->Send();
           // echo '<script>location.href="thankyou/";</script>';
                    
    } catch (phpmailerException $e) {
		echo $e;
       // echo '<script>location.href="thankyou/";</script>';
        
    } catch (Exception $e) {
		echo $e;
      //  echo '<script>location.href="thankyou/";</script>';
    }

?>
