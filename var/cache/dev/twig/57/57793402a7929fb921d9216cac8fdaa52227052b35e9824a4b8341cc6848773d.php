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
        $__internal_78c5eae756e8d3961bb8a918ac3411b80033b23e2f2d8073cc4a9396b19b340e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78c5eae756e8d3961bb8a918ac3411b80033b23e2f2d8073cc4a9396b19b340e->enter($__internal_78c5eae756e8d3961bb8a918ac3411b80033b23e2f2d8073cc4a9396b19b340e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpMenuBundle::menu.html.twig"));

        $__internal_62b181f207ac76ab5c33188b9329fc7dc608e73ee7d5e36cd7e8644a0b35c4e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62b181f207ac76ab5c33188b9329fc7dc608e73ee7d5e36cd7e8644a0b35c4e2->enter($__internal_62b181f207ac76ab5c33188b9329fc7dc608e73ee7d5e36cd7e8644a0b35c4e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpMenuBundle::menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78c5eae756e8d3961bb8a918ac3411b80033b23e2f2d8073cc4a9396b19b340e->leave($__internal_78c5eae756e8d3961bb8a918ac3411b80033b23e2f2d8073cc4a9396b19b340e_prof);

        
        $__internal_62b181f207ac76ab5c33188b9329fc7dc608e73ee7d5e36cd7e8644a0b35c4e2->leave($__internal_62b181f207ac76ab5c33188b9329fc7dc608e73ee7d5e36cd7e8644a0b35c4e2_prof);

    }

    // line 3
    public function block_label($context, array $blocks = array())
    {
        $__internal_10b81683723fcf84d3bc4e843fc5a4322906a19b2f088de922c3dcb6869f4f0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10b81683723fcf84d3bc4e843fc5a4322906a19b2f088de922c3dcb6869f4f0d->enter($__internal_10b81683723fcf84d3bc4e843fc5a4322906a19b2f088de922c3dcb6869f4f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_900d4ee470abe99ea051e1d674d8f06acae12c416ae5e96c66924aa82761f44e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_900d4ee470abe99ea051e1d674d8f06acae12c416ae5e96c66924aa82761f44e->enter($__internal_900d4ee470abe99ea051e1d674d8f06acae12c416ae5e96c66924aa82761f44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_900d4ee470abe99ea051e1d674d8f06acae12c416ae5e96c66924aa82761f44e->leave($__internal_900d4ee470abe99ea051e1d674d8f06acae12c416ae5e96c66924aa82761f44e_prof);

        
        $__internal_10b81683723fcf84d3bc4e843fc5a4322906a19b2f088de922c3dcb6869f4f0d->leave($__internal_10b81683723fcf84d3bc4e843fc5a4322906a19b2f088de922c3dcb6869f4f0d_prof);

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
