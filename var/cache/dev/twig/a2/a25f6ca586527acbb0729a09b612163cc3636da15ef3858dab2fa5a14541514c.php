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
        $__internal_3a54fe04be4a8c1c81b0584c8978ed2b457b667e6a1ad4e16e522717c4adb1b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a54fe04be4a8c1c81b0584c8978ed2b457b667e6a1ad4e16e522717c4adb1b4->enter($__internal_3a54fe04be4a8c1c81b0584c8978ed2b457b667e6a1ad4e16e522717c4adb1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_f3e4467efdaca55123d8ff7d1dec6be844edbebcfb9c1fb8048c0a7e423fefa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3e4467efdaca55123d8ff7d1dec6be844edbebcfb9c1fb8048c0a7e423fefa4->enter($__internal_f3e4467efdaca55123d8ff7d1dec6be844edbebcfb9c1fb8048c0a7e423fefa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a54fe04be4a8c1c81b0584c8978ed2b457b667e6a1ad4e16e522717c4adb1b4->leave($__internal_3a54fe04be4a8c1c81b0584c8978ed2b457b667e6a1ad4e16e522717c4adb1b4_prof);

        
        $__internal_f3e4467efdaca55123d8ff7d1dec6be844edbebcfb9c1fb8048c0a7e423fefa4->leave($__internal_f3e4467efdaca55123d8ff7d1dec6be844edbebcfb9c1fb8048c0a7e423fefa4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2b3d34fef16e1933a1cbf62ff6d4514ead2ea74c5019ad2fe8315af17652fc85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b3d34fef16e1933a1cbf62ff6d4514ead2ea74c5019ad2fe8315af17652fc85->enter($__internal_2b3d34fef16e1933a1cbf62ff6d4514ead2ea74c5019ad2fe8315af17652fc85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_aa24167193bac8e5cbf08c89d88c9ce59f1541a3d5a731bd36d5d1f9c389eae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa24167193bac8e5cbf08c89d88c9ce59f1541a3d5a731bd36d5d1f9c389eae3->enter($__internal_aa24167193bac8e5cbf08c89d88c9ce59f1541a3d5a731bd36d5d1f9c389eae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_aa24167193bac8e5cbf08c89d88c9ce59f1541a3d5a731bd36d5d1f9c389eae3->leave($__internal_aa24167193bac8e5cbf08c89d88c9ce59f1541a3d5a731bd36d5d1f9c389eae3_prof);

        
        $__internal_2b3d34fef16e1933a1cbf62ff6d4514ead2ea74c5019ad2fe8315af17652fc85->leave($__internal_2b3d34fef16e1933a1cbf62ff6d4514ead2ea74c5019ad2fe8315af17652fc85_prof);

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
