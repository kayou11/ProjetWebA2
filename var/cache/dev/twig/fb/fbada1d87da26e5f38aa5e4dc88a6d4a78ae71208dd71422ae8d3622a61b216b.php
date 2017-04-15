<?php

/* SyliusShopBundle:Product/Show:_outOfStock.html.twig */
class __TwigTemplate_c6fa796dce654f986328b7a86a602ff8059ba900333e5636f85e60dbe3ea3b25 extends Twig_Template
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
        $__internal_f8207abc740269b8cf0f0a32344e2da1542b6cc65576b022513d1abb727674bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8207abc740269b8cf0f0a32344e2da1542b6cc65576b022513d1abb727674bc->enter($__internal_f8207abc740269b8cf0f0a32344e2da1542b6cc65576b022513d1abb727674bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_outOfStock.html.twig"));

        $__internal_4dad0b3a101164cdb358cc4d69a2cdd1ade4072bcf5df4b1ace7b27c2183acd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dad0b3a101164cdb358cc4d69a2cdd1ade4072bcf5df4b1ace7b27c2183acd9->enter($__internal_4dad0b3a101164cdb358cc4d69a2cdd1ade4072bcf5df4b1ace7b27c2183acd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_outOfStock.html.twig"));

        // line 1
        echo "<div class=\"ui small negative icon message\" id=\"sylius-product-out-of-stock\">
    <i class=\"remove icon\"></i>
    <div class=\"content\">
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.out_of_stock"), "html", null, true);
        echo "
    </div>
</div>
";
        
        $__internal_f8207abc740269b8cf0f0a32344e2da1542b6cc65576b022513d1abb727674bc->leave($__internal_f8207abc740269b8cf0f0a32344e2da1542b6cc65576b022513d1abb727674bc_prof);

        
        $__internal_4dad0b3a101164cdb358cc4d69a2cdd1ade4072bcf5df4b1ace7b27c2183acd9->leave($__internal_4dad0b3a101164cdb358cc4d69a2cdd1ade4072bcf5df4b1ace7b27c2183acd9_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Show:_outOfStock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui small negative icon message\" id=\"sylius-product-out-of-stock\">
    <i class=\"remove icon\"></i>
    <div class=\"content\">
        {{ 'sylius.ui.out_of_stock'|trans }}
    </div>
</div>
", "SyliusShopBundle:Product/Show:_outOfStock.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/_outOfStock.html.twig");
    }
}
