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
        $__internal_100c56862d9c48d66c5f047775add6bd1367c4f04026137b1166a992ac87d81a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_100c56862d9c48d66c5f047775add6bd1367c4f04026137b1166a992ac87d81a->enter($__internal_100c56862d9c48d66c5f047775add6bd1367c4f04026137b1166a992ac87d81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $__internal_6bcc5e962fd4614faa9098d05a6a228eb452865449d0c288f126901963b93d1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bcc5e962fd4614faa9098d05a6a228eb452865449d0c288f126901963b93d1c->enter($__internal_6bcc5e962fd4614faa9098d05a6a228eb452865449d0c288f126901963b93d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_100c56862d9c48d66c5f047775add6bd1367c4f04026137b1166a992ac87d81a->leave($__internal_100c56862d9c48d66c5f047775add6bd1367c4f04026137b1166a992ac87d81a_prof);

        
        $__internal_6bcc5e962fd4614faa9098d05a6a228eb452865449d0c288f126901963b93d1c->leave($__internal_6bcc5e962fd4614faa9098d05a6a228eb452865449d0c288f126901963b93d1c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2ae72d81fa42256407af534c19a8d71007fd457560da489c07aa4616b60d6aad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ae72d81fa42256407af534c19a8d71007fd457560da489c07aa4616b60d6aad->enter($__internal_2ae72d81fa42256407af534c19a8d71007fd457560da489c07aa4616b60d6aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_f32e34260b694f3b116d1be0d6ed728b24f47050dbd77f52d0e74a39cea08895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f32e34260b694f3b116d1be0d6ed728b24f47050dbd77f52d0e74a39cea08895->enter($__internal_f32e34260b694f3b116d1be0d6ed728b24f47050dbd77f52d0e74a39cea08895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
        echo " %
";
        
        $__internal_f32e34260b694f3b116d1be0d6ed728b24f47050dbd77f52d0e74a39cea08895->leave($__internal_f32e34260b694f3b116d1be0d6ed728b24f47050dbd77f52d0e74a39cea08895_prof);

        
        $__internal_2ae72d81fa42256407af534c19a8d71007fd457560da489c07aa4616b60d6aad->leave($__internal_2ae72d81fa42256407af534c19a8d71007fd457560da489c07aa4616b60d6aad_prof);

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
