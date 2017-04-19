<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_ef34fe1d4b74e8e5cb1b8b00b995e8f8eaa44574f896686d111340095fee22c1 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd7e3c2f96a47e5e8fcead59e1eb0484ade29366021fc238012d3a2bbd46d004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd7e3c2f96a47e5e8fcead59e1eb0484ade29366021fc238012d3a2bbd46d004->enter($__internal_bd7e3c2f96a47e5e8fcead59e1eb0484ade29366021fc238012d3a2bbd46d004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $__internal_444c5e1907c5b7085c4d7b57784bd6faf393a5613cab34b01bbeb2f5d4f87f97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_444c5e1907c5b7085c4d7b57784bd6faf393a5613cab34b01bbeb2f5d4f87f97->enter($__internal_444c5e1907c5b7085c4d7b57784bd6faf393a5613cab34b01bbeb2f5d4f87f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd7e3c2f96a47e5e8fcead59e1eb0484ade29366021fc238012d3a2bbd46d004->leave($__internal_bd7e3c2f96a47e5e8fcead59e1eb0484ade29366021fc238012d3a2bbd46d004_prof);

        
        $__internal_444c5e1907c5b7085c4d7b57784bd6faf393a5613cab34b01bbeb2f5d4f87f97->leave($__internal_444c5e1907c5b7085c4d7b57784bd6faf393a5613cab34b01bbeb2f5d4f87f97_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_57f62ed1b3f105417b2ae20e984e5e37c92f7388d86fb843b22f37f76cfc0288 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57f62ed1b3f105417b2ae20e984e5e37c92f7388d86fb843b22f37f76cfc0288->enter($__internal_57f62ed1b3f105417b2ae20e984e5e37c92f7388d86fb843b22f37f76cfc0288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_0a114588d30c699dc160fbcf5d29f34d16b7d6a3cff97c98c94f8c115cd40657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a114588d30c699dc160fbcf5d29f34d16b7d6a3cff97c98c94f8c115cd40657->enter($__internal_0a114588d30c699dc160fbcf5d29f34d16b7d6a3cff97c98c94f8c115cd40657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 14, $this->getSourceContext()); })()), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_0a114588d30c699dc160fbcf5d29f34d16b7d6a3cff97c98c94f8c115cd40657->leave($__internal_0a114588d30c699dc160fbcf5d29f34d16b7d6a3cff97c98c94f8c115cd40657_prof);

        
        $__internal_57f62ed1b3f105417b2ae20e984e5e37c92f7388d86fb843b22f37f76cfc0288->leave($__internal_57f62ed1b3f105417b2ae20e984e5e37c92f7388d86fb843b22f37f76cfc0288_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 14,  18 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
", "SonataAdminBundle:CRUD:edit_integer.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_integer.html.twig");
    }
}
