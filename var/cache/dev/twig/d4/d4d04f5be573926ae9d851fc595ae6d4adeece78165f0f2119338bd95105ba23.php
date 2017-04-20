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
        $__internal_b01b0eab49b596d0298d8d184ef952851ea562faa64696a483d457a22686e974 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b01b0eab49b596d0298d8d184ef952851ea562faa64696a483d457a22686e974->enter($__internal_b01b0eab49b596d0298d8d184ef952851ea562faa64696a483d457a22686e974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig"));

        $__internal_fbb01fd295f46b577912495647d1a2dcd186b63e5d4f89b374a124d5d2d4c19f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbb01fd295f46b577912495647d1a2dcd186b63e5d4f89b374a124d5d2d4c19f->enter($__internal_fbb01fd295f46b577912495647d1a2dcd186b63e5d4f89b374a124d5d2d4c19f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig"));

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
        
        $__internal_b01b0eab49b596d0298d8d184ef952851ea562faa64696a483d457a22686e974->leave($__internal_b01b0eab49b596d0298d8d184ef952851ea562faa64696a483d457a22686e974_prof);

        
        $__internal_fbb01fd295f46b577912495647d1a2dcd186b63e5d4f89b374a124d5d2d4c19f->leave($__internal_fbb01fd295f46b577912495647d1a2dcd186b63e5d4f89b374a124d5d2d4c19f_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_85732de2cff1f6528719c44f3022b44332907952ee931a31541e7d518e95558a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85732de2cff1f6528719c44f3022b44332907952ee931a31541e7d518e95558a->enter($__internal_85732de2cff1f6528719c44f3022b44332907952ee931a31541e7d518e95558a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_75ed4d3a8b9700c22f317d6bfa0758ffff2b1757fc5303cfa203dc60c9b366be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75ed4d3a8b9700c22f317d6bfa0758ffff2b1757fc5303cfa203dc60c9b366be->enter($__internal_75ed4d3a8b9700c22f317d6bfa0758ffff2b1757fc5303cfa203dc60c9b366be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_75ed4d3a8b9700c22f317d6bfa0758ffff2b1757fc5303cfa203dc60c9b366be->leave($__internal_75ed4d3a8b9700c22f317d6bfa0758ffff2b1757fc5303cfa203dc60c9b366be_prof);

        
        $__internal_85732de2cff1f6528719c44f3022b44332907952ee931a31541e7d518e95558a->leave($__internal_85732de2cff1f6528719c44f3022b44332907952ee931a31541e7d518e95558a_prof);

    }

    // line 25
    public function block_field($context, array $blocks = array())
    {
        $__internal_5b2dbce98a15360380a8e1d141d3f3e66de4afefbddb33d4e4ac58dddbbfa5b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b2dbce98a15360380a8e1d141d3f3e66de4afefbddb33d4e4ac58dddbbfa5b8->enter($__internal_5b2dbce98a15360380a8e1d141d3f3e66de4afefbddb33d4e4ac58dddbbfa5b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_ce64743ab3cbd0f8661d8b44a3998c51a5d608db0da5e0d2fae85829b5eee9ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce64743ab3cbd0f8661d8b44a3998c51a5d608db0da5e0d2fae85829b5eee9ae->enter($__internal_ce64743ab3cbd0f8661d8b44a3998c51a5d608db0da5e0d2fae85829b5eee9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 25, $this->getSourceContext()); })()), 'widget');
        
        $__internal_ce64743ab3cbd0f8661d8b44a3998c51a5d608db0da5e0d2fae85829b5eee9ae->leave($__internal_ce64743ab3cbd0f8661d8b44a3998c51a5d608db0da5e0d2fae85829b5eee9ae_prof);

        
        $__internal_5b2dbce98a15360380a8e1d141d3f3e66de4afefbddb33d4e4ac58dddbbfa5b8->leave($__internal_5b2dbce98a15360380a8e1d141d3f3e66de4afefbddb33d4e4ac58dddbbfa5b8_prof);

    }

    // line 28
    public function block_errors($context, array $blocks = array())
    {
        $__internal_4c0bcf7dc0e65882157564437181319936d41a1b5c115f97f6d9be6722c4059c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c0bcf7dc0e65882157564437181319936d41a1b5c115f97f6d9be6722c4059c->enter($__internal_4c0bcf7dc0e65882157564437181319936d41a1b5c115f97f6d9be6722c4059c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        $__internal_ac7616723c13a1518a07d461de001ecf6097f461937ec50431c5323d7683654a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac7616723c13a1518a07d461de001ecf6097f461937ec50431c5323d7683654a->enter($__internal_ac7616723c13a1518a07d461de001ecf6097f461937ec50431c5323d7683654a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 28, $this->getSourceContext()); })()), 'errors');
        
        $__internal_ac7616723c13a1518a07d461de001ecf6097f461937ec50431c5323d7683654a->leave($__internal_ac7616723c13a1518a07d461de001ecf6097f461937ec50431c5323d7683654a_prof);

        
        $__internal_4c0bcf7dc0e65882157564437181319936d41a1b5c115f97f6d9be6722c4059c->leave($__internal_4c0bcf7dc0e65882157564437181319936d41a1b5c115f97f6d9be6722c4059c_prof);

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
