<?php

/* SonataAdminBundle:CRUD:list_inner_row.html.twig */
class __TwigTemplate_a5206493b2bb9d370679a823e408b452cf7e4b82b6aacb17461bd67de190d2c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_inner_row.html.twig", "SonataAdminBundle:CRUD:list_inner_row.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f58be88392f35fc1a3703a0b96b3b55721bf98388bbb7c28e7bc97aab139fc04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f58be88392f35fc1a3703a0b96b3b55721bf98388bbb7c28e7bc97aab139fc04->enter($__internal_f58be88392f35fc1a3703a0b96b3b55721bf98388bbb7c28e7bc97aab139fc04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $__internal_d7f86a52915008d80701a29159b8b3437954629140d455e691756058b09542fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7f86a52915008d80701a29159b8b3437954629140d455e691756058b09542fd->enter($__internal_d7f86a52915008d80701a29159b8b3437954629140d455e691756058b09542fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f58be88392f35fc1a3703a0b96b3b55721bf98388bbb7c28e7bc97aab139fc04->leave($__internal_f58be88392f35fc1a3703a0b96b3b55721bf98388bbb7c28e7bc97aab139fc04_prof);

        
        $__internal_d7f86a52915008d80701a29159b8b3437954629140d455e691756058b09542fd->leave($__internal_d7f86a52915008d80701a29159b8b3437954629140d455e691756058b09542fd_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_inner_row.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_list_inner_row.html.twig' %}
", "SonataAdminBundle:CRUD:list_inner_row.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_inner_row.html.twig");
    }
}
