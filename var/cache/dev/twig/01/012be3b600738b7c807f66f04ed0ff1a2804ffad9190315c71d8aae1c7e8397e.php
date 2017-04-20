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
        $__internal_930535e6eb00eaaed1ac290b056ca3972551443c9d1a9bae3110b0cbfece6538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_930535e6eb00eaaed1ac290b056ca3972551443c9d1a9bae3110b0cbfece6538->enter($__internal_930535e6eb00eaaed1ac290b056ca3972551443c9d1a9bae3110b0cbfece6538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:galerie.html.twig"));

        $__internal_4ff6240e6ff33aac8325a01496427a7f94a784f4e094a8cc994baa1e5e31f231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ff6240e6ff33aac8325a01496427a7f94a784f4e094a8cc994baa1e5e31f231->enter($__internal_4ff6240e6ff33aac8325a01496427a7f94a784f4e094a8cc994baa1e5e31f231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:galerie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_930535e6eb00eaaed1ac290b056ca3972551443c9d1a9bae3110b0cbfece6538->leave($__internal_930535e6eb00eaaed1ac290b056ca3972551443c9d1a9bae3110b0cbfece6538_prof);

        
        $__internal_4ff6240e6ff33aac8325a01496427a7f94a784f4e094a8cc994baa1e5e31f231->leave($__internal_4ff6240e6ff33aac8325a01496427a7f94a784f4e094a8cc994baa1e5e31f231_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_b2b588326e6763229a6b0bf1f13f4a92ed8be423c012321a3da7bdc7e0e483e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2b588326e6763229a6b0bf1f13f4a92ed8be423c012321a3da7bdc7e0e483e8->enter($__internal_b2b588326e6763229a6b0bf1f13f4a92ed8be423c012321a3da7bdc7e0e483e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_cba299c920f7efbb04c0b5f0285e875cb04ff7f5fd66b325457c7e02f3cdae9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cba299c920f7efbb04c0b5f0285e875cb04ff7f5fd66b325457c7e02f3cdae9a->enter($__internal_cba299c920f7efbb04c0b5f0285e875cb04ff7f5fd66b325457c7e02f3cdae9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        
        $__internal_cba299c920f7efbb04c0b5f0285e875cb04ff7f5fd66b325457c7e02f3cdae9a->leave($__internal_cba299c920f7efbb04c0b5f0285e875cb04ff7f5fd66b325457c7e02f3cdae9a_prof);

        
        $__internal_b2b588326e6763229a6b0bf1f13f4a92ed8be423c012321a3da7bdc7e0e483e8->leave($__internal_b2b588326e6763229a6b0bf1f13f4a92ed8be423c012321a3da7bdc7e0e483e8_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f1ddef9d4f5936a25bcad8fc57c0626e4c15869a342e6768688e006db4c1b06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f1ddef9d4f5936a25bcad8fc57c0626e4c15869a342e6768688e006db4c1b06->enter($__internal_1f1ddef9d4f5936a25bcad8fc57c0626e4c15869a342e6768688e006db4c1b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_945aad4ce87c5ad9ff6745ddccfef3aaf4104c5b95b156cca152b0bec744e923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_945aad4ce87c5ad9ff6745ddccfef3aaf4104c5b95b156cca152b0bec744e923->enter($__internal_945aad4ce87c5ad9ff6745ddccfef3aaf4104c5b95b156cca152b0bec744e923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Galerie photos";
        
        $__internal_945aad4ce87c5ad9ff6745ddccfef3aaf4104c5b95b156cca152b0bec744e923->leave($__internal_945aad4ce87c5ad9ff6745ddccfef3aaf4104c5b95b156cca152b0bec744e923_prof);

        
        $__internal_1f1ddef9d4f5936a25bcad8fc57c0626e4c15869a342e6768688e006db4c1b06->leave($__internal_1f1ddef9d4f5936a25bcad8fc57c0626e4c15869a342e6768688e006db4c1b06_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_6faf763f4af16840a3475a16734c3cc50f538ea3f0d3ca1b65dac612c83a46f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6faf763f4af16840a3475a16734c3cc50f538ea3f0d3ca1b65dac612c83a46f7->enter($__internal_6faf763f4af16840a3475a16734c3cc50f538ea3f0d3ca1b65dac612c83a46f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_95c0e9598694768b2ca1efac40467fc9c87a23f10cf2b01b9e853aef0d5659a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95c0e9598694768b2ca1efac40467fc9c87a23f10cf2b01b9e853aef0d5659a4->enter($__internal_95c0e9598694768b2ca1efac40467fc9c87a23f10cf2b01b9e853aef0d5659a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_95c0e9598694768b2ca1efac40467fc9c87a23f10cf2b01b9e853aef0d5659a4->leave($__internal_95c0e9598694768b2ca1efac40467fc9c87a23f10cf2b01b9e853aef0d5659a4_prof);

        
        $__internal_6faf763f4af16840a3475a16734c3cc50f538ea3f0d3ca1b65dac612c83a46f7->leave($__internal_6faf763f4af16840a3475a16734c3cc50f538ea3f0d3ca1b65dac612c83a46f7_prof);

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
