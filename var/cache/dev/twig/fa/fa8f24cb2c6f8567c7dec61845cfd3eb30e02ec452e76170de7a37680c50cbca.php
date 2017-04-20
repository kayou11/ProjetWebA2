<?php

/* SonataAdminBundle:CRUD:base_filter_field.html.twig */
class __TwigTemplate_d2810a09df921788db4dfa9c6228f873dcc5f67afe8513627ba21afa6e9c820b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e7fd790e1cfc3f189d39b498bdd36f250483bd6872e4993c742238f4d80c49ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7fd790e1cfc3f189d39b498bdd36f250483bd6872e4993c742238f4d80c49ac->enter($__internal_e7fd790e1cfc3f189d39b498bdd36f250483bd6872e4993c742238f4d80c49ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_filter_field.html.twig"));

        $__internal_eea9e74205fd77f942434be23dfba39e4425a468e02a607399d546b941bb5039 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eea9e74205fd77f942434be23dfba39e4425a468e02a607399d546b941bb5039->enter($__internal_eea9e74205fd77f942434be23dfba39e4425a468e02a607399d546b941bb5039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_filter_field.html.twig"));

        // line 11
        echo "

<div>
    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 22
        echo "
    <div class=\"sonata-ba-field";
        // line 23
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filter_form"]) || array_key_exists("filter_form", $context) ? $context["filter_form"] : (function () { throw new Twig_Error_Runtime('Variable "filter_form" does not exist.', 23, $this->getSourceContext()); })()), "vars", array()), "errors", array())) {
            echo " sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 24
        $this->displayBlock('field', $context, $blocks);
        // line 25
        echo "    </div>
</div>
";
        
        $__internal_e7fd790e1cfc3f189d39b498bdd36f250483bd6872e4993c742238f4d80c49ac->leave($__internal_e7fd790e1cfc3f189d39b498bdd36f250483bd6872e4993c742238f4d80c49ac_prof);

        
        $__internal_eea9e74205fd77f942434be23dfba39e4425a468e02a607399d546b941bb5039->leave($__internal_eea9e74205fd77f942434be23dfba39e4425a468e02a607399d546b941bb5039_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_154df795073170f362561c94448729b027d01b6390d6e3d8cf8da3f9d79f0c39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_154df795073170f362561c94448729b027d01b6390d6e3d8cf8da3f9d79f0c39->enter($__internal_154df795073170f362561c94448729b027d01b6390d6e3d8cf8da3f9d79f0c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_96c67f91c84978542972477962d3862b6fa484062d009b4dba409668557ba0f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96c67f91c84978542972477962d3862b6fa484062d009b4dba409668557ba0f9->enter($__internal_96c67f91c84978542972477962d3862b6fa484062d009b4dba409668557ba0f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["filter"] ?? null), "fielddescription", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 16
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["filter_form"]) || array_key_exists("filter_form", $context) ? $context["filter_form"] : (function () { throw new Twig_Error_Runtime('Variable "filter_form" does not exist.', 16, $this->getSourceContext()); })()), 'label', (twig_test_empty($_label_ = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new Twig_Error_Runtime('Variable "filter" does not exist.', 16, $this->getSourceContext()); })()), "fielddescription", array()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 18
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["filter_form"]) || array_key_exists("filter_form", $context) ? $context["filter_form"] : (function () { throw new Twig_Error_Runtime('Variable "filter_form" does not exist.', 18, $this->getSourceContext()); })()), 'label');
            echo "
        ";
        }
        // line 20
        echo "        <br>
    ";
        
        $__internal_96c67f91c84978542972477962d3862b6fa484062d009b4dba409668557ba0f9->leave($__internal_96c67f91c84978542972477962d3862b6fa484062d009b4dba409668557ba0f9_prof);

        
        $__internal_154df795073170f362561c94448729b027d01b6390d6e3d8cf8da3f9d79f0c39->leave($__internal_154df795073170f362561c94448729b027d01b6390d6e3d8cf8da3f9d79f0c39_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_927ca2ac4d506518a92e49d49d3fa65ad84037837413eda245cc9998294c3001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_927ca2ac4d506518a92e49d49d3fa65ad84037837413eda245cc9998294c3001->enter($__internal_927ca2ac4d506518a92e49d49d3fa65ad84037837413eda245cc9998294c3001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_f42c73a493c962ee69b9a2e0a793447ef2cc21a625b8c5f624f8e72dd0b7e617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f42c73a493c962ee69b9a2e0a793447ef2cc21a625b8c5f624f8e72dd0b7e617->enter($__internal_f42c73a493c962ee69b9a2e0a793447ef2cc21a625b8c5f624f8e72dd0b7e617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["filter_form"]) || array_key_exists("filter_form", $context) ? $context["filter_form"] : (function () { throw new Twig_Error_Runtime('Variable "filter_form" does not exist.', 24, $this->getSourceContext()); })()), 'widget');
        
        $__internal_f42c73a493c962ee69b9a2e0a793447ef2cc21a625b8c5f624f8e72dd0b7e617->leave($__internal_f42c73a493c962ee69b9a2e0a793447ef2cc21a625b8c5f624f8e72dd0b7e617_prof);

        
        $__internal_927ca2ac4d506518a92e49d49d3fa65ad84037837413eda245cc9998294c3001->leave($__internal_927ca2ac4d506518a92e49d49d3fa65ad84037837413eda245cc9998294c3001_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_filter_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 24,  81 => 20,  75 => 18,  69 => 16,  66 => 15,  57 => 14,  45 => 25,  43 => 24,  37 => 23,  34 => 22,  32 => 14,  27 => 11,);
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
    {% block label %}
        {% if filter.fielddescription.options.name is defined %}
            {{ form_label(filter_form, filter.fielddescription.options.name) }}
        {% else %}
            {{ form_label(filter_form) }}
        {% endif %}
        <br>
    {% endblock %}

    <div class=\"sonata-ba-field{% if filter_form.vars.errors %} sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(filter_form) }}{% endblock %}
    </div>
</div>
", "SonataAdminBundle:CRUD:base_filter_field.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_filter_field.html.twig");
    }
}
