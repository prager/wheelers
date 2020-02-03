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
        
        //return $this->send_reg_email($param);
        $retval = TRUE;
        
        $this->db->select('email');
        $q = $this->db->get_where('users', array('email' => $param['email']));
        
        if($q->num_rows() == 0) {
            
            $this->db->insert('new_user', $param);
            
            $this->db->select('id_new_user');
            $this->db->order_by('id_new_user', 'DESC');
            $id_new_user = $this->db->get('new_user', 1, 0)->row()->id_new_user;
            
            $rand_str = bin2hex(openssl_random_pseudo_bytes(12));
            
            $param['verifystr'] = base_url() . 'index.php/pub/confirm_reg/' . $rand_str;
            $param['email_key'] = $rand_str;
            
            $param['active'] = 1;
            
            $this->db->insert('users', $param);
            
            $recipient = 'jank@jlkconsulting.info';
            $subject = 'Wandering Wheelers Registration';
            $message = $param['fname'] . ' ' . $param['lname'] . "\n\n".
                $param['street'] . "\n\n" .$param['city'] . ' ' . $param['state'] . $param['zip'] . "\n\n".
                ' Phone: ' . $param['phone'] . ' | Email: ' . $param['email'] . "\n\n";
                
                mail($recipient, $subject, $message);
                
                $recipient = $param['email'];
                //$subject = 'ARRL EB Registration';
                
                
                $message = 'To finish your registration for Wandering Wheelers click on the following link or copy paste in the browser: ' 
                    . $param['verifystr'] . "\n\n";
                $message .= 'You must do so within 72 hours otherwise you login information may be deactivated.
Thank you for your interest in Wandering Wheelers Jeep Club!';
                
                mail($recipient, $subject, $message);
                
                
                $this->db->select('id_user');
                $this->db->where('email', $param['email']);
                
                $param['id_user'] = $this->db->get('users')->row()->id_user;
                
                $this->db->where('id_new_user', $id_new_user);
                $this->db->update('new_user', array('id_user' => $param['id_user']));
                
        }
        else {
            $retval = FALSE;
        }
        
        return $retval;
    }
}

?>