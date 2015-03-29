<?php
/**
 * Created by PhpStorm.
 * User: arkioner
 * Date: 14/03/15
 * Time: 1:50
 */

namespace OpenMarket\APIBundle\Repository\Doctrine;

use Doctrine\ORM\EntityRepository;
use OpenMarket\APIBundle\Entity\BaseId;
use OpenMarket\APIBundle\Repository\BaseRepositoryInterface;


class UserRepository extends EntityRepository implements BaseRepositoryInterface{

    public function find(BaseId $baseId)
    {
        // TODO: Implement find() method.
    }

    public function findAll()
    {
        // TODO: Implement findAll() method.
    }

    public function save($object)
    {
        // TODO: Implement save() method.
    }

    public function remove(BaseId $baseId)
    {
        // TODO: Implement remove() method.
    }
}