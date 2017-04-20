<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_56c6a1daa96f8153fabe65a923c602d22a84ac2f6af4e9ac3d11673e55536f49 extends Twig_Template
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
        $__internal_446627deb27dc526e2b93b742d4e698a4863f0e6bcc6ac5ae27c7c4a01312fd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_446627deb27dc526e2b93b742d4e698a4863f0e6bcc6ac5ae27c7c4a01312fd9->enter($__internal_446627deb27dc526e2b93b742d4e698a4863f0e6bcc6ac5ae27c7c4a01312fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_ba5b0104e8f2ad4bf5c16d7c5b86064c2d0722581a9688abc0b1f3deda4fca63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba5b0104e8f2ad4bf5c16d7c5b86064c2d0722581a9688abc0b1f3deda4fca63->enter($__internal_ba5b0104e8f2ad4bf5c16d7c5b86064c2d0722581a9688abc0b1f3deda4fca63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_446627deb27dc526e2b93b742d4e698a4863f0e6bcc6ac5ae27c7c4a01312fd9->leave($__internal_446627deb27dc526e2b93b742d4e698a4863f0e6bcc6ac5ae27c7c4a01312fd9_prof);

        
        $__internal_ba5b0104e8f2ad4bf5c16d7c5b86064c2d0722581a9688abc0b1f3deda4fca63->leave($__internal_ba5b0104e8f2ad4bf5c16d7c5b86064c2d0722581a9688abc0b1f3deda4fca63_prof);

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
