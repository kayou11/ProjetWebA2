<?php

/* SonataAdminBundle:CRUD:list_time.html.twig */
class __TwigTemplate_0eb03ddcf732085707791ec3a57e7463971457ec7fb4e311cdd78fef58b935cc extends Twig_Template
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
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5710f22fbe96fba5218db239f6037a95444688a14d15a60a04af23e81250c859 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5710f22fbe96fba5218db239f6037a95444688a14d15a60a04af23e81250c859->enter($__internal_5710f22fbe96fba5218db239f6037a95444688a14d15a60a04af23e81250c859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $__internal_75c75c58c11ab28e7e9ba0a5f0bf0cbd1bc839827de636fe7f2e27ef6e81ec75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75c75c58c11ab28e7e9ba0a5f0bf0cbd1bc839827de636fe7f2e27ef6e81ec75->enter($__internal_75c75c58c11ab28e7e9ba0a5f0bf0cbd1bc839827de636fe7f2e27ef6e81ec75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5710f22fbe96fba5218db239f6037a95444688a14d15a60a04af23e81250c859->leave($__internal_5710f22fbe96fba5218db239f6037a95444688a14d15a60a04af23e81250c859_prof);

        
        $__internal_75c75c58c11ab28e7e9ba0a5f0bf0cbd1bc839827de636fe7f2e27ef6e81ec75->leave($__internal_75c75c58c11ab28e7e9ba0a5f0bf0cbd1bc839827de636fe7f2e27ef6e81ec75_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_dd216abe816fc754b3f1d191ba84d2c046d2f61306636714456955e31db99f25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd216abe816fc754b3f1d191ba84d2c046d2f61306636714456955e31db99f25->enter($__internal_dd216abe816fc754b3f1d191ba84d2c046d2f61306636714456955e31db99f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_a5b5db5c11a7a453b7873e5543a72d7c2de81edabaa9e041ee2e6ef4abe09950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5b5db5c11a7a453b7873e5543a72d7c2de81edabaa9e041ee2e6ef4abe09950->enter($__internal_a5b5db5c11a7a453b7873e5543a72d7c2de81edabaa9e041ee2e6ef4abe09950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 18, $this->getSourceContext()); })()), "H:i:s"), "html", null, true);
        }
        
        $__internal_a5b5db5c11a7a453b7873e5543a72d7c2de81edabaa9e041ee2e6ef4abe09950->leave($__internal_a5b5db5c11a7a453b7873e5543a72d7c2de81edabaa9e041ee2e6ef4abe09950_prof);

        
        $__internal_dd216abe816fc754b3f1d191ba84d2c046d2f61306636714456955e31db99f25->leave($__internal_dd216abe816fc754b3f1d191ba84d2c046d2f61306636714456955e31db99f25_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 18,  50 => 16,  48 => 15,  39 => 14,  18 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:list_time.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_time.html.twig");
    }
}
