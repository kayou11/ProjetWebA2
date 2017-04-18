<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d572d4d6988270ea32a15938e766bc88ad34dbb0f408cd98ed43285fd7d23e86 extends Twig_Template
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
        $__internal_578d604bee43b2918a9572bdd684a4e6af796c7ec7a0aff6804cc0e9608f0c8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_578d604bee43b2918a9572bdd684a4e6af796c7ec7a0aff6804cc0e9608f0c8c->enter($__internal_578d604bee43b2918a9572bdd684a4e6af796c7ec7a0aff6804cc0e9608f0c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_47ca7b054410695a1074878f12c5da0ea6ce425728809deaf43b38e8c7723be2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47ca7b054410695a1074878f12c5da0ea6ce425728809deaf43b38e8c7723be2->enter($__internal_47ca7b054410695a1074878f12c5da0ea6ce425728809deaf43b38e8c7723be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_578d604bee43b2918a9572bdd684a4e6af796c7ec7a0aff6804cc0e9608f0c8c->leave($__internal_578d604bee43b2918a9572bdd684a4e6af796c7ec7a0aff6804cc0e9608f0c8c_prof);

        
        $__internal_47ca7b054410695a1074878f12c5da0ea6ce425728809deaf43b38e8c7723be2->leave($__internal_47ca7b054410695a1074878f12c5da0ea6ce425728809deaf43b38e8c7723be2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_786661bb2a0aed081d93b2b617cce21d2138861c776171b0443ca7d08a6579b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_786661bb2a0aed081d93b2b617cce21d2138861c776171b0443ca7d08a6579b3->enter($__internal_786661bb2a0aed081d93b2b617cce21d2138861c776171b0443ca7d08a6579b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_712e4e564674a9069335adbd283bcfbce13a4db8c90fc4b3b3017a906d2177ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_712e4e564674a9069335adbd283bcfbce13a4db8c90fc4b3b3017a906d2177ec->enter($__internal_712e4e564674a9069335adbd283bcfbce13a4db8c90fc4b3b3017a906d2177ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_712e4e564674a9069335adbd283bcfbce13a4db8c90fc4b3b3017a906d2177ec->leave($__internal_712e4e564674a9069335adbd283bcfbce13a4db8c90fc4b3b3017a906d2177ec_prof);

        
        $__internal_786661bb2a0aed081d93b2b617cce21d2138861c776171b0443ca7d08a6579b3->leave($__internal_786661bb2a0aed081d93b2b617cce21d2138861c776171b0443ca7d08a6579b3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_387f1db981cc1a55bfc67043c3bef0fbd6f3200c6f39fb454cfdda245490c4b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_387f1db981cc1a55bfc67043c3bef0fbd6f3200c6f39fb454cfdda245490c4b8->enter($__internal_387f1db981cc1a55bfc67043c3bef0fbd6f3200c6f39fb454cfdda245490c4b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9a36967f7b5a5995e64bf4ddb1f930cfcd063ae5915e6074e2ed1d6706edd07a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a36967f7b5a5995e64bf4ddb1f930cfcd063ae5915e6074e2ed1d6706edd07a->enter($__internal_9a36967f7b5a5995e64bf4ddb1f930cfcd063ae5915e6074e2ed1d6706edd07a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_9a36967f7b5a5995e64bf4ddb1f930cfcd063ae5915e6074e2ed1d6706edd07a->leave($__internal_9a36967f7b5a5995e64bf4ddb1f930cfcd063ae5915e6074e2ed1d6706edd07a_prof);

        
        $__internal_387f1db981cc1a55bfc67043c3bef0fbd6f3200c6f39fb454cfdda245490c4b8->leave($__internal_387f1db981cc1a55bfc67043c3bef0fbd6f3200c6f39fb454cfdda245490c4b8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9a8f6bb5167b934eb5e6d195a952d6d71c5b26a89cabbe4e6a5af355ea19b74c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a8f6bb5167b934eb5e6d195a952d6d71c5b26a89cabbe4e6a5af355ea19b74c->enter($__internal_9a8f6bb5167b934eb5e6d195a952d6d71c5b26a89cabbe4e6a5af355ea19b74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_051beb6027a5d0b088a2a176f19b6966d468d8df8817a19b7814ab907583e220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_051beb6027a5d0b088a2a176f19b6966d468d8df8817a19b7814ab907583e220->enter($__internal_051beb6027a5d0b088a2a176f19b6966d468d8df8817a19b7814ab907583e220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_051beb6027a5d0b088a2a176f19b6966d468d8df8817a19b7814ab907583e220->leave($__internal_051beb6027a5d0b088a2a176f19b6966d468d8df8817a19b7814ab907583e220_prof);

        
        $__internal_9a8f6bb5167b934eb5e6d195a952d6d71c5b26a89cabbe4e6a5af355ea19b74c->leave($__internal_9a8f6bb5167b934eb5e6d195a952d6d71c5b26a89cabbe4e6a5af355ea19b74c_prof);

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
