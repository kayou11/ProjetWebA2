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
        $__internal_bd68b72ccba0822f918f0f52a29cf2eb08b780a29930928befa40aa58226ac30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd68b72ccba0822f918f0f52a29cf2eb08b780a29930928befa40aa58226ac30->enter($__internal_bd68b72ccba0822f918f0f52a29cf2eb08b780a29930928befa40aa58226ac30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $__internal_a4ac0038051f180b1885804191ad44ec767dc9074b684d30a03df4974a644081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4ac0038051f180b1885804191ad44ec767dc9074b684d30a03df4974a644081->enter($__internal_a4ac0038051f180b1885804191ad44ec767dc9074b684d30a03df4974a644081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd68b72ccba0822f918f0f52a29cf2eb08b780a29930928befa40aa58226ac30->leave($__internal_bd68b72ccba0822f918f0f52a29cf2eb08b780a29930928befa40aa58226ac30_prof);

        
        $__internal_a4ac0038051f180b1885804191ad44ec767dc9074b684d30a03df4974a644081->leave($__internal_a4ac0038051f180b1885804191ad44ec767dc9074b684d30a03df4974a644081_prof);

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
