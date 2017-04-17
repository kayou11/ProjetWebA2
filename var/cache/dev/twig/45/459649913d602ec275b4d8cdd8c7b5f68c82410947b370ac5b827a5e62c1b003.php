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
        $__internal_12dd814ca11c790135def72bc6390b8bee9a56a256094905ccf256ff75bc1055 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12dd814ca11c790135def72bc6390b8bee9a56a256094905ccf256ff75bc1055->enter($__internal_12dd814ca11c790135def72bc6390b8bee9a56a256094905ccf256ff75bc1055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Default:index.html.twig"));

        $__internal_dd17e7c95df709a62faafcd98cad9e00b23d6df17006b683ca9bd3c1353770d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd17e7c95df709a62faafcd98cad9e00b23d6df17006b683ca9bd3c1353770d8->enter($__internal_dd17e7c95df709a62faafcd98cad9e00b23d6df17006b683ca9bd3c1353770d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12dd814ca11c790135def72bc6390b8bee9a56a256094905ccf256ff75bc1055->leave($__internal_12dd814ca11c790135def72bc6390b8bee9a56a256094905ccf256ff75bc1055_prof);

        
        $__internal_dd17e7c95df709a62faafcd98cad9e00b23d6df17006b683ca9bd3c1353770d8->leave($__internal_dd17e7c95df709a62faafcd98cad9e00b23d6df17006b683ca9bd3c1353770d8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad05a95d567a91bbdcd0c06cefdfcba9d1ee1fb722d23b54ada9aff96eb9c504 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad05a95d567a91bbdcd0c06cefdfcba9d1ee1fb722d23b54ada9aff96eb9c504->enter($__internal_ad05a95d567a91bbdcd0c06cefdfcba9d1ee1fb722d23b54ada9aff96eb9c504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_575338aa231ef44aa33395dccc034604c70b05e257b253b713b9ec7514434b7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_575338aa231ef44aa33395dccc034604c70b05e257b253b713b9ec7514434b7e->enter($__internal_575338aa231ef44aa33395dccc034604c70b05e257b253b713b9ec7514434b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BDE Cesi Bordeaux";
        
        $__internal_575338aa231ef44aa33395dccc034604c70b05e257b253b713b9ec7514434b7e->leave($__internal_575338aa231ef44aa33395dccc034604c70b05e257b253b713b9ec7514434b7e_prof);

        
        $__internal_ad05a95d567a91bbdcd0c06cefdfcba9d1ee1fb722d23b54ada9aff96eb9c504->leave($__internal_ad05a95d567a91bbdcd0c06cefdfcba9d1ee1fb722d23b54ada9aff96eb9c504_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_6fa4e58a58f9e6045bcb73d9f9bf83667443c54b2eff5d77baa5b57d3dfdce03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fa4e58a58f9e6045bcb73d9f9bf83667443c54b2eff5d77baa5b57d3dfdce03->enter($__internal_6fa4e58a58f9e6045bcb73d9f9bf83667443c54b2eff5d77baa5b57d3dfdce03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_73d3b03219146156da94c1ad5d643b77095dfe2f2ea8470aff15653305639bcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d3b03219146156da94c1ad5d643b77095dfe2f2ea8470aff15653305639bcf->enter($__internal_73d3b03219146156da94c1ad5d643b77095dfe2f2ea8470aff15653305639bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                    <img src=\"../public/img/kayak.jpg\" alt=\"\">
                    <div class=\"carousel-caption\">
                        <h3>Kayak</h3>
                        <p><button class=\"btn btn-primary\">Plus</button></p>
                    </div>
                </div>
                <div class=\"item\">
                    <img src=\"../public/img/foot.jpg\" alt=\"\">
                    <div class=\"carousel-caption\">
                        <h3>Foot</h3>
                        <p><button class=\"btn btn-primary\">Plus</button></p>
                    </div>
                </div>
                <div class=\"item\">
                    <img src=\"../public/img/guitare.jpg\" alt=\"\">
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
                    <span class=\"glyphicon glyphicon-calendar\" role=\"button\" href=\"#\" width=\"200\" height=\"200\" ></span>
                        <p>La liste des activités est disponible ici !<br></br></p>
            </div>
            <div class=\"col-md-4\">
                <h2>Proposez vos activités</h2>
                    <span class=\"glyphicon glyphicon-list\" role=\"button\" href=\"#\" width=\"200\" height=\"200\"></span>
                        <p>L'équipe du BDE est à l'écoute de toute proposition que vous ne ferez !</p>
            </div>
            <div class=\"col-md-4\">
                <h2>Boutique</h2>
                    <span class=\"glyphicon glyphicon-shopping-cart\" role=\"button\" href=\"#\" width=\"200\" height=\"200\"></span>
                        <p>Retrouvez tous nos articles ici !<br></br></p>
            </div>
        </div>
        <hr>
    </div>
";
        
        $__internal_73d3b03219146156da94c1ad5d643b77095dfe2f2ea8470aff15653305639bcf->leave($__internal_73d3b03219146156da94c1ad5d643b77095dfe2f2ea8470aff15653305639bcf_prof);

        
        $__internal_6fa4e58a58f9e6045bcb73d9f9bf83667443c54b2eff5d77baa5b57d3dfdce03->leave($__internal_6fa4e58a58f9e6045bcb73d9f9bf83667443c54b2eff5d77baa5b57d3dfdce03_prof);

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
                    <img src=\"../public/img/kayak.jpg\" alt=\"\">
                    <div class=\"carousel-caption\">
                        <h3>Kayak</h3>
                        <p><button class=\"btn btn-primary\">Plus</button></p>
                    </div>
                </div>
                <div class=\"item\">
                    <img src=\"../public/img/foot.jpg\" alt=\"\">
                    <div class=\"carousel-caption\">
                        <h3>Foot</h3>
                        <p><button class=\"btn btn-primary\">Plus</button></p>
                    </div>
                </div>
                <div class=\"item\">
                    <img src=\"../public/img/guitare.jpg\" alt=\"\">
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
                    <span class=\"glyphicon glyphicon-calendar\" role=\"button\" href=\"#\" width=\"200\" height=\"200\" ></span>
                        <p>La liste des activités est disponible ici !<br></br></p>
            </div>
            <div class=\"col-md-4\">
                <h2>Proposez vos activités</h2>
                    <span class=\"glyphicon glyphicon-list\" role=\"button\" href=\"#\" width=\"200\" height=\"200\"></span>
                        <p>L'équipe du BDE est à l'écoute de toute proposition que vous ne ferez !</p>
            </div>
            <div class=\"col-md-4\">
                <h2>Boutique</h2>
                    <span class=\"glyphicon glyphicon-shopping-cart\" role=\"button\" href=\"#\" width=\"200\" height=\"200\"></span>
                        <p>Retrouvez tous nos articles ici !<br></br></p>
            </div>
        </div>
        <hr>
    </div>
{% endblock %}", "SiteBundle:Default:index.html.twig", "C:\\MAMP\\htdocs\\ProjetWebA2\\src\\SiteBundle/Resources/views/Default/index.html.twig");
    }
}
