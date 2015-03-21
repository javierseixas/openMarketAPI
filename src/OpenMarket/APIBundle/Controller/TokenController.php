<?php
/**
 * Created by PhpStorm.
 * User: victux
 * Date: 14/03/15
 * Time: 3:09
 */

namespace OpenMarket\APIBundle\Controller;


use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Response;

class TokenController extends FOSRestController
{

    public function getTokenAction()
    {
        // The security layer will intercept this request
        return new Response('', 401);
    }

} 