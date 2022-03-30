<?php
    $email = $_POST['email'];
    $messege = $_POST['textarea'];

    require '../phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';

    $mail->Username='mlkxqq@gmail.com';
    $mail->Password='mlkB1998';

    $mail->setFrom('mlkxqq@gmail.com');
    $mail->addAddress($email);
    $mail->addReplyTo('mlkxqq@gmail.com');
    $mail->isHTML(true);
    $mail->Subject='Car Pollution';
    $mail->Body=$messege;

    if(!$mail->send()){
        echo "الرسالة لم ترسل";
    }
    else {
        echo "تم ارسال الرسالة";
    }

?>