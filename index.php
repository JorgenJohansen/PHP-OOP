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



    // class Weather {
    //     public static $tempConditions = ['cold','mild','warm'];

    //     public static function celsiusToFahrenheit($celsius){
    //         return $celsius * 9 / 5 + 32;
    //     }

    //     public static function determineTempCondition($fahrenheit){
    //         if($fahrenheit < 40){
    //             //We can use self or Weather
    //             return Weather::$tempConditions[0];
    //         }else if($fahrenheit < 70){
    //             return Weather::$tempConditions[1];
    //         }else{
    //             return Weather::$tempConditions[2];
    //         }
    //     }
    // }

    // print_r(Weather::$tempConditions);
    // echo Weather::celsiusToFahrenheit(20);

    // echo Weather::determineTempCondition(25);

    require('user_validator.php');

    $errors = [];


    if(isset($_POST)){
        // validate entries
        $validation = new UserValidator($_POST);

        $errors = $validation->validateForm();
        

        //save data to db
        
    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=7, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="new-user">
        <h2>Create new user</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <label>Username</label>
            <input type="text" name="username" value="<?php echo htmlspecialchars($_POST['username']) ?>">
            <div class="error">
                <?php echo $errors['username'] ?? '' ?>
            </div>

            <label>Email</label>
            <input type="text" name="email" value="<?php echo htmlspecialchars($_POST['email']) ?>">
            <div class="error">
                <?php echo $errors['email'] ?? '' ?>
            </div>

            <input type="submit" value="submit" name="submit">


        </form>
    </div>
    
</body>
</html>