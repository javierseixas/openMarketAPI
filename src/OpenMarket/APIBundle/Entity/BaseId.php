<?php
/**
 * Created by PhpStorm.
 * User: arkioner
 * Date: 14/03/15
 * Time: 1:15
 */

namespace OpenMarket\APIBundle\Entity;


abstract class BaseId {
    /**
     * @Assert\NotBlank
     */
    protected $value;

    public function getValue()
    {
        return $this->value;
    }

    public function isEqualTo(BaseId $baseId)
    {
        return $this->getValue() === $baseId->getValue();
    }
}