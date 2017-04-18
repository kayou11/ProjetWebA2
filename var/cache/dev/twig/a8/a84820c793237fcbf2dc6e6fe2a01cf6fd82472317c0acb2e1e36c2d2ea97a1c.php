<?php

/* SiteBundle:Pages:galerie.html.twig */
class __TwigTemplate_649194ac613c4eb0c47bc5a8a665d12a224c6b5e3d479d222ffdb9aeba581256 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SiteBundle::base.html.twig", "SiteBundle:Pages:galerie.html.twig", 1);
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
        $__internal_25fe119096e1861242e3c38acf1bb4f59c08f153c0cd91ac193c8642ea4f28aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25fe119096e1861242e3c38acf1bb4f59c08f153c0cd91ac193c8642ea4f28aa->enter($__internal_25fe119096e1861242e3c38acf1bb4f59c08f153c0cd91ac193c8642ea4f28aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:galerie.html.twig"));

        $__internal_62550e7449c6579e64863060fa1af10a356b7888809d4ae169b76eccaa836a7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62550e7449c6579e64863060fa1af10a356b7888809d4ae169b76eccaa836a7e->enter($__internal_62550e7449c6579e64863060fa1af10a356b7888809d4ae169b76eccaa836a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:galerie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25fe119096e1861242e3c38acf1bb4f59c08f153c0cd91ac193c8642ea4f28aa->leave($__internal_25fe119096e1861242e3c38acf1bb4f59c08f153c0cd91ac193c8642ea4f28aa_prof);

        
        $__internal_62550e7449c6579e64863060fa1af10a356b7888809d4ae169b76eccaa836a7e->leave($__internal_62550e7449c6579e64863060fa1af10a356b7888809d4ae169b76eccaa836a7e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_30a9b75638fc68ee842969b5fd1f5523db6739c4a823e011d2ced09ba25b17d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30a9b75638fc68ee842969b5fd1f5523db6739c4a823e011d2ced09ba25b17d9->enter($__internal_30a9b75638fc68ee842969b5fd1f5523db6739c4a823e011d2ced09ba25b17d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ddee898a5b2b0368d49727de6ddbd1eabda59c57f232e8aaec6abac6a1e019d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddee898a5b2b0368d49727de6ddbd1eabda59c57f232e8aaec6abac6a1e019d1->enter($__internal_ddee898a5b2b0368d49727de6ddbd1eabda59c57f232e8aaec6abac6a1e019d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Galerie photos";
        
        $__internal_ddee898a5b2b0368d49727de6ddbd1eabda59c57f232e8aaec6abac6a1e019d1->leave($__internal_ddee898a5b2b0368d49727de6ddbd1eabda59c57f232e8aaec6abac6a1e019d1_prof);

        
        $__internal_30a9b75638fc68ee842969b5fd1f5523db6739c4a823e011d2ced09ba25b17d9->leave($__internal_30a9b75638fc68ee842969b5fd1f5523db6739c4a823e011d2ced09ba25b17d9_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_b6e50ff25d21726f7f05fe9c623fc846a93d88cc71ed5a3567617d5f43a5eba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6e50ff25d21726f7f05fe9c623fc846a93d88cc71ed5a3567617d5f43a5eba9->enter($__internal_b6e50ff25d21726f7f05fe9c623fc846a93d88cc71ed5a3567617d5f43a5eba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_4e14492a9c099cf6eadf00b7cec00fe3306199fe4ada7c65625ee0a8c218dbb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e14492a9c099cf6eadf00b7cec00fe3306199fe4ada7c65625ee0a8c218dbb6->enter($__internal_4e14492a9c099cf6eadf00b7cec00fe3306199fe4ada7c65625ee0a8c218dbb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
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
        
        $__internal_4e14492a9c099cf6eadf00b7cec00fe3306199fe4ada7c65625ee0a8c218dbb6->leave($__internal_4e14492a9c099cf6eadf00b7cec00fe3306199fe4ada7c65625ee0a8c218dbb6_prof);

        
        $__internal_b6e50ff25d21726f7f05fe9c623fc846a93d88cc71ed5a3567617d5f43a5eba9->leave($__internal_b6e50ff25d21726f7f05fe9c623fc846a93d88cc71ed5a3567617d5f43a5eba9_prof);

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
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SiteBundle::base.html.twig\" %}

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


{% endblock %}", "SiteBundle:Pages:galerie.html.twig", "C:\\MAMP\\htdocs\\ProjetWebA2\\src\\SiteBundle/Resources/views/Pages/galerie.html.twig");
    }
}
