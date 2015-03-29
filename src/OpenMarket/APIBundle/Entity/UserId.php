<?php
/**
 * Created by PhpStorm.
 * User: arkioner
 * Date: 22/02/15
 * Time: 1:21
 */

namespace OpenMarket\APIBundle\Entity;

use Rhumsaa\Uuid\Uuid;

class UserId extends BaseId
{
    public function __construct($value = false)
    {
        $this->value = (string) ($value?:Uuid::uuid4());
    }

}
