<?php

/* SonataAdminBundle:CRUD:list_html.html.twig */
class __TwigTemplate_d9b4a0c2d43b3b6c76456687a2b97de793d102de9d1b5ff1a8fead7cc4594639 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 1, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_html.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f583ab57e264bac644b0c87b8423aab3be5bd84159885c24051e03c3ce2ecd4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f583ab57e264bac644b0c87b8423aab3be5bd84159885c24051e03c3ce2ecd4c->enter($__internal_f583ab57e264bac644b0c87b8423aab3be5bd84159885c24051e03c3ce2ecd4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_html.html.twig"));

        $__internal_f5b33593fdf8ad9d4f8185fe4fed00d5be1f14801e644c7d4a3018b2b7408d55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5b33593fdf8ad9d4f8185fe4fed00d5be1f14801e644c7d4a3018b2b7408d55->enter($__internal_f5b33593fdf8ad9d4f8185fe4fed00d5be1f14801e644c7d4a3018b2b7408d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_html.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f583ab57e264bac644b0c87b8423aab3be5bd84159885c24051e03c3ce2ecd4c->leave($__internal_f583ab57e264bac644b0c87b8423aab3be5bd84159885c24051e03c3ce2ecd4c_prof);

        
        $__internal_f5b33593fdf8ad9d4f8185fe4fed00d5be1f14801e644c7d4a3018b2b7408d55->leave($__internal_f5b33593fdf8ad9d4f8185fe4fed00d5be1f14801e644c7d4a3018b2b7408d55_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_17298f0539ee57f38e2b358977e7538881c4102e9218645a110426f9e4289e7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17298f0539ee57f38e2b358977e7538881c4102e9218645a110426f9e4289e7b->enter($__internal_17298f0539ee57f38e2b358977e7538881c4102e9218645a110426f9e4289e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_6185690c15410bd02ebd6ac09a40a120814c589cd6ba1f25e8b92e3f871deafb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6185690c15410bd02ebd6ac09a40a120814c589cd6ba1f25e8b92e3f871deafb->enter($__internal_6185690c15410bd02ebd6ac09a40a120814c589cd6ba1f25e8b92e3f871deafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        if (twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 4, $this->getSourceContext()); })()))) {
            // line 5
            echo "&nbsp;
    ";
        } else {
            // line 7
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "truncate", array(), "any", true, true)) {
                // line 8
                $context["truncate"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 8, $this->getSourceContext()); })()), "options", array()), "truncate", array());
                // line 9
                echo "            ";
                $context["length"] = ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["truncate"] ?? null), "length", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["truncate"] ?? null), "length", array()), 30)) : (30));
                // line 10
                echo "            ";
                $context["preserve"] = ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["truncate"] ?? null), "preserve", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["truncate"] ?? null), "preserve", array()), false)) : (false));
                // line 11
                echo "            ";
                $context["separator"] = ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["truncate"] ?? null), "separator", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["truncate"] ?? null), "separator", array()), "...")) : ("..."));
                // line 12
                echo "            ";
                echo twig_truncate_filter($this->env, strip_tags((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 12, $this->getSourceContext()); })())), (isset($context["length"]) || array_key_exists("length", $context) ? $context["length"] : (function () { throw new Twig_Error_Runtime('Variable "length" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["preserve"]) || array_key_exists("preserve", $context) ? $context["preserve"] : (function () { throw new Twig_Error_Runtime('Variable "preserve" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 12, $this->getSourceContext()); })()));
            } else {
                // line 14
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "strip", array(), "any", true, true)) {
                    // line 15
                    $context["value"] = strip_tags((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()));
                }
                // line 17
                echo (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 17, $this->getSourceContext()); })());
                echo "
        ";
            }
            // line 19
            echo "    ";
        }
        
        $__internal_6185690c15410bd02ebd6ac09a40a120814c589cd6ba1f25e8b92e3f871deafb->leave($__internal_6185690c15410bd02ebd6ac09a40a120814c589cd6ba1f25e8b92e3f871deafb_prof);

        
        $__internal_17298f0539ee57f38e2b358977e7538881c4102e9218645a110426f9e4289e7b->leave($__internal_17298f0539ee57f38e2b358977e7538881c4102e9218645a110426f9e4289e7b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 19,  76 => 17,  73 => 15,  71 => 14,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  56 => 8,  54 => 7,  50 => 5,  48 => 4,  39 => 3,  18 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {% else %}
        {%- if field_description.options.truncate is defined -%}
            {% set truncate = field_description.options.truncate %}
            {% set length = truncate.length|default(30) %}
            {% set preserve = truncate.preserve|default(false) %}
            {% set separator = truncate.separator|default('...') %}
            {{ value|striptags|truncate(length, preserve, separator)|raw }}
        {%- else -%}
            {%- if field_description.options.strip is defined -%}
                {% set value = value|striptags %}
            {%- endif -%}
            {{ value|raw }}
        {% endif %}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_html.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_html.html.twig");
    }
}
