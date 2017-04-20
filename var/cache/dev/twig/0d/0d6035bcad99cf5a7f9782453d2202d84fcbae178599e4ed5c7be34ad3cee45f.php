<?php

/* SiteBundle:Pages:galerie_album.html.twig */
class __TwigTemplate_c693d1bce8777125f7ecf297bb2c521ee2d980df83cea2502b6179b2b36fe0dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SiteBundle::base.html.twig", "SiteBundle:Pages:galerie_album.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SiteBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34e73f385637175479d44642a7ceb64ee41ab21d3d9700ff05d9f0982c07f08b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34e73f385637175479d44642a7ceb64ee41ab21d3d9700ff05d9f0982c07f08b->enter($__internal_34e73f385637175479d44642a7ceb64ee41ab21d3d9700ff05d9f0982c07f08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:galerie_album.html.twig"));

        $__internal_ef63522442a53f35ed0b28ffd5f63b67c69dc02d78a76d8ebce65da96b5deb1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef63522442a53f35ed0b28ffd5f63b67c69dc02d78a76d8ebce65da96b5deb1f->enter($__internal_ef63522442a53f35ed0b28ffd5f63b67c69dc02d78a76d8ebce65da96b5deb1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:galerie_album.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34e73f385637175479d44642a7ceb64ee41ab21d3d9700ff05d9f0982c07f08b->leave($__internal_34e73f385637175479d44642a7ceb64ee41ab21d3d9700ff05d9f0982c07f08b_prof);

        
        $__internal_ef63522442a53f35ed0b28ffd5f63b67c69dc02d78a76d8ebce65da96b5deb1f->leave($__internal_ef63522442a53f35ed0b28ffd5f63b67c69dc02d78a76d8ebce65da96b5deb1f_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_4d6393bcf5a35a40a47c59f7713fcc327393305e5623fcd54548db6f73cafb97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d6393bcf5a35a40a47c59f7713fcc327393305e5623fcd54548db6f73cafb97->enter($__internal_4d6393bcf5a35a40a47c59f7713fcc327393305e5623fcd54548db6f73cafb97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_8f848dc14e774e57ca330812878ff507a5486356034075dc4db1db72257d0e54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f848dc14e774e57ca330812878ff507a5486356034075dc4db1db72257d0e54->enter($__internal_8f848dc14e774e57ca330812878ff507a5486356034075dc4db1db72257d0e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../public/css/pages/galerie_album.css\" type=\"text/css\" />
";
        
        $__internal_8f848dc14e774e57ca330812878ff507a5486356034075dc4db1db72257d0e54->leave($__internal_8f848dc14e774e57ca330812878ff507a5486356034075dc4db1db72257d0e54_prof);

        
        $__internal_4d6393bcf5a35a40a47c59f7713fcc327393305e5623fcd54548db6f73cafb97->leave($__internal_4d6393bcf5a35a40a47c59f7713fcc327393305e5623fcd54548db6f73cafb97_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c96623539117be967568d0cf37b7998d3c274390282b66f1a55b52daa8615bd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c96623539117be967568d0cf37b7998d3c274390282b66f1a55b52daa8615bd9->enter($__internal_c96623539117be967568d0cf37b7998d3c274390282b66f1a55b52daa8615bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e0f2681482dedd0de45611647b24c7bd4e8c02186cf3af88312adf27a57d30b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0f2681482dedd0de45611647b24c7bd4e8c02186cf3af88312adf27a57d30b5->enter($__internal_e0f2681482dedd0de45611647b24c7bd4e8c02186cf3af88312adf27a57d30b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Galerie photos";
        
        $__internal_e0f2681482dedd0de45611647b24c7bd4e8c02186cf3af88312adf27a57d30b5->leave($__internal_e0f2681482dedd0de45611647b24c7bd4e8c02186cf3af88312adf27a57d30b5_prof);

        
        $__internal_c96623539117be967568d0cf37b7998d3c274390282b66f1a55b52daa8615bd9->leave($__internal_c96623539117be967568d0cf37b7998d3c274390282b66f1a55b52daa8615bd9_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_a128b33e52be16e73072bf4f0d3b0470eae6ece97ed015d835eb7adee7cd35e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a128b33e52be16e73072bf4f0d3b0470eae6ece97ed015d835eb7adee7cd35e3->enter($__internal_a128b33e52be16e73072bf4f0d3b0470eae6ece97ed015d835eb7adee7cd35e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_abc2dbc384357af5c4c50aa58529464d4534c50019cadb718827e1901bf014e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abc2dbc384357af5c4c50aa58529464d4534c50019cadb718827e1901bf014e4->enter($__internal_abc2dbc384357af5c4c50aa58529464d4534c50019cadb718827e1901bf014e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "
    <div class=\"navbar-wrapper\">
        <div class=\"container\">
            <div class=\"navbar navbar-inverse\" role=\"navigation\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <a class=\"navbar-brand\" href=\"#\">Galerie album</a>
                        <button class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    </div>
                    <div class=\"navbar-collapse collapse\">
                        <ul class=\"nav navbar-nav text-center\">
                            <li id=\"s1\" class=\"clink\">
                                <a href=\"#\" data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\">Album 1</a>
                            </li>
                            <li id=\"s2\" class=\"clink\"><a href=\"#\" data-target=\"#myCarousel\" data-slide-to=\"1\">Album 2</a></li>
                            <li id=\"s3\" class=\"clink\"><a href=\"#\" data-target=\"#myCarousel\" data-slide-to=\"2\">Album 3</a></li>
                            <li id=\"s4\" class=\"clink\"><a href=\"#\" data-target=\"#myCarousel\" data-slide-to=\"3\">Album 4</a></li>
                            <li id=\"s5\" class=\"clink\"><a href=\"#\" data-target=\"#myCarousel\" data-slide-to=\"4\">Album 5</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id=\"home\" class=\"header\">
        <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"item active\">
                    <div class=\"container\">
                        <div id=\"slide1\" class=\"masonry\">
                            <div class=\"post-box col-lg-4 col-md-4 col-sm-4\">
                                <img class=\"img-responsive img-thumbnail\" src=\"../public/img/kayak.jpg\">
                                <p><button class=\"btn btn-primary\">Enregistrer</button></p>
                                <p><button class=\"btn btn-primary\">Supprimer</button></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_abc2dbc384357af5c4c50aa58529464d4534c50019cadb718827e1901bf014e4->leave($__internal_abc2dbc384357af5c4c50aa58529464d4534c50019cadb718827e1901bf014e4_prof);

        
        $__internal_a128b33e52be16e73072bf4f0d3b0470eae6ece97ed015d835eb7adee7cd35e3->leave($__internal_a128b33e52be16e73072bf4f0d3b0470eae6ece97ed015d835eb7adee7cd35e3_prof);

    }

    // line 57
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_965dacd3567f7a4146fd4aecd5511f7405d2784ea39597300fee65251828b647 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_965dacd3567f7a4146fd4aecd5511f7405d2784ea39597300fee65251828b647->enter($__internal_965dacd3567f7a4146fd4aecd5511f7405d2784ea39597300fee65251828b647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_612b9143e78b52d75de4474dfa93afc2ac61e10c518e6dfa9b7ab50c7d74f683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_612b9143e78b52d75de4474dfa93afc2ac61e10c518e6dfa9b7ab50c7d74f683->enter($__internal_612b9143e78b52d75de4474dfa93afc2ac61e10c518e6dfa9b7ab50c7d74f683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 58
        echo "    <script type=\"text/javascript\" src=\"../public/js/page_album.js\"></script>
";
        
        $__internal_612b9143e78b52d75de4474dfa93afc2ac61e10c518e6dfa9b7ab50c7d74f683->leave($__internal_612b9143e78b52d75de4474dfa93afc2ac61e10c518e6dfa9b7ab50c7d74f683_prof);

        
        $__internal_965dacd3567f7a4146fd4aecd5511f7405d2784ea39597300fee65251828b647->leave($__internal_965dacd3567f7a4146fd4aecd5511f7405d2784ea39597300fee65251828b647_prof);

    }

    public function getTemplateName()
    {
        return "SiteBundle:Pages:galerie_album.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 58,  146 => 57,  90 => 10,  81 => 9,  63 => 7,  52 => 4,  43 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SiteBundle::base.html.twig\" %}

{% block style %}
    <link rel=\"stylesheet\" href=\"../public/css/pages/galerie_album.css\" type=\"text/css\" />
{% endblock %}

{% block title  %}Galerie photos{% endblock %}

{% block content %}

    <div class=\"navbar-wrapper\">
        <div class=\"container\">
            <div class=\"navbar navbar-inverse\" role=\"navigation\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <a class=\"navbar-brand\" href=\"#\">Galerie album</a>
                        <button class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    </div>
                    <div class=\"navbar-collapse collapse\">
                        <ul class=\"nav navbar-nav text-center\">
                            <li id=\"s1\" class=\"clink\">
                                <a href=\"#\" data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\">Album 1</a>
                            </li>
                            <li id=\"s2\" class=\"clink\"><a href=\"#\" data-target=\"#myCarousel\" data-slide-to=\"1\">Album 2</a></li>
                            <li id=\"s3\" class=\"clink\"><a href=\"#\" data-target=\"#myCarousel\" data-slide-to=\"2\">Album 3</a></li>
                            <li id=\"s4\" class=\"clink\"><a href=\"#\" data-target=\"#myCarousel\" data-slide-to=\"3\">Album 4</a></li>
                            <li id=\"s5\" class=\"clink\"><a href=\"#\" data-target=\"#myCarousel\" data-slide-to=\"4\">Album 5</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id=\"home\" class=\"header\">
        <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"item active\">
                    <div class=\"container\">
                        <div id=\"slide1\" class=\"masonry\">
                            <div class=\"post-box col-lg-4 col-md-4 col-sm-4\">
                                <img class=\"img-responsive img-thumbnail\" src=\"../public/img/kayak.jpg\">
                                <p><button class=\"btn btn-primary\">Enregistrer</button></p>
                                <p><button class=\"btn btn-primary\">Supprimer</button></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block scripts %}
    <script type=\"text/javascript\" src=\"../public/js/page_album.js\"></script>
{% endblock %}", "SiteBundle:Pages:galerie_album.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/SiteBundle/Resources/views/Pages/galerie_album.html.twig");
    }
}
