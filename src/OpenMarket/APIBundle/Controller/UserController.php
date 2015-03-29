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
use OpenMarket\APIBundle\Entity\UserId;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;

class UserController extends FOSRestController {

    /**
     * This is the documentation description of your method, it will appear
     * on a specific pane. It will read all the text until the first
     * annotation.
     *
     * @ApiDoc(
     *      output = {
     *          "class" = "OpenMarket\APIBundle\Entity\User",
     *          "groups" = {"Default"}
     *      },
     *      resource=true,
     *      description="This is a description of your API method"
     *  )
     *
     * @Rest\View
     */
    public function getUsersAction()
    {
        $users = $this->get('user_repository')->findAll();
        return array('users' => $users);
    }

    /**
     * Get a single user.
     *
     * @ApiDoc(
     *      output = {
     *          "class" = "OpenMarket\APIBundle\Entity\User",
     *          "groups" = {"Default"}
     *      },
     *      statusCodes = {
     *          200 = "Returned when successful",
     *          404 = "Returned when the user is not found"
     *      }
     * )
     *
     * @Rest\View(templateVar="user")
     *
     * @param Request $request the request object
     * @param string  $id      the user id
     *
     * @return User
     *
     *  @throws NotFoundHttpException when user does not exist
     */
    public function getUserAction(Request $request, $id)
    {
        $user = $this->get('user_repository')->find(new UserId($id));
        if(!$user){
            throw $this->createNotFoundException("User does not exist.");
        }
        return $user;
    }

    /**
     * This is the documentation description of your method, it will appear
     * on a specific pane. It will read all the text until the first
     * annotation.
     *
     * @ApiDoc(
     *      resource=true,
     *      description="This is a description of your API method",
     *      input = {
     *          "class" = "OpenMarket\APIBundle\Entity\User",
     *          "groups" = {"Post"}
     *      },
     *      output = {
     *          "class" = "OpenMarket\APIBundle\Entity\User",
     *          "groups" = {"Default"}
     *      },
     *      statusCodes = {
     *          201 = "Returned when a new resource is created",
     *          400 = "Returned when the form has errors"
     *      }
     *  )
     *
     * @Rest\View
     */
    public function postUserAction(Request $request)
    {
        $json = $request->getContent();

        $serializer = $this->get("jms_serializer");

        $deSerializerGroup = array('Post');

        $user = new User();

        $dc = DeserializationContext::create();
        $dc->setGroups($deSerializerGroup);
        $dc->setAttribute('target',$user);

        $serializer->deserialize($json,'OpenMarket\APIBundle\Entity\User','json',$dc);

        $validator = $this->get('validator');
        $violations = $validator->validate($user, null, array('Default'));

        if($violations->count() == 0){
            $this->get('user_repository')->add($user);
        }else {
            throw new BadRequestHttpException(implode(PHP_EOL, array('violations' => $violations)));
        }
        return array('user' => $user);
    }
}