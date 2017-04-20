<?php

/* SonataAdminBundle:CRUD:base_show_compare.html.twig */
class __TwigTemplate_9d85dc997aa933e135b58090cfff5417343f8885a8f498058c6be4f0fc8c9c9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:base_show_compare.html.twig", 12);
        $this->blocks = array(
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2107fabf13c7542dfd29a632af87dac602b512075ae155ec94424729e45d720c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2107fabf13c7542dfd29a632af87dac602b512075ae155ec94424729e45d720c->enter($__internal_2107fabf13c7542dfd29a632af87dac602b512075ae155ec94424729e45d720c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $__internal_0fb81d92b7fb883cbe0af34232f46f758b872b94de95a785626aab3c1b4ccade = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fb81d92b7fb883cbe0af34232f46f758b872b94de95a785626aab3c1b4ccade->enter($__internal_0fb81d92b7fb883cbe0af34232f46f758b872b94de95a785626aab3c1b4ccade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2107fabf13c7542dfd29a632af87dac602b512075ae155ec94424729e45d720c->leave($__internal_2107fabf13c7542dfd29a632af87dac602b512075ae155ec94424729e45d720c_prof);

        
        $__internal_0fb81d92b7fb883cbe0af34232f46f758b872b94de95a785626aab3c1b4ccade->leave($__internal_0fb81d92b7fb883cbe0af34232f46f758b872b94de95a785626aab3c1b4ccade_prof);

    }

    // line 14
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_72b97bd098ac7fd870a6bdf77ad0ec6eb36a81e8ab884f6a6210c16ca5020350 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72b97bd098ac7fd870a6bdf77ad0ec6eb36a81e8ab884f6a6210c16ca5020350->enter($__internal_72b97bd098ac7fd870a6bdf77ad0ec6eb36a81e8ab884f6a6210c16ca5020350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_977ca90ae8cb546e9f913bfb83a487ddb4dfc7c3c8faae4d0603b2ed725aba01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_977ca90ae8cb546e9f913bfb83a487ddb4dfc7c3c8faae4d0603b2ed725aba01->enter($__internal_977ca90ae8cb546e9f913bfb83a487ddb4dfc7c3c8faae4d0603b2ed725aba01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 15
        echo "    <tr class=\"sonata-ba-view-container history-audit-compare\">
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["elements"] ?? null), (isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new Twig_Error_Runtime('Variable "field_name" does not exist.', 16, $this->getSourceContext()); })()), array(), "array", true, true)) {
            // line 17
            echo "            ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElementCompare($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["elements"]) || array_key_exists("elements", $context) ? $context["elements"] : (function () { throw new Twig_Error_Runtime('Variable "elements" does not exist.', 17, $this->getSourceContext()); })()), (isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new Twig_Error_Runtime('Variable "field_name" does not exist.', 17, $this->getSourceContext()); })()), array(), "array"), (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 17, $this->getSourceContext()); })()), (isset($context["object_compare"]) || array_key_exists("object_compare", $context) ? $context["object_compare"] : (function () { throw new Twig_Error_Runtime('Variable "object_compare" does not exist.', 17, $this->getSourceContext()); })()));
            echo "
        ";
        }
        // line 19
        echo "    </tr>
";
        
        $__internal_977ca90ae8cb546e9f913bfb83a487ddb4dfc7c3c8faae4d0603b2ed725aba01->leave($__internal_977ca90ae8cb546e9f913bfb83a487ddb4dfc7c3c8faae4d0603b2ed725aba01_prof);

        
        $__internal_72b97bd098ac7fd870a6bdf77ad0ec6eb36a81e8ab884f6a6210c16ca5020350->leave($__internal_72b97bd098ac7fd870a6bdf77ad0ec6eb36a81e8ab884f6a6210c16ca5020350_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  54 => 17,  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}

{% block show_field %}
    <tr class=\"sonata-ba-view-container history-audit-compare\">
        {% if elements[field_name] is defined %}
            {{ elements[field_name]|render_view_element_compare(object, object_compare) }}
        {% endif %}
    </tr>
{% endblock %}
", "SonataAdminBundle:CRUD:base_show_compare.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_show_compare.html.twig");
    }
}
