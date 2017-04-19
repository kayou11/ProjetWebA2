<?php

/* @User/Profile/show_content.html.twig */
class __TwigTemplate_1853ab6200257b5b5cffc81aca0388dd470593d726fc07073a40c0061701f85d extends Twig_Template
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
        $__internal_e978e31a428c1dc1f8f08dfc7fb49d947b40f10862096ebf2073ca7cfb8fcf55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e978e31a428c1dc1f8f08dfc7fb49d947b40f10862096ebf2073ca7cfb8fcf55->enter($__internal_e978e31a428c1dc1f8f08dfc7fb49d947b40f10862096ebf2073ca7cfb8fcf55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Profile/show_content.html.twig"));

        $__internal_d915f221facce85ce6318e092950444c78f9a94c0285a2f44c3c472da4b74f9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d915f221facce85ce6318e092950444c78f9a94c0285a2f44c3c472da4b74f9d->enter($__internal_d915f221facce85ce6318e092950444c78f9a94c0285a2f44c3c472da4b74f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Profile/show_content.html.twig"));

        // line 2
        echo "

<div class=\"container\">
    <h2 class=\"BodyTitle\">Bonjour ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 5, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo " !</h2>
    <div class=\"photo_profile\">
        <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 7, $this->getSourceContext()); })()), "avatar", array()), "html", null, true);
        echo "\">
    </div>

    <div class=\"row\">
        <div class=\"col-md-11\">

            <h3>Informations</h3>
            <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 14, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo "</p>
            <p>Prenom : ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 15, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "</p>
            <p>Nom : ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 16, $this->getSourceContext()); })()), "lastname", array()), "html", null, true);
        echo "</p>
            <p>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 17, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</p>
        </div>
        <div class=\"col-md-11\">
            <form>
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
            </form>
        </div>
    </div>
</div>";
        
        $__internal_e978e31a428c1dc1f8f08dfc7fb49d947b40f10862096ebf2073ca7cfb8fcf55->leave($__internal_e978e31a428c1dc1f8f08dfc7fb49d947b40f10862096ebf2073ca7cfb8fcf55_prof);

        
        $__internal_d915f221facce85ce6318e092950444c78f9a94c0285a2f44c3c472da4b74f9d->leave($__internal_d915f221facce85ce6318e092950444c78f9a94c0285a2f44c3c472da4b74f9d_prof);

    }

    public function getTemplateName()
    {
        return "@User/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 17,  55 => 16,  51 => 15,  45 => 14,  35 => 7,  30 => 5,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}


<div class=\"container\">
    <h2 class=\"BodyTitle\">Bonjour {{ user.username }} !</h2>
    <div class=\"photo_profile\">
        <img src=\"{{ user.avatar }}\">
    </div>

    <div class=\"row\">
        <div class=\"col-md-11\">

            <h3>Informations</h3>
            <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
            <p>Prenom : {{ user.name }}</p>
            <p>Nom : {{ user.lastname }}</p>
            <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
        </div>
        <div class=\"col-md-11\">
            <form>
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
            </form>
        </div>
    </div>
</div>", "@User/Profile/show_content.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/UserBundle/Resources/views/Profile/show_content.html.twig");
    }
}
