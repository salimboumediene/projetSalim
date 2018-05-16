<?php

namespace HomyjobBundle\Controller\Configuration;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ConfigController extends Controller
{
    /**
     * @Route("/config")
     */
    public function indexAction()
    {
        return $this->render('@HomyjobBundle/Config/indexConfig.html.twig', array(
            // ...
        ));
    }

}
