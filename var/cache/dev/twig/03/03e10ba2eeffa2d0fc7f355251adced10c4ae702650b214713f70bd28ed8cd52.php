<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_35c5e9b4a8c73e7e06944cdb79bc7754c58356faa1c43622c8573ef10db3ea04 extends Twig_Template
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
        $__internal_5aa9e751f339e383b46ce725a88f7dd40fba866ac656dd6a6c9496fceefef059 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aa9e751f339e383b46ce725a88f7dd40fba866ac656dd6a6c9496fceefef059->enter($__internal_5aa9e751f339e383b46ce725a88f7dd40fba866ac656dd6a6c9496fceefef059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_f52f0dd90056a4a627eccd11077dbc60ab03dbd8a7881fc640e1c1d968e1ebb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f52f0dd90056a4a627eccd11077dbc60ab03dbd8a7881fc640e1c1d968e1ebb2->enter($__internal_f52f0dd90056a4a627eccd11077dbc60ab03dbd8a7881fc640e1c1d968e1ebb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5aa9e751f339e383b46ce725a88f7dd40fba866ac656dd6a6c9496fceefef059->leave($__internal_5aa9e751f339e383b46ce725a88f7dd40fba866ac656dd6a6c9496fceefef059_prof);

        
        $__internal_f52f0dd90056a4a627eccd11077dbc60ab03dbd8a7881fc640e1c1d968e1ebb2->leave($__internal_f52f0dd90056a4a627eccd11077dbc60ab03dbd8a7881fc640e1c1d968e1ebb2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5284704639346ccc4e8d9be2da143f942bcf86bf43ce39e37b0f3935328a811c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5284704639346ccc4e8d9be2da143f942bcf86bf43ce39e37b0f3935328a811c->enter($__internal_5284704639346ccc4e8d9be2da143f942bcf86bf43ce39e37b0f3935328a811c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e1e571114c7dbb7650f34dbc052e72f53bd994a31f39bfaea1688ffb7022c11d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1e571114c7dbb7650f34dbc052e72f53bd994a31f39bfaea1688ffb7022c11d->enter($__internal_e1e571114c7dbb7650f34dbc052e72f53bd994a31f39bfaea1688ffb7022c11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e1e571114c7dbb7650f34dbc052e72f53bd994a31f39bfaea1688ffb7022c11d->leave($__internal_e1e571114c7dbb7650f34dbc052e72f53bd994a31f39bfaea1688ffb7022c11d_prof);

        
        $__internal_5284704639346ccc4e8d9be2da143f942bcf86bf43ce39e37b0f3935328a811c->leave($__internal_5284704639346ccc4e8d9be2da143f942bcf86bf43ce39e37b0f3935328a811c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_72c52541ab01c064045164f36bd039b8dc215944d220f3b2e2bc3c825b33294e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72c52541ab01c064045164f36bd039b8dc215944d220f3b2e2bc3c825b33294e->enter($__internal_72c52541ab01c064045164f36bd039b8dc215944d220f3b2e2bc3c825b33294e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8466e0fab232015677ce50ae5c6ffcccd3fa76dbca4419684b6a0442bb37f514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8466e0fab232015677ce50ae5c6ffcccd3fa76dbca4419684b6a0442bb37f514->enter($__internal_8466e0fab232015677ce50ae5c6ffcccd3fa76dbca4419684b6a0442bb37f514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8466e0fab232015677ce50ae5c6ffcccd3fa76dbca4419684b6a0442bb37f514->leave($__internal_8466e0fab232015677ce50ae5c6ffcccd3fa76dbca4419684b6a0442bb37f514_prof);

        
        $__internal_72c52541ab01c064045164f36bd039b8dc215944d220f3b2e2bc3c825b33294e->leave($__internal_72c52541ab01c064045164f36bd039b8dc215944d220f3b2e2bc3c825b33294e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2ecc70d630367611e03956e5373fa374979351d91f790554f4b491522b29b1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2ecc70d630367611e03956e5373fa374979351d91f790554f4b491522b29b1e->enter($__internal_e2ecc70d630367611e03956e5373fa374979351d91f790554f4b491522b29b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c4c200c1e9a12551fd0fd8d6790851485b534f92f3b43a81a99a0fdd7743a73f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4c200c1e9a12551fd0fd8d6790851485b534f92f3b43a81a99a0fdd7743a73f->enter($__internal_c4c200c1e9a12551fd0fd8d6790851485b534f92f3b43a81a99a0fdd7743a73f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_c4c200c1e9a12551fd0fd8d6790851485b534f92f3b43a81a99a0fdd7743a73f->leave($__internal_c4c200c1e9a12551fd0fd8d6790851485b534f92f3b43a81a99a0fdd7743a73f_prof);

        
        $__internal_e2ecc70d630367611e03956e5373fa374979351d91f790554f4b491522b29b1e->leave($__internal_e2ecc70d630367611e03956e5373fa374979351d91f790554f4b491522b29b1e_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
