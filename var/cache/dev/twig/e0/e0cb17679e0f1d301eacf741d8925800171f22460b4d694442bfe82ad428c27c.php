<?php

/* @SyliusShop/register.html.twig */
class __TwigTemplate_50f51110a289f3d2a1f13b79451525741d702d1ab26c5891c0c3c751462907e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "@SyliusShop/register.html.twig", 1);
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
        $__internal_35284ffa8080aec1c2d11eed5151dfe793c049ec245f60857e9a492fb79ee8de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35284ffa8080aec1c2d11eed5151dfe793c049ec245f60857e9a492fb79ee8de->enter($__internal_35284ffa8080aec1c2d11eed5151dfe793c049ec245f60857e9a492fb79ee8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/register.html.twig"));

        $__internal_14f35f9ec4b5d9eb25122e41eb1ddfbded967472a3868e34e4f8166971fca593 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f35f9ec4b5d9eb25122e41eb1ddfbded967472a3868e34e4f8166971fca593->enter($__internal_14f35f9ec4b5d9eb25122e41eb1ddfbded967472a3868e34e4f8166971fca593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/register.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "@SyliusUi/Form/theme.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35284ffa8080aec1c2d11eed5151dfe793c049ec245f60857e9a492fb79ee8de->leave($__internal_35284ffa8080aec1c2d11eed5151dfe793c049ec245f60857e9a492fb79ee8de_prof);

        
        $__internal_14f35f9ec4b5d9eb25122e41eb1ddfbded967472a3868e34e4f8166971fca593->leave($__internal_14f35f9ec4b5d9eb25122e41eb1ddfbded967472a3868e34e4f8166971fca593_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_1f69c538b741d67e2d9dc64a694d96c6a2c5ab73e5903b35e6a20a573beaacf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f69c538b741d67e2d9dc64a694d96c6a2c5ab73e5903b35e6a20a573beaacf1->enter($__internal_1f69c538b741d67e2d9dc64a694d96c6a2c5ab73e5903b35e6a20a573beaacf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a48c5759b04e1be220def79a57ea2043f2768dc9abc041076a4fc57218af9690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a48c5759b04e1be220def79a57ea2043f2768dc9abc041076a4fc57218af9690->enter($__internal_a48c5759b04e1be220def79a57ea2043f2768dc9abc041076a4fc57218af9690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    ";
        $this->loadTemplate("@SyliusShop/Register/_header.html.twig", "@SyliusShop/register.html.twig", 6)->display($context);
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
        $this->loadTemplate("@SyliusShop/Register/_form.html.twig", "@SyliusShop/register.html.twig", 14)->display($context);
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
        
        $__internal_a48c5759b04e1be220def79a57ea2043f2768dc9abc041076a4fc57218af9690->leave($__internal_a48c5759b04e1be220def79a57ea2043f2768dc9abc041076a4fc57218af9690_prof);

        
        $__internal_1f69c538b741d67e2d9dc64a694d96c6a2c5ab73e5903b35e6a20a573beaacf1->leave($__internal_1f69c538b741d67e2d9dc64a694d96c6a2c5ab73e5903b35e6a20a573beaacf1_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/register.html.twig";
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
", "@SyliusShop/register.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/register.html.twig");
    }
}
