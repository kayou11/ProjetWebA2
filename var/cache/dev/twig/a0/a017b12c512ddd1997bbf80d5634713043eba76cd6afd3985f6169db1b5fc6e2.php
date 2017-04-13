<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_917bc7bda74a026d08e3f02c96551999df1052ae28f9ce1f4d823d19c74a4ab3 extends Twig_Template
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
        $__internal_81e3c2c06d589b0798f0a95d574d70c16a4e3ded6dd9dd2413323a6fd61d2a00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81e3c2c06d589b0798f0a95d574d70c16a4e3ded6dd9dd2413323a6fd61d2a00->enter($__internal_81e3c2c06d589b0798f0a95d574d70c16a4e3ded6dd9dd2413323a6fd61d2a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5dda34b23bfe7a03d624a0cecb9d1db529304b498333b0e87aa4a147b4477a07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dda34b23bfe7a03d624a0cecb9d1db529304b498333b0e87aa4a147b4477a07->enter($__internal_5dda34b23bfe7a03d624a0cecb9d1db529304b498333b0e87aa4a147b4477a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81e3c2c06d589b0798f0a95d574d70c16a4e3ded6dd9dd2413323a6fd61d2a00->leave($__internal_81e3c2c06d589b0798f0a95d574d70c16a4e3ded6dd9dd2413323a6fd61d2a00_prof);

        
        $__internal_5dda34b23bfe7a03d624a0cecb9d1db529304b498333b0e87aa4a147b4477a07->leave($__internal_5dda34b23bfe7a03d624a0cecb9d1db529304b498333b0e87aa4a147b4477a07_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e60c47fbc9d2683b6070301b49898c3b79b9c31eee6abe06161a41aa5186a0ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e60c47fbc9d2683b6070301b49898c3b79b9c31eee6abe06161a41aa5186a0ac->enter($__internal_e60c47fbc9d2683b6070301b49898c3b79b9c31eee6abe06161a41aa5186a0ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e23f6556f78687bd0b3751392584bc64a19901f2e4f57f00a252fe20cc9c2c94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e23f6556f78687bd0b3751392584bc64a19901f2e4f57f00a252fe20cc9c2c94->enter($__internal_e23f6556f78687bd0b3751392584bc64a19901f2e4f57f00a252fe20cc9c2c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e23f6556f78687bd0b3751392584bc64a19901f2e4f57f00a252fe20cc9c2c94->leave($__internal_e23f6556f78687bd0b3751392584bc64a19901f2e4f57f00a252fe20cc9c2c94_prof);

        
        $__internal_e60c47fbc9d2683b6070301b49898c3b79b9c31eee6abe06161a41aa5186a0ac->leave($__internal_e60c47fbc9d2683b6070301b49898c3b79b9c31eee6abe06161a41aa5186a0ac_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6ae20fb6563b6d465c109d36e07493edfe39ad9e834c1f389f9d9246f75a63f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ae20fb6563b6d465c109d36e07493edfe39ad9e834c1f389f9d9246f75a63f5->enter($__internal_6ae20fb6563b6d465c109d36e07493edfe39ad9e834c1f389f9d9246f75a63f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c28bddc1ebe2dada9f1019dbcd66fc329a53ceab7db8a52f447033deac475611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c28bddc1ebe2dada9f1019dbcd66fc329a53ceab7db8a52f447033deac475611->enter($__internal_c28bddc1ebe2dada9f1019dbcd66fc329a53ceab7db8a52f447033deac475611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c28bddc1ebe2dada9f1019dbcd66fc329a53ceab7db8a52f447033deac475611->leave($__internal_c28bddc1ebe2dada9f1019dbcd66fc329a53ceab7db8a52f447033deac475611_prof);

        
        $__internal_6ae20fb6563b6d465c109d36e07493edfe39ad9e834c1f389f9d9246f75a63f5->leave($__internal_6ae20fb6563b6d465c109d36e07493edfe39ad9e834c1f389f9d9246f75a63f5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5a08733f508a25c75af4ddd45ba1d877b7b22eb472d562f88af91ad78dc696ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a08733f508a25c75af4ddd45ba1d877b7b22eb472d562f88af91ad78dc696ec->enter($__internal_5a08733f508a25c75af4ddd45ba1d877b7b22eb472d562f88af91ad78dc696ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d139fee5a3e2acc16aee8a07a1b670759c5236fbf4609a2e918e732d214e2f34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d139fee5a3e2acc16aee8a07a1b670759c5236fbf4609a2e918e732d214e2f34->enter($__internal_d139fee5a3e2acc16aee8a07a1b670759c5236fbf4609a2e918e732d214e2f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d139fee5a3e2acc16aee8a07a1b670759c5236fbf4609a2e918e732d214e2f34->leave($__internal_d139fee5a3e2acc16aee8a07a1b670759c5236fbf4609a2e918e732d214e2f34_prof);

        
        $__internal_5a08733f508a25c75af4ddd45ba1d877b7b22eb472d562f88af91ad78dc696ec->leave($__internal_5a08733f508a25c75af4ddd45ba1d877b7b22eb472d562f88af91ad78dc696ec_prof);

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
