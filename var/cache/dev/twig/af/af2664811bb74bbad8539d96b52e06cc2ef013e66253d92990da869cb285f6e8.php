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
        $__internal_ccde8a0be149c60d844910e361dd4560cfc793c9f235dc34ce7110bfa466f992 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccde8a0be149c60d844910e361dd4560cfc793c9f235dc34ce7110bfa466f992->enter($__internal_ccde8a0be149c60d844910e361dd4560cfc793c9f235dc34ce7110bfa466f992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_6fb89dd0a6c6a833c0ad5d12d132d54065113fe5ce077d23197fa6533706bf3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fb89dd0a6c6a833c0ad5d12d132d54065113fe5ce077d23197fa6533706bf3a->enter($__internal_6fb89dd0a6c6a833c0ad5d12d132d54065113fe5ce077d23197fa6533706bf3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccde8a0be149c60d844910e361dd4560cfc793c9f235dc34ce7110bfa466f992->leave($__internal_ccde8a0be149c60d844910e361dd4560cfc793c9f235dc34ce7110bfa466f992_prof);

        
        $__internal_6fb89dd0a6c6a833c0ad5d12d132d54065113fe5ce077d23197fa6533706bf3a->leave($__internal_6fb89dd0a6c6a833c0ad5d12d132d54065113fe5ce077d23197fa6533706bf3a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_86e539df1be1efde11d7bca7202729f425654144f9d4ebfd6c83e43b7d010d3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86e539df1be1efde11d7bca7202729f425654144f9d4ebfd6c83e43b7d010d3c->enter($__internal_86e539df1be1efde11d7bca7202729f425654144f9d4ebfd6c83e43b7d010d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_48018db2a907b9b5bf70a6f159cf74881990de2200da682d14b40fcb37db1830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48018db2a907b9b5bf70a6f159cf74881990de2200da682d14b40fcb37db1830->enter($__internal_48018db2a907b9b5bf70a6f159cf74881990de2200da682d14b40fcb37db1830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_48018db2a907b9b5bf70a6f159cf74881990de2200da682d14b40fcb37db1830->leave($__internal_48018db2a907b9b5bf70a6f159cf74881990de2200da682d14b40fcb37db1830_prof);

        
        $__internal_86e539df1be1efde11d7bca7202729f425654144f9d4ebfd6c83e43b7d010d3c->leave($__internal_86e539df1be1efde11d7bca7202729f425654144f9d4ebfd6c83e43b7d010d3c_prof);

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
