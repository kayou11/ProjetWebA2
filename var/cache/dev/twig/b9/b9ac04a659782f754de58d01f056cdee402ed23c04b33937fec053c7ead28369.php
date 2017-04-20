<?php

/* SonataAdminBundle:CRUD:acl.html.twig */
class __TwigTemplate_2b9cc6f6df275dc8770b2b32332c5b7b4b6a24d6c922b5398387607374d460ac extends Twig_Template
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
        $__internal_cdbef96834c52fd2efa2a2df92995f377bc88cab6e38eeac4ca105f035e2269f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdbef96834c52fd2efa2a2df92995f377bc88cab6e38eeac4ca105f035e2269f->enter($__internal_cdbef96834c52fd2efa2a2df92995f377bc88cab6e38eeac4ca105f035e2269f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $__internal_6c1f3a15e1248fd1c1481400754ef0dc241ac4e37c26e1ebc275b5294a7cecc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c1f3a15e1248fd1c1481400754ef0dc241ac4e37c26e1ebc275b5294a7cecc3->enter($__internal_6c1f3a15e1248fd1c1481400754ef0dc241ac4e37c26e1ebc275b5294a7cecc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdbef96834c52fd2efa2a2df92995f377bc88cab6e38eeac4ca105f035e2269f->leave($__internal_cdbef96834c52fd2efa2a2df92995f377bc88cab6e38eeac4ca105f035e2269f_prof);

        
        $__internal_6c1f3a15e1248fd1c1481400754ef0dc241ac4e37c26e1ebc275b5294a7cecc3->leave($__internal_6c1f3a15e1248fd1c1481400754ef0dc241ac4e37c26e1ebc275b5294a7cecc3_prof);

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
