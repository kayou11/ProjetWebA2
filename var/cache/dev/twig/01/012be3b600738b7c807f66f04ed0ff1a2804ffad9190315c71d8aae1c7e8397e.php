<?php

/* SiteBundle:Pages:galerie.html.twig */
class __TwigTemplate_71a5e207c79dab6197f8284ea8ce3cf2a63c0af3e3b6335c5068a5b293b08ce1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SiteBundle::base.html.twig", "SiteBundle:Pages:galerie.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SiteBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f38cf48c474e78af6e95d29c7033898bc3172240bc42e6a2dc39dd0e19d0ac6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f38cf48c474e78af6e95d29c7033898bc3172240bc42e6a2dc39dd0e19d0ac6->enter($__internal_5f38cf48c474e78af6e95d29c7033898bc3172240bc42e6a2dc39dd0e19d0ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:galerie.html.twig"));

        $__internal_e5bb183fbb76be339dc7eaeabf5cf9a04baffbe95da321f39d5cf42aeaf8cba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5bb183fbb76be339dc7eaeabf5cf9a04baffbe95da321f39d5cf42aeaf8cba3->enter($__internal_e5bb183fbb76be339dc7eaeabf5cf9a04baffbe95da321f39d5cf42aeaf8cba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:galerie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f38cf48c474e78af6e95d29c7033898bc3172240bc42e6a2dc39dd0e19d0ac6->leave($__internal_5f38cf48c474e78af6e95d29c7033898bc3172240bc42e6a2dc39dd0e19d0ac6_prof);

        
        $__internal_e5bb183fbb76be339dc7eaeabf5cf9a04baffbe95da321f39d5cf42aeaf8cba3->leave($__internal_e5bb183fbb76be339dc7eaeabf5cf9a04baffbe95da321f39d5cf42aeaf8cba3_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_86664daaaa4fcdb80aae1e8cc3f8cad7489f8c6b26619f4552dadf9fb07fde04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86664daaaa4fcdb80aae1e8cc3f8cad7489f8c6b26619f4552dadf9fb07fde04->enter($__internal_86664daaaa4fcdb80aae1e8cc3f8cad7489f8c6b26619f4552dadf9fb07fde04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_fb938f2bb4cb1c81a17f0bc89809c744472596ac3af11ac7855943202f572cb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb938f2bb4cb1c81a17f0bc89809c744472596ac3af11ac7855943202f572cb8->enter($__internal_fb938f2bb4cb1c81a17f0bc89809c744472596ac3af11ac7855943202f572cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        
        $__internal_fb938f2bb4cb1c81a17f0bc89809c744472596ac3af11ac7855943202f572cb8->leave($__internal_fb938f2bb4cb1c81a17f0bc89809c744472596ac3af11ac7855943202f572cb8_prof);

        
        $__internal_86664daaaa4fcdb80aae1e8cc3f8cad7489f8c6b26619f4552dadf9fb07fde04->leave($__internal_86664daaaa4fcdb80aae1e8cc3f8cad7489f8c6b26619f4552dadf9fb07fde04_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_995d33d65089b1ccbf22640e694684c871a7a1228d91cde6ea284b1e93302d70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_995d33d65089b1ccbf22640e694684c871a7a1228d91cde6ea284b1e93302d70->enter($__internal_995d33d65089b1ccbf22640e694684c871a7a1228d91cde6ea284b1e93302d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f1c72c588a5bdc397fcd2a2e1e042243b410a46497428eb69f081947d31474aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c72c588a5bdc397fcd2a2e1e042243b410a46497428eb69f081947d31474aa->enter($__internal_f1c72c588a5bdc397fcd2a2e1e042243b410a46497428eb69f081947d31474aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Galerie photos";
        
        $__internal_f1c72c588a5bdc397fcd2a2e1e042243b410a46497428eb69f081947d31474aa->leave($__internal_f1c72c588a5bdc397fcd2a2e1e042243b410a46497428eb69f081947d31474aa_prof);

        
        $__internal_995d33d65089b1ccbf22640e694684c871a7a1228d91cde6ea284b1e93302d70->leave($__internal_995d33d65089b1ccbf22640e694684c871a7a1228d91cde6ea284b1e93302d70_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_784c2c65c70278ac94bd826b8769013386b5d375eba80d6cd44b5158207fc80a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_784c2c65c70278ac94bd826b8769013386b5d375eba80d6cd44b5158207fc80a->enter($__internal_784c2c65c70278ac94bd826b8769013386b5d375eba80d6cd44b5158207fc80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_cef1e607901c3293dc88388d096bb679cb3358948ba68bc4112c1731dd8fd8e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cef1e607901c3293dc88388d096bb679cb3358948ba68bc4112c1731dd8fd8e9->enter($__internal_cef1e607901c3293dc88388d096bb679cb3358948ba68bc4112c1731dd8fd8e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "
    <h1 align=\"center\">Galerie photos</h1>

    <div class=\"row\">
        <div class=\"col-xs-6 col-sm-3\">
            <a href=\"../public/img/autumn-thumb.jpg\" class=\"thumbnail\">
                <img src=\"../public/img/autumn-thumb.jpg\" alt=\"Small picture : Autumn\" />
            </a>
            <button class=\"btn btn-default\" style=\"text-align: right;\">Supprimer</button>
            <button class=\"btn btn-default\" style=\"text-align: left;\">Selectionner</button>
        </div>

        <div class=\"col-xs-6 col-sm-3\">
            <a href=\"../public/img/landscape.jpg\" class=\"thumbnail\">
                <img src=\"../public/img/landscape-thumb.jpg\" alt=\"Landscape\" />

            </a>
            <button class=\"btn btn-default\">Supprimer</button>
            <button class=\"btn btn-default\">Selectionner</button>
        </div>

        <div class=\"col-xs-6 col-sm-3\">
            <a href=\"../public/img/london.jpg\" class=\"thumbnail\" >
                <img src=\"../public/img/london-thumb.jpg\" alt=\"London\" />
            </a>
            <button class=\"btn btn-default\">Supprimer</button>
            <button class=\"btn btn-default\">Selectionner</button>
        </div>

        <div class=\"col-xs-6 col-sm-3\">
            <a href=\"../public/img/sunrise.jpg\" class=\"thumbnail\">
                <img src=\"../public/img/sunrise-thumb.jpg\" alt=\"Sunrise\" />
            </a>
            <button class=\"btn btn-default\">Supprimer</button>
            <button class=\"btn btn-default\">Selectionner</button>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-6 col-sm-3\">
            <a href=\"../public/img/autumn-thumb.jpg\" class=\"thumbnail\">
                <img src=\"../public/img/autumn-thumb.jpg\" alt=\"Small picture : Autumn\" />
            </a>
            <button class=\"btn btn-default\">Supprimer</button>
            <button class=\"btn btn-default\">Selectionner</button>
        </div>

        <div class=\"col-xs-6 col-sm-3\">
            <a href=\"../public/img/landscape.jpg\" class=\"thumbnail\">
                <img src=\"../public/img/landscape-thumb.jpg\" alt=\"Landscape\" />
            </a>
            <button class=\"btn btn-default\">Supprimer</button>
            <button class=\"btn btn-default\">Selectionner</button>
        </div>

        <div class=\"col-xs-6 col-sm-3\">
            <a href=\"../public/img/london.jpg\" class=\"thumbnail\" >
                <img src=\"../public/img/london-thumb.jpg\" alt=\"London\" />
            </a>
            <button class=\"btn btn-default\">Supprimer</button>
            <button class=\"btn btn-default\">Selectionner</button>
        </div>

        <div class=\"col-xs-6 col-sm-3\">
            <a href=\"../public/img/sunrise.jpg\" class=\"thumbnail\">
                <img src=\"../public/img/sunrise-thumb.jpg\" alt=\"Sunrise\" />
            </a>
            <button class=\"btn btn-default\">Supprimer</button>
            <button class=\"btn btn-default\">Selectionner</button>
        </div>
    </div>


";
        
        $__internal_cef1e607901c3293dc88388d096bb679cb3358948ba68bc4112c1731dd8fd8e9->leave($__internal_cef1e607901c3293dc88388d096bb679cb3358948ba68bc4112c1731dd8fd8e9_prof);

        
        $__internal_784c2c65c70278ac94bd826b8769013386b5d375eba80d6cd44b5158207fc80a->leave($__internal_784c2c65c70278ac94bd826b8769013386b5d375eba80d6cd44b5158207fc80a_prof);

    }

    public function getTemplateName()
    {
        return "SiteBundle:Pages:galerie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 9,  77 => 8,  59 => 6,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SiteBundle::base.html.twig\" %}

{% block style %}
{% endblock %}

{% block title  %}Galerie photos{% endblock %}

{% block content %}

    <h1 align=\"center\">Galerie photos</h1>

    <div class=\"row\">
        <div class=\"col-xs-6 col-sm-3\">
            <a href=\"../public/img/autumn-thumb.jpg\" class=\"thumbnail\">
                <img src=\"../public/img/autumn-thumb.jpg\" alt=\"Small picture : Autumn\" />
            </a>
            <button class=\"btn btn-default\" style=\"text-align: right;\">Supprimer</button>
            <button class=\"btn btn-default\" style=\"text-align: left;\">Selectionner</button>
        </div>

        <div class=\"col-xs-6 col-sm-3\">
            <a href=\"../public/img/landscape.jpg\" class=\"thumbnail\">
                <img src=\"../public/img/landscape-thumb.jpg\" alt=\"Landscape\" />

            </a>
            <button class=\"btn btn-default\">Supprimer</button>
            <button class=\"btn btn-default\">Selectionner</button>
        </div>

        <div class=\"col-xs-6 col-sm-3\">
            <a href=\"../public/img/london.jpg\" class=\"thumbnail\" >
                <img src=\"../public/img/london-thumb.jpg\" alt=\"London\" />
            </a>
            <button class=\"btn btn-default\">Supprimer</button>
            <button class=\"btn btn-default\">Selectionner</button>
        </div>

        <div class=\"col-xs-6 col-sm-3\">
            <a href=\"../public/img/sunrise.jpg\" class=\"thumbnail\">
                <img src=\"../public/img/sunrise-thumb.jpg\" alt=\"Sunrise\" />
            </a>
            <button class=\"btn btn-default\">Supprimer</button>
            <button class=\"btn btn-default\">Selectionner</button>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-6 col-sm-3\">
            <a href=\"../public/img/autumn-thumb.jpg\" class=\"thumbnail\">
                <img src=\"../public/img/autumn-thumb.jpg\" alt=\"Small picture : Autumn\" />
            </a>
            <button class=\"btn btn-default\">Supprimer</button>
            <button class=\"btn btn-default\">Selectionner</button>
        </div>

        <div class=\"col-xs-6 col-sm-3\">
            <a href=\"../public/img/landscape.jpg\" class=\"thumbnail\">
                <img src=\"../public/img/landscape-thumb.jpg\" alt=\"Landscape\" />
            </a>
            <button class=\"btn btn-default\">Supprimer</button>
            <button class=\"btn btn-default\">Selectionner</button>
        </div>

        <div class=\"col-xs-6 col-sm-3\">
            <a href=\"../public/img/london.jpg\" class=\"thumbnail\" >
                <img src=\"../public/img/london-thumb.jpg\" alt=\"London\" />
            </a>
            <button class=\"btn btn-default\">Supprimer</button>
            <button class=\"btn btn-default\">Selectionner</button>
        </div>

        <div class=\"col-xs-6 col-sm-3\">
            <a href=\"../public/img/sunrise.jpg\" class=\"thumbnail\">
                <img src=\"../public/img/sunrise-thumb.jpg\" alt=\"Sunrise\" />
            </a>
            <button class=\"btn btn-default\">Supprimer</button>
            <button class=\"btn btn-default\">Selectionner</button>
        </div>
    </div>


{% endblock %}", "SiteBundle:Pages:galerie.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/SiteBundle/Resources/views/Pages/galerie.html.twig");
    }
}
