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
        $__internal_c9f3b6d737e60f8251b9833050b6ba2301cf3abc1e64f3e79f5be01fdb6246e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9f3b6d737e60f8251b9833050b6ba2301cf3abc1e64f3e79f5be01fdb6246e7->enter($__internal_c9f3b6d737e60f8251b9833050b6ba2301cf3abc1e64f3e79f5be01fdb6246e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_fb5f02aba96d1395e5f7ca3e487a396d9bb3f0dea0a33082ef0b8f13604d2f79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb5f02aba96d1395e5f7ca3e487a396d9bb3f0dea0a33082ef0b8f13604d2f79->enter($__internal_fb5f02aba96d1395e5f7ca3e487a396d9bb3f0dea0a33082ef0b8f13604d2f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_c9f3b6d737e60f8251b9833050b6ba2301cf3abc1e64f3e79f5be01fdb6246e7->leave($__internal_c9f3b6d737e60f8251b9833050b6ba2301cf3abc1e64f3e79f5be01fdb6246e7_prof);

        
        $__internal_fb5f02aba96d1395e5f7ca3e487a396d9bb3f0dea0a33082ef0b8f13604d2f79->leave($__internal_fb5f02aba96d1395e5f7ca3e487a396d9bb3f0dea0a33082ef0b8f13604d2f79_prof);

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
