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
        $__internal_a1a26d97178c75d74dd663ccfd0eb56cfb236ee194ea874f5083d366216cf748 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1a26d97178c75d74dd663ccfd0eb56cfb236ee194ea874f5083d366216cf748->enter($__internal_a1a26d97178c75d74dd663ccfd0eb56cfb236ee194ea874f5083d366216cf748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_f5d93d6cdc40707bd250e49a6ef2d50ae821e82b4b091f6d5bfb09f893621b01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5d93d6cdc40707bd250e49a6ef2d50ae821e82b4b091f6d5bfb09f893621b01->enter($__internal_f5d93d6cdc40707bd250e49a6ef2d50ae821e82b4b091f6d5bfb09f893621b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1a26d97178c75d74dd663ccfd0eb56cfb236ee194ea874f5083d366216cf748->leave($__internal_a1a26d97178c75d74dd663ccfd0eb56cfb236ee194ea874f5083d366216cf748_prof);

        
        $__internal_f5d93d6cdc40707bd250e49a6ef2d50ae821e82b4b091f6d5bfb09f893621b01->leave($__internal_f5d93d6cdc40707bd250e49a6ef2d50ae821e82b4b091f6d5bfb09f893621b01_prof);

    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
        $__internal_5be79e1cb9562595c53894fa004db23f69619ce0b46dc612029a24fafa470919 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5be79e1cb9562595c53894fa004db23f69619ce0b46dc612029a24fafa470919->enter($__internal_5be79e1cb9562595c53894fa004db23f69619ce0b46dc612029a24fafa470919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_a443d56ba47daac0ef770e24db9e46e9e26b04e8fe3f60215dfccd206bf5bbf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a443d56ba47daac0ef770e24db9e46e9e26b04e8fe3f60215dfccd206bf5bbf7->enter($__internal_a443d56ba47daac0ef770e24db9e46e9e26b04e8fe3f60215dfccd206bf5bbf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        
        $__internal_a443d56ba47daac0ef770e24db9e46e9e26b04e8fe3f60215dfccd206bf5bbf7->leave($__internal_a443d56ba47daac0ef770e24db9e46e9e26b04e8fe3f60215dfccd206bf5bbf7_prof);

        
        $__internal_5be79e1cb9562595c53894fa004db23f69619ce0b46dc612029a24fafa470919->leave($__internal_5be79e1cb9562595c53894fa004db23f69619ce0b46dc612029a24fafa470919_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_06198face90f017930bdd02ff0c4a3479595e9daa225162b06ab37e698623a30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06198face90f017930bdd02ff0c4a3479595e9daa225162b06ab37e698623a30->enter($__internal_06198face90f017930bdd02ff0c4a3479595e9daa225162b06ab37e698623a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_19479a8c6aeb86d364ee48068d59cffefbe77ff8e885eb920fa87d99b66c763b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19479a8c6aeb86d364ee48068d59cffefbe77ff8e885eb920fa87d99b66c763b->enter($__internal_19479a8c6aeb86d364ee48068d59cffefbe77ff8e885eb920fa87d99b66c763b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    ";
        // line 5
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 7
        echo "
";
        
        $__internal_19479a8c6aeb86d364ee48068d59cffefbe77ff8e885eb920fa87d99b66c763b->leave($__internal_19479a8c6aeb86d364ee48068d59cffefbe77ff8e885eb920fa87d99b66c763b_prof);

        
        $__internal_06198face90f017930bdd02ff0c4a3479595e9daa225162b06ab37e698623a30->leave($__internal_06198face90f017930bdd02ff0c4a3479595e9daa225162b06ab37e698623a30_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ce137e27f4e8f37d6cd49a295a643ebb5c705a87d573d7297ec477d8e35779a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce137e27f4e8f37d6cd49a295a643ebb5c705a87d573d7297ec477d8e35779a1->enter($__internal_ce137e27f4e8f37d6cd49a295a643ebb5c705a87d573d7297ec477d8e35779a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b9b900315fffe0eb57dfe1a4776246c2c48570ab03af4db24384a5eb554bd6d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9b900315fffe0eb57dfe1a4776246c2c48570ab03af4db24384a5eb554bd6d3->enter($__internal_b9b900315fffe0eb57dfe1a4776246c2c48570ab03af4db24384a5eb554bd6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    ";
        
        $__internal_b9b900315fffe0eb57dfe1a4776246c2c48570ab03af4db24384a5eb554bd6d3->leave($__internal_b9b900315fffe0eb57dfe1a4776246c2c48570ab03af4db24384a5eb554bd6d3_prof);

        
        $__internal_ce137e27f4e8f37d6cd49a295a643ebb5c705a87d573d7297ec477d8e35779a1->leave($__internal_ce137e27f4e8f37d6cd49a295a643ebb5c705a87d573d7297ec477d8e35779a1_prof);

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
