<?php

/* SonataAdminBundle:CRUD:show_trans.html.twig */
class __TwigTemplate_926aced4252c5137c4d3753fcd2731dfe245d9d4ab575abc1e5fd50e4b58e8a8 extends Twig_Template
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
        $__internal_5986a70d8ab4ba3062ea6779eb7da49eb4fa8527abc3cf5b50f20c84111d313d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5986a70d8ab4ba3062ea6779eb7da49eb4fa8527abc3cf5b50f20c84111d313d->enter($__internal_5986a70d8ab4ba3062ea6779eb7da49eb4fa8527abc3cf5b50f20c84111d313d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_trans.html.twig"));

        $__internal_170aadba139f58b3c661b327c64e3cbe132ba27dba1b37bc084cc1c947f13767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_170aadba139f58b3c661b327c64e3cbe132ba27dba1b37bc084cc1c947f13767->enter($__internal_170aadba139f58b3c661b327c64e3cbe132ba27dba1b37bc084cc1c947f13767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_trans.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5986a70d8ab4ba3062ea6779eb7da49eb4fa8527abc3cf5b50f20c84111d313d->leave($__internal_5986a70d8ab4ba3062ea6779eb7da49eb4fa8527abc3cf5b50f20c84111d313d_prof);

        
        $__internal_170aadba139f58b3c661b327c64e3cbe132ba27dba1b37bc084cc1c947f13767->leave($__internal_170aadba139f58b3c661b327c64e3cbe132ba27dba1b37bc084cc1c947f13767_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_691d12bd4e1ed3838396f3c83997d0404e639e0e437c12f61ec2916d7f101175 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_691d12bd4e1ed3838396f3c83997d0404e639e0e437c12f61ec2916d7f101175->enter($__internal_691d12bd4e1ed3838396f3c83997d0404e639e0e437c12f61ec2916d7f101175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_e52bfa9f783b01b8bfc51e3f4090e749556c2bcabf211478ee3322c5bb34b14e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e52bfa9f783b01b8bfc51e3f4090e749556c2bcabf211478ee3322c5bb34b14e->enter($__internal_e52bfa9f783b01b8bfc51e3f4090e749556c2bcabf211478ee3322c5bb34b14e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_e52bfa9f783b01b8bfc51e3f4090e749556c2bcabf211478ee3322c5bb34b14e->leave($__internal_e52bfa9f783b01b8bfc51e3f4090e749556c2bcabf211478ee3322c5bb34b14e_prof);

        
        $__internal_691d12bd4e1ed3838396f3c83997d0404e639e0e437c12f61ec2916d7f101175->leave($__internal_691d12bd4e1ed3838396f3c83997d0404e639e0e437c12f61ec2916d7f101175_prof);

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
