<?php

/* SyliusShopBundle:Account:dashboard.html.twig */
class __TwigTemplate_dc5774ac26f0e462ebd8d1c41cac5c831479b02085230c038789138c786388c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/Account/layout.html.twig", "SyliusShopBundle:Account:dashboard.html.twig", 1);
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
        $__internal_293e56db5fa8b1bfb8284ef32e5fa59321109d0d9111911186ea3a0eddfda25b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_293e56db5fa8b1bfb8284ef32e5fa59321109d0d9111911186ea3a0eddfda25b->enter($__internal_293e56db5fa8b1bfb8284ef32e5fa59321109d0d9111911186ea3a0eddfda25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account:dashboard.html.twig"));

        $__internal_d78ff4e09a9e96f4343104009773b26158c8dc6f75e05a59e51e6749805d0365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d78ff4e09a9e96f4343104009773b26158c8dc6f75e05a59e51e6749805d0365->enter($__internal_d78ff4e09a9e96f4343104009773b26158c8dc6f75e05a59e51e6749805d0365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account:dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_293e56db5fa8b1bfb8284ef32e5fa59321109d0d9111911186ea3a0eddfda25b->leave($__internal_293e56db5fa8b1bfb8284ef32e5fa59321109d0d9111911186ea3a0eddfda25b_prof);

        
        $__internal_d78ff4e09a9e96f4343104009773b26158c8dc6f75e05a59e51e6749805d0365->leave($__internal_d78ff4e09a9e96f4343104009773b26158c8dc6f75e05a59e51e6749805d0365_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_de7c8a2efb5e8aa4022c7efa19237f9ea07d32b3bde709641494d418ba7a1e01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de7c8a2efb5e8aa4022c7efa19237f9ea07d32b3bde709641494d418ba7a1e01->enter($__internal_de7c8a2efb5e8aa4022c7efa19237f9ea07d32b3bde709641494d418ba7a1e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_1d2560e5463a4b9bb6d9d8c8a3b4c289589d85bb7b769cc44affb89d4933a1e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d2560e5463a4b9bb6d9d8c8a3b4c289589d85bb7b769cc44affb89d4933a1e6->enter($__internal_1d2560e5463a4b9bb6d9d8c8a3b4c289589d85bb7b769cc44affb89d4933a1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_1d2560e5463a4b9bb6d9d8c8a3b4c289589d85bb7b769cc44affb89d4933a1e6->leave($__internal_1d2560e5463a4b9bb6d9d8c8a3b4c289589d85bb7b769cc44affb89d4933a1e6_prof);

        
        $__internal_de7c8a2efb5e8aa4022c7efa19237f9ea07d32b3bde709641494d418ba7a1e01->leave($__internal_de7c8a2efb5e8aa4022c7efa19237f9ea07d32b3bde709641494d418ba7a1e01_prof);

    }

    // line 11
    public function block_subcontent($context, array $blocks = array())
    {
        $__internal_0311a04a0873f78cf531083456acc8423ce87777f61909817bfc8534e6a02aca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0311a04a0873f78cf531083456acc8423ce87777f61909817bfc8534e6a02aca->enter($__internal_0311a04a0873f78cf531083456acc8423ce87777f61909817bfc8534e6a02aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subcontent"));

        $__internal_c1a42644a83b5e707934c0373ce91fc72f743284f833d375276c2b208d055e45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1a42644a83b5e707934c0373ce91fc72f743284f833d375276c2b208d055e45->enter($__internal_c1a42644a83b5e707934c0373ce91fc72f743284f833d375276c2b208d055e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subcontent"));

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
        
        $__internal_c1a42644a83b5e707934c0373ce91fc72f743284f833d375276c2b208d055e45->leave($__internal_c1a42644a83b5e707934c0373ce91fc72f743284f833d375276c2b208d055e45_prof);

        
        $__internal_0311a04a0873f78cf531083456acc8423ce87777f61909817bfc8534e6a02aca->leave($__internal_0311a04a0873f78cf531083456acc8423ce87777f61909817bfc8534e6a02aca_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account:dashboard.html.twig";
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
", "SyliusShopBundle:Account:dashboard.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/dashboard.html.twig");
    }
}
