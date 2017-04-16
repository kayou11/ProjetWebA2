<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_dd0cec07bd480df37b250c504dc1d715cf1e02fac6f40c2b6ddc06b4a89fc7e4 extends Twig_Template
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
        $__internal_7d715efadb57a0a0e3895c3b5ce7c845cac9243aea51bb0eab0d45553c75d281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d715efadb57a0a0e3895c3b5ce7c845cac9243aea51bb0eab0d45553c75d281->enter($__internal_7d715efadb57a0a0e3895c3b5ce7c845cac9243aea51bb0eab0d45553c75d281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_6d34b7c5a7ed9456c1f899d9ef85939528f86c96b02a1faa9b85623b03e5727b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d34b7c5a7ed9456c1f899d9ef85939528f86c96b02a1faa9b85623b03e5727b->enter($__internal_6d34b7c5a7ed9456c1f899d9ef85939528f86c96b02a1faa9b85623b03e5727b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d715efadb57a0a0e3895c3b5ce7c845cac9243aea51bb0eab0d45553c75d281->leave($__internal_7d715efadb57a0a0e3895c3b5ce7c845cac9243aea51bb0eab0d45553c75d281_prof);

        
        $__internal_6d34b7c5a7ed9456c1f899d9ef85939528f86c96b02a1faa9b85623b03e5727b->leave($__internal_6d34b7c5a7ed9456c1f899d9ef85939528f86c96b02a1faa9b85623b03e5727b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d9d8533733cd0bf54c225539884ef6e4d69a0a323fdb9887f89bcb60e09ce5bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9d8533733cd0bf54c225539884ef6e4d69a0a323fdb9887f89bcb60e09ce5bb->enter($__internal_d9d8533733cd0bf54c225539884ef6e4d69a0a323fdb9887f89bcb60e09ce5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_28ddbf947bafc15210f0666b8fe1c1b19c94a49ef1e0bf9fd160ae3261d4b6a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28ddbf947bafc15210f0666b8fe1c1b19c94a49ef1e0bf9fd160ae3261d4b6a4->enter($__internal_28ddbf947bafc15210f0666b8fe1c1b19c94a49ef1e0bf9fd160ae3261d4b6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_28ddbf947bafc15210f0666b8fe1c1b19c94a49ef1e0bf9fd160ae3261d4b6a4->leave($__internal_28ddbf947bafc15210f0666b8fe1c1b19c94a49ef1e0bf9fd160ae3261d4b6a4_prof);

        
        $__internal_d9d8533733cd0bf54c225539884ef6e4d69a0a323fdb9887f89bcb60e09ce5bb->leave($__internal_d9d8533733cd0bf54c225539884ef6e4d69a0a323fdb9887f89bcb60e09ce5bb_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_afaba15ba84279a5a2c9935965d668987e2170e21f45aa21179f285a5204a2d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afaba15ba84279a5a2c9935965d668987e2170e21f45aa21179f285a5204a2d6->enter($__internal_afaba15ba84279a5a2c9935965d668987e2170e21f45aa21179f285a5204a2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5bfa7bc2673e1322dc9b53ebe0e748cb6643ba5cc21eae6dd973ced58672d9eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bfa7bc2673e1322dc9b53ebe0e748cb6643ba5cc21eae6dd973ced58672d9eb->enter($__internal_5bfa7bc2673e1322dc9b53ebe0e748cb6643ba5cc21eae6dd973ced58672d9eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_5bfa7bc2673e1322dc9b53ebe0e748cb6643ba5cc21eae6dd973ced58672d9eb->leave($__internal_5bfa7bc2673e1322dc9b53ebe0e748cb6643ba5cc21eae6dd973ced58672d9eb_prof);

        
        $__internal_afaba15ba84279a5a2c9935965d668987e2170e21f45aa21179f285a5204a2d6->leave($__internal_afaba15ba84279a5a2c9935965d668987e2170e21f45aa21179f285a5204a2d6_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_aed93da0a51a50e069d9534fdfc6a606ec08b75ef994d0bb7fefe21880fb0b8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aed93da0a51a50e069d9534fdfc6a606ec08b75ef994d0bb7fefe21880fb0b8c->enter($__internal_aed93da0a51a50e069d9534fdfc6a606ec08b75ef994d0bb7fefe21880fb0b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_076dd3ba6015b0f571ee691d3b24bd37532be01eae248875497ade84557549d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_076dd3ba6015b0f571ee691d3b24bd37532be01eae248875497ade84557549d9->enter($__internal_076dd3ba6015b0f571ee691d3b24bd37532be01eae248875497ade84557549d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_076dd3ba6015b0f571ee691d3b24bd37532be01eae248875497ade84557549d9->leave($__internal_076dd3ba6015b0f571ee691d3b24bd37532be01eae248875497ade84557549d9_prof);

        
        $__internal_aed93da0a51a50e069d9534fdfc6a606ec08b75ef994d0bb7fefe21880fb0b8c->leave($__internal_aed93da0a51a50e069d9534fdfc6a606ec08b75ef994d0bb7fefe21880fb0b8c_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\MAMP\\htdocs\\ProjetWebA2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
