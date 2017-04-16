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
        $__internal_aeb765344932c8d720326e4686d7095510b778a20cf13cce919d56a80d6c9afd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeb765344932c8d720326e4686d7095510b778a20cf13cce919d56a80d6c9afd->enter($__internal_aeb765344932c8d720326e4686d7095510b778a20cf13cce919d56a80d6c9afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_ad0f96f86c716cd8cb5db7b788588aaddf7d92ecb3d873efbd579bab356ba85e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad0f96f86c716cd8cb5db7b788588aaddf7d92ecb3d873efbd579bab356ba85e->enter($__internal_ad0f96f86c716cd8cb5db7b788588aaddf7d92ecb3d873efbd579bab356ba85e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aeb765344932c8d720326e4686d7095510b778a20cf13cce919d56a80d6c9afd->leave($__internal_aeb765344932c8d720326e4686d7095510b778a20cf13cce919d56a80d6c9afd_prof);

        
        $__internal_ad0f96f86c716cd8cb5db7b788588aaddf7d92ecb3d873efbd579bab356ba85e->leave($__internal_ad0f96f86c716cd8cb5db7b788588aaddf7d92ecb3d873efbd579bab356ba85e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_918c1d2aa86ad38a8fea548bef42235ba0678fb9b99e64a0e984d42f59cf223a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_918c1d2aa86ad38a8fea548bef42235ba0678fb9b99e64a0e984d42f59cf223a->enter($__internal_918c1d2aa86ad38a8fea548bef42235ba0678fb9b99e64a0e984d42f59cf223a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a24a60df469f8eed3137ab5204bebb5c8821f66bf64b1ba47b34dd83a94ae3e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a24a60df469f8eed3137ab5204bebb5c8821f66bf64b1ba47b34dd83a94ae3e7->enter($__internal_a24a60df469f8eed3137ab5204bebb5c8821f66bf64b1ba47b34dd83a94ae3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a24a60df469f8eed3137ab5204bebb5c8821f66bf64b1ba47b34dd83a94ae3e7->leave($__internal_a24a60df469f8eed3137ab5204bebb5c8821f66bf64b1ba47b34dd83a94ae3e7_prof);

        
        $__internal_918c1d2aa86ad38a8fea548bef42235ba0678fb9b99e64a0e984d42f59cf223a->leave($__internal_918c1d2aa86ad38a8fea548bef42235ba0678fb9b99e64a0e984d42f59cf223a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_619b0d1d9fe39c049e0eb47228a404a8af192488a6d52d08b5944769fa57183d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_619b0d1d9fe39c049e0eb47228a404a8af192488a6d52d08b5944769fa57183d->enter($__internal_619b0d1d9fe39c049e0eb47228a404a8af192488a6d52d08b5944769fa57183d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_19994f846385c5f777077d261aabb89dc07ef85615655b3408a157a7a802a768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19994f846385c5f777077d261aabb89dc07ef85615655b3408a157a7a802a768->enter($__internal_19994f846385c5f777077d261aabb89dc07ef85615655b3408a157a7a802a768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_19994f846385c5f777077d261aabb89dc07ef85615655b3408a157a7a802a768->leave($__internal_19994f846385c5f777077d261aabb89dc07ef85615655b3408a157a7a802a768_prof);

        
        $__internal_619b0d1d9fe39c049e0eb47228a404a8af192488a6d52d08b5944769fa57183d->leave($__internal_619b0d1d9fe39c049e0eb47228a404a8af192488a6d52d08b5944769fa57183d_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f842aa948a77ee08a6c3de70d517348322713f92d1562f4f8233cea9098a26c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f842aa948a77ee08a6c3de70d517348322713f92d1562f4f8233cea9098a26c->enter($__internal_6f842aa948a77ee08a6c3de70d517348322713f92d1562f4f8233cea9098a26c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c82ae7e8cbc546a436f716950f5361f1194fc9cef66c9bbb9cb512b2dd2cfa79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c82ae7e8cbc546a436f716950f5361f1194fc9cef66c9bbb9cb512b2dd2cfa79->enter($__internal_c82ae7e8cbc546a436f716950f5361f1194fc9cef66c9bbb9cb512b2dd2cfa79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_c82ae7e8cbc546a436f716950f5361f1194fc9cef66c9bbb9cb512b2dd2cfa79->leave($__internal_c82ae7e8cbc546a436f716950f5361f1194fc9cef66c9bbb9cb512b2dd2cfa79_prof);

        
        $__internal_6f842aa948a77ee08a6c3de70d517348322713f92d1562f4f8233cea9098a26c->leave($__internal_6f842aa948a77ee08a6c3de70d517348322713f92d1562f4f8233cea9098a26c_prof);

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
