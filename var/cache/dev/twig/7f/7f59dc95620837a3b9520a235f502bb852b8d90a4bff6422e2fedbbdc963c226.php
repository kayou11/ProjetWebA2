<?php

/* SiteBundle:Pages:archives.html.twig */
class __TwigTemplate_a0805265cc5d4cd53f42a60abb0537aabddf32c7778636404195dc0713fc593a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SiteBundle::base.html.twig", "SiteBundle:Pages:archives.html.twig", 1);
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
        $__internal_37f72819a812f88daed4046c13ae924b110adf08ff9910aaa1841425ca887a8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37f72819a812f88daed4046c13ae924b110adf08ff9910aaa1841425ca887a8c->enter($__internal_37f72819a812f88daed4046c13ae924b110adf08ff9910aaa1841425ca887a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:archives.html.twig"));

        $__internal_4ae05ac1874afbc40fe10da24b25866695fe31deb2b72c05f2a80c6478ead188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ae05ac1874afbc40fe10da24b25866695fe31deb2b72c05f2a80c6478ead188->enter($__internal_4ae05ac1874afbc40fe10da24b25866695fe31deb2b72c05f2a80c6478ead188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:archives.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37f72819a812f88daed4046c13ae924b110adf08ff9910aaa1841425ca887a8c->leave($__internal_37f72819a812f88daed4046c13ae924b110adf08ff9910aaa1841425ca887a8c_prof);

        
        $__internal_4ae05ac1874afbc40fe10da24b25866695fe31deb2b72c05f2a80c6478ead188->leave($__internal_4ae05ac1874afbc40fe10da24b25866695fe31deb2b72c05f2a80c6478ead188_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_54e58fbdfae947ed01a57dc152b74e59bf4e6cc454652fde4a0181153ae95338 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54e58fbdfae947ed01a57dc152b74e59bf4e6cc454652fde4a0181153ae95338->enter($__internal_54e58fbdfae947ed01a57dc152b74e59bf4e6cc454652fde4a0181153ae95338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_d4eb0de749ad97d9aafa65914e00f60720981b8752a1f72c353ce4a149ad82d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4eb0de749ad97d9aafa65914e00f60720981b8752a1f72c353ce4a149ad82d4->enter($__internal_d4eb0de749ad97d9aafa65914e00f60720981b8752a1f72c353ce4a149ad82d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../public/css/pages/listearchive.css\" type=\"text/css\" />
";
        
        $__internal_d4eb0de749ad97d9aafa65914e00f60720981b8752a1f72c353ce4a149ad82d4->leave($__internal_d4eb0de749ad97d9aafa65914e00f60720981b8752a1f72c353ce4a149ad82d4_prof);

        
        $__internal_54e58fbdfae947ed01a57dc152b74e59bf4e6cc454652fde4a0181153ae95338->leave($__internal_54e58fbdfae947ed01a57dc152b74e59bf4e6cc454652fde4a0181153ae95338_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_986af426e0dbd1cdd5e1f7b06cbe78cd3a380adff3c6d467cf3622715ff974fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_986af426e0dbd1cdd5e1f7b06cbe78cd3a380adff3c6d467cf3622715ff974fc->enter($__internal_986af426e0dbd1cdd5e1f7b06cbe78cd3a380adff3c6d467cf3622715ff974fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f8eb073d2099a3ed3102d39ed8ce7d2e29544d4deaeb5ab3e7328807f6243981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8eb073d2099a3ed3102d39ed8ce7d2e29544d4deaeb5ab3e7328807f6243981->enter($__internal_f8eb073d2099a3ed3102d39ed8ce7d2e29544d4deaeb5ab3e7328807f6243981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Archives";
        
        $__internal_f8eb073d2099a3ed3102d39ed8ce7d2e29544d4deaeb5ab3e7328807f6243981->leave($__internal_f8eb073d2099a3ed3102d39ed8ce7d2e29544d4deaeb5ab3e7328807f6243981_prof);

        
        $__internal_986af426e0dbd1cdd5e1f7b06cbe78cd3a380adff3c6d467cf3622715ff974fc->leave($__internal_986af426e0dbd1cdd5e1f7b06cbe78cd3a380adff3c6d467cf3622715ff974fc_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_045ef76e4d007eb0e64c96c18e2d5fa151f76908503f0c8f847f2cacbeeea9b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_045ef76e4d007eb0e64c96c18e2d5fa151f76908503f0c8f847f2cacbeeea9b6->enter($__internal_045ef76e4d007eb0e64c96c18e2d5fa151f76908503f0c8f847f2cacbeeea9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8186018bbf22d4de3f81db37738a9d451323a823c2f41711e47c6407eced529c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8186018bbf22d4de3f81db37738a9d451323a823c2f41711e47c6407eced529c->enter($__internal_8186018bbf22d4de3f81db37738a9d451323a823c2f41711e47c6407eced529c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <div class=\"container\">
        <h2>Archives</h2>
        <div class=\"row\">
            <div class=\"col-lg-12\" id=\"ActivitePhoto\">
                <div class=\"col-md-2\">
                    <img src=\"../public/img/kubb.jpg\" class=\"photosize\">
                </div>
                <div class=\"col-md-3\">
                    <a href=\"\"><h2 class=\"BodyTitle\">Nom Activité</h2></a>
                </div>
                <div class=\"col-md-1\">
                    <p>Lieu : Bordeaux</p>
                    <p>Date : 20/04/2017</p>
                    <p>Nombre d'inscrits : 100<p>
                </div>
            </div>
            <div class=\"col-lg-12\" id=\"ActivitePhoto\">
                <div class=\"col-md-2\">
                    <img src=\"../public/img/kubb.jpg\" class=\"photosize\">
                </div>
                <div class=\"col-md-3\">
                    <a href=\"\"><h2 class=\"BodyTitle\">Nom Activité</h2></a>
                </div>
                <div class=\"col-md-1\">
                    <p>Lieu : Bordeaux</p>
                    <p>Date : </p>
                </div>
            </div>
            <div class=\"col-lg-12\" id=\"ActivitePhoto\">
                <div class=\"col-md-2\">
                    <img src=\"../public/img/kubb.jpg\" class=\"photosize\">
                </div>
                <div class=\"col-md-3\">
                    <a href=\"\"><h2 class=\"BodyTitle\">Nom Activité</h2></a>
                </div>
                <div class=\"col-md-1\">
                    <p>Lieu : Bordeaux</p>
                    <p>Date : </p>
                </div>
            </div>
            <div class=\"col-lg-12\" id=\"ActivitePhoto\">
                <div class=\"col-md-2\">
                    <img src=\"../public/img/kubb.jpg\" class=\"photosize\">
                </div>
                <div class=\"col-md-3\">
                    <a href=\"\"><h2 class=\"BodyTitle\">Nom Activité</h2></a>
                </div>
                <div class=\"col-md-1\">
                    <p>Lieu : Bordeaux</p>
                    <p>Date : </p>
                </div>
            </div>
            <div class=\"col-lg-12\" id=\"ActivitePhoto\">
                <div class=\"col-md-2\">
                    <img src=\"../public/img/kubb.jpg\" class=\"photosize\">
                </div>
                <div class=\"col-md-3\">
                    <a href=\"\"><h2 class=\"BodyTitle\">Nom Activité</h2></a>
                </div>
                <div class=\"col-md-1\">
                    <p>Lieu : Bordeaux</p>
                    <p>Date : </p>
                </div>
            </div>
            <div class=\"col-lg-12\" id=\"ActivitePhoto\">
                <div class=\"col-md-2\">
                    <img src=\"../public/img/kubb.jpg\" class=\"photosize\">
                </div>
                <div class=\"col-md-3\">
                    <a href=\"\"><h2 class=\"BodyTitle\">Nom Activité</h2></a>
                </div>
                <div class=\"col-md-1\">
                    <p>Lieu : Bordeaux</p>
                    <p>Date : </p>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_8186018bbf22d4de3f81db37738a9d451323a823c2f41711e47c6407eced529c->leave($__internal_8186018bbf22d4de3f81db37738a9d451323a823c2f41711e47c6407eced529c_prof);

        
        $__internal_045ef76e4d007eb0e64c96c18e2d5fa151f76908503f0c8f847f2cacbeeea9b6->leave($__internal_045ef76e4d007eb0e64c96c18e2d5fa151f76908503f0c8f847f2cacbeeea9b6_prof);

    }

    public function getTemplateName()
    {
        return "SiteBundle:Pages:archives.html.twig";
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
    <link rel=\"stylesheet\" href=\"../public/css/pages/listearchive.css\" type=\"text/css\" />
{% endblock %}

{% block title  %}Archives{% endblock %}

{% block content %}
    <div class=\"container\">
        <h2>Archives</h2>
        <div class=\"row\">
            <div class=\"col-lg-12\" id=\"ActivitePhoto\">
                <div class=\"col-md-2\">
                    <img src=\"../public/img/kubb.jpg\" class=\"photosize\">
                </div>
                <div class=\"col-md-3\">
                    <a href=\"\"><h2 class=\"BodyTitle\">Nom Activité</h2></a>
                </div>
                <div class=\"col-md-1\">
                    <p>Lieu : Bordeaux</p>
                    <p>Date : 20/04/2017</p>
                    <p>Nombre d'inscrits : 100<p>
                </div>
            </div>
            <div class=\"col-lg-12\" id=\"ActivitePhoto\">
                <div class=\"col-md-2\">
                    <img src=\"../public/img/kubb.jpg\" class=\"photosize\">
                </div>
                <div class=\"col-md-3\">
                    <a href=\"\"><h2 class=\"BodyTitle\">Nom Activité</h2></a>
                </div>
                <div class=\"col-md-1\">
                    <p>Lieu : Bordeaux</p>
                    <p>Date : </p>
                </div>
            </div>
            <div class=\"col-lg-12\" id=\"ActivitePhoto\">
                <div class=\"col-md-2\">
                    <img src=\"../public/img/kubb.jpg\" class=\"photosize\">
                </div>
                <div class=\"col-md-3\">
                    <a href=\"\"><h2 class=\"BodyTitle\">Nom Activité</h2></a>
                </div>
                <div class=\"col-md-1\">
                    <p>Lieu : Bordeaux</p>
                    <p>Date : </p>
                </div>
            </div>
            <div class=\"col-lg-12\" id=\"ActivitePhoto\">
                <div class=\"col-md-2\">
                    <img src=\"../public/img/kubb.jpg\" class=\"photosize\">
                </div>
                <div class=\"col-md-3\">
                    <a href=\"\"><h2 class=\"BodyTitle\">Nom Activité</h2></a>
                </div>
                <div class=\"col-md-1\">
                    <p>Lieu : Bordeaux</p>
                    <p>Date : </p>
                </div>
            </div>
            <div class=\"col-lg-12\" id=\"ActivitePhoto\">
                <div class=\"col-md-2\">
                    <img src=\"../public/img/kubb.jpg\" class=\"photosize\">
                </div>
                <div class=\"col-md-3\">
                    <a href=\"\"><h2 class=\"BodyTitle\">Nom Activité</h2></a>
                </div>
                <div class=\"col-md-1\">
                    <p>Lieu : Bordeaux</p>
                    <p>Date : </p>
                </div>
            </div>
            <div class=\"col-lg-12\" id=\"ActivitePhoto\">
                <div class=\"col-md-2\">
                    <img src=\"../public/img/kubb.jpg\" class=\"photosize\">
                </div>
                <div class=\"col-md-3\">
                    <a href=\"\"><h2 class=\"BodyTitle\">Nom Activité</h2></a>
                </div>
                <div class=\"col-md-1\">
                    <p>Lieu : Bordeaux</p>
                    <p>Date : </p>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "SiteBundle:Pages:archives.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/SiteBundle/Resources/views/Pages/archives.html.twig");
    }
}
