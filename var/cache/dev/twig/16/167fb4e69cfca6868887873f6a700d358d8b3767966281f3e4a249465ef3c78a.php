<?php

/* SonataAdminBundle:CRUD:show_time.html.twig */
class __TwigTemplate_e4ffd816d4347c1b0230c51ee9e828df1afe0df31335f9a078a8c890dcb9f72e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_time.html.twig", 12);
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
        $__internal_668a485154662c856b157afad74ece715779f750ca4369c49c7829fe36d350bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_668a485154662c856b157afad74ece715779f750ca4369c49c7829fe36d350bb->enter($__internal_668a485154662c856b157afad74ece715779f750ca4369c49c7829fe36d350bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $__internal_922a494f01db359c6c9bfc74ca1b2b9ac2e6f5050d1b70cdef242fec79ca7818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_922a494f01db359c6c9bfc74ca1b2b9ac2e6f5050d1b70cdef242fec79ca7818->enter($__internal_922a494f01db359c6c9bfc74ca1b2b9ac2e6f5050d1b70cdef242fec79ca7818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_668a485154662c856b157afad74ece715779f750ca4369c49c7829fe36d350bb->leave($__internal_668a485154662c856b157afad74ece715779f750ca4369c49c7829fe36d350bb_prof);

        
        $__internal_922a494f01db359c6c9bfc74ca1b2b9ac2e6f5050d1b70cdef242fec79ca7818->leave($__internal_922a494f01db359c6c9bfc74ca1b2b9ac2e6f5050d1b70cdef242fec79ca7818_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c725ad14685ba87c8ac13999ae84e8164e5e561bb3fd524377bf04fc8bb04356 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c725ad14685ba87c8ac13999ae84e8164e5e561bb3fd524377bf04fc8bb04356->enter($__internal_c725ad14685ba87c8ac13999ae84e8164e5e561bb3fd524377bf04fc8bb04356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_66f37b475a12b15116dd6ce371aedb95d249810e68d41e94cdd18c0a39a99836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66f37b475a12b15116dd6ce371aedb95d249810e68d41e94cdd18c0a39a99836->enter($__internal_66f37b475a12b15116dd6ce371aedb95d249810e68d41e94cdd18c0a39a99836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 18, $this->getSourceContext()); })()), "H:i:s"), "html", null, true);
        }
        
        $__internal_66f37b475a12b15116dd6ce371aedb95d249810e68d41e94cdd18c0a39a99836->leave($__internal_66f37b475a12b15116dd6ce371aedb95d249810e68d41e94cdd18c0a39a99836_prof);

        
        $__internal_c725ad14685ba87c8ac13999ae84e8164e5e561bb3fd524377bf04fc8bb04356->leave($__internal_c725ad14685ba87c8ac13999ae84e8164e5e561bb3fd524377bf04fc8bb04356_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 18,  51 => 16,  49 => 15,  40 => 14,  11 => 12,);
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
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:show_time.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_time.html.twig");
    }
}
