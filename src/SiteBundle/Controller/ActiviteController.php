<?php
/**
 * Created by PhpStorm.
 * User: PierreKayou
 * Date: 18/04/2017
 * Time: 22:00
 */

namespace SiteBundle\Controller;
use SiteBundle\Entity\Activity;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class ActiviteController extends Controller
{
    public function displayActivitebyIDAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $images = $em
            ->getRepository('SiteBundle:Image')
            ->find($id);

        $activity = $em
            ->getRepository('SiteBundle:Activity')
            ->find($id);

        return $this->render('SiteBundle:Pages:activite.html.twig', array(
            'activity' =>$activity,
            'images' => $images
        ));
    }

    public function viewAction()
    {
        $em = $this->getDoctrine()->getManager();

        $listactivity = $em
            ->getRepository('SiteBundle:Activity')
            ->findAll();

        return $this->render('SiteBundle:Pages:activites.html.twig',array(
            'activities' => $listactivity
        ));
    }
}