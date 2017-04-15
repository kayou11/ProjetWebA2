<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_6dbf4adfdd53e9f162bf0f2d7043f104386814c64671737a087e1c2205b0a6bd extends Twig_Template
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
        $__internal_82f99f2874d3adfddd249427f37b9200b49d58daf3c874cf6cc0507ccad5a8df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82f99f2874d3adfddd249427f37b9200b49d58daf3c874cf6cc0507ccad5a8df->enter($__internal_82f99f2874d3adfddd249427f37b9200b49d58daf3c874cf6cc0507ccad5a8df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_2a40a1ad351a3954c448dd84f257cd8b6235e673cfe98344a0724fb4f342629b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a40a1ad351a3954c448dd84f257cd8b6235e673cfe98344a0724fb4f342629b->enter($__internal_2a40a1ad351a3954c448dd84f257cd8b6235e673cfe98344a0724fb4f342629b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82f99f2874d3adfddd249427f37b9200b49d58daf3c874cf6cc0507ccad5a8df->leave($__internal_82f99f2874d3adfddd249427f37b9200b49d58daf3c874cf6cc0507ccad5a8df_prof);

        
        $__internal_2a40a1ad351a3954c448dd84f257cd8b6235e673cfe98344a0724fb4f342629b->leave($__internal_2a40a1ad351a3954c448dd84f257cd8b6235e673cfe98344a0724fb4f342629b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4ef1e12d5da73bf3143c307d08439a10381993df1a9cb4098630f7d13d366f60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ef1e12d5da73bf3143c307d08439a10381993df1a9cb4098630f7d13d366f60->enter($__internal_4ef1e12d5da73bf3143c307d08439a10381993df1a9cb4098630f7d13d366f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e6b38b2d8f4a13de4eadb174b2c8664350ff8690999dc972e7c9d9f94b244d5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6b38b2d8f4a13de4eadb174b2c8664350ff8690999dc972e7c9d9f94b244d5d->enter($__internal_e6b38b2d8f4a13de4eadb174b2c8664350ff8690999dc972e7c9d9f94b244d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e6b38b2d8f4a13de4eadb174b2c8664350ff8690999dc972e7c9d9f94b244d5d->leave($__internal_e6b38b2d8f4a13de4eadb174b2c8664350ff8690999dc972e7c9d9f94b244d5d_prof);

        
        $__internal_4ef1e12d5da73bf3143c307d08439a10381993df1a9cb4098630f7d13d366f60->leave($__internal_4ef1e12d5da73bf3143c307d08439a10381993df1a9cb4098630f7d13d366f60_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_59d8fdaa7a8b70cc423702672b708fd81338afc93723216e6e8ff4f51b522366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59d8fdaa7a8b70cc423702672b708fd81338afc93723216e6e8ff4f51b522366->enter($__internal_59d8fdaa7a8b70cc423702672b708fd81338afc93723216e6e8ff4f51b522366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_aa024308e4d16a0f19240c51926e0aece44f0c162659e59d28aae33d28e5d804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa024308e4d16a0f19240c51926e0aece44f0c162659e59d28aae33d28e5d804->enter($__internal_aa024308e4d16a0f19240c51926e0aece44f0c162659e59d28aae33d28e5d804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_aa024308e4d16a0f19240c51926e0aece44f0c162659e59d28aae33d28e5d804->leave($__internal_aa024308e4d16a0f19240c51926e0aece44f0c162659e59d28aae33d28e5d804_prof);

        
        $__internal_59d8fdaa7a8b70cc423702672b708fd81338afc93723216e6e8ff4f51b522366->leave($__internal_59d8fdaa7a8b70cc423702672b708fd81338afc93723216e6e8ff4f51b522366_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8f3a180e0d6a55432556ff058ffdd949e362dc9f00444121f6007b0957cea818 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f3a180e0d6a55432556ff058ffdd949e362dc9f00444121f6007b0957cea818->enter($__internal_8f3a180e0d6a55432556ff058ffdd949e362dc9f00444121f6007b0957cea818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c83b1dd3eb9e65afc921a799413fa42c2913af9054cc9be5d3c1aaece21d1751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c83b1dd3eb9e65afc921a799413fa42c2913af9054cc9be5d3c1aaece21d1751->enter($__internal_c83b1dd3eb9e65afc921a799413fa42c2913af9054cc9be5d3c1aaece21d1751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c83b1dd3eb9e65afc921a799413fa42c2913af9054cc9be5d3c1aaece21d1751->leave($__internal_c83b1dd3eb9e65afc921a799413fa42c2913af9054cc9be5d3c1aaece21d1751_prof);

        
        $__internal_8f3a180e0d6a55432556ff058ffdd949e362dc9f00444121f6007b0957cea818->leave($__internal_8f3a180e0d6a55432556ff058ffdd949e362dc9f00444121f6007b0957cea818_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
