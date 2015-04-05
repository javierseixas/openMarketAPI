<?php
/**
 * Created by PhpStorm.
 * User: arkioner
 * Date: 14/03/15
 * Time: 1:50
 */

namespace OpenMarket\APIBundle\Repository\Doctrine;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use OpenMarket\APIBundle\Repository\BaseRepositoryInterface;


class UserRepository implements BaseRepositoryInterface{
    private $entityRepository;
    private $entityManager;

    public function __construct(EntityManager $entityManager, EntityRepository $entityRepository)
    {
        $this->entityRepository = $entityRepository;
        $this->entityManager = $entityManager;
    }

    public function find($userId)
    {
        return $this->entityRepository->find($userId);
    }

    public function findAll()
    {
        return $this->entityRepository->findAll();
    }

    public function add($user)
    {
        $this->entityManager->persist($user);
        $this->entityManager->flush($user);
    }

    public function remove($user)
    {
        $this->entityManager->remove($user);
        $this->entityManager->flush($user);
    }
}
