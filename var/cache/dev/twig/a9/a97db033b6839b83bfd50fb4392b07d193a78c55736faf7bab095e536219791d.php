<?php

/* SyliusShopBundle::register.html.twig */
class __TwigTemplate_3bee3f9738b97db68190bda7482a1c6c1c303c12160f138d6a887c1c6bf2b9f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "SyliusShopBundle::register.html.twig", 1);
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
        $__internal_c244330604e915525494106c0778fdcb9655bb1d02b5f4aab4b3e48e9ee7d5ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c244330604e915525494106c0778fdcb9655bb1d02b5f4aab4b3e48e9ee7d5ae->enter($__internal_c244330604e915525494106c0778fdcb9655bb1d02b5f4aab4b3e48e9ee7d5ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle::register.html.twig"));

        $__internal_558d1349edc36813064a2980e6bdeb38d3567c102e0626da3f225bfd8317b1b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_558d1349edc36813064a2980e6bdeb38d3567c102e0626da3f225bfd8317b1b6->enter($__internal_558d1349edc36813064a2980e6bdeb38d3567c102e0626da3f225bfd8317b1b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle::register.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "@SyliusUi/Form/theme.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c244330604e915525494106c0778fdcb9655bb1d02b5f4aab4b3e48e9ee7d5ae->leave($__internal_c244330604e915525494106c0778fdcb9655bb1d02b5f4aab4b3e48e9ee7d5ae_prof);

        
        $__internal_558d1349edc36813064a2980e6bdeb38d3567c102e0626da3f225bfd8317b1b6->leave($__internal_558d1349edc36813064a2980e6bdeb38d3567c102e0626da3f225bfd8317b1b6_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_d0de637eb87ce2cd3985769c97c710399496b0be7e693e8594f7dfe6823a2e9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0de637eb87ce2cd3985769c97c710399496b0be7e693e8594f7dfe6823a2e9e->enter($__internal_d0de637eb87ce2cd3985769c97c710399496b0be7e693e8594f7dfe6823a2e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5cecf35d5bb5ee5ce354a520b2164242a64e0579af4e5009d2347746192702f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cecf35d5bb5ee5ce354a520b2164242a64e0579af4e5009d2347746192702f4->enter($__internal_5cecf35d5bb5ee5ce354a520b2164242a64e0579af4e5009d2347746192702f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    ";
        $this->loadTemplate("@SyliusShop/Register/_header.html.twig", "SyliusShopBundle::register.html.twig", 6)->display($context);
        // line 7
        echo "
    ";
        // line 8
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.register.after_content_header"));
        echo "

    <div class=\"ui padded segment\">
        ";
        // line 11
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.register.before_form"));
        echo "

        ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_register"), "attr" => array("class" => "ui loadable form", "novalidate" => "novalidate")));
        echo "
            ";
        // line 14
        $this->loadTemplate("@SyliusShop/Register/_form.html.twig", "SyliusShopBundle::register.html.twig", 14)->display($context);
        // line 15
        echo "
            ";
        // line 16
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.register.form", array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        echo "

            <button type=\"submit\" class=\"ui large primary button\">
                ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.create_an_account"), "html", null, true);
        echo "
            </button>
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
        ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
    </div>
";
        
        $__internal_5cecf35d5bb5ee5ce354a520b2164242a64e0579af4e5009d2347746192702f4->leave($__internal_5cecf35d5bb5ee5ce354a520b2164242a64e0579af4e5009d2347746192702f4_prof);

        
        $__internal_d0de637eb87ce2cd3985769c97c710399496b0be7e693e8594f7dfe6823a2e9e->leave($__internal_d0de637eb87ce2cd3985769c97c710399496b0be7e693e8594f7dfe6823a2e9e_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle::register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 22,  89 => 21,  84 => 19,  78 => 16,  75 => 15,  73 => 14,  69 => 13,  64 => 11,  58 => 8,  55 => 7,  52 => 6,  43 => 5,  33 => 1,  31 => 3,  11 => 1,);
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

{% block content %}
    {% include '@SyliusShop/Register/_header.html.twig' %}

    {{ sonata_block_render_event('sylius.shop.register.after_content_header') }}

    <div class=\"ui padded segment\">
        {{ sonata_block_render_event('sylius.shop.register.before_form') }}

        {{ form_start(form, {'action': path('sylius_shop_register'), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
            {% include '@SyliusShop/Register/_form.html.twig' %}

            {{ sonata_block_render_event('sylius.shop.register.form', {'form': form}) }}

            <button type=\"submit\" class=\"ui large primary button\">
                {{ 'sylius.ui.create_an_account'|trans }}
            </button>
        {{ form_row(form._token) }}
        {{ form_end(form, {'render_rest': false}) }}
    </div>
{% endblock %}
", "SyliusShopBundle::register.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/register.html.twig");
    }
}
