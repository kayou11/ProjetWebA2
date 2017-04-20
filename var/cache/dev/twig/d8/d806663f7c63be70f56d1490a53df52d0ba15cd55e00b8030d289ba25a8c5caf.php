<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_f2538b35850f7394e669e9d1bd8943496937a546f6af8b87443f851dc64e20ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SiteBundle::base.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SiteBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8fb1f30736544958634469e83280b99cade93a2e1164b872c40e2d200781191 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8fb1f30736544958634469e83280b99cade93a2e1164b872c40e2d200781191->enter($__internal_b8fb1f30736544958634469e83280b99cade93a2e1164b872c40e2d200781191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_da09938abc89dbae5f3c951366e52eb5e9d99a4fdfa3321ac8c3d2c2d93d94e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da09938abc89dbae5f3c951366e52eb5e9d99a4fdfa3321ac8c3d2c2d93d94e1->enter($__internal_da09938abc89dbae5f3c951366e52eb5e9d99a4fdfa3321ac8c3d2c2d93d94e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8fb1f30736544958634469e83280b99cade93a2e1164b872c40e2d200781191->leave($__internal_b8fb1f30736544958634469e83280b99cade93a2e1164b872c40e2d200781191_prof);

        
        $__internal_da09938abc89dbae5f3c951366e52eb5e9d99a4fdfa3321ac8c3d2c2d93d94e1->leave($__internal_da09938abc89dbae5f3c951366e52eb5e9d99a4fdfa3321ac8c3d2c2d93d94e1_prof);

    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
        $__internal_aff5b7cc4ff51851822e59db58313fe59e7965a84e1963fdb26d8acdc81f69f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aff5b7cc4ff51851822e59db58313fe59e7965a84e1963fdb26d8acdc81f69f1->enter($__internal_aff5b7cc4ff51851822e59db58313fe59e7965a84e1963fdb26d8acdc81f69f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_e1c0a1c4b05abfdf0bb82db9e5978d5275c44eba4782e25c2e30593ba85d2e42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1c0a1c4b05abfdf0bb82db9e5978d5275c44eba4782e25c2e30593ba85d2e42->enter($__internal_e1c0a1c4b05abfdf0bb82db9e5978d5275c44eba4782e25c2e30593ba85d2e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        
        $__internal_e1c0a1c4b05abfdf0bb82db9e5978d5275c44eba4782e25c2e30593ba85d2e42->leave($__internal_e1c0a1c4b05abfdf0bb82db9e5978d5275c44eba4782e25c2e30593ba85d2e42_prof);

        
        $__internal_aff5b7cc4ff51851822e59db58313fe59e7965a84e1963fdb26d8acdc81f69f1->leave($__internal_aff5b7cc4ff51851822e59db58313fe59e7965a84e1963fdb26d8acdc81f69f1_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_a27b4fc16ed66b9341b7b92667dab18901f91d0c360656ed38256d3f2b7f65dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a27b4fc16ed66b9341b7b92667dab18901f91d0c360656ed38256d3f2b7f65dc->enter($__internal_a27b4fc16ed66b9341b7b92667dab18901f91d0c360656ed38256d3f2b7f65dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_696c097a4a1649b79844cd0bce95f587c19c5e998e1db7d73e3ab1b43fd48873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_696c097a4a1649b79844cd0bce95f587c19c5e998e1db7d73e3ab1b43fd48873->enter($__internal_696c097a4a1649b79844cd0bce95f587c19c5e998e1db7d73e3ab1b43fd48873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    ";
        // line 5
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 7
        echo "
";
        
        $__internal_696c097a4a1649b79844cd0bce95f587c19c5e998e1db7d73e3ab1b43fd48873->leave($__internal_696c097a4a1649b79844cd0bce95f587c19c5e998e1db7d73e3ab1b43fd48873_prof);

        
        $__internal_a27b4fc16ed66b9341b7b92667dab18901f91d0c360656ed38256d3f2b7f65dc->leave($__internal_a27b4fc16ed66b9341b7b92667dab18901f91d0c360656ed38256d3f2b7f65dc_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8a14ffd7ca0e05cc79086c639ad35deb4b9d2473fe33c46818d79f22edd2f61d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a14ffd7ca0e05cc79086c639ad35deb4b9d2473fe33c46818d79f22edd2f61d->enter($__internal_8a14ffd7ca0e05cc79086c639ad35deb4b9d2473fe33c46818d79f22edd2f61d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_575025234e3becadc0dc02ca08297190e6421ae764d3d265e97e2f16c348644a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_575025234e3becadc0dc02ca08297190e6421ae764d3d265e97e2f16c348644a->enter($__internal_575025234e3becadc0dc02ca08297190e6421ae764d3d265e97e2f16c348644a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    ";
        
        $__internal_575025234e3becadc0dc02ca08297190e6421ae764d3d265e97e2f16c348644a->leave($__internal_575025234e3becadc0dc02ca08297190e6421ae764d3d265e97e2f16c348644a_prof);

        
        $__internal_8a14ffd7ca0e05cc79086c639ad35deb4b9d2473fe33c46818d79f22edd2f61d->leave($__internal_8a14ffd7ca0e05cc79086c639ad35deb4b9d2473fe33c46818d79f22edd2f61d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 6,  84 => 5,  73 => 7,  71 => 5,  68 => 4,  59 => 3,  42 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SiteBundle::base.html.twig\" %}
{% block style %}{% endblock %}
{% block content %}

    {% block fos_user_content %}
    {% endblock fos_user_content %}

{% endblock %}", "@FOSUser/layout.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/UserBundle/Resources/views/layout.html.twig");
    }
}
