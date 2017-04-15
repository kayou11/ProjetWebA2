<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_4a9655ae057e380c9baed59eccf63a14ce543c2f14cb8e203ea7489849b3ce72 extends Twig_Template
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
        $__internal_d405a2d156178f568472a5fa778ca036044e82ea64c435fa157f3035b2f371b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d405a2d156178f568472a5fa778ca036044e82ea64c435fa157f3035b2f371b9->enter($__internal_d405a2d156178f568472a5fa778ca036044e82ea64c435fa157f3035b2f371b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_a649d0fd6043e7866ac8442d784f3e8e7903356153a9f3bd20e2e6ddf0ae89a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a649d0fd6043e7866ac8442d784f3e8e7903356153a9f3bd20e2e6ddf0ae89a1->enter($__internal_a649d0fd6043e7866ac8442d784f3e8e7903356153a9f3bd20e2e6ddf0ae89a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d405a2d156178f568472a5fa778ca036044e82ea64c435fa157f3035b2f371b9->leave($__internal_d405a2d156178f568472a5fa778ca036044e82ea64c435fa157f3035b2f371b9_prof);

        
        $__internal_a649d0fd6043e7866ac8442d784f3e8e7903356153a9f3bd20e2e6ddf0ae89a1->leave($__internal_a649d0fd6043e7866ac8442d784f3e8e7903356153a9f3bd20e2e6ddf0ae89a1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_676fe18b1d0e09c3aba93c15566e01f3f9152c462d3da052d75eac29c49c9936 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_676fe18b1d0e09c3aba93c15566e01f3f9152c462d3da052d75eac29c49c9936->enter($__internal_676fe18b1d0e09c3aba93c15566e01f3f9152c462d3da052d75eac29c49c9936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_be37219110f6ab8b900413ad687571a4a0375bfbdd0a92bd5f30638b3703c8f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be37219110f6ab8b900413ad687571a4a0375bfbdd0a92bd5f30638b3703c8f5->enter($__internal_be37219110f6ab8b900413ad687571a4a0375bfbdd0a92bd5f30638b3703c8f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_be37219110f6ab8b900413ad687571a4a0375bfbdd0a92bd5f30638b3703c8f5->leave($__internal_be37219110f6ab8b900413ad687571a4a0375bfbdd0a92bd5f30638b3703c8f5_prof);

        
        $__internal_676fe18b1d0e09c3aba93c15566e01f3f9152c462d3da052d75eac29c49c9936->leave($__internal_676fe18b1d0e09c3aba93c15566e01f3f9152c462d3da052d75eac29c49c9936_prof);

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
", "WebProfilerBundle:Collector:ajax.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
