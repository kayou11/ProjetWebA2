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
        $__internal_cb0e155f8d90229bc2003136fb2d76ec047cef7ffabe6ea9739db875fdee433c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb0e155f8d90229bc2003136fb2d76ec047cef7ffabe6ea9739db875fdee433c->enter($__internal_cb0e155f8d90229bc2003136fb2d76ec047cef7ffabe6ea9739db875fdee433c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $__internal_b55c998f3b343b1875fe70c529cb874cf582df1ca72052a3215cac79dfc1ed3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b55c998f3b343b1875fe70c529cb874cf582df1ca72052a3215cac79dfc1ed3f->enter($__internal_b55c998f3b343b1875fe70c529cb874cf582df1ca72052a3215cac79dfc1ed3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb0e155f8d90229bc2003136fb2d76ec047cef7ffabe6ea9739db875fdee433c->leave($__internal_cb0e155f8d90229bc2003136fb2d76ec047cef7ffabe6ea9739db875fdee433c_prof);

        
        $__internal_b55c998f3b343b1875fe70c529cb874cf582df1ca72052a3215cac79dfc1ed3f->leave($__internal_b55c998f3b343b1875fe70c529cb874cf582df1ca72052a3215cac79dfc1ed3f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4d326d0da0739c8b30d04a9037d15629565081e0fb24d6afe65c0c41035b36aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d326d0da0739c8b30d04a9037d15629565081e0fb24d6afe65c0c41035b36aa->enter($__internal_4d326d0da0739c8b30d04a9037d15629565081e0fb24d6afe65c0c41035b36aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_40c5d52aca4a9a08dd6be6cbb85ccbdc9ffe668690beb405928102e42171d5a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40c5d52aca4a9a08dd6be6cbb85ccbdc9ffe668690beb405928102e42171d5a9->enter($__internal_40c5d52aca4a9a08dd6be6cbb85ccbdc9ffe668690beb405928102e42171d5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
        echo " %
";
        
        $__internal_40c5d52aca4a9a08dd6be6cbb85ccbdc9ffe668690beb405928102e42171d5a9->leave($__internal_40c5d52aca4a9a08dd6be6cbb85ccbdc9ffe668690beb405928102e42171d5a9_prof);

        
        $__internal_4d326d0da0739c8b30d04a9037d15629565081e0fb24d6afe65c0c41035b36aa->leave($__internal_4d326d0da0739c8b30d04a9037d15629565081e0fb24d6afe65c0c41035b36aa_prof);

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
