<?php

/* SonataAdminBundle:CRUD:show_compare.html.twig */
class __TwigTemplate_db9c8eb246a938d308a92e8a218caa7a2ee0ce550728982a09cb3c46d02b35cc extends Twig_Template
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
        $__internal_0b0a074578ccd828927dc2d4c3bb71d41217267a46fe0afef8c2bc242d6b2f82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b0a074578ccd828927dc2d4c3bb71d41217267a46fe0afef8c2bc242d6b2f82->enter($__internal_0b0a074578ccd828927dc2d4c3bb71d41217267a46fe0afef8c2bc242d6b2f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_compare.html.twig"));

        $__internal_9838df1be205d3f668a126907cf39398e3b11776e2b9e1d330ef78439e97e98d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9838df1be205d3f668a126907cf39398e3b11776e2b9e1d330ef78439e97e98d->enter($__internal_9838df1be205d3f668a126907cf39398e3b11776e2b9e1d330ef78439e97e98d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b0a074578ccd828927dc2d4c3bb71d41217267a46fe0afef8c2bc242d6b2f82->leave($__internal_0b0a074578ccd828927dc2d4c3bb71d41217267a46fe0afef8c2bc242d6b2f82_prof);

        
        $__internal_9838df1be205d3f668a126907cf39398e3b11776e2b9e1d330ef78439e97e98d->leave($__internal_9838df1be205d3f668a126907cf39398e3b11776e2b9e1d330ef78439e97e98d_prof);

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
