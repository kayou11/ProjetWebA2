<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_a4a71474ab7d587de31ffe24b580e5de1d11a04efb5272950f42eeb76cee603f extends Twig_Template
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
        $__internal_cba11b2cc8359fc1d113600d4e94491b3da8ebcd88142158dd66f03f4f57be3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cba11b2cc8359fc1d113600d4e94491b3da8ebcd88142158dd66f03f4f57be3e->enter($__internal_cba11b2cc8359fc1d113600d4e94491b3da8ebcd88142158dd66f03f4f57be3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_4e9a13dc7fb8a182107e7647fdd7e42c099ae9582feb5b11e1ce959d0d79c147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e9a13dc7fb8a182107e7647fdd7e42c099ae9582feb5b11e1ce959d0d79c147->enter($__internal_4e9a13dc7fb8a182107e7647fdd7e42c099ae9582feb5b11e1ce959d0d79c147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_cba11b2cc8359fc1d113600d4e94491b3da8ebcd88142158dd66f03f4f57be3e->leave($__internal_cba11b2cc8359fc1d113600d4e94491b3da8ebcd88142158dd66f03f4f57be3e_prof);

        
        $__internal_4e9a13dc7fb8a182107e7647fdd7e42c099ae9582feb5b11e1ce959d0d79c147->leave($__internal_4e9a13dc7fb8a182107e7647fdd7e42c099ae9582feb5b11e1ce959d0d79c147_prof);

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

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.css.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
