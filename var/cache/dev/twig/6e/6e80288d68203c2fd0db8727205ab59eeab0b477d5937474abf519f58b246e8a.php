<?php

/* SyliusAttributeBundle:Types:textarea.html.twig */
class __TwigTemplate_e7aa7e67814488800107626253cd88a55b7c988955e98b2a04d8efdd3ab94d7a extends Twig_Template
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
        $__internal_c43db05aad6dfa00d51d9dd967e083f113df3fb81c342b6e9b2063b50b699db4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c43db05aad6dfa00d51d9dd967e083f113df3fb81c342b6e9b2063b50b699db4->enter($__internal_c43db05aad6dfa00d51d9dd967e083f113df3fb81c342b6e9b2063b50b699db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAttributeBundle:Types:textarea.html.twig"));

        $__internal_a7cd93dcc4ef311bae50bb2e81c50bbbbbe8bec42a2a44885ab17ea0522dc7aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7cd93dcc4ef311bae50bb2e81c50bbbbbe8bec42a2a44885ab17ea0522dc7aa->enter($__internal_a7cd93dcc4ef311bae50bb2e81c50bbbbbe8bec42a2a44885ab17ea0522dc7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAttributeBundle:Types:textarea.html.twig"));

        // line 1
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["attribute"] ?? $this->getContext($context, "attribute")), "value", array()), "html", null, true));
        echo "
";
        
        $__internal_c43db05aad6dfa00d51d9dd967e083f113df3fb81c342b6e9b2063b50b699db4->leave($__internal_c43db05aad6dfa00d51d9dd967e083f113df3fb81c342b6e9b2063b50b699db4_prof);

        
        $__internal_a7cd93dcc4ef311bae50bb2e81c50bbbbbe8bec42a2a44885ab17ea0522dc7aa->leave($__internal_a7cd93dcc4ef311bae50bb2e81c50bbbbbe8bec42a2a44885ab17ea0522dc7aa_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAttributeBundle:Types:textarea.html.twig";
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
        return new Twig_Source("{{ attribute.value|nl2br }}
", "SyliusAttributeBundle:Types:textarea.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/views/Types/textarea.html.twig");
    }
}
