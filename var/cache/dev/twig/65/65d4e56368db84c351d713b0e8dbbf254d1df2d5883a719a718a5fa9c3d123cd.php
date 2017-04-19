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
        $__internal_a3536f539a68db54476a51318688c674559a3925db52eef0eac1bdd166b1d2ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3536f539a68db54476a51318688c674559a3925db52eef0eac1bdd166b1d2ea->enter($__internal_a3536f539a68db54476a51318688c674559a3925db52eef0eac1bdd166b1d2ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_ecf11cb113f07631123dc11efc1d0cd186a56b2bb68a2cf86ddf85ac028cfb08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecf11cb113f07631123dc11efc1d0cd186a56b2bb68a2cf86ddf85ac028cfb08->enter($__internal_ecf11cb113f07631123dc11efc1d0cd186a56b2bb68a2cf86ddf85ac028cfb08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3536f539a68db54476a51318688c674559a3925db52eef0eac1bdd166b1d2ea->leave($__internal_a3536f539a68db54476a51318688c674559a3925db52eef0eac1bdd166b1d2ea_prof);

        
        $__internal_ecf11cb113f07631123dc11efc1d0cd186a56b2bb68a2cf86ddf85ac028cfb08->leave($__internal_ecf11cb113f07631123dc11efc1d0cd186a56b2bb68a2cf86ddf85ac028cfb08_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f41ffb8456358518ef6cf666ec6f3b44fa1a09c2306ef6f83b398df86b4e4d11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f41ffb8456358518ef6cf666ec6f3b44fa1a09c2306ef6f83b398df86b4e4d11->enter($__internal_f41ffb8456358518ef6cf666ec6f3b44fa1a09c2306ef6f83b398df86b4e4d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_62fc737e4becc5d88156fdde41fa1562957354b83e4fe35c081c060e4ed01862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62fc737e4becc5d88156fdde41fa1562957354b83e4fe35c081c060e4ed01862->enter($__internal_62fc737e4becc5d88156fdde41fa1562957354b83e4fe35c081c060e4ed01862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_62fc737e4becc5d88156fdde41fa1562957354b83e4fe35c081c060e4ed01862->leave($__internal_62fc737e4becc5d88156fdde41fa1562957354b83e4fe35c081c060e4ed01862_prof);

        
        $__internal_f41ffb8456358518ef6cf666ec6f3b44fa1a09c2306ef6f83b398df86b4e4d11->leave($__internal_f41ffb8456358518ef6cf666ec6f3b44fa1a09c2306ef6f83b398df86b4e4d11_prof);

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
