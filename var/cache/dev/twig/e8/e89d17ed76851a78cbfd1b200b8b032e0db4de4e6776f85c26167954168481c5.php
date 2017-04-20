<?php

/* SonataAdminBundle:Core:create_button.html.twig */
class __TwigTemplate_640b2087498b9b34397f57ce891e6c525771ac08c436a7e9b84d8353277126fa extends Twig_Template
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
        $__internal_bd3d502e828fd97910f0b437befffce2f5096f9229ae4a381c390ed68a808e69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd3d502e828fd97910f0b437befffce2f5096f9229ae4a381c390ed68a808e69->enter($__internal_bd3d502e828fd97910f0b437befffce2f5096f9229ae4a381c390ed68a808e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:create_button.html.twig"));

        $__internal_7bb7a86e898bc0d26c76469be8a0aea8487b9273fc96992c183e8189747e6ba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bb7a86e898bc0d26c76469be8a0aea8487b9273fc96992c183e8189747e6ba0->enter($__internal_7bb7a86e898bc0d26c76469be8a0aea8487b9273fc96992c183e8189747e6ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:create_button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd3d502e828fd97910f0b437befffce2f5096f9229ae4a381c390ed68a808e69->leave($__internal_bd3d502e828fd97910f0b437befffce2f5096f9229ae4a381c390ed68a808e69_prof);

        
        $__internal_7bb7a86e898bc0d26c76469be8a0aea8487b9273fc96992c183e8189747e6ba0->leave($__internal_7bb7a86e898bc0d26c76469be8a0aea8487b9273fc96992c183e8189747e6ba0_prof);

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
