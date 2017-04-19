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
        $__internal_abc15aff1a9722dc58437ac7b4d92b9b6ba42fe664f7b1a4104a71c8cfabe1ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abc15aff1a9722dc58437ac7b4d92b9b6ba42fe664f7b1a4104a71c8cfabe1ff->enter($__internal_abc15aff1a9722dc58437ac7b4d92b9b6ba42fe664f7b1a4104a71c8cfabe1ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpMenuBundle::menu.html.twig"));

        $__internal_a5da1fb6036db9fcec6010500fcb859130c845d047506c7910800cd02073f04a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5da1fb6036db9fcec6010500fcb859130c845d047506c7910800cd02073f04a->enter($__internal_a5da1fb6036db9fcec6010500fcb859130c845d047506c7910800cd02073f04a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpMenuBundle::menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abc15aff1a9722dc58437ac7b4d92b9b6ba42fe664f7b1a4104a71c8cfabe1ff->leave($__internal_abc15aff1a9722dc58437ac7b4d92b9b6ba42fe664f7b1a4104a71c8cfabe1ff_prof);

        
        $__internal_a5da1fb6036db9fcec6010500fcb859130c845d047506c7910800cd02073f04a->leave($__internal_a5da1fb6036db9fcec6010500fcb859130c845d047506c7910800cd02073f04a_prof);

    }

    // line 3
    public function block_label($context, array $blocks = array())
    {
        $__internal_3ffaac86bbb786a80c704085497ee974f11b5e4a81eebaa58d84b7a8f9d487b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ffaac86bbb786a80c704085497ee974f11b5e4a81eebaa58d84b7a8f9d487b8->enter($__internal_3ffaac86bbb786a80c704085497ee974f11b5e4a81eebaa58d84b7a8f9d487b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_195e5b42fbdb71be33c18bdf7d02948d4f8be7d20805abd717af2483b0287655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_195e5b42fbdb71be33c18bdf7d02948d4f8be7d20805abd717af2483b0287655->enter($__internal_195e5b42fbdb71be33c18bdf7d02948d4f8be7d20805abd717af2483b0287655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_195e5b42fbdb71be33c18bdf7d02948d4f8be7d20805abd717af2483b0287655->leave($__internal_195e5b42fbdb71be33c18bdf7d02948d4f8be7d20805abd717af2483b0287655_prof);

        
        $__internal_3ffaac86bbb786a80c704085497ee974f11b5e4a81eebaa58d84b7a8f9d487b8->leave($__internal_3ffaac86bbb786a80c704085497ee974f11b5e4a81eebaa58d84b7a8f9d487b8_prof);

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
