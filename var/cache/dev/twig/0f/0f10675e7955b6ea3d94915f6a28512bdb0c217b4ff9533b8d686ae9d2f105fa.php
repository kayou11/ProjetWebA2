<?php

/* SyliusShopBundle:Checkout/SelectPayment:_payment.html.twig */
class __TwigTemplate_d5f563a2ae7849f9a7db711ae64fd3fb63b68c6401593232b18d7b34ca07640f extends Twig_Template
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
        $__internal_9448c44669fe1f00259b9da29adabeaa635b818ca171ffb98c2b4453a178b662 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9448c44669fe1f00259b9da29adabeaa635b818ca171ffb98c2b4453a178b662->enter($__internal_9448c44669fe1f00259b9da29adabeaa635b818ca171ffb98c2b4453a178b662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/SelectPayment:_payment.html.twig"));

        $__internal_ae7a2785d88fffe8850d6348f151aea69d8f9102fb1e597e93ce94e6da7816a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae7a2785d88fffe8850d6348f151aea69d8f9102fb1e597e93ce94e6da7816a2->enter($__internal_ae7a2785d88fffe8850d6348f151aea69d8f9102fb1e597e93ce94e6da7816a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/SelectPayment:_payment.html.twig"));

        // line 1
        echo "<div class=\"ui segment\">
    <div class=\"ui dividing header\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.payment"), "html", null, true);
        echo " #";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["loop"] ?? $this->getContext($context, "loop")), "index", array()), "html", null, true);
        echo "</div>
    <div class=\"ui fluid stackable items\">
        ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "method", array()), 'errors');
        echo "

        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "method", array()));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["choice_form"]) {
            // line 7
            echo "            ";
            $this->loadTemplate("@SyliusShop/Checkout/SelectPayment/_choice.html.twig", "SyliusShopBundle:Checkout/SelectPayment:_payment.html.twig", 7)->display(array_merge($context, array("form" => $context["choice_form"], "method" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "method", array()), "vars", array()), "choices", array()), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "data", array()))));
            // line 8
            echo "        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 9
            echo "            ";
            $this->loadTemplate("@SyliusShop/Checkout/SelectPayment/_unavailable.html.twig", "SyliusShopBundle:Checkout/SelectPayment:_payment.html.twig", 9)->display($context);
            // line 10
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice_form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </div>
</div>
";
        
        $__internal_9448c44669fe1f00259b9da29adabeaa635b818ca171ffb98c2b4453a178b662->leave($__internal_9448c44669fe1f00259b9da29adabeaa635b818ca171ffb98c2b4453a178b662_prof);

        
        $__internal_ae7a2785d88fffe8850d6348f151aea69d8f9102fb1e597e93ce94e6da7816a2->leave($__internal_ae7a2785d88fffe8850d6348f151aea69d8f9102fb1e597e93ce94e6da7816a2_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout/SelectPayment:_payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 11,  77 => 10,  74 => 9,  61 => 8,  58 => 7,  40 => 6,  35 => 4,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui segment\">
    <div class=\"ui dividing header\">{{ 'sylius.ui.payment'|trans }} #{{ loop.index }}</div>
    <div class=\"ui fluid stackable items\">
        {{ form_errors(form.method) }}

        {% for choice_form in form.method %}
            {% include '@SyliusShop/Checkout/SelectPayment/_choice.html.twig' with {'form': choice_form, 'method': form.method.vars.choices[loop.index0].data} %}
        {% else %}
            {% include '@SyliusShop/Checkout/SelectPayment/_unavailable.html.twig' %}
        {% endfor %}
    </div>
</div>
", "SyliusShopBundle:Checkout/SelectPayment:_payment.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/SelectPayment/_payment.html.twig");
    }
}
