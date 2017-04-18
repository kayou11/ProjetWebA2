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
        $__internal_aff5eb6b300ddd0091d5e9a898e1e7393c6ea0246071b11e5750cdc9182430fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aff5eb6b300ddd0091d5e9a898e1e7393c6ea0246071b11e5750cdc9182430fc->enter($__internal_aff5eb6b300ddd0091d5e9a898e1e7393c6ea0246071b11e5750cdc9182430fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_e77251de9c65de116dcae0603baa1ecc26b09ef9ca7d6084b21034aa49e2b22f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e77251de9c65de116dcae0603baa1ecc26b09ef9ca7d6084b21034aa49e2b22f->enter($__internal_e77251de9c65de116dcae0603baa1ecc26b09ef9ca7d6084b21034aa49e2b22f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aff5eb6b300ddd0091d5e9a898e1e7393c6ea0246071b11e5750cdc9182430fc->leave($__internal_aff5eb6b300ddd0091d5e9a898e1e7393c6ea0246071b11e5750cdc9182430fc_prof);

        
        $__internal_e77251de9c65de116dcae0603baa1ecc26b09ef9ca7d6084b21034aa49e2b22f->leave($__internal_e77251de9c65de116dcae0603baa1ecc26b09ef9ca7d6084b21034aa49e2b22f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c5d8cd07c20a91e4ec82cc5b6ef1835c91e6a060a23654d647894930f841537a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5d8cd07c20a91e4ec82cc5b6ef1835c91e6a060a23654d647894930f841537a->enter($__internal_c5d8cd07c20a91e4ec82cc5b6ef1835c91e6a060a23654d647894930f841537a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3cd1b21bcfb67eba01bc9399335a98027fc71ad07787de9689eef9e60f858007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cd1b21bcfb67eba01bc9399335a98027fc71ad07787de9689eef9e60f858007->enter($__internal_3cd1b21bcfb67eba01bc9399335a98027fc71ad07787de9689eef9e60f858007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_3cd1b21bcfb67eba01bc9399335a98027fc71ad07787de9689eef9e60f858007->leave($__internal_3cd1b21bcfb67eba01bc9399335a98027fc71ad07787de9689eef9e60f858007_prof);

        
        $__internal_c5d8cd07c20a91e4ec82cc5b6ef1835c91e6a060a23654d647894930f841537a->leave($__internal_c5d8cd07c20a91e4ec82cc5b6ef1835c91e6a060a23654d647894930f841537a_prof);

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
