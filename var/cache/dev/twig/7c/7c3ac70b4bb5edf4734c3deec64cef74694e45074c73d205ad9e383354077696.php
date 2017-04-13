<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_5e241e8701cf6b68162ab42fc0a9b405a7eae030969fd0cbb88058d0c9fc6cbb extends Twig_Template
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
        $__internal_5ad91032e47fd761585eea9dd5b61c1877f659623355f18b97d196404f7c9599 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ad91032e47fd761585eea9dd5b61c1877f659623355f18b97d196404f7c9599->enter($__internal_5ad91032e47fd761585eea9dd5b61c1877f659623355f18b97d196404f7c9599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_a8308f566bb13afa108e9905836b4d9b2d9bb1948b9dbb90a56ad48ef5ae4736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8308f566bb13afa108e9905836b4d9b2d9bb1948b9dbb90a56ad48ef5ae4736->enter($__internal_a8308f566bb13afa108e9905836b4d9b2d9bb1948b9dbb90a56ad48ef5ae4736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_5ad91032e47fd761585eea9dd5b61c1877f659623355f18b97d196404f7c9599->leave($__internal_5ad91032e47fd761585eea9dd5b61c1877f659623355f18b97d196404f7c9599_prof);

        
        $__internal_a8308f566bb13afa108e9905836b4d9b2d9bb1948b9dbb90a56ad48ef5ae4736->leave($__internal_a8308f566bb13afa108e9905836b4d9b2d9bb1948b9dbb90a56ad48ef5ae4736_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
