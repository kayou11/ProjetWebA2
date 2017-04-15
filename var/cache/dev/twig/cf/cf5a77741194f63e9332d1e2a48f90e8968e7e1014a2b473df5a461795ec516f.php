<?php

/* @SyliusShop/Product/Show/Tabs/_details.html.twig */
class __TwigTemplate_b0ad9213a468b4fa1c9eb6062c8e7a171643a096cd3e00d5be0b20bd9eeb3809 extends Twig_Template
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
        $__internal_015ee55e35be862decef4f049b24c920ce822dc2d8872d8df10dc611da73ed58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_015ee55e35be862decef4f049b24c920ce822dc2d8872d8df10dc611da73ed58->enter($__internal_015ee55e35be862decef4f049b24c920ce822dc2d8872d8df10dc611da73ed58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/Tabs/_details.html.twig"));

        $__internal_629caacc7c5ff67e33a3c1fee192c41529827010f295678c4b5b51017fa579e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_629caacc7c5ff67e33a3c1fee192c41529827010f295678c4b5b51017fa579e9->enter($__internal_629caacc7c5ff67e33a3c1fee192c41529827010f295678c4b5b51017fa579e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/Tabs/_details.html.twig"));

        // line 1
        echo "<div class=\"ui bottom attached tab segment active\" data-tab=\"details\">
    ";
        // line 2
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.show.tab_details", array("product" => ($context["product"] ?? $this->getContext($context, "product")))));
        echo "

    ";
        // line 4
        if ( !twig_test_empty($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "description", array()))) {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "description", array()), "html", null, true);
            echo "
    ";
        } else {
            // line 7
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.no_description"), "html", null, true);
            echo ".
    ";
        }
        // line 9
        echo "</div>
";
        
        $__internal_015ee55e35be862decef4f049b24c920ce822dc2d8872d8df10dc611da73ed58->leave($__internal_015ee55e35be862decef4f049b24c920ce822dc2d8872d8df10dc611da73ed58_prof);

        
        $__internal_629caacc7c5ff67e33a3c1fee192c41529827010f295678c4b5b51017fa579e9->leave($__internal_629caacc7c5ff67e33a3c1fee192c41529827010f295678c4b5b51017fa579e9_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/Tabs/_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  41 => 7,  35 => 5,  33 => 4,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui bottom attached tab segment active\" data-tab=\"details\">
    {{ sonata_block_render_event('sylius.shop.product.show.tab_details', {'product': product}) }}

    {% if product.description is not empty %}
        {{ product.description }}
    {% else %}
        {{ 'sylius.ui.no_description'|trans }}.
    {% endif %}
</div>
", "@SyliusShop/Product/Show/Tabs/_details.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/Tabs/_details.html.twig");
    }
}
