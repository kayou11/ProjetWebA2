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
        $__internal_095910b3c1af3860ac1edb706419886eabdadf2e7516fac888780b1898835ad6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_095910b3c1af3860ac1edb706419886eabdadf2e7516fac888780b1898835ad6->enter($__internal_095910b3c1af3860ac1edb706419886eabdadf2e7516fac888780b1898835ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $__internal_ed01f98bbac15bb1a39e48e86dbb740078e45c81d23a3aa607d4ea2df78afdfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed01f98bbac15bb1a39e48e86dbb740078e45c81d23a3aa607d4ea2df78afdfe->enter($__internal_ed01f98bbac15bb1a39e48e86dbb740078e45c81d23a3aa607d4ea2df78afdfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_095910b3c1af3860ac1edb706419886eabdadf2e7516fac888780b1898835ad6->leave($__internal_095910b3c1af3860ac1edb706419886eabdadf2e7516fac888780b1898835ad6_prof);

        
        $__internal_ed01f98bbac15bb1a39e48e86dbb740078e45c81d23a3aa607d4ea2df78afdfe->leave($__internal_ed01f98bbac15bb1a39e48e86dbb740078e45c81d23a3aa607d4ea2df78afdfe_prof);

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
