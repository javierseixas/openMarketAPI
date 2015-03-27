<?php
/**
 * Created by PhpStorm.
 * User: arkioner
 * Date: 18/03/2015
 * Time: 17:29
 */

namespace OpenMarket\APIBundle\Repository\Yaml;

use OpenMarket\APIBundle\Entity\User;
use OpenMarket\APIBundle\Entity\BaseId;
use OpenMarket\APIBundle\Entity\UserId;
use OpenMarket\APIBundle\Repository\BaseRepositoryInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Yaml\Yaml;

class UserRepository implements BaseRepositoryInterface
{
    private $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;

        (new Filesystem())->touch($this->filename);
    }

    /**
     * {@inheritDoc}
     */
    public function find(BaseId $userId)
    {
        foreach ($this->findAll() as $user) {
            if ($user->getId()->isEqualTo($userId)) {
                return $user;
            }
        }

        return null;
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $users = array();
        foreach ($this->getRows() as $row) {
            $users[] = new User(
                new UserId($row['id']),
                $row['first_name'],
                $row['last_name']
            );
        }

        return $users;
    }

    /**
     * {@inheritDoc}
     */
    public function add($user)
    {
        $rows = array();
        foreach ($this->getRows() as $row) {
            if ($user->getId()->isEqualTo(new UserId($row['id']))) {
                continue;
            }

            $rows[] = $row;
        }

        $rows[] = array(
            'id'         => $user->getId()->getValue(),
            'first_name' => $user->getFirstName(),
            'last_name'  => $user->getLastName(),
        );

        file_put_contents($this->filename, Yaml::dump($rows));
    }

    /**
     * {@inheritDoc}
     */
    public function remove($user)
    {
        $rows = array();
        foreach ($this->getRows() as $row) {
            if ($user->getId()->isEqualTo(new UserId($row['id']))) {
                continue;
            }

            $rows[] = $row;
        }

        file_put_contents($this->filename, Yaml::dump($rows));
    }

    private function getRows()
    {
        return Yaml::parse($this->filename) ?: array();
    }
}