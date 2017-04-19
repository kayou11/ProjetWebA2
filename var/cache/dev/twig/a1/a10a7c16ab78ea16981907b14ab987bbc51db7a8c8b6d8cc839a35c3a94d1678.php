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
            'style' => array($this, 'block_style'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04f36322b628d17ac0c87caf8de307d93718e5f1ec7932eb1f8b1751b0ed99a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04f36322b628d17ac0c87caf8de307d93718e5f1ec7932eb1f8b1751b0ed99a0->enter($__internal_04f36322b628d17ac0c87caf8de307d93718e5f1ec7932eb1f8b1751b0ed99a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle::base.html.twig"));

        $__internal_a32f1be809707c760147340a2eb8d169c39e0c6a06c58760ff460359c2ea278e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a32f1be809707c760147340a2eb8d169c39e0c6a06c58760ff460359c2ea278e->enter($__internal_a32f1be809707c760147340a2eb8d169c39e0c6a06c58760ff460359c2ea278e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle::base.html.twig"));

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
        <a href=\"#\" class=\"dropdown-toggle square\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\" width=\"200\" height=\"200\"></span>
            <br>
            ";
        // line 34
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 35
            echo "            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 35, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
            echo "
            ";
        }
        // line 37
        echo "        </a>
        <ul class=\"dropdown-menu\">
            <li>
             <!--   <a href=\"#\">
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
                </a>-->
            ";
        // line 52
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 53
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\"> Mon Profil</a>
                <a href=\"";
            // line 54
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                ";
        } else {
            // line 56
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                ";
        }
        // line 58
        echo "            </li>
            <li><a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\"> Pas encore de compte ? Inscrivez-vous</a></li>
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
                <li class=\"active\"><a href=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_homepage");
        echo "\">ACCUEIL<span class=\"sr-only\">(current)</span></a></li>
                <li><a href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_le_bde");
        echo "\">Le BDE</a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Activités<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Planning</a></li>
                        <li><a href=\"#\">Proposez vos activités</a></li>
                        <li><a href=\"#\">Archives</a></li>
                    </ul>
                </li>
                <li><a href=\"";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_galerie");
        echo "\">Galerie</a></li>
                <li><a href=\"\">Boutique</a></li>
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
        // line 102
        $this->displayBlock('content', $context, $blocks);
        // line 105
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
                <img src=\"../public/img/LogoAlternance.png\" class=\"logoFooter\">
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
        // line 142
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "04f180e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_04f180e_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/04f180e_bootstrap_1.js");
            // line 145
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 145, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "04f180e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_04f180e") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/04f180e.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 145, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 147
        echo "
</body>


</html>


";
        
        $__internal_04f36322b628d17ac0c87caf8de307d93718e5f1ec7932eb1f8b1751b0ed99a0->leave($__internal_04f36322b628d17ac0c87caf8de307d93718e5f1ec7932eb1f8b1751b0ed99a0_prof);

        
        $__internal_a32f1be809707c760147340a2eb8d169c39e0c6a06c58760ff460359c2ea278e->leave($__internal_a32f1be809707c760147340a2eb8d169c39e0c6a06c58760ff460359c2ea278e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_058776c36ae793863b82fd47aa5657059997ad71200b595c448f8cfd30ef655d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_058776c36ae793863b82fd47aa5657059997ad71200b595c448f8cfd30ef655d->enter($__internal_058776c36ae793863b82fd47aa5657059997ad71200b595c448f8cfd30ef655d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d6ea048ad880d8425e833b2ce4d7fdcf9368df77c8b203f6e0a4ae2d69bfda83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6ea048ad880d8425e833b2ce4d7fdcf9368df77c8b203f6e0a4ae2d69bfda83->enter($__internal_d6ea048ad880d8425e833b2ce4d7fdcf9368df77c8b203f6e0a4ae2d69bfda83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d6ea048ad880d8425e833b2ce4d7fdcf9368df77c8b203f6e0a4ae2d69bfda83->leave($__internal_d6ea048ad880d8425e833b2ce4d7fdcf9368df77c8b203f6e0a4ae2d69bfda83_prof);

        
        $__internal_058776c36ae793863b82fd47aa5657059997ad71200b595c448f8cfd30ef655d->leave($__internal_058776c36ae793863b82fd47aa5657059997ad71200b595c448f8cfd30ef655d_prof);

    }

    // line 8
    public function block_style($context, array $blocks = array())
    {
        $__internal_fafe561e85e87702eb3d0c96d9c601b00fd0112f62358b6b6d9c3d1b29ecddc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fafe561e85e87702eb3d0c96d9c601b00fd0112f62358b6b6d9c3d1b29ecddc2->enter($__internal_fafe561e85e87702eb3d0c96d9c601b00fd0112f62358b6b6d9c3d1b29ecddc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_3bde645b70ef254f2357d5f84a0cfdd97e00631540d24ee2c6267f4eedafccd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bde645b70ef254f2357d5f84a0cfdd97e00631540d24ee2c6267f4eedafccd1->enter($__internal_3bde645b70ef254f2357d5f84a0cfdd97e00631540d24ee2c6267f4eedafccd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        
        $__internal_3bde645b70ef254f2357d5f84a0cfdd97e00631540d24ee2c6267f4eedafccd1->leave($__internal_3bde645b70ef254f2357d5f84a0cfdd97e00631540d24ee2c6267f4eedafccd1_prof);

        
        $__internal_fafe561e85e87702eb3d0c96d9c601b00fd0112f62358b6b6d9c3d1b29ecddc2->leave($__internal_fafe561e85e87702eb3d0c96d9c601b00fd0112f62358b6b6d9c3d1b29ecddc2_prof);

    }

    // line 102
    public function block_content($context, array $blocks = array())
    {
        $__internal_0bc8e1525cd6810795db92c980383e621fbc7f3c42dfe9cb0682442c3f270a78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bc8e1525cd6810795db92c980383e621fbc7f3c42dfe9cb0682442c3f270a78->enter($__internal_0bc8e1525cd6810795db92c980383e621fbc7f3c42dfe9cb0682442c3f270a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_66f62e68b5bef64de3b57932fe2d42ffb4a603b6d588db14187b0bf41adeceeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66f62e68b5bef64de3b57932fe2d42ffb4a603b6d588db14187b0bf41adeceeb->enter($__internal_66f62e68b5bef64de3b57932fe2d42ffb4a603b6d588db14187b0bf41adeceeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 103
        echo "
";
        
        $__internal_66f62e68b5bef64de3b57932fe2d42ffb4a603b6d588db14187b0bf41adeceeb->leave($__internal_66f62e68b5bef64de3b57932fe2d42ffb4a603b6d588db14187b0bf41adeceeb_prof);

        
        $__internal_0bc8e1525cd6810795db92c980383e621fbc7f3c42dfe9cb0682442c3f270a78->leave($__internal_0bc8e1525cd6810795db92c980383e621fbc7f3c42dfe9cb0682442c3f270a78_prof);

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
        return array (  323 => 103,  314 => 102,  297 => 8,  280 => 4,  263 => 147,  249 => 145,  245 => 142,  206 => 105,  204 => 102,  189 => 90,  177 => 81,  173 => 80,  149 => 59,  146 => 58,  140 => 56,  135 => 54,  130 => 53,  128 => 52,  111 => 37,  105 => 35,  103 => 34,  85 => 18,  47 => 16,  42 => 9,  40 => 8,  33 => 4,  28 => 1,);
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
    {% block style %}{% endblock %}
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
        <a href=\"#\" class=\"dropdown-toggle square\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\" width=\"200\" height=\"200\"></span>
            <br>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
            {{ app.user.username }}
            {% endif %}
        </a>
        <ul class=\"dropdown-menu\">
            <li>
             <!--   <a href=\"#\">
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
                </a>-->
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                <a href=\"{{ path('fos_user_profile_show') }}\"> Mon Profil</a>
                <a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a>
                {% else %}
                    <a href=\"{{ path('fos_user_security_login') }}\">Connexion</a>
                {% endif %}
            </li>
            <li><a href=\"{{ path('fos_user_registration_register') }}\"> Pas encore de compte ? Inscrivez-vous</a></li>
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
                <li class=\"active\"><a href=\"{{ path('site_homepage') }}\">ACCUEIL<span class=\"sr-only\">(current)</span></a></li>
                <li><a href=\"{{ path('site_le_bde') }}\">Le BDE</a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Activités<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Planning</a></li>
                        <li><a href=\"#\">Proposez vos activités</a></li>
                        <li><a href=\"#\">Archives</a></li>
                    </ul>
                </li>
                <li><a href=\"{{ path('site_galerie')}}\">Galerie</a></li>
                <li><a href=\"\">Boutique</a></li>
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
                <img src=\"../public/img/LogoAlternance.png\" class=\"logoFooter\">
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


", "SiteBundle::base.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/SiteBundle/Resources/views/base.html.twig");
    }
}
