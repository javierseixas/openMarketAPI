<?php
/**
 * Created by PhpStorm.
 * User: arkioner
 * Date: 22/02/15
 * Time: 1:35
 */

namespace OpenMarket\APIBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use JMS\Serializer\DeserializationContext;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use OpenMarket\APIBundle\Entity\User;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\Validator\Validation;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;

class UserController extends FOSRestController {

    /**
     * This is the documentation description of your method, it will appear
     * on a specific pane. It will read all the text until the first
     * annotation.
     *
     * @ApiDoc(
     *  resource=true,
     *  description="This is a description of your API method"
     * )
     * @Rest\View
     */
    public function getUsersAction()
    {
        $users = $this->get('user_repository')->findAll();
        return array('users' => $users);
    }

    /**
     * This is the documentation description of your method, it will appear
     * on a specific pane. It will read all the text until the first
     * annotation.
     *
     * @ApiDoc(
     *  resource=true,
     *  description="This is a description of your API method",
     *  statusCodes = {
     *    201 = "Returned when a new resource is created",
     *    400 = "Returned when the form has errors"
     *  }
     * )
     *
     * @Rest\View
     */
    public function postUserAction(Request $request)
    {
        $json = $request->getContent();

        $serializer = $this->get("jms_serializer");

        $deSerializerGroup = array('default');

        $user = new User();

        $dc = DeserializationContext::create();
        $dc->setGroups($deSerializerGroup);
        $dc->setAttribute('target',$user);

        $serializer->deserialize($json,User::class,'json',$dc);
        return array('user' => $user);

        $validator = Validation::createValidatorBuilder()
            ->enableAnnotationMapping()
            ->getValidator()
        ;
        $violations = $validator->validate($user);

        if($violations->count() == 0){
            //$this->get('user_repository')->add($user);
        }else {
            throw new BadRequestHttpException(implode(PHP_EOL, array('violations' => $violations)));
        }
        return array('user' => $user);
    }
}