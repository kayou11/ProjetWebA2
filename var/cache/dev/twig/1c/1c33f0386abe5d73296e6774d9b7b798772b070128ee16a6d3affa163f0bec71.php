<?php

/* SyliusAdminBundle:ProductVariant/Tab:_details.html.twig */
class __TwigTemplate_f830cd90c6c10f92a9313251498d2c7f45377cb08d6091ebdc5e46fa8a531e10 extends Twig_Template
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
        $__internal_bf82b4048d246a1b33aa6e75f9cd966e513f2aab35d358e7760e89be8bffc1ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf82b4048d246a1b33aa6e75f9cd966e513f2aab35d358e7760e89be8bffc1ea->enter($__internal_bf82b4048d246a1b33aa6e75f9cd966e513f2aab35d358e7760e89be8bffc1ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Tab:_details.html.twig"));

        $__internal_d38126da0ffea20d5c546fa9136bc66a38c54b896a5ffc06672e34ec29c2e18b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d38126da0ffea20d5c546fa9136bc66a38c54b896a5ffc06672e34ec29c2e18b->enter($__internal_d38126da0ffea20d5c546fa9136bc66a38c54b896a5ffc06672e34ec29c2e18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Tab:_details.html.twig"));

        // line 1
        $context["__internal_a616302487a136ea89be0af75024a403e23ba739d59e927954c4c97fbf0a70b1"] = $this->loadTemplate("@SyliusAdmin/Macro/translationForm.html.twig", "SyliusAdminBundle:ProductVariant/Tab:_details.html.twig", 1);
        // line 2
        echo "
<div class=\"ui active tab\" data-tab=\"details\">
    <h3 class=\"ui dividing header\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.details"), "html", null, true);
        echo "</h3>

    <div class=\"ui segments\">
        ";
        // line 7
        echo $context["__internal_a616302487a136ea89be0af75024a403e23ba739d59e927954c4c97fbf0a70b1"]->gettranslationForm($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "translations", array()));
        echo "
        <div class=\"ui hidden divider\"></div>
        <div class=\"ui segment\">
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "code", array()), 'row');
        echo "
            <div class=\"two fields\">
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "shippingCategory", array()), 'row');
        echo "
            </div>
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "channelPricings", array()), 'row');
        echo "
        </div>
        <div class=\"ui segment\">
            <div class=\"one field\">
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "shippingRequired", array()), 'row');
        echo "
            </div>
        </div>
        ";
        // line 21
        if (($this->getAttribute(($context["form"] ?? null), "optionValues", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "optionValues", array())) > 0))) {
            // line 22
            echo "        <div class=\"ui hidden divider\"></div>
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.options"), "html", null, true);
            echo "</h4>
            ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "optionValues", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["option_form"]) {
                // line 26
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["option_form"], 'row');
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_form'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "        </div>
        ";
        }
        // line 30
        echo "        <div class=\"ui hidden divider\"></div>
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.properties"), "html", null, true);
        echo "</h4>
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "height", array()), 'row');
        echo "
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "width", array()), 'row');
        echo "
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "depth", array()), 'row');
        echo "
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weight", array()), 'row');
        echo "
        </div>
        <div class=\"ui hidden divider\"></div>
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.inventory"), "html", null, true);
        echo "</h4>
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "onHand", array()), 'row');
        echo "
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tracked", array()), 'row');
        echo "
            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "version", array()), 'row');
        echo "
        </div>
    </div>

    ";
        // line 47
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((("sylius.admin.product_variant." . ($context["action"] ?? $this->getContext($context, "action"))) . ".tab_details"), array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        echo "
</div>
";
        
        $__internal_bf82b4048d246a1b33aa6e75f9cd966e513f2aab35d358e7760e89be8bffc1ea->leave($__internal_bf82b4048d246a1b33aa6e75f9cd966e513f2aab35d358e7760e89be8bffc1ea_prof);

        
        $__internal_d38126da0ffea20d5c546fa9136bc66a38c54b896a5ffc06672e34ec29c2e18b->leave($__internal_d38126da0ffea20d5c546fa9136bc66a38c54b896a5ffc06672e34ec29c2e18b_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductVariant/Tab:_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 47,  132 => 43,  128 => 42,  124 => 41,  120 => 40,  113 => 36,  109 => 35,  105 => 34,  101 => 33,  97 => 32,  93 => 30,  89 => 28,  80 => 26,  76 => 25,  72 => 24,  68 => 22,  66 => 21,  60 => 18,  53 => 14,  48 => 12,  43 => 10,  37 => 7,  31 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% from '@SyliusAdmin/Macro/translationForm.html.twig' import translationForm %}

<div class=\"ui active tab\" data-tab=\"details\">
    <h3 class=\"ui dividing header\">{{ 'sylius.ui.details'|trans }}</h3>

    <div class=\"ui segments\">
        {{ translationForm(form.translations) }}
        <div class=\"ui hidden divider\"></div>
        <div class=\"ui segment\">
            {{ form_row(form.code) }}
            <div class=\"two fields\">
                {{ form_row(form.shippingCategory) }}
            </div>
            {{ form_row(form.channelPricings) }}
        </div>
        <div class=\"ui segment\">
            <div class=\"one field\">
                {{ form_row(form.shippingRequired) }}
            </div>
        </div>
        {% if form.optionValues is defined and form.optionValues|length > 0 %}
        <div class=\"ui hidden divider\"></div>
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">{{ 'sylius.ui.options'|trans }}</h4>
            {% for option_form in form.optionValues %}
                {{ form_row(option_form) }}
            {% endfor %}
        </div>
        {% endif %}
        <div class=\"ui hidden divider\"></div>
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">{{ 'sylius.ui.properties'|trans }}</h4>
            {{ form_row(form.height) }}
            {{ form_row(form.width) }}
            {{ form_row(form.depth) }}
            {{ form_row(form.weight) }}
        </div>
        <div class=\"ui hidden divider\"></div>
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">{{ 'sylius.ui.inventory'|trans }}</h4>
            {{ form_row(form.onHand) }}
            {{ form_row(form.tracked) }}
            {{ form_row(form.version) }}
        </div>
    </div>

    {{ sonata_block_render_event('sylius.admin.product_variant.' ~ action ~ '.tab_details', {'form': form}) }}
</div>
", "SyliusAdminBundle:ProductVariant/Tab:_details.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductVariant/Tab/_details.html.twig");
    }
}
