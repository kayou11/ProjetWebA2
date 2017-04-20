<?php

/* SonataAdminBundle:CRUD:show_boolean.html.twig */
class __TwigTemplate_973496830415bcff7801f5293fae763f22ce916602b7f0c45a37aa40e26b8294 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_boolean.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e08406be3f889b6f76bc280b7afb8f5379418d88241cc5dec5fc2abdd1c7065 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e08406be3f889b6f76bc280b7afb8f5379418d88241cc5dec5fc2abdd1c7065->enter($__internal_1e08406be3f889b6f76bc280b7afb8f5379418d88241cc5dec5fc2abdd1c7065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_boolean.html.twig"));

        $__internal_e1a986fe820627344667d663bc7678af4281f0160c28511bfa058b3e6171d0e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1a986fe820627344667d663bc7678af4281f0160c28511bfa058b3e6171d0e5->enter($__internal_e1a986fe820627344667d663bc7678af4281f0160c28511bfa058b3e6171d0e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e08406be3f889b6f76bc280b7afb8f5379418d88241cc5dec5fc2abdd1c7065->leave($__internal_1e08406be3f889b6f76bc280b7afb8f5379418d88241cc5dec5fc2abdd1c7065_prof);

        
        $__internal_e1a986fe820627344667d663bc7678af4281f0160c28511bfa058b3e6171d0e5->leave($__internal_e1a986fe820627344667d663bc7678af4281f0160c28511bfa058b3e6171d0e5_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_99e161a333c1dcaa58fc2ec34ba13c867a1da44e1a599eb5ee82955ad1e645df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99e161a333c1dcaa58fc2ec34ba13c867a1da44e1a599eb5ee82955ad1e645df->enter($__internal_99e161a333c1dcaa58fc2ec34ba13c867a1da44e1a599eb5ee82955ad1e645df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_e6afb5499999057f8d6c97978e6cf9df45ba13725edcb72f5806d8e09a195090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6afb5499999057f8d6c97978e6cf9df45ba13725edcb72f5806d8e09a195090->enter($__internal_e6afb5499999057f8d6c97978e6cf9df45ba13725edcb72f5806d8e09a195090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        ob_start();
        // line 16
        echo "    ";
        if ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 16, $this->getSourceContext()); })())) {
            // line 17
            echo "        <span class=\"label label-success\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
            echo "</span>
    ";
        } else {
            // line 19
            echo "        <span class=\"label label-danger\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
            echo "</span>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e6afb5499999057f8d6c97978e6cf9df45ba13725edcb72f5806d8e09a195090->leave($__internal_e6afb5499999057f8d6c97978e6cf9df45ba13725edcb72f5806d8e09a195090_prof);

        
        $__internal_99e161a333c1dcaa58fc2ec34ba13c867a1da44e1a599eb5ee82955ad1e645df->leave($__internal_99e161a333c1dcaa58fc2ec34ba13c867a1da44e1a599eb5ee82955ad1e645df_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  54 => 17,  51 => 16,  49 => 15,  40 => 14,  11 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
{% spaceless %}
    {% if value %}
        <span class=\"label label-success\">{%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}</span>
    {% else %}
        <span class=\"label label-danger\">{%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}</span>
    {% endif %}
{% endspaceless %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_boolean.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_boolean.html.twig");
    }
}
