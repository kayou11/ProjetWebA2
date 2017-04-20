<?php

/* KnpMenuBundle::menu.html.twig */
class __TwigTemplate_4f5198db6cfe2cf3def4f2d16d0dee604cfa9742412705ded8ef6dafb91046cb extends Twig_Template
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
        $__internal_a4bf04c94ddd3332e33bfb59bb4dce98853f2afaf320113ffdff2e77d0510f9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4bf04c94ddd3332e33bfb59bb4dce98853f2afaf320113ffdff2e77d0510f9b->enter($__internal_a4bf04c94ddd3332e33bfb59bb4dce98853f2afaf320113ffdff2e77d0510f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpMenuBundle::menu.html.twig"));

        $__internal_019e5d4c7655c48542b36d09ea669cc11be4a90e4d91f66650915f5e14df17fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_019e5d4c7655c48542b36d09ea669cc11be4a90e4d91f66650915f5e14df17fb->enter($__internal_019e5d4c7655c48542b36d09ea669cc11be4a90e4d91f66650915f5e14df17fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpMenuBundle::menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4bf04c94ddd3332e33bfb59bb4dce98853f2afaf320113ffdff2e77d0510f9b->leave($__internal_a4bf04c94ddd3332e33bfb59bb4dce98853f2afaf320113ffdff2e77d0510f9b_prof);

        
        $__internal_019e5d4c7655c48542b36d09ea669cc11be4a90e4d91f66650915f5e14df17fb->leave($__internal_019e5d4c7655c48542b36d09ea669cc11be4a90e4d91f66650915f5e14df17fb_prof);

    }

    // line 3
    public function block_label($context, array $blocks = array())
    {
        $__internal_1a7f173f32455ca2df13f1e6c1c524df6ca2c882dc0d4d180c3b564af0ee5505 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a7f173f32455ca2df13f1e6c1c524df6ca2c882dc0d4d180c3b564af0ee5505->enter($__internal_1a7f173f32455ca2df13f1e6c1c524df6ca2c882dc0d4d180c3b564af0ee5505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_095352c61c9d4f52f6e1a959caf4bea13238737436f338af918e47520ee57618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_095352c61c9d4f52f6e1a959caf4bea13238737436f338af918e47520ee57618->enter($__internal_095352c61c9d4f52f6e1a959caf4bea13238737436f338af918e47520ee57618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_095352c61c9d4f52f6e1a959caf4bea13238737436f338af918e47520ee57618->leave($__internal_095352c61c9d4f52f6e1a959caf4bea13238737436f338af918e47520ee57618_prof);

        
        $__internal_1a7f173f32455ca2df13f1e6c1c524df6ca2c882dc0d4d180c3b564af0ee5505->leave($__internal_1a7f173f32455ca2df13f1e6c1c524df6ca2c882dc0d4d180c3b564af0ee5505_prof);

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
