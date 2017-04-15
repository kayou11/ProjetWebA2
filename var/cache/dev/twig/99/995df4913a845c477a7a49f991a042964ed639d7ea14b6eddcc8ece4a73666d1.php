<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a9f5e58d17597842fe2735c1e1ebb1321aa5478336376c4e65bcc15131ee631a extends Twig_Template
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
        $__internal_975ce487271f6eeb565ce3e4cea3fd6d1cf00b5c045dd8eb0609c9522283825d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_975ce487271f6eeb565ce3e4cea3fd6d1cf00b5c045dd8eb0609c9522283825d->enter($__internal_975ce487271f6eeb565ce3e4cea3fd6d1cf00b5c045dd8eb0609c9522283825d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7aec04e388a1f5fb0d5ba9de6dd44b38e754b72553d7e526b3889ec9cff95437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aec04e388a1f5fb0d5ba9de6dd44b38e754b72553d7e526b3889ec9cff95437->enter($__internal_7aec04e388a1f5fb0d5ba9de6dd44b38e754b72553d7e526b3889ec9cff95437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_975ce487271f6eeb565ce3e4cea3fd6d1cf00b5c045dd8eb0609c9522283825d->leave($__internal_975ce487271f6eeb565ce3e4cea3fd6d1cf00b5c045dd8eb0609c9522283825d_prof);

        
        $__internal_7aec04e388a1f5fb0d5ba9de6dd44b38e754b72553d7e526b3889ec9cff95437->leave($__internal_7aec04e388a1f5fb0d5ba9de6dd44b38e754b72553d7e526b3889ec9cff95437_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_efcdb7ebf7c0349a31bb249e256a913d47a0e59ca5c850882fdf602a7dcff59e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efcdb7ebf7c0349a31bb249e256a913d47a0e59ca5c850882fdf602a7dcff59e->enter($__internal_efcdb7ebf7c0349a31bb249e256a913d47a0e59ca5c850882fdf602a7dcff59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3f3b82633c1842867acd832e61eda09830cbfd104e8f3d5fb424e5f8b309d084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f3b82633c1842867acd832e61eda09830cbfd104e8f3d5fb424e5f8b309d084->enter($__internal_3f3b82633c1842867acd832e61eda09830cbfd104e8f3d5fb424e5f8b309d084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3f3b82633c1842867acd832e61eda09830cbfd104e8f3d5fb424e5f8b309d084->leave($__internal_3f3b82633c1842867acd832e61eda09830cbfd104e8f3d5fb424e5f8b309d084_prof);

        
        $__internal_efcdb7ebf7c0349a31bb249e256a913d47a0e59ca5c850882fdf602a7dcff59e->leave($__internal_efcdb7ebf7c0349a31bb249e256a913d47a0e59ca5c850882fdf602a7dcff59e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_56b212a292a007bd23772d945d25e344f6eb7b206a9b1863cf0b701839795bb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56b212a292a007bd23772d945d25e344f6eb7b206a9b1863cf0b701839795bb3->enter($__internal_56b212a292a007bd23772d945d25e344f6eb7b206a9b1863cf0b701839795bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_df85141960664d46726186d78c08bfbf50e5066d979237462880d5bc6bfc1101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df85141960664d46726186d78c08bfbf50e5066d979237462880d5bc6bfc1101->enter($__internal_df85141960664d46726186d78c08bfbf50e5066d979237462880d5bc6bfc1101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_df85141960664d46726186d78c08bfbf50e5066d979237462880d5bc6bfc1101->leave($__internal_df85141960664d46726186d78c08bfbf50e5066d979237462880d5bc6bfc1101_prof);

        
        $__internal_56b212a292a007bd23772d945d25e344f6eb7b206a9b1863cf0b701839795bb3->leave($__internal_56b212a292a007bd23772d945d25e344f6eb7b206a9b1863cf0b701839795bb3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d58dfd2a37e6be5e440f26962e1df62e817c7016f484eff60723e118dfa36a3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d58dfd2a37e6be5e440f26962e1df62e817c7016f484eff60723e118dfa36a3c->enter($__internal_d58dfd2a37e6be5e440f26962e1df62e817c7016f484eff60723e118dfa36a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_616218dc29cf9f55d32530f1ef5671ee57db7f7ee7ecc7c4c659318e874bbc99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_616218dc29cf9f55d32530f1ef5671ee57db7f7ee7ecc7c4c659318e874bbc99->enter($__internal_616218dc29cf9f55d32530f1ef5671ee57db7f7ee7ecc7c4c659318e874bbc99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_616218dc29cf9f55d32530f1ef5671ee57db7f7ee7ecc7c4c659318e874bbc99->leave($__internal_616218dc29cf9f55d32530f1ef5671ee57db7f7ee7ecc7c4c659318e874bbc99_prof);

        
        $__internal_d58dfd2a37e6be5e440f26962e1df62e817c7016f484eff60723e118dfa36a3c->leave($__internal_d58dfd2a37e6be5e440f26962e1df62e817c7016f484eff60723e118dfa36a3c_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
