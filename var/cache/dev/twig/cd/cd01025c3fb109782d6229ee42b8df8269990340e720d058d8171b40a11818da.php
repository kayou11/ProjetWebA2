<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_3be2a2d09979a29fbe5733384c870c33c76351dbf0b540264e01a6b4984bb903 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97a85b3a6b56f6c5a6ad742f5f9a93b8aa2904245d467f159cb2889bacbaacf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97a85b3a6b56f6c5a6ad742f5f9a93b8aa2904245d467f159cb2889bacbaacf9->enter($__internal_97a85b3a6b56f6c5a6ad742f5f9a93b8aa2904245d467f159cb2889bacbaacf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $__internal_47b114fa0df28d788cfaa5b1d130b52c97040212d01454c0b0d865816271c924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47b114fa0df28d788cfaa5b1d130b52c97040212d01454c0b0d865816271c924->enter($__internal_47b114fa0df28d788cfaa5b1d130b52c97040212d01454c0b0d865816271c924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97a85b3a6b56f6c5a6ad742f5f9a93b8aa2904245d467f159cb2889bacbaacf9->leave($__internal_97a85b3a6b56f6c5a6ad742f5f9a93b8aa2904245d467f159cb2889bacbaacf9_prof);

        
        $__internal_47b114fa0df28d788cfaa5b1d130b52c97040212d01454c0b0d865816271c924->leave($__internal_47b114fa0df28d788cfaa5b1d130b52c97040212d01454c0b0d865816271c924_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}
", "SonataAdminBundle:CRUD:show.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show.html.twig");
    }
}
