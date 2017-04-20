<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_8fde924c3e2c5bdb6e2cd4608e58369e16610276bf1ae12f8bcd406f89b5213c extends Twig_Template
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
        $__internal_6e510290d6bbb06dc835451899c959b7662e033cad43281d20fd08b73b20fb4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e510290d6bbb06dc835451899c959b7662e033cad43281d20fd08b73b20fb4f->enter($__internal_6e510290d6bbb06dc835451899c959b7662e033cad43281d20fd08b73b20fb4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_3d93e4f0367e19c37e98529fbff8391716adbcb5be727201e86062c2b53f350a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d93e4f0367e19c37e98529fbff8391716adbcb5be727201e86062c2b53f350a->enter($__internal_3d93e4f0367e19c37e98529fbff8391716adbcb5be727201e86062c2b53f350a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e510290d6bbb06dc835451899c959b7662e033cad43281d20fd08b73b20fb4f->leave($__internal_6e510290d6bbb06dc835451899c959b7662e033cad43281d20fd08b73b20fb4f_prof);

        
        $__internal_3d93e4f0367e19c37e98529fbff8391716adbcb5be727201e86062c2b53f350a->leave($__internal_3d93e4f0367e19c37e98529fbff8391716adbcb5be727201e86062c2b53f350a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f09a7d947d816cc2f2e2dcc47b2d05fa72e06d7befbdcbb8a109d6b2805290df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f09a7d947d816cc2f2e2dcc47b2d05fa72e06d7befbdcbb8a109d6b2805290df->enter($__internal_f09a7d947d816cc2f2e2dcc47b2d05fa72e06d7befbdcbb8a109d6b2805290df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c9acb19d751acb84a2303d3bb11ef5c344a89ce6893a577a5e77a16f04deeb15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9acb19d751acb84a2303d3bb11ef5c344a89ce6893a577a5e77a16f04deeb15->enter($__internal_c9acb19d751acb84a2303d3bb11ef5c344a89ce6893a577a5e77a16f04deeb15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_c9acb19d751acb84a2303d3bb11ef5c344a89ce6893a577a5e77a16f04deeb15->leave($__internal_c9acb19d751acb84a2303d3bb11ef5c344a89ce6893a577a5e77a16f04deeb15_prof);

        
        $__internal_f09a7d947d816cc2f2e2dcc47b2d05fa72e06d7befbdcbb8a109d6b2805290df->leave($__internal_f09a7d947d816cc2f2e2dcc47b2d05fa72e06d7befbdcbb8a109d6b2805290df_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2839fa84466c0c8b7b152d60c104bd51e3bc6d04b77e62bf559b139ac7f3beea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2839fa84466c0c8b7b152d60c104bd51e3bc6d04b77e62bf559b139ac7f3beea->enter($__internal_2839fa84466c0c8b7b152d60c104bd51e3bc6d04b77e62bf559b139ac7f3beea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5ab3dd8cbab963f6766d87ce1c0fe02a12e7a793c80f45335be4aeeec18a178f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ab3dd8cbab963f6766d87ce1c0fe02a12e7a793c80f45335be4aeeec18a178f->enter($__internal_5ab3dd8cbab963f6766d87ce1c0fe02a12e7a793c80f45335be4aeeec18a178f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5ab3dd8cbab963f6766d87ce1c0fe02a12e7a793c80f45335be4aeeec18a178f->leave($__internal_5ab3dd8cbab963f6766d87ce1c0fe02a12e7a793c80f45335be4aeeec18a178f_prof);

        
        $__internal_2839fa84466c0c8b7b152d60c104bd51e3bc6d04b77e62bf559b139ac7f3beea->leave($__internal_2839fa84466c0c8b7b152d60c104bd51e3bc6d04b77e62bf559b139ac7f3beea_prof);

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
