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
        $__internal_2d566357931def39bedd92f92a08a96a20f5e1d2685db768a5be508ff8f7ceca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d566357931def39bedd92f92a08a96a20f5e1d2685db768a5be508ff8f7ceca->enter($__internal_2d566357931def39bedd92f92a08a96a20f5e1d2685db768a5be508ff8f7ceca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:galerie.html.twig"));

        $__internal_598f854897d94b3b5a5df176ba50d92510578e055e7f0532114a4fa5bcf610f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_598f854897d94b3b5a5df176ba50d92510578e055e7f0532114a4fa5bcf610f6->enter($__internal_598f854897d94b3b5a5df176ba50d92510578e055e7f0532114a4fa5bcf610f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:galerie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d566357931def39bedd92f92a08a96a20f5e1d2685db768a5be508ff8f7ceca->leave($__internal_2d566357931def39bedd92f92a08a96a20f5e1d2685db768a5be508ff8f7ceca_prof);

        
        $__internal_598f854897d94b3b5a5df176ba50d92510578e055e7f0532114a4fa5bcf610f6->leave($__internal_598f854897d94b3b5a5df176ba50d92510578e055e7f0532114a4fa5bcf610f6_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_675cf6e434f3e085595c3ab615ea70d00ae4003613d31864c3b2b169edeeb07b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_675cf6e434f3e085595c3ab615ea70d00ae4003613d31864c3b2b169edeeb07b->enter($__internal_675cf6e434f3e085595c3ab615ea70d00ae4003613d31864c3b2b169edeeb07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_641dbaaf7e63b1d38ba201a1dd948363b0a9db426957d0943ff4431621f1dc6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_641dbaaf7e63b1d38ba201a1dd948363b0a9db426957d0943ff4431621f1dc6e->enter($__internal_641dbaaf7e63b1d38ba201a1dd948363b0a9db426957d0943ff4431621f1dc6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        
        $__internal_641dbaaf7e63b1d38ba201a1dd948363b0a9db426957d0943ff4431621f1dc6e->leave($__internal_641dbaaf7e63b1d38ba201a1dd948363b0a9db426957d0943ff4431621f1dc6e_prof);

        
        $__internal_675cf6e434f3e085595c3ab615ea70d00ae4003613d31864c3b2b169edeeb07b->leave($__internal_675cf6e434f3e085595c3ab615ea70d00ae4003613d31864c3b2b169edeeb07b_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a26bb8fccb90fb84057bf5e880d5b8b9e94ef60c1a079f9ab5ae11102ed6cbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a26bb8fccb90fb84057bf5e880d5b8b9e94ef60c1a079f9ab5ae11102ed6cbb->enter($__internal_5a26bb8fccb90fb84057bf5e880d5b8b9e94ef60c1a079f9ab5ae11102ed6cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9719e8f2e94fb5d163d87952882b20103060a884dba5dfe459479e5b4ab27607 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9719e8f2e94fb5d163d87952882b20103060a884dba5dfe459479e5b4ab27607->enter($__internal_9719e8f2e94fb5d163d87952882b20103060a884dba5dfe459479e5b4ab27607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Galerie photos";
        
        $__internal_9719e8f2e94fb5d163d87952882b20103060a884dba5dfe459479e5b4ab27607->leave($__internal_9719e8f2e94fb5d163d87952882b20103060a884dba5dfe459479e5b4ab27607_prof);

        
        $__internal_5a26bb8fccb90fb84057bf5e880d5b8b9e94ef60c1a079f9ab5ae11102ed6cbb->leave($__internal_5a26bb8fccb90fb84057bf5e880d5b8b9e94ef60c1a079f9ab5ae11102ed6cbb_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_0b49699d387aad3393c9dd63ae487248c4a6d79fdfb253a9505204bb58ca6b90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b49699d387aad3393c9dd63ae487248c4a6d79fdfb253a9505204bb58ca6b90->enter($__internal_0b49699d387aad3393c9dd63ae487248c4a6d79fdfb253a9505204bb58ca6b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_cabc71db99ed33e8ecf378489bc377d6a6c6f7d1b296c561e2a47bb274291159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cabc71db99ed33e8ecf378489bc377d6a6c6f7d1b296c561e2a47bb274291159->enter($__internal_cabc71db99ed33e8ecf378489bc377d6a6c6f7d1b296c561e2a47bb274291159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_cabc71db99ed33e8ecf378489bc377d6a6c6f7d1b296c561e2a47bb274291159->leave($__internal_cabc71db99ed33e8ecf378489bc377d6a6c6f7d1b296c561e2a47bb274291159_prof);

        
        $__internal_0b49699d387aad3393c9dd63ae487248c4a6d79fdfb253a9505204bb58ca6b90->leave($__internal_0b49699d387aad3393c9dd63ae487248c4a6d79fdfb253a9505204bb58ca6b90_prof);

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
