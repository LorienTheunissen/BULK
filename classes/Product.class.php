<?php

class Product {
    private $nameProduct;
    private $category;
    private $description;
    private $price;
    private $unit;
    private $photo;
    private $minimum;
    private $maximum;
    private $deadlineDate;
    private $deadlineTime;
    private $pickupDate;
    private $pickupAddress;
    private $pickupInfo;
    private $supplier;
    private $city;

    /**
     * @return mixed
     */
    public function getNameProduct()
    {
        return $this->nameProduct;
    }

    /**
     * @param mixed $nameProduct
     */
    public function setNameProduct($nameProduct)
    {
        $this->nameProduct = $nameProduct;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * @param mixed $unit
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
    }

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param mixed $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    /**
     * @return mixed
     */
    public function getMinimum()
    {
        return $this->minimum;
    }

    /**
     * @param mixed $minimum
     */
    public function setMinimum($minimum)
    {
        $this->minimum = $minimum;
    }

    /**
     * @return mixed
     */
    public function getMaximum()
    {
        return $this->maximum;
    }

    /**
     * @param mixed $maximum
     */
    public function setMaximum($maximum)
    {
        $this->maximum = $maximum;
    }

    /**
     * @return mixed
     */
    public function getDeadlineDate()
    {
        return $this->deadlineDate;
    }

    /**
     * @param mixed $deadlineDate
     */
    public function setDeadlineDate($deadlineDate)
    {
        $this->deadlineDate = $deadlineDate;
    }

    /**
     * @return mixed
     */
    public function getDeadlineTime()
    {
        return $this->deadlineTime;
    }

    /**
     * @param mixed $deadlineTime
     */
    public function setDeadlineTime($deadlineTime)
    {
        $this->deadlineTime = $deadlineTime;
    }

    /**
     * @return mixed
     */
    public function getPickupDate()
    {
        return $this->pickupDate;
    }

    /**
     * @param mixed $pickupDate
     */
    public function setPickupDate($pickupDate)
    {
        $this->pickupDate = $pickupDate;
    }

    /**
     * @return mixed
     */
    public function getPickupAddress()
    {
        return $this->pickupAddress;
    }

    /**
     * @param mixed $pickupAddress
     */
    public function setPickupAddress($pickupAddress)
    {
        $this->pickupAddress = $pickupAddress;
    }

    /**
     * @return mixed
     */
    public function getPickupInfo()
    {
        return $this->pickupInfo;
    }

    /**
     * @param mixed $pickupInfo
     */
    public function setPickupInfo($pickupInfo)
    {
        $this->pickupInfo = $pickupInfo;
    }

    /**
     * @return mixed
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * @param mixed $supplier
     */
    public function setSupplier($supplier)
    {
        $this->supplier = $supplier;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    public function addProduct(){
        $conn = Db::getInstance();
        $statement = $conn->prepare("INSERT INTO products(nameProduct, category, description, price, unit, photo, minimum, maximum, deadlineDate, deadlineTime, pickupDate, pickupAddress, pickupInfo, supplier, city) VALUES (:nameProduct, :category, :description, :price, :unit, :photo, :minimum, :maximum, :deadlineDate, :deadlineTime, :pickupDate, :pickupAddress, :pickupInfo, :supplier, :city)");
        $statement->bindParam(":nameProduct", $this->getNameProduct());
        $statement->bindParam(":category", $this->getCategory());
        $statement->bindParam(":description", $this->getDescription());
        $statement->bindParam(":price", $this->getPrice());
        $statement->bindParam(":unit", $this->getUnit());
        $statement->bindParam(":photo", $this->getPhoto());
        $statement->bindParam(":minimum", $this->getMinimum());
        $statement->bindParam(":maximum", $this->getMaximum());
        $statement->bindParam(":deadlineDate", $this->getDeadlineDate());
        $statement->bindParam(":deadlineTime", $this->getDeadlineTime());
        $statement->bindParam(":pickupDate", $this->getPickupDate());
        $statement->bindParam(":pickupAddress", $this->getPickupAddress());
        $statement->bindParam(":pickupInfo", $this->getPickupInfo());
        $statement->bindParam(":supplier", $this->getSupplier());
        $statement->bindParam(":city", $this->getCity());
        $result = $statement->execute();
        return $result;
    }
}

?>