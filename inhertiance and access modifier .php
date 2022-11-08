<?php
    class User{
        public $username;
        private $email;
        public $pass;
        
        public function __construct($username,$email,$pass){
            $this->username = $username;
            $this->email = $email;
            $this->pass = $pass;
            
        }

        function login (){
            echo $this -> email;
        }

        public function getEmail(){
            return $this->email;
        }
        
        public function setEmail($email){
            $this->email = $email;
        }
        function logout(){
            echo $this -> email . ' has been logged out';
        }
    }

    class Admin extends User{
        public $role;
        public function __construct($role){
            parent::__construct($username,$email,$pass);
            $this->role=$role;
        }

        public  function getEmail(){
            echo 'logged in: '.$this->email;
        }

        function login($new){
            echo $new.' has logged in';
        }
    }


    // $user = new User('zod','zod123@gmail.com','zzz');
    // echo $user->login();
    // echo $user->getEmail();
    // echo $user ->setEmail('hackerman@gmail.com');
    
    // echo "<br>";
    $admin = new Admin('super admin','admin','admin@gmail.com','root');
    // echo $admin -> login('admin');
    echo $admin->role;
    echo $admin -> getEmail();
    
?>
