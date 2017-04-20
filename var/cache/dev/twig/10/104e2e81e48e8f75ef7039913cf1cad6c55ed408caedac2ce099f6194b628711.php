<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_8976dac8d66e0a4f2632947c0741c1392edb7b38544990e9df426156f0352f2b extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab34af731f9b0f3c29625332916fbbf15966d5d2fb88e76a6e8d4c316feccd54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab34af731f9b0f3c29625332916fbbf15966d5d2fb88e76a6e8d4c316feccd54->enter($__internal_ab34af731f9b0f3c29625332916fbbf15966d5d2fb88e76a6e8d4c316feccd54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $__internal_77f5ca7e1a436df85d2a5cfda7a3019b1a2921b473e6304c2f86eefcd78580a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77f5ca7e1a436df85d2a5cfda7a3019b1a2921b473e6304c2f86eefcd78580a1->enter($__internal_77f5ca7e1a436df85d2a5cfda7a3019b1a2921b473e6304c2f86eefcd78580a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab34af731f9b0f3c29625332916fbbf15966d5d2fb88e76a6e8d4c316feccd54->leave($__internal_ab34af731f9b0f3c29625332916fbbf15966d5d2fb88e76a6e8d4c316feccd54_prof);

        
        $__internal_77f5ca7e1a436df85d2a5cfda7a3019b1a2921b473e6304c2f86eefcd78580a1->leave($__internal_77f5ca7e1a436df85d2a5cfda7a3019b1a2921b473e6304c2f86eefcd78580a1_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8c0c13be27f368728c87638e25bb365d3b6979c2c955a321fd1366fa0fda5066 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c0c13be27f368728c87638e25bb365d3b6979c2c955a321fd1366fa0fda5066->enter($__internal_8c0c13be27f368728c87638e25bb365d3b6979c2c955a321fd1366fa0fda5066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_fd656c6168e328a47c07b83ff63b32613220bd5415849515541a26e30c3d3163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd656c6168e328a47c07b83ff63b32613220bd5415849515541a26e30c3d3163->enter($__internal_fd656c6168e328a47c07b83ff63b32613220bd5415849515541a26e30c3d3163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
        echo " %
";
        
        $__internal_fd656c6168e328a47c07b83ff63b32613220bd5415849515541a26e30c3d3163->leave($__internal_fd656c6168e328a47c07b83ff63b32613220bd5415849515541a26e30c3d3163_prof);

        
        $__internal_8c0c13be27f368728c87638e25bb365d3b6979c2c955a321fd1366fa0fda5066->leave($__internal_8c0c13be27f368728c87638e25bb365d3b6979c2c955a321fd1366fa0fda5066_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "SonataAdminBundle:CRUD:list_percent.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_percent.html.twig");
    }
}
