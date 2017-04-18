<?php

/* SiteBundle:Default:index.html.twig */
class __TwigTemplate_a1d23f7b144bef7163d3bd65a3d191ba2e994b36543c87419b530d36637d37a0 extends Twig_Template
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
        $__internal_94fcbe5b699da798714720c0e5db1da67a45ab05b939968b51a67f5c393d8510 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94fcbe5b699da798714720c0e5db1da67a45ab05b939968b51a67f5c393d8510->enter($__internal_94fcbe5b699da798714720c0e5db1da67a45ab05b939968b51a67f5c393d8510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Default:index.html.twig"));

        $__internal_fc4fdff50b83dc4e0163970e186a3bc462108c329eb439fe007a93a0d9c7b939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc4fdff50b83dc4e0163970e186a3bc462108c329eb439fe007a93a0d9c7b939->enter($__internal_fc4fdff50b83dc4e0163970e186a3bc462108c329eb439fe007a93a0d9c7b939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94fcbe5b699da798714720c0e5db1da67a45ab05b939968b51a67f5c393d8510->leave($__internal_94fcbe5b699da798714720c0e5db1da67a45ab05b939968b51a67f5c393d8510_prof);

        
        $__internal_fc4fdff50b83dc4e0163970e186a3bc462108c329eb439fe007a93a0d9c7b939->leave($__internal_fc4fdff50b83dc4e0163970e186a3bc462108c329eb439fe007a93a0d9c7b939_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ffaba4bf8fa00259aaaa8fcd4306a7880e30788f033690d1d57ef9c55dd7aef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ffaba4bf8fa00259aaaa8fcd4306a7880e30788f033690d1d57ef9c55dd7aef->enter($__internal_5ffaba4bf8fa00259aaaa8fcd4306a7880e30788f033690d1d57ef9c55dd7aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b63a8e911548061b9064acae7e127ea4a80711e678a0b1055214db777cdd0b20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b63a8e911548061b9064acae7e127ea4a80711e678a0b1055214db777cdd0b20->enter($__internal_b63a8e911548061b9064acae7e127ea4a80711e678a0b1055214db777cdd0b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BDE Cesi Bordeaux";
        
        $__internal_b63a8e911548061b9064acae7e127ea4a80711e678a0b1055214db777cdd0b20->leave($__internal_b63a8e911548061b9064acae7e127ea4a80711e678a0b1055214db777cdd0b20_prof);

        
        $__internal_5ffaba4bf8fa00259aaaa8fcd4306a7880e30788f033690d1d57ef9c55dd7aef->leave($__internal_5ffaba4bf8fa00259aaaa8fcd4306a7880e30788f033690d1d57ef9c55dd7aef_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_04a887d1dc28f3c862e8d493b8859ef073554e3748f977b5f30a194720b265db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04a887d1dc28f3c862e8d493b8859ef073554e3748f977b5f30a194720b265db->enter($__internal_04a887d1dc28f3c862e8d493b8859ef073554e3748f977b5f30a194720b265db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6928a63538a705f0086310e29af222f37c02056e90ffae6ac1fd7c3e8f2645c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6928a63538a705f0086310e29af222f37c02056e90ffae6ac1fd7c3e8f2645c4->enter($__internal_6928a63538a705f0086310e29af222f37c02056e90ffae6ac1fd7c3e8f2645c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_6928a63538a705f0086310e29af222f37c02056e90ffae6ac1fd7c3e8f2645c4->leave($__internal_6928a63538a705f0086310e29af222f37c02056e90ffae6ac1fd7c3e8f2645c4_prof);

        
        $__internal_04a887d1dc28f3c862e8d493b8859ef073554e3748f977b5f30a194720b265db->leave($__internal_04a887d1dc28f3c862e8d493b8859ef073554e3748f977b5f30a194720b265db_prof);

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
{% endblock %}", "SiteBundle:Default:index.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/SiteBundle/Resources/views/Default/index.html.twig");
    }
}
