<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_28e2d7ecf27e97f18de591661bb90dd4558d07539e7cbeaac30cff8a4655275e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c53810cef2568da07bff142f20901a164e43a5f18b97659dbb3a5281284932e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c53810cef2568da07bff142f20901a164e43a5f18b97659dbb3a5281284932e->enter($__internal_0c53810cef2568da07bff142f20901a164e43a5f18b97659dbb3a5281284932e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $__internal_fbd037ee1d972a46ec07f8a944a784521ea92e03e1760f46edad4a1fcc653933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbd037ee1d972a46ec07f8a944a784521ea92e03e1760f46edad4a1fcc653933->enter($__internal_fbd037ee1d972a46ec07f8a944a784521ea92e03e1760f46edad4a1fcc653933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c53810cef2568da07bff142f20901a164e43a5f18b97659dbb3a5281284932e->leave($__internal_0c53810cef2568da07bff142f20901a164e43a5f18b97659dbb3a5281284932e_prof);

        
        $__internal_fbd037ee1d972a46ec07f8a944a784521ea92e03e1760f46edad4a1fcc653933->leave($__internal_fbd037ee1d972a46ec07f8a944a784521ea92e03e1760f46edad4a1fcc653933_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_0a033244100ba2ea22edb94bf56e8028e3a9931be82a59f0768f816c9e649755 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a033244100ba2ea22edb94bf56e8028e3a9931be82a59f0768f816c9e649755->enter($__internal_0a033244100ba2ea22edb94bf56e8028e3a9931be82a59f0768f816c9e649755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_8aef9a793c56937ef7b72bb4795624c77ce2287a484c7b644ee5d3fc5eae2c94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aef9a793c56937ef7b72bb4795624c77ce2287a484c7b644ee5d3fc5eae2c94->enter($__internal_8aef9a793c56937ef7b72bb4795624c77ce2287a484c7b644ee5d3fc5eae2c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
        echo " %
";
        
        $__internal_8aef9a793c56937ef7b72bb4795624c77ce2287a484c7b644ee5d3fc5eae2c94->leave($__internal_8aef9a793c56937ef7b72bb4795624c77ce2287a484c7b644ee5d3fc5eae2c94_prof);

        
        $__internal_0a033244100ba2ea22edb94bf56e8028e3a9931be82a59f0768f816c9e649755->leave($__internal_0a033244100ba2ea22edb94bf56e8028e3a9931be82a59f0768f816c9e649755_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "SonataAdminBundle:CRUD:show_percent.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_percent.html.twig");
    }
}
