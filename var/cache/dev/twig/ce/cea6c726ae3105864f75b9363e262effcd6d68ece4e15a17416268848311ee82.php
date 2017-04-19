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
        $__internal_225ce0b0129c000f29ac688c80963e3209b8fbb272c7e26d6a8ae14203ed3c20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_225ce0b0129c000f29ac688c80963e3209b8fbb272c7e26d6a8ae14203ed3c20->enter($__internal_225ce0b0129c000f29ac688c80963e3209b8fbb272c7e26d6a8ae14203ed3c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig"));

        $__internal_229ee366d8dbe5c62a41f0e8a30883f38cdb064fad2e1047492ea26cd842b671 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_229ee366d8dbe5c62a41f0e8a30883f38cdb064fad2e1047492ea26cd842b671->enter($__internal_229ee366d8dbe5c62a41f0e8a30883f38cdb064fad2e1047492ea26cd842b671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig"));

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
        
        $__internal_225ce0b0129c000f29ac688c80963e3209b8fbb272c7e26d6a8ae14203ed3c20->leave($__internal_225ce0b0129c000f29ac688c80963e3209b8fbb272c7e26d6a8ae14203ed3c20_prof);

        
        $__internal_229ee366d8dbe5c62a41f0e8a30883f38cdb064fad2e1047492ea26cd842b671->leave($__internal_229ee366d8dbe5c62a41f0e8a30883f38cdb064fad2e1047492ea26cd842b671_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_90110c4a6af62af1c59693cf59843408ef4bf7b452b09bf1529e9af4a0cddbeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90110c4a6af62af1c59693cf59843408ef4bf7b452b09bf1529e9af4a0cddbeb->enter($__internal_90110c4a6af62af1c59693cf59843408ef4bf7b452b09bf1529e9af4a0cddbeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_e05f6bd5be2e148a04f2cde7a9fa7847841ba7939b204d6f94e3e29f7c532f7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e05f6bd5be2e148a04f2cde7a9fa7847841ba7939b204d6f94e3e29f7c532f7d->enter($__internal_e05f6bd5be2e148a04f2cde7a9fa7847841ba7939b204d6f94e3e29f7c532f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_e05f6bd5be2e148a04f2cde7a9fa7847841ba7939b204d6f94e3e29f7c532f7d->leave($__internal_e05f6bd5be2e148a04f2cde7a9fa7847841ba7939b204d6f94e3e29f7c532f7d_prof);

        
        $__internal_90110c4a6af62af1c59693cf59843408ef4bf7b452b09bf1529e9af4a0cddbeb->leave($__internal_90110c4a6af62af1c59693cf59843408ef4bf7b452b09bf1529e9af4a0cddbeb_prof);

    }

    // line 25
    public function block_field($context, array $blocks = array())
    {
        $__internal_935c452b4b5b1797a5ad103a0d214ef7afae0a817406c5f80a760a045394d9a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_935c452b4b5b1797a5ad103a0d214ef7afae0a817406c5f80a760a045394d9a1->enter($__internal_935c452b4b5b1797a5ad103a0d214ef7afae0a817406c5f80a760a045394d9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_3af35687f17b88db2c2bd9da16dc2d0682f7cd66178e8a9a754f8e6e9840df82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3af35687f17b88db2c2bd9da16dc2d0682f7cd66178e8a9a754f8e6e9840df82->enter($__internal_3af35687f17b88db2c2bd9da16dc2d0682f7cd66178e8a9a754f8e6e9840df82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 25, $this->getSourceContext()); })()), 'widget');
        
        $__internal_3af35687f17b88db2c2bd9da16dc2d0682f7cd66178e8a9a754f8e6e9840df82->leave($__internal_3af35687f17b88db2c2bd9da16dc2d0682f7cd66178e8a9a754f8e6e9840df82_prof);

        
        $__internal_935c452b4b5b1797a5ad103a0d214ef7afae0a817406c5f80a760a045394d9a1->leave($__internal_935c452b4b5b1797a5ad103a0d214ef7afae0a817406c5f80a760a045394d9a1_prof);

    }

    // line 28
    public function block_errors($context, array $blocks = array())
    {
        $__internal_691db5b7fed8f5f63bb5dc05f742ead0acc6fcf852d53e843f74e3e127243107 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_691db5b7fed8f5f63bb5dc05f742ead0acc6fcf852d53e843f74e3e127243107->enter($__internal_691db5b7fed8f5f63bb5dc05f742ead0acc6fcf852d53e843f74e3e127243107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        $__internal_152e32ad730b93c959956a2f2928e787a0861c82b61b2651be317f5f310996ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_152e32ad730b93c959956a2f2928e787a0861c82b61b2651be317f5f310996ba->enter($__internal_152e32ad730b93c959956a2f2928e787a0861c82b61b2651be317f5f310996ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 28, $this->getSourceContext()); })()), 'errors');
        
        $__internal_152e32ad730b93c959956a2f2928e787a0861c82b61b2651be317f5f310996ba->leave($__internal_152e32ad730b93c959956a2f2928e787a0861c82b61b2651be317f5f310996ba_prof);

        
        $__internal_691db5b7fed8f5f63bb5dc05f742ead0acc6fcf852d53e843f74e3e127243107->leave($__internal_691db5b7fed8f5f63bb5dc05f742ead0acc6fcf852d53e843f74e3e127243107_prof);

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
