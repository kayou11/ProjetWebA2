<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_7bb550243b61fad38a4f669e7d55b5f95968460dab92fc60f3e200e4002924c5 extends Twig_Template
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
        $__internal_378e687211816accae4cd328e01b11ce3f2f8412689cd1381c7cf0e3258d4855 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_378e687211816accae4cd328e01b11ce3f2f8412689cd1381c7cf0e3258d4855->enter($__internal_378e687211816accae4cd328e01b11ce3f2f8412689cd1381c7cf0e3258d4855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $__internal_f2737702f16d3fc3220fcd99a4873162cf88841c2e05bc530405cbc227123b71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2737702f16d3fc3220fcd99a4873162cf88841c2e05bc530405cbc227123b71->enter($__internal_f2737702f16d3fc3220fcd99a4873162cf88841c2e05bc530405cbc227123b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_378e687211816accae4cd328e01b11ce3f2f8412689cd1381c7cf0e3258d4855->leave($__internal_378e687211816accae4cd328e01b11ce3f2f8412689cd1381c7cf0e3258d4855_prof);

        
        $__internal_f2737702f16d3fc3220fcd99a4873162cf88841c2e05bc530405cbc227123b71->leave($__internal_f2737702f16d3fc3220fcd99a4873162cf88841c2e05bc530405cbc227123b71_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_531f48c07ac7022354059ef0fe5375a1a7840c4ea0a0662dbc20927a1178f032 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_531f48c07ac7022354059ef0fe5375a1a7840c4ea0a0662dbc20927a1178f032->enter($__internal_531f48c07ac7022354059ef0fe5375a1a7840c4ea0a0662dbc20927a1178f032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_13d88a0e7c608f0dab61e9ffcfb14b41df9772f0d6be8e6b60dc394f1f284758 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13d88a0e7c608f0dab61e9ffcfb14b41df9772f0d6be8e6b60dc394f1f284758->enter($__internal_13d88a0e7c608f0dab61e9ffcfb14b41df9772f0d6be8e6b60dc394f1f284758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
        echo " %
";
        
        $__internal_13d88a0e7c608f0dab61e9ffcfb14b41df9772f0d6be8e6b60dc394f1f284758->leave($__internal_13d88a0e7c608f0dab61e9ffcfb14b41df9772f0d6be8e6b60dc394f1f284758_prof);

        
        $__internal_531f48c07ac7022354059ef0fe5375a1a7840c4ea0a0662dbc20927a1178f032->leave($__internal_531f48c07ac7022354059ef0fe5375a1a7840c4ea0a0662dbc20927a1178f032_prof);

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
