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

        $activity = $em
            ->getRepository('SiteBundle:Activity')
            ->find($id);

        $images = $em
            ->getRepository('SiteBundle:Image')
            ->findby(array('activity_id', $id));

        return $this->render('SiteBundle:Pages:activite.html.twig', array(
            'images' => $images,
            'activity' => $activity
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