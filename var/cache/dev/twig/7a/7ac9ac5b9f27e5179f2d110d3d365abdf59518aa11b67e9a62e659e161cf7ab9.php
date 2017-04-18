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
        $__internal_d24c91a71b01aca4e01c2e19517ace5e02c08321cdb53a31cb8a52509cc7e764 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d24c91a71b01aca4e01c2e19517ace5e02c08321cdb53a31cb8a52509cc7e764->enter($__internal_d24c91a71b01aca4e01c2e19517ace5e02c08321cdb53a31cb8a52509cc7e764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Profile/show_content.html.twig"));

        $__internal_58c594b0c6682bfe87e7fe424da6e93e717f884ea4c1a4b15526149ae77d3c95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58c594b0c6682bfe87e7fe424da6e93e717f884ea4c1a4b15526149ae77d3c95->enter($__internal_58c594b0c6682bfe87e7fe424da6e93e717f884ea4c1a4b15526149ae77d3c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 5, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</p>
</div>

<div class=\"container\">
    <h2 class=\"BodyTitle\">Bonjour Username !</h2>
    <div class=\"row\">
        <div class=\"col-md-11\">
            <h3>Informations</h3>
            <p>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 13, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo "</p>
            <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 14, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "</p>
            <p>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.lastname", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 15, $this->getSourceContext()); })()), "lastname", array()), "html", null, true);
        echo "</p>
            <p>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 16, $this->getSourceContext()); })()), "email", array()), "html", null, true);
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
        
        $__internal_d24c91a71b01aca4e01c2e19517ace5e02c08321cdb53a31cb8a52509cc7e764->leave($__internal_d24c91a71b01aca4e01c2e19517ace5e02c08321cdb53a31cb8a52509cc7e764_prof);

        
        $__internal_58c594b0c6682bfe87e7fe424da6e93e717f884ea4c1a4b15526149ae77d3c95->leave($__internal_58c594b0c6682bfe87e7fe424da6e93e717f884ea4c1a4b15526149ae77d3c95_prof);

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
        return array (  66 => 16,  60 => 15,  54 => 14,  48 => 13,  35 => 5,  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>

<div class=\"container\">
    <h2 class=\"BodyTitle\">Bonjour Username !</h2>
    <div class=\"row\">
        <div class=\"col-md-11\">
            <h3>Informations</h3>
            <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
            <p>{{ 'profile.show.name'|trans }}: {{ user.name }}</p>
            <p>{{ 'profile.show.lastname'|trans }}: {{ user.lastname }}</p>
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
