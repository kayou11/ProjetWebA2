<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_43de401d5d4a3d717fb3a503dcce789c1a87749185c8cb961d07dae4cd75b11f extends Twig_Template
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
        $__internal_3156fcc325cff3f65554b5b578d3611681f7e27c51f13ca0048f75d92255d926 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3156fcc325cff3f65554b5b578d3611681f7e27c51f13ca0048f75d92255d926->enter($__internal_3156fcc325cff3f65554b5b578d3611681f7e27c51f13ca0048f75d92255d926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_ad2b510ee6c732ed71dd2b28693b6da886dd16840995d9533932bffd2e355a91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad2b510ee6c732ed71dd2b28693b6da886dd16840995d9533932bffd2e355a91->enter($__internal_ad2b510ee6c732ed71dd2b28693b6da886dd16840995d9533932bffd2e355a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3156fcc325cff3f65554b5b578d3611681f7e27c51f13ca0048f75d92255d926->leave($__internal_3156fcc325cff3f65554b5b578d3611681f7e27c51f13ca0048f75d92255d926_prof);

        
        $__internal_ad2b510ee6c732ed71dd2b28693b6da886dd16840995d9533932bffd2e355a91->leave($__internal_ad2b510ee6c732ed71dd2b28693b6da886dd16840995d9533932bffd2e355a91_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_967740cf7c55b1f907e6c3676ce71f2bae5204dfbaa08b7c4588770415f31928 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_967740cf7c55b1f907e6c3676ce71f2bae5204dfbaa08b7c4588770415f31928->enter($__internal_967740cf7c55b1f907e6c3676ce71f2bae5204dfbaa08b7c4588770415f31928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ae0169af79f95a8569f4ebe11972199d2671c8119d59c35b5bc8a0adc5ca902a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae0169af79f95a8569f4ebe11972199d2671c8119d59c35b5bc8a0adc5ca902a->enter($__internal_ae0169af79f95a8569f4ebe11972199d2671c8119d59c35b5bc8a0adc5ca902a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_ae0169af79f95a8569f4ebe11972199d2671c8119d59c35b5bc8a0adc5ca902a->leave($__internal_ae0169af79f95a8569f4ebe11972199d2671c8119d59c35b5bc8a0adc5ca902a_prof);

        
        $__internal_967740cf7c55b1f907e6c3676ce71f2bae5204dfbaa08b7c4588770415f31928->leave($__internal_967740cf7c55b1f907e6c3676ce71f2bae5204dfbaa08b7c4588770415f31928_prof);

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
