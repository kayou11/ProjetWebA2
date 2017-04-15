<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c88305a14ba2e185b090f5567360623cafd606c9ac79052616f59ccd9709138e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_d6eb60181bfce2aeffc6f69de5a76096bd8f096623eb21f0c1f3126ece77619e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6eb60181bfce2aeffc6f69de5a76096bd8f096623eb21f0c1f3126ece77619e->enter($__internal_d6eb60181bfce2aeffc6f69de5a76096bd8f096623eb21f0c1f3126ece77619e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f41c01ca46c94b01a5db2733bf12e996ab443621e2f678852eddeb8620d6e270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f41c01ca46c94b01a5db2733bf12e996ab443621e2f678852eddeb8620d6e270->enter($__internal_f41c01ca46c94b01a5db2733bf12e996ab443621e2f678852eddeb8620d6e270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6eb60181bfce2aeffc6f69de5a76096bd8f096623eb21f0c1f3126ece77619e->leave($__internal_d6eb60181bfce2aeffc6f69de5a76096bd8f096623eb21f0c1f3126ece77619e_prof);

        
        $__internal_f41c01ca46c94b01a5db2733bf12e996ab443621e2f678852eddeb8620d6e270->leave($__internal_f41c01ca46c94b01a5db2733bf12e996ab443621e2f678852eddeb8620d6e270_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_799299c98ef03923a7df8cb95ecb826e4c1ae8dc5a85649f25c79ccd5fb27f64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_799299c98ef03923a7df8cb95ecb826e4c1ae8dc5a85649f25c79ccd5fb27f64->enter($__internal_799299c98ef03923a7df8cb95ecb826e4c1ae8dc5a85649f25c79ccd5fb27f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ed4091a401e9d0e784abf62e329dd14b84959c5c6b1e5014c8cff7ba80df2c87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed4091a401e9d0e784abf62e329dd14b84959c5c6b1e5014c8cff7ba80df2c87->enter($__internal_ed4091a401e9d0e784abf62e329dd14b84959c5c6b1e5014c8cff7ba80df2c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ed4091a401e9d0e784abf62e329dd14b84959c5c6b1e5014c8cff7ba80df2c87->leave($__internal_ed4091a401e9d0e784abf62e329dd14b84959c5c6b1e5014c8cff7ba80df2c87_prof);

        
        $__internal_799299c98ef03923a7df8cb95ecb826e4c1ae8dc5a85649f25c79ccd5fb27f64->leave($__internal_799299c98ef03923a7df8cb95ecb826e4c1ae8dc5a85649f25c79ccd5fb27f64_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d812cef75d2595b292b75ec11a94c4bab6a63c084df0437c25453735fc60c8c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d812cef75d2595b292b75ec11a94c4bab6a63c084df0437c25453735fc60c8c5->enter($__internal_d812cef75d2595b292b75ec11a94c4bab6a63c084df0437c25453735fc60c8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c3509ebfadbba42891d3ae2e8783cece20f17309864631fd5b11f1f4b2c29e82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3509ebfadbba42891d3ae2e8783cece20f17309864631fd5b11f1f4b2c29e82->enter($__internal_c3509ebfadbba42891d3ae2e8783cece20f17309864631fd5b11f1f4b2c29e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_c3509ebfadbba42891d3ae2e8783cece20f17309864631fd5b11f1f4b2c29e82->leave($__internal_c3509ebfadbba42891d3ae2e8783cece20f17309864631fd5b11f1f4b2c29e82_prof);

        
        $__internal_d812cef75d2595b292b75ec11a94c4bab6a63c084df0437c25453735fc60c8c5->leave($__internal_d812cef75d2595b292b75ec11a94c4bab6a63c084df0437c25453735fc60c8c5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_37a7de09f901583bf22a0d89ec6b647db54de7074958370a7a44cc9a5d617f7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37a7de09f901583bf22a0d89ec6b647db54de7074958370a7a44cc9a5d617f7f->enter($__internal_37a7de09f901583bf22a0d89ec6b647db54de7074958370a7a44cc9a5d617f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ed4b221b00696d5d162f31785e9927cf80e02f923c9ab88f3c6f2e39fbec5427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed4b221b00696d5d162f31785e9927cf80e02f923c9ab88f3c6f2e39fbec5427->enter($__internal_ed4b221b00696d5d162f31785e9927cf80e02f923c9ab88f3c6f2e39fbec5427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_ed4b221b00696d5d162f31785e9927cf80e02f923c9ab88f3c6f2e39fbec5427->leave($__internal_ed4b221b00696d5d162f31785e9927cf80e02f923c9ab88f3c6f2e39fbec5427_prof);

        
        $__internal_37a7de09f901583bf22a0d89ec6b647db54de7074958370a7a44cc9a5d617f7f->leave($__internal_37a7de09f901583bf22a0d89ec6b647db54de7074958370a7a44cc9a5d617f7f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
