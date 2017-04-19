<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_5c6c8eb66ecc4cdfba811bd3be99ed7b796df7a85a3fc9b341d6bf3928b342c0 extends Twig_Template
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
        $__internal_2a0eddb9780fc327ecf132536aca6f218cd98e99072f92f838db994f43c27d10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a0eddb9780fc327ecf132536aca6f218cd98e99072f92f838db994f43c27d10->enter($__internal_2a0eddb9780fc327ecf132536aca6f218cd98e99072f92f838db994f43c27d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_4324f46aec7990d938ce30daf1fd6d67d3ff656828e1df877f2ead24ef73efde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4324f46aec7990d938ce30daf1fd6d67d3ff656828e1df877f2ead24ef73efde->enter($__internal_4324f46aec7990d938ce30daf1fd6d67d3ff656828e1df877f2ead24ef73efde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_2a0eddb9780fc327ecf132536aca6f218cd98e99072f92f838db994f43c27d10->leave($__internal_2a0eddb9780fc327ecf132536aca6f218cd98e99072f92f838db994f43c27d10_prof);

        
        $__internal_4324f46aec7990d938ce30daf1fd6d67d3ff656828e1df877f2ead24ef73efde->leave($__internal_4324f46aec7990d938ce30daf1fd6d67d3ff656828e1df877f2ead24ef73efde_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
