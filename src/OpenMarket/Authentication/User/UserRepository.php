<?php
/**
 * Created by PhpStorm.
 * User: arkioner
 * Date: 22/02/15
 * Time: 1:24
 */

namespace OpenMarket\Authentication\User;

interface UserRepository
{
    public function find(UserId $userId);

    public function findAll();

    public function add(User $user);

    public function remove(User $user);
}
