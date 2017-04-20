<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_264b689a71259933874d7fdb50303f8c1fbe761192f1a3e6364e72d5a85c77ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1452e2a4f9ddb01d6222211ad62385a1f3fff92002ecb52318508f3e4de2c7e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1452e2a4f9ddb01d6222211ad62385a1f3fff92002ecb52318508f3e4de2c7e4->enter($__internal_1452e2a4f9ddb01d6222211ad62385a1f3fff92002ecb52318508f3e4de2c7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_078654cfbef35bc42578730e4a52afa27c7d0e4887de288752190d6d7ce172b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_078654cfbef35bc42578730e4a52afa27c7d0e4887de288752190d6d7ce172b5->enter($__internal_078654cfbef35bc42578730e4a52afa27c7d0e4887de288752190d6d7ce172b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1452e2a4f9ddb01d6222211ad62385a1f3fff92002ecb52318508f3e4de2c7e4->leave($__internal_1452e2a4f9ddb01d6222211ad62385a1f3fff92002ecb52318508f3e4de2c7e4_prof);

        
        $__internal_078654cfbef35bc42578730e4a52afa27c7d0e4887de288752190d6d7ce172b5->leave($__internal_078654cfbef35bc42578730e4a52afa27c7d0e4887de288752190d6d7ce172b5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_891527d4d20ea82261bac9ef96238e3a5036798735838c6c2bdec24ace357e40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_891527d4d20ea82261bac9ef96238e3a5036798735838c6c2bdec24ace357e40->enter($__internal_891527d4d20ea82261bac9ef96238e3a5036798735838c6c2bdec24ace357e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8f9e7fb7930a9d30b838e80745b542e93d3f5f565662be59abab30731226383e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f9e7fb7930a9d30b838e80745b542e93d3f5f565662be59abab30731226383e->enter($__internal_8f9e7fb7930a9d30b838e80745b542e93d3f5f565662be59abab30731226383e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8f9e7fb7930a9d30b838e80745b542e93d3f5f565662be59abab30731226383e->leave($__internal_8f9e7fb7930a9d30b838e80745b542e93d3f5f565662be59abab30731226383e_prof);

        
        $__internal_891527d4d20ea82261bac9ef96238e3a5036798735838c6c2bdec24ace357e40->leave($__internal_891527d4d20ea82261bac9ef96238e3a5036798735838c6c2bdec24ace357e40_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d9ab30ed2a8eefb91af532dac48223b2da2c6547bcab5c0312487ac4ac725705 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9ab30ed2a8eefb91af532dac48223b2da2c6547bcab5c0312487ac4ac725705->enter($__internal_d9ab30ed2a8eefb91af532dac48223b2da2c6547bcab5c0312487ac4ac725705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_eb2d239a10152f5fb897bdef95e7e90a54ce7d7b5aed20880e7472cf202ec366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb2d239a10152f5fb897bdef95e7e90a54ce7d7b5aed20880e7472cf202ec366->enter($__internal_eb2d239a10152f5fb897bdef95e7e90a54ce7d7b5aed20880e7472cf202ec366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_eb2d239a10152f5fb897bdef95e7e90a54ce7d7b5aed20880e7472cf202ec366->leave($__internal_eb2d239a10152f5fb897bdef95e7e90a54ce7d7b5aed20880e7472cf202ec366_prof);

        
        $__internal_d9ab30ed2a8eefb91af532dac48223b2da2c6547bcab5c0312487ac4ac725705->leave($__internal_d9ab30ed2a8eefb91af532dac48223b2da2c6547bcab5c0312487ac4ac725705_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_85332dafb26b3751d916a20f8ba4912b5c4e86fed577c11c9c2a286263f4e6fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85332dafb26b3751d916a20f8ba4912b5c4e86fed577c11c9c2a286263f4e6fd->enter($__internal_85332dafb26b3751d916a20f8ba4912b5c4e86fed577c11c9c2a286263f4e6fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7ac87e2b780e081b503e05be8fc66ebd3b5a5f724a15ea85e371aa527a1ab59f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ac87e2b780e081b503e05be8fc66ebd3b5a5f724a15ea85e371aa527a1ab59f->enter($__internal_7ac87e2b780e081b503e05be8fc66ebd3b5a5f724a15ea85e371aa527a1ab59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_7ac87e2b780e081b503e05be8fc66ebd3b5a5f724a15ea85e371aa527a1ab59f->leave($__internal_7ac87e2b780e081b503e05be8fc66ebd3b5a5f724a15ea85e371aa527a1ab59f_prof);

        
        $__internal_85332dafb26b3751d916a20f8ba4912b5c4e86fed577c11c9c2a286263f4e6fd->leave($__internal_85332dafb26b3751d916a20f8ba4912b5c4e86fed577c11c9c2a286263f4e6fd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
