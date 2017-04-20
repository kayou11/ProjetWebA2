<?php

/* SonataAdminBundle:CRUD:show_email.html.twig */
class __TwigTemplate_b39509d32289c76f3b61ac0511efdfaa979ce0341230a75793c73faa383cefd5 extends Twig_Template
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
        $__internal_5bd3a49e48b14d57056c014529ed7e241bdf4a755af894586d58b9c35a1ff25d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bd3a49e48b14d57056c014529ed7e241bdf4a755af894586d58b9c35a1ff25d->enter($__internal_5bd3a49e48b14d57056c014529ed7e241bdf4a755af894586d58b9c35a1ff25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $__internal_0975ba29897138191d95ab63d55211e68c5a51343226cc338e00fc9ccafdec68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0975ba29897138191d95ab63d55211e68c5a51343226cc338e00fc9ccafdec68->enter($__internal_0975ba29897138191d95ab63d55211e68c5a51343226cc338e00fc9ccafdec68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bd3a49e48b14d57056c014529ed7e241bdf4a755af894586d58b9c35a1ff25d->leave($__internal_5bd3a49e48b14d57056c014529ed7e241bdf4a755af894586d58b9c35a1ff25d_prof);

        
        $__internal_0975ba29897138191d95ab63d55211e68c5a51343226cc338e00fc9ccafdec68->leave($__internal_0975ba29897138191d95ab63d55211e68c5a51343226cc338e00fc9ccafdec68_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_1402f59bf4faa0ff8ded85f8fdcb5c7fcae3e9c649022e1f9f213b1fa088e1ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1402f59bf4faa0ff8ded85f8fdcb5c7fcae3e9c649022e1f9f213b1fa088e1ae->enter($__internal_1402f59bf4faa0ff8ded85f8fdcb5c7fcae3e9c649022e1f9f213b1fa088e1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_3ec579e22d422e335913d3bc9891520a002ba1c9dcf969e8803d8dfbf66d22ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ec579e22d422e335913d3bc9891520a002ba1c9dcf969e8803d8dfbf66d22ef->enter($__internal_3ec579e22d422e335913d3bc9891520a002ba1c9dcf969e8803d8dfbf66d22ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 4)->display($context);
        
        $__internal_3ec579e22d422e335913d3bc9891520a002ba1c9dcf969e8803d8dfbf66d22ef->leave($__internal_3ec579e22d422e335913d3bc9891520a002ba1c9dcf969e8803d8dfbf66d22ef_prof);

        
        $__internal_1402f59bf4faa0ff8ded85f8fdcb5c7fcae3e9c649022e1f9f213b1fa088e1ae->leave($__internal_1402f59bf4faa0ff8ded85f8fdcb5c7fcae3e9c649022e1f9f213b1fa088e1ae_prof);

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
