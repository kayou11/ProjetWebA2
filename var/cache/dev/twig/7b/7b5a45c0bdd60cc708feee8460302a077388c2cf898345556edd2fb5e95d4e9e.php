<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_75180db559ff5ccd171fb8f2e930d7a9acda71a37e06495226df384547c1b176 extends Twig_Template
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
        $__internal_81b7f0186b65609c21c8dd0238cee80f8c21439515cd7d4ca6b64d5d3ce84568 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81b7f0186b65609c21c8dd0238cee80f8c21439515cd7d4ca6b64d5d3ce84568->enter($__internal_81b7f0186b65609c21c8dd0238cee80f8c21439515cd7d4ca6b64d5d3ce84568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_fe21cfd1393bb02e9ea0d06b84bbf8d3c457786ef34ae712bdeca7571676f598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe21cfd1393bb02e9ea0d06b84bbf8d3c457786ef34ae712bdeca7571676f598->enter($__internal_fe21cfd1393bb02e9ea0d06b84bbf8d3c457786ef34ae712bdeca7571676f598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_81b7f0186b65609c21c8dd0238cee80f8c21439515cd7d4ca6b64d5d3ce84568->leave($__internal_81b7f0186b65609c21c8dd0238cee80f8c21439515cd7d4ca6b64d5d3ce84568_prof);

        
        $__internal_fe21cfd1393bb02e9ea0d06b84bbf8d3c457786ef34ae712bdeca7571676f598->leave($__internal_fe21cfd1393bb02e9ea0d06b84bbf8d3c457786ef34ae712bdeca7571676f598_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
