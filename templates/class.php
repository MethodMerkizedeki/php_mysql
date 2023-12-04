<?php

class User {
    public $name;
    public $email;

    public function _constructor($name, $email){
        // $this->email = 'mark@gmail.com';
        // $this->name = 'mark';
        $this->email = $email;
        $this->name = $name;
    }

    public function login(){
        //echo 'the user logged in';
        echo $this->name . 'logged in';
    }
}

// $userone = new User();

// $userone->login();
// echo $userone->email;

$usertwo = new User('mark', 'mark@gmail.com');
// echo $usertwo->name;
// echo $usertwo->email;
$usertwo->login();
?>