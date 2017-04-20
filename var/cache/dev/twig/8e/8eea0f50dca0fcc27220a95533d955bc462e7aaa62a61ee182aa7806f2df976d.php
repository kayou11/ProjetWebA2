<?php

/* SiteBundle:Pages:activites.html.twig */
class __TwigTemplate_f459c798d1003fdd4b3c0ab10aa04b97cf498d01a5986bc4838aa97b377f656a extends Twig_Template
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
        $__internal_1f929d7b733b797653cffcb256cc8bf17c286d6043c16672c00ce24d4bee400b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f929d7b733b797653cffcb256cc8bf17c286d6043c16672c00ce24d4bee400b->enter($__internal_1f929d7b733b797653cffcb256cc8bf17c286d6043c16672c00ce24d4bee400b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:activites.html.twig"));

        $__internal_091b3ab07c81851a45df2360dfd8cad7fe35cb4bf95b8c45e335c6479702ba8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_091b3ab07c81851a45df2360dfd8cad7fe35cb4bf95b8c45e335c6479702ba8a->enter($__internal_091b3ab07c81851a45df2360dfd8cad7fe35cb4bf95b8c45e335c6479702ba8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:activites.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f929d7b733b797653cffcb256cc8bf17c286d6043c16672c00ce24d4bee400b->leave($__internal_1f929d7b733b797653cffcb256cc8bf17c286d6043c16672c00ce24d4bee400b_prof);

        
        $__internal_091b3ab07c81851a45df2360dfd8cad7fe35cb4bf95b8c45e335c6479702ba8a->leave($__internal_091b3ab07c81851a45df2360dfd8cad7fe35cb4bf95b8c45e335c6479702ba8a_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_528afd51e6c948e2e1a2cf5568f71ad830476a4ddd57656d85364c0e7441d616 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_528afd51e6c948e2e1a2cf5568f71ad830476a4ddd57656d85364c0e7441d616->enter($__internal_528afd51e6c948e2e1a2cf5568f71ad830476a4ddd57656d85364c0e7441d616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_120317ba3f51edf44c1aece64217ef282b3131821b495349a40c9e328f68db0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_120317ba3f51edf44c1aece64217ef282b3131821b495349a40c9e328f68db0a->enter($__internal_120317ba3f51edf44c1aece64217ef282b3131821b495349a40c9e328f68db0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../public/css/pages/activiteproposees.css\" type=\"text/css\" />
";
        
        $__internal_120317ba3f51edf44c1aece64217ef282b3131821b495349a40c9e328f68db0a->leave($__internal_120317ba3f51edf44c1aece64217ef282b3131821b495349a40c9e328f68db0a_prof);

        
        $__internal_528afd51e6c948e2e1a2cf5568f71ad830476a4ddd57656d85364c0e7441d616->leave($__internal_528afd51e6c948e2e1a2cf5568f71ad830476a4ddd57656d85364c0e7441d616_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f5501549e8f327cf8b44938c32b9607c57de0711ddfcd153fcddf4203409383 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f5501549e8f327cf8b44938c32b9607c57de0711ddfcd153fcddf4203409383->enter($__internal_1f5501549e8f327cf8b44938c32b9607c57de0711ddfcd153fcddf4203409383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3ecb3fffec7929f5a95aaeaf1657c60a7cf6e983a48aad92695bde9f3144b372 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ecb3fffec7929f5a95aaeaf1657c60a7cf6e983a48aad92695bde9f3144b372->enter($__internal_3ecb3fffec7929f5a95aaeaf1657c60a7cf6e983a48aad92695bde9f3144b372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Activités Proposées";
        
        $__internal_3ecb3fffec7929f5a95aaeaf1657c60a7cf6e983a48aad92695bde9f3144b372->leave($__internal_3ecb3fffec7929f5a95aaeaf1657c60a7cf6e983a48aad92695bde9f3144b372_prof);

        
        $__internal_1f5501549e8f327cf8b44938c32b9607c57de0711ddfcd153fcddf4203409383->leave($__internal_1f5501549e8f327cf8b44938c32b9607c57de0711ddfcd153fcddf4203409383_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_38a53920b7d4f8e237456e69530c2e3838134e1f61a0c5a954ad994610444517 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38a53920b7d4f8e237456e69530c2e3838134e1f61a0c5a954ad994610444517->enter($__internal_38a53920b7d4f8e237456e69530c2e3838134e1f61a0c5a954ad994610444517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_39781ec7a97560bbbf3d02123b6a8b879421a65add43eeabaf02958f9e2a12c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39781ec7a97560bbbf3d02123b6a8b879421a65add43eeabaf02958f9e2a12c1->enter($__internal_39781ec7a97560bbbf3d02123b6a8b879421a65add43eeabaf02958f9e2a12c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                                    <p><a class=\"btn btn-default\" role=\"button\" onclick=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_activite_vote", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["activity"], "id", array()))), "html", null, true);
                echo "\">Voter</a></p>
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
        
        $__internal_39781ec7a97560bbbf3d02123b6a8b879421a65add43eeabaf02958f9e2a12c1->leave($__internal_39781ec7a97560bbbf3d02123b6a8b879421a65add43eeabaf02958f9e2a12c1_prof);

        
        $__internal_38a53920b7d4f8e237456e69530c2e3838134e1f61a0c5a954ad994610444517->leave($__internal_38a53920b7d4f8e237456e69530c2e3838134e1f61a0c5a954ad994610444517_prof);

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
        return array (  154 => 42,  151 => 41,  142 => 34,  140 => 33,  134 => 29,  128 => 28,  121 => 24,  117 => 23,  111 => 20,  107 => 19,  103 => 17,  100 => 16,  96 => 15,  89 => 10,  80 => 9,  62 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
                                    <p><a class=\"btn btn-default\" role=\"button\" onclick=\"{{ path('site_activite_vote', {'id': activity.id}) }}\">Voter</a></p>
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
