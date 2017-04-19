<?php

/* SonataAdminBundle:CRUD:acl.html.twig */
class __TwigTemplate_2b9cc6f6df275dc8770b2b32332c5b7b4b6a24d6c922b5398387607374d460ac extends Twig_Template
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
        $__internal_f59bb560a876237914cfcb7eb83570a28a06db172bb252596b5a9aa42f2adbc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f59bb560a876237914cfcb7eb83570a28a06db172bb252596b5a9aa42f2adbc6->enter($__internal_f59bb560a876237914cfcb7eb83570a28a06db172bb252596b5a9aa42f2adbc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $__internal_bacab32a40268524fa0ff1484f7dff269192d01b7cfd9f8e5bfb578a8b0817ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bacab32a40268524fa0ff1484f7dff269192d01b7cfd9f8e5bfb578a8b0817ee->enter($__internal_bacab32a40268524fa0ff1484f7dff269192d01b7cfd9f8e5bfb578a8b0817ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f59bb560a876237914cfcb7eb83570a28a06db172bb252596b5a9aa42f2adbc6->leave($__internal_f59bb560a876237914cfcb7eb83570a28a06db172bb252596b5a9aa42f2adbc6_prof);

        
        $__internal_bacab32a40268524fa0ff1484f7dff269192d01b7cfd9f8e5bfb578a8b0817ee->leave($__internal_bacab32a40268524fa0ff1484f7dff269192d01b7cfd9f8e5bfb578a8b0817ee_prof);

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
