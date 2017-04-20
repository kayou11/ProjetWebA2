<?php

/* SiteBundle:Pages:activites.html.twig */
class __TwigTemplate_cfa15f3026c722176311e394eba4c6156aff8b487daed3b3bec7b55e8760db81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SiteBundle::base.html.twig", "SiteBundle:Pages:activites.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SiteBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6bce6f35bdf0215f42ae30f83450808e97970520e55ff28daffacc8b0a5a166c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bce6f35bdf0215f42ae30f83450808e97970520e55ff28daffacc8b0a5a166c->enter($__internal_6bce6f35bdf0215f42ae30f83450808e97970520e55ff28daffacc8b0a5a166c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:activites.html.twig"));

        $__internal_1ac644a1d11958a9f2aea003a3328adfa278bde5028cc42c3361bb00b36fb3d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ac644a1d11958a9f2aea003a3328adfa278bde5028cc42c3361bb00b36fb3d3->enter($__internal_1ac644a1d11958a9f2aea003a3328adfa278bde5028cc42c3361bb00b36fb3d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:activites.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bce6f35bdf0215f42ae30f83450808e97970520e55ff28daffacc8b0a5a166c->leave($__internal_6bce6f35bdf0215f42ae30f83450808e97970520e55ff28daffacc8b0a5a166c_prof);

        
        $__internal_1ac644a1d11958a9f2aea003a3328adfa278bde5028cc42c3361bb00b36fb3d3->leave($__internal_1ac644a1d11958a9f2aea003a3328adfa278bde5028cc42c3361bb00b36fb3d3_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_8b749c3dc8da8c3d75f9f0cb4ecf7f03474b1a9114f4fc39ab64742d34c166a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b749c3dc8da8c3d75f9f0cb4ecf7f03474b1a9114f4fc39ab64742d34c166a0->enter($__internal_8b749c3dc8da8c3d75f9f0cb4ecf7f03474b1a9114f4fc39ab64742d34c166a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_2446073d2d8a50e89c0ac6638e37a3a7cee9ad158253d117be3eb7aae0ec313a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2446073d2d8a50e89c0ac6638e37a3a7cee9ad158253d117be3eb7aae0ec313a->enter($__internal_2446073d2d8a50e89c0ac6638e37a3a7cee9ad158253d117be3eb7aae0ec313a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../public/css/pages/activiteproposees.css\" type=\"text/css\" />
";
        
        $__internal_2446073d2d8a50e89c0ac6638e37a3a7cee9ad158253d117be3eb7aae0ec313a->leave($__internal_2446073d2d8a50e89c0ac6638e37a3a7cee9ad158253d117be3eb7aae0ec313a_prof);

        
        $__internal_8b749c3dc8da8c3d75f9f0cb4ecf7f03474b1a9114f4fc39ab64742d34c166a0->leave($__internal_8b749c3dc8da8c3d75f9f0cb4ecf7f03474b1a9114f4fc39ab64742d34c166a0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_37a4268cd95bbd83c320b3e650ac8730f71eee94866bc8dc045d982cf1fee7cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37a4268cd95bbd83c320b3e650ac8730f71eee94866bc8dc045d982cf1fee7cf->enter($__internal_37a4268cd95bbd83c320b3e650ac8730f71eee94866bc8dc045d982cf1fee7cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f7b6383841b1086601ed07877af5608bc023e1323f7ed54417db93f879c15780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7b6383841b1086601ed07877af5608bc023e1323f7ed54417db93f879c15780->enter($__internal_f7b6383841b1086601ed07877af5608bc023e1323f7ed54417db93f879c15780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Activités Proposées";
        
        $__internal_f7b6383841b1086601ed07877af5608bc023e1323f7ed54417db93f879c15780->leave($__internal_f7b6383841b1086601ed07877af5608bc023e1323f7ed54417db93f879c15780_prof);

        
        $__internal_37a4268cd95bbd83c320b3e650ac8730f71eee94866bc8dc045d982cf1fee7cf->leave($__internal_37a4268cd95bbd83c320b3e650ac8730f71eee94866bc8dc045d982cf1fee7cf_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_e91f562c3e228254af4beee5f6ebc7a00b9c60596f294ff7d1b3b2ffbe92fdd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e91f562c3e228254af4beee5f6ebc7a00b9c60596f294ff7d1b3b2ffbe92fdd5->enter($__internal_e91f562c3e228254af4beee5f6ebc7a00b9c60596f294ff7d1b3b2ffbe92fdd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_be04822978a0e0113072d418ad22d2bffdc9c73c39c145fe72f9f0079ddab876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be04822978a0e0113072d418ad22d2bffdc9c73c39c145fe72f9f0079ddab876->enter($__internal_be04822978a0e0113072d418ad22d2bffdc9c73c39c145fe72f9f0079ddab876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <div class=\"container\">
        <h1 class=\"BodyTitle\">Votez pour vos futurs activités ! </h1>
            <!--<div class=\"carousel-inner\">
                <div class=\"item active\">-->
                    <div class=\"row\">
                        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activities"]) || array_key_exists("activities", $context) ? $context["activities"] : (function () { throw new Twig_Error_Runtime('Variable "activities" does not exist.', 15, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 16
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["activity"], "status", array()) == "Proposé")) {
                // line 17
                echo "                            <div class=\"col-lg-8\">
                                <div class=\"col-md-3\">
                                    <h2>";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["activity"], "name", array()), "html", null, true);
                echo "</h2>
                                    <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_activite_by_id", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["activity"], "id", array()))), "html", null, true);
                echo "\"><img src=\"../public/img/film.jpg\" class=\"imgActivite\"></a>
                                </div>
                                <div class=\"col-md-2\">
                                    <p>";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["activity"], "description", array()), "html", null, true);
                echo "</p>
                                    <p><a class=\"btn btn-default\" href=\"#\" role=\"button\" onclick=\"\">Voter</a></p>
                                </div>
                            </div>
                            ";
            }
            // line 28
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                    </div>
                <!--</div>
            </div>-->
        </div>
        ";
        // line 33
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 34
            echo "            <div class=\"form-activity\">
                <h2 class=\"BodyTitle\">Soumettre une idée d'activité</h2>
                <div class=\"col-md-2 col-md-offset-4\">
                    <a class=\"btn btn-default\" href=\"#\" role=\"button\" onclick=\"\" id=\"BoutonRedirectionContact\">Via mail</a>
                </div>
            </div>
        ";
        }
        // line 41
        echo "        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_BDE")) {
            // line 42
            echo "            <div class=\"col-md-15 col-md-offset-3\">
                <div class=\"col-md-9\">
                    <div id=\"sizebutton\">
                        <p>Nom de l'activité : <input type=\"text\" name=\"name\"><p>
                            <p>Description : <p><textarea name=\"comments\" id=\"comments\" cols=\"50\" rows=\"6\" placeholder=\"Notez votre message ici!\"></textarea><br>
                    </div>
                </div>
                <div class=\"col-md-9\">
                    <div id=\"PositionFloatRightImgButton\">
                        <p>Ajouter une image : <button><p>image.jpg</p></button></p><br>
                    </div>
                    <div class=\"ProfilBouton\">
                        <input class=\"btn btn-primary\" type=\"submit\" value=\"Confirmer\">
                    </div>
                </div>
            </div>
         ";
        }
        
        $__internal_be04822978a0e0113072d418ad22d2bffdc9c73c39c145fe72f9f0079ddab876->leave($__internal_be04822978a0e0113072d418ad22d2bffdc9c73c39c145fe72f9f0079ddab876_prof);

        
        $__internal_e91f562c3e228254af4beee5f6ebc7a00b9c60596f294ff7d1b3b2ffbe92fdd5->leave($__internal_e91f562c3e228254af4beee5f6ebc7a00b9c60596f294ff7d1b3b2ffbe92fdd5_prof);

    }

    public function getTemplateName()
    {
        return "SiteBundle:Pages:activites.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 42,  148 => 41,  139 => 34,  137 => 33,  131 => 29,  125 => 28,  117 => 23,  111 => 20,  107 => 19,  103 => 17,  100 => 16,  96 => 15,  89 => 10,  80 => 9,  62 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SiteBundle::base.html.twig\" %}

{% block style %}
    <link rel=\"stylesheet\" href=\"../public/css/pages/activiteproposees.css\" type=\"text/css\" />
{% endblock %}

{% block title  %}Activités Proposées{% endblock %}

{% block content %}
    <div class=\"container\">
        <h1 class=\"BodyTitle\">Votez pour vos futurs activités ! </h1>
            <!--<div class=\"carousel-inner\">
                <div class=\"item active\">-->
                    <div class=\"row\">
                        {% for activity in activities %}
                            {% if activity.status == 'Proposé'%}
                            <div class=\"col-lg-8\">
                                <div class=\"col-md-3\">
                                    <h2>{{ activity.name }}</h2>
                                    <a href=\"{{ path('site_activite_by_id', {'id': activity.id}) }}\"><img src=\"../public/img/film.jpg\" class=\"imgActivite\"></a>
                                </div>
                                <div class=\"col-md-2\">
                                    <p>{{ activity.description }}</p>
                                    <p><a class=\"btn btn-default\" href=\"#\" role=\"button\" onclick=\"\">Voter</a></p>
                                </div>
                            </div>
                            {% endif %}
                        {% endfor %}
                    </div>
                <!--</div>
            </div>-->
        </div>
        {% if is_granted(\"ROLE_USER\") %}
            <div class=\"form-activity\">
                <h2 class=\"BodyTitle\">Soumettre une idée d'activité</h2>
                <div class=\"col-md-2 col-md-offset-4\">
                    <a class=\"btn btn-default\" href=\"#\" role=\"button\" onclick=\"\" id=\"BoutonRedirectionContact\">Via mail</a>
                </div>
            </div>
        {% endif %}
        {% if is_granted(\"ROLE_BDE\") %}
            <div class=\"col-md-15 col-md-offset-3\">
                <div class=\"col-md-9\">
                    <div id=\"sizebutton\">
                        <p>Nom de l'activité : <input type=\"text\" name=\"name\"><p>
                            <p>Description : <p><textarea name=\"comments\" id=\"comments\" cols=\"50\" rows=\"6\" placeholder=\"Notez votre message ici!\"></textarea><br>
                    </div>
                </div>
                <div class=\"col-md-9\">
                    <div id=\"PositionFloatRightImgButton\">
                        <p>Ajouter une image : <button><p>image.jpg</p></button></p><br>
                    </div>
                    <div class=\"ProfilBouton\">
                        <input class=\"btn btn-primary\" type=\"submit\" value=\"Confirmer\">
                    </div>
                </div>
            </div>
         {% endif %}
{% endblock %}", "SiteBundle:Pages:activites.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/SiteBundle/Resources/views/Pages/activites.html.twig");
    }
}
