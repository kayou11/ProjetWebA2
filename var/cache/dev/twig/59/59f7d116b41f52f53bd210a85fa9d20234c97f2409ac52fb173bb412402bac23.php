<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_9b6db8833e520ddd7520486c23f4730cf980caca62e7f51b7d8a3440d17c5348 extends Twig_Template
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
        $__internal_d9dfd88a39e5943ad6cf0e6134fa876249f66b4bffbaf196113042d5f1948b0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9dfd88a39e5943ad6cf0e6134fa876249f66b4bffbaf196113042d5f1948b0d->enter($__internal_d9dfd88a39e5943ad6cf0e6134fa876249f66b4bffbaf196113042d5f1948b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_e9544b6c45e7657fdd9feb988f69c58aefbaa799c3ee1d77eb3fd7cb653db7df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9544b6c45e7657fdd9feb988f69c58aefbaa799c3ee1d77eb3fd7cb653db7df->enter($__internal_e9544b6c45e7657fdd9feb988f69c58aefbaa799c3ee1d77eb3fd7cb653db7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d9dfd88a39e5943ad6cf0e6134fa876249f66b4bffbaf196113042d5f1948b0d->leave($__internal_d9dfd88a39e5943ad6cf0e6134fa876249f66b4bffbaf196113042d5f1948b0d_prof);

        
        $__internal_e9544b6c45e7657fdd9feb988f69c58aefbaa799c3ee1d77eb3fd7cb653db7df->leave($__internal_e9544b6c45e7657fdd9feb988f69c58aefbaa799c3ee1d77eb3fd7cb653db7df_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
