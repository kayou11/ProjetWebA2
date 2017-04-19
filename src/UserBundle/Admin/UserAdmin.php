<?php
namespace UserBundle\Admin;

/**
 * Created by PhpStorm.
 * User: PierreKayou
 * Date: 19/04/2017
 * Time: 15:07
 */

use function Sodium\add;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class UserAdmin extends AbstractAdmin
{
    #These lines configure which fields are displayed on the edit and create actions. The FormMapper behaves similar to the FormBuilder of the Symfony Form component;
    protected function configureFormFields(FormMapper $formMapper)
    {
        $permissions = array(
            'ROLE_USER'        => 'role visiteur',
            'ROLE_BDE'         => 'role moderateur',
            'ROLE_ADMIN'       => 'role admin',
            'ROLE_SUPER_ADMIN' => 'super user'
        );

        $formMapper
            ->add('username', 'text')
            ->add('email', 'text')
            ->add('password', 'text')
            ->add('name', 'text')
            ->add('lastname', 'text')
            ->add('roles',
                ChoiceType::class,
                array(
                    'label'   =>   'Roles',
                    'choices' => $permissions,
                    'multiple'=> true)
            )
            ->add('enabled', 'checkbox');
    }
    #This method configures the filters, used to filter and sort the list of models;
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('name');


    }
    #Here you specify which fields are shown when all models are listed (the addIdentifier() method means that this field will link to the show/edit page of this particular model).
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('username')
            ->addIdentifier('email')
            ->addIdentifier('name')
            ->addIdentifier('lastname')
            ->addIdentifier('roles');
    }
}