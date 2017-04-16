<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_500d2b61b79d85621569512788d36780376eedd2b5ae4c5cdf4a3e4a23aa25da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d674c063f83736a9f7adb3d182e5fd0678de9374e013d36819a06961b32ac07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d674c063f83736a9f7adb3d182e5fd0678de9374e013d36819a06961b32ac07->enter($__internal_6d674c063f83736a9f7adb3d182e5fd0678de9374e013d36819a06961b32ac07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_ccc939596c2cc9c6541e68db2420f430036db7f3b1f853da48969d2770a86b9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccc939596c2cc9c6541e68db2420f430036db7f3b1f853da48969d2770a86b9e->enter($__internal_ccc939596c2cc9c6541e68db2420f430036db7f3b1f853da48969d2770a86b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d674c063f83736a9f7adb3d182e5fd0678de9374e013d36819a06961b32ac07->leave($__internal_6d674c063f83736a9f7adb3d182e5fd0678de9374e013d36819a06961b32ac07_prof);

        
        $__internal_ccc939596c2cc9c6541e68db2420f430036db7f3b1f853da48969d2770a86b9e->leave($__internal_ccc939596c2cc9c6541e68db2420f430036db7f3b1f853da48969d2770a86b9e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_24bfdc548bdc70db11d0bec1195bce13e2d3fa59b957912d613f2a9906ab440c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24bfdc548bdc70db11d0bec1195bce13e2d3fa59b957912d613f2a9906ab440c->enter($__internal_24bfdc548bdc70db11d0bec1195bce13e2d3fa59b957912d613f2a9906ab440c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bc8606ac4122d4200d67f76a0941de7c3013763fa657b79b3c18b275a936243f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc8606ac4122d4200d67f76a0941de7c3013763fa657b79b3c18b275a936243f->enter($__internal_bc8606ac4122d4200d67f76a0941de7c3013763fa657b79b3c18b275a936243f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_bc8606ac4122d4200d67f76a0941de7c3013763fa657b79b3c18b275a936243f->leave($__internal_bc8606ac4122d4200d67f76a0941de7c3013763fa657b79b3c18b275a936243f_prof);

        
        $__internal_24bfdc548bdc70db11d0bec1195bce13e2d3fa59b957912d613f2a9906ab440c->leave($__internal_24bfdc548bdc70db11d0bec1195bce13e2d3fa59b957912d613f2a9906ab440c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
