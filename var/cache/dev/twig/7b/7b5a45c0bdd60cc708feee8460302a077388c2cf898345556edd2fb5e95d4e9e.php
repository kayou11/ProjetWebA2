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
        $__internal_9a5d1c005d5056f5a2708ca409d8b7ae15d75ae56863b504e37f0a150a935b91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a5d1c005d5056f5a2708ca409d8b7ae15d75ae56863b504e37f0a150a935b91->enter($__internal_9a5d1c005d5056f5a2708ca409d8b7ae15d75ae56863b504e37f0a150a935b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_62881ade7d3621196e011dcca269220923957fffd7a32d90db7394854eec080d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62881ade7d3621196e011dcca269220923957fffd7a32d90db7394854eec080d->enter($__internal_62881ade7d3621196e011dcca269220923957fffd7a32d90db7394854eec080d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_9a5d1c005d5056f5a2708ca409d8b7ae15d75ae56863b504e37f0a150a935b91->leave($__internal_9a5d1c005d5056f5a2708ca409d8b7ae15d75ae56863b504e37f0a150a935b91_prof);

        
        $__internal_62881ade7d3621196e011dcca269220923957fffd7a32d90db7394854eec080d->leave($__internal_62881ade7d3621196e011dcca269220923957fffd7a32d90db7394854eec080d_prof);

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
