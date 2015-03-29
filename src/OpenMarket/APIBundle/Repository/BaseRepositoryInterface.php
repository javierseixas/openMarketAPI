<?php
/**
 * Created by PhpStorm.
 * User: arkionerS
 * Date: 14/03/15
 * Time: 1:08
 */

namespace OpenMarket\APIBundle\Repository;

use OpenMarket\APIBundle\Entity\BaseId;

interface BaseRepositoryInterface{
    public function find(BaseId $baseId);

    public function findAll();

    public function add($object);

    public function remove($object);
}
