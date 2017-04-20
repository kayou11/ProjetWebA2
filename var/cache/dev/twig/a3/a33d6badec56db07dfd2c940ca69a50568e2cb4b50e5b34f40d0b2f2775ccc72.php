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
        $__internal_22fc2e80d1f54d816df99dc7889f3ed5024ed9f6a50e73a4c72a87d5e53b97f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22fc2e80d1f54d816df99dc7889f3ed5024ed9f6a50e73a4c72a87d5e53b97f3->enter($__internal_22fc2e80d1f54d816df99dc7889f3ed5024ed9f6a50e73a4c72a87d5e53b97f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Default:index.html.twig"));

        $__internal_05aff37017883f09e31ea8bfffa9b9cc1172e8adfb90c0b498c183e56bfee7f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05aff37017883f09e31ea8bfffa9b9cc1172e8adfb90c0b498c183e56bfee7f8->enter($__internal_05aff37017883f09e31ea8bfffa9b9cc1172e8adfb90c0b498c183e56bfee7f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22fc2e80d1f54d816df99dc7889f3ed5024ed9f6a50e73a4c72a87d5e53b97f3->leave($__internal_22fc2e80d1f54d816df99dc7889f3ed5024ed9f6a50e73a4c72a87d5e53b97f3_prof);

        
        $__internal_05aff37017883f09e31ea8bfffa9b9cc1172e8adfb90c0b498c183e56bfee7f8->leave($__internal_05aff37017883f09e31ea8bfffa9b9cc1172e8adfb90c0b498c183e56bfee7f8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cab0acb3b1202d84c983795341dcdd77026379a0521af775171dc4ba96a676fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cab0acb3b1202d84c983795341dcdd77026379a0521af775171dc4ba96a676fe->enter($__internal_cab0acb3b1202d84c983795341dcdd77026379a0521af775171dc4ba96a676fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_07afafa6a84dd3aaaa2636e1bb738177e67ebfa7ffe80c577eff93d7621caf93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07afafa6a84dd3aaaa2636e1bb738177e67ebfa7ffe80c577eff93d7621caf93->enter($__internal_07afafa6a84dd3aaaa2636e1bb738177e67ebfa7ffe80c577eff93d7621caf93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BDE Cesi Bordeaux";
        
        $__internal_07afafa6a84dd3aaaa2636e1bb738177e67ebfa7ffe80c577eff93d7621caf93->leave($__internal_07afafa6a84dd3aaaa2636e1bb738177e67ebfa7ffe80c577eff93d7621caf93_prof);

        
        $__internal_cab0acb3b1202d84c983795341dcdd77026379a0521af775171dc4ba96a676fe->leave($__internal_cab0acb3b1202d84c983795341dcdd77026379a0521af775171dc4ba96a676fe_prof);

    }

    // line 5
    public function block_style($context, array $blocks = array())
    {
        $__internal_29e5daba83f41b725589391c4fd3268ec76d962ad38921bce4cdc3d518ee0e55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29e5daba83f41b725589391c4fd3268ec76d962ad38921bce4cdc3d518ee0e55->enter($__internal_29e5daba83f41b725589391c4fd3268ec76d962ad38921bce4cdc3d518ee0e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_27e528d29ec0413939d53965caf9afedfd86f665ca1b2eb778084257ffffd9d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27e528d29ec0413939d53965caf9afedfd86f665ca1b2eb778084257ffffd9d1->enter($__internal_27e528d29ec0413939d53965caf9afedfd86f665ca1b2eb778084257ffffd9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"../public/css/pages/index.css\" type=\"text/css\" />
";
        
        $__internal_27e528d29ec0413939d53965caf9afedfd86f665ca1b2eb778084257ffffd9d1->leave($__internal_27e528d29ec0413939d53965caf9afedfd86f665ca1b2eb778084257ffffd9d1_prof);

        
        $__internal_29e5daba83f41b725589391c4fd3268ec76d962ad38921bce4cdc3d518ee0e55->leave($__internal_29e5daba83f41b725589391c4fd3268ec76d962ad38921bce4cdc3d518ee0e55_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_57f54fa3be8a6395d503ca4148a4c8288efa903316a44bab86364ac82ccedef6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57f54fa3be8a6395d503ca4148a4c8288efa903316a44bab86364ac82ccedef6->enter($__internal_57f54fa3be8a6395d503ca4148a4c8288efa903316a44bab86364ac82ccedef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_53ef9c732cc67ebfc3e8c3caa88c3ca4f6ae3277dba43015deab006c86152a93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53ef9c732cc67ebfc3e8c3caa88c3ca4f6ae3277dba43015deab006c86152a93->enter($__internal_53ef9c732cc67ebfc3e8c3caa88c3ca4f6ae3277dba43015deab006c86152a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_53ef9c732cc67ebfc3e8c3caa88c3ca4f6ae3277dba43015deab006c86152a93->leave($__internal_53ef9c732cc67ebfc3e8c3caa88c3ca4f6ae3277dba43015deab006c86152a93_prof);

        
        $__internal_57f54fa3be8a6395d503ca4148a4c8288efa903316a44bab86364ac82ccedef6->leave($__internal_57f54fa3be8a6395d503ca4148a4c8288efa903316a44bab86364ac82ccedef6_prof);

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
