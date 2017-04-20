<?php

/* SonataAdminBundle:CRUD:base_standard_edit_field.html.twig */
class __TwigTemplate_d5b339211e44701868fd142347330c641a4bd5804f70b6d2e40a261f28e51887 extends Twig_Template
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
        $__internal_cd25868532a022f065b69a6b80b34c74bc6c274b89977f7e5656b9489f2de5c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd25868532a022f065b69a6b80b34c74bc6c274b89977f7e5656b9489f2de5c7->enter($__internal_cd25868532a022f065b69a6b80b34c74bc6c274b89977f7e5656b9489f2de5c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig"));

        $__internal_6ad9020fa30f00de90d942a9d5684cacfc4231bef24b667ac03a541a7e319674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ad9020fa30f00de90d942a9d5684cacfc4231bef24b667ac03a541a7e319674->enter($__internal_6ad9020fa30f00de90d942a9d5684cacfc4231bef24b667ac03a541a7e319674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig"));

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
        
        $__internal_cd25868532a022f065b69a6b80b34c74bc6c274b89977f7e5656b9489f2de5c7->leave($__internal_cd25868532a022f065b69a6b80b34c74bc6c274b89977f7e5656b9489f2de5c7_prof);

        
        $__internal_6ad9020fa30f00de90d942a9d5684cacfc4231bef24b667ac03a541a7e319674->leave($__internal_6ad9020fa30f00de90d942a9d5684cacfc4231bef24b667ac03a541a7e319674_prof);

    }

    // line 13
    public function block_label($context, array $blocks = array())
    {
        $__internal_f9a5357ef4add8be7a425c8d8fbaa5e640528a163de9654d845163db9393edde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9a5357ef4add8be7a425c8d8fbaa5e640528a163de9654d845163db9393edde->enter($__internal_f9a5357ef4add8be7a425c8d8fbaa5e640528a163de9654d845163db9393edde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_9371bc515dc1d9b5250c7b166e603f9adfafe4988dba331dead6553f67b14f68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9371bc515dc1d9b5250c7b166e603f9adfafe4988dba331dead6553f67b14f68->enter($__internal_9371bc515dc1d9b5250c7b166e603f9adfafe4988dba331dead6553f67b14f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_9371bc515dc1d9b5250c7b166e603f9adfafe4988dba331dead6553f67b14f68->leave($__internal_9371bc515dc1d9b5250c7b166e603f9adfafe4988dba331dead6553f67b14f68_prof);

        
        $__internal_f9a5357ef4add8be7a425c8d8fbaa5e640528a163de9654d845163db9393edde->leave($__internal_f9a5357ef4add8be7a425c8d8fbaa5e640528a163de9654d845163db9393edde_prof);

    }

    // line 23
    public function block_field($context, array $blocks = array())
    {
        $__internal_ece2ede32d4a41b0c3b2a9c2b03f162c7d42a37adbb1114aa11b850f0e13b945 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ece2ede32d4a41b0c3b2a9c2b03f162c7d42a37adbb1114aa11b850f0e13b945->enter($__internal_ece2ede32d4a41b0c3b2a9c2b03f162c7d42a37adbb1114aa11b850f0e13b945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_9c6276c4e12c0589296ad870654453a2b8ea54465e5de203959594e7191bd491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c6276c4e12c0589296ad870654453a2b8ea54465e5de203959594e7191bd491->enter($__internal_9c6276c4e12c0589296ad870654453a2b8ea54465e5de203959594e7191bd491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 23, $this->getSourceContext()); })()), 'widget');
        
        $__internal_9c6276c4e12c0589296ad870654453a2b8ea54465e5de203959594e7191bd491->leave($__internal_9c6276c4e12c0589296ad870654453a2b8ea54465e5de203959594e7191bd491_prof);

        
        $__internal_ece2ede32d4a41b0c3b2a9c2b03f162c7d42a37adbb1114aa11b850f0e13b945->leave($__internal_ece2ede32d4a41b0c3b2a9c2b03f162c7d42a37adbb1114aa11b850f0e13b945_prof);

    }

    // line 26
    public function block_help($context, array $blocks = array())
    {
        $__internal_f433e619049b949edccc2b0fb7dfd304cc99872718af090294f07b43fd79a462 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f433e619049b949edccc2b0fb7dfd304cc99872718af090294f07b43fd79a462->enter($__internal_f433e619049b949edccc2b0fb7dfd304cc99872718af090294f07b43fd79a462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        $__internal_2ff90b020240f5381de7044e80b747aa5f1693f929a3fdb03bca8dc46b66eb1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ff90b020240f5381de7044e80b747aa5f1693f929a3fdb03bca8dc46b66eb1f->enter($__internal_2ff90b020240f5381de7044e80b747aa5f1693f929a3fdb03bca8dc46b66eb1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 26, $this->getSourceContext()); })()), "help", array());
        
        $__internal_2ff90b020240f5381de7044e80b747aa5f1693f929a3fdb03bca8dc46b66eb1f->leave($__internal_2ff90b020240f5381de7044e80b747aa5f1693f929a3fdb03bca8dc46b66eb1f_prof);

        
        $__internal_f433e619049b949edccc2b0fb7dfd304cc99872718af090294f07b43fd79a462->leave($__internal_f433e619049b949edccc2b0fb7dfd304cc99872718af090294f07b43fd79a462_prof);

    }

    // line 30
    public function block_errors($context, array $blocks = array())
    {
        $__internal_9d4d2e5ae4cbac8b4df6aa3a2965693b7d95bac80bd1fc50840427ab13bc7463 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d4d2e5ae4cbac8b4df6aa3a2965693b7d95bac80bd1fc50840427ab13bc7463->enter($__internal_9d4d2e5ae4cbac8b4df6aa3a2965693b7d95bac80bd1fc50840427ab13bc7463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        $__internal_6c88294719841b5dfa63ed2638451132786b9e9b4c7e40d20b9774a8eba7fd76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c88294719841b5dfa63ed2638451132786b9e9b4c7e40d20b9774a8eba7fd76->enter($__internal_6c88294719841b5dfa63ed2638451132786b9e9b4c7e40d20b9774a8eba7fd76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 30, $this->getSourceContext()); })()), 'errors');
        
        $__internal_6c88294719841b5dfa63ed2638451132786b9e9b4c7e40d20b9774a8eba7fd76->leave($__internal_6c88294719841b5dfa63ed2638451132786b9e9b4c7e40d20b9774a8eba7fd76_prof);

        
        $__internal_9d4d2e5ae4cbac8b4df6aa3a2965693b7d95bac80bd1fc50840427ab13bc7463->leave($__internal_9d4d2e5ae4cbac8b4df6aa3a2965693b7d95bac80bd1fc50840427ab13bc7463_prof);

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
