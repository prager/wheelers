<?php
class User_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }    
    
    private function send_reg_email($param){
        // Load PHPMailer library
        $this->load->library('phpmailer_lib');
        
        // PHPMailer object
        $mail = $this->phpmailer_lib->load();
        
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host     = 'smtp.ionos.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'wheelers@jlkconsulting.info';
        $mail->Password = 'RX%Rzh$s_GXq#9VB';
        $mail->SMTPSecure = 'ssl';
        $mail->Port     = 587;
        
        $mail->setFrom('wheelers@jlkconsulting.info', 'WanderingWheelers');
        $mail->addReplyTo('wheelers@jlkconsulting.info', 'WanderingWheelers');
        
        // Add a recipient
        $mail->addAddress($param['email']);
        
        // Add cc or bcc
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
        
        // Email subject
        $mail->Subject = 'Wandering Wheelers Registration';
        
        // Set email format to HTML
        $mail->isHTML(false);
        
        // Email body content
        $mailContent = "<h1>Wandering Wheelers Registration</h1>
            <p>You have registered with Wandering Wheelers. Thank you!</p>";
        $mail->Body = $mailContent;
        
        // Send email
        if(!$mail->send()){
            //echo 'Message could not be sent.';
            //echo 'Mailer Error: ' . $mail->ErrorInfo;
            $retval = FALSE;
        }else{
            //echo 'Message has been sent';
            $retval = TRUE;
        }
        return $retval;
    }
    
    public function register($param) {
        
        return $this->send_reg_email($param);
    }
}

?>