<?php

/* SyliusShopBundle:Account/Order/Label/State:cancelled.html.twig */
class __TwigTemplate_b7ba53995b9e1e91bf1aaeec8e14ebd23ae915118ff800c83eae024571dc54cc extends Twig_Template
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
        $__internal_4be5ef1763fc41be68b5e1f5e19798b8daa32d1affffa411d7edb2f0b9b8b0da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4be5ef1763fc41be68b5e1f5e19798b8daa32d1affffa411d7edb2f0b9b8b0da->enter($__internal_4be5ef1763fc41be68b5e1f5e19798b8daa32d1affffa411d7edb2f0b9b8b0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order/Label/State:cancelled.html.twig"));

        $__internal_370d3ad114b2a015f1900a3c55ab10be6250b8dad56c0b53acebbb6aee8b8381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_370d3ad114b2a015f1900a3c55ab10be6250b8dad56c0b53acebbb6aee8b8381->enter($__internal_370d3ad114b2a015f1900a3c55ab10be6250b8dad56c0b53acebbb6aee8b8381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order/Label/State:cancelled.html.twig"));

        // line 1
        echo "<span class=\"ui yellow label\">
    <i class=\"ban icon\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
        echo "
</span>
";
        
        $__internal_4be5ef1763fc41be68b5e1f5e19798b8daa32d1affffa411d7edb2f0b9b8b0da->leave($__internal_4be5ef1763fc41be68b5e1f5e19798b8daa32d1affffa411d7edb2f0b9b8b0da_prof);

        
        $__internal_370d3ad114b2a015f1900a3c55ab10be6250b8dad56c0b53acebbb6aee8b8381->leave($__internal_370d3ad114b2a015f1900a3c55ab10be6250b8dad56c0b53acebbb6aee8b8381_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account/Order/Label/State:cancelled.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"ui yellow label\">
    <i class=\"ban icon\"></i>
    {{ value|trans }}
</span>
", "SyliusShopBundle:Account/Order/Label/State:cancelled.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/Order/Label/State/cancelled.html.twig");
    }
}
