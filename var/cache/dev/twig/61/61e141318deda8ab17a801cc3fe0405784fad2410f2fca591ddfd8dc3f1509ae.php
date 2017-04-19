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
        $__internal_5b97fa95bb2a84ab9f601cbd32bf839bcc9ac616e648bde40f7f65d311c290b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b97fa95bb2a84ab9f601cbd32bf839bcc9ac616e648bde40f7f65d311c290b5->enter($__internal_5b97fa95bb2a84ab9f601cbd32bf839bcc9ac616e648bde40f7f65d311c290b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $__internal_32b81e1bfe1b65fa5be5ed4b3d69de147820cd5c8bbab3cce8798c4159590ed4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32b81e1bfe1b65fa5be5ed4b3d69de147820cd5c8bbab3cce8798c4159590ed4->enter($__internal_32b81e1bfe1b65fa5be5ed4b3d69de147820cd5c8bbab3cce8798c4159590ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b97fa95bb2a84ab9f601cbd32bf839bcc9ac616e648bde40f7f65d311c290b5->leave($__internal_5b97fa95bb2a84ab9f601cbd32bf839bcc9ac616e648bde40f7f65d311c290b5_prof);

        
        $__internal_32b81e1bfe1b65fa5be5ed4b3d69de147820cd5c8bbab3cce8798c4159590ed4->leave($__internal_32b81e1bfe1b65fa5be5ed4b3d69de147820cd5c8bbab3cce8798c4159590ed4_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4fa16cd5ceffbf5462242d98a5ac42f76eea65b902ef9ddbbda56defd27bd760 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fa16cd5ceffbf5462242d98a5ac42f76eea65b902ef9ddbbda56defd27bd760->enter($__internal_4fa16cd5ceffbf5462242d98a5ac42f76eea65b902ef9ddbbda56defd27bd760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_a9a638f4c34df9bd61ad44c454b53821ebee436887d610e4f2d92d08835f524c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9a638f4c34df9bd61ad44c454b53821ebee436887d610e4f2d92d08835f524c->enter($__internal_a9a638f4c34df9bd61ad44c454b53821ebee436887d610e4f2d92d08835f524c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
        echo " %
";
        
        $__internal_a9a638f4c34df9bd61ad44c454b53821ebee436887d610e4f2d92d08835f524c->leave($__internal_a9a638f4c34df9bd61ad44c454b53821ebee436887d610e4f2d92d08835f524c_prof);

        
        $__internal_4fa16cd5ceffbf5462242d98a5ac42f76eea65b902ef9ddbbda56defd27bd760->leave($__internal_4fa16cd5ceffbf5462242d98a5ac42f76eea65b902ef9ddbbda56defd27bd760_prof);

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
