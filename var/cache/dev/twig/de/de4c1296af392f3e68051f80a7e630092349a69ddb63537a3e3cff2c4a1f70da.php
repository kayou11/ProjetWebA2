<?php

/* SonataAdminBundle:CRUD:base_show_compare.html.twig */
class __TwigTemplate_84ddc7a7310c4828076524b848f7e24aa94eaae48f5f1ad8caa3c926a165e1b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:base_show_compare.html.twig", 12);
        $this->blocks = array(
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3916890c0d9e5cab0eec2404cfbc55de9d59baedd4e16368ff311926148ccc9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3916890c0d9e5cab0eec2404cfbc55de9d59baedd4e16368ff311926148ccc9f->enter($__internal_3916890c0d9e5cab0eec2404cfbc55de9d59baedd4e16368ff311926148ccc9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $__internal_d90a229d9ce366d82374b3bee04e9677dc2478eab00839ae0b57067ae11ba80d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d90a229d9ce366d82374b3bee04e9677dc2478eab00839ae0b57067ae11ba80d->enter($__internal_d90a229d9ce366d82374b3bee04e9677dc2478eab00839ae0b57067ae11ba80d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3916890c0d9e5cab0eec2404cfbc55de9d59baedd4e16368ff311926148ccc9f->leave($__internal_3916890c0d9e5cab0eec2404cfbc55de9d59baedd4e16368ff311926148ccc9f_prof);

        
        $__internal_d90a229d9ce366d82374b3bee04e9677dc2478eab00839ae0b57067ae11ba80d->leave($__internal_d90a229d9ce366d82374b3bee04e9677dc2478eab00839ae0b57067ae11ba80d_prof);

    }

    // line 14
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_3955cd82301db98318238279c665709aee9fa52e6123b3d4bc6d5b83627243a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3955cd82301db98318238279c665709aee9fa52e6123b3d4bc6d5b83627243a7->enter($__internal_3955cd82301db98318238279c665709aee9fa52e6123b3d4bc6d5b83627243a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_96eba160dae535716136999e588fbbe0e89c29b4cad3cb65f9e2951cd22fab7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96eba160dae535716136999e588fbbe0e89c29b4cad3cb65f9e2951cd22fab7a->enter($__internal_96eba160dae535716136999e588fbbe0e89c29b4cad3cb65f9e2951cd22fab7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 15
        echo "    <tr class=\"sonata-ba-view-container history-audit-compare\">
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["elements"] ?? null), (isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new Twig_Error_Runtime('Variable "field_name" does not exist.', 16, $this->getSourceContext()); })()), array(), "array", true, true)) {
            // line 17
            echo "            ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElementCompare($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["elements"]) || array_key_exists("elements", $context) ? $context["elements"] : (function () { throw new Twig_Error_Runtime('Variable "elements" does not exist.', 17, $this->getSourceContext()); })()), (isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new Twig_Error_Runtime('Variable "field_name" does not exist.', 17, $this->getSourceContext()); })()), array(), "array"), (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 17, $this->getSourceContext()); })()), (isset($context["object_compare"]) || array_key_exists("object_compare", $context) ? $context["object_compare"] : (function () { throw new Twig_Error_Runtime('Variable "object_compare" does not exist.', 17, $this->getSourceContext()); })()));
            echo "
        ";
        }
        // line 19
        echo "    </tr>
";
        
        $__internal_96eba160dae535716136999e588fbbe0e89c29b4cad3cb65f9e2951cd22fab7a->leave($__internal_96eba160dae535716136999e588fbbe0e89c29b4cad3cb65f9e2951cd22fab7a_prof);

        
        $__internal_3955cd82301db98318238279c665709aee9fa52e6123b3d4bc6d5b83627243a7->leave($__internal_3955cd82301db98318238279c665709aee9fa52e6123b3d4bc6d5b83627243a7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  54 => 17,  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}

{% block show_field %}
    <tr class=\"sonata-ba-view-container history-audit-compare\">
        {% if elements[field_name] is defined %}
            {{ elements[field_name]|render_view_element_compare(object, object_compare) }}
        {% endif %}
    </tr>
{% endblock %}
", "SonataAdminBundle:CRUD:base_show_compare.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_show_compare.html.twig");
    }
}
