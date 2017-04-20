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
        $__internal_d366e0f90871f3295b0e89ef8e04ac29819892d6667a2611bd6fe7159ae34798 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d366e0f90871f3295b0e89ef8e04ac29819892d6667a2611bd6fe7159ae34798->enter($__internal_d366e0f90871f3295b0e89ef8e04ac29819892d6667a2611bd6fe7159ae34798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:activites.html.twig"));

        $__internal_58af2b6b3725572616d439fc627e9bb124385473d647bd14ff89aa3198e40783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58af2b6b3725572616d439fc627e9bb124385473d647bd14ff89aa3198e40783->enter($__internal_58af2b6b3725572616d439fc627e9bb124385473d647bd14ff89aa3198e40783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:activites.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d366e0f90871f3295b0e89ef8e04ac29819892d6667a2611bd6fe7159ae34798->leave($__internal_d366e0f90871f3295b0e89ef8e04ac29819892d6667a2611bd6fe7159ae34798_prof);

        
        $__internal_58af2b6b3725572616d439fc627e9bb124385473d647bd14ff89aa3198e40783->leave($__internal_58af2b6b3725572616d439fc627e9bb124385473d647bd14ff89aa3198e40783_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_e52a08e46cb918dd7785f31269ca426460c52555a0d2fcb6f9705719d6c3c929 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e52a08e46cb918dd7785f31269ca426460c52555a0d2fcb6f9705719d6c3c929->enter($__internal_e52a08e46cb918dd7785f31269ca426460c52555a0d2fcb6f9705719d6c3c929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_61fdce667a4242f06174aebb7e89fde5ac6be875939b4308229c8198e6c69bf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61fdce667a4242f06174aebb7e89fde5ac6be875939b4308229c8198e6c69bf4->enter($__internal_61fdce667a4242f06174aebb7e89fde5ac6be875939b4308229c8198e6c69bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../public/css/pages/activiteproposees.css\" type=\"text/css\" />
";
        
        $__internal_61fdce667a4242f06174aebb7e89fde5ac6be875939b4308229c8198e6c69bf4->leave($__internal_61fdce667a4242f06174aebb7e89fde5ac6be875939b4308229c8198e6c69bf4_prof);

        
        $__internal_e52a08e46cb918dd7785f31269ca426460c52555a0d2fcb6f9705719d6c3c929->leave($__internal_e52a08e46cb918dd7785f31269ca426460c52555a0d2fcb6f9705719d6c3c929_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0326efd13720bc168eec6217f0d1ef9d8c89dad153c9cb755e0057d13154460a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0326efd13720bc168eec6217f0d1ef9d8c89dad153c9cb755e0057d13154460a->enter($__internal_0326efd13720bc168eec6217f0d1ef9d8c89dad153c9cb755e0057d13154460a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_95dbf2325431c40fb974e913f78904c536d9d3816cfbde7679ee91d416a3b084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95dbf2325431c40fb974e913f78904c536d9d3816cfbde7679ee91d416a3b084->enter($__internal_95dbf2325431c40fb974e913f78904c536d9d3816cfbde7679ee91d416a3b084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Activités Proposées";
        
        $__internal_95dbf2325431c40fb974e913f78904c536d9d3816cfbde7679ee91d416a3b084->leave($__internal_95dbf2325431c40fb974e913f78904c536d9d3816cfbde7679ee91d416a3b084_prof);

        
        $__internal_0326efd13720bc168eec6217f0d1ef9d8c89dad153c9cb755e0057d13154460a->leave($__internal_0326efd13720bc168eec6217f0d1ef9d8c89dad153c9cb755e0057d13154460a_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_2f39406822570b989510db93fc87dc71f074e0767fd20f2b864b17e7b0f750bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f39406822570b989510db93fc87dc71f074e0767fd20f2b864b17e7b0f750bc->enter($__internal_2f39406822570b989510db93fc87dc71f074e0767fd20f2b864b17e7b0f750bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0b1866c04d36e476be5df03a03f3faf81aee4be689b7982d65dc0418f5cc81b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b1866c04d36e476be5df03a03f3faf81aee4be689b7982d65dc0418f5cc81b3->enter($__internal_0b1866c04d36e476be5df03a03f3faf81aee4be689b7982d65dc0418f5cc81b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_0b1866c04d36e476be5df03a03f3faf81aee4be689b7982d65dc0418f5cc81b3->leave($__internal_0b1866c04d36e476be5df03a03f3faf81aee4be689b7982d65dc0418f5cc81b3_prof);

        
        $__internal_2f39406822570b989510db93fc87dc71f074e0767fd20f2b864b17e7b0f750bc->leave($__internal_2f39406822570b989510db93fc87dc71f074e0767fd20f2b864b17e7b0f750bc_prof);

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
