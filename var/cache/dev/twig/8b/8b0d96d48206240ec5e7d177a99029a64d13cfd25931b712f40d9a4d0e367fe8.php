<?php

/* SiteBundle::base.html.twig */
class __TwigTemplate_3bab9fb941b3ea0cdc1a70ab734ca698dae5f4f6920370cdc89d0647dc70a8b2 extends Twig_Template
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
        $__internal_73a9927304e02518e8e46957f6efb103a17037c0f5952129dc60136ddc9f40d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73a9927304e02518e8e46957f6efb103a17037c0f5952129dc60136ddc9f40d5->enter($__internal_73a9927304e02518e8e46957f6efb103a17037c0f5952129dc60136ddc9f40d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle::base.html.twig"));

        $__internal_6c51c37e10a559c4aabd651d36db2d4e7d62b0d0fcb05ca76d03fc84072c299d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c51c37e10a559c4aabd651d36db2d4e7d62b0d0fcb05ca76d03fc84072c299d->enter($__internal_6c51c37e10a559c4aabd651d36db2d4e7d62b0d0fcb05ca76d03fc84072c299d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle::base.html.twig"));

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
            // asset "4ef02f9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4ef02f9_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/4ef02f9_bootstrap_1.css");
            // line 17
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 17, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "4ef02f9_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4ef02f9_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/4ef02f9_bootstrap-theme_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 17, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "4ef02f9_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4ef02f9_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/4ef02f9_main_3.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 17, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "4ef02f9_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4ef02f9_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/4ef02f9_boostrap-social_4.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 17, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "4ef02f9_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4ef02f9_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/4ef02f9_index_5.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 17, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "4ef02f9_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4ef02f9_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/4ef02f9_bootstrap-gallery_6.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 17, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        } else {
            // asset "4ef02f9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_4ef02f9") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/4ef02f9.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 17, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        }
        unset($context["asset_url"]);
        // line 19
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
                <li><a href=\"";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_galerie");
        echo "\">Galerie</a></li>
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
";
        // line 95
        $this->displayBlock('content', $context, $blocks);
        // line 98
        echo "<div class=\"footer\">
    <div class=\"content\">
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
        // line 135
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a900f2a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a900f2a_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a900f2a_bootstrap_1.js");
            // line 139
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 139, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
";
            // asset "a900f2a_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a900f2a_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a900f2a_bootstrap-gallery_2.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 139, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "a900f2a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a900f2a") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/a900f2a.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 139, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 141
        echo "
</body>


</html>


";
        
        $__internal_73a9927304e02518e8e46957f6efb103a17037c0f5952129dc60136ddc9f40d5->leave($__internal_73a9927304e02518e8e46957f6efb103a17037c0f5952129dc60136ddc9f40d5_prof);

        
        $__internal_6c51c37e10a559c4aabd651d36db2d4e7d62b0d0fcb05ca76d03fc84072c299d->leave($__internal_6c51c37e10a559c4aabd651d36db2d4e7d62b0d0fcb05ca76d03fc84072c299d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c6a7be80bd158cc64fadd272f49813ff0b49230d9b521ed456b737585e275c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c6a7be80bd158cc64fadd272f49813ff0b49230d9b521ed456b737585e275c1->enter($__internal_3c6a7be80bd158cc64fadd272f49813ff0b49230d9b521ed456b737585e275c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c205b68aa29badfc4faa6de6ff1f207ce9984dbfd077f352e4a1f951704501b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c205b68aa29badfc4faa6de6ff1f207ce9984dbfd077f352e4a1f951704501b3->enter($__internal_c205b68aa29badfc4faa6de6ff1f207ce9984dbfd077f352e4a1f951704501b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c205b68aa29badfc4faa6de6ff1f207ce9984dbfd077f352e4a1f951704501b3->leave($__internal_c205b68aa29badfc4faa6de6ff1f207ce9984dbfd077f352e4a1f951704501b3_prof);

        
        $__internal_3c6a7be80bd158cc64fadd272f49813ff0b49230d9b521ed456b737585e275c1->leave($__internal_3c6a7be80bd158cc64fadd272f49813ff0b49230d9b521ed456b737585e275c1_prof);

    }

    // line 95
    public function block_content($context, array $blocks = array())
    {
        $__internal_e6aa8d8c30b91c3b98127403c6174c7340730a225317d29bcb17f5c07b02fd64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6aa8d8c30b91c3b98127403c6174c7340730a225317d29bcb17f5c07b02fd64->enter($__internal_e6aa8d8c30b91c3b98127403c6174c7340730a225317d29bcb17f5c07b02fd64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6736631b8d9128e94a65a6a8fd341975a2d9c4765fd06d620de7ed0f52568f2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6736631b8d9128e94a65a6a8fd341975a2d9c4765fd06d620de7ed0f52568f2c->enter($__internal_6736631b8d9128e94a65a6a8fd341975a2d9c4765fd06d620de7ed0f52568f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 96
        echo "
";
        
        $__internal_6736631b8d9128e94a65a6a8fd341975a2d9c4765fd06d620de7ed0f52568f2c->leave($__internal_6736631b8d9128e94a65a6a8fd341975a2d9c4765fd06d620de7ed0f52568f2c_prof);

        
        $__internal_e6aa8d8c30b91c3b98127403c6174c7340730a225317d29bcb17f5c07b02fd64->leave($__internal_e6aa8d8c30b91c3b98127403c6174c7340730a225317d29bcb17f5c07b02fd64_prof);

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
        return array (  277 => 96,  268 => 95,  251 => 4,  234 => 141,  214 => 139,  210 => 135,  171 => 98,  169 => 95,  154 => 83,  88 => 19,  44 => 17,  40 => 9,  32 => 4,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <title>{% block title %}{% endblock %}</title>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    {% stylesheets filter='cssrewrite'
    'public/css/bootstrap.css'
    'public/css/bootstrap-theme.css'
    'public/css/main.css'
    'public/css/boostrap-social.css'
    'public/css/pages/index.css'
    'public/css/bootstrap-gallery.css'
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
                <li><a href=\"{{ path('site_galerie') }}\">Galerie</a></li>
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
{% block content  %}

{% endblock %}
<div class=\"footer\">
    <div class=\"content\">
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
{%  javascripts filter='?yui_js'
    'public/js/bootstrap.js'
    'public/js/bootstrap-gallery.js'
%}
<script type=\"text/javascript\" src=\"{{ asset_url }}\"></script>
{% endjavascripts %}

</body>


</html>


", "SiteBundle::base.html.twig", "C:\\MAMP\\htdocs\\ProjetWebA2\\src\\SiteBundle/Resources/views/base.html.twig");
    }
}
