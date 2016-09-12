<?php 

 require_once('source/include/class.phpmailer.php');
 
    $mail = new PHPMailer();
    $mail->CharSet =  "utf-8";
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->Username = "jrd120893@gmail.com";
    $mail->Password = "Dug0Ng@kAManat3e?";
    $mail->SMTPSecure = "ssl";  
    $mail->Host = "smtp.gmail.com";
    $mail->Port = "465";
 
    $mail->setFrom('jrd120893@gmail.com', 'John deGuise');
    $mail->AddAddress('to_mail@mail.com', 'receivers name');
 
    $mail->Subject  =  'using PHPMailer';
    $mail->IsHTML(true);
    $mail->Body    = 'Hi there ,
                        <br />
                        this mail was sent using PHPMailer...
                        <br />
                        cheers... :)';
  
     if($mail->Send())
     {
        echo "Message was Successfully Send :)";
     }
     else
     {
        echo "Mail Error - >".$mail->ErrorInfo;
     }
  
?>