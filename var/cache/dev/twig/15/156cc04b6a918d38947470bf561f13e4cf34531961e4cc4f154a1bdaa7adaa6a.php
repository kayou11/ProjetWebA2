<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_1d68025d5f73c747009c113dff753ad311eca1270fe250bea88d30117e890600 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_5e29fc1379c0b2afb5e8050fdcc8676b1e873cf422b45fcf6fd7add9aa5479cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e29fc1379c0b2afb5e8050fdcc8676b1e873cf422b45fcf6fd7add9aa5479cd->enter($__internal_5e29fc1379c0b2afb5e8050fdcc8676b1e873cf422b45fcf6fd7add9aa5479cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_03cf05e6cabfdb69d2e03220ff3a703337db4b5d2c3b5fee62913cd9a3da8f80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03cf05e6cabfdb69d2e03220ff3a703337db4b5d2c3b5fee62913cd9a3da8f80->enter($__internal_03cf05e6cabfdb69d2e03220ff3a703337db4b5d2c3b5fee62913cd9a3da8f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e29fc1379c0b2afb5e8050fdcc8676b1e873cf422b45fcf6fd7add9aa5479cd->leave($__internal_5e29fc1379c0b2afb5e8050fdcc8676b1e873cf422b45fcf6fd7add9aa5479cd_prof);

        
        $__internal_03cf05e6cabfdb69d2e03220ff3a703337db4b5d2c3b5fee62913cd9a3da8f80->leave($__internal_03cf05e6cabfdb69d2e03220ff3a703337db4b5d2c3b5fee62913cd9a3da8f80_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8741b6b622536f2d4aa144d5e9a51561eb5c003fad6ad372e329488da9998eb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8741b6b622536f2d4aa144d5e9a51561eb5c003fad6ad372e329488da9998eb1->enter($__internal_8741b6b622536f2d4aa144d5e9a51561eb5c003fad6ad372e329488da9998eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_98a1379c6abe9ce19e434374f355b2a4acbd935904c402cbcd595b7417b38799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98a1379c6abe9ce19e434374f355b2a4acbd935904c402cbcd595b7417b38799->enter($__internal_98a1379c6abe9ce19e434374f355b2a4acbd935904c402cbcd595b7417b38799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_98a1379c6abe9ce19e434374f355b2a4acbd935904c402cbcd595b7417b38799->leave($__internal_98a1379c6abe9ce19e434374f355b2a4acbd935904c402cbcd595b7417b38799_prof);

        
        $__internal_8741b6b622536f2d4aa144d5e9a51561eb5c003fad6ad372e329488da9998eb1->leave($__internal_8741b6b622536f2d4aa144d5e9a51561eb5c003fad6ad372e329488da9998eb1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c68dc93064d0f8471049a6da915786ccc8544af789c82bb7c43ed057a90f9283 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c68dc93064d0f8471049a6da915786ccc8544af789c82bb7c43ed057a90f9283->enter($__internal_c68dc93064d0f8471049a6da915786ccc8544af789c82bb7c43ed057a90f9283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2dd8061076560f97741ef80076bae85727f08f341020d807c7f8946cdea201fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd8061076560f97741ef80076bae85727f08f341020d807c7f8946cdea201fb->enter($__internal_2dd8061076560f97741ef80076bae85727f08f341020d807c7f8946cdea201fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2dd8061076560f97741ef80076bae85727f08f341020d807c7f8946cdea201fb->leave($__internal_2dd8061076560f97741ef80076bae85727f08f341020d807c7f8946cdea201fb_prof);

        
        $__internal_c68dc93064d0f8471049a6da915786ccc8544af789c82bb7c43ed057a90f9283->leave($__internal_c68dc93064d0f8471049a6da915786ccc8544af789c82bb7c43ed057a90f9283_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d2cc789013ed2f81647d702e3cd05ba85eac80d75436546c0b4bdb388cfbb255 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2cc789013ed2f81647d702e3cd05ba85eac80d75436546c0b4bdb388cfbb255->enter($__internal_d2cc789013ed2f81647d702e3cd05ba85eac80d75436546c0b4bdb388cfbb255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d4ebe345ff84d938c498db65f7bd4518fdf087e6665e9c297956631793768c5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4ebe345ff84d938c498db65f7bd4518fdf087e6665e9c297956631793768c5e->enter($__internal_d4ebe345ff84d938c498db65f7bd4518fdf087e6665e9c297956631793768c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_d4ebe345ff84d938c498db65f7bd4518fdf087e6665e9c297956631793768c5e->leave($__internal_d4ebe345ff84d938c498db65f7bd4518fdf087e6665e9c297956631793768c5e_prof);

        
        $__internal_d2cc789013ed2f81647d702e3cd05ba85eac80d75436546c0b4bdb388cfbb255->leave($__internal_d2cc789013ed2f81647d702e3cd05ba85eac80d75436546c0b4bdb388cfbb255_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
