<?php

class Message {
    private $id;
    private $title;
    private $message;
    private $userId;
    private $supplierId;

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
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of message
     */ 
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set the value of message
     *
     * @return  self
     */ 
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get the value of userId
     */ 
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set the value of userId
     *
     * @return  self
     */ 
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get the value of supplierId
     */ 
    public function getSupplierId()
    {
        return $this->supplierId;
    }

    /**
     * Set the value of supplierId
     *
     * @return  self
     */ 
    public function setSupplierId($supplierId)
    {
        $this->supplierId = $supplierId;

        return $this;
    }

    public static function sendMessage() {
        try {
            $conn = Db::getInstance();
            $statement = $conn->prepare("INSERT INTO messages (message, userId, supplierId) VALUES (:message, :userId, :supplierId)");
            $statement->bindParam(":message", $this->getMessage());
            $statement->bindParam(":userId", $this->getUserId());
            $statement->bindParam(":supplierId", $this->getSupplierId());
            $result = $statement->execute();
            return $result;
        }
        catch (Throwable $t) {
            $status = $t->getMessage();
        }
        
    }

}