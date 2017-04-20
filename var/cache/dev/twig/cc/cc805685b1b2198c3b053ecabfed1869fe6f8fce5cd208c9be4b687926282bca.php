<?php

/* SonataAdminBundle:CRUD:list_time.html.twig */
class __TwigTemplate_7d12c73cd657ca804d3aa928bed1bc7005e0750d1838e72258e0bb29b5b59a1e extends Twig_Template
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
        $__internal_4828b26317f0ff8273349d1db7f5fd41e37ed614a554be30d4e3cd2cf67b6492 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4828b26317f0ff8273349d1db7f5fd41e37ed614a554be30d4e3cd2cf67b6492->enter($__internal_4828b26317f0ff8273349d1db7f5fd41e37ed614a554be30d4e3cd2cf67b6492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $__internal_e2823b85a5638332dbf1236acf1c67c430821f06c85aac8552cb17eec6d448c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2823b85a5638332dbf1236acf1c67c430821f06c85aac8552cb17eec6d448c9->enter($__internal_e2823b85a5638332dbf1236acf1c67c430821f06c85aac8552cb17eec6d448c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4828b26317f0ff8273349d1db7f5fd41e37ed614a554be30d4e3cd2cf67b6492->leave($__internal_4828b26317f0ff8273349d1db7f5fd41e37ed614a554be30d4e3cd2cf67b6492_prof);

        
        $__internal_e2823b85a5638332dbf1236acf1c67c430821f06c85aac8552cb17eec6d448c9->leave($__internal_e2823b85a5638332dbf1236acf1c67c430821f06c85aac8552cb17eec6d448c9_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_69aaaa68038279b89fbada8e1c24dc2bd45258118c4e57e8269573debbdc3880 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69aaaa68038279b89fbada8e1c24dc2bd45258118c4e57e8269573debbdc3880->enter($__internal_69aaaa68038279b89fbada8e1c24dc2bd45258118c4e57e8269573debbdc3880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_7933a4788d7954597f2b5d3a5d56a704fa3155f7e1293e2a1e7e8122c185306f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7933a4788d7954597f2b5d3a5d56a704fa3155f7e1293e2a1e7e8122c185306f->enter($__internal_7933a4788d7954597f2b5d3a5d56a704fa3155f7e1293e2a1e7e8122c185306f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 18, $this->getSourceContext()); })()), "H:i:s"), "html", null, true);
        }
        
        $__internal_7933a4788d7954597f2b5d3a5d56a704fa3155f7e1293e2a1e7e8122c185306f->leave($__internal_7933a4788d7954597f2b5d3a5d56a704fa3155f7e1293e2a1e7e8122c185306f_prof);

        
        $__internal_69aaaa68038279b89fbada8e1c24dc2bd45258118c4e57e8269573debbdc3880->leave($__internal_69aaaa68038279b89fbada8e1c24dc2bd45258118c4e57e8269573debbdc3880_prof);

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
