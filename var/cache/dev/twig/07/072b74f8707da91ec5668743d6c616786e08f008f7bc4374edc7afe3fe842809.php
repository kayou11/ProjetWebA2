<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_52a317d07abe0c638c32b2a4556fbaf3fa6a3cae7d51c9ac2ec75e75c2fb0056 extends Twig_Template
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
        $__internal_4555123ae6c00b06805750415f73fc1d1aa173e615fca19228c86c89cba5db58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4555123ae6c00b06805750415f73fc1d1aa173e615fca19228c86c89cba5db58->enter($__internal_4555123ae6c00b06805750415f73fc1d1aa173e615fca19228c86c89cba5db58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_bdad6d030d2e9c17bb1cbe5cae621eedd47ac0f81d32ec96fec1b78a92bddd28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdad6d030d2e9c17bb1cbe5cae621eedd47ac0f81d32ec96fec1b78a92bddd28->enter($__internal_bdad6d030d2e9c17bb1cbe5cae621eedd47ac0f81d32ec96fec1b78a92bddd28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_4555123ae6c00b06805750415f73fc1d1aa173e615fca19228c86c89cba5db58->leave($__internal_4555123ae6c00b06805750415f73fc1d1aa173e615fca19228c86c89cba5db58_prof);

        
        $__internal_bdad6d030d2e9c17bb1cbe5cae621eedd47ac0f81d32ec96fec1b78a92bddd28->leave($__internal_bdad6d030d2e9c17bb1cbe5cae621eedd47ac0f81d32ec96fec1b78a92bddd28_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
