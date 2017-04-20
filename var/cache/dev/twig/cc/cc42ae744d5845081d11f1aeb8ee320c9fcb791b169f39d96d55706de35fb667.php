<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_21ad2b8e51492d592885cc7fdfb9ae49e25bb4613a86ee5012eed08019c5e70d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b4501603577c5c2679956864e1834b79c3280629bff4efa9364ea6d64f0c652 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b4501603577c5c2679956864e1834b79c3280629bff4efa9364ea6d64f0c652->enter($__internal_2b4501603577c5c2679956864e1834b79c3280629bff4efa9364ea6d64f0c652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

        $__internal_9c45a21558fb21bbee9d0f982a559e14bd5ed6cba206dc05bff16a0c13363e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c45a21558fb21bbee9d0f982a559e14bd5ed6cba206dc05bff16a0c13363e1f->enter($__internal_9c45a21558fb21bbee9d0f982a559e14bd5ed6cba206dc05bff16a0c13363e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 13, $this->getSourceContext()); })()), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
        
        $__internal_2b4501603577c5c2679956864e1834b79c3280629bff4efa9364ea6d64f0c652->leave($__internal_2b4501603577c5c2679956864e1834b79c3280629bff4efa9364ea6d64f0c652_prof);

        
        $__internal_9c45a21558fb21bbee9d0f982a559e14bd5ed6cba206dc05bff16a0c13363e1f->leave($__internal_9c45a21558fb21bbee9d0f982a559e14bd5ed6cba206dc05bff16a0c13363e1f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ae92c0fee4ebad0abe4dbd80e8424949dae3f2cee144798e897b0e3ac4904aa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae92c0fee4ebad0abe4dbd80e8424949dae3f2cee144798e897b0e3ac4904aa1->enter($__internal_ae92c0fee4ebad0abe4dbd80e8424949dae3f2cee144798e897b0e3ac4904aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_efbcc1858333805874bb68d90230f4a9e3638194cb9f7256f470443987f0318f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efbcc1858333805874bb68d90230f4a9e3638194cb9f7256f470443987f0318f->enter($__internal_efbcc1858333805874bb68d90230f4a9e3638194cb9f7256f470443987f0318f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 14, $this->getSourceContext()); })()), 'widget');
        
        $__internal_efbcc1858333805874bb68d90230f4a9e3638194cb9f7256f470443987f0318f->leave($__internal_efbcc1858333805874bb68d90230f4a9e3638194cb9f7256f470443987f0318f_prof);

        
        $__internal_ae92c0fee4ebad0abe4dbd80e8424949dae3f2cee144798e897b0e3ac4904aa1->leave($__internal_ae92c0fee4ebad0abe4dbd80e8424949dae3f2cee144798e897b0e3ac4904aa1_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_bd1119244babf84178f72b3eebf4b5afc1a9bbfbc37e63c788ac0bf1ee11b7d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd1119244babf84178f72b3eebf4b5afc1a9bbfbc37e63c788ac0bf1ee11b7d5->enter($__internal_bd1119244babf84178f72b3eebf4b5afc1a9bbfbc37e63c788ac0bf1ee11b7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_47b92768158e4f93fd7272122a37b531e0ce9089bc89223e5cc94df8d0456f96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47b92768158e4f93fd7272122a37b531e0ce9089bc89223e5cc94df8d0456f96->enter($__internal_47b92768158e4f93fd7272122a37b531e0ce9089bc89223e5cc94df8d0456f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_47b92768158e4f93fd7272122a37b531e0ce9089bc89223e5cc94df8d0456f96->leave($__internal_47b92768158e4f93fd7272122a37b531e0ce9089bc89223e5cc94df8d0456f96_prof);

        
        $__internal_bd1119244babf84178f72b3eebf4b5afc1a9bbfbc37e63c788ac0bf1ee11b7d5->leave($__internal_bd1119244babf84178f72b3eebf4b5afc1a9bbfbc37e63c788ac0bf1ee11b7d5_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_776168bd3d2f35b5b5d88a6177c3a4337ce82339ac86116c545375ee540adc5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_776168bd3d2f35b5b5d88a6177c3a4337ce82339ac86116c545375ee540adc5a->enter($__internal_776168bd3d2f35b5b5d88a6177c3a4337ce82339ac86116c545375ee540adc5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        $__internal_0bdf447d0c91049c492bbbe1d5d986eb036314cfbd9b5d5badb591e6fd0a5330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bdf447d0c91049c492bbbe1d5d986eb036314cfbd9b5d5badb591e6fd0a5330->enter($__internal_0bdf447d0c91049c492bbbe1d5d986eb036314cfbd9b5d5badb591e6fd0a5330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 25, $this->getSourceContext()); })()), 'errors');
        
        $__internal_0bdf447d0c91049c492bbbe1d5d986eb036314cfbd9b5d5badb591e6fd0a5330->leave($__internal_0bdf447d0c91049c492bbbe1d5d986eb036314cfbd9b5d5badb591e6fd0a5330_prof);

        
        $__internal_776168bd3d2f35b5b5d88a6177c3a4337ce82339ac86116c545375ee540adc5a->leave($__internal_776168bd3d2f35b5b5d88a6177c3a4337ce82339ac86116c545375ee540adc5a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 25,  105 => 21,  99 => 19,  93 => 17,  90 => 16,  81 => 15,  63 => 14,  49 => 26,  47 => 25,  43 => 23,  40 => 15,  38 => 14,  32 => 13,  28 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

<div>
    <div class=\"sonata-ba-field {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(field_element) }}{% endblock %}
        {% block label %}
            {% if field_description.options.name is defined %}
                {{ form_label(field_element, field_description.options.name) }}
            {% else %}
                {{ form_label(field_element) }}
            {% endif %}
            <br>
        {% endblock %}

        <div class=\"sonata-ba-field-error-messages\">
            {% block errors %}{{ form_errors(field_element) }}{% endblock %}
        </div>

    </div>
</div>
", "SonataAdminBundle:CRUD:edit_boolean.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_boolean.html.twig");
    }
}
