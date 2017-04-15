<?php

/* SyliusShopBundle:Common/Order/Table:_headers.html.twig */
class __TwigTemplate_2b7b85aa10360a47a105e7ecdd0b9849388a20902901111133d167899739f096 extends Twig_Template
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
        $__internal_078edaec25eb380062e60519b83646686c08eb6fa1fb36f54ec1d56ae7653733 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_078edaec25eb380062e60519b83646686c08eb6fa1fb36f54ec1d56ae7653733->enter($__internal_078edaec25eb380062e60519b83646686c08eb6fa1fb36f54ec1d56ae7653733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order/Table:_headers.html.twig"));

        $__internal_cfda9158ae9814946cae2d24892614946f9745c83adaf3ad6d5ed9d35914e483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfda9158ae9814946cae2d24892614946f9745c83adaf3ad6d5ed9d35914e483->enter($__internal_cfda9158ae9814946cae2d24892614946f9745c83adaf3ad6d5ed9d35914e483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order/Table:_headers.html.twig"));

        // line 1
        echo "<tr>
    <th class=\"sylius-table-column-item\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.item"), "html", null, true);
        echo "</th>
    <th class=\"sylius-table-column-price\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.price"), "html", null, true);
        echo "</th>
    <th class=\"sylius-table-column-qty\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.qty"), "html", null, true);
        echo "</th>
    <th class=\"sylius-table-column-subtotal\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.subtotal"), "html", null, true);
        echo "</th>
</tr>
";
        
        $__internal_078edaec25eb380062e60519b83646686c08eb6fa1fb36f54ec1d56ae7653733->leave($__internal_078edaec25eb380062e60519b83646686c08eb6fa1fb36f54ec1d56ae7653733_prof);

        
        $__internal_cfda9158ae9814946cae2d24892614946f9745c83adaf3ad6d5ed9d35914e483->leave($__internal_cfda9158ae9814946cae2d24892614946f9745c83adaf3ad6d5ed9d35914e483_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Common/Order/Table:_headers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  36 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <th class=\"sylius-table-column-item\">{{ 'sylius.ui.item'|trans }}</th>
    <th class=\"sylius-table-column-price\">{{ 'sylius.ui.price'|trans }}</th>
    <th class=\"sylius-table-column-qty\">{{ 'sylius.ui.qty'|trans }}</th>
    <th class=\"sylius-table-column-subtotal\">{{ 'sylius.ui.subtotal'|trans }}</th>
</tr>
", "SyliusShopBundle:Common/Order/Table:_headers.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Common/Order/Table/_headers.html.twig");
    }
}
