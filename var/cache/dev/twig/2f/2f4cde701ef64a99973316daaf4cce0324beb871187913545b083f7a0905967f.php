<?php

/* SiteBundle:Pages:galerie_album.html.twig */
class __TwigTemplate_058058710b7f4c46a61422f8b72b21434a6b5efb11e31830d0b2c6edd506f079 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SiteBundle::base.html.twig", "SiteBundle:Pages:galerie_album.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SiteBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_286f598578c349d0b6b40df8de2bcce0ba27ea514c60d3ef8908d029abf58cf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_286f598578c349d0b6b40df8de2bcce0ba27ea514c60d3ef8908d029abf58cf3->enter($__internal_286f598578c349d0b6b40df8de2bcce0ba27ea514c60d3ef8908d029abf58cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:galerie_album.html.twig"));

        $__internal_9cfefc40a7a8a86e9dcbc3ab9d9c1ed127f4b9fc1e3e56244bfcc3a4815a4a7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cfefc40a7a8a86e9dcbc3ab9d9c1ed127f4b9fc1e3e56244bfcc3a4815a4a7e->enter($__internal_9cfefc40a7a8a86e9dcbc3ab9d9c1ed127f4b9fc1e3e56244bfcc3a4815a4a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:galerie_album.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_286f598578c349d0b6b40df8de2bcce0ba27ea514c60d3ef8908d029abf58cf3->leave($__internal_286f598578c349d0b6b40df8de2bcce0ba27ea514c60d3ef8908d029abf58cf3_prof);

        
        $__internal_9cfefc40a7a8a86e9dcbc3ab9d9c1ed127f4b9fc1e3e56244bfcc3a4815a4a7e->leave($__internal_9cfefc40a7a8a86e9dcbc3ab9d9c1ed127f4b9fc1e3e56244bfcc3a4815a4a7e_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_8bb4f9d86a9349aa889027e1811e19bb6de27b1cced77caf329fcc5fcd7409f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bb4f9d86a9349aa889027e1811e19bb6de27b1cced77caf329fcc5fcd7409f8->enter($__internal_8bb4f9d86a9349aa889027e1811e19bb6de27b1cced77caf329fcc5fcd7409f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_ebf7b65fce5c08bb1fde018f9d325c2cd10d35fe7c3ef463505dbc6b28240c54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebf7b65fce5c08bb1fde018f9d325c2cd10d35fe7c3ef463505dbc6b28240c54->enter($__internal_ebf7b65fce5c08bb1fde018f9d325c2cd10d35fe7c3ef463505dbc6b28240c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../public/css/pages/galerie_album.css\" type=\"text/css\" />
";
        
        $__internal_ebf7b65fce5c08bb1fde018f9d325c2cd10d35fe7c3ef463505dbc6b28240c54->leave($__internal_ebf7b65fce5c08bb1fde018f9d325c2cd10d35fe7c3ef463505dbc6b28240c54_prof);

        
        $__internal_8bb4f9d86a9349aa889027e1811e19bb6de27b1cced77caf329fcc5fcd7409f8->leave($__internal_8bb4f9d86a9349aa889027e1811e19bb6de27b1cced77caf329fcc5fcd7409f8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_70fa4e8a600e742e1c565a23bed5a0233835b67b7348223f8e87865aa6052145 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70fa4e8a600e742e1c565a23bed5a0233835b67b7348223f8e87865aa6052145->enter($__internal_70fa4e8a600e742e1c565a23bed5a0233835b67b7348223f8e87865aa6052145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_90fbe0299699e024a6e7a0cb7229c822bf557fb2dc4b1bb325eba209624ba891 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90fbe0299699e024a6e7a0cb7229c822bf557fb2dc4b1bb325eba209624ba891->enter($__internal_90fbe0299699e024a6e7a0cb7229c822bf557fb2dc4b1bb325eba209624ba891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Galerie photos";
        
        $__internal_90fbe0299699e024a6e7a0cb7229c822bf557fb2dc4b1bb325eba209624ba891->leave($__internal_90fbe0299699e024a6e7a0cb7229c822bf557fb2dc4b1bb325eba209624ba891_prof);

        
        $__internal_70fa4e8a600e742e1c565a23bed5a0233835b67b7348223f8e87865aa6052145->leave($__internal_70fa4e8a600e742e1c565a23bed5a0233835b67b7348223f8e87865aa6052145_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_421600dadad0e1432376f4b0deb9d31d343f2cbae811e06f2aa76e0654a272dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_421600dadad0e1432376f4b0deb9d31d343f2cbae811e06f2aa76e0654a272dd->enter($__internal_421600dadad0e1432376f4b0deb9d31d343f2cbae811e06f2aa76e0654a272dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8d967bf3026f4bfc7adb890d67333185d3e82b01231b3becb7dc723f3e4aa7e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d967bf3026f4bfc7adb890d67333185d3e82b01231b3becb7dc723f3e4aa7e3->enter($__internal_8d967bf3026f4bfc7adb890d67333185d3e82b01231b3becb7dc723f3e4aa7e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "
    <div class=\"navbar-wrapper\">
        <div class=\"container\">
            <div class=\"navbar navbar-inverse\" role=\"navigation\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <a class=\"navbar-brand\" href=\"#\">Galerie album</a>
                        <button class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    </div>
                    <div class=\"navbar-collapse collapse\">
                        <ul class=\"nav navbar-nav text-center\">
                            <li id=\"s1\" class=\"clink\">
                                <a href=\"#\" data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\">Album 1</a>
                            </li>
                            <li id=\"s2\" class=\"clink\"><a href=\"#\" data-target=\"#myCarousel\" data-slide-to=\"1\">Album 2</a></li>
                            <li id=\"s3\" class=\"clink\"><a href=\"#\" data-target=\"#myCarousel\" data-slide-to=\"2\">Album 3</a></li>
                            <li id=\"s4\" class=\"clink\"><a href=\"#\" data-target=\"#myCarousel\" data-slide-to=\"3\">Album 4</a></li>
                            <li id=\"s5\" class=\"clink\"><a href=\"#\" data-target=\"#myCarousel\" data-slide-to=\"4\">Album 5</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id=\"home\" class=\"header\">
        <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
            <div class=\"carousel-inner\">

                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new Twig_Error_Runtime('Variable "activity" does not exist.', 43, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["images"]) {
            // line 44
            echo "                <div class=\"item active\">
                    <div class=\"container\">
                        <div id=\"slide1\" class=\"masonry\">
                            <div class=\"post-box col-lg-4 col-md-4 col-sm-4\">
                                <img class=\"img-responsive img-thumbnail\" src=\"";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["images"], "name", array()), "html", null, true);
            echo "\">
                                <p><button class=\"btn btn-primary\">Enregistrer</button></p>
                                <p><button class=\"btn btn-primary\">Supprimer</button></p>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['images'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_8d967bf3026f4bfc7adb890d67333185d3e82b01231b3becb7dc723f3e4aa7e3->leave($__internal_8d967bf3026f4bfc7adb890d67333185d3e82b01231b3becb7dc723f3e4aa7e3_prof);

        
        $__internal_421600dadad0e1432376f4b0deb9d31d343f2cbae811e06f2aa76e0654a272dd->leave($__internal_421600dadad0e1432376f4b0deb9d31d343f2cbae811e06f2aa76e0654a272dd_prof);

    }

    // line 60
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_150cfdf8d05da4d590199894c7fe07882413720be7ea14bb987debc329e6e786 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_150cfdf8d05da4d590199894c7fe07882413720be7ea14bb987debc329e6e786->enter($__internal_150cfdf8d05da4d590199894c7fe07882413720be7ea14bb987debc329e6e786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_efb6bc845f55ba3e73c994933a572ea4ba879f96bd64a372dbe505a9a9e7a6f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efb6bc845f55ba3e73c994933a572ea4ba879f96bd64a372dbe505a9a9e7a6f3->enter($__internal_efb6bc845f55ba3e73c994933a572ea4ba879f96bd64a372dbe505a9a9e7a6f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 61
        echo "    <script type=\"text/javascript\" src=\"../public/js/page_album.js\"></script>
";
        
        $__internal_efb6bc845f55ba3e73c994933a572ea4ba879f96bd64a372dbe505a9a9e7a6f3->leave($__internal_efb6bc845f55ba3e73c994933a572ea4ba879f96bd64a372dbe505a9a9e7a6f3_prof);

        
        $__internal_150cfdf8d05da4d590199894c7fe07882413720be7ea14bb987debc329e6e786->leave($__internal_150cfdf8d05da4d590199894c7fe07882413720be7ea14bb987debc329e6e786_prof);

    }

    public function getTemplateName()
    {
        return "SiteBundle:Pages:galerie_album.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 61,  162 => 60,  149 => 56,  135 => 48,  129 => 44,  125 => 43,  90 => 10,  81 => 9,  63 => 7,  52 => 4,  43 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SiteBundle::base.html.twig\" %}

{% block style %}
    <link rel=\"stylesheet\" href=\"../public/css/pages/galerie_album.css\" type=\"text/css\" />
{% endblock %}

{% block title  %}Galerie photos{% endblock %}

{% block content %}

    <div class=\"navbar-wrapper\">
        <div class=\"container\">
            <div class=\"navbar navbar-inverse\" role=\"navigation\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <a class=\"navbar-brand\" href=\"#\">Galerie album</a>
                        <button class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    </div>
                    <div class=\"navbar-collapse collapse\">
                        <ul class=\"nav navbar-nav text-center\">
                            <li id=\"s1\" class=\"clink\">
                                <a href=\"#\" data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\">Album 1</a>
                            </li>
                            <li id=\"s2\" class=\"clink\"><a href=\"#\" data-target=\"#myCarousel\" data-slide-to=\"1\">Album 2</a></li>
                            <li id=\"s3\" class=\"clink\"><a href=\"#\" data-target=\"#myCarousel\" data-slide-to=\"2\">Album 3</a></li>
                            <li id=\"s4\" class=\"clink\"><a href=\"#\" data-target=\"#myCarousel\" data-slide-to=\"3\">Album 4</a></li>
                            <li id=\"s5\" class=\"clink\"><a href=\"#\" data-target=\"#myCarousel\" data-slide-to=\"4\">Album 5</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id=\"home\" class=\"header\">
        <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
            <div class=\"carousel-inner\">

                {% for images in activity %}
                <div class=\"item active\">
                    <div class=\"container\">
                        <div id=\"slide1\" class=\"masonry\">
                            <div class=\"post-box col-lg-4 col-md-4 col-sm-4\">
                                <img class=\"img-responsive img-thumbnail\" src=\"{{ images.name }}\">
                                <p><button class=\"btn btn-primary\">Enregistrer</button></p>
                                <p><button class=\"btn btn-primary\">Supprimer</button></p>
                            </div>
                        </div>
                    </div>
                </div>
                {% endfor %}
            </div>
        </div>
    </div>
{% endblock %}
{% block scripts %}
    <script type=\"text/javascript\" src=\"../public/js/page_album.js\"></script>
{% endblock %}", "SiteBundle:Pages:galerie_album.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/SiteBundle/Resources/views/Pages/galerie_album.html.twig");
    }
}
