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
        $__internal_ed5ef36f9e54087deec5ee765066fea2b0549764dfd1c879dfd8994f204131b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed5ef36f9e54087deec5ee765066fea2b0549764dfd1c879dfd8994f204131b2->enter($__internal_ed5ef36f9e54087deec5ee765066fea2b0549764dfd1c879dfd8994f204131b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_0bd49f11e61eac9afb6e80afb471e09ac3528860cbb827ef908b38bbab915da2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd49f11e61eac9afb6e80afb471e09ac3528860cbb827ef908b38bbab915da2->enter($__internal_0bd49f11e61eac9afb6e80afb471e09ac3528860cbb827ef908b38bbab915da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_ed5ef36f9e54087deec5ee765066fea2b0549764dfd1c879dfd8994f204131b2->leave($__internal_ed5ef36f9e54087deec5ee765066fea2b0549764dfd1c879dfd8994f204131b2_prof);

        
        $__internal_0bd49f11e61eac9afb6e80afb471e09ac3528860cbb827ef908b38bbab915da2->leave($__internal_0bd49f11e61eac9afb6e80afb471e09ac3528860cbb827ef908b38bbab915da2_prof);

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
