<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d4cfb754acd1f14a0a54b7af04ddef5e00407f3aafddcec20c1093f7c7a8b750 extends Twig_Template
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
        $__internal_20cf5d0d7983811f0a89971bd95f924667864ef5d7b6c4655191bda538ed74a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20cf5d0d7983811f0a89971bd95f924667864ef5d7b6c4655191bda538ed74a8->enter($__internal_20cf5d0d7983811f0a89971bd95f924667864ef5d7b6c4655191bda538ed74a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_ce7a2ea50a12626a43acf7f9243dca3aa796f838e87abb7ffe767c3b8ae785d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce7a2ea50a12626a43acf7f9243dca3aa796f838e87abb7ffe767c3b8ae785d5->enter($__internal_ce7a2ea50a12626a43acf7f9243dca3aa796f838e87abb7ffe767c3b8ae785d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_20cf5d0d7983811f0a89971bd95f924667864ef5d7b6c4655191bda538ed74a8->leave($__internal_20cf5d0d7983811f0a89971bd95f924667864ef5d7b6c4655191bda538ed74a8_prof);

        
        $__internal_ce7a2ea50a12626a43acf7f9243dca3aa796f838e87abb7ffe767c3b8ae785d5->leave($__internal_ce7a2ea50a12626a43acf7f9243dca3aa796f838e87abb7ffe767c3b8ae785d5_prof);

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
