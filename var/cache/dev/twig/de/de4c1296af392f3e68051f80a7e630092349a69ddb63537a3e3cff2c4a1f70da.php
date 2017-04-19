<?php

/* SonataAdminBundle:CRUD:base_show_compare.html.twig */
class __TwigTemplate_84ddc7a7310c4828076524b848f7e24aa94eaae48f5f1ad8caa3c926a165e1b2 extends Twig_Template
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
        $__internal_2006fcf980dc3634827a7d026b5139c339a3e15427737538bd2b353216470881 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2006fcf980dc3634827a7d026b5139c339a3e15427737538bd2b353216470881->enter($__internal_2006fcf980dc3634827a7d026b5139c339a3e15427737538bd2b353216470881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $__internal_a8a06633c67b290c9c7fde2b418af08d60c5e732916bb7d67f12893ed29725e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8a06633c67b290c9c7fde2b418af08d60c5e732916bb7d67f12893ed29725e8->enter($__internal_a8a06633c67b290c9c7fde2b418af08d60c5e732916bb7d67f12893ed29725e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2006fcf980dc3634827a7d026b5139c339a3e15427737538bd2b353216470881->leave($__internal_2006fcf980dc3634827a7d026b5139c339a3e15427737538bd2b353216470881_prof);

        
        $__internal_a8a06633c67b290c9c7fde2b418af08d60c5e732916bb7d67f12893ed29725e8->leave($__internal_a8a06633c67b290c9c7fde2b418af08d60c5e732916bb7d67f12893ed29725e8_prof);

    }

    // line 14
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_abd32c21c5169177d49c429c4963fe16feab84bb0586e86afc8a8afcb2cc6e64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abd32c21c5169177d49c429c4963fe16feab84bb0586e86afc8a8afcb2cc6e64->enter($__internal_abd32c21c5169177d49c429c4963fe16feab84bb0586e86afc8a8afcb2cc6e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_b6c7f0ccb3d51f0f2ca2e639d51b19292d69085afae05bb0c9b5f0ea20b8a4c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6c7f0ccb3d51f0f2ca2e639d51b19292d69085afae05bb0c9b5f0ea20b8a4c6->enter($__internal_b6c7f0ccb3d51f0f2ca2e639d51b19292d69085afae05bb0c9b5f0ea20b8a4c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

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
        
        $__internal_b6c7f0ccb3d51f0f2ca2e639d51b19292d69085afae05bb0c9b5f0ea20b8a4c6->leave($__internal_b6c7f0ccb3d51f0f2ca2e639d51b19292d69085afae05bb0c9b5f0ea20b8a4c6_prof);

        
        $__internal_abd32c21c5169177d49c429c4963fe16feab84bb0586e86afc8a8afcb2cc6e64->leave($__internal_abd32c21c5169177d49c429c4963fe16feab84bb0586e86afc8a8afcb2cc6e64_prof);

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
