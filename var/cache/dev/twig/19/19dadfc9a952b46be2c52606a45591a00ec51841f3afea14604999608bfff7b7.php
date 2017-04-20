<?php

/* SonataAdminBundle:CRUD:list_boolean.html.twig */
class __TwigTemplate_29f227e8aa1ce5fe93a5a9322b019a620efcb021201bf16339f06d8fcd9d4415 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field_span_attributes' => array($this, 'block_field_span_attributes'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_boolean.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_358cb491cf682df3c9042d99f07dbbcfd168c08a60c8a18ce24ea4017daa5d85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_358cb491cf682df3c9042d99f07dbbcfd168c08a60c8a18ce24ea4017daa5d85->enter($__internal_358cb491cf682df3c9042d99f07dbbcfd168c08a60c8a18ce24ea4017daa5d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_boolean.html.twig"));

        $__internal_3c79607905fdd2743c9dfcb201d2b03dbff72ac385c11fcd5f1ca85d9aeb9c3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c79607905fdd2743c9dfcb201d2b03dbff72ac385c11fcd5f1ca85d9aeb9c3e->enter($__internal_3c79607905fdd2743c9dfcb201d2b03dbff72ac385c11fcd5f1ca85d9aeb9c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_boolean.html.twig"));

        // line 14
        $context["isEditable"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 14, $this->getSourceContext()); })()), "options", array()), "editable", array())) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 14, $this->getSourceContext()); })()), "hasAccess", array(0 => "edit", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 14, $this->getSourceContext()); })())), "method"));
        // line 15
        $context["xEditableType"] = $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getXEditableType(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 15, $this->getSourceContext()); })()), "type", array()));
        // line 17
        if (((isset($context["isEditable"]) || array_key_exists("isEditable", $context) ? $context["isEditable"] : (function () { throw new Twig_Error_Runtime('Variable "isEditable" does not exist.', 17, $this->getSourceContext()); })()) && (isset($context["xEditableType"]) || array_key_exists("xEditableType", $context) ? $context["xEditableType"] : (function () { throw new Twig_Error_Runtime('Variable "xEditableType" does not exist.', 17, $this->getSourceContext()); })()))) {
        }
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_358cb491cf682df3c9042d99f07dbbcfd168c08a60c8a18ce24ea4017daa5d85->leave($__internal_358cb491cf682df3c9042d99f07dbbcfd168c08a60c8a18ce24ea4017daa5d85_prof);

        
        $__internal_3c79607905fdd2743c9dfcb201d2b03dbff72ac385c11fcd5f1ca85d9aeb9c3e->leave($__internal_3c79607905fdd2743c9dfcb201d2b03dbff72ac385c11fcd5f1ca85d9aeb9c3e_prof);

    }

    // line 18
    public function block_field_span_attributes($context, array $blocks = array())
    {
        $__internal_bee5a024b4bb1a59ab393a9e835739f602821459b73e3747df56f053ec9749c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bee5a024b4bb1a59ab393a9e835739f602821459b73e3747df56f053ec9749c9->enter($__internal_bee5a024b4bb1a59ab393a9e835739f602821459b73e3747df56f053ec9749c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

        $__internal_1a3722a943ef7763ab82d5530beea778e0a656c2535444dea98252ebba8681f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a3722a943ef7763ab82d5530beea778e0a656c2535444dea98252ebba8681f1->enter($__internal_1a3722a943ef7763ab82d5530beea778e0a656c2535444dea98252ebba8681f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

        // line 19
        echo "        ";
        ob_start();
        // line 20
        echo "            ";
        $this->displayParentBlock("field_span_attributes", $context, $blocks);
        echo "
            data-source=\"[{value: 0, text: '";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
        echo "'},{value: 1, text: '";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
        echo "'}]\"
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 23
        echo "    ";
        
        $__internal_1a3722a943ef7763ab82d5530beea778e0a656c2535444dea98252ebba8681f1->leave($__internal_1a3722a943ef7763ab82d5530beea778e0a656c2535444dea98252ebba8681f1_prof);

        
        $__internal_bee5a024b4bb1a59ab393a9e835739f602821459b73e3747df56f053ec9749c9->leave($__internal_bee5a024b4bb1a59ab393a9e835739f602821459b73e3747df56f053ec9749c9_prof);

    }

    // line 26
    public function block_field($context, array $blocks = array())
    {
        $__internal_b2e06137ca9c6138cd70576f5aea8fde6815bed24b18874dabfdb54dc7cec247 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2e06137ca9c6138cd70576f5aea8fde6815bed24b18874dabfdb54dc7cec247->enter($__internal_b2e06137ca9c6138cd70576f5aea8fde6815bed24b18874dabfdb54dc7cec247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_500959bfbb09cdb75dc6e588226eba488a00ebf79ef6123ee2c31865b8b853eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_500959bfbb09cdb75dc6e588226eba488a00ebf79ef6123ee2c31865b8b853eb->enter($__internal_500959bfbb09cdb75dc6e588226eba488a00ebf79ef6123ee2c31865b8b853eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        ";
        if ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 28, $this->getSourceContext()); })())) {
            // line 29
            echo "            <span class=\"label label-success\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
            echo "</span>
        ";
        } else {
            // line 31
            echo "            <span class=\"label label-danger\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
            echo "</span>
        ";
        }
        // line 33
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_500959bfbb09cdb75dc6e588226eba488a00ebf79ef6123ee2c31865b8b853eb->leave($__internal_500959bfbb09cdb75dc6e588226eba488a00ebf79ef6123ee2c31865b8b853eb_prof);

        
        $__internal_b2e06137ca9c6138cd70576f5aea8fde6815bed24b18874dabfdb54dc7cec247->leave($__internal_b2e06137ca9c6138cd70576f5aea8fde6815bed24b18874dabfdb54dc7cec247_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 33,  103 => 31,  97 => 29,  94 => 28,  91 => 27,  82 => 26,  72 => 23,  65 => 21,  60 => 20,  57 => 19,  48 => 18,  38 => 12,  35 => 17,  33 => 15,  31 => 14,  19 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% set isEditable = field_description.options.editable is defined and field_description.options.editable and admin.hasAccess('edit', object) %}
{% set xEditableType = field_description.type|sonata_xeditable_type %}

{% if isEditable and xEditableType %}
    {% block field_span_attributes %}
        {% spaceless %}
            {{ parent() }}
            data-source=\"[{value: 0, text: '{%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}'},{value: 1, text: '{%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}'}]\"
        {% endspaceless %}
    {% endblock %}
{% endif %}

{% block field %}
    {% spaceless %}
        {% if value %}
            <span class=\"label label-success\">{%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}</span>
        {% else %}
            <span class=\"label label-danger\">{%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}</span>
        {% endif %}
    {% endspaceless %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_boolean.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_boolean.html.twig");
    }
}
