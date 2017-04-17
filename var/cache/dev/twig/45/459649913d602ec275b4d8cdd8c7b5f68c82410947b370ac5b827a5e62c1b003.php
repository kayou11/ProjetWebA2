<?php

/* SiteBundle:Default:index.html.twig */
class __TwigTemplate_11a9c43d65eb825fe5169e1d1f81179ebade9e5a89892b9c4a4b5e4e495ebe53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SiteBundle::base.html.twig", "SiteBundle:Default:index.html.twig", 1);
        $this->blocks = array(
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
        $__internal_50e3219d158a71f3976fef8e6960bf74fa4383fb1431ad24b8e538df76fdf9a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50e3219d158a71f3976fef8e6960bf74fa4383fb1431ad24b8e538df76fdf9a6->enter($__internal_50e3219d158a71f3976fef8e6960bf74fa4383fb1431ad24b8e538df76fdf9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Default:index.html.twig"));

        $__internal_22b455556f1fced4d24b26172d2b1d7b506c121411d1f8ad09694aa2ee20b509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22b455556f1fced4d24b26172d2b1d7b506c121411d1f8ad09694aa2ee20b509->enter($__internal_22b455556f1fced4d24b26172d2b1d7b506c121411d1f8ad09694aa2ee20b509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50e3219d158a71f3976fef8e6960bf74fa4383fb1431ad24b8e538df76fdf9a6->leave($__internal_50e3219d158a71f3976fef8e6960bf74fa4383fb1431ad24b8e538df76fdf9a6_prof);

        
        $__internal_22b455556f1fced4d24b26172d2b1d7b506c121411d1f8ad09694aa2ee20b509->leave($__internal_22b455556f1fced4d24b26172d2b1d7b506c121411d1f8ad09694aa2ee20b509_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ba74ea6736cf343eae4b32fe3fe86ebbaa35a0d20c45444e49ec93b0f919228 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ba74ea6736cf343eae4b32fe3fe86ebbaa35a0d20c45444e49ec93b0f919228->enter($__internal_1ba74ea6736cf343eae4b32fe3fe86ebbaa35a0d20c45444e49ec93b0f919228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a776ee1a4aab855359ddee662bf39843f60865e0f5b3a79ea1a8bb81232902ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a776ee1a4aab855359ddee662bf39843f60865e0f5b3a79ea1a8bb81232902ae->enter($__internal_a776ee1a4aab855359ddee662bf39843f60865e0f5b3a79ea1a8bb81232902ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BDE Cesi Bordeaux";
        
        $__internal_a776ee1a4aab855359ddee662bf39843f60865e0f5b3a79ea1a8bb81232902ae->leave($__internal_a776ee1a4aab855359ddee662bf39843f60865e0f5b3a79ea1a8bb81232902ae_prof);

        
        $__internal_1ba74ea6736cf343eae4b32fe3fe86ebbaa35a0d20c45444e49ec93b0f919228->leave($__internal_1ba74ea6736cf343eae4b32fe3fe86ebbaa35a0d20c45444e49ec93b0f919228_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_ac3010e56859fe6dd9773365af678b09b020f763133c8befea072c7d03af4b90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac3010e56859fe6dd9773365af678b09b020f763133c8befea072c7d03af4b90->enter($__internal_ac3010e56859fe6dd9773365af678b09b020f763133c8befea072c7d03af4b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_dfe3795b5f286252c123df93e40f6da47df3a2c341a45c5a8e045da1c3b170df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfe3795b5f286252c123df93e40f6da47df3a2c341a45c5a8e045da1c3b170df->enter($__internal_dfe3795b5f286252c123df93e40f6da47df3a2c341a45c5a8e045da1c3b170df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"container\">
        <div id=\"diaporama\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"3000\" data-pause=\"hover\">
            <ol class=\"carousel-indicators\">
                <li data-target=\"#diaporama\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#diaporama\" data-slide-to=\"1\"></li>
                <li data-target=\"#diaporama\" data-slide-to=\"2\"></li>
            </ol>
            <div class=\"carousel-inner\">
                <!-- classe active pour déterminer la première image du diaporama -->
                <div class=\"item active\">
                    <img src=\"Beautiful-garden-pavilion_1920x1080.jpg\" alt=\"\">
                    <div class=\"carousel-caption\">
                        <h3>Kayak</h3>
                        <p><button class=\"btn btn-primary\">Plus</button></p>
                    </div>
                </div>
                <div class=\"item\">
                    <img src=\"rainbow-garden-nature-colorful-trees-reflection-landscape-rocks-green-lake-1920x1080.jpg\" alt=\"\">
                    <div class=\"carousel-caption\">
                        <h3>Foot</h3>
                        <p><button class=\"btn btn-primary\">Plus</button></p>
                    </div>
                </div>
                <div class=\"item\">
                    <img src=\"full-hd-images-wallpaper-9.jpg\" alt=\"\">
                    <div class=\"carousel-caption\">
                        <h3>Musique</h3>
                        <p><button class=\"btn btn-primary\">Plus</button></p>
                    </div>
                </div>
            </div>
            <!-- boutons suivant précédent pour les images -->
            <a class=\"left carousel-control\" href=\"#diaporama\" data-slide=\"prev\">
                <span class=\"glyphicon glyphicon-chevron-left\"></span>
            </a>
            <a class=\"right carousel-control\" href=\"#diaporama\" data-slide=\"next\">
                <span class=\"glyphicon glyphicon-chevron-right\"></span>
            </a>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <h2>Planning</h2>
                <div class=\"glyphicon glyphicon-calendar\" href=\"#\" role=\"button\" onclick=\"\">
                    <p>La liste des activités est disponible ici !<br></br></p>
                </div>
            </div>
            <div class=\"col-md-4\">
                <h2>Proposez vos activités</h2>
                <div class=\"glyphicon glyphicon-list\" href=\"#\" role=\"button\" onclick=\"\">
                    <p>L'équipe du BDE est à l'écoute de toute proposition que vous ne ferez !</p>
                </div>
            </div>
            <div class=\"col-md-4\">
                <h2>Boutique</h2>
                <div class=\"glyphicon glyphicon-shopping-cart\" href=\"#\" role=\"button\" onclick=\"\">
                    <p>Retrouvez tous nos articles ici !<br></br></p>
                </div>
            </div>
        </div>
        <hr>
    </div>
";
        
        $__internal_dfe3795b5f286252c123df93e40f6da47df3a2c341a45c5a8e045da1c3b170df->leave($__internal_dfe3795b5f286252c123df93e40f6da47df3a2c341a45c5a8e045da1c3b170df_prof);

        
        $__internal_ac3010e56859fe6dd9773365af678b09b020f763133c8befea072c7d03af4b90->leave($__internal_ac3010e56859fe6dd9773365af678b09b020f763133c8befea072c7d03af4b90_prof);

    }

    public function getTemplateName()
    {
        return "SiteBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SiteBundle::base.html.twig\" %}

{% block title  %}BDE Cesi Bordeaux{% endblock %}

{% block content %}
    <div class=\"container\">
        <div id=\"diaporama\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"3000\" data-pause=\"hover\">
            <ol class=\"carousel-indicators\">
                <li data-target=\"#diaporama\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#diaporama\" data-slide-to=\"1\"></li>
                <li data-target=\"#diaporama\" data-slide-to=\"2\"></li>
            </ol>
            <div class=\"carousel-inner\">
                <!-- classe active pour déterminer la première image du diaporama -->
                <div class=\"item active\">
                    <img src=\"Beautiful-garden-pavilion_1920x1080.jpg\" alt=\"\">
                    <div class=\"carousel-caption\">
                        <h3>Kayak</h3>
                        <p><button class=\"btn btn-primary\">Plus</button></p>
                    </div>
                </div>
                <div class=\"item\">
                    <img src=\"rainbow-garden-nature-colorful-trees-reflection-landscape-rocks-green-lake-1920x1080.jpg\" alt=\"\">
                    <div class=\"carousel-caption\">
                        <h3>Foot</h3>
                        <p><button class=\"btn btn-primary\">Plus</button></p>
                    </div>
                </div>
                <div class=\"item\">
                    <img src=\"full-hd-images-wallpaper-9.jpg\" alt=\"\">
                    <div class=\"carousel-caption\">
                        <h3>Musique</h3>
                        <p><button class=\"btn btn-primary\">Plus</button></p>
                    </div>
                </div>
            </div>
            <!-- boutons suivant précédent pour les images -->
            <a class=\"left carousel-control\" href=\"#diaporama\" data-slide=\"prev\">
                <span class=\"glyphicon glyphicon-chevron-left\"></span>
            </a>
            <a class=\"right carousel-control\" href=\"#diaporama\" data-slide=\"next\">
                <span class=\"glyphicon glyphicon-chevron-right\"></span>
            </a>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <h2>Planning</h2>
                <div class=\"glyphicon glyphicon-calendar\" href=\"#\" role=\"button\" onclick=\"\">
                    <p>La liste des activités est disponible ici !<br></br></p>
                </div>
            </div>
            <div class=\"col-md-4\">
                <h2>Proposez vos activités</h2>
                <div class=\"glyphicon glyphicon-list\" href=\"#\" role=\"button\" onclick=\"\">
                    <p>L'équipe du BDE est à l'écoute de toute proposition que vous ne ferez !</p>
                </div>
            </div>
            <div class=\"col-md-4\">
                <h2>Boutique</h2>
                <div class=\"glyphicon glyphicon-shopping-cart\" href=\"#\" role=\"button\" onclick=\"\">
                    <p>Retrouvez tous nos articles ici !<br></br></p>
                </div>
            </div>
        </div>
        <hr>
    </div>
{% endblock %}", "SiteBundle:Default:index.html.twig", "C:\\MAMP\\htdocs\\ProjetWebA2\\src\\SiteBundle/Resources/views/Default/index.html.twig");
    }
}
