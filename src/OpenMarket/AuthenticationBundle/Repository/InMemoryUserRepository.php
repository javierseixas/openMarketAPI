<?php
/**
 * Created by PhpStorm.
 * User: arkioner
 * Date: 22/02/15
 * Time: 1:31
 */

namespace OpenMarket\AuthenticationBundle\Repository;


use OpenMarket\Authentication\User\User;
use OpenMarket\Authentication\User\UserId;
use OpenMarket\Authentication\User\UserRepository;

class InMemoryUserRepository implements UserRepository
{
    private $users;

    public function __construct()
    {
        $this->users[] = new User(
            new UserId('8CE05088-ED1F-43E9-A415-3B3792655A9B'), 'John', 'Doe'
        );
        $this->users[] = new User(
            new UserId('62A0CEB4-0403-4AA6-A6CD-1EE808AD4D23'), 'Jean', 'Bon'
        );
    }

    public function find(UserId $userId)
    {
    }

    public function findAll()
    {
        return $this->users;
    }

    public function add(User $user)
    {
    }

    public function remove(User $user)
    {
    }
}