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
        $__internal_027ed506b51ee84373887197f7d1d6a6a693c2ce40d1bfc3892abbc9dd3004a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_027ed506b51ee84373887197f7d1d6a6a693c2ce40d1bfc3892abbc9dd3004a7->enter($__internal_027ed506b51ee84373887197f7d1d6a6a693c2ce40d1bfc3892abbc9dd3004a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:activites.html.twig"));

        $__internal_27919a322bce74d6236c94f3b80e70dde28be7c22cda6b199770e4f0c07ab5dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27919a322bce74d6236c94f3b80e70dde28be7c22cda6b199770e4f0c07ab5dc->enter($__internal_27919a322bce74d6236c94f3b80e70dde28be7c22cda6b199770e4f0c07ab5dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:activites.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_027ed506b51ee84373887197f7d1d6a6a693c2ce40d1bfc3892abbc9dd3004a7->leave($__internal_027ed506b51ee84373887197f7d1d6a6a693c2ce40d1bfc3892abbc9dd3004a7_prof);

        
        $__internal_27919a322bce74d6236c94f3b80e70dde28be7c22cda6b199770e4f0c07ab5dc->leave($__internal_27919a322bce74d6236c94f3b80e70dde28be7c22cda6b199770e4f0c07ab5dc_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_52dacd6d9b75727f1b72842a198ee71acda5e8ad1e8df11ebf30253b6dfd18c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52dacd6d9b75727f1b72842a198ee71acda5e8ad1e8df11ebf30253b6dfd18c5->enter($__internal_52dacd6d9b75727f1b72842a198ee71acda5e8ad1e8df11ebf30253b6dfd18c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_87e9df99907a30d2d5402c0b01360e212dfb7dbab2c3d65b8681d93967052454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87e9df99907a30d2d5402c0b01360e212dfb7dbab2c3d65b8681d93967052454->enter($__internal_87e9df99907a30d2d5402c0b01360e212dfb7dbab2c3d65b8681d93967052454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../public/css/pages/activiteproposees.css\" type=\"text/css\" />
";
        
        $__internal_87e9df99907a30d2d5402c0b01360e212dfb7dbab2c3d65b8681d93967052454->leave($__internal_87e9df99907a30d2d5402c0b01360e212dfb7dbab2c3d65b8681d93967052454_prof);

        
        $__internal_52dacd6d9b75727f1b72842a198ee71acda5e8ad1e8df11ebf30253b6dfd18c5->leave($__internal_52dacd6d9b75727f1b72842a198ee71acda5e8ad1e8df11ebf30253b6dfd18c5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_88a025bad4548401a39de32b3bfa6091a15fe20ed820e20442b8517b7f922d55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88a025bad4548401a39de32b3bfa6091a15fe20ed820e20442b8517b7f922d55->enter($__internal_88a025bad4548401a39de32b3bfa6091a15fe20ed820e20442b8517b7f922d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3972882f040fb8872bbf3d045ffc7d85f20b94276d9512390d1457340b540c32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3972882f040fb8872bbf3d045ffc7d85f20b94276d9512390d1457340b540c32->enter($__internal_3972882f040fb8872bbf3d045ffc7d85f20b94276d9512390d1457340b540c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Galerie photos";
        
        $__internal_3972882f040fb8872bbf3d045ffc7d85f20b94276d9512390d1457340b540c32->leave($__internal_3972882f040fb8872bbf3d045ffc7d85f20b94276d9512390d1457340b540c32_prof);

        
        $__internal_88a025bad4548401a39de32b3bfa6091a15fe20ed820e20442b8517b7f922d55->leave($__internal_88a025bad4548401a39de32b3bfa6091a15fe20ed820e20442b8517b7f922d55_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_96fc4f8fc5c8e5931d4b1c523fc1bf38be534ef68cc82ddeb4e81663fca2cdc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96fc4f8fc5c8e5931d4b1c523fc1bf38be534ef68cc82ddeb4e81663fca2cdc8->enter($__internal_96fc4f8fc5c8e5931d4b1c523fc1bf38be534ef68cc82ddeb4e81663fca2cdc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2a900450716fc077b0ee74ce1b35d46f7df401be7657a2fb05a520f4b6290a48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a900450716fc077b0ee74ce1b35d46f7df401be7657a2fb05a520f4b6290a48->enter($__internal_2a900450716fc077b0ee74ce1b35d46f7df401be7657a2fb05a520f4b6290a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                                    <img src=\"../public/img/film.jpg\" class=\"imgActivite\">
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
        
        $__internal_2a900450716fc077b0ee74ce1b35d46f7df401be7657a2fb05a520f4b6290a48->leave($__internal_2a900450716fc077b0ee74ce1b35d46f7df401be7657a2fb05a520f4b6290a48_prof);

        
        $__internal_96fc4f8fc5c8e5931d4b1c523fc1bf38be534ef68cc82ddeb4e81663fca2cdc8->leave($__internal_96fc4f8fc5c8e5931d4b1c523fc1bf38be534ef68cc82ddeb4e81663fca2cdc8_prof);

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
        return array (  148 => 42,  145 => 41,  136 => 34,  134 => 33,  128 => 29,  122 => 28,  114 => 23,  107 => 19,  103 => 17,  100 => 16,  96 => 15,  89 => 10,  80 => 9,  62 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SiteBundle::base.html.twig\" %}

{% block style %}
    <link rel=\"stylesheet\" href=\"../public/css/pages/activiteproposees.css\" type=\"text/css\" />
{% endblock %}

{% block title  %}Galerie photos{% endblock %}

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
                                    <img src=\"../public/img/film.jpg\" class=\"imgActivite\">
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
