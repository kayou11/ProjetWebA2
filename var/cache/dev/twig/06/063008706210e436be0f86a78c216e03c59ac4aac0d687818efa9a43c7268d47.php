<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_adf996bbe0871747df4f5a479431ac9416a25271755c25e92739495ba12ed53c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc8e5a7ca72441a0988d037e4435707a8968b2c1ac45de35151807569231af15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc8e5a7ca72441a0988d037e4435707a8968b2c1ac45de35151807569231af15->enter($__internal_bc8e5a7ca72441a0988d037e4435707a8968b2c1ac45de35151807569231af15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_8a3ca22dead1295b1e3605ad6f3c1a169e39a8bfbfd1790fe4d3efea94e94676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a3ca22dead1295b1e3605ad6f3c1a169e39a8bfbfd1790fe4d3efea94e94676->enter($__internal_8a3ca22dead1295b1e3605ad6f3c1a169e39a8bfbfd1790fe4d3efea94e94676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc8e5a7ca72441a0988d037e4435707a8968b2c1ac45de35151807569231af15->leave($__internal_bc8e5a7ca72441a0988d037e4435707a8968b2c1ac45de35151807569231af15_prof);

        
        $__internal_8a3ca22dead1295b1e3605ad6f3c1a169e39a8bfbfd1790fe4d3efea94e94676->leave($__internal_8a3ca22dead1295b1e3605ad6f3c1a169e39a8bfbfd1790fe4d3efea94e94676_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b60f1db33c7f0769d91a232e24f2f85466f692a411ecf6eb987caa2e3479822c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b60f1db33c7f0769d91a232e24f2f85466f692a411ecf6eb987caa2e3479822c->enter($__internal_b60f1db33c7f0769d91a232e24f2f85466f692a411ecf6eb987caa2e3479822c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_edc1654663f2083ab42add7ba5b59c470b6e4acd6db9fe03d09cf24632ca8018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edc1654663f2083ab42add7ba5b59c470b6e4acd6db9fe03d09cf24632ca8018->enter($__internal_edc1654663f2083ab42add7ba5b59c470b6e4acd6db9fe03d09cf24632ca8018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_edc1654663f2083ab42add7ba5b59c470b6e4acd6db9fe03d09cf24632ca8018->leave($__internal_edc1654663f2083ab42add7ba5b59c470b6e4acd6db9fe03d09cf24632ca8018_prof);

        
        $__internal_b60f1db33c7f0769d91a232e24f2f85466f692a411ecf6eb987caa2e3479822c->leave($__internal_b60f1db33c7f0769d91a232e24f2f85466f692a411ecf6eb987caa2e3479822c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_c75b2baaa230e66cc3ea6db109c0114334178d74a98576cb3a5da58ee8a5b693 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c75b2baaa230e66cc3ea6db109c0114334178d74a98576cb3a5da58ee8a5b693->enter($__internal_c75b2baaa230e66cc3ea6db109c0114334178d74a98576cb3a5da58ee8a5b693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_93cdf7e7ef3667bcef5514b1c9689481b6195edc8ae143758a842a1e7a08e1ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93cdf7e7ef3667bcef5514b1c9689481b6195edc8ae143758a842a1e7a08e1ca->enter($__internal_93cdf7e7ef3667bcef5514b1c9689481b6195edc8ae143758a842a1e7a08e1ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_93cdf7e7ef3667bcef5514b1c9689481b6195edc8ae143758a842a1e7a08e1ca->leave($__internal_93cdf7e7ef3667bcef5514b1c9689481b6195edc8ae143758a842a1e7a08e1ca_prof);

        
        $__internal_c75b2baaa230e66cc3ea6db109c0114334178d74a98576cb3a5da58ee8a5b693->leave($__internal_c75b2baaa230e66cc3ea6db109c0114334178d74a98576cb3a5da58ee8a5b693_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e06eafbd4959eeaa65277564471f98e8b92a83c48b175107c4a0ee30aaae1d3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e06eafbd4959eeaa65277564471f98e8b92a83c48b175107c4a0ee30aaae1d3b->enter($__internal_e06eafbd4959eeaa65277564471f98e8b92a83c48b175107c4a0ee30aaae1d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5810514a4623395c79d86e40c2b896f4cb0e1576762a6ae8b0008daaae2805cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5810514a4623395c79d86e40c2b896f4cb0e1576762a6ae8b0008daaae2805cd->enter($__internal_5810514a4623395c79d86e40c2b896f4cb0e1576762a6ae8b0008daaae2805cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_5810514a4623395c79d86e40c2b896f4cb0e1576762a6ae8b0008daaae2805cd->leave($__internal_5810514a4623395c79d86e40c2b896f4cb0e1576762a6ae8b0008daaae2805cd_prof);

        
        $__internal_e06eafbd4959eeaa65277564471f98e8b92a83c48b175107c4a0ee30aaae1d3b->leave($__internal_e06eafbd4959eeaa65277564471f98e8b92a83c48b175107c4a0ee30aaae1d3b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
