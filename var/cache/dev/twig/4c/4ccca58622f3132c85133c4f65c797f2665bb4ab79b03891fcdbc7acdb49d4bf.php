<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_0bb8d4b255ba5e712fa79562fe7763ebb2266355bcb6018886d407146858805f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cffccedd0df97e2d4ae2a912e24fc22493621ae0ecdf6023fb4cb59bce9c2335 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cffccedd0df97e2d4ae2a912e24fc22493621ae0ecdf6023fb4cb59bce9c2335->enter($__internal_cffccedd0df97e2d4ae2a912e24fc22493621ae0ecdf6023fb4cb59bce9c2335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_5424dab96ce77da5f758815c752e8ec3420cbdaf0d182766683d6a3d477256cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5424dab96ce77da5f758815c752e8ec3420cbdaf0d182766683d6a3d477256cd->enter($__internal_5424dab96ce77da5f758815c752e8ec3420cbdaf0d182766683d6a3d477256cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cffccedd0df97e2d4ae2a912e24fc22493621ae0ecdf6023fb4cb59bce9c2335->leave($__internal_cffccedd0df97e2d4ae2a912e24fc22493621ae0ecdf6023fb4cb59bce9c2335_prof);

        
        $__internal_5424dab96ce77da5f758815c752e8ec3420cbdaf0d182766683d6a3d477256cd->leave($__internal_5424dab96ce77da5f758815c752e8ec3420cbdaf0d182766683d6a3d477256cd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ae61aee6242b87c4c0bcdc18ffeb1739b1e3478d0075a4789e0c9349a37603de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae61aee6242b87c4c0bcdc18ffeb1739b1e3478d0075a4789e0c9349a37603de->enter($__internal_ae61aee6242b87c4c0bcdc18ffeb1739b1e3478d0075a4789e0c9349a37603de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_afa07cd1f3216fc33fe4fc7659473931c503aec093322091d308500af9f31dc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afa07cd1f3216fc33fe4fc7659473931c503aec093322091d308500af9f31dc9->enter($__internal_afa07cd1f3216fc33fe4fc7659473931c503aec093322091d308500af9f31dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_afa07cd1f3216fc33fe4fc7659473931c503aec093322091d308500af9f31dc9->leave($__internal_afa07cd1f3216fc33fe4fc7659473931c503aec093322091d308500af9f31dc9_prof);

        
        $__internal_ae61aee6242b87c4c0bcdc18ffeb1739b1e3478d0075a4789e0c9349a37603de->leave($__internal_ae61aee6242b87c4c0bcdc18ffeb1739b1e3478d0075a4789e0c9349a37603de_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1f5a8d188070e96ac056646190352622b7a76ae50c79cab2bc772c3978f90a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1f5a8d188070e96ac056646190352622b7a76ae50c79cab2bc772c3978f90a7->enter($__internal_b1f5a8d188070e96ac056646190352622b7a76ae50c79cab2bc772c3978f90a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c722fde9d1da3e68dfe04dc839377a7f8e818826e352e59a159bc1ac3788a05f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c722fde9d1da3e68dfe04dc839377a7f8e818826e352e59a159bc1ac3788a05f->enter($__internal_c722fde9d1da3e68dfe04dc839377a7f8e818826e352e59a159bc1ac3788a05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_c722fde9d1da3e68dfe04dc839377a7f8e818826e352e59a159bc1ac3788a05f->leave($__internal_c722fde9d1da3e68dfe04dc839377a7f8e818826e352e59a159bc1ac3788a05f_prof);

        
        $__internal_b1f5a8d188070e96ac056646190352622b7a76ae50c79cab2bc772c3978f90a7->leave($__internal_b1f5a8d188070e96ac056646190352622b7a76ae50c79cab2bc772c3978f90a7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
