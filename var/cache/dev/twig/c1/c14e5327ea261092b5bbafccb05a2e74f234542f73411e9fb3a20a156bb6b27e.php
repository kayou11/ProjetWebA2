<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_5faf30816255085333ed3ab21299fd79c3d9a62faaf9bbc2652ffa212c521795 extends Twig_Template
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
        $__internal_b66e245be22a30ae2865699b3a9ee1f306505419608e17cb1840ec9f2ae33d78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b66e245be22a30ae2865699b3a9ee1f306505419608e17cb1840ec9f2ae33d78->enter($__internal_b66e245be22a30ae2865699b3a9ee1f306505419608e17cb1840ec9f2ae33d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_b4bfb020b0487094526d6482c569ac61ed5ac6ef54067527f4bcabfd7b6731b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4bfb020b0487094526d6482c569ac61ed5ac6ef54067527f4bcabfd7b6731b2->enter($__internal_b4bfb020b0487094526d6482c569ac61ed5ac6ef54067527f4bcabfd7b6731b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_b66e245be22a30ae2865699b3a9ee1f306505419608e17cb1840ec9f2ae33d78->leave($__internal_b66e245be22a30ae2865699b3a9ee1f306505419608e17cb1840ec9f2ae33d78_prof);

        
        $__internal_b4bfb020b0487094526d6482c569ac61ed5ac6ef54067527f4bcabfd7b6731b2->leave($__internal_b4bfb020b0487094526d6482c569ac61ed5ac6ef54067527f4bcabfd7b6731b2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
