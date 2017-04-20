<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1d68025d5f73c747009c113dff753ad311eca1270fe250bea88d30117e890600 extends Twig_Template
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
        $__internal_ecc87f7b6498618bbcc27b8d9aa36d5274ead5b01cb18c7196b5353586fc4b88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecc87f7b6498618bbcc27b8d9aa36d5274ead5b01cb18c7196b5353586fc4b88->enter($__internal_ecc87f7b6498618bbcc27b8d9aa36d5274ead5b01cb18c7196b5353586fc4b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_58dacea60978cfc3aba1ee3ed2a63bba090ca02fddb494aee21b07cc50af92e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58dacea60978cfc3aba1ee3ed2a63bba090ca02fddb494aee21b07cc50af92e6->enter($__internal_58dacea60978cfc3aba1ee3ed2a63bba090ca02fddb494aee21b07cc50af92e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecc87f7b6498618bbcc27b8d9aa36d5274ead5b01cb18c7196b5353586fc4b88->leave($__internal_ecc87f7b6498618bbcc27b8d9aa36d5274ead5b01cb18c7196b5353586fc4b88_prof);

        
        $__internal_58dacea60978cfc3aba1ee3ed2a63bba090ca02fddb494aee21b07cc50af92e6->leave($__internal_58dacea60978cfc3aba1ee3ed2a63bba090ca02fddb494aee21b07cc50af92e6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_94f6deafb41225d4931f5f74b1ed211e7a43ffa3e8efaa240c00757f1a687524 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94f6deafb41225d4931f5f74b1ed211e7a43ffa3e8efaa240c00757f1a687524->enter($__internal_94f6deafb41225d4931f5f74b1ed211e7a43ffa3e8efaa240c00757f1a687524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3350bc5d24a03aae928bdffa91fac4ee29693b093d4c348dacd9bf3b2587ed7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3350bc5d24a03aae928bdffa91fac4ee29693b093d4c348dacd9bf3b2587ed7b->enter($__internal_3350bc5d24a03aae928bdffa91fac4ee29693b093d4c348dacd9bf3b2587ed7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3350bc5d24a03aae928bdffa91fac4ee29693b093d4c348dacd9bf3b2587ed7b->leave($__internal_3350bc5d24a03aae928bdffa91fac4ee29693b093d4c348dacd9bf3b2587ed7b_prof);

        
        $__internal_94f6deafb41225d4931f5f74b1ed211e7a43ffa3e8efaa240c00757f1a687524->leave($__internal_94f6deafb41225d4931f5f74b1ed211e7a43ffa3e8efaa240c00757f1a687524_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8211a11fcce6ef91b5235e9e52f8f47cebae664f87d6be58841b7338a22dd1d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8211a11fcce6ef91b5235e9e52f8f47cebae664f87d6be58841b7338a22dd1d2->enter($__internal_8211a11fcce6ef91b5235e9e52f8f47cebae664f87d6be58841b7338a22dd1d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ff65ac0e1f321d387a23324b16761f3ad97dabeceef36b270773b7983889a9d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff65ac0e1f321d387a23324b16761f3ad97dabeceef36b270773b7983889a9d8->enter($__internal_ff65ac0e1f321d387a23324b16761f3ad97dabeceef36b270773b7983889a9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ff65ac0e1f321d387a23324b16761f3ad97dabeceef36b270773b7983889a9d8->leave($__internal_ff65ac0e1f321d387a23324b16761f3ad97dabeceef36b270773b7983889a9d8_prof);

        
        $__internal_8211a11fcce6ef91b5235e9e52f8f47cebae664f87d6be58841b7338a22dd1d2->leave($__internal_8211a11fcce6ef91b5235e9e52f8f47cebae664f87d6be58841b7338a22dd1d2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fadc807ff10abe9db583b811392b3a5c8b868a2e3d0e117c17f645fa6378310d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fadc807ff10abe9db583b811392b3a5c8b868a2e3d0e117c17f645fa6378310d->enter($__internal_fadc807ff10abe9db583b811392b3a5c8b868a2e3d0e117c17f645fa6378310d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1abe6ca7d3e2130bcf973a81c28fab0ef1151f7df399be65eec3a4155b3893c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1abe6ca7d3e2130bcf973a81c28fab0ef1151f7df399be65eec3a4155b3893c5->enter($__internal_1abe6ca7d3e2130bcf973a81c28fab0ef1151f7df399be65eec3a4155b3893c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_1abe6ca7d3e2130bcf973a81c28fab0ef1151f7df399be65eec3a4155b3893c5->leave($__internal_1abe6ca7d3e2130bcf973a81c28fab0ef1151f7df399be65eec3a4155b3893c5_prof);

        
        $__internal_fadc807ff10abe9db583b811392b3a5c8b868a2e3d0e117c17f645fa6378310d->leave($__internal_fadc807ff10abe9db583b811392b3a5c8b868a2e3d0e117c17f645fa6378310d_prof);

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
