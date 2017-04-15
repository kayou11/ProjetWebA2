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
        $__internal_a45529602301835a9099d0da1ad93832d4e65076977ac7d6eb077f2fac00873e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a45529602301835a9099d0da1ad93832d4e65076977ac7d6eb077f2fac00873e->enter($__internal_a45529602301835a9099d0da1ad93832d4e65076977ac7d6eb077f2fac00873e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_7e3ed58a0e5d5e21d4db929a12e17528844b57ddec7c15dd3313d64640e94892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e3ed58a0e5d5e21d4db929a12e17528844b57ddec7c15dd3313d64640e94892->enter($__internal_7e3ed58a0e5d5e21d4db929a12e17528844b57ddec7c15dd3313d64640e94892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a45529602301835a9099d0da1ad93832d4e65076977ac7d6eb077f2fac00873e->leave($__internal_a45529602301835a9099d0da1ad93832d4e65076977ac7d6eb077f2fac00873e_prof);

        
        $__internal_7e3ed58a0e5d5e21d4db929a12e17528844b57ddec7c15dd3313d64640e94892->leave($__internal_7e3ed58a0e5d5e21d4db929a12e17528844b57ddec7c15dd3313d64640e94892_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3b4952b0865cadaad7a200bc3dc9bc1f86f4e17565e612ab58e6765de5f95c76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b4952b0865cadaad7a200bc3dc9bc1f86f4e17565e612ab58e6765de5f95c76->enter($__internal_3b4952b0865cadaad7a200bc3dc9bc1f86f4e17565e612ab58e6765de5f95c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2d57a8d0fb29e717dd81686c34c483ffba99575ddf7ab5d4b839ac7294606cdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d57a8d0fb29e717dd81686c34c483ffba99575ddf7ab5d4b839ac7294606cdf->enter($__internal_2d57a8d0fb29e717dd81686c34c483ffba99575ddf7ab5d4b839ac7294606cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_2d57a8d0fb29e717dd81686c34c483ffba99575ddf7ab5d4b839ac7294606cdf->leave($__internal_2d57a8d0fb29e717dd81686c34c483ffba99575ddf7ab5d4b839ac7294606cdf_prof);

        
        $__internal_3b4952b0865cadaad7a200bc3dc9bc1f86f4e17565e612ab58e6765de5f95c76->leave($__internal_3b4952b0865cadaad7a200bc3dc9bc1f86f4e17565e612ab58e6765de5f95c76_prof);

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
