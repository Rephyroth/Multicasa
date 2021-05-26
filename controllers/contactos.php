<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

class Contactos extends Controller{
    function __construct(){
        parent::__construct();
        //echo "<p>Nuevo Controlador MAin</p>";
        $this -> view -> mensaje ="";
    }
     function render(){
        //reenderiza la vista especifica
        $this -> view ->render('contactos/index');
    }

    function enviarCorreo(){
        $correo = $_POST['txtcorreo'];
        $men = $_POST['txtmensaje'];
        $mail = new PHPMailer(true);
        try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'multicasaweb@gmail.com';                     //SMTP username
    $mail->Password   = '1234qwer#';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('multicasaweb@gmail.com', 'Multicasa');
    $mail->addAddress('multicasaweb@gmail.com');               //Name is optional


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $correo;
    $mail->Body    = $men;

    $mail->send();
    $this -> view -> mensaje ="El correo se mando satisfactoriamente";
    $this -> view ->render('contactos/index');
    
} catch (Exception $e) {
    $this -> view -> mensaje ="El correo no se pudo enviar";
    $this -> view ->render('contactos/index');
}

        
    }
}
?>