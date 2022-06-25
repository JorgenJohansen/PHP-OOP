<?php

    // class User {
    //     //properties and methods are defined
    //     private $username;
    //     protected $email;
    //     public $role = 'member';

    //     //Magic methods use __
    //     public function __construct($username, $email)
    //     {
    //         $this->username = $username;
    //         if(str_contains($email,'@') && str_contains($email, '.')){
    //             $this->email = $email;
    //         }
    //     }


    //     public function __destruct()
    //     {
    //         echo "the user $this->username was removed <br />";
    //     }

    //     public function __clone()
    //     {
    //         $this->username .= ' (cloned)<br>';
    //     }
        

    //     public function addFriend(){
    //         return "$this->username added a new friend <br/>";
    //     }

    //     //

    //     public function message(){
    //         return "$this->email sent a new message";
    //     }

    //     // getters 

    //     public function getEmail(){
    //         return $this->email;
    //     }
    //     public function getUsername(){
    //         return $this->username;
    //     }


    //     // setters

    //     public function setEmail($email){
    //         if(str_contains($email,'@') && str_contains($email, '.')){
    //             $this->email = $email;
    //         }
            
    //     }

    // }

    // class Admin extends User {
    //     private $level;

    //     public $role = "admin";

    //     public function __construct($username, $email, $level)
    //     {
    //         parent::__construct($username, $email);
    //         $this->level = $level;
    //     }

    //     public function message(){
    //         return "$this->email sent a new message";
    //     }
    // }

    // $userOne = new User("Mario", "mario@hotmail.com");
    // $userTwo = new User("Yoshi", "yoshi@hotmail.com");
    // $userThree = clone($userOne);


    // $admin = new Admin("Jørgen", "jorgen@hotmail.com", 5);

    // //unset removes the reference
    // unset($userTwo);

    // echo $userThree->getUsername();

    // echo $userOne->getUsername() . '<br/>';
    // echo $userOne->getEmail() . '<br/>';
    // echo $userOne->addFriend();
    // echo $userOne->role . '<br/>';
    // echo $userOne->message() . '<br/>';

    // echo '<br/>';

    // echo $admin->getUsername() . '<br/>';
    // echo $admin->getEmail() . '<br/>';
    // echo $admin->addFriend();
    // echo $admin->role . '<br/>';
    // echo $admin->message() . '<br/>';


    // echo '<br />';

    // echo $userTwo->getUsername(). '<br/>';
    // echo $userTwo->getEmail() . '<br/>';
    // echo $userTwo->addFriend();

    // print_r(get_class_vars('User'));
    // print_r(get_class_methods('User'));



    class Weather {
        public $tempConditions = ['cold','mild','warm'];

        public function celsiusToFahrenheit($celsius){

        }

        public function determineTempCondition($fahrenheit){
            
        }
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=7, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>