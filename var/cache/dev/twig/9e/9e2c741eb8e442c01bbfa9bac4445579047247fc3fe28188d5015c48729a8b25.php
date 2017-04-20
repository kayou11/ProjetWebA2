<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_b382ed4023a73ee573f402d43b3cfdd67d633bb4d32e7c8dfd6168725f33daa1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_682f1bb58163fe0d7a97e5a3c467ed257d22ed6ed0c3d3e21560fedb0929775c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_682f1bb58163fe0d7a97e5a3c467ed257d22ed6ed0c3d3e21560fedb0929775c->enter($__internal_682f1bb58163fe0d7a97e5a3c467ed257d22ed6ed0c3d3e21560fedb0929775c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_799f1c8ab075c232d4f618cb7841c007dd82c2c6fdc69112bc58400837a9fcb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_799f1c8ab075c232d4f618cb7841c007dd82c2c6fdc69112bc58400837a9fcb6->enter($__internal_799f1c8ab075c232d4f618cb7841c007dd82c2c6fdc69112bc58400837a9fcb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_682f1bb58163fe0d7a97e5a3c467ed257d22ed6ed0c3d3e21560fedb0929775c->leave($__internal_682f1bb58163fe0d7a97e5a3c467ed257d22ed6ed0c3d3e21560fedb0929775c_prof);

        
        $__internal_799f1c8ab075c232d4f618cb7841c007dd82c2c6fdc69112bc58400837a9fcb6->leave($__internal_799f1c8ab075c232d4f618cb7841c007dd82c2c6fdc69112bc58400837a9fcb6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cd5b7cee170cb3e7d5eb97cdd9fa4cb17e0a6573d298179af0012fc58a1634af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd5b7cee170cb3e7d5eb97cdd9fa4cb17e0a6573d298179af0012fc58a1634af->enter($__internal_cd5b7cee170cb3e7d5eb97cdd9fa4cb17e0a6573d298179af0012fc58a1634af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2f8a6efda802c9c93f1fe64f3e90bb2aab31a588168f836066f6d4b86c9861a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f8a6efda802c9c93f1fe64f3e90bb2aab31a588168f836066f6d4b86c9861a1->enter($__internal_2f8a6efda802c9c93f1fe64f3e90bb2aab31a588168f836066f6d4b86c9861a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_2f8a6efda802c9c93f1fe64f3e90bb2aab31a588168f836066f6d4b86c9861a1->leave($__internal_2f8a6efda802c9c93f1fe64f3e90bb2aab31a588168f836066f6d4b86c9861a1_prof);

        
        $__internal_cd5b7cee170cb3e7d5eb97cdd9fa4cb17e0a6573d298179af0012fc58a1634af->leave($__internal_cd5b7cee170cb3e7d5eb97cdd9fa4cb17e0a6573d298179af0012fc58a1634af_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
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
", "WebProfilerBundle:Collector:ajax.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
