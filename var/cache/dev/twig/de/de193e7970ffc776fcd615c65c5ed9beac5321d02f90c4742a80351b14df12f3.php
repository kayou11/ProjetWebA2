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
        $__internal_f4c7940caf90c4a9c414d6c6023a2810ace10994adb18f57079016499afb54f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4c7940caf90c4a9c414d6c6023a2810ace10994adb18f57079016499afb54f5->enter($__internal_f4c7940caf90c4a9c414d6c6023a2810ace10994adb18f57079016499afb54f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_f918d98d866c60bb2ab05fa122c71eb5cfe03f169f6d44e8af006a957274cd94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f918d98d866c60bb2ab05fa122c71eb5cfe03f169f6d44e8af006a957274cd94->enter($__internal_f918d98d866c60bb2ab05fa122c71eb5cfe03f169f6d44e8af006a957274cd94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4c7940caf90c4a9c414d6c6023a2810ace10994adb18f57079016499afb54f5->leave($__internal_f4c7940caf90c4a9c414d6c6023a2810ace10994adb18f57079016499afb54f5_prof);

        
        $__internal_f918d98d866c60bb2ab05fa122c71eb5cfe03f169f6d44e8af006a957274cd94->leave($__internal_f918d98d866c60bb2ab05fa122c71eb5cfe03f169f6d44e8af006a957274cd94_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8e9ef7e5b7e74b5f3d1379aee0639a0f5318daa5899f56fd42bd5c094829e07f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e9ef7e5b7e74b5f3d1379aee0639a0f5318daa5899f56fd42bd5c094829e07f->enter($__internal_8e9ef7e5b7e74b5f3d1379aee0639a0f5318daa5899f56fd42bd5c094829e07f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f8fb2558674c9b301ad17cc533b76b3abd36755eddbd298287d5ec65fa2d434b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8fb2558674c9b301ad17cc533b76b3abd36755eddbd298287d5ec65fa2d434b->enter($__internal_f8fb2558674c9b301ad17cc533b76b3abd36755eddbd298287d5ec65fa2d434b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_f8fb2558674c9b301ad17cc533b76b3abd36755eddbd298287d5ec65fa2d434b->leave($__internal_f8fb2558674c9b301ad17cc533b76b3abd36755eddbd298287d5ec65fa2d434b_prof);

        
        $__internal_8e9ef7e5b7e74b5f3d1379aee0639a0f5318daa5899f56fd42bd5c094829e07f->leave($__internal_8e9ef7e5b7e74b5f3d1379aee0639a0f5318daa5899f56fd42bd5c094829e07f_prof);

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
