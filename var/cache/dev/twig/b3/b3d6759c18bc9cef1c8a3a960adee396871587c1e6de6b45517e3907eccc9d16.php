<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_8fc2dff792020174e45b7663f1b529226409fc990ca6bf7a23ea1bd8a54b4ce9 extends Twig_Template
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
        $__internal_74786db8941c38d2d16996108a100a554f0c70c82377febe94e034e21f685117 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74786db8941c38d2d16996108a100a554f0c70c82377febe94e034e21f685117->enter($__internal_74786db8941c38d2d16996108a100a554f0c70c82377febe94e034e21f685117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_3e477c21e50bb88b17e7a3290bc73667b5809faeacae5b61eaba136469ffc612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e477c21e50bb88b17e7a3290bc73667b5809faeacae5b61eaba136469ffc612->enter($__internal_3e477c21e50bb88b17e7a3290bc73667b5809faeacae5b61eaba136469ffc612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_74786db8941c38d2d16996108a100a554f0c70c82377febe94e034e21f685117->leave($__internal_74786db8941c38d2d16996108a100a554f0c70c82377febe94e034e21f685117_prof);

        
        $__internal_3e477c21e50bb88b17e7a3290bc73667b5809faeacae5b61eaba136469ffc612->leave($__internal_3e477c21e50bb88b17e7a3290bc73667b5809faeacae5b61eaba136469ffc612_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
