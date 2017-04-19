<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_85fd0dcf6a21d6f2f20b11eb559bc77a29b95e9e83f1d022d853907657ebd947 extends Twig_Template
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
        $__internal_0cf22b88c899b1be06f39610651c14501df7441479d5f59c9918ea50293970fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cf22b88c899b1be06f39610651c14501df7441479d5f59c9918ea50293970fc->enter($__internal_0cf22b88c899b1be06f39610651c14501df7441479d5f59c9918ea50293970fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_ed0e90b12a7248d68e5b3d4f5a9335f5e965997a66dfe1d1d7d62d5b3351f80b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed0e90b12a7248d68e5b3d4f5a9335f5e965997a66dfe1d1d7d62d5b3351f80b->enter($__internal_ed0e90b12a7248d68e5b3d4f5a9335f5e965997a66dfe1d1d7d62d5b3351f80b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cf22b88c899b1be06f39610651c14501df7441479d5f59c9918ea50293970fc->leave($__internal_0cf22b88c899b1be06f39610651c14501df7441479d5f59c9918ea50293970fc_prof);

        
        $__internal_ed0e90b12a7248d68e5b3d4f5a9335f5e965997a66dfe1d1d7d62d5b3351f80b->leave($__internal_ed0e90b12a7248d68e5b3d4f5a9335f5e965997a66dfe1d1d7d62d5b3351f80b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_804bda87d638628c6d5a74bdf4508fa9a8f2f3a89eb8f8fa0d4bf3876864fda6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_804bda87d638628c6d5a74bdf4508fa9a8f2f3a89eb8f8fa0d4bf3876864fda6->enter($__internal_804bda87d638628c6d5a74bdf4508fa9a8f2f3a89eb8f8fa0d4bf3876864fda6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_15a99793b82353627648f1b49c9440fb7e49401c638047472e656c0ec6f09286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15a99793b82353627648f1b49c9440fb7e49401c638047472e656c0ec6f09286->enter($__internal_15a99793b82353627648f1b49c9440fb7e49401c638047472e656c0ec6f09286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_15a99793b82353627648f1b49c9440fb7e49401c638047472e656c0ec6f09286->leave($__internal_15a99793b82353627648f1b49c9440fb7e49401c638047472e656c0ec6f09286_prof);

        
        $__internal_804bda87d638628c6d5a74bdf4508fa9a8f2f3a89eb8f8fa0d4bf3876864fda6->leave($__internal_804bda87d638628c6d5a74bdf4508fa9a8f2f3a89eb8f8fa0d4bf3876864fda6_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_94e2ef5423ebc5e321f10d3873e628c4aec965581fad814531aa7cbce08de240 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94e2ef5423ebc5e321f10d3873e628c4aec965581fad814531aa7cbce08de240->enter($__internal_94e2ef5423ebc5e321f10d3873e628c4aec965581fad814531aa7cbce08de240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d7a071871c6a7114d8e9f0912c318637e736902557bec52ef350513b69764c6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7a071871c6a7114d8e9f0912c318637e736902557bec52ef350513b69764c6b->enter($__internal_d7a071871c6a7114d8e9f0912c318637e736902557bec52ef350513b69764c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_d7a071871c6a7114d8e9f0912c318637e736902557bec52ef350513b69764c6b->leave($__internal_d7a071871c6a7114d8e9f0912c318637e736902557bec52ef350513b69764c6b_prof);

        
        $__internal_94e2ef5423ebc5e321f10d3873e628c4aec965581fad814531aa7cbce08de240->leave($__internal_94e2ef5423ebc5e321f10d3873e628c4aec965581fad814531aa7cbce08de240_prof);

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
", "WebProfilerBundle:Profiler:open.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
