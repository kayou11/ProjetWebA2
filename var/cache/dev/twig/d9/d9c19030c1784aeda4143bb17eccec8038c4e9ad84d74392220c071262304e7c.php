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
        $__internal_560cfa401cbf5006a8dbd5cc7186e00ff82097b845a2c1af41154d653883a43e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_560cfa401cbf5006a8dbd5cc7186e00ff82097b845a2c1af41154d653883a43e->enter($__internal_560cfa401cbf5006a8dbd5cc7186e00ff82097b845a2c1af41154d653883a43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_af42f029a370c8ea51fae3ca0cf6d31d24c32f43f141ae9952f001bf447ef1ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af42f029a370c8ea51fae3ca0cf6d31d24c32f43f141ae9952f001bf447ef1ca->enter($__internal_af42f029a370c8ea51fae3ca0cf6d31d24c32f43f141ae9952f001bf447ef1ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_560cfa401cbf5006a8dbd5cc7186e00ff82097b845a2c1af41154d653883a43e->leave($__internal_560cfa401cbf5006a8dbd5cc7186e00ff82097b845a2c1af41154d653883a43e_prof);

        
        $__internal_af42f029a370c8ea51fae3ca0cf6d31d24c32f43f141ae9952f001bf447ef1ca->leave($__internal_af42f029a370c8ea51fae3ca0cf6d31d24c32f43f141ae9952f001bf447ef1ca_prof);

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
