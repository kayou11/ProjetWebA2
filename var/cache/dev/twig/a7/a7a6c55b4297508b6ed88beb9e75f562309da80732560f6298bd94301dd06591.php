<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_2e5085744b5f3bda08c1843ae6ef691c25ed313e988fbe6875b38b2d8fda18ab extends Twig_Template
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
        $__internal_571b2c46abc77602e48f46e91ceb4b40857e7bd3328d00cc3ceae343c0d91585 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_571b2c46abc77602e48f46e91ceb4b40857e7bd3328d00cc3ceae343c0d91585->enter($__internal_571b2c46abc77602e48f46e91ceb4b40857e7bd3328d00cc3ceae343c0d91585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_e12cb21abcc38355f7174f561babb1952c74a1806c9d78c486a465bb58d1756f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e12cb21abcc38355f7174f561babb1952c74a1806c9d78c486a465bb58d1756f->enter($__internal_e12cb21abcc38355f7174f561babb1952c74a1806c9d78c486a465bb58d1756f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_571b2c46abc77602e48f46e91ceb4b40857e7bd3328d00cc3ceae343c0d91585->leave($__internal_571b2c46abc77602e48f46e91ceb4b40857e7bd3328d00cc3ceae343c0d91585_prof);

        
        $__internal_e12cb21abcc38355f7174f561babb1952c74a1806c9d78c486a465bb58d1756f->leave($__internal_e12cb21abcc38355f7174f561babb1952c74a1806c9d78c486a465bb58d1756f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e900d93879a435e92f562934da7fba6c4d536be32aa49b49471c79482d76547d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e900d93879a435e92f562934da7fba6c4d536be32aa49b49471c79482d76547d->enter($__internal_e900d93879a435e92f562934da7fba6c4d536be32aa49b49471c79482d76547d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8de21d8373e39327aa5c3fa3a0bd91a7b0e46d0a40b28c1c25e7da2717bf2da9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de21d8373e39327aa5c3fa3a0bd91a7b0e46d0a40b28c1c25e7da2717bf2da9->enter($__internal_8de21d8373e39327aa5c3fa3a0bd91a7b0e46d0a40b28c1c25e7da2717bf2da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_8de21d8373e39327aa5c3fa3a0bd91a7b0e46d0a40b28c1c25e7da2717bf2da9->leave($__internal_8de21d8373e39327aa5c3fa3a0bd91a7b0e46d0a40b28c1c25e7da2717bf2da9_prof);

        
        $__internal_e900d93879a435e92f562934da7fba6c4d536be32aa49b49471c79482d76547d->leave($__internal_e900d93879a435e92f562934da7fba6c4d536be32aa49b49471c79482d76547d_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
