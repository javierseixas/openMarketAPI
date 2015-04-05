<?php
/**
 * Created by PhpStorm.
 * User: arkionerS
 * Date: 14/03/15
 * Time: 1:08
 */

namespace OpenMarket\APIBundle\Repository;

interface BaseRepositoryInterface{
    public function find($id);

    public function findAll();

    public function add($object);

    public function remove($object);
}
