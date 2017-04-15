<?php

/* SyliusAdminBundle:Product:_position.html.twig */
class __TwigTemplate_276b2dba07c322d0195fdfbba1b2c9b061493dc46b61d61d0e535f17b9eff9e6 extends Twig_Template
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
        $__internal_9d8235aab46bf625fa97cc1d102ae1b05fb39af7d1451ce3dea83f0751ee71f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d8235aab46bf625fa97cc1d102ae1b05fb39af7d1451ce3dea83f0751ee71f6->enter($__internal_9d8235aab46bf625fa97cc1d102ae1b05fb39af7d1451ce3dea83f0751ee71f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product:_position.html.twig"));

        $__internal_d6867052b5866f215204c626fd8f8fe699d4a7c99ad4d83d3ed18386e736211a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6867052b5866f215204c626fd8f8fe699d4a7c99ad4d83d3ed18386e736211a->enter($__internal_d6867052b5866f215204c626fd8f8fe699d4a7c99ad4d83d3ed18386e736211a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product:_position.html.twig"));

        // line 1
        if (($context["taxonId"] ?? $this->getContext($context, "taxonId"))) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "productTaxons", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["productTaxon"]) {
                // line 3
                echo "        ";
                if ((($context["taxonId"] ?? $this->getContext($context, "taxonId")) == $this->getAttribute($this->getAttribute($context["productTaxon"], "taxon", array()), "id", array()))) {
                    // line 4
                    echo "            <div style=\"width: 100%; text-align: center;\">
                <div class=\"ui input position\" style=\"width: 50px;\">
                    <input type='text' value=\"";
                    // line 6
                    echo twig_escape_filter($this->env, $this->getAttribute($context["productTaxon"], "position", array()), "html", null, true);
                    echo "\" data-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["productTaxon"], "id", array()), "html", null, true);
                    echo "\" class=\"sylius-product-taxon-position\" style=\"text-align: center;\" />
                </div>
            </div>
        ";
                }
                // line 10
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productTaxon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_9d8235aab46bf625fa97cc1d102ae1b05fb39af7d1451ce3dea83f0751ee71f6->leave($__internal_9d8235aab46bf625fa97cc1d102ae1b05fb39af7d1451ce3dea83f0751ee71f6_prof);

        
        $__internal_d6867052b5866f215204c626fd8f8fe699d4a7c99ad4d83d3ed18386e736211a->leave($__internal_d6867052b5866f215204c626fd8f8fe699d4a7c99ad4d83d3ed18386e736211a_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product:_position.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  39 => 6,  35 => 4,  32 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if taxonId %}
    {% for productTaxon in product.productTaxons%}
        {% if taxonId == productTaxon.taxon.id %}
            <div style=\"width: 100%; text-align: center;\">
                <div class=\"ui input position\" style=\"width: 50px;\">
                    <input type='text' value=\"{{ productTaxon.position }}\" data-id=\"{{ productTaxon.id }}\" class=\"sylius-product-taxon-position\" style=\"text-align: center;\" />
                </div>
            </div>
        {% endif %}
    {% endfor %}
{% endif %}
", "SyliusAdminBundle:Product:_position.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/_position.html.twig");
    }
}
