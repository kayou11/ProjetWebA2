<?php

/* SonataAdminBundle:CRUD:history.html.twig */
class __TwigTemplate_9f012ff172efab077dfa911967c902c56b6f4acb0cd954ed2ba63c26767486dd extends Twig_Template
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
        $__internal_f9b7830eecf10735789fd85d03cc3ef9bdf7e1d96aef0898029feb523e41599e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9b7830eecf10735789fd85d03cc3ef9bdf7e1d96aef0898029feb523e41599e->enter($__internal_f9b7830eecf10735789fd85d03cc3ef9bdf7e1d96aef0898029feb523e41599e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $__internal_e8ccab981418f822e3df853d5827761faee4d93d1121892e6c1b2e09d38ea967 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8ccab981418f822e3df853d5827761faee4d93d1121892e6c1b2e09d38ea967->enter($__internal_e8ccab981418f822e3df853d5827761faee4d93d1121892e6c1b2e09d38ea967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9b7830eecf10735789fd85d03cc3ef9bdf7e1d96aef0898029feb523e41599e->leave($__internal_f9b7830eecf10735789fd85d03cc3ef9bdf7e1d96aef0898029feb523e41599e_prof);

        
        $__internal_e8ccab981418f822e3df853d5827761faee4d93d1121892e6c1b2e09d38ea967->leave($__internal_e8ccab981418f822e3df853d5827761faee4d93d1121892e6c1b2e09d38ea967_prof);

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
