<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    class Phpmailer_lib{
        public function __construct(){
            log_message('Debug', 'PHPMailer class is loaded.');
        }
    
        public function load(){
            require_once APPPATH.'third_party/PHPMailer/Exception.php';
            require_once APPPATH.'third_party/PHPMailer/PHPMailer.php';
            require_once APPPATH.'third_party/PHPMailer/SMTP.php';
    
            $mail=new PHPMailer;
            $mail->IsSMTP(); // telling the class to use SMTP
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->Username = "cadege23@gmail.com";
            $mail->Password = "gcphtghruftxctlp";
            $mail->SMTPSecure = "tls";
            $mail->Port = 587;
            $mail->CharSet = 'UTF-8';
            $mail->setFrom("cadege23@gmail.com", "Carlos DG");
            $mail->isHTML(true); // Si tu correo contiene codigo HTML
            return $mail;
        }
    }