<?php

/* SyliusShopBundle:Account/Order/Grid/Field:address.html.twig */
class __TwigTemplate_69cbc79e05c02c18904bcfa8e1ffd9002a00c218a7a25a8e243d0d6b155a32ee extends Twig_Template
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
        $__internal_7dd5872651595e56bd2c490edaec1484d1464a871d8a2cd9ff8ee53f6f843540 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dd5872651595e56bd2c490edaec1484d1464a871d8a2cd9ff8ee53f6f843540->enter($__internal_7dd5872651595e56bd2c490edaec1484d1464a871d8a2cd9ff8ee53f6f843540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order/Grid/Field:address.html.twig"));

        $__internal_60c19e19fd967a46e162c129925c0887440d9e094e0a963c138d4d667c512d95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60c19e19fd967a46e162c129925c0887440d9e094e0a963c138d4d667c512d95->enter($__internal_60c19e19fd967a46e162c129925c0887440d9e094e0a963c138d4d667c512d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order/Grid/Field:address.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "lastName", array()), "html", null, true);
        echo "
";
        
        $__internal_7dd5872651595e56bd2c490edaec1484d1464a871d8a2cd9ff8ee53f6f843540->leave($__internal_7dd5872651595e56bd2c490edaec1484d1464a871d8a2cd9ff8ee53f6f843540_prof);

        
        $__internal_60c19e19fd967a46e162c129925c0887440d9e094e0a963c138d4d667c512d95->leave($__internal_60c19e19fd967a46e162c129925c0887440d9e094e0a963c138d4d667c512d95_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account/Order/Grid/Field:address.html.twig";
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
        return new Twig_Source("{{ data.firstName }} {{ data.lastName }}
", "SyliusShopBundle:Account/Order/Grid/Field:address.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/Order/Grid/Field/address.html.twig");
    }
}
