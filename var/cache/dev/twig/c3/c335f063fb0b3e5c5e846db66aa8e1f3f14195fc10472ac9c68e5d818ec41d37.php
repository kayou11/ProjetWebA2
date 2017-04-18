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
        $__internal_e27f614f42eacd2fc0e465d7742b4cdb0097cfa2189f52804991fe2a8d30c197 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e27f614f42eacd2fc0e465d7742b4cdb0097cfa2189f52804991fe2a8d30c197->enter($__internal_e27f614f42eacd2fc0e465d7742b4cdb0097cfa2189f52804991fe2a8d30c197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:galerie.html.twig"));

        $__internal_bdc0796c144bbff42d0343ad341d85c0533a53ee7adc4c5ffd2bda1d8db1e0a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdc0796c144bbff42d0343ad341d85c0533a53ee7adc4c5ffd2bda1d8db1e0a7->enter($__internal_bdc0796c144bbff42d0343ad341d85c0533a53ee7adc4c5ffd2bda1d8db1e0a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:galerie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e27f614f42eacd2fc0e465d7742b4cdb0097cfa2189f52804991fe2a8d30c197->leave($__internal_e27f614f42eacd2fc0e465d7742b4cdb0097cfa2189f52804991fe2a8d30c197_prof);

        
        $__internal_bdc0796c144bbff42d0343ad341d85c0533a53ee7adc4c5ffd2bda1d8db1e0a7->leave($__internal_bdc0796c144bbff42d0343ad341d85c0533a53ee7adc4c5ffd2bda1d8db1e0a7_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_065ef842c093e96ed59a8953f31e41324b6b092136288ee57358c61d40992395 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_065ef842c093e96ed59a8953f31e41324b6b092136288ee57358c61d40992395->enter($__internal_065ef842c093e96ed59a8953f31e41324b6b092136288ee57358c61d40992395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_5ea13b9058b0fa41c3d7267c87f329640e0ce0eda211472b03744b0da71ec611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ea13b9058b0fa41c3d7267c87f329640e0ce0eda211472b03744b0da71ec611->enter($__internal_5ea13b9058b0fa41c3d7267c87f329640e0ce0eda211472b03744b0da71ec611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        
        $__internal_5ea13b9058b0fa41c3d7267c87f329640e0ce0eda211472b03744b0da71ec611->leave($__internal_5ea13b9058b0fa41c3d7267c87f329640e0ce0eda211472b03744b0da71ec611_prof);

        
        $__internal_065ef842c093e96ed59a8953f31e41324b6b092136288ee57358c61d40992395->leave($__internal_065ef842c093e96ed59a8953f31e41324b6b092136288ee57358c61d40992395_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_d918a91163f1c230706c0ad3366f28d875c4c776ca723f5193ee7687622424f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d918a91163f1c230706c0ad3366f28d875c4c776ca723f5193ee7687622424f2->enter($__internal_d918a91163f1c230706c0ad3366f28d875c4c776ca723f5193ee7687622424f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_239a8b06b8774b30addcac78ec8a949bb0472de9994fa9611b2c6d132e06feaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_239a8b06b8774b30addcac78ec8a949bb0472de9994fa9611b2c6d132e06feaf->enter($__internal_239a8b06b8774b30addcac78ec8a949bb0472de9994fa9611b2c6d132e06feaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Galerie photos";
        
        $__internal_239a8b06b8774b30addcac78ec8a949bb0472de9994fa9611b2c6d132e06feaf->leave($__internal_239a8b06b8774b30addcac78ec8a949bb0472de9994fa9611b2c6d132e06feaf_prof);

        
        $__internal_d918a91163f1c230706c0ad3366f28d875c4c776ca723f5193ee7687622424f2->leave($__internal_d918a91163f1c230706c0ad3366f28d875c4c776ca723f5193ee7687622424f2_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_b96fcf12bf05cf9f0545c197b2d532690c66150a53337515b2e11f17e0a54e7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b96fcf12bf05cf9f0545c197b2d532690c66150a53337515b2e11f17e0a54e7a->enter($__internal_b96fcf12bf05cf9f0545c197b2d532690c66150a53337515b2e11f17e0a54e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b37134f7da1e0962e27161408ba91359ae03c6bb1ea1b2d2c6ca04fb18cb6b9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b37134f7da1e0962e27161408ba91359ae03c6bb1ea1b2d2c6ca04fb18cb6b9b->enter($__internal_b37134f7da1e0962e27161408ba91359ae03c6bb1ea1b2d2c6ca04fb18cb6b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_b37134f7da1e0962e27161408ba91359ae03c6bb1ea1b2d2c6ca04fb18cb6b9b->leave($__internal_b37134f7da1e0962e27161408ba91359ae03c6bb1ea1b2d2c6ca04fb18cb6b9b_prof);

        
        $__internal_b96fcf12bf05cf9f0545c197b2d532690c66150a53337515b2e11f17e0a54e7a->leave($__internal_b96fcf12bf05cf9f0545c197b2d532690c66150a53337515b2e11f17e0a54e7a_prof);

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
