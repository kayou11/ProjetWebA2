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
        $__internal_bf01c805a7cd607256f10b27c4168125f612968b47a48199cdb44c4886ce7914 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf01c805a7cd607256f10b27c4168125f612968b47a48199cdb44c4886ce7914->enter($__internal_bf01c805a7cd607256f10b27c4168125f612968b47a48199cdb44c4886ce7914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle::base.html.twig"));

        $__internal_cfa1c790dcbbc4081a74ff27acd1d9e7fd049120fdaa7509a31d88dd477a8c7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfa1c790dcbbc4081a74ff27acd1d9e7fd049120fdaa7509a31d88dd477a8c7f->enter($__internal_cfa1c790dcbbc4081a74ff27acd1d9e7fd049120fdaa7509a31d88dd477a8c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle::base.html.twig"));

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
            // asset "a080c53_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a080c53_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/a080c53_bootstrap_1.css");
            // line 16
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "a080c53_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a080c53_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/a080c53_bootstrap-theme.min_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "a080c53_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a080c53_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/a080c53_main_3.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "a080c53_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a080c53_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/a080c53_boostrap-social_4.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "a080c53_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a080c53_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/a080c53_index_5.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        } else {
            // asset "a080c53"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_a080c53") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/a080c53.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        }
        unset($context["asset_url"]);
        // line 18
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
";
        // line 94
        $this->displayBlock('content', $context, $blocks);
        // line 97
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
        // line 134
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "04f180e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_04f180e_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/04f180e_bootstrap_1.js");
            // line 137
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "04f180e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_04f180e") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/04f180e.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 139
        echo "
</body>


</html>


";
        
        $__internal_bf01c805a7cd607256f10b27c4168125f612968b47a48199cdb44c4886ce7914->leave($__internal_bf01c805a7cd607256f10b27c4168125f612968b47a48199cdb44c4886ce7914_prof);

        
        $__internal_cfa1c790dcbbc4081a74ff27acd1d9e7fd049120fdaa7509a31d88dd477a8c7f->leave($__internal_cfa1c790dcbbc4081a74ff27acd1d9e7fd049120fdaa7509a31d88dd477a8c7f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_d728db68f0d9810448e166991b1e756c29d90ce338e3486461e557e0ab25363c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d728db68f0d9810448e166991b1e756c29d90ce338e3486461e557e0ab25363c->enter($__internal_d728db68f0d9810448e166991b1e756c29d90ce338e3486461e557e0ab25363c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fd78c1a5fea185740d8df9de74929de4f099725d78b17b8f1820562d7b6c23d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd78c1a5fea185740d8df9de74929de4f099725d78b17b8f1820562d7b6c23d2->enter($__internal_fd78c1a5fea185740d8df9de74929de4f099725d78b17b8f1820562d7b6c23d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_fd78c1a5fea185740d8df9de74929de4f099725d78b17b8f1820562d7b6c23d2->leave($__internal_fd78c1a5fea185740d8df9de74929de4f099725d78b17b8f1820562d7b6c23d2_prof);

        
        $__internal_d728db68f0d9810448e166991b1e756c29d90ce338e3486461e557e0ab25363c->leave($__internal_d728db68f0d9810448e166991b1e756c29d90ce338e3486461e557e0ab25363c_prof);

    }

    // line 94
    public function block_content($context, array $blocks = array())
    {
        $__internal_1b81d3a567f506b8add05b9665171657fc4cd838f2447f05ac2c6eb006f2fda9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b81d3a567f506b8add05b9665171657fc4cd838f2447f05ac2c6eb006f2fda9->enter($__internal_1b81d3a567f506b8add05b9665171657fc4cd838f2447f05ac2c6eb006f2fda9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_aa412c3d79ed274afbae129fdaa104da2823aafc6e889f710cd5d3625d7a52d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa412c3d79ed274afbae129fdaa104da2823aafc6e889f710cd5d3625d7a52d5->enter($__internal_aa412c3d79ed274afbae129fdaa104da2823aafc6e889f710cd5d3625d7a52d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 95
        echo "
";
        
        $__internal_aa412c3d79ed274afbae129fdaa104da2823aafc6e889f710cd5d3625d7a52d5->leave($__internal_aa412c3d79ed274afbae129fdaa104da2823aafc6e889f710cd5d3625d7a52d5_prof);

        
        $__internal_1b81d3a567f506b8add05b9665171657fc4cd838f2447f05ac2c6eb006f2fda9->leave($__internal_1b81d3a567f506b8add05b9665171657fc4cd838f2447f05ac2c6eb006f2fda9_prof);

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
        return array (  262 => 95,  253 => 94,  236 => 4,  219 => 139,  205 => 137,  201 => 134,  162 => 97,  160 => 94,  82 => 18,  44 => 16,  40 => 9,  32 => 4,  27 => 1,);
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
    'public/css/bootstrap-theme.min.css'
    'public/css/main.css'
    'public/css/boostrap-social.css'
    'public/css/pages/index.css'
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
%}
<script type=\"text/javascript\" src=\"{{ asset_url }}\"></script>
{% endjavascripts %}

</body>


</html>


", "SiteBundle::base.html.twig", "C:\\MAMP\\htdocs\\ProjetWebA2\\src\\SiteBundle/Resources/views/base.html.twig");
    }
}
