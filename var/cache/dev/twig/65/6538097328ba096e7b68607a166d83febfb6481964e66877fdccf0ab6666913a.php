<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_2909aa62435ce548acaf89f2f75b33dca6ba6d5b72736db796cf73b3cc5749f1 extends Twig_Template
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
        $__internal_39540a737c363ccbda4d6942abd84f943f3b189cbf8fed9220001728b41f3843 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39540a737c363ccbda4d6942abd84f943f3b189cbf8fed9220001728b41f3843->enter($__internal_39540a737c363ccbda4d6942abd84f943f3b189cbf8fed9220001728b41f3843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $__internal_85a1703501511679ea2bb357d7e25169a8e4330942d6ddb788c3790c7d160d53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85a1703501511679ea2bb357d7e25169a8e4330942d6ddb788c3790c7d160d53->enter($__internal_85a1703501511679ea2bb357d7e25169a8e4330942d6ddb788c3790c7d160d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39540a737c363ccbda4d6942abd84f943f3b189cbf8fed9220001728b41f3843->leave($__internal_39540a737c363ccbda4d6942abd84f943f3b189cbf8fed9220001728b41f3843_prof);

        
        $__internal_85a1703501511679ea2bb357d7e25169a8e4330942d6ddb788c3790c7d160d53->leave($__internal_85a1703501511679ea2bb357d7e25169a8e4330942d6ddb788c3790c7d160d53_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2e3a26b6a3b989e64d0c84f8065f9e55d7dadde6f0ee71e505927188e4a392fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e3a26b6a3b989e64d0c84f8065f9e55d7dadde6f0ee71e505927188e4a392fd->enter($__internal_2e3a26b6a3b989e64d0c84f8065f9e55d7dadde6f0ee71e505927188e4a392fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_1fe07b5a2b2371eff2c0dda31a849e2a26fc717d6dbf46b7abe2280d91132a4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fe07b5a2b2371eff2c0dda31a849e2a26fc717d6dbf46b7abe2280d91132a4a->enter($__internal_1fe07b5a2b2371eff2c0dda31a849e2a26fc717d6dbf46b7abe2280d91132a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
        echo " %
";
        
        $__internal_1fe07b5a2b2371eff2c0dda31a849e2a26fc717d6dbf46b7abe2280d91132a4a->leave($__internal_1fe07b5a2b2371eff2c0dda31a849e2a26fc717d6dbf46b7abe2280d91132a4a_prof);

        
        $__internal_2e3a26b6a3b989e64d0c84f8065f9e55d7dadde6f0ee71e505927188e4a392fd->leave($__internal_2e3a26b6a3b989e64d0c84f8065f9e55d7dadde6f0ee71e505927188e4a392fd_prof);

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
