<?php

class User
{

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

    /* GETTERS & SETTERS */

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    public function getPasswordConfirmation()
    {
        return $this->passwordConfirmation;
    }

    public function setPasswordConfirmation($passwordConfirmation)
    {
        $this->passwordConfirmation = $passwordConfirmation;

        return $this;
    }

    public function getAvatar()
    {
        return $this->avatar;
    }

    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function getInterests()
    {
        return $this->interests;
    }

    public function setInterests($interests)
    {
        $this->interests = $interests;

        return $this;
    }

    public function validFirstName($firstName)
    {
        $firstName = $_POST['firstName'];
        if (!preg_match("/^[a-zA-Z ]*$/", $firstName)) {
            return false;
        } else {
            return true;
        }
    }

    public function validLastName($lastName)
    {
        $lastName = $_POST['lastName'];
        if (!preg_match("/^[a-zA-Z ]*$/", $lastName)) {
            return false;
        } else {
            return true;
        }
    }

    public function availableEmail($email)
    {
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

    public function validEmail($email)
    {
        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }

    public function validatePassword($password, $passwordConfirmation)
    {
        $password = $_POST['password'];
        $passwordConfirmation = $_POST['password_confirmation'];

        if (!empty($password) || !empty($passwordConfirmation)) {
            if ($password == $passwordConfirmation) {
                return true;
            }
        } else {
            return false;
        }
    }

    public function register()
    {
        $options = [
            'cost' => 15
        ];

        $password = password_hash($this->password, PASSWORD_DEFAULT, $options);

        try {
            $conn = Db::getInstance();
            $statement = $conn->prepare("INSERT INTO users(first_name, last_name, postal_code, email, tel, password) VALUES (:first_name, :last_name, :postal_code, :email, :tel, :password)");
            $statement->bindParam(":first_name", $this->getFirstName());
            $statement->bindParam(":last_name", $this->getLastName());
            $statement->bindParam(":postal_code", $this->getPostalCode());
            $statement->bindParam(":email", $this->getEmail());
            $statement->bindParam(":tel", $this->getTel());
            $statement->bindParam(":password", $password);
            $result = $statement->execute();
            return $result;
        } catch (Throwable $t) {
            echo $t;
        }
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /* checks if the first name has a valid input */

    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /* checks if the last name has a valid input */

    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /* checks if the e-mail is available in the database */

    public function getEmail()
    {
        return $this->email;
    }

    /* checks if the e-mail has a valid input */

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /* checks if password is the same as password_confirmation field */

    public function getTel()
    {
        return $this->tel;
    }

    /* registers */

    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /* login */

    public function login()
    {
        try {
            $conn = Db::getInstance();
            $email = $_POST['email'];
            $password = $_POST['password'];

            $statement = $conn->prepare("SELECT * FROM users WHERE email =:email");
            $statement->bindParam(":email", $email); // SQL Injection Safe
            $result = $statement->execute();
            $user = $statement->fetch(PDO::FETCH_ASSOC);

            if (password_verify($password, $user['password'])) {
                $this->setId($user['id']);
                $_SESSION['id'] = $this->id;
                header("Location: products.php");
            }
        } catch (Throwable $t) {
            echo $t;
        }
    }
}
