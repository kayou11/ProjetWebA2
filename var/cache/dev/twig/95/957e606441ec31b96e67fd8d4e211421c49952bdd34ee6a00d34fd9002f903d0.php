<?php

/* SiteBundle::base.html.twig */
class __TwigTemplate_3af9b46877ef9f925b9c3e455d7c17d6b07ec755e79ed92bbcee6a4694d74f54 extends Twig_Template
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
        $__internal_0c8d722fbc5a0710cee8780e8624cdbfe3a2b6304f6f6a84290991645a194460 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c8d722fbc5a0710cee8780e8624cdbfe3a2b6304f6f6a84290991645a194460->enter($__internal_0c8d722fbc5a0710cee8780e8624cdbfe3a2b6304f6f6a84290991645a194460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle::base.html.twig"));

        $__internal_ecdac1232b432b3ca43b7306d37e1c3e11c2b9301766ac8ac84d12c31502b7f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecdac1232b432b3ca43b7306d37e1c3e11c2b9301766ac8ac84d12c31502b7f5->enter($__internal_ecdac1232b432b3ca43b7306d37e1c3e11c2b9301766ac8ac84d12c31502b7f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle::base.html.twig"));

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
        <a href=\"#\"><img src=\" ../public/img/logo_bde.jpg\" width=\"100\" height=\"100\"> </a>
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
            echo "            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 31, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
            echo "
            ";
        }
        // line 33
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
        // line 48
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 49
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\"> Mon Profil</a>
                ";
            // line 50
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 51
                echo "                    <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_redirect");
                echo "\">Espace Admin</a>
                ";
            }
            // line 53
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
            ";
        } else {
            // line 55
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
            ";
        }
        // line 57
        echo "            </li>
            <li><a href=\"";
        // line 58
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
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_homepage");
        echo "\">ACCUEIL<span class=\"sr-only\">(current)</span></a></li>
                <li><a href=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_le_bde");
        echo "\">Le BDE</a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Activités<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_activite_prevues");
        echo "\">Planning</a></li>
                        <li><a href=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_activite");
        echo "\">Proposez vos activités</a></li>
                        <li><a href=\"";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_activite_archives");
        echo "\">Archives</a></li>
                    </ul>
                </li>
                <li><a href=\"";
        // line 89
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
        // line 101
        $this->displayBlock('content', $context, $blocks);
        // line 104
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
    </div>
    <footer>
";
        // line 145
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "04f180e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_04f180e_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/04f180e_bootstrap_1.js");
            // line 148
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 148, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "04f180e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_04f180e") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/04f180e.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 148, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 150
        echo "</body>


</html>


";
        
        $__internal_0c8d722fbc5a0710cee8780e8624cdbfe3a2b6304f6f6a84290991645a194460->leave($__internal_0c8d722fbc5a0710cee8780e8624cdbfe3a2b6304f6f6a84290991645a194460_prof);

        
        $__internal_ecdac1232b432b3ca43b7306d37e1c3e11c2b9301766ac8ac84d12c31502b7f5->leave($__internal_ecdac1232b432b3ca43b7306d37e1c3e11c2b9301766ac8ac84d12c31502b7f5_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_4920dee0a7cc71f1e5217dd242b9bd37c1723000ce52d40d467b3ed52d8cf3da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4920dee0a7cc71f1e5217dd242b9bd37c1723000ce52d40d467b3ed52d8cf3da->enter($__internal_4920dee0a7cc71f1e5217dd242b9bd37c1723000ce52d40d467b3ed52d8cf3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bc5cd6b932b37af3035aac0b6a26b5a9776ccdb5197529e8d1bc793fe6bf8a70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc5cd6b932b37af3035aac0b6a26b5a9776ccdb5197529e8d1bc793fe6bf8a70->enter($__internal_bc5cd6b932b37af3035aac0b6a26b5a9776ccdb5197529e8d1bc793fe6bf8a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Site BDE";
        
        $__internal_bc5cd6b932b37af3035aac0b6a26b5a9776ccdb5197529e8d1bc793fe6bf8a70->leave($__internal_bc5cd6b932b37af3035aac0b6a26b5a9776ccdb5197529e8d1bc793fe6bf8a70_prof);

        
        $__internal_4920dee0a7cc71f1e5217dd242b9bd37c1723000ce52d40d467b3ed52d8cf3da->leave($__internal_4920dee0a7cc71f1e5217dd242b9bd37c1723000ce52d40d467b3ed52d8cf3da_prof);

    }

    // line 8
    public function block_style($context, array $blocks = array())
    {
        $__internal_eb679cd950ad2274426bf1d014969727b7fea55c7e049d3b88ca7cf7eba55575 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb679cd950ad2274426bf1d014969727b7fea55c7e049d3b88ca7cf7eba55575->enter($__internal_eb679cd950ad2274426bf1d014969727b7fea55c7e049d3b88ca7cf7eba55575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_0b3e399a08835455a61a342c332b8203dd7362ce54a3ab2c23073aa91da0eb8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b3e399a08835455a61a342c332b8203dd7362ce54a3ab2c23073aa91da0eb8d->enter($__internal_0b3e399a08835455a61a342c332b8203dd7362ce54a3ab2c23073aa91da0eb8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        
        $__internal_0b3e399a08835455a61a342c332b8203dd7362ce54a3ab2c23073aa91da0eb8d->leave($__internal_0b3e399a08835455a61a342c332b8203dd7362ce54a3ab2c23073aa91da0eb8d_prof);

        
        $__internal_eb679cd950ad2274426bf1d014969727b7fea55c7e049d3b88ca7cf7eba55575->leave($__internal_eb679cd950ad2274426bf1d014969727b7fea55c7e049d3b88ca7cf7eba55575_prof);

    }

    // line 101
    public function block_content($context, array $blocks = array())
    {
        $__internal_26f9047b5dd443f6c701a02ae2fe7a2915d23bed5c12ad511515389cfc900d48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26f9047b5dd443f6c701a02ae2fe7a2915d23bed5c12ad511515389cfc900d48->enter($__internal_26f9047b5dd443f6c701a02ae2fe7a2915d23bed5c12ad511515389cfc900d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_fe4fa79ce687a3e5215861a2fa81a56124b1bb8edeb94ec9b20b500159c038d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe4fa79ce687a3e5215861a2fa81a56124b1bb8edeb94ec9b20b500159c038d9->enter($__internal_fe4fa79ce687a3e5215861a2fa81a56124b1bb8edeb94ec9b20b500159c038d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 102
        echo "
";
        
        $__internal_fe4fa79ce687a3e5215861a2fa81a56124b1bb8edeb94ec9b20b500159c038d9->leave($__internal_fe4fa79ce687a3e5215861a2fa81a56124b1bb8edeb94ec9b20b500159c038d9_prof);

        
        $__internal_26f9047b5dd443f6c701a02ae2fe7a2915d23bed5c12ad511515389cfc900d48->leave($__internal_26f9047b5dd443f6c701a02ae2fe7a2915d23bed5c12ad511515389cfc900d48_prof);

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
        return array (  326 => 102,  317 => 101,  300 => 8,  282 => 4,  266 => 150,  252 => 148,  248 => 145,  205 => 104,  203 => 101,  188 => 89,  182 => 86,  178 => 85,  174 => 84,  167 => 80,  163 => 79,  139 => 58,  136 => 57,  130 => 55,  124 => 53,  118 => 51,  116 => 50,  111 => 49,  109 => 48,  92 => 33,  86 => 31,  84 => 30,  67 => 15,  47 => 13,  42 => 9,  40 => 8,  33 => 4,  28 => 1,);
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
        <a href=\"#\"><img src=\" ../public/img/logo_bde.jpg\" width=\"100\" height=\"100\"> </a>
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
                        <li><a href=\"{{ path('site_activite_prevues') }}\">Planning</a></li>
                        <li><a href=\"{{ path('site_activite') }}\">Proposez vos activités</a></li>
                        <li><a href=\"{{ path('site_activite_archives') }}\">Archives</a></li>
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
    </div>
    <footer>
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
