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
        $__internal_476a6988fe0b12bf0beb8bb80dd549ee94821ceb8f9d123815fe893b508a28d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_476a6988fe0b12bf0beb8bb80dd549ee94821ceb8f9d123815fe893b508a28d2->enter($__internal_476a6988fe0b12bf0beb8bb80dd549ee94821ceb8f9d123815fe893b508a28d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4be3d9979c2d2d766ec6fb5c671dbda25f6599d923e5dde6d6614a40060f8e31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4be3d9979c2d2d766ec6fb5c671dbda25f6599d923e5dde6d6614a40060f8e31->enter($__internal_4be3d9979c2d2d766ec6fb5c671dbda25f6599d923e5dde6d6614a40060f8e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_476a6988fe0b12bf0beb8bb80dd549ee94821ceb8f9d123815fe893b508a28d2->leave($__internal_476a6988fe0b12bf0beb8bb80dd549ee94821ceb8f9d123815fe893b508a28d2_prof);

        
        $__internal_4be3d9979c2d2d766ec6fb5c671dbda25f6599d923e5dde6d6614a40060f8e31->leave($__internal_4be3d9979c2d2d766ec6fb5c671dbda25f6599d923e5dde6d6614a40060f8e31_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_510752f143f8efd9793fd8d4cdd3c4cc4349bf63292bf612e32ae70fb957c36d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_510752f143f8efd9793fd8d4cdd3c4cc4349bf63292bf612e32ae70fb957c36d->enter($__internal_510752f143f8efd9793fd8d4cdd3c4cc4349bf63292bf612e32ae70fb957c36d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_abcd7fb53c19f1429d4e94b5e6b6709724608e33f8be1e0ba08be9a34dfcd238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abcd7fb53c19f1429d4e94b5e6b6709724608e33f8be1e0ba08be9a34dfcd238->enter($__internal_abcd7fb53c19f1429d4e94b5e6b6709724608e33f8be1e0ba08be9a34dfcd238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_abcd7fb53c19f1429d4e94b5e6b6709724608e33f8be1e0ba08be9a34dfcd238->leave($__internal_abcd7fb53c19f1429d4e94b5e6b6709724608e33f8be1e0ba08be9a34dfcd238_prof);

        
        $__internal_510752f143f8efd9793fd8d4cdd3c4cc4349bf63292bf612e32ae70fb957c36d->leave($__internal_510752f143f8efd9793fd8d4cdd3c4cc4349bf63292bf612e32ae70fb957c36d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_72c2d59e7e0708cde43fe8f1fe1401c19864230d5ca54a15732b3d5b8c779a6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72c2d59e7e0708cde43fe8f1fe1401c19864230d5ca54a15732b3d5b8c779a6f->enter($__internal_72c2d59e7e0708cde43fe8f1fe1401c19864230d5ca54a15732b3d5b8c779a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_db9c17e1b40d06c226914b02623ba9ee41d5450e528bb00c73030d280da849ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db9c17e1b40d06c226914b02623ba9ee41d5450e528bb00c73030d280da849ec->enter($__internal_db9c17e1b40d06c226914b02623ba9ee41d5450e528bb00c73030d280da849ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_db9c17e1b40d06c226914b02623ba9ee41d5450e528bb00c73030d280da849ec->leave($__internal_db9c17e1b40d06c226914b02623ba9ee41d5450e528bb00c73030d280da849ec_prof);

        
        $__internal_72c2d59e7e0708cde43fe8f1fe1401c19864230d5ca54a15732b3d5b8c779a6f->leave($__internal_72c2d59e7e0708cde43fe8f1fe1401c19864230d5ca54a15732b3d5b8c779a6f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ccee778fb105bf552bdf5a489446474b91746b9f925fff30953af8f1746c750d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccee778fb105bf552bdf5a489446474b91746b9f925fff30953af8f1746c750d->enter($__internal_ccee778fb105bf552bdf5a489446474b91746b9f925fff30953af8f1746c750d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_20006fc95de8eba6a0c981c2773eb8409e770e3e6a2ff10c97be46f375432866 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20006fc95de8eba6a0c981c2773eb8409e770e3e6a2ff10c97be46f375432866->enter($__internal_20006fc95de8eba6a0c981c2773eb8409e770e3e6a2ff10c97be46f375432866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_20006fc95de8eba6a0c981c2773eb8409e770e3e6a2ff10c97be46f375432866->leave($__internal_20006fc95de8eba6a0c981c2773eb8409e770e3e6a2ff10c97be46f375432866_prof);

        
        $__internal_ccee778fb105bf552bdf5a489446474b91746b9f925fff30953af8f1746c750d->leave($__internal_ccee778fb105bf552bdf5a489446474b91746b9f925fff30953af8f1746c750d_prof);

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
