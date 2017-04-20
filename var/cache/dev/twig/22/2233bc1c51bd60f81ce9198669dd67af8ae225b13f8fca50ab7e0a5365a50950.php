<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_f1125ed40c2786ff055c98c24cae61e48cf51f7ef846fa6f8d1238f733f2af38 extends Twig_Template
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
        $__internal_c250a4b7e40893c2e76a0ea8b553562005b81166e6ee36681587a507a226a3c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c250a4b7e40893c2e76a0ea8b553562005b81166e6ee36681587a507a226a3c8->enter($__internal_c250a4b7e40893c2e76a0ea8b553562005b81166e6ee36681587a507a226a3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_20177395ce4d669b702e7d9d9e231decad5fbdb310f2f96e577706b028a8f8a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20177395ce4d669b702e7d9d9e231decad5fbdb310f2f96e577706b028a8f8a3->enter($__internal_20177395ce4d669b702e7d9d9e231decad5fbdb310f2f96e577706b028a8f8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_c250a4b7e40893c2e76a0ea8b553562005b81166e6ee36681587a507a226a3c8->leave($__internal_c250a4b7e40893c2e76a0ea8b553562005b81166e6ee36681587a507a226a3c8_prof);

        
        $__internal_20177395ce4d669b702e7d9d9e231decad5fbdb310f2f96e577706b028a8f8a3->leave($__internal_20177395ce4d669b702e7d9d9e231decad5fbdb310f2f96e577706b028a8f8a3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
