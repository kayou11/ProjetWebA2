<?php

/* SiteBundle:Pages:activites.html.twig */
class __TwigTemplate_8ca92b1757a52f4a5317ce8c26c51bd50b47a4ca5f83aec03a7b138e4d875b84 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../public/css/pages/activiteproposees.css\" type=\"text/css\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Activités Proposées";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"container\">
        <h1 class=\"BodyTitle\">Votez pour vos futurs activités ! </h1>
            <!--<div class=\"carousel-inner\">
                <div class=\"item active\">-->
                    <div class=\"row\">
                        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["activities"] ?? null));
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
        return array (  109 => 42,  106 => 41,  97 => 34,  95 => 33,  89 => 29,  83 => 28,  75 => 23,  69 => 20,  65 => 19,  61 => 17,  58 => 16,  54 => 15,  47 => 10,  44 => 9,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SiteBundle:Pages:activites.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/SiteBundle/Resources/views/Pages/activites.html.twig");
    }
}
