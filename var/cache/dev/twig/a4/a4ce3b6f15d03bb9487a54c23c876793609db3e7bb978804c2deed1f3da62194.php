<?php

/* SyliusAdminBundle:Order/Label/ShippingState:cancelled.html.twig */
class __TwigTemplate_cacf2af3d341fa43dfd8633d4e506bfd1acd05516d3b725a2d43bdb5ea78efa1 extends Twig_Template
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
        $__internal_92ea9c437586626225136aa8fecac4f3d6765a47c8c86374ffc7862d696f67d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92ea9c437586626225136aa8fecac4f3d6765a47c8c86374ffc7862d696f67d2->enter($__internal_92ea9c437586626225136aa8fecac4f3d6765a47c8c86374ffc7862d696f67d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/ShippingState:cancelled.html.twig"));

        $__internal_649ce306b71a12b69aaeaf16c2101c5234025caaa3e9329a37cb13e0158b12ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_649ce306b71a12b69aaeaf16c2101c5234025caaa3e9329a37cb13e0158b12ad->enter($__internal_649ce306b71a12b69aaeaf16c2101c5234025caaa3e9329a37cb13e0158b12ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/ShippingState:cancelled.html.twig"));

        // line 1
        echo "<span class=\"ui yellow";
        if ((array_key_exists("attached", $context) && (($context["attached"] ?? $this->getContext($context, "attached")) == true))) {
            echo " top attached";
        }
        echo " label\">
    <i class=\"ban icon\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
        echo "
</span>
";
        
        $__internal_92ea9c437586626225136aa8fecac4f3d6765a47c8c86374ffc7862d696f67d2->leave($__internal_92ea9c437586626225136aa8fecac4f3d6765a47c8c86374ffc7862d696f67d2_prof);

        
        $__internal_649ce306b71a12b69aaeaf16c2101c5234025caaa3e9329a37cb13e0158b12ad->leave($__internal_649ce306b71a12b69aaeaf16c2101c5234025caaa3e9329a37cb13e0158b12ad_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Label/ShippingState:cancelled.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"ui yellow{% if attached is defined and attached == true %} top attached{% endif %} label\">
    <i class=\"ban icon\"></i>
    {{ value|trans }}
</span>
", "SyliusAdminBundle:Order/Label/ShippingState:cancelled.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Label/ShippingState/cancelled.html.twig");
    }
}
