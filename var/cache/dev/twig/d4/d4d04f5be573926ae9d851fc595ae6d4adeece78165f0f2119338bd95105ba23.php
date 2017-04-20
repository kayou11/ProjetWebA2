<?php

/* SonataAdminBundle:CRUD:base_inline_edit_field.html.twig */
class __TwigTemplate_1c2dfea0348cecfd0b5bf684300b95ce190e4297ce191fa49cc3554db66e7594 extends Twig_Template
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
        $__internal_f5ac4b9661c8e61ca083688dd91b9cdc45004487c694bc9b611e5b87d6198de4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5ac4b9661c8e61ca083688dd91b9cdc45004487c694bc9b611e5b87d6198de4->enter($__internal_f5ac4b9661c8e61ca083688dd91b9cdc45004487c694bc9b611e5b87d6198de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig"));

        $__internal_9fd2c9f1ab3511a910c4245563e02d0c1eb7f3d0ab47beeb36b7d5b0f346d757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fd2c9f1ab3511a910c4245563e02d0c1eb7f3d0ab47beeb36b7d5b0f346d757->enter($__internal_9fd2c9f1ab3511a910c4245563e02d0c1eb7f3d0ab47beeb36b7d5b0f346d757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig"));

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
        
        $__internal_f5ac4b9661c8e61ca083688dd91b9cdc45004487c694bc9b611e5b87d6198de4->leave($__internal_f5ac4b9661c8e61ca083688dd91b9cdc45004487c694bc9b611e5b87d6198de4_prof);

        
        $__internal_9fd2c9f1ab3511a910c4245563e02d0c1eb7f3d0ab47beeb36b7d5b0f346d757->leave($__internal_9fd2c9f1ab3511a910c4245563e02d0c1eb7f3d0ab47beeb36b7d5b0f346d757_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_140f66ebda2a36838361c22898204a752189f2737cff3f1a884142adc2ca1b3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_140f66ebda2a36838361c22898204a752189f2737cff3f1a884142adc2ca1b3c->enter($__internal_140f66ebda2a36838361c22898204a752189f2737cff3f1a884142adc2ca1b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_948f3fd636d4c2b4dc02b764d93c311e6db408308c12dcc73a2d88051bf8dc89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_948f3fd636d4c2b4dc02b764d93c311e6db408308c12dcc73a2d88051bf8dc89->enter($__internal_948f3fd636d4c2b4dc02b764d93c311e6db408308c12dcc73a2d88051bf8dc89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_948f3fd636d4c2b4dc02b764d93c311e6db408308c12dcc73a2d88051bf8dc89->leave($__internal_948f3fd636d4c2b4dc02b764d93c311e6db408308c12dcc73a2d88051bf8dc89_prof);

        
        $__internal_140f66ebda2a36838361c22898204a752189f2737cff3f1a884142adc2ca1b3c->leave($__internal_140f66ebda2a36838361c22898204a752189f2737cff3f1a884142adc2ca1b3c_prof);

    }

    // line 25
    public function block_field($context, array $blocks = array())
    {
        $__internal_31a38194cf8ca89adc05cadf419d6ab4c5d0fa341624992b033c630fb9e6a141 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31a38194cf8ca89adc05cadf419d6ab4c5d0fa341624992b033c630fb9e6a141->enter($__internal_31a38194cf8ca89adc05cadf419d6ab4c5d0fa341624992b033c630fb9e6a141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_0361c897e868ad46ed22ac380b0f5f84f8910f64c2d69603ca84b21c6536a9a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0361c897e868ad46ed22ac380b0f5f84f8910f64c2d69603ca84b21c6536a9a8->enter($__internal_0361c897e868ad46ed22ac380b0f5f84f8910f64c2d69603ca84b21c6536a9a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 25, $this->getSourceContext()); })()), 'widget');
        
        $__internal_0361c897e868ad46ed22ac380b0f5f84f8910f64c2d69603ca84b21c6536a9a8->leave($__internal_0361c897e868ad46ed22ac380b0f5f84f8910f64c2d69603ca84b21c6536a9a8_prof);

        
        $__internal_31a38194cf8ca89adc05cadf419d6ab4c5d0fa341624992b033c630fb9e6a141->leave($__internal_31a38194cf8ca89adc05cadf419d6ab4c5d0fa341624992b033c630fb9e6a141_prof);

    }

    // line 28
    public function block_errors($context, array $blocks = array())
    {
        $__internal_b49e2fffa3383aa7bbb92cb1ee0470cfd3aba213a6825257481962f6494178c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b49e2fffa3383aa7bbb92cb1ee0470cfd3aba213a6825257481962f6494178c2->enter($__internal_b49e2fffa3383aa7bbb92cb1ee0470cfd3aba213a6825257481962f6494178c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        $__internal_599dfa740362097d191381f3c6901acea71689ab689ee857e5ac8ce3bcacb1a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_599dfa740362097d191381f3c6901acea71689ab689ee857e5ac8ce3bcacb1a4->enter($__internal_599dfa740362097d191381f3c6901acea71689ab689ee857e5ac8ce3bcacb1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 28, $this->getSourceContext()); })()), 'errors');
        
        $__internal_599dfa740362097d191381f3c6901acea71689ab689ee857e5ac8ce3bcacb1a4->leave($__internal_599dfa740362097d191381f3c6901acea71689ab689ee857e5ac8ce3bcacb1a4_prof);

        
        $__internal_b49e2fffa3383aa7bbb92cb1ee0470cfd3aba213a6825257481962f6494178c2->leave($__internal_b49e2fffa3383aa7bbb92cb1ee0470cfd3aba213a6825257481962f6494178c2_prof);

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
