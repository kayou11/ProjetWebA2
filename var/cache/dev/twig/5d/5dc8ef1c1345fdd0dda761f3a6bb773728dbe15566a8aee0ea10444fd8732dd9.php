<?php

/* KnpMenuBundle::menu.html.twig */
class __TwigTemplate_4c1b5c1652d113f55a584128baeaac10588c4281ce3cf482b021853593c9045d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "KnpMenuBundle::menu.html.twig", 1);
        $this->blocks = array(
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be2bb94478a6daa811091e45c2321f9a7a9b1999875a830033f75a54e52cf70a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be2bb94478a6daa811091e45c2321f9a7a9b1999875a830033f75a54e52cf70a->enter($__internal_be2bb94478a6daa811091e45c2321f9a7a9b1999875a830033f75a54e52cf70a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpMenuBundle::menu.html.twig"));

        $__internal_d8058686e2ff4c4987a1b27b59455c2906857dfc250addded01f453e322f1472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8058686e2ff4c4987a1b27b59455c2906857dfc250addded01f453e322f1472->enter($__internal_d8058686e2ff4c4987a1b27b59455c2906857dfc250addded01f453e322f1472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpMenuBundle::menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be2bb94478a6daa811091e45c2321f9a7a9b1999875a830033f75a54e52cf70a->leave($__internal_be2bb94478a6daa811091e45c2321f9a7a9b1999875a830033f75a54e52cf70a_prof);

        
        $__internal_d8058686e2ff4c4987a1b27b59455c2906857dfc250addded01f453e322f1472->leave($__internal_d8058686e2ff4c4987a1b27b59455c2906857dfc250addded01f453e322f1472_prof);

    }

    // line 3
    public function block_label($context, array $blocks = array())
    {
        $__internal_171c9f38959c54adac8df8688b88e881e1cc6bbc15c9a802832cd57badfbcfb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_171c9f38959c54adac8df8688b88e881e1cc6bbc15c9a802832cd57badfbcfb7->enter($__internal_171c9f38959c54adac8df8688b88e881e1cc6bbc15c9a802832cd57badfbcfb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_f6679ffa7a518ec454063b19ebf44bb0ade3dc1c0df687889ed6bf6bfd2f5a85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6679ffa7a518ec454063b19ebf44bb0ade3dc1c0df687889ed6bf6bfd2f5a85->enter($__internal_f6679ffa7a518ec454063b19ebf44bb0ade3dc1c0df687889ed6bf6bfd2f5a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 4
        $context["translation_domain"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 4, $this->getSourceContext()); })()), "extra", array(0 => "translation_domain", 1 => "messages"), "method");
        // line 5
        $context["label"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 5, $this->getSourceContext()); })()), "label", array());
        // line 6
        if ( !((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 6, $this->getSourceContext()); })()) === false)) {
            // line 7
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 7, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 7, $this->getSourceContext()); })()), "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 7, $this->getSourceContext()); })()));
        }
        // line 9
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 9, $this->getSourceContext()); })()), "allow_safe_labels", array()) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 9, $this->getSourceContext()); })()), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 9, $this->getSourceContext()); })());
        } else {
            echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
        }
        
        $__internal_f6679ffa7a518ec454063b19ebf44bb0ade3dc1c0df687889ed6bf6bfd2f5a85->leave($__internal_f6679ffa7a518ec454063b19ebf44bb0ade3dc1c0df687889ed6bf6bfd2f5a85_prof);

        
        $__internal_171c9f38959c54adac8df8688b88e881e1cc6bbc15c9a802832cd57badfbcfb7->leave($__internal_171c9f38959c54adac8df8688b88e881e1cc6bbc15c9a802832cd57badfbcfb7_prof);

    }

    public function getTemplateName()
    {
        return "KnpMenuBundle::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  55 => 7,  53 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block label %}
    {%- set translation_domain = item.extra('translation_domain', 'messages') -%}
    {%- set label = item.label -%}
    {%- if translation_domain is not same as(false) -%}
        {%- set label = label|trans(item.extra('translation_params', {}), translation_domain) -%}
    {%- endif -%}
    {%- if options.allow_safe_labels and item.extra('safe_label', false) %}{{ label|raw }}{% else %}{{ label }}{% endif -%}
{% endblock %}
", "KnpMenuBundle::menu.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/knplabs/knp-menu-bundle/Resources/views/menu.html.twig");
    }
}
