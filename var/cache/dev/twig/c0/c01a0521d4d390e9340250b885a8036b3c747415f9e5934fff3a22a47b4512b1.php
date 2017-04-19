<?php

/* SiteBundle:Pages:galerie.html.twig */
class __TwigTemplate_623a58d4f239a4787630a3205d8358e52c47a188869b88335cf1ace014c97aaf extends Twig_Template
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
        $__internal_417d86c2d02842f61b9a37b8baa37e120259768dd81dc85c696840b67ee8c964 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_417d86c2d02842f61b9a37b8baa37e120259768dd81dc85c696840b67ee8c964->enter($__internal_417d86c2d02842f61b9a37b8baa37e120259768dd81dc85c696840b67ee8c964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:galerie.html.twig"));

        $__internal_25f5385d75177e38d058b067be07309fbad2b609010d23b8b6d41dba4359c0d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25f5385d75177e38d058b067be07309fbad2b609010d23b8b6d41dba4359c0d6->enter($__internal_25f5385d75177e38d058b067be07309fbad2b609010d23b8b6d41dba4359c0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:galerie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_417d86c2d02842f61b9a37b8baa37e120259768dd81dc85c696840b67ee8c964->leave($__internal_417d86c2d02842f61b9a37b8baa37e120259768dd81dc85c696840b67ee8c964_prof);

        
        $__internal_25f5385d75177e38d058b067be07309fbad2b609010d23b8b6d41dba4359c0d6->leave($__internal_25f5385d75177e38d058b067be07309fbad2b609010d23b8b6d41dba4359c0d6_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_d60c49e592b5b005c4316a5494857c00e607fd1c686ee972599cee6f50ef8b2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d60c49e592b5b005c4316a5494857c00e607fd1c686ee972599cee6f50ef8b2e->enter($__internal_d60c49e592b5b005c4316a5494857c00e607fd1c686ee972599cee6f50ef8b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_671402e2bdab6370514c4c30447916b13fa1f359cc578e7ae87fd9477f01b4cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_671402e2bdab6370514c4c30447916b13fa1f359cc578e7ae87fd9477f01b4cc->enter($__internal_671402e2bdab6370514c4c30447916b13fa1f359cc578e7ae87fd9477f01b4cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        
        $__internal_671402e2bdab6370514c4c30447916b13fa1f359cc578e7ae87fd9477f01b4cc->leave($__internal_671402e2bdab6370514c4c30447916b13fa1f359cc578e7ae87fd9477f01b4cc_prof);

        
        $__internal_d60c49e592b5b005c4316a5494857c00e607fd1c686ee972599cee6f50ef8b2e->leave($__internal_d60c49e592b5b005c4316a5494857c00e607fd1c686ee972599cee6f50ef8b2e_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad83a1b55bfc97430c9bfca9c7a254af739d76f3f8a882e8253d66e4dbc6b3e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad83a1b55bfc97430c9bfca9c7a254af739d76f3f8a882e8253d66e4dbc6b3e6->enter($__internal_ad83a1b55bfc97430c9bfca9c7a254af739d76f3f8a882e8253d66e4dbc6b3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d168890bcbe7b7acbd30e1aa5edef8255b33160d95eea8056248f4030fa6b1dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d168890bcbe7b7acbd30e1aa5edef8255b33160d95eea8056248f4030fa6b1dc->enter($__internal_d168890bcbe7b7acbd30e1aa5edef8255b33160d95eea8056248f4030fa6b1dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Galerie photos";
        
        $__internal_d168890bcbe7b7acbd30e1aa5edef8255b33160d95eea8056248f4030fa6b1dc->leave($__internal_d168890bcbe7b7acbd30e1aa5edef8255b33160d95eea8056248f4030fa6b1dc_prof);

        
        $__internal_ad83a1b55bfc97430c9bfca9c7a254af739d76f3f8a882e8253d66e4dbc6b3e6->leave($__internal_ad83a1b55bfc97430c9bfca9c7a254af739d76f3f8a882e8253d66e4dbc6b3e6_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_459b2b6fa406b2be2733a28a65fcf21cde75c4bd5f8f2184ac5879e3d28a392e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_459b2b6fa406b2be2733a28a65fcf21cde75c4bd5f8f2184ac5879e3d28a392e->enter($__internal_459b2b6fa406b2be2733a28a65fcf21cde75c4bd5f8f2184ac5879e3d28a392e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9fd45fb9f47a0c4c7d9f79a4e922b5f565b2d490a4c09a7897adb23d47f950d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fd45fb9f47a0c4c7d9f79a4e922b5f565b2d490a4c09a7897adb23d47f950d8->enter($__internal_9fd45fb9f47a0c4c7d9f79a4e922b5f565b2d490a4c09a7897adb23d47f950d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_9fd45fb9f47a0c4c7d9f79a4e922b5f565b2d490a4c09a7897adb23d47f950d8->leave($__internal_9fd45fb9f47a0c4c7d9f79a4e922b5f565b2d490a4c09a7897adb23d47f950d8_prof);

        
        $__internal_459b2b6fa406b2be2733a28a65fcf21cde75c4bd5f8f2184ac5879e3d28a392e->leave($__internal_459b2b6fa406b2be2733a28a65fcf21cde75c4bd5f8f2184ac5879e3d28a392e_prof);

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
