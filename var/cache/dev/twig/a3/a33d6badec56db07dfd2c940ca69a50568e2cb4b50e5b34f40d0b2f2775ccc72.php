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
        $__internal_7a4066016a5179b73e836e299857e7211bc0b497e93012fdc9c77052211cb075 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a4066016a5179b73e836e299857e7211bc0b497e93012fdc9c77052211cb075->enter($__internal_7a4066016a5179b73e836e299857e7211bc0b497e93012fdc9c77052211cb075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Default:index.html.twig"));

        $__internal_eaf6d2a89b211b327b965785b32855441834f7fc6d373a02b058b7c2e418eead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaf6d2a89b211b327b965785b32855441834f7fc6d373a02b058b7c2e418eead->enter($__internal_eaf6d2a89b211b327b965785b32855441834f7fc6d373a02b058b7c2e418eead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a4066016a5179b73e836e299857e7211bc0b497e93012fdc9c77052211cb075->leave($__internal_7a4066016a5179b73e836e299857e7211bc0b497e93012fdc9c77052211cb075_prof);

        
        $__internal_eaf6d2a89b211b327b965785b32855441834f7fc6d373a02b058b7c2e418eead->leave($__internal_eaf6d2a89b211b327b965785b32855441834f7fc6d373a02b058b7c2e418eead_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0908b7fa4bbd4f67c34615145832f3f5ac6c6afb12fbaa0f2c18891f33081cb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0908b7fa4bbd4f67c34615145832f3f5ac6c6afb12fbaa0f2c18891f33081cb5->enter($__internal_0908b7fa4bbd4f67c34615145832f3f5ac6c6afb12fbaa0f2c18891f33081cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4f42a23d82f2ffb8090715c090bb988317cbbbc0b17d45811461682a22a80c5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f42a23d82f2ffb8090715c090bb988317cbbbc0b17d45811461682a22a80c5b->enter($__internal_4f42a23d82f2ffb8090715c090bb988317cbbbc0b17d45811461682a22a80c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BDE Cesi Bordeaux";
        
        $__internal_4f42a23d82f2ffb8090715c090bb988317cbbbc0b17d45811461682a22a80c5b->leave($__internal_4f42a23d82f2ffb8090715c090bb988317cbbbc0b17d45811461682a22a80c5b_prof);

        
        $__internal_0908b7fa4bbd4f67c34615145832f3f5ac6c6afb12fbaa0f2c18891f33081cb5->leave($__internal_0908b7fa4bbd4f67c34615145832f3f5ac6c6afb12fbaa0f2c18891f33081cb5_prof);

    }

    // line 5
    public function block_style($context, array $blocks = array())
    {
        $__internal_d802a4d006cb7b86a4746b6284fa64747f5ef683dc613c6c04f810b5c7b03534 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d802a4d006cb7b86a4746b6284fa64747f5ef683dc613c6c04f810b5c7b03534->enter($__internal_d802a4d006cb7b86a4746b6284fa64747f5ef683dc613c6c04f810b5c7b03534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_82bc0cfb14494e0b333cc128b2a96b432b20b275f2a0c827fc050912b66c702e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82bc0cfb14494e0b333cc128b2a96b432b20b275f2a0c827fc050912b66c702e->enter($__internal_82bc0cfb14494e0b333cc128b2a96b432b20b275f2a0c827fc050912b66c702e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"../public/css/pages/index.css\" type=\"text/css\" />
";
        
        $__internal_82bc0cfb14494e0b333cc128b2a96b432b20b275f2a0c827fc050912b66c702e->leave($__internal_82bc0cfb14494e0b333cc128b2a96b432b20b275f2a0c827fc050912b66c702e_prof);

        
        $__internal_d802a4d006cb7b86a4746b6284fa64747f5ef683dc613c6c04f810b5c7b03534->leave($__internal_d802a4d006cb7b86a4746b6284fa64747f5ef683dc613c6c04f810b5c7b03534_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_15afcb41b88a1461db3294f2ce626333cee3ec1c8151fba99974649ca9fbef2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15afcb41b88a1461db3294f2ce626333cee3ec1c8151fba99974649ca9fbef2c->enter($__internal_15afcb41b88a1461db3294f2ce626333cee3ec1c8151fba99974649ca9fbef2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c498f169365e193f3a9f58bd48cb20dc3f46f40f50efd73ba4c4761732df107f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c498f169365e193f3a9f58bd48cb20dc3f46f40f50efd73ba4c4761732df107f->enter($__internal_c498f169365e193f3a9f58bd48cb20dc3f46f40f50efd73ba4c4761732df107f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_c498f169365e193f3a9f58bd48cb20dc3f46f40f50efd73ba4c4761732df107f->leave($__internal_c498f169365e193f3a9f58bd48cb20dc3f46f40f50efd73ba4c4761732df107f_prof);

        
        $__internal_15afcb41b88a1461db3294f2ce626333cee3ec1c8151fba99974649ca9fbef2c->leave($__internal_15afcb41b88a1461db3294f2ce626333cee3ec1c8151fba99974649ca9fbef2c_prof);

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
