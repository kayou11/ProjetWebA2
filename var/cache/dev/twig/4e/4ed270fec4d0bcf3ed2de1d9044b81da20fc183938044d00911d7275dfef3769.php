<?php

/* SonataAdminBundle:CRUD:base_standard_edit_field.html.twig */
class __TwigTemplate_3e4222f047f890ebf3dc7bdca6382562e4d2b9d781baa457380f0ed7410a805a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'help' => array($this, 'block_help'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_533bc6475ca06a0f36f6c336e89ee970592dbd5068ad75e531138f772f083449 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_533bc6475ca06a0f36f6c336e89ee970592dbd5068ad75e531138f772f083449->enter($__internal_533bc6475ca06a0f36f6c336e89ee970592dbd5068ad75e531138f772f083449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig"));

        $__internal_b0611234478be64c4277cc19fd7f42b92003bbd728a2329692517bebb94e4ae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0611234478be64c4277cc19fd7f42b92003bbd728a2329692517bebb94e4ae4->enter($__internal_b0611234478be64c4277cc19fd7f42b92003bbd728a2329692517bebb94e4ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig"));

        // line 11
        echo "
<div class=\"form-group";
        // line 12
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 12, $this->getSourceContext()); })()), "var", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 12, $this->getSourceContext()); })()), "vars", array()), "id", array()), "html", null, true);
        echo "\">
    ";
        // line 13
        $this->displayBlock('label', $context, $blocks);
        // line 20
        echo "
    <div class=\"col-sm-10 col-md-5 sonata-ba-field sonata-ba-field-";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new Twig_Error_Runtime('Variable "edit" does not exist.', 21, $this->getSourceContext()); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["inline"]) || array_key_exists("inline", $context) ? $context["inline"] : (function () { throw new Twig_Error_Runtime('Variable "inline" does not exist.', 21, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 21, $this->getSourceContext()); })()), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">

        ";
        // line 23
        $this->displayBlock('field', $context, $blocks);
        // line 24
        echo "
        ";
        // line 25
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 25, $this->getSourceContext()); })()), "help", array())) {
            // line 26
            echo "            <span class=\"help-block\">";
            $this->displayBlock('help', $context, $blocks);
            echo "</span>
        ";
        }
        // line 28
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 30
        $this->displayBlock('errors', $context, $blocks);
        // line 31
        echo "        </div>

    </div>
</div>
";
        
        $__internal_533bc6475ca06a0f36f6c336e89ee970592dbd5068ad75e531138f772f083449->leave($__internal_533bc6475ca06a0f36f6c336e89ee970592dbd5068ad75e531138f772f083449_prof);

        
        $__internal_b0611234478be64c4277cc19fd7f42b92003bbd728a2329692517bebb94e4ae4->leave($__internal_b0611234478be64c4277cc19fd7f42b92003bbd728a2329692517bebb94e4ae4_prof);

    }

    // line 13
    public function block_label($context, array $blocks = array())
    {
        $__internal_9f8a4d4364262fd33725e76426fbe015128b0b9b7d593381fde11cf9bfb88006 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f8a4d4364262fd33725e76426fbe015128b0b9b7d593381fde11cf9bfb88006->enter($__internal_9f8a4d4364262fd33725e76426fbe015128b0b9b7d593381fde11cf9bfb88006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_4bb3065785319d4d65763c55ef616175cc5c25b57bb20b56f671593c4fb56a9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bb3065785319d4d65763c55ef616175cc5c25b57bb20b56f671593c4fb56a9b->enter($__internal_4bb3065785319d4d65763c55ef616175cc5c25b57bb20b56f671593c4fb56a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 14
        echo "        ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 15
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 15, $this->getSourceContext()); })()), 'label', (twig_test_empty($_label_ = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 15, $this->getSourceContext()); })()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 17
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 17, $this->getSourceContext()); })()), 'label');
            echo "
        ";
        }
        // line 19
        echo "    ";
        
        $__internal_4bb3065785319d4d65763c55ef616175cc5c25b57bb20b56f671593c4fb56a9b->leave($__internal_4bb3065785319d4d65763c55ef616175cc5c25b57bb20b56f671593c4fb56a9b_prof);

        
        $__internal_9f8a4d4364262fd33725e76426fbe015128b0b9b7d593381fde11cf9bfb88006->leave($__internal_9f8a4d4364262fd33725e76426fbe015128b0b9b7d593381fde11cf9bfb88006_prof);

    }

    // line 23
    public function block_field($context, array $blocks = array())
    {
        $__internal_8f0bd8a9c3c1edf9e31f26f109ec3f2e39eb57dc33ede55f7f5de3c9b66226ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f0bd8a9c3c1edf9e31f26f109ec3f2e39eb57dc33ede55f7f5de3c9b66226ba->enter($__internal_8f0bd8a9c3c1edf9e31f26f109ec3f2e39eb57dc33ede55f7f5de3c9b66226ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_d1ca1b104055f4927b4ae3db70ee5a9a4bcc899eb82f5639ee0a970bcc6bc817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1ca1b104055f4927b4ae3db70ee5a9a4bcc899eb82f5639ee0a970bcc6bc817->enter($__internal_d1ca1b104055f4927b4ae3db70ee5a9a4bcc899eb82f5639ee0a970bcc6bc817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 23, $this->getSourceContext()); })()), 'widget');
        
        $__internal_d1ca1b104055f4927b4ae3db70ee5a9a4bcc899eb82f5639ee0a970bcc6bc817->leave($__internal_d1ca1b104055f4927b4ae3db70ee5a9a4bcc899eb82f5639ee0a970bcc6bc817_prof);

        
        $__internal_8f0bd8a9c3c1edf9e31f26f109ec3f2e39eb57dc33ede55f7f5de3c9b66226ba->leave($__internal_8f0bd8a9c3c1edf9e31f26f109ec3f2e39eb57dc33ede55f7f5de3c9b66226ba_prof);

    }

    // line 26
    public function block_help($context, array $blocks = array())
    {
        $__internal_a27dfdf38ece40779f609972c62cbeb2cd5f7a3d406d7d7486688ea744277603 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a27dfdf38ece40779f609972c62cbeb2cd5f7a3d406d7d7486688ea744277603->enter($__internal_a27dfdf38ece40779f609972c62cbeb2cd5f7a3d406d7d7486688ea744277603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        $__internal_d6bf664a8d20838413d7de55b3b8b42e6a0649097014933c40e8f54b3ce5479f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6bf664a8d20838413d7de55b3b8b42e6a0649097014933c40e8f54b3ce5479f->enter($__internal_d6bf664a8d20838413d7de55b3b8b42e6a0649097014933c40e8f54b3ce5479f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 26, $this->getSourceContext()); })()), "help", array());
        
        $__internal_d6bf664a8d20838413d7de55b3b8b42e6a0649097014933c40e8f54b3ce5479f->leave($__internal_d6bf664a8d20838413d7de55b3b8b42e6a0649097014933c40e8f54b3ce5479f_prof);

        
        $__internal_a27dfdf38ece40779f609972c62cbeb2cd5f7a3d406d7d7486688ea744277603->leave($__internal_a27dfdf38ece40779f609972c62cbeb2cd5f7a3d406d7d7486688ea744277603_prof);

    }

    // line 30
    public function block_errors($context, array $blocks = array())
    {
        $__internal_93ce2a7a69347bf1bcc6fb08acb6dabe67d4ce73ccb7c36551d2dce02c88c057 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93ce2a7a69347bf1bcc6fb08acb6dabe67d4ce73ccb7c36551d2dce02c88c057->enter($__internal_93ce2a7a69347bf1bcc6fb08acb6dabe67d4ce73ccb7c36551d2dce02c88c057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        $__internal_5d78329144f99f063b613b28b99367a92f6efb4c7bfe0e0b859b5e15f66a11d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d78329144f99f063b613b28b99367a92f6efb4c7bfe0e0b859b5e15f66a11d9->enter($__internal_5d78329144f99f063b613b28b99367a92f6efb4c7bfe0e0b859b5e15f66a11d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 30, $this->getSourceContext()); })()), 'errors');
        
        $__internal_5d78329144f99f063b613b28b99367a92f6efb4c7bfe0e0b859b5e15f66a11d9->leave($__internal_5d78329144f99f063b613b28b99367a92f6efb4c7bfe0e0b859b5e15f66a11d9_prof);

        
        $__internal_93ce2a7a69347bf1bcc6fb08acb6dabe67d4ce73ccb7c36551d2dce02c88c057->leave($__internal_93ce2a7a69347bf1bcc6fb08acb6dabe67d4ce73ccb7c36551d2dce02c88c057_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 30,  141 => 26,  123 => 23,  113 => 19,  107 => 17,  101 => 15,  98 => 14,  89 => 13,  75 => 31,  73 => 30,  69 => 28,  63 => 26,  61 => 25,  58 => 24,  56 => 23,  45 => 21,  42 => 20,  40 => 13,  32 => 12,  29 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

<div class=\"form-group{% if field_element.var.errors|length > 0%} has-error{%endif%}\" id=\"sonata-ba-field-container-{{ field_element.vars.id }}\">
    {% block label %}
        {% if field_description.options.name is defined %}
            {{ form_label(field_element, field_description.options.name) }}
        {% else %}
            {{ form_label(field_element) }}
        {% endif %}
    {% endblock %}

    <div class=\"col-sm-10 col-md-5 sonata-ba-field sonata-ba-field-{{ edit }}-{{ inline }} {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">

        {% block field %}{{ form_widget(field_element) }}{% endblock %}

        {% if field_description.help %}
            <span class=\"help-block\">{% block help %}{{ field_description.help|raw }}{% endblock %}</span>
        {% endif %}

        <div class=\"sonata-ba-field-error-messages\">
            {% block errors %}{{ form_errors(field_element) }}{% endblock %}
        </div>

    </div>
</div>
", "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_standard_edit_field.html.twig");
    }
}
