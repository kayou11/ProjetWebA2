<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_f1125ed40c2786ff055c98c24cae61e48cf51f7ef846fa6f8d1238f733f2af38 extends Twig_Template
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
        $__internal_8e6985e53009b0caab5e99df15cddbab8e3419a96871b9728b42ac60f907bcd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e6985e53009b0caab5e99df15cddbab8e3419a96871b9728b42ac60f907bcd3->enter($__internal_8e6985e53009b0caab5e99df15cddbab8e3419a96871b9728b42ac60f907bcd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_f9c7a896ca583d1a37d2d7187e0ce29b4da0fda38182955665eda26facde25f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9c7a896ca583d1a37d2d7187e0ce29b4da0fda38182955665eda26facde25f8->enter($__internal_f9c7a896ca583d1a37d2d7187e0ce29b4da0fda38182955665eda26facde25f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_8e6985e53009b0caab5e99df15cddbab8e3419a96871b9728b42ac60f907bcd3->leave($__internal_8e6985e53009b0caab5e99df15cddbab8e3419a96871b9728b42ac60f907bcd3_prof);

        
        $__internal_f9c7a896ca583d1a37d2d7187e0ce29b4da0fda38182955665eda26facde25f8->leave($__internal_f9c7a896ca583d1a37d2d7187e0ce29b4da0fda38182955665eda26facde25f8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
