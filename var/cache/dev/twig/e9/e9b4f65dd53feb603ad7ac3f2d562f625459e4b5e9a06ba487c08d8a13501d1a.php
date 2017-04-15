<?php

/* SyliusAdminBundle:Order/Grid/Field:channel.html.twig */
class __TwigTemplate_79140775bcf7f9dd22afcdffefd60cf97884438d85dc9a07a318520bdbc088fe extends Twig_Template
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
        $__internal_f1ccf6ed033c6a6fe115b46e3d27ed6d396279ef0cf4a4a8a4d0e5d9d5113172 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1ccf6ed033c6a6fe115b46e3d27ed6d396279ef0cf4a4a8a4d0e5d9d5113172->enter($__internal_f1ccf6ed033c6a6fe115b46e3d27ed6d396279ef0cf4a4a8a4d0e5d9d5113172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Grid/Field:channel.html.twig"));

        $__internal_84562f9a956a842dcec94dadfad6bf93b4975d0f309418d090bdc797ac35a40c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84562f9a956a842dcec94dadfad6bf93b4975d0f309418d090bdc797ac35a40c->enter($__internal_84562f9a956a842dcec94dadfad6bf93b4975d0f309418d090bdc797ac35a40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Grid/Field:channel.html.twig"));

        // line 1
        echo "<span class=\"ui small horizontal circular label\" style=\"background-color: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "color", array()), "html", null, true);
        echo "\"></span> ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "code", array()), "html", null, true);
        echo "
";
        
        $__internal_f1ccf6ed033c6a6fe115b46e3d27ed6d396279ef0cf4a4a8a4d0e5d9d5113172->leave($__internal_f1ccf6ed033c6a6fe115b46e3d27ed6d396279ef0cf4a4a8a4d0e5d9d5113172_prof);

        
        $__internal_84562f9a956a842dcec94dadfad6bf93b4975d0f309418d090bdc797ac35a40c->leave($__internal_84562f9a956a842dcec94dadfad6bf93b4975d0f309418d090bdc797ac35a40c_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Grid/Field:channel.html.twig";
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
        return new Twig_Source("<span class=\"ui small horizontal circular label\" style=\"background-color: {{ data.color }}\"></span> {{ data.code }}
", "SyliusAdminBundle:Order/Grid/Field:channel.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Grid/Field/channel.html.twig");
    }
}
