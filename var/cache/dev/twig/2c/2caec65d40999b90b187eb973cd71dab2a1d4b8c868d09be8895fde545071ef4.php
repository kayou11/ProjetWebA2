<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_d765f3dfaae9a64b344e2bf69d0fa407f34fa05945dffb102ad3a018807fcf2b extends Twig_Template
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
        $__internal_c473fc9f103cf9a5fe3a1d55f3f2532fb3b87813a734a9f218b2aef54dc8a3dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c473fc9f103cf9a5fe3a1d55f3f2532fb3b87813a734a9f218b2aef54dc8a3dc->enter($__internal_c473fc9f103cf9a5fe3a1d55f3f2532fb3b87813a734a9f218b2aef54dc8a3dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_c3569387deb442a1bb43b4461a175485e1607771e8368d42f31681950e711f87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3569387deb442a1bb43b4461a175485e1607771e8368d42f31681950e711f87->enter($__internal_c3569387deb442a1bb43b4461a175485e1607771e8368d42f31681950e711f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c473fc9f103cf9a5fe3a1d55f3f2532fb3b87813a734a9f218b2aef54dc8a3dc->leave($__internal_c473fc9f103cf9a5fe3a1d55f3f2532fb3b87813a734a9f218b2aef54dc8a3dc_prof);

        
        $__internal_c3569387deb442a1bb43b4461a175485e1607771e8368d42f31681950e711f87->leave($__internal_c3569387deb442a1bb43b4461a175485e1607771e8368d42f31681950e711f87_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d0af7f2c7985a0a43e21b71e46acfa1946ab5e992a96e649ecb4ea187d18b051 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0af7f2c7985a0a43e21b71e46acfa1946ab5e992a96e649ecb4ea187d18b051->enter($__internal_d0af7f2c7985a0a43e21b71e46acfa1946ab5e992a96e649ecb4ea187d18b051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_613f5fa360bdd28df775b223b8fb7cb3f30001e381601cd1027595d291c66784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_613f5fa360bdd28df775b223b8fb7cb3f30001e381601cd1027595d291c66784->enter($__internal_613f5fa360bdd28df775b223b8fb7cb3f30001e381601cd1027595d291c66784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_613f5fa360bdd28df775b223b8fb7cb3f30001e381601cd1027595d291c66784->leave($__internal_613f5fa360bdd28df775b223b8fb7cb3f30001e381601cd1027595d291c66784_prof);

        
        $__internal_d0af7f2c7985a0a43e21b71e46acfa1946ab5e992a96e649ecb4ea187d18b051->leave($__internal_d0af7f2c7985a0a43e21b71e46acfa1946ab5e992a96e649ecb4ea187d18b051_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6e9f01582ea822d50ef00a6977bfa3e5c6e3e7c4322f258dcfea63170fe9a31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6e9f01582ea822d50ef00a6977bfa3e5c6e3e7c4322f258dcfea63170fe9a31->enter($__internal_f6e9f01582ea822d50ef00a6977bfa3e5c6e3e7c4322f258dcfea63170fe9a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1f90d3c7cb9c5486bd6fd547c81c8c3dde6afed33fb2a1248f41f36be38c4d06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f90d3c7cb9c5486bd6fd547c81c8c3dde6afed33fb2a1248f41f36be38c4d06->enter($__internal_1f90d3c7cb9c5486bd6fd547c81c8c3dde6afed33fb2a1248f41f36be38c4d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1f90d3c7cb9c5486bd6fd547c81c8c3dde6afed33fb2a1248f41f36be38c4d06->leave($__internal_1f90d3c7cb9c5486bd6fd547c81c8c3dde6afed33fb2a1248f41f36be38c4d06_prof);

        
        $__internal_f6e9f01582ea822d50ef00a6977bfa3e5c6e3e7c4322f258dcfea63170fe9a31->leave($__internal_f6e9f01582ea822d50ef00a6977bfa3e5c6e3e7c4322f258dcfea63170fe9a31_prof);

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
