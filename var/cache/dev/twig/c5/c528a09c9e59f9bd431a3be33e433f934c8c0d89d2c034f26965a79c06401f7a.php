<?php

/* @SyliusShop/Product/Show/_breadcrumb.html.twig */
class __TwigTemplate_73fa2d3914bde498554ad07d0740e35893a0df81b602951dc6598468b3a1ed53 extends Twig_Template
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
        $__internal_014c6f9f0d985230c4820e177add607cbe4ce6e97fbe0ef76eb057783b1fbe2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_014c6f9f0d985230c4820e177add607cbe4ce6e97fbe0ef76eb057783b1fbe2d->enter($__internal_014c6f9f0d985230c4820e177add607cbe4ce6e97fbe0ef76eb057783b1fbe2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_breadcrumb.html.twig"));

        $__internal_9655e30fec8585984856860cd8cd163a2676cafff2a3c124bdcaa1a9d4603e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9655e30fec8585984856860cd8cd163a2676cafff2a3c124bdcaa1a9d4603e1f->enter($__internal_9655e30fec8585984856860cd8cd163a2676cafff2a3c124bdcaa1a9d4603e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_breadcrumb.html.twig"));

        // line 1
        echo "<div class=\"ui breadcrumb\">
    <a href=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_homepage");
        echo "\" class=\"section\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.home"), "html", null, true);
        echo "</a>
    <div class=\"divider\"> / </div>
    ";
        // line 4
        if ( !(null === $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "mainTaxon", array()))) {
            // line 5
            echo "        ";
            $context["taxon"] = $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "mainTaxon", array());
            // line 6
            echo "        ";
            $context["parents"] = twig_reverse_filter($this->env, $this->getAttribute(($context["taxon"] ?? $this->getContext($context, "taxon")), "parents", array()));
            // line 7
            echo "
        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["parents"] ?? $this->getContext($context, "parents")));
            foreach ($context['_seq'] as $context["_key"] => $context["parent"]) {
                // line 9
                echo "            ";
                if ($this->getAttribute($context["parent"], "isRoot", array(), "method")) {
                    // line 10
                    echo "                <div class=\"section\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["parent"], "name", array()), "html", null, true);
                    echo "</div>
            ";
                } else {
                    // line 12
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_product_index", array("slug" => $this->getAttribute($context["parent"], "slug", array()), "_locale" => $this->getAttribute($this->getAttribute($context["parent"], "translation", array()), "locale", array()))), "html", null, true);
                    echo "\" class=\"section\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["parent"], "name", array()), "html", null, true);
                    echo "</a>
            ";
                }
                // line 14
                echo "            <div class=\"divider\"> / </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "
        <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_product_index", array("slug" => $this->getAttribute(($context["taxon"] ?? $this->getContext($context, "taxon")), "slug", array()), "_locale" => $this->getAttribute($this->getAttribute(($context["taxon"] ?? $this->getContext($context, "taxon")), "translation", array()), "locale", array()))), "html", null, true);
            echo "\" class=\"section\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["taxon"] ?? $this->getContext($context, "taxon")), "name", array()), "html", null, true);
            echo "</a>
        <div class=\"divider\"> / </div>
    ";
        }
        // line 20
        echo "    <div class=\"active section\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</div>
</div>
";
        
        $__internal_014c6f9f0d985230c4820e177add607cbe4ce6e97fbe0ef76eb057783b1fbe2d->leave($__internal_014c6f9f0d985230c4820e177add607cbe4ce6e97fbe0ef76eb057783b1fbe2d_prof);

        
        $__internal_9655e30fec8585984856860cd8cd163a2676cafff2a3c124bdcaa1a9d4603e1f->leave($__internal_9655e30fec8585984856860cd8cd163a2676cafff2a3c124bdcaa1a9d4603e1f_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 20,  77 => 17,  74 => 16,  67 => 14,  59 => 12,  53 => 10,  50 => 9,  46 => 8,  43 => 7,  40 => 6,  37 => 5,  35 => 4,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui breadcrumb\">
    <a href=\"{{ path('sylius_shop_homepage') }}\" class=\"section\">{{ 'sylius.ui.home'|trans }}</a>
    <div class=\"divider\"> / </div>
    {% if product.mainTaxon is not null %}
        {% set taxon = product.mainTaxon %}
        {% set parents = taxon.parents|reverse %}

        {% for parent in parents %}
            {% if parent.isRoot() %}
                <div class=\"section\">{{ parent.name }}</div>
            {% else %}
                <a href=\"{{ path('sylius_shop_product_index', {'slug': parent.slug, '_locale': parent.translation.locale}) }}\" class=\"section\">{{ parent.name }}</a>
            {% endif %}
            <div class=\"divider\"> / </div>
        {% endfor %}

        <a href=\"{{ path('sylius_shop_product_index', {'slug': taxon.slug, '_locale': taxon.translation.locale}) }}\" class=\"section\">{{ taxon.name }}</a>
        <div class=\"divider\"> / </div>
    {% endif %}
    <div class=\"active section\">{{ product.name }}</div>
</div>
", "@SyliusShop/Product/Show/_breadcrumb.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Show/_breadcrumb.html.twig");
    }
}
