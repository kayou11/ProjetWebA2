<?php

/* SyliusShopBundle:Taxon:_verticalMenu.html.twig */
class __TwigTemplate_2ad8fc40fe8c5bf184cb3e8cc0a744f307eec63f9de78de4782ba5e4453ee59f extends Twig_Template
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
        $__internal_ce3f9a96ed98e4ea3903d8432923866e14a197d0844ba8f601eecc8485badb99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce3f9a96ed98e4ea3903d8432923866e14a197d0844ba8f601eecc8485badb99->enter($__internal_ce3f9a96ed98e4ea3903d8432923866e14a197d0844ba8f601eecc8485badb99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Taxon:_verticalMenu.html.twig"));

        $__internal_16fbf38c4a1a407e6f643a06f5a528bf7037dc9478829cade255cac704e69cd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16fbf38c4a1a407e6f643a06f5a528bf7037dc9478829cade255cac704e69cd1->enter($__internal_16fbf38c4a1a407e6f643a06f5a528bf7037dc9478829cade255cac704e69cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Taxon:_verticalMenu.html.twig"));

        // line 1
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.index.before_vertical_menu", array("taxon" => ($context["taxon"] ?? $this->getContext($context, "taxon")))));
        echo "

<div class=\"ui fluid vertical menu\">
    <div class=\"header item\">";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["taxon"] ?? $this->getContext($context, "taxon")), "name", array()), "html", null, true);
        echo "</div>
    ";
        // line 5
        if (( !twig_test_empty($this->getAttribute(($context["taxon"] ?? $this->getContext($context, "taxon")), "parent", array())) &&  !$this->getAttribute($this->getAttribute(($context["taxon"] ?? $this->getContext($context, "taxon")), "parent", array()), "isRoot", array(), "method"))) {
            // line 6
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_product_index", array("slug" => $this->getAttribute($this->getAttribute(($context["taxon"] ?? $this->getContext($context, "taxon")), "parent", array()), "slug", array()), "_locale" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["taxon"] ?? $this->getContext($context, "taxon")), "parent", array()), "translation", array()), "locale", array()))), "html", null, true);
            echo "\" class=\"item\">
            <i class=\"up arrow icon\"></i> ";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.go_level_up"), "html", null, true);
            echo "
        </a>
    ";
        }
        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["taxon"] ?? $this->getContext($context, "taxon")), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 11
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_product_index", array("slug" => $this->getAttribute($context["child"], "slug", array()), "_locale" => $this->getAttribute($this->getAttribute($context["child"], "translation", array()), "locale", array()))), "html", null, true);
            echo "\" class=\"item\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "name", array()), "html", null, true);
            echo "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</div>

";
        // line 15
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.index.after_vertical_menu", array("taxon" => ($context["taxon"] ?? $this->getContext($context, "taxon")))));
        echo "
";
        
        $__internal_ce3f9a96ed98e4ea3903d8432923866e14a197d0844ba8f601eecc8485badb99->leave($__internal_ce3f9a96ed98e4ea3903d8432923866e14a197d0844ba8f601eecc8485badb99_prof);

        
        $__internal_16fbf38c4a1a407e6f643a06f5a528bf7037dc9478829cade255cac704e69cd1->leave($__internal_16fbf38c4a1a407e6f643a06f5a528bf7037dc9478829cade255cac704e69cd1_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Taxon:_verticalMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 15,  64 => 13,  53 => 11,  48 => 10,  42 => 7,  37 => 6,  35 => 5,  31 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ sonata_block_render_event('sylius.shop.product.index.before_vertical_menu', {'taxon': taxon}) }}

<div class=\"ui fluid vertical menu\">
    <div class=\"header item\">{{ taxon.name }}</div>
    {% if taxon.parent is not empty and not taxon.parent.isRoot() %}
        <a href=\"{{ path('sylius_shop_product_index', {'slug': taxon.parent.slug, '_locale': taxon.parent.translation.locale}) }}\" class=\"item\">
            <i class=\"up arrow icon\"></i> {{ 'sylius.ui.go_level_up'|trans }}
        </a>
    {% endif %}
    {% for child in taxon.children %}
    <a href=\"{{ path('sylius_shop_product_index', {'slug': child.slug, '_locale': child.translation.locale}) }}\" class=\"item\">{{ child.name }}</a>
    {% endfor %}
</div>

{{ sonata_block_render_event('sylius.shop.product.index.after_vertical_menu', {'taxon': taxon}) }}
", "SyliusShopBundle:Taxon:_verticalMenu.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Taxon/_verticalMenu.html.twig");
    }
}
