<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_8dc557731fae78e1ce4fdc3d1b08302db6d847bc896ce384c7882b48395357da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9d7c7e308068ce2cfb9804b6fbe84f8989581d798bdd6f3c841b33c89099f65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9d7c7e308068ce2cfb9804b6fbe84f8989581d798bdd6f3c841b33c89099f65->enter($__internal_f9d7c7e308068ce2cfb9804b6fbe84f8989581d798bdd6f3c841b33c89099f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $__internal_715ad2eccde189f1c9345724673699c17bfb6a5366c048c87f3b4ce176ad629e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_715ad2eccde189f1c9345724673699c17bfb6a5366c048c87f3b4ce176ad629e->enter($__internal_715ad2eccde189f1c9345724673699c17bfb6a5366c048c87f3b4ce176ad629e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9d7c7e308068ce2cfb9804b6fbe84f8989581d798bdd6f3c841b33c89099f65->leave($__internal_f9d7c7e308068ce2cfb9804b6fbe84f8989581d798bdd6f3c841b33c89099f65_prof);

        
        $__internal_715ad2eccde189f1c9345724673699c17bfb6a5366c048c87f3b4ce176ad629e->leave($__internal_715ad2eccde189f1c9345724673699c17bfb6a5366c048c87f3b4ce176ad629e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}
", "SonataAdminBundle:CRUD:list.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list.html.twig");
    }
}
