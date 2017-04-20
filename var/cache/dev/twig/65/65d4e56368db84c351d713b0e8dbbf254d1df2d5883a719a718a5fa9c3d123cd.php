<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_864df42daf1cf08e7ccc0c5c04fc09baa59d79fe0f063fbcb88ce2a11afba0d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_1271b00be725b022328d3736d968873af2dce51360bf6d06b8d88b1306ed46d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1271b00be725b022328d3736d968873af2dce51360bf6d06b8d88b1306ed46d4->enter($__internal_1271b00be725b022328d3736d968873af2dce51360bf6d06b8d88b1306ed46d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_f2e21f1c7d5d739e73c280e23aa9ba36342447f416104aa10597b61a7ea49fa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2e21f1c7d5d739e73c280e23aa9ba36342447f416104aa10597b61a7ea49fa7->enter($__internal_f2e21f1c7d5d739e73c280e23aa9ba36342447f416104aa10597b61a7ea49fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1271b00be725b022328d3736d968873af2dce51360bf6d06b8d88b1306ed46d4->leave($__internal_1271b00be725b022328d3736d968873af2dce51360bf6d06b8d88b1306ed46d4_prof);

        
        $__internal_f2e21f1c7d5d739e73c280e23aa9ba36342447f416104aa10597b61a7ea49fa7->leave($__internal_f2e21f1c7d5d739e73c280e23aa9ba36342447f416104aa10597b61a7ea49fa7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7f033175450b50f0416747048227f94f1f60fc121642572894261742e2e3413d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f033175450b50f0416747048227f94f1f60fc121642572894261742e2e3413d->enter($__internal_7f033175450b50f0416747048227f94f1f60fc121642572894261742e2e3413d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7f5d27af39797c2a5335639a533e4feef7465661ef890717060960dc00e03b64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f5d27af39797c2a5335639a533e4feef7465661ef890717060960dc00e03b64->enter($__internal_7f5d27af39797c2a5335639a533e4feef7465661ef890717060960dc00e03b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_7f5d27af39797c2a5335639a533e4feef7465661ef890717060960dc00e03b64->leave($__internal_7f5d27af39797c2a5335639a533e4feef7465661ef890717060960dc00e03b64_prof);

        
        $__internal_7f033175450b50f0416747048227f94f1f60fc121642572894261742e2e3413d->leave($__internal_7f033175450b50f0416747048227f94f1f60fc121642572894261742e2e3413d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
