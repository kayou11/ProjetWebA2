<?php

/* @SyliusShop/Product/Show/_imageVariants.html.twig */
class __TwigTemplate_349a894677534bf073673b4736aa1fef4a8af52aafb913b68aea3dce9fb4efaa extends Twig_Template
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
        $__internal_c6c52db405d4b8223918e225c2de0635aca6cca0fa5ca208f70057abcba33a15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6c52db405d4b8223918e225c2de0635aca6cca0fa5ca208f70057abcba33a15->enter($__internal_c6c52db405d4b8223918e225c2de0635aca6cca0fa5ca208f70057abcba33a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_imageVariants.html.twig"));

        $__internal_5c5535c3678461bf82623a8df9b671e06865b8a7f83d3875e7096385aca1d815 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c5535c3678461bf82623a8df9b671e06865b8a7f83d3875e7096385aca1d815->enter($__internal_5c5535c3678461bf82623a8df9b671e06865b8a7f83d3875e7096385aca1d815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_imageVariants.html.twig"));

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
        
        $__internal_c6c52db405d4b8223918e225c2de0635aca6cca0fa5ca208f70057abcba33a15->leave($__internal_c6c52db405d4b8223918e225c2de0635aca6cca0fa5ca208f70057abcba33a15_prof);

        
        $__internal_5c5535c3678461bf82623a8df9b671e06865b8a7f83d3875e7096385aca1d815->leave($__internal_5c5535c3678461bf82623a8df9b671e06865b8a7f83d3875e7096385aca1d815_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/_imageVariants.html.twig";
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
", "@SyliusShop/Product/Show/_imageVariants.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/_imageVariants.html.twig");
    }
}
