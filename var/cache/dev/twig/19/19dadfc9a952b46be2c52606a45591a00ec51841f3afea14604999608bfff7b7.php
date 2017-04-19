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
        $__internal_8fff0552a1fd030af59bfc1430555d3d0a4f6e0fb74fc53ed1ef12b55e14a0f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fff0552a1fd030af59bfc1430555d3d0a4f6e0fb74fc53ed1ef12b55e14a0f0->enter($__internal_8fff0552a1fd030af59bfc1430555d3d0a4f6e0fb74fc53ed1ef12b55e14a0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_boolean.html.twig"));

        $__internal_47c6013c0af2b18bfd9e57942aeb863be5e6c15e295e84f120430b4e107689cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47c6013c0af2b18bfd9e57942aeb863be5e6c15e295e84f120430b4e107689cc->enter($__internal_47c6013c0af2b18bfd9e57942aeb863be5e6c15e295e84f120430b4e107689cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_boolean.html.twig"));

        // line 14
        $context["isEditable"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 14, $this->getSourceContext()); })()), "options", array()), "editable", array())) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 14, $this->getSourceContext()); })()), "hasAccess", array(0 => "edit", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 14, $this->getSourceContext()); })())), "method"));
        // line 15
        $context["xEditableType"] = $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getXEditableType(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 15, $this->getSourceContext()); })()), "type", array()));
        // line 17
        if (((isset($context["isEditable"]) || array_key_exists("isEditable", $context) ? $context["isEditable"] : (function () { throw new Twig_Error_Runtime('Variable "isEditable" does not exist.', 17, $this->getSourceContext()); })()) && (isset($context["xEditableType"]) || array_key_exists("xEditableType", $context) ? $context["xEditableType"] : (function () { throw new Twig_Error_Runtime('Variable "xEditableType" does not exist.', 17, $this->getSourceContext()); })()))) {
        }
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fff0552a1fd030af59bfc1430555d3d0a4f6e0fb74fc53ed1ef12b55e14a0f0->leave($__internal_8fff0552a1fd030af59bfc1430555d3d0a4f6e0fb74fc53ed1ef12b55e14a0f0_prof);

        
        $__internal_47c6013c0af2b18bfd9e57942aeb863be5e6c15e295e84f120430b4e107689cc->leave($__internal_47c6013c0af2b18bfd9e57942aeb863be5e6c15e295e84f120430b4e107689cc_prof);

    }

    // line 18
    public function block_field_span_attributes($context, array $blocks = array())
    {
        $__internal_9530e229b572e678a2ceb6f84b720be84da2c7dd5c8d6e1b3ac76a5fa780b48a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9530e229b572e678a2ceb6f84b720be84da2c7dd5c8d6e1b3ac76a5fa780b48a->enter($__internal_9530e229b572e678a2ceb6f84b720be84da2c7dd5c8d6e1b3ac76a5fa780b48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

        $__internal_89679814fcd00387a4197cec31c51c8af7797359cf2f33b8502041dd1bd598b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89679814fcd00387a4197cec31c51c8af7797359cf2f33b8502041dd1bd598b4->enter($__internal_89679814fcd00387a4197cec31c51c8af7797359cf2f33b8502041dd1bd598b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

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
        
        $__internal_89679814fcd00387a4197cec31c51c8af7797359cf2f33b8502041dd1bd598b4->leave($__internal_89679814fcd00387a4197cec31c51c8af7797359cf2f33b8502041dd1bd598b4_prof);

        
        $__internal_9530e229b572e678a2ceb6f84b720be84da2c7dd5c8d6e1b3ac76a5fa780b48a->leave($__internal_9530e229b572e678a2ceb6f84b720be84da2c7dd5c8d6e1b3ac76a5fa780b48a_prof);

    }

    // line 26
    public function block_field($context, array $blocks = array())
    {
        $__internal_d663ca27130a6daf78e8b1be97c88bf188030ed0c7ab3e4f099d868b247d0096 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d663ca27130a6daf78e8b1be97c88bf188030ed0c7ab3e4f099d868b247d0096->enter($__internal_d663ca27130a6daf78e8b1be97c88bf188030ed0c7ab3e4f099d868b247d0096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_8b8cfa4b50374d84f553426bece20b478e335720701cb2930de4e2b8d1c98cf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b8cfa4b50374d84f553426bece20b478e335720701cb2930de4e2b8d1c98cf3->enter($__internal_8b8cfa4b50374d84f553426bece20b478e335720701cb2930de4e2b8d1c98cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_8b8cfa4b50374d84f553426bece20b478e335720701cb2930de4e2b8d1c98cf3->leave($__internal_8b8cfa4b50374d84f553426bece20b478e335720701cb2930de4e2b8d1c98cf3_prof);

        
        $__internal_d663ca27130a6daf78e8b1be97c88bf188030ed0c7ab3e4f099d868b247d0096->leave($__internal_d663ca27130a6daf78e8b1be97c88bf188030ed0c7ab3e4f099d868b247d0096_prof);

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
