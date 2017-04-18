<?php

/* SiteBundle:Pages:galerie.html.twig */
class __TwigTemplate_becc6576d5811aafaf1b1c43c54cabcd5ecc272913bbd58b7eab174365fd2682 extends Twig_Template
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
        $__internal_fdea0bc91bbf13ccc8da6f5a82c1df313b5fbf53daf515893dabd7632b60eb64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdea0bc91bbf13ccc8da6f5a82c1df313b5fbf53daf515893dabd7632b60eb64->enter($__internal_fdea0bc91bbf13ccc8da6f5a82c1df313b5fbf53daf515893dabd7632b60eb64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:galerie.html.twig"));

        $__internal_8bed90a0d05f864baf6766597d160c0c53c852e6c41f0b7b8cab92e4da3cf9ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bed90a0d05f864baf6766597d160c0c53c852e6c41f0b7b8cab92e4da3cf9ef->enter($__internal_8bed90a0d05f864baf6766597d160c0c53c852e6c41f0b7b8cab92e4da3cf9ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:galerie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdea0bc91bbf13ccc8da6f5a82c1df313b5fbf53daf515893dabd7632b60eb64->leave($__internal_fdea0bc91bbf13ccc8da6f5a82c1df313b5fbf53daf515893dabd7632b60eb64_prof);

        
        $__internal_8bed90a0d05f864baf6766597d160c0c53c852e6c41f0b7b8cab92e4da3cf9ef->leave($__internal_8bed90a0d05f864baf6766597d160c0c53c852e6c41f0b7b8cab92e4da3cf9ef_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_c38675165a4345b07203bd1bad9c5f3996f98d23fb49cddb12388af224420d07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c38675165a4345b07203bd1bad9c5f3996f98d23fb49cddb12388af224420d07->enter($__internal_c38675165a4345b07203bd1bad9c5f3996f98d23fb49cddb12388af224420d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_04480b9c854d2561971791fbbda37edf22308ca452b8b07afe142acdd71f83dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04480b9c854d2561971791fbbda37edf22308ca452b8b07afe142acdd71f83dc->enter($__internal_04480b9c854d2561971791fbbda37edf22308ca452b8b07afe142acdd71f83dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"public/css/pages/index.css\" type=\"text/css\" />
";
        
        $__internal_04480b9c854d2561971791fbbda37edf22308ca452b8b07afe142acdd71f83dc->leave($__internal_04480b9c854d2561971791fbbda37edf22308ca452b8b07afe142acdd71f83dc_prof);

        
        $__internal_c38675165a4345b07203bd1bad9c5f3996f98d23fb49cddb12388af224420d07->leave($__internal_c38675165a4345b07203bd1bad9c5f3996f98d23fb49cddb12388af224420d07_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_93d230e846efadf3d85cbe1803ab19a785f74a0099d139a17f85dd8230558141 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93d230e846efadf3d85cbe1803ab19a785f74a0099d139a17f85dd8230558141->enter($__internal_93d230e846efadf3d85cbe1803ab19a785f74a0099d139a17f85dd8230558141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f84e170ec18fa68df63b35bcfdb57a70a2b422c957ada15868ff5741a34c46d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f84e170ec18fa68df63b35bcfdb57a70a2b422c957ada15868ff5741a34c46d7->enter($__internal_f84e170ec18fa68df63b35bcfdb57a70a2b422c957ada15868ff5741a34c46d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Galerie photos";
        
        $__internal_f84e170ec18fa68df63b35bcfdb57a70a2b422c957ada15868ff5741a34c46d7->leave($__internal_f84e170ec18fa68df63b35bcfdb57a70a2b422c957ada15868ff5741a34c46d7_prof);

        
        $__internal_93d230e846efadf3d85cbe1803ab19a785f74a0099d139a17f85dd8230558141->leave($__internal_93d230e846efadf3d85cbe1803ab19a785f74a0099d139a17f85dd8230558141_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_a6a107126a6a5e76e5a2ae28a0bc3af8666ec9ff6abaed33b3dee26e691d96b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6a107126a6a5e76e5a2ae28a0bc3af8666ec9ff6abaed33b3dee26e691d96b3->enter($__internal_a6a107126a6a5e76e5a2ae28a0bc3af8666ec9ff6abaed33b3dee26e691d96b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_540d8c0069646e76a96430be09d23473b85483a5e0ea95851b87fb730a620357 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_540d8c0069646e76a96430be09d23473b85483a5e0ea95851b87fb730a620357->enter($__internal_540d8c0069646e76a96430be09d23473b85483a5e0ea95851b87fb730a620357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
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
        
        $__internal_540d8c0069646e76a96430be09d23473b85483a5e0ea95851b87fb730a620357->leave($__internal_540d8c0069646e76a96430be09d23473b85483a5e0ea95851b87fb730a620357_prof);

        
        $__internal_a6a107126a6a5e76e5a2ae28a0bc3af8666ec9ff6abaed33b3dee26e691d96b3->leave($__internal_a6a107126a6a5e76e5a2ae28a0bc3af8666ec9ff6abaed33b3dee26e691d96b3_prof);

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
        return array (  89 => 10,  80 => 9,  62 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SiteBundle::base.html.twig\" %}

{% block style %}
    <link rel=\"stylesheet\" href=\"public/css/pages/index.css\" type=\"text/css\" />
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
