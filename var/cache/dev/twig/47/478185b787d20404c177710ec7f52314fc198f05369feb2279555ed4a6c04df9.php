<?php

/* SonataAdminBundle:CRUD:history.html.twig */
class __TwigTemplate_bd1c8516ba3766d5093a51a8b5d978c728fe1772142b2dfde0b774d9d804fb3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_history.html.twig", "SonataAdminBundle:CRUD:history.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa1acb866d499d8871d57d5dc3d8c70392660e92d0d8f1d65edbfb5dfceeedcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa1acb866d499d8871d57d5dc3d8c70392660e92d0d8f1d65edbfb5dfceeedcc->enter($__internal_fa1acb866d499d8871d57d5dc3d8c70392660e92d0d8f1d65edbfb5dfceeedcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $__internal_ca3e3d8bc60c9fd0c1e310e3ad6fc70bd59c45644cb5709b3e3c37d82a60ba5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca3e3d8bc60c9fd0c1e310e3ad6fc70bd59c45644cb5709b3e3c37d82a60ba5a->enter($__internal_ca3e3d8bc60c9fd0c1e310e3ad6fc70bd59c45644cb5709b3e3c37d82a60ba5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa1acb866d499d8871d57d5dc3d8c70392660e92d0d8f1d65edbfb5dfceeedcc->leave($__internal_fa1acb866d499d8871d57d5dc3d8c70392660e92d0d8f1d65edbfb5dfceeedcc_prof);

        
        $__internal_ca3e3d8bc60c9fd0c1e310e3ad6fc70bd59c45644cb5709b3e3c37d82a60ba5a->leave($__internal_ca3e3d8bc60c9fd0c1e310e3ad6fc70bd59c45644cb5709b3e3c37d82a60ba5a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_history.html.twig' %}
", "SonataAdminBundle:CRUD:history.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/history.html.twig");
    }
}
