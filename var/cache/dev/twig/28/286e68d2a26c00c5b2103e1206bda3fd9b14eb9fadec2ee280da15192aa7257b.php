<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_02db04f1572297804ab566dbd40550e0ef8c51f970693928e0f4c5e090f36b11 extends Twig_Template
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
        $__internal_c3ea24b043d683791c0fa2d5bb766d4c678aa80adf4d3665e5ba4306c64ed418 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3ea24b043d683791c0fa2d5bb766d4c678aa80adf4d3665e5ba4306c64ed418->enter($__internal_c3ea24b043d683791c0fa2d5bb766d4c678aa80adf4d3665e5ba4306c64ed418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_2db3f7dbce36722e08ba65c5640018c931a63b1f2f9ad55a56470a67281cb78b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2db3f7dbce36722e08ba65c5640018c931a63b1f2f9ad55a56470a67281cb78b->enter($__internal_2db3f7dbce36722e08ba65c5640018c931a63b1f2f9ad55a56470a67281cb78b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3ea24b043d683791c0fa2d5bb766d4c678aa80adf4d3665e5ba4306c64ed418->leave($__internal_c3ea24b043d683791c0fa2d5bb766d4c678aa80adf4d3665e5ba4306c64ed418_prof);

        
        $__internal_2db3f7dbce36722e08ba65c5640018c931a63b1f2f9ad55a56470a67281cb78b->leave($__internal_2db3f7dbce36722e08ba65c5640018c931a63b1f2f9ad55a56470a67281cb78b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_89333576cbb6bd45f446505bde7a6fde56e24073f22d1497da6dc04a86bbd605 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89333576cbb6bd45f446505bde7a6fde56e24073f22d1497da6dc04a86bbd605->enter($__internal_89333576cbb6bd45f446505bde7a6fde56e24073f22d1497da6dc04a86bbd605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5a183b94109e1357e9e34d5cca59f7d7b69d0d03387c0257a1ea69a6faac3987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a183b94109e1357e9e34d5cca59f7d7b69d0d03387c0257a1ea69a6faac3987->enter($__internal_5a183b94109e1357e9e34d5cca59f7d7b69d0d03387c0257a1ea69a6faac3987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5a183b94109e1357e9e34d5cca59f7d7b69d0d03387c0257a1ea69a6faac3987->leave($__internal_5a183b94109e1357e9e34d5cca59f7d7b69d0d03387c0257a1ea69a6faac3987_prof);

        
        $__internal_89333576cbb6bd45f446505bde7a6fde56e24073f22d1497da6dc04a86bbd605->leave($__internal_89333576cbb6bd45f446505bde7a6fde56e24073f22d1497da6dc04a86bbd605_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_940f9f09f92de2a69d53728e265e60dce48b1bab52e382d82c0edd88b0719232 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_940f9f09f92de2a69d53728e265e60dce48b1bab52e382d82c0edd88b0719232->enter($__internal_940f9f09f92de2a69d53728e265e60dce48b1bab52e382d82c0edd88b0719232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b8ed32298169c804c26f46031080e0b1394826890f9e5d4fe4891c81c2fa7a31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8ed32298169c804c26f46031080e0b1394826890f9e5d4fe4891c81c2fa7a31->enter($__internal_b8ed32298169c804c26f46031080e0b1394826890f9e5d4fe4891c81c2fa7a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b8ed32298169c804c26f46031080e0b1394826890f9e5d4fe4891c81c2fa7a31->leave($__internal_b8ed32298169c804c26f46031080e0b1394826890f9e5d4fe4891c81c2fa7a31_prof);

        
        $__internal_940f9f09f92de2a69d53728e265e60dce48b1bab52e382d82c0edd88b0719232->leave($__internal_940f9f09f92de2a69d53728e265e60dce48b1bab52e382d82c0edd88b0719232_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_77c57152bcc39f6151d99ca9c71985f2c412e15460f4b19f07caeb5cb93fcc89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77c57152bcc39f6151d99ca9c71985f2c412e15460f4b19f07caeb5cb93fcc89->enter($__internal_77c57152bcc39f6151d99ca9c71985f2c412e15460f4b19f07caeb5cb93fcc89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8ea45aa3d7bc99c0f8d88206d91b47e6753a9001068d3264069026cdef7db4d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ea45aa3d7bc99c0f8d88206d91b47e6753a9001068d3264069026cdef7db4d3->enter($__internal_8ea45aa3d7bc99c0f8d88206d91b47e6753a9001068d3264069026cdef7db4d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_8ea45aa3d7bc99c0f8d88206d91b47e6753a9001068d3264069026cdef7db4d3->leave($__internal_8ea45aa3d7bc99c0f8d88206d91b47e6753a9001068d3264069026cdef7db4d3_prof);

        
        $__internal_77c57152bcc39f6151d99ca9c71985f2c412e15460f4b19f07caeb5cb93fcc89->leave($__internal_77c57152bcc39f6151d99ca9c71985f2c412e15460f4b19f07caeb5cb93fcc89_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
