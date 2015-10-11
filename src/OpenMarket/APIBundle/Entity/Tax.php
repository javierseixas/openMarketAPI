<?php
/**
 * Created by PhpStorm.
 * User: victux
 * Date: 11/10/15
 * Time: 2:44
 */

namespace OpenMarket\APIBundle\Entity;


class Tax
{

    /**
     * @var integer
     */
    private $id;
    /**
     * @var string
     */
    private $title;
    /**
     * @var double
     */
    private $percentValue;
    /**
     * @var boolean
     */
    private $default;

    /**
     * Tax constructor.
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
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return float
     */
    public function getPercentValue()
    {
        return $this->percentValue;
    }

    /**
     * @param float $percentValue
     */
    public function setPercentValue($percentValue)
    {
        $this->percentValue = $percentValue;
    }

    /**
     * @return boolean
     */
    public function isDefault()
    {
        return $this->default;
    }

    /**
     * @param boolean $default
     */
    public function setDefault($default)
    {
        $this->default = $default;
    }




}