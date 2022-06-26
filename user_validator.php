<?php 


    class UserValidator {
        private $data;
        private $errors = [];
        private static $fields = ['username','email'];

        public function __construct($post_data)
        {
            $this->data = $post_data;
        }

        public function validateForm(){

            foreach(self::$fields as $field){
                if(!array_key_exists($field,  $this->data)){
                    trigger_error("'$field' is not present in data");
                    return;
                }
            }
            $this->validateUsername();
            $this->validateEmail();
            return $this->errors;
        }

        private function validateUsername(){
            $value = trim($this->data['username']);

            if(empty($value)){
                $this->addError('username', 'username cannot be empty');
            }else{
                if(!preg_match('/^[a-zA-Z0-9]{6,12}$/', $value)){
                    $this->addError('username','username must be 6-12 characters and alphanumeric');
                }
            }
        }

        private function validateEmail(){

            $value = trim($this->data['email']);

            if(empty($value)){
                $this->addError('email', 'email cannot be empty');
            }else{
                if(!filter_var($value, FILTER_VALIDATE_EMAIL)){
                    $this->addError('email', 'email must be a valid email address');
                }
            }
        }

        private function addError($key, $value){
            $this->errors[$key] = $value;
        }


    }   


?>