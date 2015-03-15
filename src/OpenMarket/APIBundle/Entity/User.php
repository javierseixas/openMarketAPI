<?php
/**
 * Created by PhpStorm.
 * User: arkioner
 * Date: 22/02/15
 * Time: 1:16
 */

namespace OpenMarket\APIBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class User
{
    private $id;

    /**
     * @Assert\Length(min = 3)
     * @Assert\NotBlank
     */
    private $firstName;

    /**
     * @Assert\Length(min = 3)
     * @Assert\NotBlank
     */
    private $lastName;

    public function __construct()
    {
        $this->id = new UserId();
    }

    /**
     * @param UserId $id
     */
    public function setId(UserId $id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @param mixed $lastName
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
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }


}
