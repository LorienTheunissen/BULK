
<?php

class Order {
    private $id;
    private $amount;
    private $productPhoto;
    private $productName;
    private $productId;
    private $price;
    private $unit;
    private $userId;
    private $supplierName;
    private $supplierId;
    private $status;

    


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
     * Get the value of amount
     */ 
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set the value of amount
     *
     * @return  self
     */ 
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get the value of productPhoto
     */ 
    public function getProductPhoto()
    {
        return $this->productPhoto;
    }

    /**
     * Set the value of productPhoto
     *
     * @return  self
     */ 
    public function setProductPhoto($productPhoto)
    {
        $this->productPhoto = $productPhoto;

        return $this;
    }

    /**
     * Get the value of productName
     */ 
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Set the value of productName
     *
     * @return  self
     */ 
    public function setProductName($productName)
    {
        $this->productName = $productName;

        return $this;
    }

    /**
     * Get the value of productId
     */ 
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set the value of productId
     *
     * @return  self
     */ 
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of unit
     */ 
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Set the value of unit
     *
     * @return  self
     */ 
    public function setUnit($unit)
    {
        $this->unit = $unit;

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
     * Get the value of supplierName
     */ 
    public function getSupplierName()
    {
        return $this->supplierName;
    }

    /**
     * Set the value of supplierName
     *
     * @return  self
     */ 
    public function setSupplierName($supplierName)
    {
        $this->supplierName = $supplierName;

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

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    public function addOrder() {
        try {
            $conn = Db::getInstance();
            $statement = $conn->prepare("INSERT INTO orders (amount, productPhoto, productName, productId, price, unit, userId, supplierName, supplierId) VALUES (:amount, :productPhoto, :productName, :productId, :price, :unit, :userId, :supplierName, :supplierId)");
            $statement->bindParam(":amount", $this->getAmount());
            $statement->bindParam(":productPhoto", $this->getProductPhoto());
            $statement->bindParam(":productName", $this->getProductName());
            $statement->bindParam(":productId", $this->getProductId());
            $statement->bindParam(":price", $this->getPrice());
            $statement->bindParam(":unit", $this->getUnit());
            $statement->bindParam(":userId", $this->getUserId());
            $statement->bindParam(":supplierName", $this->getSupplierName());
            $statement->bindParam(":supplierId", $this->getSupplierId());
            $result = $statement->execute();
            return $result;
        }
        catch (Throwable $t) {
            $status = $t->getMessage();
        }
    }

}