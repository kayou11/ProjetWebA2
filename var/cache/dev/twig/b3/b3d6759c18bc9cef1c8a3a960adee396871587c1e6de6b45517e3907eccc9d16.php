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
        $__internal_0c7614acbbafb0f38e4d51ea713912047282d7658670df624a7fbaa62174b5fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c7614acbbafb0f38e4d51ea713912047282d7658670df624a7fbaa62174b5fa->enter($__internal_0c7614acbbafb0f38e4d51ea713912047282d7658670df624a7fbaa62174b5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_d1928eadf4637069613c066939070df194ae8f7b2067be058a363a63e0c6344c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1928eadf4637069613c066939070df194ae8f7b2067be058a363a63e0c6344c->enter($__internal_d1928eadf4637069613c066939070df194ae8f7b2067be058a363a63e0c6344c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_0c7614acbbafb0f38e4d51ea713912047282d7658670df624a7fbaa62174b5fa->leave($__internal_0c7614acbbafb0f38e4d51ea713912047282d7658670df624a7fbaa62174b5fa_prof);

        
        $__internal_d1928eadf4637069613c066939070df194ae8f7b2067be058a363a63e0c6344c->leave($__internal_d1928eadf4637069613c066939070df194ae8f7b2067be058a363a63e0c6344c_prof);

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
