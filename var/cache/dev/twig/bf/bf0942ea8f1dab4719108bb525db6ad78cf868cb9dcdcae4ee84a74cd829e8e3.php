<?php

/* SonataAdminBundle:CRUD:show_trans.html.twig */
class __TwigTemplate_ad4f0a550b8726de16812e1c2cc5ef0bb0ef0ad67bae9469c0e74ad53f9d0254 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_trans.html.twig", 11);
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
        $__internal_7e96ff1a6a4eedbe60be10b621af87b6f88c480e706e8e934c97dd6b092897c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e96ff1a6a4eedbe60be10b621af87b6f88c480e706e8e934c97dd6b092897c2->enter($__internal_7e96ff1a6a4eedbe60be10b621af87b6f88c480e706e8e934c97dd6b092897c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_trans.html.twig"));

        $__internal_6b8a1dd3020523e6f698c26357599ee826ecedbdf928896fd42b249cd68e1ae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b8a1dd3020523e6f698c26357599ee826ecedbdf928896fd42b249cd68e1ae4->enter($__internal_6b8a1dd3020523e6f698c26357599ee826ecedbdf928896fd42b249cd68e1ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_trans.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e96ff1a6a4eedbe60be10b621af87b6f88c480e706e8e934c97dd6b092897c2->leave($__internal_7e96ff1a6a4eedbe60be10b621af87b6f88c480e706e8e934c97dd6b092897c2_prof);

        
        $__internal_6b8a1dd3020523e6f698c26357599ee826ecedbdf928896fd42b249cd68e1ae4->leave($__internal_6b8a1dd3020523e6f698c26357599ee826ecedbdf928896fd42b249cd68e1ae4_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_1f84acbbe348156a9f0d7b09c58e5090fa1c40beb7ddea7068f492f3c92c97b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f84acbbe348156a9f0d7b09c58e5090fa1c40beb7ddea7068f492f3c92c97b7->enter($__internal_1f84acbbe348156a9f0d7b09c58e5090fa1c40beb7ddea7068f492f3c92c97b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_b10aa457294e90d5a3ebe240adee264e25254b3d84d605b4177d3057d3d67c74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b10aa457294e90d5a3ebe240adee264e25254b3d84d605b4177d3057d3d67c74->enter($__internal_b10aa457294e90d5a3ebe240adee264e25254b3d84d605b4177d3057d3d67c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 14
        echo "    ";
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) {
            // line 15
            echo "        ";
            $context["value"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()));
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "        ";
            $context["value"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 17, $this->getSourceContext()); })()), array(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 17, $this->getSourceContext()); })()), "options", array()), "catalogue", array()));
            // line 18
            echo "    ";
        }
        // line 19
        echo "
    ";
        // line 20
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 20, $this->getSourceContext()); })()), "options", array()), "safe", array())) {
            // line 21
            echo "        ";
            echo (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 21, $this->getSourceContext()); })());
            echo "
    ";
        } else {
            // line 23
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 23, $this->getSourceContext()); })()), "html", null, true);
            echo "
    ";
        }
        
        $__internal_b10aa457294e90d5a3ebe240adee264e25254b3d84d605b4177d3057d3d67c74->leave($__internal_b10aa457294e90d5a3ebe240adee264e25254b3d84d605b4177d3057d3d67c74_prof);

        
        $__internal_1f84acbbe348156a9f0d7b09c58e5090fa1c40beb7ddea7068f492f3c92c97b7->leave($__internal_1f84acbbe348156a9f0d7b09c58e5090fa1c40beb7ddea7068f492f3c92c97b7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 23,  69 => 21,  67 => 20,  64 => 19,  61 => 18,  58 => 17,  55 => 16,  52 => 15,  49 => 14,  40 => 13,  11 => 11,);
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

{% block field%}
    {% if field_description.options.catalogue is not defined %}
        {% set value = value|trans %}
    {% else %}
        {% set value = value|trans({}, field_description.options.catalogue) %}
    {% endif %}

    {% if field_description.options.safe %}
        {{ value|raw }}
    {% else %}
        {{ value }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_trans.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_trans.html.twig");
    }
}
