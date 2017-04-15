<?php

/* SyliusShopBundle:ProductReview:create.html.twig */
class __TwigTemplate_cf04a0d0a8f80d5918593f23a8602cdf4632644540bb8cb8f0c4350181aa3304 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "SyliusShopBundle:ProductReview:create.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f940369ec2efd3783a7e04aed0ca71b801a9a919409d7e33323c4863bedadf45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f940369ec2efd3783a7e04aed0ca71b801a9a919409d7e33323c4863bedadf45->enter($__internal_f940369ec2efd3783a7e04aed0ca71b801a9a919409d7e33323c4863bedadf45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:ProductReview:create.html.twig"));

        $__internal_5b1da6b9a4bdee9f7bf9784c2bc86da3f313181124e60678a9e6e4e32306df7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b1da6b9a4bdee9f7bf9784c2bc86da3f313181124e60678a9e6e4e32306df7d->enter($__internal_5b1da6b9a4bdee9f7bf9784c2bc86da3f313181124e60678a9e6e4e32306df7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:ProductReview:create.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "@SyliusUi/Form/theme.html.twig"));
        // line 5
        $context["product"] = $this->getAttribute(($context["product_review"] ?? $this->getContext($context, "product_review")), "reviewSubject", array());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f940369ec2efd3783a7e04aed0ca71b801a9a919409d7e33323c4863bedadf45->leave($__internal_f940369ec2efd3783a7e04aed0ca71b801a9a919409d7e33323c4863bedadf45_prof);

        
        $__internal_5b1da6b9a4bdee9f7bf9784c2bc86da3f313181124e60678a9e6e4e32306df7d->leave($__internal_5b1da6b9a4bdee9f7bf9784c2bc86da3f313181124e60678a9e6e4e32306df7d_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_6f6f8e4ec090083b5cb3ca82e2f36241ef35b7a78e5d2f1693bcdc3f1b1b4402 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f6f8e4ec090083b5cb3ca82e2f36241ef35b7a78e5d2f1693bcdc3f1b1b4402->enter($__internal_6f6f8e4ec090083b5cb3ca82e2f36241ef35b7a78e5d2f1693bcdc3f1b1b4402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0ef532e385a37ffade8092b9b545b5a1697a4a49f05e6c68d8d4cb37d383a2af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ef532e385a37ffade8092b9b545b5a1697a4a49f05e6c68d8d4cb37d383a2af->enter($__internal_0ef532e385a37ffade8092b9b545b5a1697a4a49f05e6c68d8d4cb37d383a2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <div class=\"ui hidden divider\"></div>
    <div class=\"ui stackable grid\" id=\"reviews\">
        <div class=\"four wide column\">
            ";
        // line 11
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product_review.create.before_product_box", array("product_review" => ($context["product_review"] ?? $this->getContext($context, "product_review")))));
        echo "

            ";
        // line 13
        $this->loadTemplate("@SyliusShop/Product/_box.html.twig", "SyliusShopBundle:ProductReview:create.html.twig", 13)->display($context);
        // line 14
        echo "
            ";
        // line 15
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product_review.create.after_product_box", array("product_review" => ($context["product_review"] ?? $this->getContext($context, "product_review")))));
        echo "
        </div>
        <div class=\"twelve wide column\">
            <div class=\"ui segment\">
                <div class=\"ui dividing header\">
                    ";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.write_your_own_review"), "html", null, true);
        echo "
                    <div class=\"sub header\">
                        ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.you_are_reviewing"), "html", null, true);
        echo " <strong>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</strong>.
                    </div>
                </div>

                ";
        // line 26
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product_review.create.before_form", array("product_review" => ($context["product_review"] ?? $this->getContext($context, "product_review")))));
        echo "

                ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_product_review_create", array("slug" => $this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "slug", array()), "_locale" => $this->getAttribute($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "translation", array()), "locale", array()))), "attr" => array("class" => "ui loadable reply form", "novalidate" => "novalidate")));
        echo "
                    ";
        // line 29
        $this->loadTemplate("@SyliusShop/ProductReview/_form.html.twig", "SyliusShopBundle:ProductReview:create.html.twig", 29)->display($context);
        // line 30
        echo "
                    ";
        // line 31
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product_review.create.form", array("product_review" => ($context["product_review"] ?? $this->getContext($context, "product_review")), "form" => ($context["form"] ?? $this->getContext($context, "form")))));
        echo "

                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
                    <button type=\"submit\" class=\"ui blue labeled large icon submit button\">
                        <i class=\"icon check\"></i> ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.add"), "html", null, true);
        echo "
                    </button>
                ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_0ef532e385a37ffade8092b9b545b5a1697a4a49f05e6c68d8d4cb37d383a2af->leave($__internal_0ef532e385a37ffade8092b9b545b5a1697a4a49f05e6c68d8d4cb37d383a2af_prof);

        
        $__internal_6f6f8e4ec090083b5cb3ca82e2f36241ef35b7a78e5d2f1693bcdc3f1b1b4402->leave($__internal_6f6f8e4ec090083b5cb3ca82e2f36241ef35b7a78e5d2f1693bcdc3f1b1b4402_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:ProductReview:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 37,  115 => 35,  110 => 33,  105 => 31,  102 => 30,  100 => 29,  96 => 28,  91 => 26,  82 => 22,  77 => 20,  69 => 15,  66 => 14,  64 => 13,  59 => 11,  54 => 8,  45 => 7,  35 => 1,  33 => 5,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/layout.html.twig' %}

{% form_theme form '@SyliusUi/Form/theme.html.twig' %}

{% set product = product_review.reviewSubject %}

{% block content %}
    <div class=\"ui hidden divider\"></div>
    <div class=\"ui stackable grid\" id=\"reviews\">
        <div class=\"four wide column\">
            {{ sonata_block_render_event('sylius.shop.product_review.create.before_product_box', {'product_review': product_review}) }}

            {% include '@SyliusShop/Product/_box.html.twig' %}

            {{ sonata_block_render_event('sylius.shop.product_review.create.after_product_box', {'product_review': product_review}) }}
        </div>
        <div class=\"twelve wide column\">
            <div class=\"ui segment\">
                <div class=\"ui dividing header\">
                    {{ 'sylius.ui.write_your_own_review'|trans }}
                    <div class=\"sub header\">
                        {{ 'sylius.ui.you_are_reviewing'|trans }} <strong>{{ product.name }}</strong>.
                    </div>
                </div>

                {{ sonata_block_render_event('sylius.shop.product_review.create.before_form', {'product_review': product_review}) }}

                {{ form_start(form, {'action': path('sylius_shop_product_review_create', {'slug': product.slug, '_locale': product.translation.locale}), 'attr': {'class': 'ui loadable reply form', 'novalidate': 'novalidate'}}) }}
                    {% include '@SyliusShop/ProductReview/_form.html.twig' %}

                    {{ sonata_block_render_event('sylius.shop.product_review.create.form', {'product_review': product_review, 'form': form}) }}

                    {{ form_row(form._token) }}
                    <button type=\"submit\" class=\"ui blue labeled large icon submit button\">
                        <i class=\"icon check\"></i> {{ 'sylius.ui.add'|trans }}
                    </button>
                {{ form_end(form, {'render_rest': false}) }}
            </div>
        </div>
    </div>
{% endblock %}
", "SyliusShopBundle:ProductReview:create.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/ProductReview/create.html.twig");
    }
}
