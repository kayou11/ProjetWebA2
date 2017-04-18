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
        $__internal_f83bfcf80a4de4c5cb400ab99bebe8cfdbfcfa1dadbba8c07c7ae3849f659e26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f83bfcf80a4de4c5cb400ab99bebe8cfdbfcfa1dadbba8c07c7ae3849f659e26->enter($__internal_f83bfcf80a4de4c5cb400ab99bebe8cfdbfcfa1dadbba8c07c7ae3849f659e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Default:index.html.twig"));

        $__internal_c8458d33e9c6d6d3d9f864c869cdbb0f500ec36923f7f8f74fd4ac3cb0b246a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8458d33e9c6d6d3d9f864c869cdbb0f500ec36923f7f8f74fd4ac3cb0b246a1->enter($__internal_c8458d33e9c6d6d3d9f864c869cdbb0f500ec36923f7f8f74fd4ac3cb0b246a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f83bfcf80a4de4c5cb400ab99bebe8cfdbfcfa1dadbba8c07c7ae3849f659e26->leave($__internal_f83bfcf80a4de4c5cb400ab99bebe8cfdbfcfa1dadbba8c07c7ae3849f659e26_prof);

        
        $__internal_c8458d33e9c6d6d3d9f864c869cdbb0f500ec36923f7f8f74fd4ac3cb0b246a1->leave($__internal_c8458d33e9c6d6d3d9f864c869cdbb0f500ec36923f7f8f74fd4ac3cb0b246a1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2ef18b23f4583223653278b4fb410601d8063b8afc0ac52bfa3d477d56b4b3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2ef18b23f4583223653278b4fb410601d8063b8afc0ac52bfa3d477d56b4b3c->enter($__internal_a2ef18b23f4583223653278b4fb410601d8063b8afc0ac52bfa3d477d56b4b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fdb7bca6782506724cfba12ecf2cd47e73c07e0d084c3faf234d74877231c40a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdb7bca6782506724cfba12ecf2cd47e73c07e0d084c3faf234d74877231c40a->enter($__internal_fdb7bca6782506724cfba12ecf2cd47e73c07e0d084c3faf234d74877231c40a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BDE Cesi Bordeaux";
        
        $__internal_fdb7bca6782506724cfba12ecf2cd47e73c07e0d084c3faf234d74877231c40a->leave($__internal_fdb7bca6782506724cfba12ecf2cd47e73c07e0d084c3faf234d74877231c40a_prof);

        
        $__internal_a2ef18b23f4583223653278b4fb410601d8063b8afc0ac52bfa3d477d56b4b3c->leave($__internal_a2ef18b23f4583223653278b4fb410601d8063b8afc0ac52bfa3d477d56b4b3c_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_a0c9468a17eb33398e5408b066ab6770424c38d2ff7c7529b9274b1fb017057d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0c9468a17eb33398e5408b066ab6770424c38d2ff7c7529b9274b1fb017057d->enter($__internal_a0c9468a17eb33398e5408b066ab6770424c38d2ff7c7529b9274b1fb017057d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ed0f2f04d8fe8ff2b7909d0ca54581e83f737564259ef04f7cf68f1b92663116 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed0f2f04d8fe8ff2b7909d0ca54581e83f737564259ef04f7cf68f1b92663116->enter($__internal_ed0f2f04d8fe8ff2b7909d0ca54581e83f737564259ef04f7cf68f1b92663116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_ed0f2f04d8fe8ff2b7909d0ca54581e83f737564259ef04f7cf68f1b92663116->leave($__internal_ed0f2f04d8fe8ff2b7909d0ca54581e83f737564259ef04f7cf68f1b92663116_prof);

        
        $__internal_a0c9468a17eb33398e5408b066ab6770424c38d2ff7c7529b9274b1fb017057d->leave($__internal_a0c9468a17eb33398e5408b066ab6770424c38d2ff7c7529b9274b1fb017057d_prof);

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
