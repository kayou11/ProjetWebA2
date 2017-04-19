<?php
/**
 * Created by PhpStorm.
 * User: PierreKayou
 * Date: 19/04/2017
 * Time: 15:32
 */

namespace SiteBundle\Admin;

use SiteBundle\Entity\Activity;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ImageAdmin extends AbstractAdmin
{
    #These lines configure which fields are displayed on the edit and create actions. The FormMapper behaves similar to the FormBuilder of the Symfony Form component;
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name', 'text')
            ->add('activity', EntityType::class, array(
                'class' => 'SiteBundle:Activity',
                'choice_label' => function (Activity $id){
                    return $id->getId();
                }
            ));
    }
    #This method configures the filters, used to filter and sort the list of models;
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('name');
    }
    #Here you specify which fields are shown when all models are listed (the addIdentifier() method means that this field will link to the show/edit page of this particular model).
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('name');
    }
}