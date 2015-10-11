<?php
/**
 * Created by PhpStorm.
 * User: victux
 * Date: 11/10/15
 * Time: 1:42
 */

namespace OpenMarket\APIBundle\Entity;


use Doctrine\Common\Collections\ArrayCollection;

class Product
{

    /**
     * @var integer
     */
    private $id;
    /**
     * @var string
     */
    private $barcode;
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $description;
    /**
     * @var ArrayCollection
     */
    private $categories;
    /**
     * @var double
     */
    private $price;
    /**
     * @var double
     */
    private $costPrice;
    /**
     * @var double
     */
    private $stock;
    /**
     * @var double
     */
    private $tax;


    /**
     * @var \DateTime
     */
    private $createdAt;
    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * Product constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * @param string $barcode
     */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return ArrayCollection
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @param ArrayCollection $categories
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return float
     */
    public function getCostPrice()
    {
        return $this->costPrice;
    }

    /**
     * @param float $costPrice
     */
    public function setCostPrice($costPrice)
    {
        $this->costPrice = $costPrice;
    }

    /**
     * @return float
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * @param float $stock
     */
    public function setStock($stock)
    {
        $this->stock = $stock;
    }

    /**
     * @return float
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * @param float $tax
     */
    public function setTax($tax)
    {
        $this->tax = $tax;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }




}