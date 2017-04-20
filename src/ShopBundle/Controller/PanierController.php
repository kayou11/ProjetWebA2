<?php

namespace ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PanierController extends Controller
{
    public function viewAction()
    {
        $em = $this->getDoctrine()->getManager();

        $articles = $em
            ->getRepository('SiteBundle:Activity')
            ->findAll();

        return $this->render('ShopBundle:Boutique:panier.html.twig',array(
            'articles' => $articles
        ));

    }
}


