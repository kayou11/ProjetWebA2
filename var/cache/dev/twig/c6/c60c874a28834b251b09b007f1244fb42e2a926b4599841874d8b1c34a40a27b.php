<?php

/* SiteBundle:Default:index.html.twig */
class __TwigTemplate_8f90dab5152b108b07c425e1327538418b050058d2633e43c8f08a28ca15a817 extends Twig_Template
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
        $__internal_288293c6f6dc32237ef2aa2bf8258552ce47d21029f09d0e72cf695651f1e5f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_288293c6f6dc32237ef2aa2bf8258552ce47d21029f09d0e72cf695651f1e5f9->enter($__internal_288293c6f6dc32237ef2aa2bf8258552ce47d21029f09d0e72cf695651f1e5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Default:index.html.twig"));

        $__internal_5e78f322283dd9aae1241de751d3c5ce3cd09416b3774c7a4fbfa4b1de989a6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e78f322283dd9aae1241de751d3c5ce3cd09416b3774c7a4fbfa4b1de989a6f->enter($__internal_5e78f322283dd9aae1241de751d3c5ce3cd09416b3774c7a4fbfa4b1de989a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_288293c6f6dc32237ef2aa2bf8258552ce47d21029f09d0e72cf695651f1e5f9->leave($__internal_288293c6f6dc32237ef2aa2bf8258552ce47d21029f09d0e72cf695651f1e5f9_prof);

        
        $__internal_5e78f322283dd9aae1241de751d3c5ce3cd09416b3774c7a4fbfa4b1de989a6f->leave($__internal_5e78f322283dd9aae1241de751d3c5ce3cd09416b3774c7a4fbfa4b1de989a6f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2951503b2851a4e6631770b44492a4d6a225cc668d18431b1005799064e5f69e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2951503b2851a4e6631770b44492a4d6a225cc668d18431b1005799064e5f69e->enter($__internal_2951503b2851a4e6631770b44492a4d6a225cc668d18431b1005799064e5f69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_aaa2571e4182bab1ff8b64437bd97a3f4d5e15d702f37a0ea9029bb846129cce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaa2571e4182bab1ff8b64437bd97a3f4d5e15d702f37a0ea9029bb846129cce->enter($__internal_aaa2571e4182bab1ff8b64437bd97a3f4d5e15d702f37a0ea9029bb846129cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BDE Cesi Bordeaux";
        
        $__internal_aaa2571e4182bab1ff8b64437bd97a3f4d5e15d702f37a0ea9029bb846129cce->leave($__internal_aaa2571e4182bab1ff8b64437bd97a3f4d5e15d702f37a0ea9029bb846129cce_prof);

        
        $__internal_2951503b2851a4e6631770b44492a4d6a225cc668d18431b1005799064e5f69e->leave($__internal_2951503b2851a4e6631770b44492a4d6a225cc668d18431b1005799064e5f69e_prof);

    }

    // line 5
    public function block_style($context, array $blocks = array())
    {
        $__internal_253b221a883c711f4f4a724a680e2a473412b215914ba69a1ad07f3370106571 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_253b221a883c711f4f4a724a680e2a473412b215914ba69a1ad07f3370106571->enter($__internal_253b221a883c711f4f4a724a680e2a473412b215914ba69a1ad07f3370106571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_e3359c81b4785550f6bbb55e624fc418c02701bbcc561054c6edb1060f9c643b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3359c81b4785550f6bbb55e624fc418c02701bbcc561054c6edb1060f9c643b->enter($__internal_e3359c81b4785550f6bbb55e624fc418c02701bbcc561054c6edb1060f9c643b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"../public/css/pages/index.css\" type=\"text/css\" />
";
        
        $__internal_e3359c81b4785550f6bbb55e624fc418c02701bbcc561054c6edb1060f9c643b->leave($__internal_e3359c81b4785550f6bbb55e624fc418c02701bbcc561054c6edb1060f9c643b_prof);

        
        $__internal_253b221a883c711f4f4a724a680e2a473412b215914ba69a1ad07f3370106571->leave($__internal_253b221a883c711f4f4a724a680e2a473412b215914ba69a1ad07f3370106571_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_21a0474f5af5c92b6323f0dffea7a6a3d4ab2c1cbfbc7e90fca615c3ddcee834 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21a0474f5af5c92b6323f0dffea7a6a3d4ab2c1cbfbc7e90fca615c3ddcee834->enter($__internal_21a0474f5af5c92b6323f0dffea7a6a3d4ab2c1cbfbc7e90fca615c3ddcee834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d4590a7f1f89847ee543be418ed452449502a69995303c203bb42c7c89c684a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4590a7f1f89847ee543be418ed452449502a69995303c203bb42c7c89c684a5->enter($__internal_d4590a7f1f89847ee543be418ed452449502a69995303c203bb42c7c89c684a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                <span class=\"glyphicon glyphicon-calendar\" role=\"button\" href=\"#\" width=\"200\" height=\"200\" ></span>
                <p>La liste des activités est disponible ici !<br></br></p>
            </div>
            <div class=\"col-md-4\">
                <h2>Proposez vos activités</h2>
                <span class=\"glyphicon glyphicon-list\" role=\"button\" href=\"#\" width=\"200\" height=\"200\"></span>
                <p>L'équipe du BDE est à l'écoute de toute proposition que vous ne ferez !</p>
            </div>
            <div class=\"col-md-4\">
                <h2>Boutique</h2>
                <span class=\"glyphicon glyphicon-shopping-cart\" role=\"button\" href=\"#\" width=\"200\" height=\"200\"></span>
                <p>Retrouvez tous nos articles ici !<br></br></p>
            </div>
        </div>
        <hr>
    </div>
";
        
        $__internal_d4590a7f1f89847ee543be418ed452449502a69995303c203bb42c7c89c684a5->leave($__internal_d4590a7f1f89847ee543be418ed452449502a69995303c203bb42c7c89c684a5_prof);

        
        $__internal_21a0474f5af5c92b6323f0dffea7a6a3d4ab2c1cbfbc7e90fca615c3ddcee834->leave($__internal_21a0474f5af5c92b6323f0dffea7a6a3d4ab2c1cbfbc7e90fca615c3ddcee834_prof);

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
        return array (  89 => 9,  80 => 8,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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
                <span class=\"glyphicon glyphicon-calendar\" role=\"button\" href=\"#\" width=\"200\" height=\"200\" ></span>
                <p>La liste des activités est disponible ici !<br></br></p>
            </div>
            <div class=\"col-md-4\">
                <h2>Proposez vos activités</h2>
                <span class=\"glyphicon glyphicon-list\" role=\"button\" href=\"#\" width=\"200\" height=\"200\"></span>
                <p>L'équipe du BDE est à l'écoute de toute proposition que vous ne ferez !</p>
            </div>
            <div class=\"col-md-4\">
                <h2>Boutique</h2>
                <span class=\"glyphicon glyphicon-shopping-cart\" role=\"button\" href=\"#\" width=\"200\" height=\"200\"></span>
                <p>Retrouvez tous nos articles ici !<br></br></p>
            </div>
        </div>
        <hr>
    </div>
{% endblock %}", "SiteBundle:Default:index.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/SiteBundle/Resources/views/Default/index.html.twig");
    }
}
