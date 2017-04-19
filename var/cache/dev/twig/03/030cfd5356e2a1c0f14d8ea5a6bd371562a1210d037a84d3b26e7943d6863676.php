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
        $__internal_a5334ec52c59477993832f3e3acd9cf4f804393644bbb24f0a592c3e8c2ffa30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5334ec52c59477993832f3e3acd9cf4f804393644bbb24f0a592c3e8c2ffa30->enter($__internal_a5334ec52c59477993832f3e3acd9cf4f804393644bbb24f0a592c3e8c2ffa30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $__internal_dfd64fc84d986eb10d2842dafce792ce0488b68f3d7e1d952b3712c6f402c03a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd64fc84d986eb10d2842dafce792ce0488b68f3d7e1d952b3712c6f402c03a->enter($__internal_dfd64fc84d986eb10d2842dafce792ce0488b68f3d7e1d952b3712c6f402c03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5334ec52c59477993832f3e3acd9cf4f804393644bbb24f0a592c3e8c2ffa30->leave($__internal_a5334ec52c59477993832f3e3acd9cf4f804393644bbb24f0a592c3e8c2ffa30_prof);

        
        $__internal_dfd64fc84d986eb10d2842dafce792ce0488b68f3d7e1d952b3712c6f402c03a->leave($__internal_dfd64fc84d986eb10d2842dafce792ce0488b68f3d7e1d952b3712c6f402c03a_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_0f6f6d0700908232e4a38f10b76bb6cf35325476066bb64ea8fa1475e08c7b8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f6f6d0700908232e4a38f10b76bb6cf35325476066bb64ea8fa1475e08c7b8b->enter($__internal_0f6f6d0700908232e4a38f10b76bb6cf35325476066bb64ea8fa1475e08c7b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_20993df7a32f4dfbc9d78cb5104c268893a7bab8fff27583dc74d7ac4b6a7985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20993df7a32f4dfbc9d78cb5104c268893a7bab8fff27583dc74d7ac4b6a7985->enter($__internal_20993df7a32f4dfbc9d78cb5104c268893a7bab8fff27583dc74d7ac4b6a7985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 4)->display($context);
        
        $__internal_20993df7a32f4dfbc9d78cb5104c268893a7bab8fff27583dc74d7ac4b6a7985->leave($__internal_20993df7a32f4dfbc9d78cb5104c268893a7bab8fff27583dc74d7ac4b6a7985_prof);

        
        $__internal_0f6f6d0700908232e4a38f10b76bb6cf35325476066bb64ea8fa1475e08c7b8b->leave($__internal_0f6f6d0700908232e4a38f10b76bb6cf35325476066bb64ea8fa1475e08c7b8b_prof);

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
