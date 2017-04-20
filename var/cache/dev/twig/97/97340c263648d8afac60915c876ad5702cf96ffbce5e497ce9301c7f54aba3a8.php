<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_85aed3a7990e95f363bfea2787705b38ad984ba7a143344be59a06b68436f879 extends Twig_Template
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
        $__internal_294d3da3a1731746beea878123ead930db00a6e61b5b5384760944bd0be1b076 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_294d3da3a1731746beea878123ead930db00a6e61b5b5384760944bd0be1b076->enter($__internal_294d3da3a1731746beea878123ead930db00a6e61b5b5384760944bd0be1b076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_3d018711070e378c9867d73625af677fa87db067aa4f463e1f607a87b541c56a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d018711070e378c9867d73625af677fa87db067aa4f463e1f607a87b541c56a->enter($__internal_3d018711070e378c9867d73625af677fa87db067aa4f463e1f607a87b541c56a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_294d3da3a1731746beea878123ead930db00a6e61b5b5384760944bd0be1b076->leave($__internal_294d3da3a1731746beea878123ead930db00a6e61b5b5384760944bd0be1b076_prof);

        
        $__internal_3d018711070e378c9867d73625af677fa87db067aa4f463e1f607a87b541c56a->leave($__internal_3d018711070e378c9867d73625af677fa87db067aa4f463e1f607a87b541c56a_prof);

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

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
