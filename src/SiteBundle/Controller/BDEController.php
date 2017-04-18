<?php
/**
 * Created by PhpStorm.
 * User: PierreKayou
 * Date: 18/04/2017
 * Time: 12:58
 */

namespace SiteBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BDEController extends Controller
{
    public function bdeAction()
    {
        return $this->render('SiteBundle:Pages:membresbde.html.twig');
    }

    public function contactAction()
    {
        return $this->render('SiteBundle:Pages:contact.html.twig');
    }
}