<?php

/* SonataAdminBundle:CRUD:list_html.html.twig */
class __TwigTemplate_757a68ef46f083cd2a07f60b4e299c7aaa31d3e0611733ce0a3f448458629cdd extends Twig_Template
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
        $__internal_6941cef57c51470b58798ca471373b9e80a5834edb63f2c5aec69300feef9025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6941cef57c51470b58798ca471373b9e80a5834edb63f2c5aec69300feef9025->enter($__internal_6941cef57c51470b58798ca471373b9e80a5834edb63f2c5aec69300feef9025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_html.html.twig"));

        $__internal_550ff8dc418f7af22a206d86f13de146d09238f0b40e2217ef331b1a4ea71449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_550ff8dc418f7af22a206d86f13de146d09238f0b40e2217ef331b1a4ea71449->enter($__internal_550ff8dc418f7af22a206d86f13de146d09238f0b40e2217ef331b1a4ea71449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_html.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6941cef57c51470b58798ca471373b9e80a5834edb63f2c5aec69300feef9025->leave($__internal_6941cef57c51470b58798ca471373b9e80a5834edb63f2c5aec69300feef9025_prof);

        
        $__internal_550ff8dc418f7af22a206d86f13de146d09238f0b40e2217ef331b1a4ea71449->leave($__internal_550ff8dc418f7af22a206d86f13de146d09238f0b40e2217ef331b1a4ea71449_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_a2bacfd23cbd1721be61a8b321003371164040e9e6f56c5af2fd00b7a5242c00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2bacfd23cbd1721be61a8b321003371164040e9e6f56c5af2fd00b7a5242c00->enter($__internal_a2bacfd23cbd1721be61a8b321003371164040e9e6f56c5af2fd00b7a5242c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_3fab3a0382569c389ae0dbcd160530d8502c5fbddf12623707cc85da371e35d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fab3a0382569c389ae0dbcd160530d8502c5fbddf12623707cc85da371e35d1->enter($__internal_3fab3a0382569c389ae0dbcd160530d8502c5fbddf12623707cc85da371e35d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_3fab3a0382569c389ae0dbcd160530d8502c5fbddf12623707cc85da371e35d1->leave($__internal_3fab3a0382569c389ae0dbcd160530d8502c5fbddf12623707cc85da371e35d1_prof);

        
        $__internal_a2bacfd23cbd1721be61a8b321003371164040e9e6f56c5af2fd00b7a5242c00->leave($__internal_a2bacfd23cbd1721be61a8b321003371164040e9e6f56c5af2fd00b7a5242c00_prof);

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