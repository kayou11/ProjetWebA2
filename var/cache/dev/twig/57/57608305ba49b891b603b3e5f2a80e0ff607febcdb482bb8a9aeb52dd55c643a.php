<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_6b22664ec4c7ec578b132b37b27d55f5a141e97d198fb863cff1c8f8aca083c9 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11287111d084ec5b8a24dede09850bf858345cea28fd21cfb192c5ea782b5b52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11287111d084ec5b8a24dede09850bf858345cea28fd21cfb192c5ea782b5b52->enter($__internal_11287111d084ec5b8a24dede09850bf858345cea28fd21cfb192c5ea782b5b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $__internal_a7a6dddc587438a665000cc2895aa17061e55fa3a8be6bc3610337eaf7a470c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7a6dddc587438a665000cc2895aa17061e55fa3a8be6bc3610337eaf7a470c6->enter($__internal_a7a6dddc587438a665000cc2895aa17061e55fa3a8be6bc3610337eaf7a470c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11287111d084ec5b8a24dede09850bf858345cea28fd21cfb192c5ea782b5b52->leave($__internal_11287111d084ec5b8a24dede09850bf858345cea28fd21cfb192c5ea782b5b52_prof);

        
        $__internal_a7a6dddc587438a665000cc2895aa17061e55fa3a8be6bc3610337eaf7a470c6->leave($__internal_a7a6dddc587438a665000cc2895aa17061e55fa3a8be6bc3610337eaf7a470c6_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_aa1e29b6f225d9b78cf3807df27b17ff9587d7ddbd7625d257e1a93b505f932c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa1e29b6f225d9b78cf3807df27b17ff9587d7ddbd7625d257e1a93b505f932c->enter($__internal_aa1e29b6f225d9b78cf3807df27b17ff9587d7ddbd7625d257e1a93b505f932c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_1f4e2e21ef11164acd463e53cbcb525ed881b053c7e4f219e64e78a2db56d219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f4e2e21ef11164acd463e53cbcb525ed881b053c7e4f219e64e78a2db56d219->enter($__internal_1f4e2e21ef11164acd463e53cbcb525ed881b053c7e4f219e64e78a2db56d219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 14, $this->getSourceContext()); })()), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_1f4e2e21ef11164acd463e53cbcb525ed881b053c7e4f219e64e78a2db56d219->leave($__internal_1f4e2e21ef11164acd463e53cbcb525ed881b053c7e4f219e64e78a2db56d219_prof);

        
        $__internal_aa1e29b6f225d9b78cf3807df27b17ff9587d7ddbd7625d257e1a93b505f932c->leave($__internal_aa1e29b6f225d9b78cf3807df27b17ff9587d7ddbd7625d257e1a93b505f932c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
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
", "SonataAdminBundle:CRUD:edit_string.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_string.html.twig");
    }
}
