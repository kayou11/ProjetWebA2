<?php

/* SiteBundle:Default:index.html.twig */
class __TwigTemplate_854f442f072bd2452ee2bdfb7cc707f210e5710e13b23b53555e10c048dd28cd extends Twig_Template
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
        $__internal_44e1962d8ddd031792a800fd103674477dd49fbf0a0f40048e53a94f189ce699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44e1962d8ddd031792a800fd103674477dd49fbf0a0f40048e53a94f189ce699->enter($__internal_44e1962d8ddd031792a800fd103674477dd49fbf0a0f40048e53a94f189ce699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Default:index.html.twig"));

        $__internal_143af33375dc7d5af7f15619334dbd492645426b7e147d1e7254f87ef495d956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_143af33375dc7d5af7f15619334dbd492645426b7e147d1e7254f87ef495d956->enter($__internal_143af33375dc7d5af7f15619334dbd492645426b7e147d1e7254f87ef495d956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44e1962d8ddd031792a800fd103674477dd49fbf0a0f40048e53a94f189ce699->leave($__internal_44e1962d8ddd031792a800fd103674477dd49fbf0a0f40048e53a94f189ce699_prof);

        
        $__internal_143af33375dc7d5af7f15619334dbd492645426b7e147d1e7254f87ef495d956->leave($__internal_143af33375dc7d5af7f15619334dbd492645426b7e147d1e7254f87ef495d956_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_33fc5d5c36c064569582423fd7910f8fc87ea1bd92ca3a00519645beb9181678 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33fc5d5c36c064569582423fd7910f8fc87ea1bd92ca3a00519645beb9181678->enter($__internal_33fc5d5c36c064569582423fd7910f8fc87ea1bd92ca3a00519645beb9181678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0053fbccd48d6650e1f83da05456de09e1327fdb742a07b977ae968ce4eb3f28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0053fbccd48d6650e1f83da05456de09e1327fdb742a07b977ae968ce4eb3f28->enter($__internal_0053fbccd48d6650e1f83da05456de09e1327fdb742a07b977ae968ce4eb3f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BDE Cesi Bordeaux";
        
        $__internal_0053fbccd48d6650e1f83da05456de09e1327fdb742a07b977ae968ce4eb3f28->leave($__internal_0053fbccd48d6650e1f83da05456de09e1327fdb742a07b977ae968ce4eb3f28_prof);

        
        $__internal_33fc5d5c36c064569582423fd7910f8fc87ea1bd92ca3a00519645beb9181678->leave($__internal_33fc5d5c36c064569582423fd7910f8fc87ea1bd92ca3a00519645beb9181678_prof);

    }

    // line 5
    public function block_style($context, array $blocks = array())
    {
        $__internal_7d9455b0280caa35c7c35faf9d055fc7855ac106203870b30f5321e9778903a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d9455b0280caa35c7c35faf9d055fc7855ac106203870b30f5321e9778903a3->enter($__internal_7d9455b0280caa35c7c35faf9d055fc7855ac106203870b30f5321e9778903a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_7716844db127a364cb1a8887030760d8c2316f6adf0080392af292a58ee7c010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7716844db127a364cb1a8887030760d8c2316f6adf0080392af292a58ee7c010->enter($__internal_7716844db127a364cb1a8887030760d8c2316f6adf0080392af292a58ee7c010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"../public/css/pages/index.css\" type=\"text/css\" />
";
        
        $__internal_7716844db127a364cb1a8887030760d8c2316f6adf0080392af292a58ee7c010->leave($__internal_7716844db127a364cb1a8887030760d8c2316f6adf0080392af292a58ee7c010_prof);

        
        $__internal_7d9455b0280caa35c7c35faf9d055fc7855ac106203870b30f5321e9778903a3->leave($__internal_7d9455b0280caa35c7c35faf9d055fc7855ac106203870b30f5321e9778903a3_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_a5187795fcb0ccd67cad7aeab0e3e573205b9db29600b5b6f9e3d88107c48af3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5187795fcb0ccd67cad7aeab0e3e573205b9db29600b5b6f9e3d88107c48af3->enter($__internal_a5187795fcb0ccd67cad7aeab0e3e573205b9db29600b5b6f9e3d88107c48af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_42c09ba25c81dc45e1108dd76f922c8af852fc9580e05fda64a97399a71ceccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42c09ba25c81dc45e1108dd76f922c8af852fc9580e05fda64a97399a71ceccf->enter($__internal_42c09ba25c81dc45e1108dd76f922c8af852fc9580e05fda64a97399a71ceccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                <a  href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_shop_panier");
        echo "\"><span class=\"glyphicon glyphicon-shopping-cart\" role=\"button\" width=\"200\" height=\"200\"></span>
                <p>Retrouvez tous nos articles ici !<br></br></p>
            </div>
        </div>
        <hr>
    </div>
";
        
        $__internal_42c09ba25c81dc45e1108dd76f922c8af852fc9580e05fda64a97399a71ceccf->leave($__internal_42c09ba25c81dc45e1108dd76f922c8af852fc9580e05fda64a97399a71ceccf_prof);

        
        $__internal_a5187795fcb0ccd67cad7aeab0e3e573205b9db29600b5b6f9e3d88107c48af3->leave($__internal_a5187795fcb0ccd67cad7aeab0e3e573205b9db29600b5b6f9e3d88107c48af3_prof);

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
        return array (  152 => 64,  144 => 59,  136 => 54,  89 => 9,  80 => 8,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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
                <a  href=\"{{ path('site_shop_panier') }}\"><span class=\"glyphicon glyphicon-shopping-cart\" role=\"button\" width=\"200\" height=\"200\"></span>
                <p>Retrouvez tous nos articles ici !<br></br></p>
            </div>
        </div>
        <hr>
    </div>
{% endblock %}", "SiteBundle:Default:index.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/SiteBundle/Resources/views/Default/index.html.twig");
    }
}
