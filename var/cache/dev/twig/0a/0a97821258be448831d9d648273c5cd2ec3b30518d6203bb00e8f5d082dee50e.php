<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_db6d565f2f373191d5aaccb5314e1161ce07a3397273836c8229f3a7abd22799 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_f72c06fd52f629c1244cf5d06fa59c6b5fb1c3be142866ea17dc4e4b5df12a35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f72c06fd52f629c1244cf5d06fa59c6b5fb1c3be142866ea17dc4e4b5df12a35->enter($__internal_f72c06fd52f629c1244cf5d06fa59c6b5fb1c3be142866ea17dc4e4b5df12a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_d99d2d36f2af7c696a9676b187d937e44ad9aef2e2a0326c16cc5c2d2e8d7f9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d99d2d36f2af7c696a9676b187d937e44ad9aef2e2a0326c16cc5c2d2e8d7f9b->enter($__internal_d99d2d36f2af7c696a9676b187d937e44ad9aef2e2a0326c16cc5c2d2e8d7f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f72c06fd52f629c1244cf5d06fa59c6b5fb1c3be142866ea17dc4e4b5df12a35->leave($__internal_f72c06fd52f629c1244cf5d06fa59c6b5fb1c3be142866ea17dc4e4b5df12a35_prof);

        
        $__internal_d99d2d36f2af7c696a9676b187d937e44ad9aef2e2a0326c16cc5c2d2e8d7f9b->leave($__internal_d99d2d36f2af7c696a9676b187d937e44ad9aef2e2a0326c16cc5c2d2e8d7f9b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4e8b7b967f4cbbddd036417a3c6ce3be0b32a4f2a4d34649fd87e32ff7725106 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e8b7b967f4cbbddd036417a3c6ce3be0b32a4f2a4d34649fd87e32ff7725106->enter($__internal_4e8b7b967f4cbbddd036417a3c6ce3be0b32a4f2a4d34649fd87e32ff7725106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_748cd7dddf5546364eb045d8d73a2e3bd496e7d69ea70cf26454f8e349aebfdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_748cd7dddf5546364eb045d8d73a2e3bd496e7d69ea70cf26454f8e349aebfdb->enter($__internal_748cd7dddf5546364eb045d8d73a2e3bd496e7d69ea70cf26454f8e349aebfdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_748cd7dddf5546364eb045d8d73a2e3bd496e7d69ea70cf26454f8e349aebfdb->leave($__internal_748cd7dddf5546364eb045d8d73a2e3bd496e7d69ea70cf26454f8e349aebfdb_prof);

        
        $__internal_4e8b7b967f4cbbddd036417a3c6ce3be0b32a4f2a4d34649fd87e32ff7725106->leave($__internal_4e8b7b967f4cbbddd036417a3c6ce3be0b32a4f2a4d34649fd87e32ff7725106_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e49e5330f880049c5d7b3eec80469c4c9b38ee230367ff968ac2481f6e3700ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e49e5330f880049c5d7b3eec80469c4c9b38ee230367ff968ac2481f6e3700ad->enter($__internal_e49e5330f880049c5d7b3eec80469c4c9b38ee230367ff968ac2481f6e3700ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_84236217244288b6c4ff7d2ee8e53a8e4823357ea4550313acbea74cd50615d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84236217244288b6c4ff7d2ee8e53a8e4823357ea4550313acbea74cd50615d0->enter($__internal_84236217244288b6c4ff7d2ee8e53a8e4823357ea4550313acbea74cd50615d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_84236217244288b6c4ff7d2ee8e53a8e4823357ea4550313acbea74cd50615d0->leave($__internal_84236217244288b6c4ff7d2ee8e53a8e4823357ea4550313acbea74cd50615d0_prof);

        
        $__internal_e49e5330f880049c5d7b3eec80469c4c9b38ee230367ff968ac2481f6e3700ad->leave($__internal_e49e5330f880049c5d7b3eec80469c4c9b38ee230367ff968ac2481f6e3700ad_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5b7eec548d317839fcbd540a7979d599d8d099d3e10c528fd43145cd989d2a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5b7eec548d317839fcbd540a7979d599d8d099d3e10c528fd43145cd989d2a2->enter($__internal_a5b7eec548d317839fcbd540a7979d599d8d099d3e10c528fd43145cd989d2a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_683fee84c50dd81516a025c2b2f5c8d66070a3a2ed4c6b81be403c950f4e1127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_683fee84c50dd81516a025c2b2f5c8d66070a3a2ed4c6b81be403c950f4e1127->enter($__internal_683fee84c50dd81516a025c2b2f5c8d66070a3a2ed4c6b81be403c950f4e1127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_683fee84c50dd81516a025c2b2f5c8d66070a3a2ed4c6b81be403c950f4e1127->leave($__internal_683fee84c50dd81516a025c2b2f5c8d66070a3a2ed4c6b81be403c950f4e1127_prof);

        
        $__internal_a5b7eec548d317839fcbd540a7979d599d8d099d3e10c528fd43145cd989d2a2->leave($__internal_a5b7eec548d317839fcbd540a7979d599d8d099d3e10c528fd43145cd989d2a2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
