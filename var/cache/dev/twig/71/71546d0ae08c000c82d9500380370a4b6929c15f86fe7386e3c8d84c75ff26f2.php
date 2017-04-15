<?php

/* @SyliusShop/Taxon/_horizontalMenu.html.twig */
class __TwigTemplate_2109ed49dbd2e5bab243308a911d7bb5e8419a297ed79c6a372b6c431abc6001 extends Twig_Template
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
        $__internal_05fbefc7fc86390cb03b5b801abe98610539eb0be5b5ef27f2b2cd80287de699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05fbefc7fc86390cb03b5b801abe98610539eb0be5b5ef27f2b2cd80287de699->enter($__internal_05fbefc7fc86390cb03b5b801abe98610539eb0be5b5ef27f2b2cd80287de699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Taxon/_horizontalMenu.html.twig"));

        $__internal_64fad053209e8b5fd1b843f0983848f146b452da06e9d3b27432a95776fca47a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64fad053209e8b5fd1b843f0983848f146b452da06e9d3b27432a95776fca47a->enter($__internal_64fad053209e8b5fd1b843f0983848f146b452da06e9d3b27432a95776fca47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Taxon/_horizontalMenu.html.twig"));

        // line 18
        echo "
";
        // line 19
        $context["macros"] = $this;
        // line 20
        echo "
";
        // line 21
        if ((twig_length_filter($this->env, ($context["taxons"] ?? $this->getContext($context, "taxons"))) > 0)) {
            // line 22
            echo "<div class=\"ui large stackable menu\">
    ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["taxons"] ?? $this->getContext($context, "taxons")));
            foreach ($context['_seq'] as $context["_key"] => $context["taxon"]) {
                // line 24
                echo "        ";
                echo $context["macros"]->getitem($context["taxon"]);
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "</div>
";
        }
        
        $__internal_05fbefc7fc86390cb03b5b801abe98610539eb0be5b5ef27f2b2cd80287de699->leave($__internal_05fbefc7fc86390cb03b5b801abe98610539eb0be5b5ef27f2b2cd80287de699_prof);

        
        $__internal_64fad053209e8b5fd1b843f0983848f146b452da06e9d3b27432a95776fca47a->leave($__internal_64fad053209e8b5fd1b843f0983848f146b452da06e9d3b27432a95776fca47a_prof);

    }

    // line 1
    public function getitem($__taxon__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "taxon" => $__taxon__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_b159f5eaa1ef506ffb34ca4a53442a16c9b38ce530fc869bcb2209f45a4a89da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_b159f5eaa1ef506ffb34ca4a53442a16c9b38ce530fc869bcb2209f45a4a89da->enter($__internal_b159f5eaa1ef506ffb34ca4a53442a16c9b38ce530fc869bcb2209f45a4a89da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "item"));

            $__internal_2c74ca615e44b4af65678dd0ea84f055372d716edca8840587aadd480e53c8d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_2c74ca615e44b4af65678dd0ea84f055372d716edca8840587aadd480e53c8d6->enter($__internal_2c74ca615e44b4af65678dd0ea84f055372d716edca8840587aadd480e53c8d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "item"));

            // line 2
            echo "    ";
            $context["macros"] = $this;
            // line 3
            echo "
    ";
            // line 4
            if ((twig_length_filter($this->env, $this->getAttribute(($context["taxon"] ?? $this->getContext($context, "taxon")), "children", array())) > 0)) {
                // line 5
                echo "        <div class=\"ui dropdown item\">
            <span class=\"text\">";
                // line 6
                echo twig_escape_filter($this->env, $this->getAttribute(($context["taxon"] ?? $this->getContext($context, "taxon")), "name", array()), "html", null, true);
                echo "</span>
            <i class=\"dropdown icon\"></i>
            <div class=\"menu\">
                ";
                // line 9
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["taxon"] ?? $this->getContext($context, "taxon")), "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["childTaxon"]) {
                    // line 10
                    echo "                    ";
                    echo $context["macros"]->getitem($context["childTaxon"]);
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childTaxon'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo "            </div>
        </div>
    ";
            } else {
                // line 15
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_product_index", array("slug" => $this->getAttribute(($context["taxon"] ?? $this->getContext($context, "taxon")), "slug", array()), "_locale" => $this->getAttribute($this->getAttribute(($context["taxon"] ?? $this->getContext($context, "taxon")), "translation", array()), "locale", array()))), "html", null, true);
                echo "\" class=\"item\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["taxon"] ?? $this->getContext($context, "taxon")), "name", array()), "html", null, true);
                echo "</a>
    ";
            }
            
            $__internal_2c74ca615e44b4af65678dd0ea84f055372d716edca8840587aadd480e53c8d6->leave($__internal_2c74ca615e44b4af65678dd0ea84f055372d716edca8840587aadd480e53c8d6_prof);

            
            $__internal_b159f5eaa1ef506ffb34ca4a53442a16c9b38ce530fc869bcb2209f45a4a89da->leave($__internal_b159f5eaa1ef506ffb34ca4a53442a16c9b38ce530fc869bcb2209f45a4a89da_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Taxon/_horizontalMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 15,  111 => 12,  102 => 10,  98 => 9,  92 => 6,  89 => 5,  87 => 4,  84 => 3,  81 => 2,  63 => 1,  51 => 26,  42 => 24,  38 => 23,  35 => 22,  33 => 21,  30 => 20,  28 => 19,  25 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro item(taxon) %}
    {% import _self as macros %}

    {% if taxon.children|length > 0 %}
        <div class=\"ui dropdown item\">
            <span class=\"text\">{{ taxon.name }}</span>
            <i class=\"dropdown icon\"></i>
            <div class=\"menu\">
                {% for childTaxon in taxon.children %}
                    {{ macros.item(childTaxon) }}
                {% endfor %}
            </div>
        </div>
    {% else %}
        <a href=\"{{ path('sylius_shop_product_index', {'slug': taxon.slug, '_locale': taxon.translation.locale}) }}\" class=\"item\">{{ taxon.name }}</a>
    {% endif %}
{% endmacro %}

{% import _self as macros %}

{% if taxons|length > 0 %}
<div class=\"ui large stackable menu\">
    {% for taxon in taxons %}
        {{ macros.item(taxon) }}
    {% endfor %}
</div>
{% endif %}
", "@SyliusShop/Taxon/_horizontalMenu.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Taxon/_horizontalMenu.html.twig");
    }
}
