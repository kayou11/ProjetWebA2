<?php

/* SyliusAdminBundle:Product/Tab:_details.html.twig */
class __TwigTemplate_3b93fdf21defc92816cf2c38ed21aa62e7bc503e362ca6c73cfb90e258349b75 extends Twig_Template
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
        $__internal_cc1ef13c6948b5c1cdd142def28a29327ab9de46709a1c598738a23d6c3c20c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc1ef13c6948b5c1cdd142def28a29327ab9de46709a1c598738a23d6c3c20c0->enter($__internal_cc1ef13c6948b5c1cdd142def28a29327ab9de46709a1c598738a23d6c3c20c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Tab:_details.html.twig"));

        $__internal_c9a0ec498eb0f73303b321b20e6df4943f939664291b73f2744a1869ce67ba4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9a0ec498eb0f73303b321b20e6df4943f939664291b73f2744a1869ce67ba4a->enter($__internal_c9a0ec498eb0f73303b321b20e6df4943f939664291b73f2744a1869ce67ba4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Tab:_details.html.twig"));

        // line 1
        $context["__internal_60a00a6240b49484f2aad270f9b8e565efa00af9fbf48fd2e3d37ec9acb18e7c"] = $this->loadTemplate("@SyliusAdmin/Macro/translationForm.html.twig", "SyliusAdminBundle:Product/Tab:_details.html.twig", 1);
        // line 2
        echo "
<div class=\"ui active tab\" data-tab=\"details\">
    <h3 class=\"ui dividing header\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.details"), "html", null, true);
        echo "</h3>
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

    <div class=\"ui two column stackable grid\">
        <div class=\"column\">
            <div class=\"ui segment\">
                ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "code", array()), 'row');
        echo "
                ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "enabled", array()), 'row');
        echo "
                ";
        // line 12
        if ($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "simple", array())) {
            // line 13
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "variant", array()), "onHand", array()), 'row');
            echo "
                    ";
            // line 14
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "variant", array()), "tracked", array()), 'row');
            echo "
                    ";
            // line 15
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "variant", array()), "shippingRequired", array()), 'row');
            echo "
                    ";
            // line 16
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "variant", array()), "version", array()), 'row');
            echo "
                ";
        } else {
            // line 18
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "options", array()), 'row');
            echo "
                    ";
            // line 19
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "variantSelectionMethod", array()), 'row');
            echo "
                ";
        }
        // line 21
        echo "
                ";
        // line 23
        echo "                <div class=\"ui hidden element\">
                    ";
        // line 24
        if ($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "simple", array())) {
            // line 25
            echo "                        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "variant", array()), "translations", array()), 'row');
            echo "
                    ";
        }
        // line 27
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "variantSelectionMethod", array()), 'row');
        echo "
                </div>
            </div>
        </div>
        <div class=\"column\">
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "channels", array()), 'row');
        echo "

            ";
        // line 34
        if ($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "simple", array())) {
            // line 35
            echo "                <h4 class=\"ui dividing header\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.pricing"), "html", null, true);
            echo "</h4>
                ";
            // line 36
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "variant", array()), "channelPricings", array()), 'row', array("label" => false));
            echo "
            ";
        }
        // line 38
        echo "        </div>
    </div>
    <div class=\"ui hidden divider\"></div>
    ";
        // line 41
        echo $context["__internal_60a00a6240b49484f2aad270f9b8e565efa00af9fbf48fd2e3d37ec9acb18e7c"]->gettranslationFormWithSlug($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "translations", array()), "@SyliusAdmin/Product/_slugField.html.twig", ($context["product"] ?? $this->getContext($context, "product")));
        echo "
    ";
        // line 42
        if ($this->getAttribute(($context["product"] ?? $this->getContext($context, "product")), "simple", array())) {
            // line 43
            echo "    <div class=\"ui hidden divider\"></div>
    <div class=\"ui two column stackable grid\">
        <div class=\"column\">
            <div class=\"ui segment\">
                <h4 class=\"ui dividing header\">";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.shipping"), "html", null, true);
            echo "</h4>
                ";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "variant", array()), "shippingCategory", array()), 'row');
            echo "
                ";
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "variant", array()), "width", array()), 'row');
            echo "
                ";
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "variant", array()), "height", array()), 'row');
            echo "
                ";
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "variant", array()), "depth", array()), 'row');
            echo "
                ";
            // line 52
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "variant", array()), "weight", array()), 'row');
            echo "
            </div>
        </div>
        <div class=\"column\">
            <div class=\"ui segment\">
                <h4 class=\"ui dividing header\">";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.taxes"), "html", null, true);
            echo "</h4>
                ";
            // line 58
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "variant", array()), "taxCategory", array()), 'row');
            echo "
            </div>
        </div>
    </div>
    ";
        }
        // line 63
        echo "
    ";
        // line 64
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((("sylius.admin.product." . ($context["action"] ?? $this->getContext($context, "action"))) . ".tab_details"), array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        echo "
</div>
";
        
        $__internal_cc1ef13c6948b5c1cdd142def28a29327ab9de46709a1c598738a23d6c3c20c0->leave($__internal_cc1ef13c6948b5c1cdd142def28a29327ab9de46709a1c598738a23d6c3c20c0_prof);

        
        $__internal_c9a0ec498eb0f73303b321b20e6df4943f939664291b73f2744a1869ce67ba4a->leave($__internal_c9a0ec498eb0f73303b321b20e6df4943f939664291b73f2744a1869ce67ba4a_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product/Tab:_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 64,  178 => 63,  170 => 58,  166 => 57,  158 => 52,  154 => 51,  150 => 50,  146 => 49,  142 => 48,  138 => 47,  132 => 43,  130 => 42,  126 => 41,  121 => 38,  116 => 36,  111 => 35,  109 => 34,  104 => 32,  95 => 27,  89 => 25,  87 => 24,  84 => 23,  81 => 21,  76 => 19,  71 => 18,  66 => 16,  62 => 15,  58 => 14,  53 => 13,  51 => 12,  47 => 11,  43 => 10,  35 => 5,  31 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% from '@SyliusAdmin/Macro/translationForm.html.twig' import translationFormWithSlug %}

<div class=\"ui active tab\" data-tab=\"details\">
    <h3 class=\"ui dividing header\">{{ 'sylius.ui.details'|trans }}</h3>
    {{ form_errors(form) }}

    <div class=\"ui two column stackable grid\">
        <div class=\"column\">
            <div class=\"ui segment\">
                {{ form_row(form.code) }}
                {{ form_row(form.enabled) }}
                {% if product.simple %}
                    {{ form_row(form.variant.onHand) }}
                    {{ form_row(form.variant.tracked) }}
                    {{ form_row(form.variant.shippingRequired) }}
                    {{ form_row(form.variant.version) }}
                {% else %}
                    {{ form_row(form.options) }}
                    {{ form_row(form.variantSelectionMethod) }}
                {% endif %}

                {# Nothing to see here. #}
                <div class=\"ui hidden element\">
                    {% if product.simple %}
                        {{ form_row(form.variant.translations) }}
                    {% endif %}
                    {{ form_row(form.variantSelectionMethod) }}
                </div>
            </div>
        </div>
        <div class=\"column\">
            {{ form_row(form.channels) }}

            {% if product.simple %}
                <h4 class=\"ui dividing header\">{{ 'sylius.ui.pricing'|trans }}</h4>
                {{ form_row(form.variant.channelPricings, {'label': false}) }}
            {% endif %}
        </div>
    </div>
    <div class=\"ui hidden divider\"></div>
    {{ translationFormWithSlug(form.translations, '@SyliusAdmin/Product/_slugField.html.twig', product) }}
    {% if product.simple %}
    <div class=\"ui hidden divider\"></div>
    <div class=\"ui two column stackable grid\">
        <div class=\"column\">
            <div class=\"ui segment\">
                <h4 class=\"ui dividing header\">{{ 'sylius.ui.shipping'|trans }}</h4>
                {{ form_row(form.variant.shippingCategory) }}
                {{ form_row(form.variant.width) }}
                {{ form_row(form.variant.height) }}
                {{ form_row(form.variant.depth) }}
                {{ form_row(form.variant.weight) }}
            </div>
        </div>
        <div class=\"column\">
            <div class=\"ui segment\">
                <h4 class=\"ui dividing header\">{{ 'sylius.ui.taxes'|trans }}</h4>
                {{ form_row(form.variant.taxCategory) }}
            </div>
        </div>
    </div>
    {% endif %}

    {{ sonata_block_render_event('sylius.admin.product.' ~ action ~ '.tab_details', {'form': form}) }}
</div>
", "SyliusAdminBundle:Product/Tab:_details.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Tab/_details.html.twig");
    }
}
