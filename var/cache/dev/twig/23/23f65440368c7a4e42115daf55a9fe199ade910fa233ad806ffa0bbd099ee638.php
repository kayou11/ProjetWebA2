<?php

/* SyliusShopBundle:Product/Show:_imageVariants.html.twig */
class __TwigTemplate_8b2d5dd737fa44af831c2de25a5353e11f14373215bfab9101ed7489290e396a extends Twig_Template
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
        $__internal_6adb18042a2540d37f6fe7bd98937524f1aee0945553d5fa8fd87dcd2eeab8bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6adb18042a2540d37f6fe7bd98937524f1aee0945553d5fa8fd87dcd2eeab8bb->enter($__internal_6adb18042a2540d37f6fe7bd98937524f1aee0945553d5fa8fd87dcd2eeab8bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_imageVariants.html.twig"));

        $__internal_4f3204bd89615161870d3d6f8067a54a1bdc6bf0b47491dcbb3da64357c72c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f3204bd89615161870d3d6f8067a54a1bdc6bf0b47491dcbb3da64357c72c45->enter($__internal_4f3204bd89615161870d3d6f8067a54a1bdc6bf0b47491dcbb3da64357c72c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_imageVariants.html.twig"));

        // line 1
        echo "<div class=\"sylius-image-variants\">
";
        // line 2
        if (($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "getVariantSelectionMethod", array(), "method") == "match")) {
            // line 3
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["image"] ?? $this->getContext($context, "image")), "productVariants", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["variant"]) {
                // line 4
                echo "    <div data-variant-options=\"";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["variant"], "optionValues", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "code", array()), "html", null, true);
                    echo " ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "\"></div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 7
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["image"] ?? $this->getContext($context, "image")), "productVariants", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["variant"]) {
                // line 8
                echo "    <div data-variant-code=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["variant"], "code", array()), "html", null, true);
                echo "\"></div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 11
        echo "</div>
";
        
        $__internal_6adb18042a2540d37f6fe7bd98937524f1aee0945553d5fa8fd87dcd2eeab8bb->leave($__internal_6adb18042a2540d37f6fe7bd98937524f1aee0945553d5fa8fd87dcd2eeab8bb_prof);

        
        $__internal_4f3204bd89615161870d3d6f8067a54a1bdc6bf0b47491dcbb3da64357c72c45->leave($__internal_4f3204bd89615161870d3d6f8067a54a1bdc6bf0b47491dcbb3da64357c72c45_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Show:_imageVariants.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 11,  58 => 8,  53 => 7,  35 => 4,  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"sylius-image-variants\">
{% if product.getVariantSelectionMethod() == 'match' %}
    {% for variant in image.productVariants %}
    <div data-variant-options=\"{% for option in variant.optionValues %}{{ option.code }} {% endfor %}\"></div>
    {% endfor %}
{% else %}
    {% for variant in image.productVariants %}
    <div data-variant-code=\"{{ variant.code }}\"></div>
    {% endfor %}
{% endif %}
</div>
", "SyliusShopBundle:Product/Show:_imageVariants.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/_imageVariants.html.twig");
    }
}
