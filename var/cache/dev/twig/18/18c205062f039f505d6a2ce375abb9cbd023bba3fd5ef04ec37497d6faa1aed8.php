<?php

/* SonataAdminBundle:CRUD:_email_link.html.twig */
class __TwigTemplate_25218888baf5113cf42957e83a1c1a52149b37bd9789318a4a5069911ff8952d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c00acaceb0e9e9aa9b58f4ba2a2f3d1f1789caa74a9b0ca77d0c050097a9d55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c00acaceb0e9e9aa9b58f4ba2a2f3d1f1789caa74a9b0ca77d0c050097a9d55->enter($__internal_4c00acaceb0e9e9aa9b58f4ba2a2f3d1f1789caa74a9b0ca77d0c050097a9d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:_email_link.html.twig"));

        $__internal_7b4dce659de55cf4e31093e6f2d780c867939401449a4f763d4f33d86550715c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b4dce659de55cf4e31093e6f2d780c867939401449a4f763d4f33d86550715c->enter($__internal_7b4dce659de55cf4e31093e6f2d780c867939401449a4f763d4f33d86550715c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:_email_link.html.twig"));

        // line 2
        if (twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })()))) {
            // line 3
            echo "&nbsp;";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 4
($context["field_description"] ?? null), "options", array(), "any", false, true), "as_string", array(), "any", true, true) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 4, $this->getSourceContext()); })()), "options", array()), "as_string", array()))) {
            // line 5
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        } else {
            // line 7
            $context["parameters"] = array();
            // line 8
            echo "    ";
            $context["subject"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "subject", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "subject", array()), "")) : (""));
            // line 9
            echo "    ";
            $context["body"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "body", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "body", array()), "")) : (""));
            // line 10
            echo "
    ";
            // line 11
            if ( !twig_test_empty((isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new Twig_Error_Runtime('Variable "subject" does not exist.', 11, $this->getSourceContext()); })()))) {
                // line 12
                echo "        ";
                $context["parameters"] = twig_array_merge((isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new Twig_Error_Runtime('Variable "parameters" does not exist.', 12, $this->getSourceContext()); })()), array("subject" => (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new Twig_Error_Runtime('Variable "subject" does not exist.', 12, $this->getSourceContext()); })())));
                // line 13
                echo "    ";
            }
            // line 14
            echo "    ";
            if ( !twig_test_empty((isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new Twig_Error_Runtime('Variable "body" does not exist.', 14, $this->getSourceContext()); })()))) {
                // line 15
                echo "        ";
                $context["parameters"] = twig_array_merge((isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new Twig_Error_Runtime('Variable "parameters" does not exist.', 15, $this->getSourceContext()); })()), array("body" => (isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new Twig_Error_Runtime('Variable "body" does not exist.', 15, $this->getSourceContext()); })())));
                // line 16
                echo "    ";
            }
            // line 17
            echo "
    <a href=\"mailto:";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 18, $this->getSourceContext()); })()), "html", null, true);
            if ((twig_length_filter($this->env, (isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new Twig_Error_Runtime('Variable "parameters" does not exist.', 18, $this->getSourceContext()); })())) > 0)) {
                echo "?";
                echo twig_escape_filter($this->env, twig_urlencode_filter((isset($context["parameters"]) || array_key_exists("parameters", $context) ? $context["parameters"] : (function () { throw new Twig_Error_Runtime('Variable "parameters" does not exist.', 18, $this->getSourceContext()); })())), "html", null, true);
            }
            echo "\">";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 19, $this->getSourceContext()); })()), "html", null, true);
            // line 20
            echo "</a>";
        }
        
        $__internal_4c00acaceb0e9e9aa9b58f4ba2a2f3d1f1789caa74a9b0ca77d0c050097a9d55->leave($__internal_4c00acaceb0e9e9aa9b58f4ba2a2f3d1f1789caa74a9b0ca77d0c050097a9d55_prof);

        
        $__internal_7b4dce659de55cf4e31093e6f2d780c867939401449a4f763d4f33d86550715c->leave($__internal_7b4dce659de55cf4e31093e6f2d780c867939401449a4f763d4f33d86550715c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:_email_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 20,  72 => 19,  65 => 18,  62 => 17,  59 => 16,  56 => 15,  53 => 14,  50 => 13,  47 => 12,  45 => 11,  42 => 10,  39 => 9,  36 => 8,  34 => 7,  31 => 5,  29 => 4,  27 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{%- if value is empty -%}
    &nbsp;
{%- elseif field_description.options.as_string is defined and field_description.options.as_string -%}
    {{ value }}
{%- else -%}
    {% set parameters = {} %}
    {% set subject = field_description.options.subject|default('') %}
    {% set body = field_description.options.body|default('') %}

    {% if subject is not empty %}
        {% set parameters = parameters|merge({'subject': subject}) %}
    {% endif %}
    {% if body is not empty %}
        {% set parameters = parameters|merge({'body': body}) %}
    {% endif %}

    <a href=\"mailto:{{ value }}{% if parameters|length > 0 %}?{{- parameters|url_encode -}}{% endif %}\">
        {{- value -}}
    </a>
{%- endif -%}
", "SonataAdminBundle:CRUD:_email_link.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/_email_link.html.twig");
    }
}
