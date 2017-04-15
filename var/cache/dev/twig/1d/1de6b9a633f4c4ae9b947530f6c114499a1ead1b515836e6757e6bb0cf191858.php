<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_21600efc469e7a321a6cb2761109a6bc99c3b2555e0a236dc6d804e0a8414e59 extends Twig_Template
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
        $__internal_97cf4873a588d4235964a7e29134198488496a34aa7f066173926df0ff38ef18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97cf4873a588d4235964a7e29134198488496a34aa7f066173926df0ff38ef18->enter($__internal_97cf4873a588d4235964a7e29134198488496a34aa7f066173926df0ff38ef18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_06af379d0e6f00f7ed317da49ee70db481832242b28a3f7045885d80f20e0b75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06af379d0e6f00f7ed317da49ee70db481832242b28a3f7045885d80f20e0b75->enter($__internal_06af379d0e6f00f7ed317da49ee70db481832242b28a3f7045885d80f20e0b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_97cf4873a588d4235964a7e29134198488496a34aa7f066173926df0ff38ef18->leave($__internal_97cf4873a588d4235964a7e29134198488496a34aa7f066173926df0ff38ef18_prof);

        
        $__internal_06af379d0e6f00f7ed317da49ee70db481832242b28a3f7045885d80f20e0b75->leave($__internal_06af379d0e6f00f7ed317da49ee70db481832242b28a3f7045885d80f20e0b75_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
