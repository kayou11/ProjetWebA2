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
        $__internal_356129dcffc4ce302dc809e59e955c724192b562e48d412a68498c71aeddaffc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_356129dcffc4ce302dc809e59e955c724192b562e48d412a68498c71aeddaffc->enter($__internal_356129dcffc4ce302dc809e59e955c724192b562e48d412a68498c71aeddaffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_75803815f9108f0b96783ac80eb0ab3d74c4ecf8ef79ded9bfa8f5b27c5988db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75803815f9108f0b96783ac80eb0ab3d74c4ecf8ef79ded9bfa8f5b27c5988db->enter($__internal_75803815f9108f0b96783ac80eb0ab3d74c4ecf8ef79ded9bfa8f5b27c5988db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_356129dcffc4ce302dc809e59e955c724192b562e48d412a68498c71aeddaffc->leave($__internal_356129dcffc4ce302dc809e59e955c724192b562e48d412a68498c71aeddaffc_prof);

        
        $__internal_75803815f9108f0b96783ac80eb0ab3d74c4ecf8ef79ded9bfa8f5b27c5988db->leave($__internal_75803815f9108f0b96783ac80eb0ab3d74c4ecf8ef79ded9bfa8f5b27c5988db_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2ae149da4bfffcbc9396f592680aaabace15752c702477fedf0bcef73dc1f560 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ae149da4bfffcbc9396f592680aaabace15752c702477fedf0bcef73dc1f560->enter($__internal_2ae149da4bfffcbc9396f592680aaabace15752c702477fedf0bcef73dc1f560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_46b944aa8a41c22e45ee37c3ad2c32655d03606367786b5ad8c61fec2f3cac2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46b944aa8a41c22e45ee37c3ad2c32655d03606367786b5ad8c61fec2f3cac2c->enter($__internal_46b944aa8a41c22e45ee37c3ad2c32655d03606367786b5ad8c61fec2f3cac2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_46b944aa8a41c22e45ee37c3ad2c32655d03606367786b5ad8c61fec2f3cac2c->leave($__internal_46b944aa8a41c22e45ee37c3ad2c32655d03606367786b5ad8c61fec2f3cac2c_prof);

        
        $__internal_2ae149da4bfffcbc9396f592680aaabace15752c702477fedf0bcef73dc1f560->leave($__internal_2ae149da4bfffcbc9396f592680aaabace15752c702477fedf0bcef73dc1f560_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ab1a3939f00b8e7c9c3bb86c863d3a927022dec616ccff35de101fd220263527 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab1a3939f00b8e7c9c3bb86c863d3a927022dec616ccff35de101fd220263527->enter($__internal_ab1a3939f00b8e7c9c3bb86c863d3a927022dec616ccff35de101fd220263527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cac4416315204f75f1e5887a9402c5d9a05fc7a9bbc33243035bc8f3c1f4c67b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac4416315204f75f1e5887a9402c5d9a05fc7a9bbc33243035bc8f3c1f4c67b->enter($__internal_cac4416315204f75f1e5887a9402c5d9a05fc7a9bbc33243035bc8f3c1f4c67b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_cac4416315204f75f1e5887a9402c5d9a05fc7a9bbc33243035bc8f3c1f4c67b->leave($__internal_cac4416315204f75f1e5887a9402c5d9a05fc7a9bbc33243035bc8f3c1f4c67b_prof);

        
        $__internal_ab1a3939f00b8e7c9c3bb86c863d3a927022dec616ccff35de101fd220263527->leave($__internal_ab1a3939f00b8e7c9c3bb86c863d3a927022dec616ccff35de101fd220263527_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9ea55833ebd90aca8e9b4af5112996bfce77b3cf46e9c5ea19fc7432336b0d55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ea55833ebd90aca8e9b4af5112996bfce77b3cf46e9c5ea19fc7432336b0d55->enter($__internal_9ea55833ebd90aca8e9b4af5112996bfce77b3cf46e9c5ea19fc7432336b0d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9562214bf03d53db264497d13b67bcede65fe9638b69cda3e7eec0e1afa04284 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9562214bf03d53db264497d13b67bcede65fe9638b69cda3e7eec0e1afa04284->enter($__internal_9562214bf03d53db264497d13b67bcede65fe9638b69cda3e7eec0e1afa04284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_9562214bf03d53db264497d13b67bcede65fe9638b69cda3e7eec0e1afa04284->leave($__internal_9562214bf03d53db264497d13b67bcede65fe9638b69cda3e7eec0e1afa04284_prof);

        
        $__internal_9ea55833ebd90aca8e9b4af5112996bfce77b3cf46e9c5ea19fc7432336b0d55->leave($__internal_9ea55833ebd90aca8e9b4af5112996bfce77b3cf46e9c5ea19fc7432336b0d55_prof);

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
