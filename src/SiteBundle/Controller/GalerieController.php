<?php
/**
 * Created by PhpStorm.
 * User: antoine
 * Date: 18/04/2017
 * Time: 08:54
 */

namespace SiteBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SiteBundle\Entity\Activity;
use SiteBundle\Entity\Image;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class GalerieController extends Controller
{
    public function viewAction()
    {
        return $this->render('SiteBundle:Pages:galerie_album.html.twig');
    }
}