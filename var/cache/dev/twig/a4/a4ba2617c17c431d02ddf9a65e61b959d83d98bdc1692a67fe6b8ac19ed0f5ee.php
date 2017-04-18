<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_78a4d558027d7947600290f0c99d6ec972a5565f2772fb406d93700f36e85f2d extends Twig_Template
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
        $__internal_b675f18bc433b709894dfc7d26ca4c0b72ac4d613b0be7ed096bb47d57d746fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b675f18bc433b709894dfc7d26ca4c0b72ac4d613b0be7ed096bb47d57d746fa->enter($__internal_b675f18bc433b709894dfc7d26ca4c0b72ac4d613b0be7ed096bb47d57d746fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_85d63c5d8f247a781388a5cecb890656bc106532bc85c630fdf8b673d50f2d18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85d63c5d8f247a781388a5cecb890656bc106532bc85c630fdf8b673d50f2d18->enter($__internal_85d63c5d8f247a781388a5cecb890656bc106532bc85c630fdf8b673d50f2d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b675f18bc433b709894dfc7d26ca4c0b72ac4d613b0be7ed096bb47d57d746fa->leave($__internal_b675f18bc433b709894dfc7d26ca4c0b72ac4d613b0be7ed096bb47d57d746fa_prof);

        
        $__internal_85d63c5d8f247a781388a5cecb890656bc106532bc85c630fdf8b673d50f2d18->leave($__internal_85d63c5d8f247a781388a5cecb890656bc106532bc85c630fdf8b673d50f2d18_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bb9465b0ee6a392190f550cd564061e9d4d45656339b835ebbe2dc99c44a7b65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb9465b0ee6a392190f550cd564061e9d4d45656339b835ebbe2dc99c44a7b65->enter($__internal_bb9465b0ee6a392190f550cd564061e9d4d45656339b835ebbe2dc99c44a7b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fdb8580393071a5e8c643bad66af42629e06b4224ddf6b83da7a075c10364a0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdb8580393071a5e8c643bad66af42629e06b4224ddf6b83da7a075c10364a0c->enter($__internal_fdb8580393071a5e8c643bad66af42629e06b4224ddf6b83da7a075c10364a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_fdb8580393071a5e8c643bad66af42629e06b4224ddf6b83da7a075c10364a0c->leave($__internal_fdb8580393071a5e8c643bad66af42629e06b4224ddf6b83da7a075c10364a0c_prof);

        
        $__internal_bb9465b0ee6a392190f550cd564061e9d4d45656339b835ebbe2dc99c44a7b65->leave($__internal_bb9465b0ee6a392190f550cd564061e9d4d45656339b835ebbe2dc99c44a7b65_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_40bd8698827618c9085c0ce7eafe09c5a3ea965e2023ed59bde8e50e3e8a85ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40bd8698827618c9085c0ce7eafe09c5a3ea965e2023ed59bde8e50e3e8a85ac->enter($__internal_40bd8698827618c9085c0ce7eafe09c5a3ea965e2023ed59bde8e50e3e8a85ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_22c509015ecf65d9a465905e2e5775c718daa01b65600e3b4753e3e541696138 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22c509015ecf65d9a465905e2e5775c718daa01b65600e3b4753e3e541696138->enter($__internal_22c509015ecf65d9a465905e2e5775c718daa01b65600e3b4753e3e541696138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_22c509015ecf65d9a465905e2e5775c718daa01b65600e3b4753e3e541696138->leave($__internal_22c509015ecf65d9a465905e2e5775c718daa01b65600e3b4753e3e541696138_prof);

        
        $__internal_40bd8698827618c9085c0ce7eafe09c5a3ea965e2023ed59bde8e50e3e8a85ac->leave($__internal_40bd8698827618c9085c0ce7eafe09c5a3ea965e2023ed59bde8e50e3e8a85ac_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_259318cac6cbd907967955dc256a1737737cdb059111d2ed48bbe5e83e23136f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_259318cac6cbd907967955dc256a1737737cdb059111d2ed48bbe5e83e23136f->enter($__internal_259318cac6cbd907967955dc256a1737737cdb059111d2ed48bbe5e83e23136f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b35d73b4d97ea8a3d6b1bf15a1f1510b5ca55780bf4971463bc9fded5771bd61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b35d73b4d97ea8a3d6b1bf15a1f1510b5ca55780bf4971463bc9fded5771bd61->enter($__internal_b35d73b4d97ea8a3d6b1bf15a1f1510b5ca55780bf4971463bc9fded5771bd61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_b35d73b4d97ea8a3d6b1bf15a1f1510b5ca55780bf4971463bc9fded5771bd61->leave($__internal_b35d73b4d97ea8a3d6b1bf15a1f1510b5ca55780bf4971463bc9fded5771bd61_prof);

        
        $__internal_259318cac6cbd907967955dc256a1737737cdb059111d2ed48bbe5e83e23136f->leave($__internal_259318cac6cbd907967955dc256a1737737cdb059111d2ed48bbe5e83e23136f_prof);

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
