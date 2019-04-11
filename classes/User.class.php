<?php

    class User {

        private $id;
        private $firstName;
        private $lastName;
        private $postalCode;
        private $email;
        private $tel;
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
         * Get the value of postalCode
         */ 
        public function getPostalCode()
        {
                return $this->postalCode;
        }

        /**
         * Set the value of postalCode
         *
         * @return  self
         */ 
        public function setPostalCode($postalCode)
        {
                $this->postalCode = $postalCode;

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
         * Get the value of tel
         */ 
        public function getTel()
        {
                return $this->tel;
        }

        /**
         * Set the value of tel
         *
         * @return  self
         */ 
        public function setTel($tel)
        {
                $this->tel = $tel;

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

        public function register() {
            $options = [
                'cost' => 15
            ];
    
            $password = password_hash($this->password, PASSWORD_DEFAULT, $options);
            
            try {
                        $conn = Db::getInstance();
                        $statement = $conn->prepare("INSERT INTO users(first_name, last_name, postal_code, email, tel, password) VALUES (:first_name, :last_name, :postal_code, :email, :tel, :password)");
                        $statement->bindParam(":first_name", $this->firstName);
                        $statement->bindParam(":last_name", $this->lastName);
                        $statement->bindParam(":postal_code", $this->postalCode);
                        $statement->bindParam(":email", $this->email);
                        $statement->bindParam(":tel", $this->tel);
                        $statement->bindParam(":password", $password);
                        $result = $statement->execute();
                        var_dump($result);
                        //header("Location: login.php");
                } catch (Throwable $t) {
                        echo $t;
                }
        }
    }
