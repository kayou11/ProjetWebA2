<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_2d0bd61105908210bb3b5bb70419d1b602b3c50618429245e95630b37982c51f extends Twig_Template
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
        $__internal_e8be7ea895e09db69ea064c62c4fbf97f77ba0671937f10c72b7d7ea2a102077 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8be7ea895e09db69ea064c62c4fbf97f77ba0671937f10c72b7d7ea2a102077->enter($__internal_e8be7ea895e09db69ea064c62c4fbf97f77ba0671937f10c72b7d7ea2a102077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_2ba8c05a405098ea7e15db7a1f641ac7bb3a33371fca9273e1c09701aa54f8bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ba8c05a405098ea7e15db7a1f641ac7bb3a33371fca9273e1c09701aa54f8bf->enter($__internal_2ba8c05a405098ea7e15db7a1f641ac7bb3a33371fca9273e1c09701aa54f8bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_e8be7ea895e09db69ea064c62c4fbf97f77ba0671937f10c72b7d7ea2a102077->leave($__internal_e8be7ea895e09db69ea064c62c4fbf97f77ba0671937f10c72b7d7ea2a102077_prof);

        
        $__internal_2ba8c05a405098ea7e15db7a1f641ac7bb3a33371fca9273e1c09701aa54f8bf->leave($__internal_2ba8c05a405098ea7e15db7a1f641ac7bb3a33371fca9273e1c09701aa54f8bf_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
