<?php

/* SyliusShopBundle:Checkout:address.html.twig */
class __TwigTemplate_02f325d8fa7185537ef7d3659e2ed81f93060d64d0d39d1e161eccabae2f0a47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/Checkout/layout.html.twig", "SyliusShopBundle:Checkout:address.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/Checkout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3a0a6a91d65f73e37bf125d7c955284a1629ff8ece3ca7b600f04c685401d51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3a0a6a91d65f73e37bf125d7c955284a1629ff8ece3ca7b600f04c685401d51->enter($__internal_d3a0a6a91d65f73e37bf125d7c955284a1629ff8ece3ca7b600f04c685401d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout:address.html.twig"));

        $__internal_cd5afc77bca3cd870bef7ceb687bd99d0b9a014166cc88ba99e62b735fbdac88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd5afc77bca3cd870bef7ceb687bd99d0b9a014166cc88ba99e62b735fbdac88->enter($__internal_cd5afc77bca3cd870bef7ceb687bd99d0b9a014166cc88ba99e62b735fbdac88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout:address.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "@SyliusUi/Form/theme.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3a0a6a91d65f73e37bf125d7c955284a1629ff8ece3ca7b600f04c685401d51->leave($__internal_d3a0a6a91d65f73e37bf125d7c955284a1629ff8ece3ca7b600f04c685401d51_prof);

        
        $__internal_cd5afc77bca3cd870bef7ceb687bd99d0b9a014166cc88ba99e62b735fbdac88->leave($__internal_cd5afc77bca3cd870bef7ceb687bd99d0b9a014166cc88ba99e62b735fbdac88_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_f8c8add0ff11379049287b0a6f54a552d950b840b767e4770ad8eb17edb847d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8c8add0ff11379049287b0a6f54a552d950b840b767e4770ad8eb17edb847d6->enter($__internal_f8c8add0ff11379049287b0a6f54a552d950b840b767e4770ad8eb17edb847d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b0e715799126c736987ba07713296f388c04fcf3d0b5992f8a6dec5155a48881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0e715799126c736987ba07713296f388c04fcf3d0b5992f8a6dec5155a48881->enter($__internal_b0e715799126c736987ba07713296f388c04fcf3d0b5992f8a6dec5155a48881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    ";
        $this->loadTemplate("@SyliusShop/Checkout/_steps.html.twig", "SyliusShopBundle:Checkout:address.html.twig", 6)->display($context);
        // line 7
        echo "
    ";
        // line 8
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.address.after_steps", array("order" => ($context["order"] ?? $this->getContext($context, "order")))));
        echo "

    <div class=\"ui stackable grid\">
        <div class=\"eleven wide column\">
            <div class=\"ui segment\">
                ";
        // line 13
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.address.before_form", array("order" => ($context["order"] ?? $this->getContext($context, "order")))));
        echo "

                ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_checkout_address"), "attr" => array("class" => "ui loadable form", "novalidate" => "novalidate")));
        echo "
                    <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

                    ";
        // line 18
        $this->loadTemplate("@SyliusShop/Checkout/Address/_form.html.twig", "SyliusShopBundle:Checkout:address.html.twig", 18)->display($context);
        // line 19
        echo "                    <div class=\"ui hidden divider\"></div>

                    ";
        // line 21
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.address.before_navigation", array("order" => ($context["order"] ?? $this->getContext($context, "order")))));
        echo "

                    ";
        // line 23
        $this->loadTemplate("@SyliusShop/Checkout/Address/_navigation.html.twig", "SyliusShopBundle:Checkout:address.html.twig", 23)->display($context);
        // line 24
        echo "
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
                ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
            </div>
        </div>
        <div class=\"five wide column\">
            ";
        // line 30
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.address.before_summary", array("order" => ($context["order"] ?? $this->getContext($context, "order")))));
        echo "

            ";
        // line 32
        $this->loadTemplate("@SyliusShop/Checkout/_summary.html.twig", "SyliusShopBundle:Checkout:address.html.twig", 32)->display(array_merge($context, array("order" => ($context["order"] ?? $this->getContext($context, "order")))));
        // line 33
        echo "
            ";
        // line 34
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.address.before_support", array("order" => ($context["order"] ?? $this->getContext($context, "order")))));
        echo "

            ";
        // line 36
        $this->loadTemplate("@SyliusShop/Checkout/_support.html.twig", "SyliusShopBundle:Checkout:address.html.twig", 36)->display($context);
        // line 37
        echo "
            ";
        // line 38
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.checkout.address.after_support", array("order" => ($context["order"] ?? $this->getContext($context, "order")))));
        echo "
        </div>
    </div>
";
        
        $__internal_b0e715799126c736987ba07713296f388c04fcf3d0b5992f8a6dec5155a48881->leave($__internal_b0e715799126c736987ba07713296f388c04fcf3d0b5992f8a6dec5155a48881_prof);

        
        $__internal_f8c8add0ff11379049287b0a6f54a552d950b840b767e4770ad8eb17edb847d6->leave($__internal_f8c8add0ff11379049287b0a6f54a552d950b840b767e4770ad8eb17edb847d6_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout:address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 38,  121 => 37,  119 => 36,  114 => 34,  111 => 33,  109 => 32,  104 => 30,  97 => 26,  93 => 25,  90 => 24,  88 => 23,  83 => 21,  79 => 19,  77 => 18,  71 => 15,  66 => 13,  58 => 8,  55 => 7,  52 => 6,  43 => 5,  33 => 1,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/Checkout/layout.html.twig' %}

{% form_theme form '@SyliusUi/Form/theme.html.twig' %}

{% block content %}
    {% include '@SyliusShop/Checkout/_steps.html.twig' %}

    {{ sonata_block_render_event('sylius.shop.checkout.address.after_steps', {'order': order}) }}

    <div class=\"ui stackable grid\">
        <div class=\"eleven wide column\">
            <div class=\"ui segment\">
                {{ sonata_block_render_event('sylius.shop.checkout.address.before_form', {'order': order}) }}

                {{ form_start(form, {'action': path('sylius_shop_checkout_address'), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
                    <input type=\"hidden\" name=\"_method\" value=\"PUT\" />

                    {% include '@SyliusShop/Checkout/Address/_form.html.twig' %}
                    <div class=\"ui hidden divider\"></div>

                    {{ sonata_block_render_event('sylius.shop.checkout.address.before_navigation', {'order': order}) }}

                    {% include '@SyliusShop/Checkout/Address/_navigation.html.twig' %}

                    {{ form_row(form._token) }}
                {{ form_end(form, {'render_rest': false}) }}
            </div>
        </div>
        <div class=\"five wide column\">
            {{ sonata_block_render_event('sylius.shop.checkout.address.before_summary', {'order': order}) }}

            {% include '@SyliusShop/Checkout/_summary.html.twig' with {'order': order} %}

            {{ sonata_block_render_event('sylius.shop.checkout.address.before_support', {'order': order}) }}

            {% include '@SyliusShop/Checkout/_support.html.twig' %}

            {{ sonata_block_render_event('sylius.shop.checkout.address.after_support', {'order': order}) }}
        </div>
    </div>
{% endblock %}
", "SyliusShopBundle:Checkout:address.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/address.html.twig");
    }
}
