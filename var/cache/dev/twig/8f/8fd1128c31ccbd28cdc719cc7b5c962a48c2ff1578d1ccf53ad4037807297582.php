<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_392825967cba0e40c3af0aa0118691dd7690d090b395be3871807dce4c63c597 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6786be6538d386098e1521f2dba4d6b75e474ec80239e5614bce190fdad78e64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6786be6538d386098e1521f2dba4d6b75e474ec80239e5614bce190fdad78e64->enter($__internal_6786be6538d386098e1521f2dba4d6b75e474ec80239e5614bce190fdad78e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_234eb895214f7641cf62c562b25d79288cb708c11ce1fc937cbcbb8bedb6db1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_234eb895214f7641cf62c562b25d79288cb708c11ce1fc937cbcbb8bedb6db1e->enter($__internal_234eb895214f7641cf62c562b25d79288cb708c11ce1fc937cbcbb8bedb6db1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6786be6538d386098e1521f2dba4d6b75e474ec80239e5614bce190fdad78e64->leave($__internal_6786be6538d386098e1521f2dba4d6b75e474ec80239e5614bce190fdad78e64_prof);

        
        $__internal_234eb895214f7641cf62c562b25d79288cb708c11ce1fc937cbcbb8bedb6db1e->leave($__internal_234eb895214f7641cf62c562b25d79288cb708c11ce1fc937cbcbb8bedb6db1e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a06f31c96df92ac9af156fc582af852e71397f2ce88bb0aaed9a09edc391620b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a06f31c96df92ac9af156fc582af852e71397f2ce88bb0aaed9a09edc391620b->enter($__internal_a06f31c96df92ac9af156fc582af852e71397f2ce88bb0aaed9a09edc391620b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3f40d3b1c87d0d6a9bebcf2c46d6410d3191266b783c7cadd9f31fca5eb735e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f40d3b1c87d0d6a9bebcf2c46d6410d3191266b783c7cadd9f31fca5eb735e2->enter($__internal_3f40d3b1c87d0d6a9bebcf2c46d6410d3191266b783c7cadd9f31fca5eb735e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_3f40d3b1c87d0d6a9bebcf2c46d6410d3191266b783c7cadd9f31fca5eb735e2->leave($__internal_3f40d3b1c87d0d6a9bebcf2c46d6410d3191266b783c7cadd9f31fca5eb735e2_prof);

        
        $__internal_a06f31c96df92ac9af156fc582af852e71397f2ce88bb0aaed9a09edc391620b->leave($__internal_a06f31c96df92ac9af156fc582af852e71397f2ce88bb0aaed9a09edc391620b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
