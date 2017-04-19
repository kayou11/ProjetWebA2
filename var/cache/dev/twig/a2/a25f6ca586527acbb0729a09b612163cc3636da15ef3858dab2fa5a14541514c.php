<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_4fa01564373e58ee44e130e8682594a690e2b2ef77b203f7d0b49eb81f556322 extends Twig_Template
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
        $__internal_8b482bb4e4de723d23b98b730a36a40f0d87b4fe8aed3e12a4b16900c8ca1b92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b482bb4e4de723d23b98b730a36a40f0d87b4fe8aed3e12a4b16900c8ca1b92->enter($__internal_8b482bb4e4de723d23b98b730a36a40f0d87b4fe8aed3e12a4b16900c8ca1b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_c0ae8c4f620a9bf9d1b9bae42e4cca4da8299ee9b6e276652d5189cdf7072d9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0ae8c4f620a9bf9d1b9bae42e4cca4da8299ee9b6e276652d5189cdf7072d9d->enter($__internal_c0ae8c4f620a9bf9d1b9bae42e4cca4da8299ee9b6e276652d5189cdf7072d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b482bb4e4de723d23b98b730a36a40f0d87b4fe8aed3e12a4b16900c8ca1b92->leave($__internal_8b482bb4e4de723d23b98b730a36a40f0d87b4fe8aed3e12a4b16900c8ca1b92_prof);

        
        $__internal_c0ae8c4f620a9bf9d1b9bae42e4cca4da8299ee9b6e276652d5189cdf7072d9d->leave($__internal_c0ae8c4f620a9bf9d1b9bae42e4cca4da8299ee9b6e276652d5189cdf7072d9d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7b20c099556fc39f7731fa5786b7d6cb0a3aebd84e405df53fd716a3650a03e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b20c099556fc39f7731fa5786b7d6cb0a3aebd84e405df53fd716a3650a03e5->enter($__internal_7b20c099556fc39f7731fa5786b7d6cb0a3aebd84e405df53fd716a3650a03e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6771eef4f2004866f36fe2b62c93fd5463d4f15ac4fc811ea91332a30b3475ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6771eef4f2004866f36fe2b62c93fd5463d4f15ac4fc811ea91332a30b3475ee->enter($__internal_6771eef4f2004866f36fe2b62c93fd5463d4f15ac4fc811ea91332a30b3475ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_6771eef4f2004866f36fe2b62c93fd5463d4f15ac4fc811ea91332a30b3475ee->leave($__internal_6771eef4f2004866f36fe2b62c93fd5463d4f15ac4fc811ea91332a30b3475ee_prof);

        
        $__internal_7b20c099556fc39f7731fa5786b7d6cb0a3aebd84e405df53fd716a3650a03e5->leave($__internal_7b20c099556fc39f7731fa5786b7d6cb0a3aebd84e405df53fd716a3650a03e5_prof);

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
