<?php

/* @SyliusShop/Account/dashboard.html.twig */
class __TwigTemplate_a4523b536cdeb46789b0413e9350e3c3d1519c1d9e5b48055658dd66b8a46937 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/Account/layout.html.twig", "@SyliusShop/Account/dashboard.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'subcontent' => array($this, 'block_subcontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/Account/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71c2a73736f0c1ca1bfe0639c8b6ea9d625b41b5827431c7546ccef9393ceef3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71c2a73736f0c1ca1bfe0639c8b6ea9d625b41b5827431c7546ccef9393ceef3->enter($__internal_71c2a73736f0c1ca1bfe0639c8b6ea9d625b41b5827431c7546ccef9393ceef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Account/dashboard.html.twig"));

        $__internal_1169e48e4e85f339ab707089a1f7cd150ff26a8a1a0a104e92312efddf2f9147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1169e48e4e85f339ab707089a1f7cd150ff26a8a1a0a104e92312efddf2f9147->enter($__internal_1169e48e4e85f339ab707089a1f7cd150ff26a8a1a0a104e92312efddf2f9147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Account/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71c2a73736f0c1ca1bfe0639c8b6ea9d625b41b5827431c7546ccef9393ceef3->leave($__internal_71c2a73736f0c1ca1bfe0639c8b6ea9d625b41b5827431c7546ccef9393ceef3_prof);

        
        $__internal_1169e48e4e85f339ab707089a1f7cd150ff26a8a1a0a104e92312efddf2f9147->leave($__internal_1169e48e4e85f339ab707089a1f7cd150ff26a8a1a0a104e92312efddf2f9147_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_9fb66866a2fb2e3bb36057f61da0c616ea8293707e68dad2ba66e5e9182c6fcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fb66866a2fb2e3bb36057f61da0c616ea8293707e68dad2ba66e5e9182c6fcd->enter($__internal_9fb66866a2fb2e3bb36057f61da0c616ea8293707e68dad2ba66e5e9182c6fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_ff87d1ef06b640b1c0fd392f3cb67089b07b29c843a91a54e556ccdfee5966cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff87d1ef06b640b1c0fd392f3cb67089b07b29c843a91a54e556ccdfee5966cb->enter($__internal_ff87d1ef06b640b1c0fd392f3cb67089b07b29c843a91a54e556ccdfee5966cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "    <div class=\"ui breadcrumb\">
        <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_homepage");
        echo "\" class=\"section\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.home"), "html", null, true);
        echo "</a>
        <div class=\"divider\"> / </div>
        <div class=\"active section\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.my_account"), "html", null, true);
        echo "</div>
    </div>
";
        
        $__internal_ff87d1ef06b640b1c0fd392f3cb67089b07b29c843a91a54e556ccdfee5966cb->leave($__internal_ff87d1ef06b640b1c0fd392f3cb67089b07b29c843a91a54e556ccdfee5966cb_prof);

        
        $__internal_9fb66866a2fb2e3bb36057f61da0c616ea8293707e68dad2ba66e5e9182c6fcd->leave($__internal_9fb66866a2fb2e3bb36057f61da0c616ea8293707e68dad2ba66e5e9182c6fcd_prof);

    }

    // line 11
    public function block_subcontent($context, array $blocks = array())
    {
        $__internal_83beb94ff456fd365e195ca355c0309e38b881e0eaaffe3a3429aad0fc0614f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83beb94ff456fd365e195ca355c0309e38b881e0eaaffe3a3429aad0fc0614f7->enter($__internal_83beb94ff456fd365e195ca355c0309e38b881e0eaaffe3a3429aad0fc0614f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subcontent"));

        $__internal_35900e925707971bc16b7f63861e224e5e25411b0a5473994a196e0ccf3f4b87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35900e925707971bc16b7f63861e224e5e25411b0a5473994a196e0ccf3f4b87->enter($__internal_35900e925707971bc16b7f63861e224e5e25411b0a5473994a196e0ccf3f4b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subcontent"));

        // line 12
        echo "    <h1 class=\"ui dividing header\">
        ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.my_account"), "html", null, true);
        echo "
        <div class=\"sub header\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.manage_your_personal_information_and_preferences"), "html", null, true);
        echo "</div>
    </h1>

    ";
        // line 17
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.dashboard.after_content_header", array("customer" => ($context["customer"] ?? $this->getContext($context, "customer")))));
        echo "

    <div class=\"ui large list\" id=\"customer-information\">
        <div class=\"item\">
            ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "fullName", array()), "html", null, true);
        echo "
        </div>
        <div class=\"item\">
            <strong>
                ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "email", array()), "html", null, true);
        echo "
            </strong>
        </div>
        <div class=\"item\">
            ";
        // line 29
        if ($this->getAttribute($this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "user", array()), "verified", array())) {
            // line 30
            echo "                <span class=\"ui icon green basic label\"><i class=\"checkmark icon\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.verified"), "html", null, true);
            echo "</span>
            ";
        } else {
            // line 32
            echo "                <span class=\"ui icon red basic label\"><i class=\"remove icon\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.not_verified"), "html", null, true);
            echo "</span>
            ";
        }
        // line 34
        echo "        </div>
    </div>

    ";
        // line 37
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.dashboard.after_information", array("customer" => ($context["customer"] ?? $this->getContext($context, "customer")))));
        echo "

    <div class=\"ui text menu\">
        <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_account_profile_update");
        echo "\" class=\"item\"><i class=\"pencil icon\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.edit"), "html", null, true);
        echo "</a>
        <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_account_change_password");
        echo "\" class=\"item\"><i class=\"lock icon\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.change_password"), "html", null, true);
        echo "</a>
        ";
        // line 42
        if ( !$this->getAttribute($this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "user", array()), "verified", array())) {
            // line 43
            echo "            <form class=\"item\" id=\"verification-form\" action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_user_request_verification_token");
            echo "\" method=\"post\">
                <button type=\"submit\" class=\"ui basic icon mini button\">
                    <i class=\"checkmark icon\"></i> ";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.verify"), "html", null, true);
            echo "
                </button>
            </form>
        ";
        }
        // line 49
        echo "    </div>
";
        
        $__internal_35900e925707971bc16b7f63861e224e5e25411b0a5473994a196e0ccf3f4b87->leave($__internal_35900e925707971bc16b7f63861e224e5e25411b0a5473994a196e0ccf3f4b87_prof);

        
        $__internal_83beb94ff456fd365e195ca355c0309e38b881e0eaaffe3a3429aad0fc0614f7->leave($__internal_83beb94ff456fd365e195ca355c0309e38b881e0eaaffe3a3429aad0fc0614f7_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Account/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 49,  161 => 45,  155 => 43,  153 => 42,  147 => 41,  141 => 40,  135 => 37,  130 => 34,  124 => 32,  118 => 30,  116 => 29,  109 => 25,  102 => 21,  95 => 17,  89 => 14,  85 => 13,  82 => 12,  73 => 11,  60 => 7,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/Account/layout.html.twig' %}

{% block breadcrumb %}
    <div class=\"ui breadcrumb\">
        <a href=\"{{ path('sylius_shop_homepage') }}\" class=\"section\">{{ 'sylius.ui.home'|trans }}</a>
        <div class=\"divider\"> / </div>
        <div class=\"active section\">{{ 'sylius.ui.my_account'|trans }}</div>
    </div>
{% endblock %}

{% block subcontent %}
    <h1 class=\"ui dividing header\">
        {{ 'sylius.ui.my_account'|trans }}
        <div class=\"sub header\">{{ 'sylius.ui.manage_your_personal_information_and_preferences'|trans }}</div>
    </h1>

    {{ sonata_block_render_event('sylius.shop.account.dashboard.after_content_header', {'customer': customer}) }}

    <div class=\"ui large list\" id=\"customer-information\">
        <div class=\"item\">
            {{ customer.fullName }}
        </div>
        <div class=\"item\">
            <strong>
                {{ customer.email }}
            </strong>
        </div>
        <div class=\"item\">
            {% if customer.user.verified %}
                <span class=\"ui icon green basic label\"><i class=\"checkmark icon\"></i> {{ 'sylius.ui.verified'|trans }}</span>
            {% else %}
                <span class=\"ui icon red basic label\"><i class=\"remove icon\"></i> {{ 'sylius.ui.not_verified'|trans }}</span>
            {% endif %}
        </div>
    </div>

    {{ sonata_block_render_event('sylius.shop.account.dashboard.after_information', {'customer': customer}) }}

    <div class=\"ui text menu\">
        <a href=\"{{ path('sylius_shop_account_profile_update') }}\" class=\"item\"><i class=\"pencil icon\"></i> {{ 'sylius.ui.edit'|trans }}</a>
        <a href=\"{{ path('sylius_shop_account_change_password') }}\" class=\"item\"><i class=\"lock icon\"></i> {{ 'sylius.ui.change_password'|trans }}</a>
        {% if not customer.user.verified %}
            <form class=\"item\" id=\"verification-form\" action=\"{{ path('sylius_shop_user_request_verification_token') }}\" method=\"post\">
                <button type=\"submit\" class=\"ui basic icon mini button\">
                    <i class=\"checkmark icon\"></i> {{ 'sylius.ui.verify'|trans }}
                </button>
            </form>
        {% endif %}
    </div>
{% endblock %}
", "@SyliusShop/Account/dashboard.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/dashboard.html.twig");
    }
}
