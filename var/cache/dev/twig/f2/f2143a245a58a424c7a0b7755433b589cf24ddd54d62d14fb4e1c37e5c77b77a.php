<?php

/* SiteBundle::base.html.twig */
class __TwigTemplate_833ec3560ad5da00345aa593345b72744f4371b87bd8dd3824ac935af6a83cd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'style' => array($this, 'block_style'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8792519e156918bdb8fb7b784e69cb2cf3a01a7fe836b54d2fe893f55e5b621b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8792519e156918bdb8fb7b784e69cb2cf3a01a7fe836b54d2fe893f55e5b621b->enter($__internal_8792519e156918bdb8fb7b784e69cb2cf3a01a7fe836b54d2fe893f55e5b621b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle::base.html.twig"));

        $__internal_481ecb02bbe2a237b54a199b4a50feab7055686a93d3af8f62cd1cccff58ce4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_481ecb02bbe2a237b54a199b4a50feab7055686a93d3af8f62cd1cccff58ce4b->enter($__internal_481ecb02bbe2a237b54a199b4a50feab7055686a93d3af8f62cd1cccff58ce4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle::base.html.twig"));

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
        // line 8
        $this->displayBlock('style', $context, $blocks);
        // line 9
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "57633a6_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_57633a6_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/57633a6_bootstrap_1.css");
            // line 13
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "57633a6_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_57633a6_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/57633a6_main_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        } else {
            // asset "57633a6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_57633a6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/57633a6.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        }
        unset($context["asset_url"]);
        // line 15
        echo "
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
</head>
<body>
<div id=\"top\">
    <div class='logo_bde'>
        <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_homepage");
        echo "\"><img src=\" ../../public/img/logo_bde.jpg\" width=\"100\" height=\"100\"> </a>
    </div>
    <div class=\"msg_bde\">
        <h1>BDE CESI BORDEAUX</h1>
    </div>
    <div class=\"profil\">
        <a href=\"#\" class=\"dropdown-toggle square\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\" width=\"200\" height=\"200\"></span>
            <br>
            ";
        // line 30
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 31
            echo "                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 31, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
            echo "
            ";
        }
        // line 33
        echo "        </a>
        <ul class=\"dropdown-menu\">
            <li>
            ";
        // line 36
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 37
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\"> Mon Profil</a>
                ";
            // line 38
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 39
                echo "                    <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_redirect");
                echo "\">Espace Admin</a>
                ";
            }
            // line 41
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
            ";
        } else {
            // line 43
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
            ";
        }
        // line 45
        echo "            </li>
            <li><a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\"> Pas encore de compte ? Inscrivez-vous</a></li>
        </ul>
    </div>
    <div class=\"basket\">
        <a class=\"square\" href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_shop_panier");
        echo "\"><span class=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\" width=\"100\" height=\"100\"></span></a>
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
                <li class=\"active\"><a href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_homepage");
        echo "\">ACCUEIL<span class=\"sr-only\">(current)</span></a></li>
                <li><a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_le_bde");
        echo "\">Le BDE</a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Activités<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_activite_prevues");
        echo "\">Planning</a></li>
                        <li><a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_activite");
        echo "\">Proposez vos activités</a></li>
                        <li><a href=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_activite_archives");
        echo "\">Archives</a></li>
                    </ul>
                </li>
                <li><a href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_galerie");
        echo "\">Galerie</a></li>
                <li><a href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_shop");
        echo "\">Boutique</a></li>
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
        // line 89
        $this->displayBlock('content', $context, $blocks);
        // line 92
        echo "<footer>
    <div class=\"content\">
        <div class=\"row\">
            <div class=\"col-lg-14 col-md-offset-1\">
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
                        <p><a href=\"";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_le_bde");
        echo "\">L'équipe</a> </p>
                        <p><a href=\"";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_galerie");
        echo "\">Galerie</a> </p>
                        <p><a href=\"";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_shop");
        echo "\">Boutique</a> </p>
                    </div>
                </div>
                <div class=\"col-md-5\">
                    <h2 class=\"FooterTitle\">Notre réseau d'école</h2>
                    <img src=\"../../public/img/LogoAlternance.png\" class=\"logoFooter\">
                    <img src=\"../../public/img/LogoCertification.jpg\" class=\"logoFooter\">
                    <img src=\"../../public/img/LogoCesi.png\" class=\"logoFooter\">
                    <img src=\"../../public/img/LogoEi.png\" class=\"logoFooter\">
                    <img src=\"../../public/img/LogoEntreprises.png\" class=\"logoFooter\">
                    <img src=\"../../public/img/LogoExia.png\" class=\"logoFooter\">
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
    </div>
    <footer>
";
        // line 133
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "04f180e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_04f180e_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/04f180e_bootstrap_1.js");
            // line 136
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 136, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "04f180e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_04f180e") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/04f180e.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 136, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 138
        echo "</body>
</html>";
        
        $__internal_8792519e156918bdb8fb7b784e69cb2cf3a01a7fe836b54d2fe893f55e5b621b->leave($__internal_8792519e156918bdb8fb7b784e69cb2cf3a01a7fe836b54d2fe893f55e5b621b_prof);

        
        $__internal_481ecb02bbe2a237b54a199b4a50feab7055686a93d3af8f62cd1cccff58ce4b->leave($__internal_481ecb02bbe2a237b54a199b4a50feab7055686a93d3af8f62cd1cccff58ce4b_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4eda6fc216d5339eb5ca244eccd17644c0082c4b6c74a68db3d04f1c5210d85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4eda6fc216d5339eb5ca244eccd17644c0082c4b6c74a68db3d04f1c5210d85->enter($__internal_d4eda6fc216d5339eb5ca244eccd17644c0082c4b6c74a68db3d04f1c5210d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ace6a12a6191eb1a209352f79bca4a16c5a972244715156e75b7701c8dc7f6bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ace6a12a6191eb1a209352f79bca4a16c5a972244715156e75b7701c8dc7f6bd->enter($__internal_ace6a12a6191eb1a209352f79bca4a16c5a972244715156e75b7701c8dc7f6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Site BDE";
        
        $__internal_ace6a12a6191eb1a209352f79bca4a16c5a972244715156e75b7701c8dc7f6bd->leave($__internal_ace6a12a6191eb1a209352f79bca4a16c5a972244715156e75b7701c8dc7f6bd_prof);

        
        $__internal_d4eda6fc216d5339eb5ca244eccd17644c0082c4b6c74a68db3d04f1c5210d85->leave($__internal_d4eda6fc216d5339eb5ca244eccd17644c0082c4b6c74a68db3d04f1c5210d85_prof);

    }

    // line 8
    public function block_style($context, array $blocks = array())
    {
        $__internal_1c8d94367624cd6755c4717a9540b0d5352667346cbf1d19443a030e097b60fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c8d94367624cd6755c4717a9540b0d5352667346cbf1d19443a030e097b60fd->enter($__internal_1c8d94367624cd6755c4717a9540b0d5352667346cbf1d19443a030e097b60fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_6a65d23f66f111eff3da6961e30c5e96650565fee7f4a1b903a581edd947905b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a65d23f66f111eff3da6961e30c5e96650565fee7f4a1b903a581edd947905b->enter($__internal_6a65d23f66f111eff3da6961e30c5e96650565fee7f4a1b903a581edd947905b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        
        $__internal_6a65d23f66f111eff3da6961e30c5e96650565fee7f4a1b903a581edd947905b->leave($__internal_6a65d23f66f111eff3da6961e30c5e96650565fee7f4a1b903a581edd947905b_prof);

        
        $__internal_1c8d94367624cd6755c4717a9540b0d5352667346cbf1d19443a030e097b60fd->leave($__internal_1c8d94367624cd6755c4717a9540b0d5352667346cbf1d19443a030e097b60fd_prof);

    }

    // line 89
    public function block_content($context, array $blocks = array())
    {
        $__internal_fc3b19de50f1ed22136ac8260c0faf4453474f197964d34fe1bbf7b368e2d462 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc3b19de50f1ed22136ac8260c0faf4453474f197964d34fe1bbf7b368e2d462->enter($__internal_fc3b19de50f1ed22136ac8260c0faf4453474f197964d34fe1bbf7b368e2d462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_22497869014c2e5bf386134ba22eb3d035a5da33e3a2ef345eef316e48ecb4e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22497869014c2e5bf386134ba22eb3d035a5da33e3a2ef345eef316e48ecb4e2->enter($__internal_22497869014c2e5bf386134ba22eb3d035a5da33e3a2ef345eef316e48ecb4e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 90
        echo "
";
        
        $__internal_22497869014c2e5bf386134ba22eb3d035a5da33e3a2ef345eef316e48ecb4e2->leave($__internal_22497869014c2e5bf386134ba22eb3d035a5da33e3a2ef345eef316e48ecb4e2_prof);

        
        $__internal_fc3b19de50f1ed22136ac8260c0faf4453474f197964d34fe1bbf7b368e2d462->leave($__internal_fc3b19de50f1ed22136ac8260c0faf4453474f197964d34fe1bbf7b368e2d462_prof);

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
        return array (  327 => 90,  318 => 89,  301 => 8,  283 => 4,  272 => 138,  258 => 136,  254 => 133,  226 => 108,  222 => 107,  218 => 106,  202 => 92,  200 => 89,  186 => 78,  182 => 77,  176 => 74,  172 => 73,  168 => 72,  161 => 68,  157 => 67,  137 => 50,  130 => 46,  127 => 45,  121 => 43,  115 => 41,  109 => 39,  107 => 38,  102 => 37,  100 => 36,  95 => 33,  89 => 31,  87 => 30,  76 => 22,  67 => 15,  47 => 13,  42 => 9,  40 => 8,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <title>{% block title %}Site BDE{% endblock %}</title>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% block style %}{% endblock %}
    {% stylesheets filter='cssrewrite'
        'public/css/bootstrap.css'
        'public/css/main.css'
    %}
    <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
    {% endstylesheets %}

    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
</head>
<body>
<div id=\"top\">
    <div class='logo_bde'>
        <a href=\"{{ path('site_homepage') }}\"><img src=\" ../../public/img/logo_bde.jpg\" width=\"100\" height=\"100\"> </a>
    </div>
    <div class=\"msg_bde\">
        <h1>BDE CESI BORDEAUX</h1>
    </div>
    <div class=\"profil\">
        <a href=\"#\" class=\"dropdown-toggle square\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\" width=\"200\" height=\"200\"></span>
            <br>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ app.user.username }}
            {% endif %}
        </a>
        <ul class=\"dropdown-menu\">
            <li>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                <a href=\"{{ path('fos_user_profile_show') }}\"> Mon Profil</a>
                {% if is_granted(\"ROLE_ADMIN\") %}
                    <a href=\"{{ path('sonata_admin_redirect') }}\">Espace Admin</a>
                {% endif %}
                    <a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">Connexion</a>
            {% endif %}
            </li>
            <li><a href=\"{{ path('fos_user_registration_register') }}\"> Pas encore de compte ? Inscrivez-vous</a></li>
        </ul>
    </div>
    <div class=\"basket\">
        <a class=\"square\" href=\"{{ path('site_shop_panier') }}\"><span class=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\" width=\"100\" height=\"100\"></span></a>
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
                <li class=\"active\"><a href=\"{{ path('site_homepage') }}\">ACCUEIL<span class=\"sr-only\">(current)</span></a></li>
                <li><a href=\"{{ path('site_le_bde') }}\">Le BDE</a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Activités<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"{{ path('site_activite_prevues') }}\">Planning</a></li>
                        <li><a href=\"{{ path('site_activite') }}\">Proposez vos activités</a></li>
                        <li><a href=\"{{ path('site_activite_archives') }}\">Archives</a></li>
                    </ul>
                </li>
                <li><a href=\"{{ path('site_galerie')}}\">Galerie</a></li>
                <li><a href=\"{{ path('site_shop') }}\">Boutique</a></li>
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
<footer>
    <div class=\"content\">
        <div class=\"row\">
            <div class=\"col-lg-14 col-md-offset-1\">
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
                        <p><a href=\"{{ path('site_le_bde') }}\">L'équipe</a> </p>
                        <p><a href=\"{{ path('site_galerie')}}\">Galerie</a> </p>
                        <p><a href=\"{{ path('site_shop') }}\">Boutique</a> </p>
                    </div>
                </div>
                <div class=\"col-md-5\">
                    <h2 class=\"FooterTitle\">Notre réseau d'école</h2>
                    <img src=\"../../public/img/LogoAlternance.png\" class=\"logoFooter\">
                    <img src=\"../../public/img/LogoCertification.jpg\" class=\"logoFooter\">
                    <img src=\"../../public/img/LogoCesi.png\" class=\"logoFooter\">
                    <img src=\"../../public/img/LogoEi.png\" class=\"logoFooter\">
                    <img src=\"../../public/img/LogoEntreprises.png\" class=\"logoFooter\">
                    <img src=\"../../public/img/LogoExia.png\" class=\"logoFooter\">
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
    </div>
    <footer>
{%  javascripts filter='?yui_js'
    'public/js/bootstrap.js'
%}
<script type=\"text/javascript\" src=\"{{ asset_url }}\"></script>
{% endjavascripts %}
</body>
</html>", "SiteBundle::base.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/SiteBundle/Resources/views/base.html.twig");
    }
}
