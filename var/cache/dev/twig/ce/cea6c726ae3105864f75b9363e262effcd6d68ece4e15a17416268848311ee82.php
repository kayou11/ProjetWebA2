<?php

/* SonataAdminBundle:CRUD:base_inline_edit_field.html.twig */
class __TwigTemplate_646cf70755d216ed4d27eee74267fb3abe630ec5ea2956fded62144eaec49b01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3901a17e2eccbbb54859f28067063d4f381dca140dbd5e70d694fee77e087e5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3901a17e2eccbbb54859f28067063d4f381dca140dbd5e70d694fee77e087e5b->enter($__internal_3901a17e2eccbbb54859f28067063d4f381dca140dbd5e70d694fee77e087e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig"));

        $__internal_2182136cc406029eb878152b1e361d3c6eea97150019f93d3833bf5753da0d8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2182136cc406029eb878152b1e361d3c6eea97150019f93d3833bf5753da0d8c->enter($__internal_2182136cc406029eb878152b1e361d3c6eea97150019f93d3833bf5753da0d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig"));

        // line 11
        echo "
<div id=\"sonata-ba-field-container-";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 12, $this->getSourceContext()); })()), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, (isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new Twig_Error_Runtime('Variable "edit" does not exist.', 12, $this->getSourceContext()); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["inline"]) || array_key_exists("inline", $context) ? $context["inline"] : (function () { throw new Twig_Error_Runtime('Variable "inline" does not exist.', 12, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 12, $this->getSourceContext()); })()), "vars", array()), "errors", array()))) {
            echo "sonata-ba-field-error";
        }
        echo "\">

    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('field', $context, $blocks);
        // line 26
        echo "
    <div class=\"sonata-ba-field-error-messages\">
        ";
        // line 28
        $this->displayBlock('errors', $context, $blocks);
        // line 29
        echo "    </div>
</div>
";
        
        $__internal_3901a17e2eccbbb54859f28067063d4f381dca140dbd5e70d694fee77e087e5b->leave($__internal_3901a17e2eccbbb54859f28067063d4f381dca140dbd5e70d694fee77e087e5b_prof);

        
        $__internal_2182136cc406029eb878152b1e361d3c6eea97150019f93d3833bf5753da0d8c->leave($__internal_2182136cc406029eb878152b1e361d3c6eea97150019f93d3833bf5753da0d8c_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_7d329844e2ee91398ab06c5c58033956e3dd4b7bd11acf8575c4ece8583e4bf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d329844e2ee91398ab06c5c58033956e3dd4b7bd11acf8575c4ece8583e4bf2->enter($__internal_7d329844e2ee91398ab06c5c58033956e3dd4b7bd11acf8575c4ece8583e4bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_fe0f0bd808e24be32764650a43622a03a8e6a3133bd85cc38d80155e75ec20d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe0f0bd808e24be32764650a43622a03a8e6a3133bd85cc38d80155e75ec20d8->enter($__internal_fe0f0bd808e24be32764650a43622a03a8e6a3133bd85cc38d80155e75ec20d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if (((isset($context["inline"]) || array_key_exists("inline", $context) ? $context["inline"] : (function () { throw new Twig_Error_Runtime('Variable "inline" does not exist.', 15, $this->getSourceContext()); })()) == "natural")) {
            // line 16
            echo "            ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
                // line 17
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 17, $this->getSourceContext()); })()), 'label', (twig_test_empty($_label_ = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 17, $this->getSourceContext()); })()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
                echo "
            ";
            } else {
                // line 19
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 19, $this->getSourceContext()); })()), 'label');
                echo "
            ";
            }
            // line 21
            echo "            <br>
        ";
        }
        // line 23
        echo "    ";
        
        $__internal_fe0f0bd808e24be32764650a43622a03a8e6a3133bd85cc38d80155e75ec20d8->leave($__internal_fe0f0bd808e24be32764650a43622a03a8e6a3133bd85cc38d80155e75ec20d8_prof);

        
        $__internal_7d329844e2ee91398ab06c5c58033956e3dd4b7bd11acf8575c4ece8583e4bf2->leave($__internal_7d329844e2ee91398ab06c5c58033956e3dd4b7bd11acf8575c4ece8583e4bf2_prof);

    }

    // line 25
    public function block_field($context, array $blocks = array())
    {
        $__internal_22ef598dbad66a2685212adc93c8b891f471bb5ccbdd4595534227ea37f0e938 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22ef598dbad66a2685212adc93c8b891f471bb5ccbdd4595534227ea37f0e938->enter($__internal_22ef598dbad66a2685212adc93c8b891f471bb5ccbdd4595534227ea37f0e938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_bb88f51da277e3ab15caa52fd100ade1fa4888439a0046b6b4354e80ce35d538 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb88f51da277e3ab15caa52fd100ade1fa4888439a0046b6b4354e80ce35d538->enter($__internal_bb88f51da277e3ab15caa52fd100ade1fa4888439a0046b6b4354e80ce35d538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 25, $this->getSourceContext()); })()), 'widget');
        
        $__internal_bb88f51da277e3ab15caa52fd100ade1fa4888439a0046b6b4354e80ce35d538->leave($__internal_bb88f51da277e3ab15caa52fd100ade1fa4888439a0046b6b4354e80ce35d538_prof);

        
        $__internal_22ef598dbad66a2685212adc93c8b891f471bb5ccbdd4595534227ea37f0e938->leave($__internal_22ef598dbad66a2685212adc93c8b891f471bb5ccbdd4595534227ea37f0e938_prof);

    }

    // line 28
    public function block_errors($context, array $blocks = array())
    {
        $__internal_667f5cf658acd203ca0e86b8a2ea53147ef7b1a7c831262320e8b07e2dd241d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_667f5cf658acd203ca0e86b8a2ea53147ef7b1a7c831262320e8b07e2dd241d6->enter($__internal_667f5cf658acd203ca0e86b8a2ea53147ef7b1a7c831262320e8b07e2dd241d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        $__internal_6c200445c0f15d9d5a716d0fec55696ac095ef5397e206084f2649da01cf64e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c200445c0f15d9d5a716d0fec55696ac095ef5397e206084f2649da01cf64e6->enter($__internal_6c200445c0f15d9d5a716d0fec55696ac095ef5397e206084f2649da01cf64e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 28, $this->getSourceContext()); })()), 'errors');
        
        $__internal_6c200445c0f15d9d5a716d0fec55696ac095ef5397e206084f2649da01cf64e6->leave($__internal_6c200445c0f15d9d5a716d0fec55696ac095ef5397e206084f2649da01cf64e6_prof);

        
        $__internal_667f5cf658acd203ca0e86b8a2ea53147ef7b1a7c831262320e8b07e2dd241d6->leave($__internal_667f5cf658acd203ca0e86b8a2ea53147ef7b1a7c831262320e8b07e2dd241d6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 28,  110 => 25,  100 => 23,  96 => 21,  90 => 19,  84 => 17,  81 => 16,  78 => 15,  69 => 14,  57 => 29,  55 => 28,  51 => 26,  49 => 25,  46 => 24,  44 => 14,  31 => 12,  28 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

<div id=\"sonata-ba-field-container-{{ field_element.vars.id }}\" class=\"sonata-ba-field sonata-ba-field-{{ edit }}-{{ inline }} {% if field_element.vars.errors|length %}sonata-ba-field-error{% endif %}\">

    {% block label %}
        {% if inline == 'natural' %}
            {% if field_description.options.name is defined %}
                {{ form_label(field_element, field_description.options.name) }}
            {% else %}
                {{ form_label(field_element) }}
            {% endif %}
            <br>
        {% endif %}
    {% endblock %}

    {% block field %}{{ form_widget(field_element) }}{% endblock %}

    <div class=\"sonata-ba-field-error-messages\">
        {% block errors %}{{ form_errors(field_element) }}{% endblock %}
    </div>
</div>
", "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_inline_edit_field.html.twig");
    }
}
