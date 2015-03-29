<?php
/**
 * Created by PhpStorm.
 * User: arkioner
 * Date: 22/02/15
 * Time: 1:16
 */

namespace OpenMarket\APIBundle\Entity;


class User
{

    private $id;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @param UserId $id
     * @param string $firstName
     * @param string $lastName
     */
    public function __construct($id = null, $firstName = null, $lastName = null)
    {
        $this->id = $id ? $id : new UserId();
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    /**
     * @param UserId $id
     */
    public function setId($id)
    {
        $this->id = new UserId($id);
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return UserId
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }


}
