<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_0fe9096d2e0369eb5cf2db7f4e128bab7d4f35f711af7ef968cffac9f1388908 extends Twig_Template
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
        $__internal_b7e0f25da4ec1db58f8641dbdc01d2c1b7b8d1f5af005f2dc6506ef3ca5e19ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7e0f25da4ec1db58f8641dbdc01d2c1b7b8d1f5af005f2dc6506ef3ca5e19ad->enter($__internal_b7e0f25da4ec1db58f8641dbdc01d2c1b7b8d1f5af005f2dc6506ef3ca5e19ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_4624fc3c5d49f863088fb40166189e6509858d9ff6d65e4cc9495302e82f7aad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4624fc3c5d49f863088fb40166189e6509858d9ff6d65e4cc9495302e82f7aad->enter($__internal_4624fc3c5d49f863088fb40166189e6509858d9ff6d65e4cc9495302e82f7aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"container\">
    <div class=\"AvatarMiddleProfil\">
        <h2 class=\"BodyTitle\">Bonjour ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 5, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo " !</h2>

        <div class=\"photo_profile\">
            <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 8, $this->getSourceContext()); })()), "avatar", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 19, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo "</p>
            <p>Prenom : ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 20, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "</p>
            <p>Nom : ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 21, $this->getSourceContext()); })()), "lastname", array()), "html", null, true);
        echo "</p>
            <p>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 22, $this->getSourceContext()); })()), "email", array()), "html", null, true);
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
        
        $__internal_b7e0f25da4ec1db58f8641dbdc01d2c1b7b8d1f5af005f2dc6506ef3ca5e19ad->leave($__internal_b7e0f25da4ec1db58f8641dbdc01d2c1b7b8d1f5af005f2dc6506ef3ca5e19ad_prof);

        
        $__internal_4624fc3c5d49f863088fb40166189e6509858d9ff6d65e4cc9495302e82f7aad->leave($__internal_4624fc3c5d49f863088fb40166189e6509858d9ff6d65e4cc9495302e82f7aad_prof);

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
        return array (  74 => 27,  64 => 22,  60 => 21,  56 => 20,  50 => 19,  36 => 8,  30 => 5,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"container\">
    <div class=\"AvatarMiddleProfil\">
        <h2 class=\"BodyTitle\">Bonjour {{ user.username }} !</h2>

        <div class=\"photo_profile\">
            <img src=\"{{ user.avatar }}\">
        </div>

        <div class=\"modifyImage\">
            <button class=\"btn btn-primary\" href=\"#\">Modifier ma photo</button>
        </div>
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
            <div class=\"change_password_button\">
                <a class=\"btn btn-xl btn-primary\" href=\"{{ path('fos_user_change_password') }}\">Modifiez votre mot de passe</a>
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
</div>", "FOSUserBundle:Profile:show_content.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/UserBundle/Resources/views/Profile/show_content.html.twig");
    }
}
