<?php

/* SonataAdminBundle:CRUD:base_show_compare.html.twig */
class __TwigTemplate_9d85dc997aa933e135b58090cfff5417343f8885a8f498058c6be4f0fc8c9c9e extends Twig_Template
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
        $__internal_9d083122d2fcb6180396791a5143c45c663d391ecb33e9599f51d32735364b38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d083122d2fcb6180396791a5143c45c663d391ecb33e9599f51d32735364b38->enter($__internal_9d083122d2fcb6180396791a5143c45c663d391ecb33e9599f51d32735364b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $__internal_ebe0b13a2f883116b126ac7037ad53049f78c504236a2e4319a5c7cc5f797cf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebe0b13a2f883116b126ac7037ad53049f78c504236a2e4319a5c7cc5f797cf5->enter($__internal_ebe0b13a2f883116b126ac7037ad53049f78c504236a2e4319a5c7cc5f797cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d083122d2fcb6180396791a5143c45c663d391ecb33e9599f51d32735364b38->leave($__internal_9d083122d2fcb6180396791a5143c45c663d391ecb33e9599f51d32735364b38_prof);

        
        $__internal_ebe0b13a2f883116b126ac7037ad53049f78c504236a2e4319a5c7cc5f797cf5->leave($__internal_ebe0b13a2f883116b126ac7037ad53049f78c504236a2e4319a5c7cc5f797cf5_prof);

    }

    // line 14
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_f39929b0944af2466b9c4872a57f6ebc8da660a0ce49a6b40a4686602e567d37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f39929b0944af2466b9c4872a57f6ebc8da660a0ce49a6b40a4686602e567d37->enter($__internal_f39929b0944af2466b9c4872a57f6ebc8da660a0ce49a6b40a4686602e567d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_752f60111b04e67db70f1adfa3f334cd046d0ccb229746f1be6de0a2dab095d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_752f60111b04e67db70f1adfa3f334cd046d0ccb229746f1be6de0a2dab095d2->enter($__internal_752f60111b04e67db70f1adfa3f334cd046d0ccb229746f1be6de0a2dab095d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

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
        
        $__internal_752f60111b04e67db70f1adfa3f334cd046d0ccb229746f1be6de0a2dab095d2->leave($__internal_752f60111b04e67db70f1adfa3f334cd046d0ccb229746f1be6de0a2dab095d2_prof);

        
        $__internal_f39929b0944af2466b9c4872a57f6ebc8da660a0ce49a6b40a4686602e567d37->leave($__internal_f39929b0944af2466b9c4872a57f6ebc8da660a0ce49a6b40a4686602e567d37_prof);

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
