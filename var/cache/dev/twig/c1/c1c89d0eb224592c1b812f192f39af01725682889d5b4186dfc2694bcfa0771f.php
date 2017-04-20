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
        $__internal_42ccd125c9da80efcf158ee87a0fbc08b647e91d32160ffe3025591b8b4bf068 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42ccd125c9da80efcf158ee87a0fbc08b647e91d32160ffe3025591b8b4bf068->enter($__internal_42ccd125c9da80efcf158ee87a0fbc08b647e91d32160ffe3025591b8b4bf068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_2517af0fdcda327b7f3dee49dc1c43f7de4e377882ffdbeefe4685f5517bf648 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2517af0fdcda327b7f3dee49dc1c43f7de4e377882ffdbeefe4685f5517bf648->enter($__internal_2517af0fdcda327b7f3dee49dc1c43f7de4e377882ffdbeefe4685f5517bf648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_42ccd125c9da80efcf158ee87a0fbc08b647e91d32160ffe3025591b8b4bf068->leave($__internal_42ccd125c9da80efcf158ee87a0fbc08b647e91d32160ffe3025591b8b4bf068_prof);

        
        $__internal_2517af0fdcda327b7f3dee49dc1c43f7de4e377882ffdbeefe4685f5517bf648->leave($__internal_2517af0fdcda327b7f3dee49dc1c43f7de4e377882ffdbeefe4685f5517bf648_prof);

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
