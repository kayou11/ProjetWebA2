<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_743e93eda8558eca4dfcb0f5af32ffa6ed3a7b3cc772c415eb13626485a11604 extends Twig_Template
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
        $__internal_e78004a73aa1b9ca53f605a38d96d4606804758607957ebbbe1c238e40ec6f82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e78004a73aa1b9ca53f605a38d96d4606804758607957ebbbe1c238e40ec6f82->enter($__internal_e78004a73aa1b9ca53f605a38d96d4606804758607957ebbbe1c238e40ec6f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_a1c87e8289a005844cc6a20bdc7992c29f490c4922938e6b4ce3dae5cb2a8792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1c87e8289a005844cc6a20bdc7992c29f490c4922938e6b4ce3dae5cb2a8792->enter($__internal_a1c87e8289a005844cc6a20bdc7992c29f490c4922938e6b4ce3dae5cb2a8792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e78004a73aa1b9ca53f605a38d96d4606804758607957ebbbe1c238e40ec6f82->leave($__internal_e78004a73aa1b9ca53f605a38d96d4606804758607957ebbbe1c238e40ec6f82_prof);

        
        $__internal_a1c87e8289a005844cc6a20bdc7992c29f490c4922938e6b4ce3dae5cb2a8792->leave($__internal_a1c87e8289a005844cc6a20bdc7992c29f490c4922938e6b4ce3dae5cb2a8792_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b5ee8b64f4a2d800b871846de126676b6b06c8b6b21c2eccaf3b965dcf76a592 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5ee8b64f4a2d800b871846de126676b6b06c8b6b21c2eccaf3b965dcf76a592->enter($__internal_b5ee8b64f4a2d800b871846de126676b6b06c8b6b21c2eccaf3b965dcf76a592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bdaf0bf5c2c824bbcb3b530d5e762c09ca57c23996cba75fb0c9e824c3b81cdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdaf0bf5c2c824bbcb3b530d5e762c09ca57c23996cba75fb0c9e824c3b81cdf->enter($__internal_bdaf0bf5c2c824bbcb3b530d5e762c09ca57c23996cba75fb0c9e824c3b81cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_bdaf0bf5c2c824bbcb3b530d5e762c09ca57c23996cba75fb0c9e824c3b81cdf->leave($__internal_bdaf0bf5c2c824bbcb3b530d5e762c09ca57c23996cba75fb0c9e824c3b81cdf_prof);

        
        $__internal_b5ee8b64f4a2d800b871846de126676b6b06c8b6b21c2eccaf3b965dcf76a592->leave($__internal_b5ee8b64f4a2d800b871846de126676b6b06c8b6b21c2eccaf3b965dcf76a592_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\MAMP\\htdocs\\ProjetWebA2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
