<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_a4a71474ab7d587de31ffe24b580e5de1d11a04efb5272950f42eeb76cee603f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f027233fa4498b803d9b33adb6bc46b0ca10af050381002b4064adefe956e2ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f027233fa4498b803d9b33adb6bc46b0ca10af050381002b4064adefe956e2ff->enter($__internal_f027233fa4498b803d9b33adb6bc46b0ca10af050381002b4064adefe956e2ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_c892db4e037c9bfd5e4beb6721e7bd6133bd329c38d24bf44ab6f0b4d25d9820 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c892db4e037c9bfd5e4beb6721e7bd6133bd329c38d24bf44ab6f0b4d25d9820->enter($__internal_c892db4e037c9bfd5e4beb6721e7bd6133bd329c38d24bf44ab6f0b4d25d9820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_f027233fa4498b803d9b33adb6bc46b0ca10af050381002b4064adefe956e2ff->leave($__internal_f027233fa4498b803d9b33adb6bc46b0ca10af050381002b4064adefe956e2ff_prof);

        
        $__internal_c892db4e037c9bfd5e4beb6721e7bd6133bd329c38d24bf44ab6f0b4d25d9820->leave($__internal_c892db4e037c9bfd5e4beb6721e7bd6133bd329c38d24bf44ab6f0b4d25d9820_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.css.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
