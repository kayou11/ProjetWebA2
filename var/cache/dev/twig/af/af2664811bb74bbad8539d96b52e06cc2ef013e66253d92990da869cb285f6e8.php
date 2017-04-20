<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_dc32c61fcd2c4f5b0e53dbd8fb40f2fa295b8eb617a2476c8c33385023598682 extends Twig_Template
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
        $__internal_8ebd0a30a49dc31771bc3b81c57923cd2ae5a6c7ff79d29e68c917b2ef5fec59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ebd0a30a49dc31771bc3b81c57923cd2ae5a6c7ff79d29e68c917b2ef5fec59->enter($__internal_8ebd0a30a49dc31771bc3b81c57923cd2ae5a6c7ff79d29e68c917b2ef5fec59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_dd2fe3ba5f2a3e6cdf69bf9fa00054b3d31547e45f89622539921a8bc0fa98c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd2fe3ba5f2a3e6cdf69bf9fa00054b3d31547e45f89622539921a8bc0fa98c1->enter($__internal_dd2fe3ba5f2a3e6cdf69bf9fa00054b3d31547e45f89622539921a8bc0fa98c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ebd0a30a49dc31771bc3b81c57923cd2ae5a6c7ff79d29e68c917b2ef5fec59->leave($__internal_8ebd0a30a49dc31771bc3b81c57923cd2ae5a6c7ff79d29e68c917b2ef5fec59_prof);

        
        $__internal_dd2fe3ba5f2a3e6cdf69bf9fa00054b3d31547e45f89622539921a8bc0fa98c1->leave($__internal_dd2fe3ba5f2a3e6cdf69bf9fa00054b3d31547e45f89622539921a8bc0fa98c1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_85ece5e7a155306edd6ae0067e826b0e618dc4f087086e53f17db65497b0dc96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85ece5e7a155306edd6ae0067e826b0e618dc4f087086e53f17db65497b0dc96->enter($__internal_85ece5e7a155306edd6ae0067e826b0e618dc4f087086e53f17db65497b0dc96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fc1029a3cb515b90634fabe4978830b50a6a05219042169a0a9f728a446bf95a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc1029a3cb515b90634fabe4978830b50a6a05219042169a0a9f728a446bf95a->enter($__internal_fc1029a3cb515b90634fabe4978830b50a6a05219042169a0a9f728a446bf95a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_fc1029a3cb515b90634fabe4978830b50a6a05219042169a0a9f728a446bf95a->leave($__internal_fc1029a3cb515b90634fabe4978830b50a6a05219042169a0a9f728a446bf95a_prof);

        
        $__internal_85ece5e7a155306edd6ae0067e826b0e618dc4f087086e53f17db65497b0dc96->leave($__internal_85ece5e7a155306edd6ae0067e826b0e618dc4f087086e53f17db65497b0dc96_prof);

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
