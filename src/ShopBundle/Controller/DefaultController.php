<?php

namespace ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function viewAction()
    {
        $em = $this->getDoctrine()->getManager();

        $articles = $em
            ->getRepository('ShopBundle:Article')
            ->findAll();

        return $this->render('ShopBundle:Boutique:boutique.html.twig',array(
            'articles' => $articles
        ));

    }

    public function viewArticleAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $article = $em
            ->getRepository('SiteBundle:Activity')
            ->find($id);

        return $this->render('ShopBundle:Boutique:article.html.twig', array(
            'article' =>$article,
        ));
    }
}
