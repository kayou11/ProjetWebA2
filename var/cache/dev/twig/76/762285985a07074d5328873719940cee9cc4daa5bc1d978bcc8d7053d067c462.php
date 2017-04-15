<?php

/* @SyliusShop/Common/Macro/money.html.twig */
class __TwigTemplate_c1268c9a5d8f87f1e71e166d8608d5432f3b8fa9cf5de4c861bebe42f720b8f3 extends Twig_Template
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
        $__internal_a232964a9d14c6e0925f6acab22c976b5ce8fdbf502addbb1abad386281a20be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a232964a9d14c6e0925f6acab22c976b5ce8fdbf502addbb1abad386281a20be->enter($__internal_a232964a9d14c6e0925f6acab22c976b5ce8fdbf502addbb1abad386281a20be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Macro/money.html.twig"));

        $__internal_c1b58fd284c54fe65727eb76783885d405f9a78bc53dba8bc61255344bd7f679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1b58fd284c54fe65727eb76783885d405f9a78bc53dba8bc61255344bd7f679->enter($__internal_c1b58fd284c54fe65727eb76783885d405f9a78bc53dba8bc61255344bd7f679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Macro/money.html.twig"));

        
        $__internal_a232964a9d14c6e0925f6acab22c976b5ce8fdbf502addbb1abad386281a20be->leave($__internal_a232964a9d14c6e0925f6acab22c976b5ce8fdbf502addbb1abad386281a20be_prof);

        
        $__internal_c1b58fd284c54fe65727eb76783885d405f9a78bc53dba8bc61255344bd7f679->leave($__internal_c1b58fd284c54fe65727eb76783885d405f9a78bc53dba8bc61255344bd7f679_prof);

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
            $__internal_361e823c5ac9f58a45a14645b52eb53b8923742066adbe139d4c38716f0d55d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_361e823c5ac9f58a45a14645b52eb53b8923742066adbe139d4c38716f0d55d2->enter($__internal_361e823c5ac9f58a45a14645b52eb53b8923742066adbe139d4c38716f0d55d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "format"));

            $__internal_2afefb01a944475c65a26aaf9168028f8c882e4bc17f089d89d792fbce7dc3bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_2afefb01a944475c65a26aaf9168028f8c882e4bc17f089d89d792fbce7dc3bc->enter($__internal_2afefb01a944475c65a26aaf9168028f8c882e4bc17f089d89d792fbce7dc3bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "format"));

            // line 2
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_format_money')->getCallable(), array(($context["amount"] ?? $this->getContext($context, "amount")), ($context["currency_code"] ?? $this->getContext($context, "currency_code")), $this->getAttribute(($context["sylius"] ?? $this->getContext($context, "sylius")), "localeCode", array()))), "html", null, true);
            
            $__internal_2afefb01a944475c65a26aaf9168028f8c882e4bc17f089d89d792fbce7dc3bc->leave($__internal_2afefb01a944475c65a26aaf9168028f8c882e4bc17f089d89d792fbce7dc3bc_prof);

            
            $__internal_361e823c5ac9f58a45a14645b52eb53b8923742066adbe139d4c38716f0d55d2->leave($__internal_361e823c5ac9f58a45a14645b52eb53b8923742066adbe139d4c38716f0d55d2_prof);

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
            $__internal_1778e40555fc04a08e2fe921eeaf2a75549e56daaf6531641a59126431eb365c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_1778e40555fc04a08e2fe921eeaf2a75549e56daaf6531641a59126431eb365c->enter($__internal_1778e40555fc04a08e2fe921eeaf2a75549e56daaf6531641a59126431eb365c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "convertAndFormat"));

            $__internal_2a355127cec509e6f7d5c6c8c43b12f17c693c7c6f8e296f8fe0e6dc885aa850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_2a355127cec509e6f7d5c6c8c43b12f17c693c7c6f8e296f8fe0e6dc885aa850->enter($__internal_2a355127cec509e6f7d5c6c8c43b12f17c693c7c6f8e296f8fe0e6dc885aa850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "convertAndFormat"));

            // line 6
            $context["__internal_430fce3ef5e4d5892be13c7602dec515abd8b940904731e6161823d39ad5d814"] = $this;
            // line 8
            echo $context["__internal_430fce3ef5e4d5892be13c7602dec515abd8b940904731e6161823d39ad5d814"]->getformat(call_user_func_array($this->env->getFilter('sylius_convert_money')->getCallable(), array(($context["amount"] ?? $this->getContext($context, "amount")), $this->getAttribute($this->getAttribute($this->getAttribute(($context["sylius"] ?? $this->getContext($context, "sylius")), "channel", array()), "baseCurrency", array()), "code", array()), $this->getAttribute(($context["sylius"] ?? $this->getContext($context, "sylius")), "currencyCode", array()))), $this->getAttribute(($context["sylius"] ?? $this->getContext($context, "sylius")), "currencyCode", array()));
            
            $__internal_2a355127cec509e6f7d5c6c8c43b12f17c693c7c6f8e296f8fe0e6dc885aa850->leave($__internal_2a355127cec509e6f7d5c6c8c43b12f17c693c7c6f8e296f8fe0e6dc885aa850_prof);

            
            $__internal_1778e40555fc04a08e2fe921eeaf2a75549e56daaf6531641a59126431eb365c->leave($__internal_1778e40555fc04a08e2fe921eeaf2a75549e56daaf6531641a59126431eb365c_prof);

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
            $__internal_4dfa10589b7645a2828c0d4e46c0c0d19af953a4f02992d74c082d45f803bb3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_4dfa10589b7645a2828c0d4e46c0c0d19af953a4f02992d74c082d45f803bb3a->enter($__internal_4dfa10589b7645a2828c0d4e46c0c0d19af953a4f02992d74c082d45f803bb3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "calculatePrice"));

            $__internal_206b6fb27cb9e7abc1a705cb4251788142ad20fb8165e3bb2eb38fbf23c6fad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_206b6fb27cb9e7abc1a705cb4251788142ad20fb8165e3bb2eb38fbf23c6fad0->enter($__internal_206b6fb27cb9e7abc1a705cb4251788142ad20fb8165e3bb2eb38fbf23c6fad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "calculatePrice"));

            // line 12
            $context["__internal_d40e18413bf56d1af2afcc6e9c795e8ed06bbeb3f22ce2fdd82fc1984f067b30"] = $this;
            // line 14
            echo $context["__internal_d40e18413bf56d1af2afcc6e9c795e8ed06bbeb3f22ce2fdd82fc1984f067b30"]->getconvertAndFormat(call_user_func_array($this->env->getFilter('sylius_calculate_price')->getCallable(), array(($context["variant"] ?? $this->getContext($context, "variant")), array("channel" => $this->getAttribute(($context["sylius"] ?? $this->getContext($context, "sylius")), "channel", array())))));
            
            $__internal_206b6fb27cb9e7abc1a705cb4251788142ad20fb8165e3bb2eb38fbf23c6fad0->leave($__internal_206b6fb27cb9e7abc1a705cb4251788142ad20fb8165e3bb2eb38fbf23c6fad0_prof);

            
            $__internal_4dfa10589b7645a2828c0d4e46c0c0d19af953a4f02992d74c082d45f803bb3a->leave($__internal_4dfa10589b7645a2828c0d4e46c0c0d19af953a4f02992d74c082d45f803bb3a_prof);

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
        return "@SyliusShop/Common/Macro/money.html.twig";
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
", "@SyliusShop/Common/Macro/money.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Common/Macro/money.html.twig");
    }
}
