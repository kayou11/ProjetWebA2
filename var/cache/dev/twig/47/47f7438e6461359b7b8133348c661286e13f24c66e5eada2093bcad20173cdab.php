<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_f61bc259753d57728d5233f67c7c069c4b6a164c76bc944432063d68783ae361 extends Twig_Template
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
        $__internal_18773d89a43d6c67747ced0afa0beb8a2cde3c8d331e97d0023672507fa4f0ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18773d89a43d6c67747ced0afa0beb8a2cde3c8d331e97d0023672507fa4f0ef->enter($__internal_18773d89a43d6c67747ced0afa0beb8a2cde3c8d331e97d0023672507fa4f0ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_c8b657cc85d51f9c9d4df97f1ed52f6b331e4bdebe5afe2566e7dba9c238eb85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8b657cc85d51f9c9d4df97f1ed52f6b331e4bdebe5afe2566e7dba9c238eb85->enter($__internal_c8b657cc85d51f9c9d4df97f1ed52f6b331e4bdebe5afe2566e7dba9c238eb85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_18773d89a43d6c67747ced0afa0beb8a2cde3c8d331e97d0023672507fa4f0ef->leave($__internal_18773d89a43d6c67747ced0afa0beb8a2cde3c8d331e97d0023672507fa4f0ef_prof);

        
        $__internal_c8b657cc85d51f9c9d4df97f1ed52f6b331e4bdebe5afe2566e7dba9c238eb85->leave($__internal_c8b657cc85d51f9c9d4df97f1ed52f6b331e4bdebe5afe2566e7dba9c238eb85_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
