<?php

/* SyliusAttributeBundle:Types:default.html.twig */
class __TwigTemplate_446b52b3505d86f72f95520852772591432880c9772c3d4fa7ab8b25d58f590e extends Twig_Template
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
        $__internal_239062d7c9da17f11d93f6b094bd1da91caa698f960b98ee2a017bcd4e2ccfaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_239062d7c9da17f11d93f6b094bd1da91caa698f960b98ee2a017bcd4e2ccfaa->enter($__internal_239062d7c9da17f11d93f6b094bd1da91caa698f960b98ee2a017bcd4e2ccfaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAttributeBundle:Types:default.html.twig"));

        $__internal_ec3d30069458e07e56b10a0c6789ef62aaa9f2c13c86273500d1cbbb2388f51b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec3d30069458e07e56b10a0c6789ef62aaa9f2c13c86273500d1cbbb2388f51b->enter($__internal_ec3d30069458e07e56b10a0c6789ef62aaa9f2c13c86273500d1cbbb2388f51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAttributeBundle:Types:default.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->getAttribute(($context["attribute"] ?? $this->getContext($context, "attribute")), "value", array()), "html", null, true);
        echo "
";
        
        $__internal_239062d7c9da17f11d93f6b094bd1da91caa698f960b98ee2a017bcd4e2ccfaa->leave($__internal_239062d7c9da17f11d93f6b094bd1da91caa698f960b98ee2a017bcd4e2ccfaa_prof);

        
        $__internal_ec3d30069458e07e56b10a0c6789ef62aaa9f2c13c86273500d1cbbb2388f51b->leave($__internal_ec3d30069458e07e56b10a0c6789ef62aaa9f2c13c86273500d1cbbb2388f51b_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAttributeBundle:Types:default.html.twig";
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
        return new Twig_Source("{{ attribute.value }}
", "SyliusAttributeBundle:Types:default.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/views/Types/default.html.twig");
    }
}
