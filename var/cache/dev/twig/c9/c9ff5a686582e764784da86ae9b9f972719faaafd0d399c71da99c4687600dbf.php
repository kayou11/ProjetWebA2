<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_fc765af2e14e6416def85844df07928dcd1bc40536403723bb01f3069da899b6 extends Twig_Template
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
        $__internal_f8a1f31b2b8a45f6eb549c12eaad1dccb2d354977269678389620e8555b900ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8a1f31b2b8a45f6eb549c12eaad1dccb2d354977269678389620e8555b900ab->enter($__internal_f8a1f31b2b8a45f6eb549c12eaad1dccb2d354977269678389620e8555b900ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_7241c80fe2440cd298e30f201ea9f8ca73b2bb174b8b27d0af09569d69740e5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7241c80fe2440cd298e30f201ea9f8ca73b2bb174b8b27d0af09569d69740e5a->enter($__internal_7241c80fe2440cd298e30f201ea9f8ca73b2bb174b8b27d0af09569d69740e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_f8a1f31b2b8a45f6eb549c12eaad1dccb2d354977269678389620e8555b900ab->leave($__internal_f8a1f31b2b8a45f6eb549c12eaad1dccb2d354977269678389620e8555b900ab_prof);

        
        $__internal_7241c80fe2440cd298e30f201ea9f8ca73b2bb174b8b27d0af09569d69740e5a->leave($__internal_7241c80fe2440cd298e30f201ea9f8ca73b2bb174b8b27d0af09569d69740e5a_prof);

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
