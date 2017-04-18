<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_804149220af54e6d5d774c4ccf0335904303ea8469e92f0f0aea56edffe81052 extends Twig_Template
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
        $__internal_ca02f4a7409a9efb2f41132027f7c627a0f0737c60e4dd2cfa6ba1a58d609cc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca02f4a7409a9efb2f41132027f7c627a0f0737c60e4dd2cfa6ba1a58d609cc9->enter($__internal_ca02f4a7409a9efb2f41132027f7c627a0f0737c60e4dd2cfa6ba1a58d609cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_956e79295d25073a933dd1d2981ae3e85b9a2c29fa49ffed946ca1356b5a67cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_956e79295d25073a933dd1d2981ae3e85b9a2c29fa49ffed946ca1356b5a67cc->enter($__internal_956e79295d25073a933dd1d2981ae3e85b9a2c29fa49ffed946ca1356b5a67cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_ca02f4a7409a9efb2f41132027f7c627a0f0737c60e4dd2cfa6ba1a58d609cc9->leave($__internal_ca02f4a7409a9efb2f41132027f7c627a0f0737c60e4dd2cfa6ba1a58d609cc9_prof);

        
        $__internal_956e79295d25073a933dd1d2981ae3e85b9a2c29fa49ffed946ca1356b5a67cc->leave($__internal_956e79295d25073a933dd1d2981ae3e85b9a2c29fa49ffed946ca1356b5a67cc_prof);

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
", "@Twig/Exception/exception.css.twig", "C:\\MAMP\\htdocs\\ProjetWebA2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
