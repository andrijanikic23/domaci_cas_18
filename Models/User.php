<?php

    require_once "Base.php";

    class User extends Base
    {
        public function register($email, $password)
        {
            $email = $this -> sql -> real_escape_string($email);
            $password = $this -> sql -> real_escape_string($password);
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);
            $result = $this -> sql -> query("INSERT INTO users(email, password) VALUES('$email', '$hashed_password')");
        }

        public function login($email, $password)
        {
            $email = $this -> sql -> real_escape_string($email);
            $password = $this -> sql -> real_escape_string($password);
            $email_check = $this -> sql -> query("SELECT * FROM users WHERE email = '$email'");
            if($email_check -> num_rows > 0)
            {
                $email_result = $email_check -> fetch_assoc();
            }
            else 
            {
                die("Incorrect info");
            }

            $verified_password = password_verify($password, $email_result["password"]);

            if($verified_password === true)
            {
                if(session_status() === PHP_SESSION_NONE)
                {
                    session_start();
                }
                
                $_SESSION["user_id"] = $email_result["id"];

            }
                
            else 
            {
                die("Incorrect info");
            }
            
        }
    }