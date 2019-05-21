<?php

    class User {

        private $id;
        private $firstName;
        private $lastName;
        private $region;
        private $email;
        private $password;
        private $passwordConfirmation;
        private $avatar;
        private $interests;

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of firstName
         */ 
        public function getFirstName()
        {
                return $this->firstName;
        }

        /**
         * Set the value of firstName
         *
         * @return  self
         */ 
        public function setFirstName($firstName)
        {
                $this->firstName = $firstName;

                return $this;
        }

        /**
         * Get the value of lastName
         */ 
        public function getLastName()
        {
                return $this->lastName;
        }

        /**
         * Set the value of lastName
         *
         * @return  self
         */ 
        public function setLastName($lastName)
        {
                $this->lastName = $lastName;

                return $this;
        }

        /**
         * Get the value of region
         */ 
        public function getRegion()
        {
                return $this->region;
        }

        /**
         * Set the value of region
         *
         * @return  self
         */ 
        public function setRegion($region)
        {
                $this->region = $region;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of password
         */ 
        public function getPassword()
        {
                return $this->password;
        }

        /**
         * Set the value of password
         *
         * @return  self
         */ 
        public function setPassword($password)
        {
                $this->password = $password;

                return $this;
        }

        /**
         * Get the value of passwordConfirmation
         */ 
        public function getPasswordConfirmation()
        {
                return $this->passwordConfirmation;
        }

        /**
         * Set the value of passwordConfirmation
         *
         * @return  self
         */ 
        public function setPasswordConfirmation($passwordConfirmation)
        {
                $this->passwordConfirmation = $passwordConfirmation;

                return $this;
        }

        /**
         * Get the value of avatar
         */ 
        public function getAvatar()
        {
                return $this->avatar;
        }

        /**
         * Set the value of avatar
         *
         * @return  self
         */ 
        public function setAvatar($avatar)
        {
                $this->avatar = $avatar;

                return $this;
        }

        /**
         * Get the value of interests
         */ 
        public function getInterests()
        {
                return $this->interests;
        }

        /**
         * Set the value of interests
         *
         * @return  self
         */ 
        public function setInterests($interests)
        {
                $this->interests = $interests;

                return $this;
        }        

        public function validFirstName($firstName) {
                $firstName = $_POST['firstName'];
                if (!preg_match("/^[a-zA-Z ]*$/",$firstName)) {
                        return false;
                } else {
                        return true;
                } 
        }

        public function validLastName($lastName) {
                $lastName = $_POST['lastName'];
                if (!preg_match("/^[a-zA-Z ]*$/",$lastName)) {
                        return false;
                } else {
                        return true;
                } 
        }

        public function availableEmail($email) {
                $conn = Db::getInstance();
                $statement = $conn->prepare("SELECT * FROM users WHERE email = :email LIMITS 1");
                $statement->bindParam(":email", $email);
                $statement->execute();
                $result = $statement->fetch(PDO::FETCH_ASSOC);

                if ($result == false) {
                        // Email available
                        return true;
                } else {
                        // Email not available
                        return false;
                }
        }

        public function validEmail($email) {
                $email = $_POST['email'];
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        return true;
                    } else {
                        return false;
                    }
        }

        public function validatePassword($password, $passwordConfirmation) {
                $password = $_POST['password'];
                $passwordConfirmation = $_POST['passwordConfirmation'];
                
                if( !empty($password) || !empty($passwordConfirmation)  ){
                        if ($password == $passwordConfirmation) {
                                return true;
                        }
                } else {
                        return false;
                }
        }

        public function register() {
            $options = [
                'cost' => 15
            ];
    
            $password = password_hash($this->password, PASSWORD_DEFAULT, $options);
            
            try {
                        $conn = Db::getInstance();
                        $statement = $conn->prepare("INSERT INTO users(firstName, lastName, region, email, password) VALUES (:firstName, :lastName, :region, :email, :password)");
                        $statement->bindParam(":firstName", $this->getFirstName());
                        $statement->bindParam(":lastName", $this->getLastName());
                        $statement->bindParam(":region", $this->getRegion());
                        $statement->bindParam(":email", $this->getEmail());
                        $statement->bindParam(":password", $password);
                        $result = $statement->execute();
                        return $result;
                } catch (Throwable $t) {
                        echo $t;
                }
        }

        public function login() {
                try {
                        $conn = Db::getInstance();
		        $email = $_POST['email'];
		        $password = $_POST['password'];

		        $statement = $conn->prepare("SELECT * FROM users WHERE email =:email");
		        $statement->bindParam(":email", $email); // SQL Injection Safe
		        $result = $statement->execute();
		        $user = $statement->fetch(PDO::FETCH_ASSOC);

		        if( password_verify($password, $user['password']) ){
                                session_start();
                                $this->setId($user['id']);
                                $_SESSION['id'] = $this->id;
                                $this->setFirstName($user['firstName']);
                                $_SESSION['firstName'] = $this->firstName;
			        header("Location: products");      
		        }
                }

                catch (Throwable $t) {
                        $status = $t->getMessage;;
                }
        }

        public function getUserById($id){
                try {
                        $this->id = $id;
                        $conn = Db::getInstance();
                        //placeholders
                        $statement = $conn->prepare("SELECT * FROM users WHERE id=:id");
                        $statement->bindParam(":id", $this->id);
                        $statement->execute();
                        $result = $statement->fetch(PDO::FETCH_ASSOC);
                        $this->setFirstName($result["firstName"]);
                        $this->setLastName($result["lastName"]);
                        $this->setEmail($result["email"]);
                        $this->setRegion($result['region']);
                        $this->setPassword($result["password"]);
                        return $this;       
                } catch (Throwable $t) {
                        $status = $t->getMessage();
                }
        }

        public function updateProfile(){
                try {
                        $conn = Db::getInstance();
                        $statement = $conn->prepare("UPDATE users SET firstName = :firstName, lastName = :lastName, email = :email, region = :region WHERE id = :id");
                        $statement->bindParam(":firstName", $this->firstName);
                        $statement->bindParam(":lastName", $this->lastName);
                        $statement->bindParam(":email", $this->email);
                        $statement->bindParam(":region", $this->region);
                        $statement->bindParam(":id", $this->id);
                        $result = $statement->execute();
                } catch (Throwable $t) {
                        $status = $t->getMessage();               
                }
        }

    }
