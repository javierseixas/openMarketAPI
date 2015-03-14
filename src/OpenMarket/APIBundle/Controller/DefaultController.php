<?php

namespace OpenMarket\APIBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class DefaultController extends FOSRestController
{
    /**
     * This is the documentation description of your method, it will appear
     * on a specific pane. It will read all the text until the first
     * annotation.
     *
     * @ApiDoc(
     *  resource=true,
     *  description="This is a description of your API method",
     * )
     */
    public function getCamionsAction()
    {
        $object = new \stdClass();
        $object->campo = 'hola';
        $view = $this->view(array('hola'), 200);
        return $this->handleView($view);
    }
}
