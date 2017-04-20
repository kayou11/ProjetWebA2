<?php

/* SonataAdminBundle:CRUD:acl.html.twig */
class __TwigTemplate_9a4d38627dbca8ebcbb2cb8b48e2498a9a70451aad7bb5409b99e23da9205a67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "SonataAdminBundle:CRUD:acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b477abbd853543aa973e42a792dd0e1b0afe302d66d785e19b7064b139203af3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b477abbd853543aa973e42a792dd0e1b0afe302d66d785e19b7064b139203af3->enter($__internal_b477abbd853543aa973e42a792dd0e1b0afe302d66d785e19b7064b139203af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $__internal_698509bf61e08b98e88fe2d2ba1d2c86b8cdef189f4d9ad6e3bcb7e2eb4470dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_698509bf61e08b98e88fe2d2ba1d2c86b8cdef189f4d9ad6e3bcb7e2eb4470dd->enter($__internal_698509bf61e08b98e88fe2d2ba1d2c86b8cdef189f4d9ad6e3bcb7e2eb4470dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b477abbd853543aa973e42a792dd0e1b0afe302d66d785e19b7064b139203af3->leave($__internal_b477abbd853543aa973e42a792dd0e1b0afe302d66d785e19b7064b139203af3_prof);

        
        $__internal_698509bf61e08b98e88fe2d2ba1d2c86b8cdef189f4d9ad6e3bcb7e2eb4470dd->leave($__internal_698509bf61e08b98e88fe2d2ba1d2c86b8cdef189f4d9ad6e3bcb7e2eb4470dd_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:acl.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_acl.html.twig' %}
", "SonataAdminBundle:CRUD:acl.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/acl.html.twig");
    }
}
