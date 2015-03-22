<?php
/**
 * Created by PhpStorm.
 * User: victux
 * Date: 14/03/15
 * Time: 3:09
 */

namespace OpenMarket\APIBundle\Controller;


use FOS\RestBundle\Controller\FOSRestController;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpFoundation\Response;

class TokenController extends FOSRestController
{

    /**
     *
     * @ApiDoc(
     *  section="Security",
     *  resource=true,
     *  description="Api method to obtain a TOKEN",
     * )
     */

    public function postTokenAction()
    {
        // The security layer will intercept this request
        return new Response('', 401);
    }

} 