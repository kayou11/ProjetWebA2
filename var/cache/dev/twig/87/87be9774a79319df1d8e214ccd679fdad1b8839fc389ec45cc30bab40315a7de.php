<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_5c6c8eb66ecc4cdfba811bd3be99ed7b796df7a85a3fc9b341d6bf3928b342c0 extends Twig_Template
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
        $__internal_4d9d87bbef213379094b3fbed5ab5efb0653a5a29b86e69e715ffd2faaa4ca21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d9d87bbef213379094b3fbed5ab5efb0653a5a29b86e69e715ffd2faaa4ca21->enter($__internal_4d9d87bbef213379094b3fbed5ab5efb0653a5a29b86e69e715ffd2faaa4ca21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_1a44f252de700519b0c71612da1338dca9d4025e6075a4c86ec80fd69e4a3385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a44f252de700519b0c71612da1338dca9d4025e6075a4c86ec80fd69e4a3385->enter($__internal_1a44f252de700519b0c71612da1338dca9d4025e6075a4c86ec80fd69e4a3385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_4d9d87bbef213379094b3fbed5ab5efb0653a5a29b86e69e715ffd2faaa4ca21->leave($__internal_4d9d87bbef213379094b3fbed5ab5efb0653a5a29b86e69e715ffd2faaa4ca21_prof);

        
        $__internal_1a44f252de700519b0c71612da1338dca9d4025e6075a4c86ec80fd69e4a3385->leave($__internal_1a44f252de700519b0c71612da1338dca9d4025e6075a4c86ec80fd69e4a3385_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
