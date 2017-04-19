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
        $em = $this->getDoctrine()->getManager();

        $activity = $em
            ->getRepository('SiteBundle:Activity')
            ->findAll();

        $images = $em
            ->getRepository('SiteBundle:Image')
            ->find(function (Activity $id){
                return $id->getId();
            });

        return $this->render('SiteBundle:Pages:galerie_album.html.twig', array(
            'images' => $images,
            'activity' => $activity
        ));
    }
}