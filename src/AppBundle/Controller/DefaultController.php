<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $underwares = $this->getDoctrine()->getRepository('AppBundle:Underware')->findAll();
        
        return $this->render('homepage/index.html.twig', [
            'underwares' => $underwares
        ]);
    }
}
