<?php

/* SyliusShopBundle:ProductReview:_list.html.twig */
class __TwigTemplate_8644383af2c89c24b3cd5d3f05c22e31381e6f0f515e060754006e64c6e76204 extends Twig_Template
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
        $__internal_c708a5d56fa3913a5cb0baca62ec81bedb26fc96409b984b6f641ba4cab62010 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c708a5d56fa3913a5cb0baca62ec81bedb26fc96409b984b6f641ba4cab62010->enter($__internal_c708a5d56fa3913a5cb0baca62ec81bedb26fc96409b984b6f641ba4cab62010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:ProductReview:_list.html.twig"));

        $__internal_7a2752cace381ca240f9f689579f2e89a40316429ea23ea84fc34b32a7ee21d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a2752cace381ca240f9f689579f2e89a40316429ea23ea84fc34b32a7ee21d1->enter($__internal_7a2752cace381ca240f9f689579f2e89a40316429ea23ea84fc34b32a7ee21d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:ProductReview:_list.html.twig"));

        // line 1
        $context["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "SyliusShopBundle:ProductReview:_list.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        if ((twig_length_filter($this->env, ($context["product_reviews"] ?? $this->getContext($context, "product_reviews"))) > 0)) {
            // line 4
            echo "    <div class=\"ui large comments\">
        ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["product_reviews"] ?? $this->getContext($context, "product_reviews")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 6
                echo "            ";
                $this->loadTemplate("@SyliusShop/ProductReview/_single.html.twig", "SyliusShopBundle:ProductReview:_list.html.twig", 6)->display($context);
                // line 7
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    </div>
";
        } else {
            // line 10
            echo "    ";
            echo $context["messages"]->getinfo("sylius.ui.there_are_no_reviews");
            echo "
";
        }
        
        $__internal_c708a5d56fa3913a5cb0baca62ec81bedb26fc96409b984b6f641ba4cab62010->leave($__internal_c708a5d56fa3913a5cb0baca62ec81bedb26fc96409b984b6f641ba4cab62010_prof);

        
        $__internal_7a2752cace381ca240f9f689579f2e89a40316429ea23ea84fc34b32a7ee21d1->leave($__internal_7a2752cace381ca240f9f689579f2e89a40316429ea23ea84fc34b32a7ee21d1_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:ProductReview:_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 10,  69 => 8,  55 => 7,  52 => 6,  35 => 5,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
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

{% if product_reviews|length > 0 %}
    <div class=\"ui large comments\">
        {% for review in product_reviews %}
            {% include '@SyliusShop/ProductReview/_single.html.twig' %}
        {% endfor %}
    </div>
{% else %}
    {{ messages.info('sylius.ui.there_are_no_reviews') }}
{% endif %}
", "SyliusShopBundle:ProductReview:_list.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/ProductReview/_list.html.twig");
    }
}
