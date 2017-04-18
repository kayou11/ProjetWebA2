<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_113fe9f2e9afac590c31ca139daa854d684781ed6b8161e0b7e8bf99b9946bcf extends Twig_Template
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
        $__internal_ebde1fbdf62a2133e56957760124645ae532c3c2393ec0a69fa939debf5b5d8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebde1fbdf62a2133e56957760124645ae532c3c2393ec0a69fa939debf5b5d8b->enter($__internal_ebde1fbdf62a2133e56957760124645ae532c3c2393ec0a69fa939debf5b5d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_a10e6868da1147ea7a912fbcf48cb221a8fcdc18c4fd8d1a0d3738801441da5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a10e6868da1147ea7a912fbcf48cb221a8fcdc18c4fd8d1a0d3738801441da5b->enter($__internal_a10e6868da1147ea7a912fbcf48cb221a8fcdc18c4fd8d1a0d3738801441da5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

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
";
        
        $__internal_ebde1fbdf62a2133e56957760124645ae532c3c2393ec0a69fa939debf5b5d8b->leave($__internal_ebde1fbdf62a2133e56957760124645ae532c3c2393ec0a69fa939debf5b5d8b_prof);

        
        $__internal_a10e6868da1147ea7a912fbcf48cb221a8fcdc18c4fd8d1a0d3738801441da5b->leave($__internal_a10e6868da1147ea7a912fbcf48cb221a8fcdc18c4fd8d1a0d3738801441da5b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "@FOSUser/Profile/show_content.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
