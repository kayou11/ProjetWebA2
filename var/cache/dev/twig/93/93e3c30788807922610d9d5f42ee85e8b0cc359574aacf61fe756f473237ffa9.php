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
        $__internal_737e8dda49e541029abeceb0af6f4748688a69fcb797f2ba59c71501c187b0c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_737e8dda49e541029abeceb0af6f4748688a69fcb797f2ba59c71501c187b0c5->enter($__internal_737e8dda49e541029abeceb0af6f4748688a69fcb797f2ba59c71501c187b0c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_4398de0c3e84d0f4011e2d382b8ae9c12713b59d85915dcfc82bc481e2d79c77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4398de0c3e84d0f4011e2d382b8ae9c12713b59d85915dcfc82bc481e2d79c77->enter($__internal_4398de0c3e84d0f4011e2d382b8ae9c12713b59d85915dcfc82bc481e2d79c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_737e8dda49e541029abeceb0af6f4748688a69fcb797f2ba59c71501c187b0c5->leave($__internal_737e8dda49e541029abeceb0af6f4748688a69fcb797f2ba59c71501c187b0c5_prof);

        
        $__internal_4398de0c3e84d0f4011e2d382b8ae9c12713b59d85915dcfc82bc481e2d79c77->leave($__internal_4398de0c3e84d0f4011e2d382b8ae9c12713b59d85915dcfc82bc481e2d79c77_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6c4a5ccf06745866196423b38495dedc9198a1d30720bc60812e98b81fbdf008 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c4a5ccf06745866196423b38495dedc9198a1d30720bc60812e98b81fbdf008->enter($__internal_6c4a5ccf06745866196423b38495dedc9198a1d30720bc60812e98b81fbdf008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1af343ce6ce3af1b3e57bf60546f47dab56332e163169cdab71ea5957526c749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1af343ce6ce3af1b3e57bf60546f47dab56332e163169cdab71ea5957526c749->enter($__internal_1af343ce6ce3af1b3e57bf60546f47dab56332e163169cdab71ea5957526c749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_1af343ce6ce3af1b3e57bf60546f47dab56332e163169cdab71ea5957526c749->leave($__internal_1af343ce6ce3af1b3e57bf60546f47dab56332e163169cdab71ea5957526c749_prof);

        
        $__internal_6c4a5ccf06745866196423b38495dedc9198a1d30720bc60812e98b81fbdf008->leave($__internal_6c4a5ccf06745866196423b38495dedc9198a1d30720bc60812e98b81fbdf008_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_02c0f22c567e6599038cecc299357923aa280909097e1f35cac6ea5009937f1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02c0f22c567e6599038cecc299357923aa280909097e1f35cac6ea5009937f1b->enter($__internal_02c0f22c567e6599038cecc299357923aa280909097e1f35cac6ea5009937f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3cfce8c67150c33f63d76667a577af2403695711f8e29affefc539d76c212fcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cfce8c67150c33f63d76667a577af2403695711f8e29affefc539d76c212fcd->enter($__internal_3cfce8c67150c33f63d76667a577af2403695711f8e29affefc539d76c212fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3cfce8c67150c33f63d76667a577af2403695711f8e29affefc539d76c212fcd->leave($__internal_3cfce8c67150c33f63d76667a577af2403695711f8e29affefc539d76c212fcd_prof);

        
        $__internal_02c0f22c567e6599038cecc299357923aa280909097e1f35cac6ea5009937f1b->leave($__internal_02c0f22c567e6599038cecc299357923aa280909097e1f35cac6ea5009937f1b_prof);

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
