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
        $__internal_086647d550e692098f3d7105cb1d95bb199479f731f9a81eeed728c07bb40d3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_086647d550e692098f3d7105cb1d95bb199479f731f9a81eeed728c07bb40d3e->enter($__internal_086647d550e692098f3d7105cb1d95bb199479f731f9a81eeed728c07bb40d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:galerie_album.html.twig"));

        $__internal_0c26f52c1bbda739d48b9935661239502c6f1aa9eae20d1204eae3bf9408a1d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c26f52c1bbda739d48b9935661239502c6f1aa9eae20d1204eae3bf9408a1d2->enter($__internal_0c26f52c1bbda739d48b9935661239502c6f1aa9eae20d1204eae3bf9408a1d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:galerie_album.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_086647d550e692098f3d7105cb1d95bb199479f731f9a81eeed728c07bb40d3e->leave($__internal_086647d550e692098f3d7105cb1d95bb199479f731f9a81eeed728c07bb40d3e_prof);

        
        $__internal_0c26f52c1bbda739d48b9935661239502c6f1aa9eae20d1204eae3bf9408a1d2->leave($__internal_0c26f52c1bbda739d48b9935661239502c6f1aa9eae20d1204eae3bf9408a1d2_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_badc0339cababf0ccb5fc9ddf6d34526df48658a86fd5f3f6387695fac8a78af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_badc0339cababf0ccb5fc9ddf6d34526df48658a86fd5f3f6387695fac8a78af->enter($__internal_badc0339cababf0ccb5fc9ddf6d34526df48658a86fd5f3f6387695fac8a78af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_f2ee004d2684b5f9c702e6e5ad74b510586112fb72fb92b08c9ad26463923041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2ee004d2684b5f9c702e6e5ad74b510586112fb72fb92b08c9ad26463923041->enter($__internal_f2ee004d2684b5f9c702e6e5ad74b510586112fb72fb92b08c9ad26463923041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../public/css/pages/galerie_album.css\" type=\"text/css\" />
";
        
        $__internal_f2ee004d2684b5f9c702e6e5ad74b510586112fb72fb92b08c9ad26463923041->leave($__internal_f2ee004d2684b5f9c702e6e5ad74b510586112fb72fb92b08c9ad26463923041_prof);

        
        $__internal_badc0339cababf0ccb5fc9ddf6d34526df48658a86fd5f3f6387695fac8a78af->leave($__internal_badc0339cababf0ccb5fc9ddf6d34526df48658a86fd5f3f6387695fac8a78af_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fef6c21c78e8cb56c0157328781acc4cbe12934018f96c98dc24337b56011682 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fef6c21c78e8cb56c0157328781acc4cbe12934018f96c98dc24337b56011682->enter($__internal_fef6c21c78e8cb56c0157328781acc4cbe12934018f96c98dc24337b56011682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_04962d17a5b2ac14ba90cceb8d2f28b40036ab252f69786024bb2d87e6da5ed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04962d17a5b2ac14ba90cceb8d2f28b40036ab252f69786024bb2d87e6da5ed2->enter($__internal_04962d17a5b2ac14ba90cceb8d2f28b40036ab252f69786024bb2d87e6da5ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Galerie photos";
        
        $__internal_04962d17a5b2ac14ba90cceb8d2f28b40036ab252f69786024bb2d87e6da5ed2->leave($__internal_04962d17a5b2ac14ba90cceb8d2f28b40036ab252f69786024bb2d87e6da5ed2_prof);

        
        $__internal_fef6c21c78e8cb56c0157328781acc4cbe12934018f96c98dc24337b56011682->leave($__internal_fef6c21c78e8cb56c0157328781acc4cbe12934018f96c98dc24337b56011682_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_d111aca42ec6504138ed93baafdfceab231fe53da70e56dc146ccccab89fb84f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d111aca42ec6504138ed93baafdfceab231fe53da70e56dc146ccccab89fb84f->enter($__internal_d111aca42ec6504138ed93baafdfceab231fe53da70e56dc146ccccab89fb84f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9844c669f92ce7ef5d300d7f07a20c52afef9bb7707ab1fa38ff3fb0ead406b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9844c669f92ce7ef5d300d7f07a20c52afef9bb7707ab1fa38ff3fb0ead406b8->enter($__internal_9844c669f92ce7ef5d300d7f07a20c52afef9bb7707ab1fa38ff3fb0ead406b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_9844c669f92ce7ef5d300d7f07a20c52afef9bb7707ab1fa38ff3fb0ead406b8->leave($__internal_9844c669f92ce7ef5d300d7f07a20c52afef9bb7707ab1fa38ff3fb0ead406b8_prof);

        
        $__internal_d111aca42ec6504138ed93baafdfceab231fe53da70e56dc146ccccab89fb84f->leave($__internal_d111aca42ec6504138ed93baafdfceab231fe53da70e56dc146ccccab89fb84f_prof);

    }

    // line 60
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_3f6c29234f46d0a29a9a762f837f0f8fcc480225151ecb3dc89be9122e3ae9d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f6c29234f46d0a29a9a762f837f0f8fcc480225151ecb3dc89be9122e3ae9d4->enter($__internal_3f6c29234f46d0a29a9a762f837f0f8fcc480225151ecb3dc89be9122e3ae9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_748874487f2b00f2f0add53115fe94c5b4ce2b9f5841030da8bbbd60f3a44827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_748874487f2b00f2f0add53115fe94c5b4ce2b9f5841030da8bbbd60f3a44827->enter($__internal_748874487f2b00f2f0add53115fe94c5b4ce2b9f5841030da8bbbd60f3a44827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 61
        echo "    <script type=\"text/javascript\" src=\"../public/js/page_album.js\"></script>
";
        
        $__internal_748874487f2b00f2f0add53115fe94c5b4ce2b9f5841030da8bbbd60f3a44827->leave($__internal_748874487f2b00f2f0add53115fe94c5b4ce2b9f5841030da8bbbd60f3a44827_prof);

        
        $__internal_3f6c29234f46d0a29a9a762f837f0f8fcc480225151ecb3dc89be9122e3ae9d4->leave($__internal_3f6c29234f46d0a29a9a762f837f0f8fcc480225151ecb3dc89be9122e3ae9d4_prof);

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
