<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_25674f65d7308dde92494fac60f5c4dda4d1fd198417a4dfdb8a6ee081727124 extends Twig_Template
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
        $__internal_74fe2bc8a9e52be3957d49bc2db77650f899e380ef4de942bcff5381b5d3b674 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74fe2bc8a9e52be3957d49bc2db77650f899e380ef4de942bcff5381b5d3b674->enter($__internal_74fe2bc8a9e52be3957d49bc2db77650f899e380ef4de942bcff5381b5d3b674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_cd0055bb4c1efcefc6bd5f72f70f64441ff866f3ab469d0623e9ea4cf60e1da6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd0055bb4c1efcefc6bd5f72f70f64441ff866f3ab469d0623e9ea4cf60e1da6->enter($__internal_cd0055bb4c1efcefc6bd5f72f70f64441ff866f3ab469d0623e9ea4cf60e1da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_74fe2bc8a9e52be3957d49bc2db77650f899e380ef4de942bcff5381b5d3b674->leave($__internal_74fe2bc8a9e52be3957d49bc2db77650f899e380ef4de942bcff5381b5d3b674_prof);

        
        $__internal_cd0055bb4c1efcefc6bd5f72f70f64441ff866f3ab469d0623e9ea4cf60e1da6->leave($__internal_cd0055bb4c1efcefc6bd5f72f70f64441ff866f3ab469d0623e9ea4cf60e1da6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
