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
        $__internal_4e51cada130c9c2af91757dcfc3e2762769ac0ffbdfa840195e224470e05d7ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e51cada130c9c2af91757dcfc3e2762769ac0ffbdfa840195e224470e05d7ed->enter($__internal_4e51cada130c9c2af91757dcfc3e2762769ac0ffbdfa840195e224470e05d7ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Default:index.html.twig"));

        $__internal_2b5d3870c1ef15241291ff3fc731536121eefe8a13c014890c2418f2c1dd9e0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b5d3870c1ef15241291ff3fc731536121eefe8a13c014890c2418f2c1dd9e0a->enter($__internal_2b5d3870c1ef15241291ff3fc731536121eefe8a13c014890c2418f2c1dd9e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e51cada130c9c2af91757dcfc3e2762769ac0ffbdfa840195e224470e05d7ed->leave($__internal_4e51cada130c9c2af91757dcfc3e2762769ac0ffbdfa840195e224470e05d7ed_prof);

        
        $__internal_2b5d3870c1ef15241291ff3fc731536121eefe8a13c014890c2418f2c1dd9e0a->leave($__internal_2b5d3870c1ef15241291ff3fc731536121eefe8a13c014890c2418f2c1dd9e0a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a6603f2b2906b4c7c926e9aba4a5dc19a05be43804b8626b9acf0d442990e8ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6603f2b2906b4c7c926e9aba4a5dc19a05be43804b8626b9acf0d442990e8ba->enter($__internal_a6603f2b2906b4c7c926e9aba4a5dc19a05be43804b8626b9acf0d442990e8ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5521a813f4520ff6e310d7926e747007ef70158e612331fbfd1932e631f5fbad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5521a813f4520ff6e310d7926e747007ef70158e612331fbfd1932e631f5fbad->enter($__internal_5521a813f4520ff6e310d7926e747007ef70158e612331fbfd1932e631f5fbad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BDE Cesi Bordeaux";
        
        $__internal_5521a813f4520ff6e310d7926e747007ef70158e612331fbfd1932e631f5fbad->leave($__internal_5521a813f4520ff6e310d7926e747007ef70158e612331fbfd1932e631f5fbad_prof);

        
        $__internal_a6603f2b2906b4c7c926e9aba4a5dc19a05be43804b8626b9acf0d442990e8ba->leave($__internal_a6603f2b2906b4c7c926e9aba4a5dc19a05be43804b8626b9acf0d442990e8ba_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_76df9e0966d8f9111ed15d70b4bce7d9d6d06a831760b8a697a665dc9c2d8ef3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76df9e0966d8f9111ed15d70b4bce7d9d6d06a831760b8a697a665dc9c2d8ef3->enter($__internal_76df9e0966d8f9111ed15d70b4bce7d9d6d06a831760b8a697a665dc9c2d8ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5f0dd13a3f540edf94c191442fa5def14fd07ffeecd6f33bff869c5e9a5dab76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f0dd13a3f540edf94c191442fa5def14fd07ffeecd6f33bff869c5e9a5dab76->enter($__internal_5f0dd13a3f540edf94c191442fa5def14fd07ffeecd6f33bff869c5e9a5dab76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                        <h3>Pavillon</h3>
                        <p><button class=\"btn btn-primary\">More</button></p>
                    </div>
                </div>
                <div class=\"item\">
                    <img src=\"rainbow-garden-nature-colorful-trees-reflection-landscape-rocks-green-lake-1920x1080.jpg\" alt=\"\">
                    <div class=\"carousel-caption\">
                        <h3>Landscape</h3>
                        <p><button class=\"btn btn-primary\">More</button></p>
                    </div>
                </div>
                <div class=\"item\">
                    <img src=\"full-hd-images-wallpaper-9.jpg\" alt=\"\">
                    <div class=\"carousel-caption\">
                        <h3>City</h3>
                        <p><button class=\"btn btn-primary\">More</button></p>
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
                <h2>Test1</h2>
                <img src=\"#\" class=\"peinture\">
                <p>Sejumlah text seragam Lorem Ipsum yang digunakan semenjak 1500an di terbitkan di bawah ini untuk mereka yang berminat. Seksyen 1.10.32 dan 1.10.33 from \"de Finibus Bonorum et Malorum\" oleh Cicero juga disertakan seperti kandungan asal, dan disusuli dengan versi Inggeris semenjak tahun 1914, yang di terjemah oleh H. Rackham.</p>
                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\" onclick=\"\">Details »</a></p>
            </div>
            <div class=\"col-md-4\">
                <h2>Test2</h2>
                <img src=\"#\" class=\"peinture\">
                <p>Sejumlah text seragam Lorem Ipsum yang digunakan semenjak 1500an di terbitkan di bawah ini untuk mereka yang berminat. Seksyen 1.10.32 dan 1.10.33 from \"de Finibus Bonorum et Malorum\" oleh Cicero juga disertakan seperti kandungan asal, dan disusuli dengan versi Inggeris semenjak tahun 1914, yang di terjemah oleh H. Rackham.</p>
                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\" onclick=\"test()\">Details »</a></p>
            </div>
            <div class=\"col-md-4\">
                <h2>Test3</h2>
                <img src=\"#\" class=\"peinture\">
                <p>Sejumlah text seragam Lorem Ipsum yang digunakan semenjak 1500an di terbitkan di bawah ini untuk mereka yang berminat. Seksyen 1.10.32 dan 1.10.33 from \"de Finibus Bonorum et Malorum\" oleh Cicero juga disertakan seperti kandungan asal, dan disusuli dengan versi Inggeris semenjak tahun 1914, yang di terjemah oleh H. Rackham.</p>
                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Details »</a></p>
            </div>
        </div>
        <hr>
    </div>
";
        
        $__internal_5f0dd13a3f540edf94c191442fa5def14fd07ffeecd6f33bff869c5e9a5dab76->leave($__internal_5f0dd13a3f540edf94c191442fa5def14fd07ffeecd6f33bff869c5e9a5dab76_prof);

        
        $__internal_76df9e0966d8f9111ed15d70b4bce7d9d6d06a831760b8a697a665dc9c2d8ef3->leave($__internal_76df9e0966d8f9111ed15d70b4bce7d9d6d06a831760b8a697a665dc9c2d8ef3_prof);

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
                        <h3>Pavillon</h3>
                        <p><button class=\"btn btn-primary\">More</button></p>
                    </div>
                </div>
                <div class=\"item\">
                    <img src=\"rainbow-garden-nature-colorful-trees-reflection-landscape-rocks-green-lake-1920x1080.jpg\" alt=\"\">
                    <div class=\"carousel-caption\">
                        <h3>Landscape</h3>
                        <p><button class=\"btn btn-primary\">More</button></p>
                    </div>
                </div>
                <div class=\"item\">
                    <img src=\"full-hd-images-wallpaper-9.jpg\" alt=\"\">
                    <div class=\"carousel-caption\">
                        <h3>City</h3>
                        <p><button class=\"btn btn-primary\">More</button></p>
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
                <h2>Test1</h2>
                <img src=\"#\" class=\"peinture\">
                <p>Sejumlah text seragam Lorem Ipsum yang digunakan semenjak 1500an di terbitkan di bawah ini untuk mereka yang berminat. Seksyen 1.10.32 dan 1.10.33 from \"de Finibus Bonorum et Malorum\" oleh Cicero juga disertakan seperti kandungan asal, dan disusuli dengan versi Inggeris semenjak tahun 1914, yang di terjemah oleh H. Rackham.</p>
                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\" onclick=\"\">Details »</a></p>
            </div>
            <div class=\"col-md-4\">
                <h2>Test2</h2>
                <img src=\"#\" class=\"peinture\">
                <p>Sejumlah text seragam Lorem Ipsum yang digunakan semenjak 1500an di terbitkan di bawah ini untuk mereka yang berminat. Seksyen 1.10.32 dan 1.10.33 from \"de Finibus Bonorum et Malorum\" oleh Cicero juga disertakan seperti kandungan asal, dan disusuli dengan versi Inggeris semenjak tahun 1914, yang di terjemah oleh H. Rackham.</p>
                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\" onclick=\"test()\">Details »</a></p>
            </div>
            <div class=\"col-md-4\">
                <h2>Test3</h2>
                <img src=\"#\" class=\"peinture\">
                <p>Sejumlah text seragam Lorem Ipsum yang digunakan semenjak 1500an di terbitkan di bawah ini untuk mereka yang berminat. Seksyen 1.10.32 dan 1.10.33 from \"de Finibus Bonorum et Malorum\" oleh Cicero juga disertakan seperti kandungan asal, dan disusuli dengan versi Inggeris semenjak tahun 1914, yang di terjemah oleh H. Rackham.</p>
                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">Details »</a></p>
            </div>
        </div>
        <hr>
    </div>
{% endblock %}", "SiteBundle:Default:index.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/SiteBundle/Resources/views/Default/index.html.twig");
    }
}
