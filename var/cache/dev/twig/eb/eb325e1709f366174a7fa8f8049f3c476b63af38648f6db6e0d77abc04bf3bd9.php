<?php

/* SyliusAttributeBundle:Types:default.html.twig */
class __TwigTemplate_6a7a7e241fcb898098c4e2b2d7a9f47a876144442fdb9a922de7eda2b0fe4009 extends Twig_Template
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
        $__internal_4a00af6c375295b6587cb5a22124b97256ab865828a612f6a4474d6aac64780e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a00af6c375295b6587cb5a22124b97256ab865828a612f6a4474d6aac64780e->enter($__internal_4a00af6c375295b6587cb5a22124b97256ab865828a612f6a4474d6aac64780e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAttributeBundle:Types:default.html.twig"));

        $__internal_c4313e07b8ca241bf0756c3210b067caade943a702343735afce38713fe484cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4313e07b8ca241bf0756c3210b067caade943a702343735afce38713fe484cd->enter($__internal_c4313e07b8ca241bf0756c3210b067caade943a702343735afce38713fe484cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAttributeBundle:Types:default.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->getAttribute(($context["attribute"] ?? $this->getContext($context, "attribute")), "value", array()), "html", null, true);
        echo "
";
        
        $__internal_4a00af6c375295b6587cb5a22124b97256ab865828a612f6a4474d6aac64780e->leave($__internal_4a00af6c375295b6587cb5a22124b97256ab865828a612f6a4474d6aac64780e_prof);

        
        $__internal_c4313e07b8ca241bf0756c3210b067caade943a702343735afce38713fe484cd->leave($__internal_c4313e07b8ca241bf0756c3210b067caade943a702343735afce38713fe484cd_prof);

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
", "SyliusAttributeBundle:Types:default.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/views/Types/default.html.twig");
    }
}
