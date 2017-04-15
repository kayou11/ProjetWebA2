<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_4f9436f6cfd9a76731b26575e4d1dd7ecc3e548ed4f9f899f1e355037f24b3ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_87f20e4654e1b4ff54bc93228fe38f9403d4590fa319d58ce1cb37dd9fc8b246 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87f20e4654e1b4ff54bc93228fe38f9403d4590fa319d58ce1cb37dd9fc8b246->enter($__internal_87f20e4654e1b4ff54bc93228fe38f9403d4590fa319d58ce1cb37dd9fc8b246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_aa6a32af87dbf1badb90eef0738b6692bedeaab89acc5c412400ffef4f6cc931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa6a32af87dbf1badb90eef0738b6692bedeaab89acc5c412400ffef4f6cc931->enter($__internal_aa6a32af87dbf1badb90eef0738b6692bedeaab89acc5c412400ffef4f6cc931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87f20e4654e1b4ff54bc93228fe38f9403d4590fa319d58ce1cb37dd9fc8b246->leave($__internal_87f20e4654e1b4ff54bc93228fe38f9403d4590fa319d58ce1cb37dd9fc8b246_prof);

        
        $__internal_aa6a32af87dbf1badb90eef0738b6692bedeaab89acc5c412400ffef4f6cc931->leave($__internal_aa6a32af87dbf1badb90eef0738b6692bedeaab89acc5c412400ffef4f6cc931_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3cf25386d45bd34dc8e0160c3c60dea02f37df49d1124e496e0045f7f316cf63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cf25386d45bd34dc8e0160c3c60dea02f37df49d1124e496e0045f7f316cf63->enter($__internal_3cf25386d45bd34dc8e0160c3c60dea02f37df49d1124e496e0045f7f316cf63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_505a74702b8050807a35653042dc6d6e7b388bd8a78ccdfee1c3fcbd67b415a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_505a74702b8050807a35653042dc6d6e7b388bd8a78ccdfee1c3fcbd67b415a0->enter($__internal_505a74702b8050807a35653042dc6d6e7b388bd8a78ccdfee1c3fcbd67b415a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_505a74702b8050807a35653042dc6d6e7b388bd8a78ccdfee1c3fcbd67b415a0->leave($__internal_505a74702b8050807a35653042dc6d6e7b388bd8a78ccdfee1c3fcbd67b415a0_prof);

        
        $__internal_3cf25386d45bd34dc8e0160c3c60dea02f37df49d1124e496e0045f7f316cf63->leave($__internal_3cf25386d45bd34dc8e0160c3c60dea02f37df49d1124e496e0045f7f316cf63_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f3621bbacbafb453c598f349536ab43f3374ef62e6cc38b0f3e56cf89cfc0598 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3621bbacbafb453c598f349536ab43f3374ef62e6cc38b0f3e56cf89cfc0598->enter($__internal_f3621bbacbafb453c598f349536ab43f3374ef62e6cc38b0f3e56cf89cfc0598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_114fd2f2cd07d5fb8a2c475bb25ab8888191974713cbfe4e910de13ca1cbb5a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_114fd2f2cd07d5fb8a2c475bb25ab8888191974713cbfe4e910de13ca1cbb5a6->enter($__internal_114fd2f2cd07d5fb8a2c475bb25ab8888191974713cbfe4e910de13ca1cbb5a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_114fd2f2cd07d5fb8a2c475bb25ab8888191974713cbfe4e910de13ca1cbb5a6->leave($__internal_114fd2f2cd07d5fb8a2c475bb25ab8888191974713cbfe4e910de13ca1cbb5a6_prof);

        
        $__internal_f3621bbacbafb453c598f349536ab43f3374ef62e6cc38b0f3e56cf89cfc0598->leave($__internal_f3621bbacbafb453c598f349536ab43f3374ef62e6cc38b0f3e56cf89cfc0598_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c201a4d16f391375c98fb8873d690c2c8c84403bb9889bd187a0a63609c6c328 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c201a4d16f391375c98fb8873d690c2c8c84403bb9889bd187a0a63609c6c328->enter($__internal_c201a4d16f391375c98fb8873d690c2c8c84403bb9889bd187a0a63609c6c328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6d543b2699ae528f6d94fe52a2d7b0939ae8500941da7be829b625fd055aec24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d543b2699ae528f6d94fe52a2d7b0939ae8500941da7be829b625fd055aec24->enter($__internal_6d543b2699ae528f6d94fe52a2d7b0939ae8500941da7be829b625fd055aec24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_6d543b2699ae528f6d94fe52a2d7b0939ae8500941da7be829b625fd055aec24->leave($__internal_6d543b2699ae528f6d94fe52a2d7b0939ae8500941da7be829b625fd055aec24_prof);

        
        $__internal_c201a4d16f391375c98fb8873d690c2c8c84403bb9889bd187a0a63609c6c328->leave($__internal_c201a4d16f391375c98fb8873d690c2c8c84403bb9889bd187a0a63609c6c328_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
