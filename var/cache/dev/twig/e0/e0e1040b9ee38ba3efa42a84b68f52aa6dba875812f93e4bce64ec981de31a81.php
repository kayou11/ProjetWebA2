<?php

/* SyliusShopBundle:Common/Macro:money.html.twig */
class __TwigTemplate_1c65e2afebbede0dd724389ccf06b91935b8a04262a340aad545e20cb4eeb7f3 extends Twig_Template
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
        $__internal_408d8ec7796fb279f463e271113bc58decd42a58776a90f0c06e6bb50d8ae7b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_408d8ec7796fb279f463e271113bc58decd42a58776a90f0c06e6bb50d8ae7b2->enter($__internal_408d8ec7796fb279f463e271113bc58decd42a58776a90f0c06e6bb50d8ae7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Macro:money.html.twig"));

        $__internal_9b5009e5a217bce3c54c0a0dc3562051828c4d0789f79fd13a48130354e63859 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b5009e5a217bce3c54c0a0dc3562051828c4d0789f79fd13a48130354e63859->enter($__internal_9b5009e5a217bce3c54c0a0dc3562051828c4d0789f79fd13a48130354e63859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Macro:money.html.twig"));

        
        $__internal_408d8ec7796fb279f463e271113bc58decd42a58776a90f0c06e6bb50d8ae7b2->leave($__internal_408d8ec7796fb279f463e271113bc58decd42a58776a90f0c06e6bb50d8ae7b2_prof);

        
        $__internal_9b5009e5a217bce3c54c0a0dc3562051828c4d0789f79fd13a48130354e63859->leave($__internal_9b5009e5a217bce3c54c0a0dc3562051828c4d0789f79fd13a48130354e63859_prof);

    }

    // line 1
    public function getformat($__amount__ = null, $__currency_code__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "amount" => $__amount__,
            "currency_code" => $__currency_code__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_cdd17ba975de4d1f51a74986f313d73e44b67d6956712ddba8d5b821dac7b991 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_cdd17ba975de4d1f51a74986f313d73e44b67d6956712ddba8d5b821dac7b991->enter($__internal_cdd17ba975de4d1f51a74986f313d73e44b67d6956712ddba8d5b821dac7b991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "format"));

            $__internal_6145dfe97bb66ba78d4ce123969b5a8eeaffc4f51adcddd273b3c3b85ec4f202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_6145dfe97bb66ba78d4ce123969b5a8eeaffc4f51adcddd273b3c3b85ec4f202->enter($__internal_6145dfe97bb66ba78d4ce123969b5a8eeaffc4f51adcddd273b3c3b85ec4f202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "format"));

            // line 2
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_format_money')->getCallable(), array(($context["amount"] ?? $this->getContext($context, "amount")), ($context["currency_code"] ?? $this->getContext($context, "currency_code")), $this->getAttribute(($context["sylius"] ?? $this->getContext($context, "sylius")), "localeCode", array()))), "html", null, true);
            
            $__internal_6145dfe97bb66ba78d4ce123969b5a8eeaffc4f51adcddd273b3c3b85ec4f202->leave($__internal_6145dfe97bb66ba78d4ce123969b5a8eeaffc4f51adcddd273b3c3b85ec4f202_prof);

            
            $__internal_cdd17ba975de4d1f51a74986f313d73e44b67d6956712ddba8d5b821dac7b991->leave($__internal_cdd17ba975de4d1f51a74986f313d73e44b67d6956712ddba8d5b821dac7b991_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 5
    public function getconvertAndFormat($__amount__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "amount" => $__amount__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_ed9cc5ede430ff1159a16b7ed78029c8f946a3c65135e40fef05c4bf711c60cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_ed9cc5ede430ff1159a16b7ed78029c8f946a3c65135e40fef05c4bf711c60cb->enter($__internal_ed9cc5ede430ff1159a16b7ed78029c8f946a3c65135e40fef05c4bf711c60cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "convertAndFormat"));

            $__internal_3d08118632b2683dd62325ae8e164c917ce585ba0aeb10052cf750be8de48d37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_3d08118632b2683dd62325ae8e164c917ce585ba0aeb10052cf750be8de48d37->enter($__internal_3d08118632b2683dd62325ae8e164c917ce585ba0aeb10052cf750be8de48d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "convertAndFormat"));

            // line 6
            $context["__internal_87f76b01b4ae2be6a8799be801088e6861e4928f56d8ce412b26962d800fb204"] = $this;
            // line 8
            echo $context["__internal_87f76b01b4ae2be6a8799be801088e6861e4928f56d8ce412b26962d800fb204"]->getformat(call_user_func_array($this->env->getFilter('sylius_convert_money')->getCallable(), array(($context["amount"] ?? $this->getContext($context, "amount")), $this->getAttribute($this->getAttribute($this->getAttribute(($context["sylius"] ?? $this->getContext($context, "sylius")), "channel", array()), "baseCurrency", array()), "code", array()), $this->getAttribute(($context["sylius"] ?? $this->getContext($context, "sylius")), "currencyCode", array()))), $this->getAttribute(($context["sylius"] ?? $this->getContext($context, "sylius")), "currencyCode", array()));
            
            $__internal_3d08118632b2683dd62325ae8e164c917ce585ba0aeb10052cf750be8de48d37->leave($__internal_3d08118632b2683dd62325ae8e164c917ce585ba0aeb10052cf750be8de48d37_prof);

            
            $__internal_ed9cc5ede430ff1159a16b7ed78029c8f946a3c65135e40fef05c4bf711c60cb->leave($__internal_ed9cc5ede430ff1159a16b7ed78029c8f946a3c65135e40fef05c4bf711c60cb_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 11
    public function getcalculatePrice($__variant__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "variant" => $__variant__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_d29e8c544650f37f80b2edf600d6a87285d9b9a6b1eca8ed6d89f28e67875240 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_d29e8c544650f37f80b2edf600d6a87285d9b9a6b1eca8ed6d89f28e67875240->enter($__internal_d29e8c544650f37f80b2edf600d6a87285d9b9a6b1eca8ed6d89f28e67875240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "calculatePrice"));

            $__internal_12e10817348039a7cb5e8ec56527e7f297fd53a64b774bd778e2af4f86b1d63b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_12e10817348039a7cb5e8ec56527e7f297fd53a64b774bd778e2af4f86b1d63b->enter($__internal_12e10817348039a7cb5e8ec56527e7f297fd53a64b774bd778e2af4f86b1d63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "calculatePrice"));

            // line 12
            $context["__internal_e8dda217c22eedccec848e76dabbcc4dc6f62e3902dfe2264e423d2440ee1639"] = $this;
            // line 14
            echo $context["__internal_e8dda217c22eedccec848e76dabbcc4dc6f62e3902dfe2264e423d2440ee1639"]->getconvertAndFormat(call_user_func_array($this->env->getFilter('sylius_calculate_price')->getCallable(), array(($context["variant"] ?? $this->getContext($context, "variant")), array("channel" => $this->getAttribute(($context["sylius"] ?? $this->getContext($context, "sylius")), "channel", array())))));
            
            $__internal_12e10817348039a7cb5e8ec56527e7f297fd53a64b774bd778e2af4f86b1d63b->leave($__internal_12e10817348039a7cb5e8ec56527e7f297fd53a64b774bd778e2af4f86b1d63b_prof);

            
            $__internal_d29e8c544650f37f80b2edf600d6a87285d9b9a6b1eca8ed6d89f28e67875240->leave($__internal_d29e8c544650f37f80b2edf600d6a87285d9b9a6b1eca8ed6d89f28e67875240_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Common/Macro:money.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 14,  132 => 12,  114 => 11,  93 => 8,  91 => 6,  73 => 5,  52 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%- macro format(amount, currency_code) -%}
    {{ amount|sylius_format_money(currency_code, sylius.localeCode) }}
{%- endmacro -%}

{%- macro convertAndFormat(amount) -%}
    {% from _self import format %}

    {{- format(amount|sylius_convert_money(sylius.channel.baseCurrency.code, sylius.currencyCode), sylius.currencyCode) }}
{%- endmacro -%}

{%- macro calculatePrice(variant) -%}
    {% from _self import convertAndFormat %}

    {{- convertAndFormat(variant|sylius_calculate_price({'channel': sylius.channel})) }}
{%- endmacro -%}
", "SyliusShopBundle:Common/Macro:money.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Common/Macro/money.html.twig");
    }
}
