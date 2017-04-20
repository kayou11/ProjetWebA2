<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_b9bb58ce4f7bf4870276ccc29675ae17afb62b054ff231e87e9f8a62d9958f6f extends Twig_Template
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
        $__internal_820359f61740308be6f0fd1154577092729acaaccea0d67f12c6b9aa39e316e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_820359f61740308be6f0fd1154577092729acaaccea0d67f12c6b9aa39e316e9->enter($__internal_820359f61740308be6f0fd1154577092729acaaccea0d67f12c6b9aa39e316e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_25866c76ff4d4ce1575c54816648aaed0eb03195d9f50cc49d56239bb5d06240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25866c76ff4d4ce1575c54816648aaed0eb03195d9f50cc49d56239bb5d06240->enter($__internal_25866c76ff4d4ce1575c54816648aaed0eb03195d9f50cc49d56239bb5d06240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_820359f61740308be6f0fd1154577092729acaaccea0d67f12c6b9aa39e316e9->leave($__internal_820359f61740308be6f0fd1154577092729acaaccea0d67f12c6b9aa39e316e9_prof);

        
        $__internal_25866c76ff4d4ce1575c54816648aaed0eb03195d9f50cc49d56239bb5d06240->leave($__internal_25866c76ff4d4ce1575c54816648aaed0eb03195d9f50cc49d56239bb5d06240_prof);

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
