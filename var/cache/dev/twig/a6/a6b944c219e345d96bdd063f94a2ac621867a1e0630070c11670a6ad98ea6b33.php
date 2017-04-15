<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_2749175f2145a0bd6493a3aaf78dbfb023d010ea12573cec61935cb93fce4149 extends Twig_Template
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
        $__internal_1e25103548465f4789e2b66b9bf82ace3eff90b636d5bea3122d539886047f58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e25103548465f4789e2b66b9bf82ace3eff90b636d5bea3122d539886047f58->enter($__internal_1e25103548465f4789e2b66b9bf82ace3eff90b636d5bea3122d539886047f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_8b664dd66fb7b8fec259404ed734e33c0a164cee383632c1b497a87a9d47b706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b664dd66fb7b8fec259404ed734e33c0a164cee383632c1b497a87a9d47b706->enter($__internal_8b664dd66fb7b8fec259404ed734e33c0a164cee383632c1b497a87a9d47b706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e25103548465f4789e2b66b9bf82ace3eff90b636d5bea3122d539886047f58->leave($__internal_1e25103548465f4789e2b66b9bf82ace3eff90b636d5bea3122d539886047f58_prof);

        
        $__internal_8b664dd66fb7b8fec259404ed734e33c0a164cee383632c1b497a87a9d47b706->leave($__internal_8b664dd66fb7b8fec259404ed734e33c0a164cee383632c1b497a87a9d47b706_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a9fdf3199a0e9b82e57c23e38c008e930b328cf5871d3681e0638f7708cecff0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9fdf3199a0e9b82e57c23e38c008e930b328cf5871d3681e0638f7708cecff0->enter($__internal_a9fdf3199a0e9b82e57c23e38c008e930b328cf5871d3681e0638f7708cecff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_634bf54bcd5c52dbba46c70b63e26b776fe2f1fe33453a78bcdab86b9b1adb1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_634bf54bcd5c52dbba46c70b63e26b776fe2f1fe33453a78bcdab86b9b1adb1d->enter($__internal_634bf54bcd5c52dbba46c70b63e26b776fe2f1fe33453a78bcdab86b9b1adb1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_634bf54bcd5c52dbba46c70b63e26b776fe2f1fe33453a78bcdab86b9b1adb1d->leave($__internal_634bf54bcd5c52dbba46c70b63e26b776fe2f1fe33453a78bcdab86b9b1adb1d_prof);

        
        $__internal_a9fdf3199a0e9b82e57c23e38c008e930b328cf5871d3681e0638f7708cecff0->leave($__internal_a9fdf3199a0e9b82e57c23e38c008e930b328cf5871d3681e0638f7708cecff0_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_4850f162d4067d2b3c85414c7174569681a3303f5b795cb51edad6bb4259578a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4850f162d4067d2b3c85414c7174569681a3303f5b795cb51edad6bb4259578a->enter($__internal_4850f162d4067d2b3c85414c7174569681a3303f5b795cb51edad6bb4259578a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7e4935ffc683e106887c12418b37e2eefa098fd49d30c507916b917e1c312cf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e4935ffc683e106887c12418b37e2eefa098fd49d30c507916b917e1c312cf3->enter($__internal_7e4935ffc683e106887c12418b37e2eefa098fd49d30c507916b917e1c312cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7e4935ffc683e106887c12418b37e2eefa098fd49d30c507916b917e1c312cf3->leave($__internal_7e4935ffc683e106887c12418b37e2eefa098fd49d30c507916b917e1c312cf3_prof);

        
        $__internal_4850f162d4067d2b3c85414c7174569681a3303f5b795cb51edad6bb4259578a->leave($__internal_4850f162d4067d2b3c85414c7174569681a3303f5b795cb51edad6bb4259578a_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_0053bac6fe64053323f92040a317e55edb5889e7be2a002bb1da6e87907e5bf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0053bac6fe64053323f92040a317e55edb5889e7be2a002bb1da6e87907e5bf4->enter($__internal_0053bac6fe64053323f92040a317e55edb5889e7be2a002bb1da6e87907e5bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d6a6ad0d5b5436ac5f2e14dc92a8eb1f055bb47789aa7dfc8d8612d38bda5939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6a6ad0d5b5436ac5f2e14dc92a8eb1f055bb47789aa7dfc8d8612d38bda5939->enter($__internal_d6a6ad0d5b5436ac5f2e14dc92a8eb1f055bb47789aa7dfc8d8612d38bda5939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_d6a6ad0d5b5436ac5f2e14dc92a8eb1f055bb47789aa7dfc8d8612d38bda5939->leave($__internal_d6a6ad0d5b5436ac5f2e14dc92a8eb1f055bb47789aa7dfc8d8612d38bda5939_prof);

        
        $__internal_0053bac6fe64053323f92040a317e55edb5889e7be2a002bb1da6e87907e5bf4->leave($__internal_0053bac6fe64053323f92040a317e55edb5889e7be2a002bb1da6e87907e5bf4_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
