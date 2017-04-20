<?php

/* SiteBundle:Default:index.html.twig */
class __TwigTemplate_8f90dab5152b108b07c425e1327538418b050058d2633e43c8f08a28ca15a817 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SiteBundle::base.html.twig", "SiteBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'style' => array($this, 'block_style'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SiteBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3618a18b2bffd335cc332c5f9ed8e348704ed7e28cfc3a7d6ff404c2f420d679 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3618a18b2bffd335cc332c5f9ed8e348704ed7e28cfc3a7d6ff404c2f420d679->enter($__internal_3618a18b2bffd335cc332c5f9ed8e348704ed7e28cfc3a7d6ff404c2f420d679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Default:index.html.twig"));

        $__internal_950b0c1a2a3766161a53f2b4d0fd9826517a1ed7e4e535d62627e5d1942ccacd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_950b0c1a2a3766161a53f2b4d0fd9826517a1ed7e4e535d62627e5d1942ccacd->enter($__internal_950b0c1a2a3766161a53f2b4d0fd9826517a1ed7e4e535d62627e5d1942ccacd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3618a18b2bffd335cc332c5f9ed8e348704ed7e28cfc3a7d6ff404c2f420d679->leave($__internal_3618a18b2bffd335cc332c5f9ed8e348704ed7e28cfc3a7d6ff404c2f420d679_prof);

        
        $__internal_950b0c1a2a3766161a53f2b4d0fd9826517a1ed7e4e535d62627e5d1942ccacd->leave($__internal_950b0c1a2a3766161a53f2b4d0fd9826517a1ed7e4e535d62627e5d1942ccacd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_008be605cf39726a5429d00be877d7b0dd1af7fa6773b91fa951a1c0e82289d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_008be605cf39726a5429d00be877d7b0dd1af7fa6773b91fa951a1c0e82289d3->enter($__internal_008be605cf39726a5429d00be877d7b0dd1af7fa6773b91fa951a1c0e82289d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8b76aa94680e1afe9e9c6066a4a9bf340a4343a81f71e27dcc58d94dbd725f99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b76aa94680e1afe9e9c6066a4a9bf340a4343a81f71e27dcc58d94dbd725f99->enter($__internal_8b76aa94680e1afe9e9c6066a4a9bf340a4343a81f71e27dcc58d94dbd725f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BDE Cesi Bordeaux";
        
        $__internal_8b76aa94680e1afe9e9c6066a4a9bf340a4343a81f71e27dcc58d94dbd725f99->leave($__internal_8b76aa94680e1afe9e9c6066a4a9bf340a4343a81f71e27dcc58d94dbd725f99_prof);

        
        $__internal_008be605cf39726a5429d00be877d7b0dd1af7fa6773b91fa951a1c0e82289d3->leave($__internal_008be605cf39726a5429d00be877d7b0dd1af7fa6773b91fa951a1c0e82289d3_prof);

    }

    // line 5
    public function block_style($context, array $blocks = array())
    {
        $__internal_c5f0f0a96d1b9901b320efdf443616333102c93f154896deb63b6af256e3b191 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5f0f0a96d1b9901b320efdf443616333102c93f154896deb63b6af256e3b191->enter($__internal_c5f0f0a96d1b9901b320efdf443616333102c93f154896deb63b6af256e3b191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_d5621b3befa4d0aca294a889682b29374f9e8d6c2263f39ad14376b2b949c17e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5621b3befa4d0aca294a889682b29374f9e8d6c2263f39ad14376b2b949c17e->enter($__internal_d5621b3befa4d0aca294a889682b29374f9e8d6c2263f39ad14376b2b949c17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"../public/css/pages/index.css\" type=\"text/css\" />
";
        
        $__internal_d5621b3befa4d0aca294a889682b29374f9e8d6c2263f39ad14376b2b949c17e->leave($__internal_d5621b3befa4d0aca294a889682b29374f9e8d6c2263f39ad14376b2b949c17e_prof);

        
        $__internal_c5f0f0a96d1b9901b320efdf443616333102c93f154896deb63b6af256e3b191->leave($__internal_c5f0f0a96d1b9901b320efdf443616333102c93f154896deb63b6af256e3b191_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_72772007ed3e40d6f12670cba4d9e2f2c908c15b1d1ecba40eade6d7f70682ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72772007ed3e40d6f12670cba4d9e2f2c908c15b1d1ecba40eade6d7f70682ca->enter($__internal_72772007ed3e40d6f12670cba4d9e2f2c908c15b1d1ecba40eade6d7f70682ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3fed76cdc7bd1ba15e342cb44e7d59e79996a5b084e7514ff3586a7f3c2880b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fed76cdc7bd1ba15e342cb44e7d59e79996a5b084e7514ff3586a7f3c2880b4->enter($__internal_3fed76cdc7bd1ba15e342cb44e7d59e79996a5b084e7514ff3586a7f3c2880b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
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
                <a  href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_activite_prevues");
        echo "\"><span class=\"glyphicon glyphicon-calendar\" role=\"button\" width=\"200\" height=\"200\"></span></a>
                <p>La liste des activités est disponible ici !<br></br></p>
            </div>
            <div class=\"col-md-4\">
                <h2>Proposez vos activités</h2>
                <a  href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_activite");
        echo "\"><span class=\"glyphicon glyphicon-list\" role=\"button\" width=\"200\" height=\"200\"></span></a>
                <p>L'équipe du BDE est à l'écoute de toute proposition que vous ne ferez !</p>
            </div>
            <div class=\"col-md-4\">
                <h2>Boutique</h2>
                <a  href=\"#\"><span class=\"glyphicon glyphicon-shopping-cart\" role=\"button\" width=\"200\" height=\"200\"></span>
                <p>Retrouvez tous nos articles ici !<br></br></p>
            </div>
        </div>
        <hr>
    </div>
";
        
        $__internal_3fed76cdc7bd1ba15e342cb44e7d59e79996a5b084e7514ff3586a7f3c2880b4->leave($__internal_3fed76cdc7bd1ba15e342cb44e7d59e79996a5b084e7514ff3586a7f3c2880b4_prof);

        
        $__internal_72772007ed3e40d6f12670cba4d9e2f2c908c15b1d1ecba40eade6d7f70682ca->leave($__internal_72772007ed3e40d6f12670cba4d9e2f2c908c15b1d1ecba40eade6d7f70682ca_prof);

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
        return array (  144 => 59,  136 => 54,  89 => 9,  80 => 8,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SiteBundle::base.html.twig\" %}

{% block title  %}BDE Cesi Bordeaux{% endblock %}

{% block style %}
    <link rel=\"stylesheet\" href=\"../public/css/pages/index.css\" type=\"text/css\" />
{% endblock %}
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
                <a  href=\"{{ path('site_activite_prevues') }}\"><span class=\"glyphicon glyphicon-calendar\" role=\"button\" width=\"200\" height=\"200\"></span></a>
                <p>La liste des activités est disponible ici !<br></br></p>
            </div>
            <div class=\"col-md-4\">
                <h2>Proposez vos activités</h2>
                <a  href=\"{{ path('site_activite') }}\"><span class=\"glyphicon glyphicon-list\" role=\"button\" width=\"200\" height=\"200\"></span></a>
                <p>L'équipe du BDE est à l'écoute de toute proposition que vous ne ferez !</p>
            </div>
            <div class=\"col-md-4\">
                <h2>Boutique</h2>
                <a  href=\"#\"><span class=\"glyphicon glyphicon-shopping-cart\" role=\"button\" width=\"200\" height=\"200\"></span>
                <p>Retrouvez tous nos articles ici !<br></br></p>
            </div>
        </div>
        <hr>
    </div>
{% endblock %}", "SiteBundle:Default:index.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/SiteBundle/Resources/views/Default/index.html.twig");
    }
}
