<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_b382ed4023a73ee573f402d43b3cfdd67d633bb4d32e7c8dfd6168725f33daa1 extends Twig_Template
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
        $__internal_487b214fc48101bab99a886ec5ff94b48c9e8b9e772d347b7b2aeb730fe6e4f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_487b214fc48101bab99a886ec5ff94b48c9e8b9e772d347b7b2aeb730fe6e4f9->enter($__internal_487b214fc48101bab99a886ec5ff94b48c9e8b9e772d347b7b2aeb730fe6e4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_ea97ea58c239f1f7f907a746fb85e9ba46a7c9af984329931666e3b0c30b6a99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea97ea58c239f1f7f907a746fb85e9ba46a7c9af984329931666e3b0c30b6a99->enter($__internal_ea97ea58c239f1f7f907a746fb85e9ba46a7c9af984329931666e3b0c30b6a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_487b214fc48101bab99a886ec5ff94b48c9e8b9e772d347b7b2aeb730fe6e4f9->leave($__internal_487b214fc48101bab99a886ec5ff94b48c9e8b9e772d347b7b2aeb730fe6e4f9_prof);

        
        $__internal_ea97ea58c239f1f7f907a746fb85e9ba46a7c9af984329931666e3b0c30b6a99->leave($__internal_ea97ea58c239f1f7f907a746fb85e9ba46a7c9af984329931666e3b0c30b6a99_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b103ded4dfa9a4e0b6e89c6244b47a5ad9d04c5f1b04c2a3f7d9b9b7eca96edf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b103ded4dfa9a4e0b6e89c6244b47a5ad9d04c5f1b04c2a3f7d9b9b7eca96edf->enter($__internal_b103ded4dfa9a4e0b6e89c6244b47a5ad9d04c5f1b04c2a3f7d9b9b7eca96edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_89c892de674fc62e2dff9490a895d05fccb21fc19b933789e810cb93b5c80a33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c892de674fc62e2dff9490a895d05fccb21fc19b933789e810cb93b5c80a33->enter($__internal_89c892de674fc62e2dff9490a895d05fccb21fc19b933789e810cb93b5c80a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_89c892de674fc62e2dff9490a895d05fccb21fc19b933789e810cb93b5c80a33->leave($__internal_89c892de674fc62e2dff9490a895d05fccb21fc19b933789e810cb93b5c80a33_prof);

        
        $__internal_b103ded4dfa9a4e0b6e89c6244b47a5ad9d04c5f1b04c2a3f7d9b9b7eca96edf->leave($__internal_b103ded4dfa9a4e0b6e89c6244b47a5ad9d04c5f1b04c2a3f7d9b9b7eca96edf_prof);

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
