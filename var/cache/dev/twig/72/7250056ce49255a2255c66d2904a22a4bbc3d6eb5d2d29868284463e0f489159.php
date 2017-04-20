<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_8823f3c351a64e6b7fe6aba7fff79457722a2b5683171a887f59171b752daafd extends Twig_Template
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
        $__internal_e9204f4570704e1145cb428f9c49d381d77fb5117af0d7c3df69274b3998dab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9204f4570704e1145cb428f9c49d381d77fb5117af0d7c3df69274b3998dab2->enter($__internal_e9204f4570704e1145cb428f9c49d381d77fb5117af0d7c3df69274b3998dab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_f2b125f2868872cb0ed9cf76acbe9a30dd3377b094eaefa5092f3cc4285eb2e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2b125f2868872cb0ed9cf76acbe9a30dd3377b094eaefa5092f3cc4285eb2e3->enter($__internal_f2b125f2868872cb0ed9cf76acbe9a30dd3377b094eaefa5092f3cc4285eb2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9204f4570704e1145cb428f9c49d381d77fb5117af0d7c3df69274b3998dab2->leave($__internal_e9204f4570704e1145cb428f9c49d381d77fb5117af0d7c3df69274b3998dab2_prof);

        
        $__internal_f2b125f2868872cb0ed9cf76acbe9a30dd3377b094eaefa5092f3cc4285eb2e3->leave($__internal_f2b125f2868872cb0ed9cf76acbe9a30dd3377b094eaefa5092f3cc4285eb2e3_prof);

    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
        $__internal_1283a48b1cff3ad224af788fffe6999af0dd9393f1d046d6ccb189f5631ded21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1283a48b1cff3ad224af788fffe6999af0dd9393f1d046d6ccb189f5631ded21->enter($__internal_1283a48b1cff3ad224af788fffe6999af0dd9393f1d046d6ccb189f5631ded21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_99f8ab18a2ad464a0bab5c8c65860ec46cbd2310342af6985d563394d33e60d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99f8ab18a2ad464a0bab5c8c65860ec46cbd2310342af6985d563394d33e60d7->enter($__internal_99f8ab18a2ad464a0bab5c8c65860ec46cbd2310342af6985d563394d33e60d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        
        $__internal_99f8ab18a2ad464a0bab5c8c65860ec46cbd2310342af6985d563394d33e60d7->leave($__internal_99f8ab18a2ad464a0bab5c8c65860ec46cbd2310342af6985d563394d33e60d7_prof);

        
        $__internal_1283a48b1cff3ad224af788fffe6999af0dd9393f1d046d6ccb189f5631ded21->leave($__internal_1283a48b1cff3ad224af788fffe6999af0dd9393f1d046d6ccb189f5631ded21_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_a01f986c4549c3145a0e1f8ba1aa5d45dc9afb14c0dd3da7cb43767291a139fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a01f986c4549c3145a0e1f8ba1aa5d45dc9afb14c0dd3da7cb43767291a139fd->enter($__internal_a01f986c4549c3145a0e1f8ba1aa5d45dc9afb14c0dd3da7cb43767291a139fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_790df32238ae40aaeaa0b08efe0878f9ef8f99e178ecf8006c95b327eb0eb4c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_790df32238ae40aaeaa0b08efe0878f9ef8f99e178ecf8006c95b327eb0eb4c3->enter($__internal_790df32238ae40aaeaa0b08efe0878f9ef8f99e178ecf8006c95b327eb0eb4c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    ";
        // line 5
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 7
        echo "
";
        
        $__internal_790df32238ae40aaeaa0b08efe0878f9ef8f99e178ecf8006c95b327eb0eb4c3->leave($__internal_790df32238ae40aaeaa0b08efe0878f9ef8f99e178ecf8006c95b327eb0eb4c3_prof);

        
        $__internal_a01f986c4549c3145a0e1f8ba1aa5d45dc9afb14c0dd3da7cb43767291a139fd->leave($__internal_a01f986c4549c3145a0e1f8ba1aa5d45dc9afb14c0dd3da7cb43767291a139fd_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_05b837f82fd57189e46d3e03a67063defc32cee2beff4e111dacb374cc5d8338 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05b837f82fd57189e46d3e03a67063defc32cee2beff4e111dacb374cc5d8338->enter($__internal_05b837f82fd57189e46d3e03a67063defc32cee2beff4e111dacb374cc5d8338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ff855ba19f91f71ec6dcb12232ee08d397b8095d89d2ce6931bc75f860fbf067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff855ba19f91f71ec6dcb12232ee08d397b8095d89d2ce6931bc75f860fbf067->enter($__internal_ff855ba19f91f71ec6dcb12232ee08d397b8095d89d2ce6931bc75f860fbf067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    ";
        
        $__internal_ff855ba19f91f71ec6dcb12232ee08d397b8095d89d2ce6931bc75f860fbf067->leave($__internal_ff855ba19f91f71ec6dcb12232ee08d397b8095d89d2ce6931bc75f860fbf067_prof);

        
        $__internal_05b837f82fd57189e46d3e03a67063defc32cee2beff4e111dacb374cc5d8338->leave($__internal_05b837f82fd57189e46d3e03a67063defc32cee2beff4e111dacb374cc5d8338_prof);

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
