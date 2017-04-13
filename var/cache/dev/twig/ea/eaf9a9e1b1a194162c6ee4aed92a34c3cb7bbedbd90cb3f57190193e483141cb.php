<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_9be9709fd205891d339bfa7d6b0e267ba32bf47a1c36be77a661564b31cbf212 extends Twig_Template
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
        $__internal_8c0a2ed5d6f88d63e4748e67cc1bda46dbe58f4b71263c79235c833e1d5e4096 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c0a2ed5d6f88d63e4748e67cc1bda46dbe58f4b71263c79235c833e1d5e4096->enter($__internal_8c0a2ed5d6f88d63e4748e67cc1bda46dbe58f4b71263c79235c833e1d5e4096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_fb5db04337d2fa9743af780d1ac01a937c88d537b4a65065f2b7bf78ad16b9a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb5db04337d2fa9743af780d1ac01a937c88d537b4a65065f2b7bf78ad16b9a0->enter($__internal_fb5db04337d2fa9743af780d1ac01a937c88d537b4a65065f2b7bf78ad16b9a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_8c0a2ed5d6f88d63e4748e67cc1bda46dbe58f4b71263c79235c833e1d5e4096->leave($__internal_8c0a2ed5d6f88d63e4748e67cc1bda46dbe58f4b71263c79235c833e1d5e4096_prof);

        
        $__internal_fb5db04337d2fa9743af780d1ac01a937c88d537b4a65065f2b7bf78ad16b9a0->leave($__internal_fb5db04337d2fa9743af780d1ac01a937c88d537b4a65065f2b7bf78ad16b9a0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
