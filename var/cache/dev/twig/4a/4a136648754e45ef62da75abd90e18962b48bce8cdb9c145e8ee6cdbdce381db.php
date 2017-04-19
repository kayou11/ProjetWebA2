<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_2afc491c5d9ac4fc8253732fb670cd2fa6c1fd8df610196f3d453271f714dac6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5db36ecbe0fd31c1dad1a52a07dd3733746018e2b48dc299d97186d161c2e3cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5db36ecbe0fd31c1dad1a52a07dd3733746018e2b48dc299d97186d161c2e3cd->enter($__internal_5db36ecbe0fd31c1dad1a52a07dd3733746018e2b48dc299d97186d161c2e3cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $__internal_12e3a8716be6e35ace533fa379ff0828af0939e68793f9211977319320cc2656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12e3a8716be6e35ace533fa379ff0828af0939e68793f9211977319320cc2656->enter($__internal_12e3a8716be6e35ace533fa379ff0828af0939e68793f9211977319320cc2656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5db36ecbe0fd31c1dad1a52a07dd3733746018e2b48dc299d97186d161c2e3cd->leave($__internal_5db36ecbe0fd31c1dad1a52a07dd3733746018e2b48dc299d97186d161c2e3cd_prof);

        
        $__internal_12e3a8716be6e35ace533fa379ff0828af0939e68793f9211977319320cc2656->leave($__internal_12e3a8716be6e35ace533fa379ff0828af0939e68793f9211977319320cc2656_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}
", "SonataAdminBundle:CRUD:list.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list.html.twig");
    }
}
