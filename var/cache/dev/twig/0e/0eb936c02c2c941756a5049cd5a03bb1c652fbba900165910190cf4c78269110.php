<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_8fdbbdd10637c21a3f1294b7c5b88fbd3e8dda025f48dec3b87c80dba12f7daa extends Twig_Template
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
        $__internal_f8a87bf7ca4cfb43ac94c868dcda7e9b1185b8900be505dd8c1f27d5719e1c82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8a87bf7ca4cfb43ac94c868dcda7e9b1185b8900be505dd8c1f27d5719e1c82->enter($__internal_f8a87bf7ca4cfb43ac94c868dcda7e9b1185b8900be505dd8c1f27d5719e1c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_bf84741f1fc864f0913c42f8fcd2ff494719c1e56b31d3d93481011b4ef4d3f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf84741f1fc864f0913c42f8fcd2ff494719c1e56b31d3d93481011b4ef4d3f1->enter($__internal_bf84741f1fc864f0913c42f8fcd2ff494719c1e56b31d3d93481011b4ef4d3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_f8a87bf7ca4cfb43ac94c868dcda7e9b1185b8900be505dd8c1f27d5719e1c82->leave($__internal_f8a87bf7ca4cfb43ac94c868dcda7e9b1185b8900be505dd8c1f27d5719e1c82_prof);

        
        $__internal_bf84741f1fc864f0913c42f8fcd2ff494719c1e56b31d3d93481011b4ef4d3f1->leave($__internal_bf84741f1fc864f0913c42f8fcd2ff494719c1e56b31d3d93481011b4ef4d3f1_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
