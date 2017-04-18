<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_b16093a30c63f45f956f8762203888414cee0fdd126bb6468d0b4f8b49ec6fd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf1517102660d137b01d4825fa05f8e725ac6d2d96f4353d68c5d457d35d173e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf1517102660d137b01d4825fa05f8e725ac6d2d96f4353d68c5d457d35d173e->enter($__internal_cf1517102660d137b01d4825fa05f8e725ac6d2d96f4353d68c5d457d35d173e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_46d0ebc1428bc5351943a6d389445a57c663ec1d5e2dc67d3d148d216681cde4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46d0ebc1428bc5351943a6d389445a57c663ec1d5e2dc67d3d148d216681cde4->enter($__internal_46d0ebc1428bc5351943a6d389445a57c663ec1d5e2dc67d3d148d216681cde4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf1517102660d137b01d4825fa05f8e725ac6d2d96f4353d68c5d457d35d173e->leave($__internal_cf1517102660d137b01d4825fa05f8e725ac6d2d96f4353d68c5d457d35d173e_prof);

        
        $__internal_46d0ebc1428bc5351943a6d389445a57c663ec1d5e2dc67d3d148d216681cde4->leave($__internal_46d0ebc1428bc5351943a6d389445a57c663ec1d5e2dc67d3d148d216681cde4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_489a2f7331aa20f485827e66e11954dbb68c9493d0c214c35ef1a51c4767990c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_489a2f7331aa20f485827e66e11954dbb68c9493d0c214c35ef1a51c4767990c->enter($__internal_489a2f7331aa20f485827e66e11954dbb68c9493d0c214c35ef1a51c4767990c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_909b216ded49d84ace6111bafa27b4a1cb550201b2a897f870a8046a6cb0606a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_909b216ded49d84ace6111bafa27b4a1cb550201b2a897f870a8046a6cb0606a->enter($__internal_909b216ded49d84ace6111bafa27b4a1cb550201b2a897f870a8046a6cb0606a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_909b216ded49d84ace6111bafa27b4a1cb550201b2a897f870a8046a6cb0606a->leave($__internal_909b216ded49d84ace6111bafa27b4a1cb550201b2a897f870a8046a6cb0606a_prof);

        
        $__internal_489a2f7331aa20f485827e66e11954dbb68c9493d0c214c35ef1a51c4767990c->leave($__internal_489a2f7331aa20f485827e66e11954dbb68c9493d0c214c35ef1a51c4767990c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
