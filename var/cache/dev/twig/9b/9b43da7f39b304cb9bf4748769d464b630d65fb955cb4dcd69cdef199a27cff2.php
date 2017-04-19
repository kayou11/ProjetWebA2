<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_f8e83aee46fdc214445f489bc6994b025e05fa5ed2e7f74700390ebaa554be0d extends Twig_Template
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
        $__internal_14f4a6576c06f62a71a9283d9143ae49c5e6312a93770dc251552df0a081706a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14f4a6576c06f62a71a9283d9143ae49c5e6312a93770dc251552df0a081706a->enter($__internal_14f4a6576c06f62a71a9283d9143ae49c5e6312a93770dc251552df0a081706a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_c3368779ccf010e7686d1e291c30c99a3ea852f6e13cc43038161f0423c42005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3368779ccf010e7686d1e291c30c99a3ea852f6e13cc43038161f0423c42005->enter($__internal_c3368779ccf010e7686d1e291c30c99a3ea852f6e13cc43038161f0423c42005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_14f4a6576c06f62a71a9283d9143ae49c5e6312a93770dc251552df0a081706a->leave($__internal_14f4a6576c06f62a71a9283d9143ae49c5e6312a93770dc251552df0a081706a_prof);

        
        $__internal_c3368779ccf010e7686d1e291c30c99a3ea852f6e13cc43038161f0423c42005->leave($__internal_c3368779ccf010e7686d1e291c30c99a3ea852f6e13cc43038161f0423c42005_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
