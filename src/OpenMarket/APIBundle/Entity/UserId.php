<?php
/**
 * Created by PhpStorm.
 * User: arkioner
 * Date: 22/02/15
 * Time: 1:21
 */

namespace OpenMarket\APIBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class UserId extends BaseId
{
    public function __construct($value = False)
    {
        $this->value = (string) Uuid::uuid4();
    }

}
