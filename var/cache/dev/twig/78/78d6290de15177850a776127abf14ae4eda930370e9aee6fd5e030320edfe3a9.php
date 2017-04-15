<?php

/* SyliusShopBundle:Product/Index:_main.html.twig */
class __TwigTemplate_85b244df2dd8c95f9546562af27e469dd41b486afd1319c3599fcc03c72341da extends Twig_Template
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
        $__internal_62b2dbde9347bfee7aae5e55be2290cce9dda21eeaca96c7a2ef62dccc5e19df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62b2dbde9347bfee7aae5e55be2290cce9dda21eeaca96c7a2ef62dccc5e19df->enter($__internal_62b2dbde9347bfee7aae5e55be2290cce9dda21eeaca96c7a2ef62dccc5e19df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Index:_main.html.twig"));

        $__internal_445bd20b8e283c5075c83dc151657f81f3ebd076d59d9873b7566b4dd68d3062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_445bd20b8e283c5075c83dc151657f81f3ebd076d59d9873b7566b4dd68d3062->enter($__internal_445bd20b8e283c5075c83dc151657f81f3ebd076d59d9873b7566b4dd68d3062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Index:_main.html.twig"));

        // line 1
        $context["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "SyliusShopBundle:Product/Index:_main.html.twig", 1);
        // line 2
        $context["pagination"] = $this->loadTemplate("@SyliusUi/Macro/pagination.html.twig", "SyliusShopBundle:Product/Index:_main.html.twig", 2);
        // line 3
        echo "
";
        // line 4
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.index.before_search", array("products" => ($context["products"] ?? $this->getContext($context, "products")))));
        echo "

";
        // line 6
        $this->loadTemplate("@SyliusShop/Product/Index/_search.html.twig", "SyliusShopBundle:Product/Index:_main.html.twig", 6)->display($context);
        // line 7
        echo "
";
        // line 8
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.index.after_search", array("products" => ($context["products"] ?? $this->getContext($context, "products")))));
        echo "

";
        // line 10
        $this->loadTemplate("@SyliusShop/Product/Index/_pagination.html.twig", "SyliusShopBundle:Product/Index:_main.html.twig", 10)->display($context);
        // line 11
        $this->loadTemplate("@SyliusShop/Product/Index/_sorting.html.twig", "SyliusShopBundle:Product/Index:_main.html.twig", 11)->display($context);
        // line 12
        echo "
<div class=\"ui clearing hidden divider\"></div>

";
        // line 15
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.index.before_list", array("products" => ($context["products"] ?? $this->getContext($context, "products")))));
        echo "

";
        // line 17
        if ((twig_length_filter($this->env, $this->getAttribute(($context["resources"] ?? $this->getContext($context, "resources")), "data", array())) > 0)) {
            // line 18
            echo "    <div class=\"ui three column stackable grid\" id=\"products\">
        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["resources"] ?? $this->getContext($context, "resources")), "data", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 20
                echo "            <div class=\"column\">
                ";
                // line 21
                $this->loadTemplate("@SyliusShop/Product/_box.html.twig", "SyliusShopBundle:Product/Index:_main.html.twig", 21)->display($context);
                // line 22
                echo "            </div>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    </div>
    <div class=\"ui hidden divider\"></div>

    ";
            // line 27
            echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.index.before_pagination", array("products" => ($context["products"] ?? $this->getContext($context, "products")))));
            echo "

    ";
            // line 29
            echo $context["pagination"]->getsimple($this->getAttribute(($context["resources"] ?? $this->getContext($context, "resources")), "data", array()));
            echo "
";
        } else {
            // line 31
            echo "    ";
            echo $context["messages"]->getinfo("sylius.ui.no_results_to_display");
            echo "
";
        }
        
        $__internal_62b2dbde9347bfee7aae5e55be2290cce9dda21eeaca96c7a2ef62dccc5e19df->leave($__internal_62b2dbde9347bfee7aae5e55be2290cce9dda21eeaca96c7a2ef62dccc5e19df_prof);

        
        $__internal_445bd20b8e283c5075c83dc151657f81f3ebd076d59d9873b7566b4dd68d3062->leave($__internal_445bd20b8e283c5075c83dc151657f81f3ebd076d59d9873b7566b4dd68d3062_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Index:_main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 31,  113 => 29,  108 => 27,  103 => 24,  88 => 22,  86 => 21,  83 => 20,  66 => 19,  63 => 18,  61 => 17,  56 => 15,  51 => 12,  49 => 11,  47 => 10,  42 => 8,  39 => 7,  37 => 6,  32 => 4,  29 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/messages.html.twig' as messages %}
{% import '@SyliusUi/Macro/pagination.html.twig' as pagination %}

{{ sonata_block_render_event('sylius.shop.product.index.before_search', {'products': products}) }}

{% include '@SyliusShop/Product/Index/_search.html.twig' %}

{{ sonata_block_render_event('sylius.shop.product.index.after_search', {'products': products}) }}

{% include '@SyliusShop/Product/Index/_pagination.html.twig' %}
{% include '@SyliusShop/Product/Index/_sorting.html.twig' %}

<div class=\"ui clearing hidden divider\"></div>

{{ sonata_block_render_event('sylius.shop.product.index.before_list', {'products': products}) }}

{% if resources.data|length > 0 %}
    <div class=\"ui three column stackable grid\" id=\"products\">
        {% for product in resources.data %}
            <div class=\"column\">
                {% include '@SyliusShop/Product/_box.html.twig' %}
            </div>
        {% endfor %}
    </div>
    <div class=\"ui hidden divider\"></div>

    {{ sonata_block_render_event('sylius.shop.product.index.before_pagination', {'products': products}) }}

    {{ pagination.simple(resources.data) }}
{% else %}
    {{ messages.info('sylius.ui.no_results_to_display') }}
{% endif %}
", "SyliusShopBundle:Product/Index:_main.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Product/Index/_main.html.twig");
    }
}
