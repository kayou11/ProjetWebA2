<?php

/* SyliusShopBundle:Account/AddressBook:_item.html.twig */
class __TwigTemplate_3739779f5a555845e682108154971ad8bb796e9c0afcec91aa85e8f6680bf7e0 extends Twig_Template
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
        $__internal_8ed5297db86419c5d0212a73c5216351960ff00cb32ff6850d8c39d3737e14a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ed5297db86419c5d0212a73c5216351960ff00cb32ff6850d8c39d3737e14a9->enter($__internal_8ed5297db86419c5d0212a73c5216351960ff00cb32ff6850d8c39d3737e14a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/AddressBook:_item.html.twig"));

        $__internal_5548d68eff7c4deb0a7af87383d7de22b9db1ad7ec0a8d223d320de368f66437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5548d68eff7c4deb0a7af87383d7de22b9db1ad7ec0a8d223d320de368f66437->enter($__internal_5548d68eff7c4deb0a7af87383d7de22b9db1ad7ec0a8d223d320de368f66437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/AddressBook:_item.html.twig"));

        // line 1
        echo "<div class=\"eight wide column\">
    <div class=\"ui segment address\">
        <div class=\"ui stackable two column grid\">
            <div class=\"column\">
                ";
        // line 5
        $this->loadTemplate("@SyliusShop/Common/_address.html.twig", "SyliusShopBundle:Account/AddressBook:_item.html.twig", 5)->display(array_merge($context, array("address" => ($context["address"] ?? $this->getContext($context, "address")))));
        // line 6
        echo "            </div>
            <div class=\"right aligned column\">
                <div class=\"ui vertical small icon labeled buttons\">
                    ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["buttons"] ?? $this->getContext($context, "buttons")), "edit", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_account_address_book_update", array("id" => $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "id", array())))), "method"), "html", null, true);
        echo "
                    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_account_address_book_set_as_default", array("id" => $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "id", array()))));
        echo "
                    ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["buttons"] ?? $this->getContext($context, "buttons")), "delete", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_account_address_book_delete", array("id" => $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "id", array()))), 1 => null, 2 => true, 3 => $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "id", array())), "method"), "html", null, true);
        echo "
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_8ed5297db86419c5d0212a73c5216351960ff00cb32ff6850d8c39d3737e14a9->leave($__internal_8ed5297db86419c5d0212a73c5216351960ff00cb32ff6850d8c39d3737e14a9_prof);

        
        $__internal_5548d68eff7c4deb0a7af87383d7de22b9db1ad7ec0a8d223d320de368f66437->leave($__internal_5548d68eff7c4deb0a7af87383d7de22b9db1ad7ec0a8d223d320de368f66437_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account/AddressBook:_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  42 => 10,  38 => 9,  33 => 6,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"eight wide column\">
    <div class=\"ui segment address\">
        <div class=\"ui stackable two column grid\">
            <div class=\"column\">
                {% include '@SyliusShop/Common/_address.html.twig' with {'address': address} %}
            </div>
            <div class=\"right aligned column\">
                <div class=\"ui vertical small icon labeled buttons\">
                    {{ buttons.edit(path('sylius_shop_account_address_book_update', {'id': address.id})) }}
                    {{ render(path('sylius_shop_account_address_book_set_as_default', {'id': address.id})) }}
                    {{ buttons.delete(path('sylius_shop_account_address_book_delete', {'id': address.id}), null, true, address.id) }}
                </div>
            </div>
        </div>
    </div>
</div>
", "SyliusShopBundle:Account/AddressBook:_item.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/AddressBook/_item.html.twig");
    }
}
