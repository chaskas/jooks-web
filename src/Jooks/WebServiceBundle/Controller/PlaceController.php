<?php

namespace Jooks\WebServiceBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\Rest\Util\Codes;
use Symfony\Component\HttpFoundation\Request;

use Jooks\WebServiceBundle\Entity\Place;
use Jooks\WebServiceBundle\Form\PlaceType;

use FOS\RestBundle\View\View;



class PlaceController extends FOSRestController
{
    
    public function cgetAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('JooksAdminBundle:Place')->findAll();

        $view = View::create();

        $view->setData($entities);

        return $this->handleView($view);
    }
}