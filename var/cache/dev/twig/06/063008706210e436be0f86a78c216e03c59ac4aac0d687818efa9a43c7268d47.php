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
        $__internal_5d80cdf4e3f5af3627a8c7463f83131c37840ddff83bb70e465b9872c5d1a945 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d80cdf4e3f5af3627a8c7463f83131c37840ddff83bb70e465b9872c5d1a945->enter($__internal_5d80cdf4e3f5af3627a8c7463f83131c37840ddff83bb70e465b9872c5d1a945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_0017bc2339379ce9ddb59ef7fc144541f3b5351816d40060de288bbbcd4eb0a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0017bc2339379ce9ddb59ef7fc144541f3b5351816d40060de288bbbcd4eb0a5->enter($__internal_0017bc2339379ce9ddb59ef7fc144541f3b5351816d40060de288bbbcd4eb0a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d80cdf4e3f5af3627a8c7463f83131c37840ddff83bb70e465b9872c5d1a945->leave($__internal_5d80cdf4e3f5af3627a8c7463f83131c37840ddff83bb70e465b9872c5d1a945_prof);

        
        $__internal_0017bc2339379ce9ddb59ef7fc144541f3b5351816d40060de288bbbcd4eb0a5->leave($__internal_0017bc2339379ce9ddb59ef7fc144541f3b5351816d40060de288bbbcd4eb0a5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_172a3f345f124c42ac6891de314b334abd761ac23dd9ac3aeda25c1db41573ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_172a3f345f124c42ac6891de314b334abd761ac23dd9ac3aeda25c1db41573ca->enter($__internal_172a3f345f124c42ac6891de314b334abd761ac23dd9ac3aeda25c1db41573ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e6d1a437a562e81330d11875a0561196c8851fe25eb5adc449ee5810080b9085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6d1a437a562e81330d11875a0561196c8851fe25eb5adc449ee5810080b9085->enter($__internal_e6d1a437a562e81330d11875a0561196c8851fe25eb5adc449ee5810080b9085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e6d1a437a562e81330d11875a0561196c8851fe25eb5adc449ee5810080b9085->leave($__internal_e6d1a437a562e81330d11875a0561196c8851fe25eb5adc449ee5810080b9085_prof);

        
        $__internal_172a3f345f124c42ac6891de314b334abd761ac23dd9ac3aeda25c1db41573ca->leave($__internal_172a3f345f124c42ac6891de314b334abd761ac23dd9ac3aeda25c1db41573ca_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_bae23768456cb4a00bcf4a8f1351b4a26474485dc9d2cf6896f39e347cd0d3c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bae23768456cb4a00bcf4a8f1351b4a26474485dc9d2cf6896f39e347cd0d3c9->enter($__internal_bae23768456cb4a00bcf4a8f1351b4a26474485dc9d2cf6896f39e347cd0d3c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d8616e9540bc47bca03e82a573329173c0c2302c184339babdbf420cb15a8f48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8616e9540bc47bca03e82a573329173c0c2302c184339babdbf420cb15a8f48->enter($__internal_d8616e9540bc47bca03e82a573329173c0c2302c184339babdbf420cb15a8f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_d8616e9540bc47bca03e82a573329173c0c2302c184339babdbf420cb15a8f48->leave($__internal_d8616e9540bc47bca03e82a573329173c0c2302c184339babdbf420cb15a8f48_prof);

        
        $__internal_bae23768456cb4a00bcf4a8f1351b4a26474485dc9d2cf6896f39e347cd0d3c9->leave($__internal_bae23768456cb4a00bcf4a8f1351b4a26474485dc9d2cf6896f39e347cd0d3c9_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c300e809d43523cae1ba80e6f611b43eaf599d963a5205653f215dfdc772e99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c300e809d43523cae1ba80e6f611b43eaf599d963a5205653f215dfdc772e99->enter($__internal_5c300e809d43523cae1ba80e6f611b43eaf599d963a5205653f215dfdc772e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f9ac78ffc4d83e36dd386ef761b98cd57080cf915a604589b40581017f8ed4c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9ac78ffc4d83e36dd386ef761b98cd57080cf915a604589b40581017f8ed4c6->enter($__internal_f9ac78ffc4d83e36dd386ef761b98cd57080cf915a604589b40581017f8ed4c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_f9ac78ffc4d83e36dd386ef761b98cd57080cf915a604589b40581017f8ed4c6->leave($__internal_f9ac78ffc4d83e36dd386ef761b98cd57080cf915a604589b40581017f8ed4c6_prof);

        
        $__internal_5c300e809d43523cae1ba80e6f611b43eaf599d963a5205653f215dfdc772e99->leave($__internal_5c300e809d43523cae1ba80e6f611b43eaf599d963a5205653f215dfdc772e99_prof);

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
