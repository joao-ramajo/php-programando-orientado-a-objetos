<?php

class PHPMailerAdapter {
    private $pm;
    
    public function __construct(){
        $this->pm = new PHPMailer;
        $this->pm-> CharSet = 'utf-8'; 
    }
    
    public function setDebug($bool){
        $this->pm-> SMTPDebug = $bool;
    }
    
    public function setForm($from, $name){
        $this->pm-> From =$from;
        $this->pm-> FromName = $name;
    }
    
    public function setSubject($subject){
        $this->pm-> Subject = $subject;
    }
    
    public function setTextBody($body){
        $this->pm-> Body = $body;
        $this->pm-> IsHTML(false);
    }
    
    public function setHtmlBody($html){
        $this->pm-> MsgHTML($html);
    }
    
    public function addAddress($address, $name = ''){
        $this->pm-> AddAddress($address, $name);
    }
    
    public function addAttach($path, $name = ''){
        $this->pm-> addAddress($path, $name);
    }
    
    public function setUseSmtp($auth = true){
        $this->pm-> IsSMTP();
        $this->pm-> SMTPAuth = $auth;
    }
    
    public function setSmtpHost($host, $port = 25){
           $this->pm-> Host = $host;
           $this->pm-> Port = $port;
           $this->pm-> SMTSecure = "ssl";
    }
    
    
}