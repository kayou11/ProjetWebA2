<?php

/* SonataAdminBundle:CRUD:show_boolean.html.twig */
class __TwigTemplate_973496830415bcff7801f5293fae763f22ce916602b7f0c45a37aa40e26b8294 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_boolean.html.twig", 12);
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
        $__internal_93f31e65627a9d5029e50ad22f686c58d31f35aa91a051125c024f1b5cbf366c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93f31e65627a9d5029e50ad22f686c58d31f35aa91a051125c024f1b5cbf366c->enter($__internal_93f31e65627a9d5029e50ad22f686c58d31f35aa91a051125c024f1b5cbf366c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_boolean.html.twig"));

        $__internal_0078fd4f6a0bfe27903912ae4ede504b24a3afef2875d953e51ccb6268e04042 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0078fd4f6a0bfe27903912ae4ede504b24a3afef2875d953e51ccb6268e04042->enter($__internal_0078fd4f6a0bfe27903912ae4ede504b24a3afef2875d953e51ccb6268e04042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93f31e65627a9d5029e50ad22f686c58d31f35aa91a051125c024f1b5cbf366c->leave($__internal_93f31e65627a9d5029e50ad22f686c58d31f35aa91a051125c024f1b5cbf366c_prof);

        
        $__internal_0078fd4f6a0bfe27903912ae4ede504b24a3afef2875d953e51ccb6268e04042->leave($__internal_0078fd4f6a0bfe27903912ae4ede504b24a3afef2875d953e51ccb6268e04042_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a733de787d64891e5a987d74fb4497bd3665dec9b3bc34b9925c62ade5a85f71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a733de787d64891e5a987d74fb4497bd3665dec9b3bc34b9925c62ade5a85f71->enter($__internal_a733de787d64891e5a987d74fb4497bd3665dec9b3bc34b9925c62ade5a85f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_c259fa17d359a3c31b12d1fb43af7139e9da6ac53d0190ee9817348054fbb401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c259fa17d359a3c31b12d1fb43af7139e9da6ac53d0190ee9817348054fbb401->enter($__internal_c259fa17d359a3c31b12d1fb43af7139e9da6ac53d0190ee9817348054fbb401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        ob_start();
        // line 16
        echo "    ";
        if ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 16, $this->getSourceContext()); })())) {
            // line 17
            echo "        <span class=\"label label-success\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
            echo "</span>
    ";
        } else {
            // line 19
            echo "        <span class=\"label label-danger\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
            echo "</span>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c259fa17d359a3c31b12d1fb43af7139e9da6ac53d0190ee9817348054fbb401->leave($__internal_c259fa17d359a3c31b12d1fb43af7139e9da6ac53d0190ee9817348054fbb401_prof);

        
        $__internal_a733de787d64891e5a987d74fb4497bd3665dec9b3bc34b9925c62ade5a85f71->leave($__internal_a733de787d64891e5a987d74fb4497bd3665dec9b3bc34b9925c62ade5a85f71_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  54 => 17,  51 => 16,  49 => 15,  40 => 14,  11 => 12,);
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
{% spaceless %}
    {% if value %}
        <span class=\"label label-success\">{%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}</span>
    {% else %}
        <span class=\"label label-danger\">{%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}</span>
    {% endif %}
{% endspaceless %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_boolean.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_boolean.html.twig");
    }
}
