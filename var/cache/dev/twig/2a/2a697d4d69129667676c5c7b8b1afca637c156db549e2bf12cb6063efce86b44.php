<?php

/* SyliusShopBundle:Account/AddressBook:create.html.twig */
class __TwigTemplate_55624964810d8908cd8a5ffa5d92226201c0583ff2e5283f7c99ae67b5447df2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/Account/AddressBook/layout.html.twig", "SyliusShopBundle:Account/AddressBook:create.html.twig", 1);
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
        $__internal_62f61ebbc51c14379b4a4ea679b8776c99186d8e2a67cb4a7311f911dc210f15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62f61ebbc51c14379b4a4ea679b8776c99186d8e2a67cb4a7311f911dc210f15->enter($__internal_62f61ebbc51c14379b4a4ea679b8776c99186d8e2a67cb4a7311f911dc210f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/AddressBook:create.html.twig"));

        $__internal_dc670ecf815e5a3f1d632799c1a2e0410b82cc61000951979ec59a637ddb8eb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc670ecf815e5a3f1d632799c1a2e0410b82cc61000951979ec59a637ddb8eb3->enter($__internal_dc670ecf815e5a3f1d632799c1a2e0410b82cc61000951979ec59a637ddb8eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/AddressBook:create.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "@SyliusUi/Form/theme.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62f61ebbc51c14379b4a4ea679b8776c99186d8e2a67cb4a7311f911dc210f15->leave($__internal_62f61ebbc51c14379b4a4ea679b8776c99186d8e2a67cb4a7311f911dc210f15_prof);

        
        $__internal_dc670ecf815e5a3f1d632799c1a2e0410b82cc61000951979ec59a637ddb8eb3->leave($__internal_dc670ecf815e5a3f1d632799c1a2e0410b82cc61000951979ec59a637ddb8eb3_prof);

    }

    // line 5
    public function block_subcontent($context, array $blocks = array())
    {
        $__internal_151feb498ec0e24f997424d03df0da457c419e19ab9f704aef12c78257a44d5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_151feb498ec0e24f997424d03df0da457c419e19ab9f704aef12c78257a44d5e->enter($__internal_151feb498ec0e24f997424d03df0da457c419e19ab9f704aef12c78257a44d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subcontent"));

        $__internal_a57a2abd67225b13604097ede5c9c8093a4541180950578257160c48cb0e2703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a57a2abd67225b13604097ede5c9c8093a4541180950578257160c48cb0e2703->enter($__internal_a57a2abd67225b13604097ede5c9c8093a4541180950578257160c48cb0e2703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subcontent"));

        // line 6
        echo "    <div class=\"ui segment\">
        <h1 class=\"ui dividing header\">
            ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.address_book"), "html", null, true);
        echo "
            <div class=\"sub header\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.add_address"), "html", null, true);
        echo "</div>
        </h1>

        ";
        // line 12
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.address_book.create.after_content_header", array("address" => ($context["address"] ?? $this->getContext($context, "address")))));
        echo "

        ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_account_address_book_create"), "attr" => array("class" => "ui loadable form", "novalidate" => "novalidate")));
        echo "
            ";
        // line 15
        $this->loadTemplate("@SyliusShop/Common/Form/_address.html.twig", "SyliusShopBundle:Account/AddressBook:create.html.twig", 15)->display(array_merge($context, array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        // line 16
        echo "            <div class=\"ui two column grid\">
                <div class=\"column\">
                    <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_account_address_book_index");
        echo "\" class=\"ui large icon labeled button\">
                        <i class=\"left arrow icon\"></i> ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.cancel"), "html", null, true);
        echo "
                    </a>
                </div>
                <div class=\"right aligned column\">
                    <button type=\"submit\" class=\"ui large icon labeled blue button\">
                        <i class=\"icon plus\"></i> ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.add"), "html", null, true);
        echo "
                    </button>
                </div>
            </div>

        ";
        // line 29
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.address_book.create.form", array("address" => ($context["address"] ?? $this->getContext($context, "address")))));
        echo "

        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
        ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
    </div>
";
        
        $__internal_a57a2abd67225b13604097ede5c9c8093a4541180950578257160c48cb0e2703->leave($__internal_a57a2abd67225b13604097ede5c9c8093a4541180950578257160c48cb0e2703_prof);

        
        $__internal_151feb498ec0e24f997424d03df0da457c419e19ab9f704aef12c78257a44d5e->leave($__internal_151feb498ec0e24f997424d03df0da457c419e19ab9f704aef12c78257a44d5e_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account/AddressBook:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 32,  106 => 31,  101 => 29,  93 => 24,  85 => 19,  81 => 18,  77 => 16,  75 => 15,  71 => 14,  66 => 12,  60 => 9,  56 => 8,  52 => 6,  43 => 5,  33 => 1,  31 => 3,  11 => 1,);
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
            <div class=\"sub header\">{{ 'sylius.ui.add_address'|trans }}</div>
        </h1>

        {{ sonata_block_render_event('sylius.shop.account.address_book.create.after_content_header', {'address': address}) }}

        {{ form_start(form, {'action': path('sylius_shop_account_address_book_create'), 'attr': {'class': 'ui loadable form', 'novalidate': 'novalidate'}}) }}
            {% include '@SyliusShop/Common/Form/_address.html.twig' with {'form': form} %}
            <div class=\"ui two column grid\">
                <div class=\"column\">
                    <a href=\"{{ path('sylius_shop_account_address_book_index') }}\" class=\"ui large icon labeled button\">
                        <i class=\"left arrow icon\"></i> {{ 'sylius.ui.cancel'|trans }}
                    </a>
                </div>
                <div class=\"right aligned column\">
                    <button type=\"submit\" class=\"ui large icon labeled blue button\">
                        <i class=\"icon plus\"></i> {{ 'sylius.ui.add'|trans }}
                    </button>
                </div>
            </div>

        {{ sonata_block_render_event('sylius.shop.account.address_book.create.form', {'address': address}) }}

        {{ form_row(form._token) }}
        {{ form_end(form, {'render_rest': false}) }}
    </div>
{% endblock %}
", "SyliusShopBundle:Account/AddressBook:create.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/AddressBook/create.html.twig");
    }
}
