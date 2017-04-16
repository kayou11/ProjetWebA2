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
        $__internal_3e1260f008ddadf543504e46aaf3b1693b329a07bed79cca48d7830c5a43102d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e1260f008ddadf543504e46aaf3b1693b329a07bed79cca48d7830c5a43102d->enter($__internal_3e1260f008ddadf543504e46aaf3b1693b329a07bed79cca48d7830c5a43102d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle::base.html.twig"));

        $__internal_b8a1180581a7b1bcea3c2506b347013067a47287298b1649be74292191065d6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a1180581a7b1bcea3c2506b347013067a47287298b1649be74292191065d6f->enter($__internal_b8a1180581a7b1bcea3c2506b347013067a47287298b1649be74292191065d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle::base.html.twig"));

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
            // asset "6feb9a0_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_6feb9a0_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/6feb9a0_bootstrap_1.css");
            // line 14
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 14, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "6feb9a0_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_6feb9a0_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/6feb9a0_bootstrap-theme.min_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 14, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "6feb9a0_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_6feb9a0_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/6feb9a0_main_3.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 14, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        } else {
            // asset "6feb9a0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_6feb9a0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/6feb9a0.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 14, $this->getSourceContext()); })()), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        }
        unset($context["asset_url"]);
        // line 16
        echo "
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
            <h2 class=\"FooterTitle\">BDE CESI BORDEAUX</h2>
            <p><a href=\"#\">L'équipe</a> </p>
            <p><a href=\"#\">Galerie</a> </p>
            <p><a href=\"#\">Boutique</a> </p>

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
            <h2 class=\"FooterTitle\">Nous contacter</h2>
            <p>Adresse : 60 rue de Maurian</p>
            <p>Blanquefort, France</p>
            <p>Téléphone : 06 69 69 69 69</p>
            <p>Email : bdecesibordeaux@viacesi.fr</p>

        </div>
    </div>
</div>
";
        // line 131
        $this->displayBlock('content', $context, $blocks);
        // line 134
        echo "
";
        // line 135
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "04f180e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_04f180e_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/04f180e_bootstrap_1.js");
            // line 138
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 138, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "04f180e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_04f180e") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/04f180e.js");
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 138, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 140
        echo "
</body>


</html>


";
        
        $__internal_3e1260f008ddadf543504e46aaf3b1693b329a07bed79cca48d7830c5a43102d->leave($__internal_3e1260f008ddadf543504e46aaf3b1693b329a07bed79cca48d7830c5a43102d_prof);

        
        $__internal_b8a1180581a7b1bcea3c2506b347013067a47287298b1649be74292191065d6f->leave($__internal_b8a1180581a7b1bcea3c2506b347013067a47287298b1649be74292191065d6f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_dee49637687c1ff3b5477f84690b4ba6bbe6d4646c378566c17e6f12d81e2ff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dee49637687c1ff3b5477f84690b4ba6bbe6d4646c378566c17e6f12d81e2ff7->enter($__internal_dee49637687c1ff3b5477f84690b4ba6bbe6d4646c378566c17e6f12d81e2ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_48d3f788e10f1d008d66a1e6c6047f4135173749e4de10b01056d077a2704d7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48d3f788e10f1d008d66a1e6c6047f4135173749e4de10b01056d077a2704d7f->enter($__internal_48d3f788e10f1d008d66a1e6c6047f4135173749e4de10b01056d077a2704d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_48d3f788e10f1d008d66a1e6c6047f4135173749e4de10b01056d077a2704d7f->leave($__internal_48d3f788e10f1d008d66a1e6c6047f4135173749e4de10b01056d077a2704d7f_prof);

        
        $__internal_dee49637687c1ff3b5477f84690b4ba6bbe6d4646c378566c17e6f12d81e2ff7->leave($__internal_dee49637687c1ff3b5477f84690b4ba6bbe6d4646c378566c17e6f12d81e2ff7_prof);

    }

    // line 131
    public function block_content($context, array $blocks = array())
    {
        $__internal_4ff719b9fb2fd5d318d8117d8220ed84b91f10d937057cfb46c463c88e0359cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ff719b9fb2fd5d318d8117d8220ed84b91f10d937057cfb46c463c88e0359cc->enter($__internal_4ff719b9fb2fd5d318d8117d8220ed84b91f10d937057cfb46c463c88e0359cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a4d5ca558b97df98c1eccdbe323e707add4726cd4bb275c8e3d04d4f78a86423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4d5ca558b97df98c1eccdbe323e707add4726cd4bb275c8e3d04d4f78a86423->enter($__internal_a4d5ca558b97df98c1eccdbe323e707add4726cd4bb275c8e3d04d4f78a86423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 132
        echo "
";
        
        $__internal_a4d5ca558b97df98c1eccdbe323e707add4726cd4bb275c8e3d04d4f78a86423->leave($__internal_a4d5ca558b97df98c1eccdbe323e707add4726cd4bb275c8e3d04d4f78a86423_prof);

        
        $__internal_4ff719b9fb2fd5d318d8117d8220ed84b91f10d937057cfb46c463c88e0359cc->leave($__internal_4ff719b9fb2fd5d318d8117d8220ed84b91f10d937057cfb46c463c88e0359cc_prof);

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
        return array (  254 => 132,  245 => 131,  227 => 4,  210 => 140,  196 => 138,  192 => 135,  189 => 134,  187 => 131,  70 => 16,  44 => 14,  40 => 9,  32 => 4,  27 => 1,);
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
    %}
    <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
    {% endstylesheets %}

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
            <h2 class=\"FooterTitle\">BDE CESI BORDEAUX</h2>
            <p><a href=\"#\">L'équipe</a> </p>
            <p><a href=\"#\">Galerie</a> </p>
            <p><a href=\"#\">Boutique</a> </p>

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
            <h2 class=\"FooterTitle\">Nous contacter</h2>
            <p>Adresse : 60 rue de Maurian</p>
            <p>Blanquefort, France</p>
            <p>Téléphone : 06 69 69 69 69</p>
            <p>Email : bdecesibordeaux@viacesi.fr</p>

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
