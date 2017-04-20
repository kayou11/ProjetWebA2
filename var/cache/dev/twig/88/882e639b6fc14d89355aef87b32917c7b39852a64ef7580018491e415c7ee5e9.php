<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_0c57aecbee17bc338ce956383054f0dd8a4fdebbe8a61b9a14e79bc42476e736 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_f86cfefcd067c265d5868e7ec3dab1241dfc88f5248ca18c9b06ce1b9fd2db7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f86cfefcd067c265d5868e7ec3dab1241dfc88f5248ca18c9b06ce1b9fd2db7d->enter($__internal_f86cfefcd067c265d5868e7ec3dab1241dfc88f5248ca18c9b06ce1b9fd2db7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_f84918782ca217a74f96bd0756e2829e863ee1f779dc3bbfad9c0306fbf8611b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f84918782ca217a74f96bd0756e2829e863ee1f779dc3bbfad9c0306fbf8611b->enter($__internal_f84918782ca217a74f96bd0756e2829e863ee1f779dc3bbfad9c0306fbf8611b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f86cfefcd067c265d5868e7ec3dab1241dfc88f5248ca18c9b06ce1b9fd2db7d->leave($__internal_f86cfefcd067c265d5868e7ec3dab1241dfc88f5248ca18c9b06ce1b9fd2db7d_prof);

        
        $__internal_f84918782ca217a74f96bd0756e2829e863ee1f779dc3bbfad9c0306fbf8611b->leave($__internal_f84918782ca217a74f96bd0756e2829e863ee1f779dc3bbfad9c0306fbf8611b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_abcdd3ba3ea939cafafe856e53839934dbc3491ce29634bcd8ddb9eb41febe5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abcdd3ba3ea939cafafe856e53839934dbc3491ce29634bcd8ddb9eb41febe5b->enter($__internal_abcdd3ba3ea939cafafe856e53839934dbc3491ce29634bcd8ddb9eb41febe5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_61ecc01d0393807891979df05897b71a7022697c4a44f33cbe434f1020160944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61ecc01d0393807891979df05897b71a7022697c4a44f33cbe434f1020160944->enter($__internal_61ecc01d0393807891979df05897b71a7022697c4a44f33cbe434f1020160944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_61ecc01d0393807891979df05897b71a7022697c4a44f33cbe434f1020160944->leave($__internal_61ecc01d0393807891979df05897b71a7022697c4a44f33cbe434f1020160944_prof);

        
        $__internal_abcdd3ba3ea939cafafe856e53839934dbc3491ce29634bcd8ddb9eb41febe5b->leave($__internal_abcdd3ba3ea939cafafe856e53839934dbc3491ce29634bcd8ddb9eb41febe5b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
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
", "FOSUserBundle:Registration:confirmed.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
