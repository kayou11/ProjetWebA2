<?php

/* SiteBundle::base.html.twig */
class __TwigTemplate_c9833f599909c71ba671b4c70bd05af0c3b319de9193a4d21f9c20470c2ff8be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32db6513e8e36b755ed17575fcd644ae542180caabdd7db1aabb2eb5d7fbbb0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32db6513e8e36b755ed17575fcd644ae542180caabdd7db1aabb2eb5d7fbbb0a->enter($__internal_32db6513e8e36b755ed17575fcd644ae542180caabdd7db1aabb2eb5d7fbbb0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle::base.html.twig"));

        $__internal_d2da631b2f0c102e4a99e3287decd06e1266fb1ea811039abeaf18ad7a3446da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2da631b2f0c102e4a99e3287decd06e1266fb1ea811039abeaf18ad7a3446da->enter($__internal_d2da631b2f0c102e4a99e3287decd06e1266fb1ea811039abeaf18ad7a3446da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    ";
        // line 9
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "53f9639_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_53f9639_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/53f9639_bootstrap_1.css");
            // line 15
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "53f9639_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_53f9639_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/53f9639_bootstrap-theme.min_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "53f9639_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_53f9639_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/53f9639_main_3.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "53f9639_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_53f9639_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/53f9639_boostrap-social_4.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        } else {
            // asset "53f9639"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_53f9639") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/53f9639.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        }
        unset($context["asset_url"]);
        // line 17
        echo "
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>

</head>
<body>
<div id=\"top\">
    <div class='logo_bde'>
        <a href=\"#\"><img src=\"../public/img/logo_bde.jpg\" width=\"100\" height=\"100\"> </a>
    </div>
    <div class=\"msg_bde\">
        <h1>BDE CESI BORDEAUX</h1>
    </div>
    <div class=\"profil\">
        <a href=\"#\" class=\"dropdown-toggle square\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\" width=\"200\" height=\"200\"></span></a>
        <ul class=\"dropdown-menu\">
            <li>
                <a href=\"#\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\" id=\"basic-addon1\">@</span>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Username\" aria-describedby=\"basic-addon1\">
                    </div>
                </a>
                <a href=\"#\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\" id=\"basic-addon1\">MDP</span>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Password\" aria-describedby=\"basic-addon1\">
                    </div>
                </a>

            </li>
            <li><a href=\"#\">Proposez vos activités</a></li>
            <li><a href=\"#\">Archives</a></li>
        </ul>
    </div>
    <div class=\"basket\">
        <a class=\"square\" href=\"#\"><span class=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\" width=\"100\" height=\"100\"></span></a>
    </div>
</div>

<nav class=\"navbar navbar-cesi\">
    <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>
    </div>
    <div class=\"container-fluid\">
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"#\">ACCUEIL<span class=\"sr-only\">(current)</span></a></li>
                <li><a href=\"#\">Le BDE</a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Activités<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Planning</a></li>
                        <li><a href=\"#\">Proposez vos activités</a></li>
                        <li><a href=\"#\">Archives</a></li>
                    </ul>
                </li>
                <li><a href=\"#\">Associations</a></li>
                <li><a href=\"#\">Galerie</a></li>
                <li><a href=\"#\">Boutique</a></li>
            </ul>
            <form class=\"navbar-form navbar-right\">
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher\">
                </div>
                <button type=\"submit\" class=\"btn btn-default\">Envoyer</button>
            </form>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class=\"footer\">
    <div class=\"row\">
        <div class=\"col-md-5\">
            <h2 class=\"FooterTitle\">Nous contacter</h2>
            <p>Adresse : 60 rue de Maurian</p>
            <p>Blanquefort, France</p>
            <p>Téléphone : 06 69 69 69 69</p>
            <p>Email : bdecesibordeaux@viacesi.fr</p>

        </div>

        <div class=\"col-md-5\">
            <div class=\"HyperTextFooter\">
            <h2 class=\"FooterTitle\">BDE CESI BORDEAUX</h2>
            <p><a href=\"#\">L'équipe</a> </p>
            <p><a href=\"#\">Galerie</a> </p>
            <p><a href=\"#\">Boutique</a> </p>

</div>
        </div>

        <div class=\"col-md-5\">
            <h2 class=\"FooterTitle\">Notre réseau d'école</h2>
            <img src=\"../public/img/LogoAlternance.png\" class=\"logoFooter\" style=>
            <img src=\"../public/img/LogoCertification.jpg\" class=\"logoFooter\">
            <img src=\"../public/img/LogoCesi.png\" class=\"logoFooter\">
            <img src=\"../public/img/LogoEi.png\" class=\"logoFooter\">
            <img src=\"../public/img/LogoEntreprises.png\" class=\"logoFooter\">
            <img src=\"../public/img/LogoExia.png\" class=\"logoFooter\">
        </div>

        <div class=\"col-md-5\">
            <h2 class=\"FooterTitle\">Restez connecté</h2>
            <a class=\"btn btn-social-icon btn-lg btn-facebook\">
                <span class=\"fa fa-facebook\"></span>
            </a>
            <a class=\"btn btn-social-icon btn-lg btn-twitter\">
                <span class=\"fa fa-twitter\"></span>
            </a>

        </div>
    </div>
</div>
";
        // line 137
        $this->displayBlock('content', $context, $blocks);
        // line 140
        echo "
";
        // line 141
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "04f180e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_04f180e_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/04f180e_bootstrap_1.js");
            // line 144
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 144, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "04f180e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_04f180e") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/04f180e.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 144, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 146
        echo "
</body>


</html>


";
        
        $__internal_32db6513e8e36b755ed17575fcd644ae542180caabdd7db1aabb2eb5d7fbbb0a->leave($__internal_32db6513e8e36b755ed17575fcd644ae542180caabdd7db1aabb2eb5d7fbbb0a_prof);

        
        $__internal_d2da631b2f0c102e4a99e3287decd06e1266fb1ea811039abeaf18ad7a3446da->leave($__internal_d2da631b2f0c102e4a99e3287decd06e1266fb1ea811039abeaf18ad7a3446da_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc9c53d5e4fb3dedd783ec330383eaa369c2656d9ef9973e871d78a4e300d656 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc9c53d5e4fb3dedd783ec330383eaa369c2656d9ef9973e871d78a4e300d656->enter($__internal_cc9c53d5e4fb3dedd783ec330383eaa369c2656d9ef9973e871d78a4e300d656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_546e8dcc4f0b963e1deb6f86477ebef534f3ae007e33e3d622cd51dd1e496fca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_546e8dcc4f0b963e1deb6f86477ebef534f3ae007e33e3d622cd51dd1e496fca->enter($__internal_546e8dcc4f0b963e1deb6f86477ebef534f3ae007e33e3d622cd51dd1e496fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_546e8dcc4f0b963e1deb6f86477ebef534f3ae007e33e3d622cd51dd1e496fca->leave($__internal_546e8dcc4f0b963e1deb6f86477ebef534f3ae007e33e3d622cd51dd1e496fca_prof);

        
        $__internal_cc9c53d5e4fb3dedd783ec330383eaa369c2656d9ef9973e871d78a4e300d656->leave($__internal_cc9c53d5e4fb3dedd783ec330383eaa369c2656d9ef9973e871d78a4e300d656_prof);

    }

    // line 137
    public function block_content($context, array $blocks = array())
    {
        $__internal_999b8bc3e277ba8e75882dc9f6757903d38346adf98dd1607cc3f3d0227fcb59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_999b8bc3e277ba8e75882dc9f6757903d38346adf98dd1607cc3f3d0227fcb59->enter($__internal_999b8bc3e277ba8e75882dc9f6757903d38346adf98dd1607cc3f3d0227fcb59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3068e4e16217797a30dd71fb2add685d855362471daf831b164516ff08def80f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3068e4e16217797a30dd71fb2add685d855362471daf831b164516ff08def80f->enter($__internal_3068e4e16217797a30dd71fb2add685d855362471daf831b164516ff08def80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 138
        echo "
";
        
        $__internal_3068e4e16217797a30dd71fb2add685d855362471daf831b164516ff08def80f->leave($__internal_3068e4e16217797a30dd71fb2add685d855362471daf831b164516ff08def80f_prof);

        
        $__internal_999b8bc3e277ba8e75882dc9f6757903d38346adf98dd1607cc3f3d0227fcb59->leave($__internal_999b8bc3e277ba8e75882dc9f6757903d38346adf98dd1607cc3f3d0227fcb59_prof);

    }

    public function getTemplateName()
    {
        return "SiteBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 138,  256 => 137,  238 => 4,  221 => 146,  207 => 144,  203 => 141,  200 => 140,  198 => 137,  76 => 17,  44 => 15,  40 => 9,  32 => 4,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <title>{% block title %}Welcome!{% endblock %}</title>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    {% stylesheets filter='cssrewrite'
    'public/css/bootstrap.css'
    'public/css/bootstrap-theme.min.css'
    'public/css/main.css'
    'public/css/boostrap-social.css'
    %}
    <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
    {% endstylesheets %}

    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>

</head>
<body>
<div id=\"top\">
    <div class='logo_bde'>
        <a href=\"#\"><img src=\"../public/img/logo_bde.jpg\" width=\"100\" height=\"100\"> </a>
    </div>
    <div class=\"msg_bde\">
        <h1>BDE CESI BORDEAUX</h1>
    </div>
    <div class=\"profil\">
        <a href=\"#\" class=\"dropdown-toggle square\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\" width=\"200\" height=\"200\"></span></a>
        <ul class=\"dropdown-menu\">
            <li>
                <a href=\"#\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\" id=\"basic-addon1\">@</span>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Username\" aria-describedby=\"basic-addon1\">
                    </div>
                </a>
                <a href=\"#\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\" id=\"basic-addon1\">MDP</span>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Password\" aria-describedby=\"basic-addon1\">
                    </div>
                </a>

            </li>
            <li><a href=\"#\">Proposez vos activités</a></li>
            <li><a href=\"#\">Archives</a></li>
        </ul>
    </div>
    <div class=\"basket\">
        <a class=\"square\" href=\"#\"><span class=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\" width=\"100\" height=\"100\"></span></a>
    </div>
</div>

<nav class=\"navbar navbar-cesi\">
    <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>
    </div>
    <div class=\"container-fluid\">
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"#\">ACCUEIL<span class=\"sr-only\">(current)</span></a></li>
                <li><a href=\"#\">Le BDE</a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Activités<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Planning</a></li>
                        <li><a href=\"#\">Proposez vos activités</a></li>
                        <li><a href=\"#\">Archives</a></li>
                    </ul>
                </li>
                <li><a href=\"#\">Associations</a></li>
                <li><a href=\"#\">Galerie</a></li>
                <li><a href=\"#\">Boutique</a></li>
            </ul>
            <form class=\"navbar-form navbar-right\">
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher\">
                </div>
                <button type=\"submit\" class=\"btn btn-default\">Envoyer</button>
            </form>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class=\"footer\">
    <div class=\"row\">
        <div class=\"col-md-5\">
            <h2 class=\"FooterTitle\">Nous contacter</h2>
            <p>Adresse : 60 rue de Maurian</p>
            <p>Blanquefort, France</p>
            <p>Téléphone : 06 69 69 69 69</p>
            <p>Email : bdecesibordeaux@viacesi.fr</p>

        </div>

        <div class=\"col-md-5\">
            <div class=\"HyperTextFooter\">
            <h2 class=\"FooterTitle\">BDE CESI BORDEAUX</h2>
            <p><a href=\"#\">L'équipe</a> </p>
            <p><a href=\"#\">Galerie</a> </p>
            <p><a href=\"#\">Boutique</a> </p>

</div>
        </div>

        <div class=\"col-md-5\">
            <h2 class=\"FooterTitle\">Notre réseau d'école</h2>
            <img src=\"../public/img/LogoAlternance.png\" class=\"logoFooter\" style=>
            <img src=\"../public/img/LogoCertification.jpg\" class=\"logoFooter\">
            <img src=\"../public/img/LogoCesi.png\" class=\"logoFooter\">
            <img src=\"../public/img/LogoEi.png\" class=\"logoFooter\">
            <img src=\"../public/img/LogoEntreprises.png\" class=\"logoFooter\">
            <img src=\"../public/img/LogoExia.png\" class=\"logoFooter\">
        </div>

        <div class=\"col-md-5\">
            <h2 class=\"FooterTitle\">Restez connecté</h2>
            <a class=\"btn btn-social-icon btn-lg btn-facebook\">
                <span class=\"fa fa-facebook\"></span>
            </a>
            <a class=\"btn btn-social-icon btn-lg btn-twitter\">
                <span class=\"fa fa-twitter\"></span>
            </a>

        </div>
    </div>
</div>
{% block content  %}

{% endblock %}

{%  javascripts filter='?yui_js'
    'public/js/bootstrap.js'
%}
<script type=\"text/javascript\" src=\"{{ asset_url }}\"></script>
{% endjavascripts %}

</body>


</html>


", "SiteBundle::base.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/SiteBundle/Resources/views/base.html.twig");
    }
}
