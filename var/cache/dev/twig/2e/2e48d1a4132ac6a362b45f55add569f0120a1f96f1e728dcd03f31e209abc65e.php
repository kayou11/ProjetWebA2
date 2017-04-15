<?php

/* SyliusAdminBundle:Product:_info.html.twig */
class __TwigTemplate_e5cd2b54bb110c998102fb9495dc7017a10aa521b26473d53f562f2b238945db extends Twig_Template
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
        $__internal_d1a0f3bc2e2b8dba4f8d74d07f172ca3723714e15fbba8f2045d68179f99eda0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1a0f3bc2e2b8dba4f8d74d07f172ca3723714e15fbba8f2045d68179f99eda0->enter($__internal_d1a0f3bc2e2b8dba4f8d74d07f172ca3723714e15fbba8f2045d68179f99eda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product:_info.html.twig"));

        $__internal_806c10e52a0388f3c33cab45dfc08ceb3e385a9bc091882f1fad1f708fa60562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_806c10e52a0388f3c33cab45dfc08ceb3e385a9bc091882f1fad1f708fa60562->enter($__internal_806c10e52a0388f3c33cab45dfc08ceb3e385a9bc091882f1fad1f708fa60562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product:_info.html.twig"));

        // line 1
        $context["product"] = $this->getAttribute(($context["variant"] ?? $this->getContext($context, "variant")), "product", array());
        // line 2
        echo "
<div class=\"ui header\">
    ";
        // line 4
        $this->loadTemplate("@SyliusAdmin/Product/_mainImage.html.twig", "SyliusAdminBundle:Product:_info.html.twig", 4)->display(array_merge($context, array("product" => ($context["product"] ?? $this->getContext($context, "product")), "filter" => "sylius_admin_product_tiny_thumbnail")));
        // line 5
        echo "    <div class=\"content\">
        <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_product_update", array("id" => $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "id", array()))), "html", null, true);
        echo "\" class=\"sylius-product-name\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</a>
        <span class=\"sub header sylius-product-variant-code\" title=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["variant"] ?? $this->getContext($context, "variant")), "code", array()), "html", null, true);
        echo "\">
            ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["variant"] ?? $this->getContext($context, "variant")), "code", array()), "html", null, true);
        echo "
        </span>
    </div>
</div>
";
        // line 12
        if ($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "hasOptions", array(), "method")) {
            // line 13
            echo "    <div class=\"ui horizontal divided list sylius-product-options\">
        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["variant"] ?? $this->getContext($context, "variant")), "optionValues", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["optionValue"]) {
                // line 15
                echo "            <div class=\"item\" data-sylius-option-name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["optionValue"], "name", array()), "html", null, true);
                echo "\">
                ";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["optionValue"], "value", array()), "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['optionValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    </div>
";
        } elseif ( !(null === $this->getAttribute(        // line 20
($context["variant"] ?? $this->getContext($context, "variant")), "name", array()))) {
            // line 21
            echo "    <div class=\"ui horizontal divided list\">
        <div class=\"item sylius-product-variant-name\">
            ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute(($context["variant"] ?? $this->getContext($context, "variant")), "name", array()), "html", null, true);
            echo "
        </div>
    </div>
";
        }
        
        $__internal_d1a0f3bc2e2b8dba4f8d74d07f172ca3723714e15fbba8f2045d68179f99eda0->leave($__internal_d1a0f3bc2e2b8dba4f8d74d07f172ca3723714e15fbba8f2045d68179f99eda0_prof);

        
        $__internal_806c10e52a0388f3c33cab45dfc08ceb3e385a9bc091882f1fad1f708fa60562->leave($__internal_806c10e52a0388f3c33cab45dfc08ceb3e385a9bc091882f1fad1f708fa60562_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product:_info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 23,  83 => 21,  81 => 20,  78 => 19,  69 => 16,  64 => 15,  60 => 14,  57 => 13,  55 => 12,  48 => 8,  44 => 7,  36 => 6,  33 => 5,  31 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set product = variant.product %}

<div class=\"ui header\">
    {% include '@SyliusAdmin/Product/_mainImage.html.twig' with {'product': product, 'filter': 'sylius_admin_product_tiny_thumbnail'} %}
    <div class=\"content\">
        <a href=\"{{ path('sylius_admin_product_update', {'id': product.id}) }}\" class=\"sylius-product-name\" title=\"{{ product.name }}\">{{ product.name }}</a>
        <span class=\"sub header sylius-product-variant-code\" title=\"{{ variant.code }}\">
            {{ variant.code }}
        </span>
    </div>
</div>
{% if product.hasOptions() %}
    <div class=\"ui horizontal divided list sylius-product-options\">
        {% for optionValue in variant.optionValues %}
            <div class=\"item\" data-sylius-option-name=\"{{ optionValue.name }}\">
                {{ optionValue.value }}
            </div>
        {% endfor %}
    </div>
{% elseif variant.name is not null %}
    <div class=\"ui horizontal divided list\">
        <div class=\"item sylius-product-variant-name\">
            {{ variant.name }}
        </div>
    </div>
{% endif %}
", "SyliusAdminBundle:Product:_info.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/_info.html.twig");
    }
}
