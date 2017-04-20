<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_3883fecbcccc2529798dd0d959cff1dcb9319dad730f725cbf8be10c1db6ef38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<div class=\"container\">
    <div class=\"AvatarMiddleProfil\">
        <h2 class=\"BodyTitle\">Bonjour ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "username", array()), "html", null, true);
        echo " !</h2>

        <div class=\"photo_profile\">
            <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "avatar", array()), "html", null, true);
        echo "\">
        </div>

        <div class=\"modifyImage\">
            <button class=\"btn btn-primary\" href=\"#\">Modifier ma photo</button>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-11\">
            <h3>Informations</h3>
            <p>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "username", array()), "html", null, true);
        echo "</p>
            <p>Prenom : ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "name", array()), "html", null, true);
        echo "</p>
            <p>Nom : ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "lastname", array()), "html", null, true);
        echo "</p>
            <p>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "email", array()), "html", null, true);
        echo "</p>
        </div>

        <div class=\"col-md-11\">
            <div class=\"change_password_button\">
                <a class=\"btn btn-xl btn-primary\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\">Modifiez votre mot de passe</a>
            </div>
            <!--<form>
                <p>Modifier mot de passe : </p>
                <div class=\"input-group\">
                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                    <input id=\"password\" type=\"text\" class=\"form-control\" name=\"Password\" placeholder=\"Confirmer ancien mot de passe\">
                </div>
                <div class=\"input-group\">
                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                    <input id=\"password\" type=\"text\" class=\"form-control\" name=\"Password\" placeholder=\"Nouveau mot de passe\">
                </div>
                <div class=\"input-group\">
                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                    <input id=\"password\" type=\"password\" class=\"form-control\" name=\"password\" placeholder=\"Confirmer mot de passe\">
                </div>
                <div class=\"ProfilBouton\">
                    <input class=\"btn btn-primary\" type=\"submit\" value=\"Confirmer\">
                </div>
                <p>Modifier Mail : </p>
                <div class=\"input-group\">
                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                    <input id=\"Email\" type=\"Email\" class=\"form-control\" name=\"Email\" placeholder=\"Nouvelle adresse\">
                </div>
                <div class=\"input-group\">
                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                    <input id=\"Email\" type=\"mail\" class=\"form-control\" name=\"Email\" placeholder=\"Confirmer adresse\">
                </div>
                <div class=\"ProfilBouton\">
                    <input class=\"btn btn-primary\" type=\"submit\" value=\"Confirmer\">
                </div>
            </form>-->
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 27,  58 => 22,  54 => 21,  50 => 20,  44 => 19,  30 => 8,  24 => 5,  19 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Profile:show_content.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/UserBundle/Resources/views/Profile/show_content.html.twig");
    }
}
