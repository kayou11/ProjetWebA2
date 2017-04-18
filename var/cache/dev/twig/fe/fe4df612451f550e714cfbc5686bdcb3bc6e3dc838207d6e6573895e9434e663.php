<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_a14f5496191e43ee77b8beac86afd577ebf29ed1ff790668adc83043e8f13cdc extends Twig_Template
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
        $__internal_fd96b6a1c511ec8af2647a1546c00d769cb0718026fb40f1a5ad1464e233aa72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd96b6a1c511ec8af2647a1546c00d769cb0718026fb40f1a5ad1464e233aa72->enter($__internal_fd96b6a1c511ec8af2647a1546c00d769cb0718026fb40f1a5ad1464e233aa72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_3a9c4304b392c5f2fe4efc33b65a5912792b16a0d7cd727a91139d95198816fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a9c4304b392c5f2fe4efc33b65a5912792b16a0d7cd727a91139d95198816fa->enter($__internal_3a9c4304b392c5f2fe4efc33b65a5912792b16a0d7cd727a91139d95198816fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_fd96b6a1c511ec8af2647a1546c00d769cb0718026fb40f1a5ad1464e233aa72->leave($__internal_fd96b6a1c511ec8af2647a1546c00d769cb0718026fb40f1a5ad1464e233aa72_prof);

        
        $__internal_3a9c4304b392c5f2fe4efc33b65a5912792b16a0d7cd727a91139d95198816fa->leave($__internal_3a9c4304b392c5f2fe4efc33b65a5912792b16a0d7cd727a91139d95198816fa_prof);

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

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.js.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
