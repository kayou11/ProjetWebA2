<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_4383866547cacc8446584a3691135a3b65083537a9f941bd6bc84ad56f34bfc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee23f40ebb7544c521331c574aba2ddba4b4532064e0c789bcb719457cd17221 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee23f40ebb7544c521331c574aba2ddba4b4532064e0c789bcb719457cd17221->enter($__internal_ee23f40ebb7544c521331c574aba2ddba4b4532064e0c789bcb719457cd17221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_1ce5be1016560635993d6330dcbd96ffc87b587698319dd0d57e058c4a4ae6db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ce5be1016560635993d6330dcbd96ffc87b587698319dd0d57e058c4a4ae6db->enter($__internal_1ce5be1016560635993d6330dcbd96ffc87b587698319dd0d57e058c4a4ae6db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee23f40ebb7544c521331c574aba2ddba4b4532064e0c789bcb719457cd17221->leave($__internal_ee23f40ebb7544c521331c574aba2ddba4b4532064e0c789bcb719457cd17221_prof);

        
        $__internal_1ce5be1016560635993d6330dcbd96ffc87b587698319dd0d57e058c4a4ae6db->leave($__internal_1ce5be1016560635993d6330dcbd96ffc87b587698319dd0d57e058c4a4ae6db_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_014fa72864d78088a6694fdd65079b216eef1695fb51f87b9a67c0ba0a6c9901 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_014fa72864d78088a6694fdd65079b216eef1695fb51f87b9a67c0ba0a6c9901->enter($__internal_014fa72864d78088a6694fdd65079b216eef1695fb51f87b9a67c0ba0a6c9901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8d93e266fc49f0cc15496f4eb8a7d29efc0c0ca15ba9ecd3e0a531750c822afd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d93e266fc49f0cc15496f4eb8a7d29efc0c0ca15ba9ecd3e0a531750c822afd->enter($__internal_8d93e266fc49f0cc15496f4eb8a7d29efc0c0ca15ba9ecd3e0a531750c822afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8d93e266fc49f0cc15496f4eb8a7d29efc0c0ca15ba9ecd3e0a531750c822afd->leave($__internal_8d93e266fc49f0cc15496f4eb8a7d29efc0c0ca15ba9ecd3e0a531750c822afd_prof);

        
        $__internal_014fa72864d78088a6694fdd65079b216eef1695fb51f87b9a67c0ba0a6c9901->leave($__internal_014fa72864d78088a6694fdd65079b216eef1695fb51f87b9a67c0ba0a6c9901_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb26f04ea0a99f9d73ef0428fe0ca26d0ec1590e79a133e70f25b0425a72ca59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb26f04ea0a99f9d73ef0428fe0ca26d0ec1590e79a133e70f25b0425a72ca59->enter($__internal_fb26f04ea0a99f9d73ef0428fe0ca26d0ec1590e79a133e70f25b0425a72ca59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b634c136e03473f3402e4b6168a4c7cc917ab8dea071cfd83c6abafc0ac5c163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b634c136e03473f3402e4b6168a4c7cc917ab8dea071cfd83c6abafc0ac5c163->enter($__internal_b634c136e03473f3402e4b6168a4c7cc917ab8dea071cfd83c6abafc0ac5c163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_b634c136e03473f3402e4b6168a4c7cc917ab8dea071cfd83c6abafc0ac5c163->leave($__internal_b634c136e03473f3402e4b6168a4c7cc917ab8dea071cfd83c6abafc0ac5c163_prof);

        
        $__internal_fb26f04ea0a99f9d73ef0428fe0ca26d0ec1590e79a133e70f25b0425a72ca59->leave($__internal_fb26f04ea0a99f9d73ef0428fe0ca26d0ec1590e79a133e70f25b0425a72ca59_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
