<?php

/* SonataAdminBundle:CRUD:acl.html.twig */
class __TwigTemplate_9a4d38627dbca8ebcbb2cb8b48e2498a9a70451aad7bb5409b99e23da9205a67 extends Twig_Template
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
        $__internal_ab48d347cf9da3d2aa9f4a20d9761e728039b08e49db5aca13f5697179336487 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab48d347cf9da3d2aa9f4a20d9761e728039b08e49db5aca13f5697179336487->enter($__internal_ab48d347cf9da3d2aa9f4a20d9761e728039b08e49db5aca13f5697179336487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $__internal_edeafb9a0f671e4a88642063ee45c390aebe9f9d9d59aae9199fb3e8cc6cdb81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edeafb9a0f671e4a88642063ee45c390aebe9f9d9d59aae9199fb3e8cc6cdb81->enter($__internal_edeafb9a0f671e4a88642063ee45c390aebe9f9d9d59aae9199fb3e8cc6cdb81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab48d347cf9da3d2aa9f4a20d9761e728039b08e49db5aca13f5697179336487->leave($__internal_ab48d347cf9da3d2aa9f4a20d9761e728039b08e49db5aca13f5697179336487_prof);

        
        $__internal_edeafb9a0f671e4a88642063ee45c390aebe9f9d9d59aae9199fb3e8cc6cdb81->leave($__internal_edeafb9a0f671e4a88642063ee45c390aebe9f9d9d59aae9199fb3e8cc6cdb81_prof);

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
