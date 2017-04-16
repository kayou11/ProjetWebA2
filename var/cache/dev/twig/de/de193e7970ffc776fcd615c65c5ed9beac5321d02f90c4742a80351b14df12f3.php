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
        $__internal_3dd180998f14fb0c58b6140e95296c89a99aad12594ec84885cb3e9a779ef156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dd180998f14fb0c58b6140e95296c89a99aad12594ec84885cb3e9a779ef156->enter($__internal_3dd180998f14fb0c58b6140e95296c89a99aad12594ec84885cb3e9a779ef156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_9c34cd0d0d7c70e2f3e202bfb8bc53ccfcd332122fa5ba92f2e0a25fd19e0142 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c34cd0d0d7c70e2f3e202bfb8bc53ccfcd332122fa5ba92f2e0a25fd19e0142->enter($__internal_9c34cd0d0d7c70e2f3e202bfb8bc53ccfcd332122fa5ba92f2e0a25fd19e0142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dd180998f14fb0c58b6140e95296c89a99aad12594ec84885cb3e9a779ef156->leave($__internal_3dd180998f14fb0c58b6140e95296c89a99aad12594ec84885cb3e9a779ef156_prof);

        
        $__internal_9c34cd0d0d7c70e2f3e202bfb8bc53ccfcd332122fa5ba92f2e0a25fd19e0142->leave($__internal_9c34cd0d0d7c70e2f3e202bfb8bc53ccfcd332122fa5ba92f2e0a25fd19e0142_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d5a2daea34b03071106ed4ea8c85301ef9122f4b38f802df42fbd0739b60675e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5a2daea34b03071106ed4ea8c85301ef9122f4b38f802df42fbd0739b60675e->enter($__internal_d5a2daea34b03071106ed4ea8c85301ef9122f4b38f802df42fbd0739b60675e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b44623a2f98ce7499538b386c3690860e293368436272c715c021d4275af16f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b44623a2f98ce7499538b386c3690860e293368436272c715c021d4275af16f7->enter($__internal_b44623a2f98ce7499538b386c3690860e293368436272c715c021d4275af16f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_b44623a2f98ce7499538b386c3690860e293368436272c715c021d4275af16f7->leave($__internal_b44623a2f98ce7499538b386c3690860e293368436272c715c021d4275af16f7_prof);

        
        $__internal_d5a2daea34b03071106ed4ea8c85301ef9122f4b38f802df42fbd0739b60675e->leave($__internal_d5a2daea34b03071106ed4ea8c85301ef9122f4b38f802df42fbd0739b60675e_prof);

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
