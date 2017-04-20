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
        $__internal_234dc45e9c1bb58c4edec320ebf442080d51bc82cfc6e8d4330eb733a4996575 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_234dc45e9c1bb58c4edec320ebf442080d51bc82cfc6e8d4330eb733a4996575->enter($__internal_234dc45e9c1bb58c4edec320ebf442080d51bc82cfc6e8d4330eb733a4996575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $__internal_7d6982c95eadd470e0182929ef8cee5e225e70c447185c17c781166a4d6d0db3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d6982c95eadd470e0182929ef8cee5e225e70c447185c17c781166a4d6d0db3->enter($__internal_7d6982c95eadd470e0182929ef8cee5e225e70c447185c17c781166a4d6d0db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_234dc45e9c1bb58c4edec320ebf442080d51bc82cfc6e8d4330eb733a4996575->leave($__internal_234dc45e9c1bb58c4edec320ebf442080d51bc82cfc6e8d4330eb733a4996575_prof);

        
        $__internal_7d6982c95eadd470e0182929ef8cee5e225e70c447185c17c781166a4d6d0db3->leave($__internal_7d6982c95eadd470e0182929ef8cee5e225e70c447185c17c781166a4d6d0db3_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_45e90eac37f19cf7c744d0e58739ca2ccc819f38c9f1b7eeae2e5639e454164d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45e90eac37f19cf7c744d0e58739ca2ccc819f38c9f1b7eeae2e5639e454164d->enter($__internal_45e90eac37f19cf7c744d0e58739ca2ccc819f38c9f1b7eeae2e5639e454164d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_32b09d6c9fa4b4c09707d970acc2ed41a70f4aebbf3137b6c96e51b4a8540ff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32b09d6c9fa4b4c09707d970acc2ed41a70f4aebbf3137b6c96e51b4a8540ff5->enter($__internal_32b09d6c9fa4b4c09707d970acc2ed41a70f4aebbf3137b6c96e51b4a8540ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 4)->display($context);
        
        $__internal_32b09d6c9fa4b4c09707d970acc2ed41a70f4aebbf3137b6c96e51b4a8540ff5->leave($__internal_32b09d6c9fa4b4c09707d970acc2ed41a70f4aebbf3137b6c96e51b4a8540ff5_prof);

        
        $__internal_45e90eac37f19cf7c744d0e58739ca2ccc819f38c9f1b7eeae2e5639e454164d->leave($__internal_45e90eac37f19cf7c744d0e58739ca2ccc819f38c9f1b7eeae2e5639e454164d_prof);

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
