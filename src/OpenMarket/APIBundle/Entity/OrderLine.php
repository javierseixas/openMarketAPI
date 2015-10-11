<?php
/**
 * Created by PhpStorm.
 * User: victux
 * Date: 11/10/15
 * Time: 1:42
 */

namespace OpenMarket\APIBundle\Entity;


class OrderLine
{

    /**
     * @var integer
     */
    private $id;
    /**
     * @var string
     */
    private $productName;
    /**
     * @var double
     */
    private $productPrice;
    /**
     * @var double
     */
    private $costPrice;
    /**
     * @var double
     */
    private $quantity;
    /**
     * @var double
     */
    private $taxPercentValue;

    /**
     * OrderLine constructor.
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
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param string $productName
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
    }

    /**
     * @return float
     */
    public function getProductPrice()
    {
        return $this->productPrice;
    }

    /**
     * @param float $productPrice
     */
    public function setProductPrice($productPrice)
    {
        $this->productPrice = $productPrice;
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
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param float $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return float
     */
    public function getTaxPercentValue()
    {
        return $this->taxPercentValue;
    }

    /**
     * @param float $taxPercentValue
     */
    public function setTaxPercentValue($taxPercentValue)
    {
        $this->taxPercentValue = $taxPercentValue;
    }




}