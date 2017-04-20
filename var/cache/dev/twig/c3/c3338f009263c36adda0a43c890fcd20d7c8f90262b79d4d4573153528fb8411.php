<?php

/* SonataAdminBundle:CRUD:show_compare.html.twig */
class __TwigTemplate_f57964f006cb88b8503aeee72c5a58f1c41f95547395b575834be24298ec7724 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_compare.html.twig", "SonataAdminBundle:CRUD:show_compare.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9c98039146ab12b2493c7709d8361a88eab4c11fbacaa4bc9dbff99edd38ca0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9c98039146ab12b2493c7709d8361a88eab4c11fbacaa4bc9dbff99edd38ca0->enter($__internal_c9c98039146ab12b2493c7709d8361a88eab4c11fbacaa4bc9dbff99edd38ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_compare.html.twig"));

        $__internal_9eaff5f1184d4e46ff2ad6777b7ae4a7ae93e99c2e55511d9dafdcdc80710832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eaff5f1184d4e46ff2ad6777b7ae4a7ae93e99c2e55511d9dafdcdc80710832->enter($__internal_9eaff5f1184d4e46ff2ad6777b7ae4a7ae93e99c2e55511d9dafdcdc80710832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9c98039146ab12b2493c7709d8361a88eab4c11fbacaa4bc9dbff99edd38ca0->leave($__internal_c9c98039146ab12b2493c7709d8361a88eab4c11fbacaa4bc9dbff99edd38ca0_prof);

        
        $__internal_9eaff5f1184d4e46ff2ad6777b7ae4a7ae93e99c2e55511d9dafdcdc80710832->leave($__internal_9eaff5f1184d4e46ff2ad6777b7ae4a7ae93e99c2e55511d9dafdcdc80710832_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_compare.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_show_compare.html.twig' %}
", "SonataAdminBundle:CRUD:show_compare.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_compare.html.twig");
    }
}
