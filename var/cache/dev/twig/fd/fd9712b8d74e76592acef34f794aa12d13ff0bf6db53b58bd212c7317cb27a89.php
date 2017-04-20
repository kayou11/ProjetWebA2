<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_4363926b3553d0f3dab3b248a4f2c797d49461b37e5629c3296b87d66ac7bda1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_864e2a66a619fc558d1b90ce167419193bf093b3ad4cba4b22be3610dc2f56b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_864e2a66a619fc558d1b90ce167419193bf093b3ad4cba4b22be3610dc2f56b6->enter($__internal_864e2a66a619fc558d1b90ce167419193bf093b3ad4cba4b22be3610dc2f56b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_8c5c2a56fe57495ae2930f04a7e846a460e109726749b30372f6a9aea4926d66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c5c2a56fe57495ae2930f04a7e846a460e109726749b30372f6a9aea4926d66->enter($__internal_8c5c2a56fe57495ae2930f04a7e846a460e109726749b30372f6a9aea4926d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_864e2a66a619fc558d1b90ce167419193bf093b3ad4cba4b22be3610dc2f56b6->leave($__internal_864e2a66a619fc558d1b90ce167419193bf093b3ad4cba4b22be3610dc2f56b6_prof);

        
        $__internal_8c5c2a56fe57495ae2930f04a7e846a460e109726749b30372f6a9aea4926d66->leave($__internal_8c5c2a56fe57495ae2930f04a7e846a460e109726749b30372f6a9aea4926d66_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cd8882455aa3e8128acb72f6d3c0061c62c40cd2965e77f520fd1d341156a1f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd8882455aa3e8128acb72f6d3c0061c62c40cd2965e77f520fd1d341156a1f9->enter($__internal_cd8882455aa3e8128acb72f6d3c0061c62c40cd2965e77f520fd1d341156a1f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a287530d16d44de7352b615f1da2fc7ce26140679634e1ce9b9e1cbeefa68276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a287530d16d44de7352b615f1da2fc7ce26140679634e1ce9b9e1cbeefa68276->enter($__internal_a287530d16d44de7352b615f1da2fc7ce26140679634e1ce9b9e1cbeefa68276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_a287530d16d44de7352b615f1da2fc7ce26140679634e1ce9b9e1cbeefa68276->leave($__internal_a287530d16d44de7352b615f1da2fc7ce26140679634e1ce9b9e1cbeefa68276_prof);

        
        $__internal_cd8882455aa3e8128acb72f6d3c0061c62c40cd2965e77f520fd1d341156a1f9->leave($__internal_cd8882455aa3e8128acb72f6d3c0061c62c40cd2965e77f520fd1d341156a1f9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
