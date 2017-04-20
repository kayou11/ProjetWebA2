<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_e292e68f1754e2f2bf4edd1c6d2477d6953ad5faaeb15c10d8027fa218b9303d extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f6507075df7d38f9c74e3b173048cc671205d69a9f55378cc8ecbbbc0a87a02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f6507075df7d38f9c74e3b173048cc671205d69a9f55378cc8ecbbbc0a87a02->enter($__internal_0f6507075df7d38f9c74e3b173048cc671205d69a9f55378cc8ecbbbc0a87a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $__internal_6c4379c6fdd1ea5ac3cbd4c7ef5be5874dba619dcd8b532fb00210593947eeb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c4379c6fdd1ea5ac3cbd4c7ef5be5874dba619dcd8b532fb00210593947eeb6->enter($__internal_6c4379c6fdd1ea5ac3cbd4c7ef5be5874dba619dcd8b532fb00210593947eeb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f6507075df7d38f9c74e3b173048cc671205d69a9f55378cc8ecbbbc0a87a02->leave($__internal_0f6507075df7d38f9c74e3b173048cc671205d69a9f55378cc8ecbbbc0a87a02_prof);

        
        $__internal_6c4379c6fdd1ea5ac3cbd4c7ef5be5874dba619dcd8b532fb00210593947eeb6->leave($__internal_6c4379c6fdd1ea5ac3cbd4c7ef5be5874dba619dcd8b532fb00210593947eeb6_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b19317361228f94e5ae89cc5b7f1fe556f83454f113671beeff8deeb4eb2884b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b19317361228f94e5ae89cc5b7f1fe556f83454f113671beeff8deeb4eb2884b->enter($__internal_b19317361228f94e5ae89cc5b7f1fe556f83454f113671beeff8deeb4eb2884b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_6ce219d2a941585c10a0550c72855d3ce15f390e5d276f801f7c051f525887ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ce219d2a941585c10a0550c72855d3ce15f390e5d276f801f7c051f525887ac->enter($__internal_6ce219d2a941585c10a0550c72855d3ce15f390e5d276f801f7c051f525887ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 16, $this->getSourceContext()); })()), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_6ce219d2a941585c10a0550c72855d3ce15f390e5d276f801f7c051f525887ac->leave($__internal_6ce219d2a941585c10a0550c72855d3ce15f390e5d276f801f7c051f525887ac_prof);

        
        $__internal_b19317361228f94e5ae89cc5b7f1fe556f83454f113671beeff8deeb4eb2884b->leave($__internal_b19317361228f94e5ae89cc5b7f1fe556f83454f113671beeff8deeb4eb2884b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
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

{% extends base_template %}

{% block field %}
    <span class=\"edit\">
        {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}
    </span>
{% endblock %}
", "SonataAdminBundle:CRUD:edit_array.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_array.html.twig");
    }
}
