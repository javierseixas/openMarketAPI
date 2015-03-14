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

    public function __construct(UserId $id, $firstName, $lastName)
    {
        $this->id        = $id;
        $this->firstName = $firstName;
        $this->lastName  = $lastName;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }
}
