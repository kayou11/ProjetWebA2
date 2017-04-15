<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_855a0ee970d78daf3a5efe07546e0cea4a96a74e8b906199f0b71c98ef8e11d7 extends Twig_Template
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
        $__internal_19ac9cbbd29fe8ecacd4d6ae9d693f063d81283dc575b224bda0f199daa06a6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19ac9cbbd29fe8ecacd4d6ae9d693f063d81283dc575b224bda0f199daa06a6d->enter($__internal_19ac9cbbd29fe8ecacd4d6ae9d693f063d81283dc575b224bda0f199daa06a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_97a5b9f9e25df455bf8c7a7d42ac6f945e8f75d6d45d0cded5fe082f27dc85cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97a5b9f9e25df455bf8c7a7d42ac6f945e8f75d6d45d0cded5fe082f27dc85cd->enter($__internal_97a5b9f9e25df455bf8c7a7d42ac6f945e8f75d6d45d0cded5fe082f27dc85cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_19ac9cbbd29fe8ecacd4d6ae9d693f063d81283dc575b224bda0f199daa06a6d->leave($__internal_19ac9cbbd29fe8ecacd4d6ae9d693f063d81283dc575b224bda0f199daa06a6d_prof);

        
        $__internal_97a5b9f9e25df455bf8c7a7d42ac6f945e8f75d6d45d0cded5fe082f27dc85cd->leave($__internal_97a5b9f9e25df455bf8c7a7d42ac6f945e8f75d6d45d0cded5fe082f27dc85cd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
