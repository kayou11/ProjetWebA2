<?php

/* SonataAdminBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_a3489c72fdb5f4e31241128b0fba5837b61535012abfb8e0b3de3ac69d7bf404 extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_113d2a6efdb82e9582eef786a70647765e2b2eeea20a3c8813a76aa659528131 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_113d2a6efdb82e9582eef786a70647765e2b2eeea20a3c8813a76aa659528131->enter($__internal_113d2a6efdb82e9582eef786a70647765e2b2eeea20a3c8813a76aa659528131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $__internal_75a8c719808c68b483b0e1381af34886910470f932cf2598b322b05c1ea4402f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75a8c719808c68b483b0e1381af34886910470f932cf2598b322b05c1ea4402f->enter($__internal_75a8c719808c68b483b0e1381af34886910470f932cf2598b322b05c1ea4402f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_113d2a6efdb82e9582eef786a70647765e2b2eeea20a3c8813a76aa659528131->leave($__internal_113d2a6efdb82e9582eef786a70647765e2b2eeea20a3c8813a76aa659528131_prof);

        
        $__internal_75a8c719808c68b483b0e1381af34886910470f932cf2598b322b05c1ea4402f->leave($__internal_75a8c719808c68b483b0e1381af34886910470f932cf2598b322b05c1ea4402f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d12f5ef3c3aaaffc9d3f9eb687783cda6e11adad01b7eec6705ef8c62c092914 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d12f5ef3c3aaaffc9d3f9eb687783cda6e11adad01b7eec6705ef8c62c092914->enter($__internal_d12f5ef3c3aaaffc9d3f9eb687783cda6e11adad01b7eec6705ef8c62c092914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_581ed36ce90c43670bb9aeb0b4fb14ae1d51c00c5c922f0c4ec48d7ae3204b2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_581ed36ce90c43670bb9aeb0b4fb14ae1d51c00c5c922f0c4ec48d7ae3204b2c->enter($__internal_581ed36ce90c43670bb9aeb0b4fb14ae1d51c00c5c922f0c4ec48d7ae3204b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 16, $this->getSourceContext()); })()), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
            echo "
    ";
        }
        
        $__internal_581ed36ce90c43670bb9aeb0b4fb14ae1d51c00c5c922f0c4ec48d7ae3204b2c->leave($__internal_581ed36ce90c43670bb9aeb0b4fb14ae1d51c00c5c922f0c4ec48d7ae3204b2c_prof);

        
        $__internal_d12f5ef3c3aaaffc9d3f9eb687783cda6e11adad01b7eec6705ef8c62c092914->leave($__internal_d12f5ef3c3aaaffc9d3f9eb687783cda6e11adad01b7eec6705ef8c62c092914_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_currency.html.twig";
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
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_currency.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_currency.html.twig");
    }
}
