<?php

namespace HomyjobBundle\Controller\Inscription;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use HomyjobBundle\Entity\Role;


class FormController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('@Homyjob/Form/index.html.twig');
    }

    /**
     * @Route("/new")
     */
    public function roleAction(Request $request)
    {
    $role = new Role();
        $form = $this->createFormBuilder($role)
            ->add('save', SubmitType::class, array('label' => 'etape suivate'))
            ->getForm();

        return $this->render('@Homyjob/Form/newAccount.html.twig', array(
            'role' => $role,
            'form' => $form->createView(),
        ));
    }

}

