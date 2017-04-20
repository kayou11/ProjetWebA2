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
        $__internal_ec413f5e540463e57f267d7d50d339c143c59f4bda972f4f320859994e33408e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec413f5e540463e57f267d7d50d339c143c59f4bda972f4f320859994e33408e->enter($__internal_ec413f5e540463e57f267d7d50d339c143c59f4bda972f4f320859994e33408e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_96c82689803e72e47cfbe2dc5c1b65a5bf6afff3dc1cfe035b529ee1cf670f5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96c82689803e72e47cfbe2dc5c1b65a5bf6afff3dc1cfe035b529ee1cf670f5d->enter($__internal_96c82689803e72e47cfbe2dc5c1b65a5bf6afff3dc1cfe035b529ee1cf670f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_ec413f5e540463e57f267d7d50d339c143c59f4bda972f4f320859994e33408e->leave($__internal_ec413f5e540463e57f267d7d50d339c143c59f4bda972f4f320859994e33408e_prof);

        
        $__internal_96c82689803e72e47cfbe2dc5c1b65a5bf6afff3dc1cfe035b529ee1cf670f5d->leave($__internal_96c82689803e72e47cfbe2dc5c1b65a5bf6afff3dc1cfe035b529ee1cf670f5d_prof);

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
