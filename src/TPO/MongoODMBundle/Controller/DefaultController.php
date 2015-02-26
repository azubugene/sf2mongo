<?php

namespace TPO\MongoODMBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TPOMongoODMBundle:Default:index.html.twig', array('name' => $name));
    }
}
