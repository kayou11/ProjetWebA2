<?php

/* SyliusShopBundle:Account/AddressBook:index.html.twig */
class __TwigTemplate_b7b977639fc4eff1efd3a05bafa360a13918d3ddd19bfa07ad1438368b80be3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/Account/AddressBook/layout.html.twig", "SyliusShopBundle:Account/AddressBook:index.html.twig", 1);
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
        $__internal_fe395a6a4e76b0444e93e3456c17cde12a6d5a69cae753746d1c20ffe3395ec1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe395a6a4e76b0444e93e3456c17cde12a6d5a69cae753746d1c20ffe3395ec1->enter($__internal_fe395a6a4e76b0444e93e3456c17cde12a6d5a69cae753746d1c20ffe3395ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/AddressBook:index.html.twig"));

        $__internal_a48a772b67a2ec3cb163efd4701e4789228489a45d6ce2f01ec67d575e1f789b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a48a772b67a2ec3cb163efd4701e4789228489a45d6ce2f01ec67d575e1f789b->enter($__internal_a48a772b67a2ec3cb163efd4701e4789228489a45d6ce2f01ec67d575e1f789b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/AddressBook:index.html.twig"));

        // line 3
        $context["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "SyliusShopBundle:Account/AddressBook:index.html.twig", 3);
        // line 4
        $context["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "SyliusShopBundle:Account/AddressBook:index.html.twig", 4);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe395a6a4e76b0444e93e3456c17cde12a6d5a69cae753746d1c20ffe3395ec1->leave($__internal_fe395a6a4e76b0444e93e3456c17cde12a6d5a69cae753746d1c20ffe3395ec1_prof);

        
        $__internal_a48a772b67a2ec3cb163efd4701e4789228489a45d6ce2f01ec67d575e1f789b->leave($__internal_a48a772b67a2ec3cb163efd4701e4789228489a45d6ce2f01ec67d575e1f789b_prof);

    }

    // line 6
    public function block_subcontent($context, array $blocks = array())
    {
        $__internal_ae3f287942766aa0edc85d0433dd1c46a88fbe7c7ba16461713d9c5149cbf259 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae3f287942766aa0edc85d0433dd1c46a88fbe7c7ba16461713d9c5149cbf259->enter($__internal_ae3f287942766aa0edc85d0433dd1c46a88fbe7c7ba16461713d9c5149cbf259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subcontent"));

        $__internal_b3e33ca71a39b306c7a6bb88316bc065efcd891348d69d22d91377af8dee981a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3e33ca71a39b306c7a6bb88316bc065efcd891348d69d22d91377af8dee981a->enter($__internal_b3e33ca71a39b306c7a6bb88316bc065efcd891348d69d22d91377af8dee981a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subcontent"));

        // line 7
        echo "    <div class=\"ui stackable two column grid\">
        <div class=\"column\">
            <h1 class=\"ui header\">
                ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.address_book"), "html", null, true);
        echo "
                <div class=\"sub header\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.manage_your_saved_addresses"), "html", null, true);
        echo "</div>
            </h1>

            ";
        // line 14
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.address_book.index.after_content_header", array("addresses" => ($context["addresses"] ?? $this->getContext($context, "addresses")))));
        echo "
        </div>
        <div class=\"middle aligned column\">
            <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_account_address_book_create");
        echo "\" class=\"ui right floated blue button\"><i class=\"circle plus icon\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.add_address"), "html", null, true);
        echo "</a>

            ";
        // line 19
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.address_book.index.after_add_address_button", array("addresses" => ($context["addresses"] ?? $this->getContext($context, "addresses")))));
        echo "
        </div>
    </div>

    ";
        // line 23
        if ((twig_length_filter($this->env, ($context["addresses"] ?? $this->getContext($context, "addresses"))) > 0)) {
            // line 24
            echo "        ";
            $context["default_address"] = $this->getAttribute($this->getAttribute(($context["sylius"] ?? $this->getContext($context, "sylius")), "customer", array()), "defaultAddress", array());
            // line 25
            echo "        ";
            if ( !(null === ($context["default_address"] ?? $this->getContext($context, "default_address")))) {
                // line 26
                echo "            ";
                $this->loadTemplate("@SyliusShop/Account/AddressBook/_defaultAddress.html.twig", "SyliusShopBundle:Account/AddressBook:index.html.twig", 26)->display(array_merge($context, array("address" => ($context["default_address"] ?? $this->getContext($context, "default_address")))));
                // line 27
                echo "        ";
            }
            // line 28
            echo "    <div class=\"ui stackable grid\" id=\"sylius-addresses\">
        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? $this->getContext($context, "addresses")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                if (((null === ($context["default_address"] ?? $this->getContext($context, "default_address"))) || ($this->getAttribute($context["address"], "id", array()) != $this->getAttribute(($context["default_address"] ?? $this->getContext($context, "default_address")), "id", array())))) {
                    // line 30
                    echo "            ";
                    $this->loadTemplate("@SyliusShop/Account/AddressBook/_item.html.twig", "SyliusShopBundle:Account/AddressBook:index.html.twig", 30)->display($context);
                    // line 31
                    echo "        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "    </div>
    ";
        } else {
            // line 34
            echo "        ";
            echo $context["messages"]->getinfo("sylius.ui.you_have_no_addresses_defined");
            echo "
    ";
        }
        
        $__internal_b3e33ca71a39b306c7a6bb88316bc065efcd891348d69d22d91377af8dee981a->leave($__internal_b3e33ca71a39b306c7a6bb88316bc065efcd891348d69d22d91377af8dee981a_prof);

        
        $__internal_ae3f287942766aa0edc85d0433dd1c46a88fbe7c7ba16461713d9c5149cbf259->leave($__internal_ae3f287942766aa0edc85d0433dd1c46a88fbe7c7ba16461713d9c5149cbf259_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account/AddressBook:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 34,  130 => 32,  120 => 31,  117 => 30,  106 => 29,  103 => 28,  100 => 27,  97 => 26,  94 => 25,  91 => 24,  89 => 23,  82 => 19,  75 => 17,  69 => 14,  63 => 11,  59 => 10,  54 => 7,  45 => 6,  35 => 1,  33 => 4,  31 => 3,  11 => 1,);
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

{% import '@SyliusUi/Macro/messages.html.twig' as messages %}
{% import '@SyliusUi/Macro/buttons.html.twig' as buttons %}

{% block subcontent %}
    <div class=\"ui stackable two column grid\">
        <div class=\"column\">
            <h1 class=\"ui header\">
                {{ 'sylius.ui.address_book'|trans }}
                <div class=\"sub header\">{{ 'sylius.ui.manage_your_saved_addresses'|trans }}</div>
            </h1>

            {{ sonata_block_render_event('sylius.shop.account.address_book.index.after_content_header', {'addresses': addresses}) }}
        </div>
        <div class=\"middle aligned column\">
            <a href=\"{{ path('sylius_shop_account_address_book_create') }}\" class=\"ui right floated blue button\"><i class=\"circle plus icon\"></i> {{ 'sylius.ui.add_address'|trans }}</a>

            {{ sonata_block_render_event('sylius.shop.account.address_book.index.after_add_address_button', {'addresses': addresses}) }}
        </div>
    </div>

    {% if addresses|length > 0 %}
        {% set default_address = (sylius.customer.defaultAddress) %}
        {% if default_address is not null %}
            {% include '@SyliusShop/Account/AddressBook/_defaultAddress.html.twig' with {'address': default_address} %}
        {% endif %}
    <div class=\"ui stackable grid\" id=\"sylius-addresses\">
        {% for address in addresses if default_address is null or address.id != default_address.id %}
            {% include '@SyliusShop/Account/AddressBook/_item.html.twig' %}
        {% endfor %}
    </div>
    {% else %}
        {{ messages.info('sylius.ui.you_have_no_addresses_defined') }}
    {% endif %}
{% endblock %}
", "SyliusShopBundle:Account/AddressBook:index.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/AddressBook/index.html.twig");
    }
}
