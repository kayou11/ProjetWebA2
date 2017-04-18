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
        $__internal_da14b2de1a1529bb8fb5a540b21294ff6d67eab3709df663c4715dbd3e99a295 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da14b2de1a1529bb8fb5a540b21294ff6d67eab3709df663c4715dbd3e99a295->enter($__internal_da14b2de1a1529bb8fb5a540b21294ff6d67eab3709df663c4715dbd3e99a295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Default:index.html.twig"));

        $__internal_985abe91db82106ffeda4391d4bc38026e07a6a345f05740155870aa23f529f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_985abe91db82106ffeda4391d4bc38026e07a6a345f05740155870aa23f529f8->enter($__internal_985abe91db82106ffeda4391d4bc38026e07a6a345f05740155870aa23f529f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da14b2de1a1529bb8fb5a540b21294ff6d67eab3709df663c4715dbd3e99a295->leave($__internal_da14b2de1a1529bb8fb5a540b21294ff6d67eab3709df663c4715dbd3e99a295_prof);

        
        $__internal_985abe91db82106ffeda4391d4bc38026e07a6a345f05740155870aa23f529f8->leave($__internal_985abe91db82106ffeda4391d4bc38026e07a6a345f05740155870aa23f529f8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_93241718396981ab4e6946aedeee88d11f36b3127a147839ca4b76442d1cf2f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93241718396981ab4e6946aedeee88d11f36b3127a147839ca4b76442d1cf2f6->enter($__internal_93241718396981ab4e6946aedeee88d11f36b3127a147839ca4b76442d1cf2f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1eca44496bdc757f1d03cc8cde7a76fa9ff926ef725e80896127fe4e7a50131a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eca44496bdc757f1d03cc8cde7a76fa9ff926ef725e80896127fe4e7a50131a->enter($__internal_1eca44496bdc757f1d03cc8cde7a76fa9ff926ef725e80896127fe4e7a50131a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BDE Cesi Bordeaux";
        
        $__internal_1eca44496bdc757f1d03cc8cde7a76fa9ff926ef725e80896127fe4e7a50131a->leave($__internal_1eca44496bdc757f1d03cc8cde7a76fa9ff926ef725e80896127fe4e7a50131a_prof);

        
        $__internal_93241718396981ab4e6946aedeee88d11f36b3127a147839ca4b76442d1cf2f6->leave($__internal_93241718396981ab4e6946aedeee88d11f36b3127a147839ca4b76442d1cf2f6_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_29a69c1a8a4bce357b56b8e6aba147e75bef0a157413c2c767b7a436e1001bce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29a69c1a8a4bce357b56b8e6aba147e75bef0a157413c2c767b7a436e1001bce->enter($__internal_29a69c1a8a4bce357b56b8e6aba147e75bef0a157413c2c767b7a436e1001bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b035edc84539819df3547784c1dc0115b5a545982c9578b2257d45dacb3aebec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b035edc84539819df3547784c1dc0115b5a545982c9578b2257d45dacb3aebec->enter($__internal_b035edc84539819df3547784c1dc0115b5a545982c9578b2257d45dacb3aebec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_b035edc84539819df3547784c1dc0115b5a545982c9578b2257d45dacb3aebec->leave($__internal_b035edc84539819df3547784c1dc0115b5a545982c9578b2257d45dacb3aebec_prof);

        
        $__internal_29a69c1a8a4bce357b56b8e6aba147e75bef0a157413c2c767b7a436e1001bce->leave($__internal_29a69c1a8a4bce357b56b8e6aba147e75bef0a157413c2c767b7a436e1001bce_prof);

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
{% endblock %}", "SiteBundle:Default:index.html.twig", "C:\\MAMP\\htdocs\\ProjetWebA2\\src\\SiteBundle/Resources/views/Default/index.html.twig");
    }
}
