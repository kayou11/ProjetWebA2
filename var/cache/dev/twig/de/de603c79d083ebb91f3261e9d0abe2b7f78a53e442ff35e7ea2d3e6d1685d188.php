<?php

/* SyliusShopBundle:Account/AddressBook:update.html.twig */
class __TwigTemplate_54814cd920dc9bcb964ef7330d64e56ba4f2402dd84970096959f145bb185621 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/Account/AddressBook/layout.html.twig", "SyliusShopBundle:Account/AddressBook:update.html.twig", 1);
        $this->blocks = array(
            'subcontent' => array($this, 'block_subcontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/Account/AddressBook/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e5b51c1f746750430ad2a9655df44dddcc9de16ff20ce7d75ebd5dd2036f116 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e5b51c1f746750430ad2a9655df44dddcc9de16ff20ce7d75ebd5dd2036f116->enter($__internal_7e5b51c1f746750430ad2a9655df44dddcc9de16ff20ce7d75ebd5dd2036f116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/AddressBook:update.html.twig"));

        $__internal_799e106e3529af82438e4737d6397a0ac1d3c18089f91579b90cad66b1808893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_799e106e3529af82438e4737d6397a0ac1d3c18089f91579b90cad66b1808893->enter($__internal_799e106e3529af82438e4737d6397a0ac1d3c18089f91579b90cad66b1808893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/AddressBook:update.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "@SyliusUi/Form/theme.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e5b51c1f746750430ad2a9655df44dddcc9de16ff20ce7d75ebd5dd2036f116->leave($__internal_7e5b51c1f746750430ad2a9655df44dddcc9de16ff20ce7d75ebd5dd2036f116_prof);

        
        $__internal_799e106e3529af82438e4737d6397a0ac1d3c18089f91579b90cad66b1808893->leave($__internal_799e106e3529af82438e4737d6397a0ac1d3c18089f91579b90cad66b1808893_prof);

    }

    // line 5
    public function block_subcontent($context, array $blocks = array())
    {
        $__internal_b9880013adcf4e3590feeca9d8142beb107d7f53712c7d9a7a4a4e74ebec1de8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9880013adcf4e3590feeca9d8142beb107d7f53712c7d9a7a4a4e74ebec1de8->enter($__internal_b9880013adcf4e3590feeca9d8142beb107d7f53712c7d9a7a4a4e74ebec1de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subcontent"));

        $__internal_b72056c8c9aee075b7da0985b71cd4cf13083d307adfc4c34f2a979a4ebf36b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b72056c8c9aee075b7da0985b71cd4cf13083d307adfc4c34f2a979a4ebf36b6->enter($__internal_b72056c8c9aee075b7da0985b71cd4cf13083d307adfc4c34f2a979a4ebf36b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subcontent"));

        // line 6
        echo "    <div class=\"ui segment\">
        <h1 class=\"ui dividing header\">
            ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.address_book"), "html", null, true);
        echo "
            <div class=\"sub header\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.edit_my_address"), "html", null, true);
        echo "</div>
        </h1>

        ";
        // line 12
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.address_book.create.after_content_header", array("address" => ($context["address"] ?? $this->getContext($context, "address")))));
        echo "

        ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_account_address_book_update", array("id" => $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "id", array()))), "method" => "PUT", "attr" => array("class" => "ui loadable form", "novalidate" => "novalidate")));
        echo "

        ";
        // line 16
        $this->loadTemplate("@SyliusShop/Common/Form/_address.html.twig", "SyliusShopBundle:Account/AddressBook:update.html.twig", 16)->display(array_merge($context, array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        // line 17
        echo "
        <div class=\"ui two column grid\">
            <div class=\"column\">
                <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_account_address_book_index");
        echo "\" class=\"ui large icon labeled button\">
                    <i class=\"left arrow icon\"></i> ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.cancel"), "html", null, true);
        echo "
                </a>
            </div>
            <div class=\"right aligned column\">
                <button type=\"submit\" class=\"ui large icon labeled blue button\">
                    <i class=\"icon save\"></i> ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.save_changes"), "html", null, true);
        echo "
                </button>
            </div>
        </div>

        ";
        // line 31
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.address_book.update.form", array("address" => ($context["address"] ?? $this->getContext($context, "address")))));
        echo "

        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
        ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
    </div>
";
        
        $__internal_b72056c8c9aee075b7da0985b71cd4cf13083d307adfc4c34f2a979a4ebf36b6->leave($__internal_b72056c8c9aee075b7da0985b71cd4cf13083d307adfc4c34f2a979a4ebf36b6_prof);

        
        $__internal_b9880013adcf4e3590feeca9d8142beb107d7f53712c7d9a7a4a4e74ebec1de8->leave($__internal_b9880013adcf4e3590feeca9d8142beb107d7f53712c7d9a7a4a4e74ebec1de8_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account/AddressBook:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 34,  108 => 33,  103 => 31,  95 => 26,  87 => 21,  83 => 20,  78 => 17,  76 => 16,  71 => 14,  66 => 12,  60 => 9,  56 => 8,  52 => 6,  43 => 5,  33 => 1,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/Account/AddressBook/layout.html.twig' %}

{% form_theme form '@SyliusUi/Form/theme.html.twig' %}

{% block subcontent %}
    <div class=\"ui segment\">
        <h1 class=\"ui dividing header\">
            {{ 'sylius.ui.address_book'|trans }}
            <div class=\"sub header\">{{ 'sylius.ui.edit_my_address'|trans }}</div>
        </h1>

        {{ sonata_block_render_event('sylius.shop.account.address_book.create.after_content_header', {'address': address}) }}

        {{ form_start(form, {'action': path('sylius_shop_account_address_book_update', {'id': address.id}), 'method': 'PUT', 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}

        {% include '@SyliusShop/Common/Form/_address.html.twig' with {'form': form} %}

        <div class=\"ui two column grid\">
            <div class=\"column\">
                <a href=\"{{ path('sylius_shop_account_address_book_index') }}\" class=\"ui large icon labeled button\">
                    <i class=\"left arrow icon\"></i> {{ 'sylius.ui.cancel'|trans }}
                </a>
            </div>
            <div class=\"right aligned column\">
                <button type=\"submit\" class=\"ui large icon labeled blue button\">
                    <i class=\"icon save\"></i> {{ 'sylius.ui.save_changes'|trans }}
                </button>
            </div>
        </div>

        {{ sonata_block_render_event('sylius.shop.account.address_book.update.form', {'address': address}) }}

        {{ form_row(form._token) }}
        {{ form_end(form, {'render_rest': false}) }}
    </div>
{% endblock %}
", "SyliusShopBundle:Account/AddressBook:update.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/AddressBook/update.html.twig");
    }
}
