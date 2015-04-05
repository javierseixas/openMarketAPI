<?php
/**
 * Created by PhpStorm.
 * User: victux
 * Date: 5/04/15
 * Time: 4:41
 */

namespace OpenMarket\APIBundle\Service;


use OpenMarket\APIBundle\Entity\User;
use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;

class UserPasswordHandler {

    private $encoderFactory;

    public function __construct(EncoderFactoryInterface $encoderFactory)
    {
        $this->encoderFactory = $encoderFactory;
    }

    public function encode(User $user)
    {
        $encoder = $this->encoderFactory->getEncoder($user);

        $salt = '$2y$13$' . substr(md5(uniqid(rand(), true)),0,21) . '$';
        $password = $encoder->encodePassword($user->getPassword(), $salt);

        $user->setSalt($salt);
        $user->setPassword($password);
    }

} 