<?php

/* SonataAdminBundle:Core:create_button.html.twig */
class __TwigTemplate_836907586a515d5f8d8c7d475778877b2fa62ec2984f8a60c43de385a1af64e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:Core:create_button.html.twig", 15);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2dd95c27f8aabe28a1da897d3769345ee68570ce2aba9a3fffb23336b5963903 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dd95c27f8aabe28a1da897d3769345ee68570ce2aba9a3fffb23336b5963903->enter($__internal_2dd95c27f8aabe28a1da897d3769345ee68570ce2aba9a3fffb23336b5963903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:create_button.html.twig"));

        $__internal_bde8b963d21046761e5c6dbfdf800865cd87242405044d83a6726a2181782f9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bde8b963d21046761e5c6dbfdf800865cd87242405044d83a6726a2181782f9e->enter($__internal_bde8b963d21046761e5c6dbfdf800865cd87242405044d83a6726a2181782f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:create_button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2dd95c27f8aabe28a1da897d3769345ee68570ce2aba9a3fffb23336b5963903->leave($__internal_2dd95c27f8aabe28a1da897d3769345ee68570ce2aba9a3fffb23336b5963903_prof);

        
        $__internal_bde8b963d21046761e5c6dbfdf800865cd87242405044d83a6726a2181782f9e->leave($__internal_bde8b963d21046761e5c6dbfdf800865cd87242405044d83a6726a2181782f9e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 15,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{# DEPRECATED #}
{# This file is kept here for backward compatibility - Rather use SonataAdminBundle:Button:create_button.html.twig #}

{% extends 'SonataAdminBundle:Button:create_button.html.twig' %}
", "SonataAdminBundle:Core:create_button.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/Core/create_button.html.twig");
    }
}
