<?php
/**
 * Created by PhpStorm.
 * User: victux
 * Date: 11/10/15
 * Time: 1:42
 */

namespace OpenMarket\APIBundle\Entity;


use Doctrine\Common\Collections\ArrayCollection;

class Order
{
    /**
     * @var integer
     */
    private $id;
    /**
     * @var ArrayCollection
     */
    private $orderLines;
    /**
     * @var double
     */
    private $total;
    /**
     * @var double
     */
    private $totalWithoutTaxes;
    /**
     * @var \DateTime
     */
    private $createdAt;
    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * Order constructor.
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
     * @return ArrayCollection
     */
    public function getOrderLines()
    {
        return $this->orderLines;
    }

    /**
     * @param ArrayCollection $orderLines
     */
    public function setOrderLines($orderLines)
    {
        $this->orderLines = $orderLines;
    }

    /**
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param float $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

    /**
     * @return float
     */
    public function getTotalWithoutTaxes()
    {
        return $this->totalWithoutTaxes;
    }

    /**
     * @param float $totalWithoutTaxes
     */
    public function setTotalWithoutTaxes($totalWithoutTaxes)
    {
        $this->totalWithoutTaxes = $totalWithoutTaxes;
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
