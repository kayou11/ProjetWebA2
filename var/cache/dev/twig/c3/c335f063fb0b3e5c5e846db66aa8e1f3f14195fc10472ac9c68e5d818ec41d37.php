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
        $__internal_4404e03ca1f532b1f4ce3eda96f7d96f39e1fbe79ecbb17147bc82b22406a6eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4404e03ca1f532b1f4ce3eda96f7d96f39e1fbe79ecbb17147bc82b22406a6eb->enter($__internal_4404e03ca1f532b1f4ce3eda96f7d96f39e1fbe79ecbb17147bc82b22406a6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:galerie.html.twig"));

        $__internal_6cbb67ddfbe3cf7ef0c8ae29573c11233d153fec8dff23545931d53e9680d4d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cbb67ddfbe3cf7ef0c8ae29573c11233d153fec8dff23545931d53e9680d4d8->enter($__internal_6cbb67ddfbe3cf7ef0c8ae29573c11233d153fec8dff23545931d53e9680d4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:galerie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4404e03ca1f532b1f4ce3eda96f7d96f39e1fbe79ecbb17147bc82b22406a6eb->leave($__internal_4404e03ca1f532b1f4ce3eda96f7d96f39e1fbe79ecbb17147bc82b22406a6eb_prof);

        
        $__internal_6cbb67ddfbe3cf7ef0c8ae29573c11233d153fec8dff23545931d53e9680d4d8->leave($__internal_6cbb67ddfbe3cf7ef0c8ae29573c11233d153fec8dff23545931d53e9680d4d8_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_0b5dc1303187e81121a978b169fdb78e057757909e3363b689a27d3edb7e5893 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b5dc1303187e81121a978b169fdb78e057757909e3363b689a27d3edb7e5893->enter($__internal_0b5dc1303187e81121a978b169fdb78e057757909e3363b689a27d3edb7e5893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_47fb7daeafa37ec0ab50fe29aa4d89c3c9872f1f8eb3ebb33f698f9889bfcec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47fb7daeafa37ec0ab50fe29aa4d89c3c9872f1f8eb3ebb33f698f9889bfcec4->enter($__internal_47fb7daeafa37ec0ab50fe29aa4d89c3c9872f1f8eb3ebb33f698f9889bfcec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"public/css/pages/index.css\" type=\"text/css\" />
";
        
        $__internal_47fb7daeafa37ec0ab50fe29aa4d89c3c9872f1f8eb3ebb33f698f9889bfcec4->leave($__internal_47fb7daeafa37ec0ab50fe29aa4d89c3c9872f1f8eb3ebb33f698f9889bfcec4_prof);

        
        $__internal_0b5dc1303187e81121a978b169fdb78e057757909e3363b689a27d3edb7e5893->leave($__internal_0b5dc1303187e81121a978b169fdb78e057757909e3363b689a27d3edb7e5893_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_008f9e2e2d46b556b5100b61378e276ca3cb444fabfbbc18f7359a8ddba1968d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_008f9e2e2d46b556b5100b61378e276ca3cb444fabfbbc18f7359a8ddba1968d->enter($__internal_008f9e2e2d46b556b5100b61378e276ca3cb444fabfbbc18f7359a8ddba1968d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9d9e3dc429638dc63438c9be6f7bc1e81ec84a3254c88723e30610dc09c33a3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d9e3dc429638dc63438c9be6f7bc1e81ec84a3254c88723e30610dc09c33a3e->enter($__internal_9d9e3dc429638dc63438c9be6f7bc1e81ec84a3254c88723e30610dc09c33a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Galerie photos";
        
        $__internal_9d9e3dc429638dc63438c9be6f7bc1e81ec84a3254c88723e30610dc09c33a3e->leave($__internal_9d9e3dc429638dc63438c9be6f7bc1e81ec84a3254c88723e30610dc09c33a3e_prof);

        
        $__internal_008f9e2e2d46b556b5100b61378e276ca3cb444fabfbbc18f7359a8ddba1968d->leave($__internal_008f9e2e2d46b556b5100b61378e276ca3cb444fabfbbc18f7359a8ddba1968d_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_6a23b3207f62483f954d00354c7abdaef4cdb9f257cc3eff6cbeec06b995a57d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a23b3207f62483f954d00354c7abdaef4cdb9f257cc3eff6cbeec06b995a57d->enter($__internal_6a23b3207f62483f954d00354c7abdaef4cdb9f257cc3eff6cbeec06b995a57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_30955eaf278c3fabbada3b109ae5df16b90c9ba1d5696c34e8b98af7f1594fca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30955eaf278c3fabbada3b109ae5df16b90c9ba1d5696c34e8b98af7f1594fca->enter($__internal_30955eaf278c3fabbada3b109ae5df16b90c9ba1d5696c34e8b98af7f1594fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
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
        
        $__internal_30955eaf278c3fabbada3b109ae5df16b90c9ba1d5696c34e8b98af7f1594fca->leave($__internal_30955eaf278c3fabbada3b109ae5df16b90c9ba1d5696c34e8b98af7f1594fca_prof);

        
        $__internal_6a23b3207f62483f954d00354c7abdaef4cdb9f257cc3eff6cbeec06b995a57d->leave($__internal_6a23b3207f62483f954d00354c7abdaef4cdb9f257cc3eff6cbeec06b995a57d_prof);

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
        return array (  89 => 10,  80 => 9,  62 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SiteBundle::base.html.twig\" %}

{% block style %}
    <link rel=\"stylesheet\" href=\"public/css/pages/index.css\" type=\"text/css\" />
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
