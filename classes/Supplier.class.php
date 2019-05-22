<?php

    class Supplier {
        private $id;
        private $companyName;
        private $address;
        private $number;
        private $bus;
        private $location;
        private $region;
        private $firstName;
        private $lastName;
        private $email;
        private $tel;

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
         * Get the value of companyName
         */ 
        public function getCompanyName()
        {
                return $this->companyName;
        }

        /**
         * Set the value of companyName
         *
         * @return  self
         */ 
        public function setCompanyName($companyName)
        {
                $this->companyName = $companyName;

                return $this;
        }

        /**
         * Get the value of address
         */ 
        public function getAddress()
        {
                return $this->address;
        }

        /**
         * Set the value of address
         *
         * @return  self
         */ 
        public function setAddress($address)
        {
                $this->address = $address;

                return $this;
        }

        /**
         * Get the value of number
         */ 
        public function getNumber()
        {
                return $this->number;
        }

        /**
         * Set the value of number
         *
         * @return  self
         */ 
        public function setNumber($number)
        {
                $this->number = $number;

                return $this;
        }

        /**
         * Get the value of bus
         */ 
        public function getBus()
        {
                return $this->bus;
        }

        /**
         * Set the value of bus
         *
         * @return  self
         */ 
        public function setBus($bus)
        {
                $this->bus = $bus;

                return $this;
        }

        /**
         * Get the value of location
         */ 
        public function getLocation()
        {
                return $this->location;
        }

        /**
         * Set the value of location
         *
         * @return  self
         */ 
        public function setLocation($location)
        {
                $this->location = $location;

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

        public function getSupplierById($id) {
            try {
                $this->id =$id;
                $conn = Db::getInstance();
                $statement = $conn->prepare("SELECT * FROM suppliers WHERE id = :id");
                $statement->bindParam(":id", $this->id);
                $statement->execute();
                $result = $statement->fetch(PDO::FETCH_ASSOC);
                $this->setCompanyName($result["companyName"]);
                $this->setAddress($result["address"]);
                $this->setNumber($result["number"]);
                $this->setBus($result['bus']);
                $this->setPostalCode($result['postalCode']);
                $this->setLocation($result['location']);
                $this->setRegion($result['region']);
                $this->setFirstName($result['firstName']);
                $this->setLastName($result['lastName']);
                $this->setEmail($result['email']);
                $this->setTel($result['tel']);

                return $this;       
            } catch (Throwable $t) {
                    $status = $t->getMessage();
            }
        }
    }