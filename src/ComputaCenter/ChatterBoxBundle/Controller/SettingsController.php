<?php

namespace ComputaCenter\ChatterBoxBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Security\Core\SecurityContext;
use FOS\UserBundle\Model\UserManagerInterface;
use ComputaCenter\ChatterBoxBundle\Entity\User;


class SettingsController extends Controller
{
    /**
     * @Route("/admin", name="_settings")
     * @Template("ChatterBoxBundle:Settings:index.html.twig")
     */
    public function indexAction() {
        return $this->redirect($this->generateUrl('_settings_user_read'));
    }

    public function userCreateAction(Request $request) {
        $userManager = $this->container->get('fos_user.user_manager');

        $aUser = $userManager->createUser();

        $aUser->setUsername($request->query->get('username'));
        $aUser->setEmail($request->query->get('email'));
        $aUser->setFirstName($request->query->get('firstName'));
        $aUser->setLastName($request->query->get('lastName'));
        $aUser->setPassword($request->query->get('password'));

        $userManager->updateUser($aUser);

        return $this->redirect($this->generateUrl('_settings_user_read'));
    }

    /**
     * @Route("/admin", name="_settings_user_read")
     * @Template("ChatterBoxBundle:Settings:userRead.html.twig")
     */
    public function userReadAction() {
        $userManager = $this->container->get('fos_user.user_manager');
        $users = $userManager->findUsers();
        return array(
            'users' => $users,
        );
    }

    public function userUpdateAction(Request $request) {

        $em = $this->getDoctrine()->getManager();
        $aUser = $em->getRepository('ChatterBoxBundle:User')->find($request->query->get('userId'));

        if (!$aUser) {
            throw $this->createNotFoundException(
                'No user found for id '.$id
            );
        }

        $aUser->setUsername($request->query->get('username'));
        $aUser->setEmail($request->query->get('email'));
        $aUser->setFirstName($request->query->get('firstName'));
        $aUser->setLastName($request->query->get('lastName'));
        $aUser->setPassword($request->query->get('password'));
        $em->persist($aUser);

        $em->flush();

        return $this->redirect($this->generateUrl('_settings_user_read'));
    }

    public function userDeleteAction(Request $request) {
        $userManager = $this->container->get('fos_user.user_manager');
        $aUser = $userManager->findUserByEmail($request->query->get('email'));

        $userManager->deleteUser($aUser);

        return $this->redirect($this->generateUrl('_settings_user_read'));
    }
}
