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
        $__internal_792fd487966a4d63320954d0e949a389ed99544b5c4be1a0c2e3ab051c5b2b94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_792fd487966a4d63320954d0e949a389ed99544b5c4be1a0c2e3ab051c5b2b94->enter($__internal_792fd487966a4d63320954d0e949a389ed99544b5c4be1a0c2e3ab051c5b2b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_compare.html.twig"));

        $__internal_11d1fc50b507b885b9bc463a4e44acfd6f73db79594241e3199532ffdac23566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11d1fc50b507b885b9bc463a4e44acfd6f73db79594241e3199532ffdac23566->enter($__internal_11d1fc50b507b885b9bc463a4e44acfd6f73db79594241e3199532ffdac23566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_792fd487966a4d63320954d0e949a389ed99544b5c4be1a0c2e3ab051c5b2b94->leave($__internal_792fd487966a4d63320954d0e949a389ed99544b5c4be1a0c2e3ab051c5b2b94_prof);

        
        $__internal_11d1fc50b507b885b9bc463a4e44acfd6f73db79594241e3199532ffdac23566->leave($__internal_11d1fc50b507b885b9bc463a4e44acfd6f73db79594241e3199532ffdac23566_prof);

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
