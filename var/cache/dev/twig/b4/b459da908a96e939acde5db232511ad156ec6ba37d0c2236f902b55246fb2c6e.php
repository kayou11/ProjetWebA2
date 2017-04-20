<?php

/* SonataAdminBundle:CRUD:show_email.html.twig */
class __TwigTemplate_7470f25ee67788b332f6779076ef2dc38918620ac403479a67efdc0395664d58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 1);
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
        $__internal_338ad0f2616ff2e57db5c25e07edbe935a08c23b0f566a41a51da1c1f2347eb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_338ad0f2616ff2e57db5c25e07edbe935a08c23b0f566a41a51da1c1f2347eb4->enter($__internal_338ad0f2616ff2e57db5c25e07edbe935a08c23b0f566a41a51da1c1f2347eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $__internal_202577b1ebe7cd585b85737990bcb8ea60be82271962d9889ac16535dffa4a66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_202577b1ebe7cd585b85737990bcb8ea60be82271962d9889ac16535dffa4a66->enter($__internal_202577b1ebe7cd585b85737990bcb8ea60be82271962d9889ac16535dffa4a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_338ad0f2616ff2e57db5c25e07edbe935a08c23b0f566a41a51da1c1f2347eb4->leave($__internal_338ad0f2616ff2e57db5c25e07edbe935a08c23b0f566a41a51da1c1f2347eb4_prof);

        
        $__internal_202577b1ebe7cd585b85737990bcb8ea60be82271962d9889ac16535dffa4a66->leave($__internal_202577b1ebe7cd585b85737990bcb8ea60be82271962d9889ac16535dffa4a66_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_604307f030c06590e3c6a1edef23bf66e2eb837999a31b0ce6cfef6fa8a3977e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_604307f030c06590e3c6a1edef23bf66e2eb837999a31b0ce6cfef6fa8a3977e->enter($__internal_604307f030c06590e3c6a1edef23bf66e2eb837999a31b0ce6cfef6fa8a3977e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_d182afbba6649022924433625836589e9860978e762c203149fd6f38f7e5849b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d182afbba6649022924433625836589e9860978e762c203149fd6f38f7e5849b->enter($__internal_d182afbba6649022924433625836589e9860978e762c203149fd6f38f7e5849b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 4)->display($context);
        
        $__internal_d182afbba6649022924433625836589e9860978e762c203149fd6f38f7e5849b->leave($__internal_d182afbba6649022924433625836589e9860978e762c203149fd6f38f7e5849b_prof);

        
        $__internal_604307f030c06590e3c6a1edef23bf66e2eb837999a31b0ce6cfef6fa8a3977e->leave($__internal_604307f030c06590e3c6a1edef23bf66e2eb837999a31b0ce6cfef6fa8a3977e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_email.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_email.html.twig");
    }
}
