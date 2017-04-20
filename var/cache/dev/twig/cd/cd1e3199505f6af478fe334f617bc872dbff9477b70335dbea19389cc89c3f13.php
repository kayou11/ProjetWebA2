<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_7ef75ecc6ade374bc6f11751ce77ee683d1c8070bbbe8538b017f07887688adb extends Twig_Template
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
        $__internal_ae2e4e8357a80f5c8e033e06256e56c6e0469f3c6bcfeae262b1a15123a308d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae2e4e8357a80f5c8e033e06256e56c6e0469f3c6bcfeae262b1a15123a308d0->enter($__internal_ae2e4e8357a80f5c8e033e06256e56c6e0469f3c6bcfeae262b1a15123a308d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_ff7f6e21c6921949d5cb9eff9109cd59d27cd3e83ca8253a2d1c618d8d4b1efa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff7f6e21c6921949d5cb9eff9109cd59d27cd3e83ca8253a2d1c618d8d4b1efa->enter($__internal_ff7f6e21c6921949d5cb9eff9109cd59d27cd3e83ca8253a2d1c618d8d4b1efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 3, $this->getSourceContext()); })())) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 4, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 4, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
<form class=\"form_login\" action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    ";
        // line 8
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 8, $this->getSourceContext()); })())) {
            // line 9
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />
    ";
        }
        // line 11
        echo "
    <div class=\"form-group\">
        <label for=\"username\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 14, $this->getSourceContext()); })()), "html", null, true);
        echo "\" required=\"required\" />
    </div>

    <div class=\"form-group\">
        <label for=\"password\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
    </div>
    <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\">Mot de passe oublié ?</a>
    <div class=\"checkbox\">
        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        <label for=\"remember_me\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    </div>

    <input type=\"submit\"
           class=\"btn btn-success\"
           id=\"_submit\"
           name=\"_submit\"
           value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</form>
";
        
        $__internal_ae2e4e8357a80f5c8e033e06256e56c6e0469f3c6bcfeae262b1a15123a308d0->leave($__internal_ae2e4e8357a80f5c8e033e06256e56c6e0469f3c6bcfeae262b1a15123a308d0_prof);

        
        $__internal_ff7f6e21c6921949d5cb9eff9109cd59d27cd3e83ca8253a2d1c618d8d4b1efa->leave($__internal_ff7f6e21c6921949d5cb9eff9109cd59d27cd3e83ca8253a2d1c618d8d4b1efa_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 31,  78 => 24,  72 => 21,  66 => 18,  59 => 14,  55 => 13,  51 => 11,  45 => 9,  43 => 8,  39 => 7,  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form class=\"form_login\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% endif %}

    <div class=\"form-group\">
        <label for=\"username\">{{ 'security.login.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />
    </div>

    <div class=\"form-group\">
        <label for=\"password\">{{ 'security.login.password'|trans }}</label>
        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
    </div>
    <a href=\"{{ path('fos_user_change_password') }}\">Mot de passe oublié ?</a>
    <div class=\"checkbox\">
        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
    </div>

    <input type=\"submit\"
           class=\"btn btn-success\"
           id=\"_submit\"
           name=\"_submit\"
           value=\"{{ 'security.login.submit'|trans }}\" />
</form>
", "@FOSUser/Security/login_content.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/UserBundle/Resources/views/Security/login_content.html.twig");
    }
}
