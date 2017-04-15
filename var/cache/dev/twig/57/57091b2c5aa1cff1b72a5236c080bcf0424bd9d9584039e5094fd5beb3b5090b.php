<?php

/* SyliusShopBundle:Common/Order/Table:_items.html.twig */
class __TwigTemplate_a04b5cfc8a33f76c1681df4f2112e998d526ae26af47faaed9196826eab732dc extends Twig_Template
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
        $__internal_a6bdf1747219f93a889748d6f51d30fdbd1224869974f5f7b3cba6bc328b6442 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6bdf1747219f93a889748d6f51d30fdbd1224869974f5f7b3cba6bc328b6442->enter($__internal_a6bdf1747219f93a889748d6f51d30fdbd1224869974f5f7b3cba6bc328b6442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order/Table:_items.html.twig"));

        $__internal_03fb0775ca11c8b10d92bdad3bf65ecd5c819f5a07c64010a386111d99fb00d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03fb0775ca11c8b10d92bdad3bf65ecd5c819f5a07c64010a386111d99fb00d8->enter($__internal_03fb0775ca11c8b10d92bdad3bf65ecd5c819f5a07c64010a386111d99fb00d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order/Table:_items.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "items", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "    ";
            $this->loadTemplate("@SyliusShop/Common/Order/Table/_item.html.twig", "SyliusShopBundle:Common/Order/Table:_items.html.twig", 2)->display($context);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_a6bdf1747219f93a889748d6f51d30fdbd1224869974f5f7b3cba6bc328b6442->leave($__internal_a6bdf1747219f93a889748d6f51d30fdbd1224869974f5f7b3cba6bc328b6442_prof);

        
        $__internal_03fb0775ca11c8b10d92bdad3bf65ecd5c819f5a07c64010a386111d99fb00d8->leave($__internal_03fb0775ca11c8b10d92bdad3bf65ecd5c819f5a07c64010a386111d99fb00d8_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Common/Order/Table:_items.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for item in order.items %}
    {% include '@SyliusShop/Common/Order/Table/_item.html.twig' %}
{% endfor %}
", "SyliusShopBundle:Common/Order/Table:_items.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Common/Order/Table/_items.html.twig");
    }
}
