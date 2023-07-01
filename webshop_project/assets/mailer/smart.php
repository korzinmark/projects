<?php 

$choosen_size = $_POST['choosen_size'];
$name = $_POST['name'];
$email = $_POST['email'];
$code = $_POST['code'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

// $mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.bonebreakershop.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'info@bonebreakershop.com';                 // Наш логин
$mail->Password = 'zE1hT4fX1i';                           // Наш пароль от ящика
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
 
$mail->setFrom('info@bonebreakershop.com', 'Bone Breaker');   // От кого письмо 
$mail->addAddress('mark.korzin@gmail.com');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Пользователь заказал товар';
$mail->Body    = '
		Пользователь оставил данные при заказе товара <br> 
	Выбранный размер: ' . $choosen_size . ' <br>
	Имя покупателя: ' . $name . '<br>
	E-mail: ' . $email . '<br>
	Код товара: ' . $code . ''; 

if(!$mail->send()) {
    return false;
} else {
    return true;
}

?>