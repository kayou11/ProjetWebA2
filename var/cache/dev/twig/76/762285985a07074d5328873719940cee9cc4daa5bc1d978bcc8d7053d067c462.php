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
        $__internal_bc5b603b326d4fbc8029c9e66b5b6e94f77dc20f095235007412a2e5decbdd6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc5b603b326d4fbc8029c9e66b5b6e94f77dc20f095235007412a2e5decbdd6f->enter($__internal_bc5b603b326d4fbc8029c9e66b5b6e94f77dc20f095235007412a2e5decbdd6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Macro/money.html.twig"));

        $__internal_11983abf0629725bbdcb059fec92e805eb89611feb54fcb6fa485821575af913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11983abf0629725bbdcb059fec92e805eb89611feb54fcb6fa485821575af913->enter($__internal_11983abf0629725bbdcb059fec92e805eb89611feb54fcb6fa485821575af913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Common/Macro/money.html.twig"));

        
        $__internal_bc5b603b326d4fbc8029c9e66b5b6e94f77dc20f095235007412a2e5decbdd6f->leave($__internal_bc5b603b326d4fbc8029c9e66b5b6e94f77dc20f095235007412a2e5decbdd6f_prof);

        
        $__internal_11983abf0629725bbdcb059fec92e805eb89611feb54fcb6fa485821575af913->leave($__internal_11983abf0629725bbdcb059fec92e805eb89611feb54fcb6fa485821575af913_prof);

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
            $__internal_69461d69a59fe6fcedccf5756380de649005658e0161dc9dced579ffc9c7b0cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_69461d69a59fe6fcedccf5756380de649005658e0161dc9dced579ffc9c7b0cc->enter($__internal_69461d69a59fe6fcedccf5756380de649005658e0161dc9dced579ffc9c7b0cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "format"));

            $__internal_07474385cfb03b601e54c38509ad6647af3ea580154159fd38f9fa5c7aa2d7a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_07474385cfb03b601e54c38509ad6647af3ea580154159fd38f9fa5c7aa2d7a6->enter($__internal_07474385cfb03b601e54c38509ad6647af3ea580154159fd38f9fa5c7aa2d7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "format"));

            // line 2
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_format_money')->getCallable(), array(($context["amount"] ?? $this->getContext($context, "amount")), ($context["currency_code"] ?? $this->getContext($context, "currency_code")), $this->getAttribute(($context["sylius"] ?? $this->getContext($context, "sylius")), "localeCode", array()))), "html", null, true);
            
            $__internal_07474385cfb03b601e54c38509ad6647af3ea580154159fd38f9fa5c7aa2d7a6->leave($__internal_07474385cfb03b601e54c38509ad6647af3ea580154159fd38f9fa5c7aa2d7a6_prof);

            
            $__internal_69461d69a59fe6fcedccf5756380de649005658e0161dc9dced579ffc9c7b0cc->leave($__internal_69461d69a59fe6fcedccf5756380de649005658e0161dc9dced579ffc9c7b0cc_prof);

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
            $__internal_2235ce89eb3bc7b1debb8b70850042ea3dd1ea4b016440627d67339085f57655 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_2235ce89eb3bc7b1debb8b70850042ea3dd1ea4b016440627d67339085f57655->enter($__internal_2235ce89eb3bc7b1debb8b70850042ea3dd1ea4b016440627d67339085f57655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "convertAndFormat"));

            $__internal_ab12a7fbcea8c3988fba8bd57a17d79afc6f4c155bf6cdecdb1575ed90ebe41b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_ab12a7fbcea8c3988fba8bd57a17d79afc6f4c155bf6cdecdb1575ed90ebe41b->enter($__internal_ab12a7fbcea8c3988fba8bd57a17d79afc6f4c155bf6cdecdb1575ed90ebe41b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "convertAndFormat"));

            // line 6
            $context["__internal_4f10fb63d55d928d2a269ff22c95bd91fec170bf9b28c7afb828f1a2bf8a26a8"] = $this;
            // line 8
            echo $context["__internal_4f10fb63d55d928d2a269ff22c95bd91fec170bf9b28c7afb828f1a2bf8a26a8"]->getformat(call_user_func_array($this->env->getFilter('sylius_convert_money')->getCallable(), array(($context["amount"] ?? $this->getContext($context, "amount")), $this->getAttribute($this->getAttribute($this->getAttribute(($context["sylius"] ?? $this->getContext($context, "sylius")), "channel", array()), "baseCurrency", array()), "code", array()), $this->getAttribute(($context["sylius"] ?? $this->getContext($context, "sylius")), "currencyCode", array()))), $this->getAttribute(($context["sylius"] ?? $this->getContext($context, "sylius")), "currencyCode", array()));
            
            $__internal_ab12a7fbcea8c3988fba8bd57a17d79afc6f4c155bf6cdecdb1575ed90ebe41b->leave($__internal_ab12a7fbcea8c3988fba8bd57a17d79afc6f4c155bf6cdecdb1575ed90ebe41b_prof);

            
            $__internal_2235ce89eb3bc7b1debb8b70850042ea3dd1ea4b016440627d67339085f57655->leave($__internal_2235ce89eb3bc7b1debb8b70850042ea3dd1ea4b016440627d67339085f57655_prof);

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
            $__internal_c77a99764ac612b131a20e6c14cde60fa50482519b358931654f719cc1d2e5c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_c77a99764ac612b131a20e6c14cde60fa50482519b358931654f719cc1d2e5c1->enter($__internal_c77a99764ac612b131a20e6c14cde60fa50482519b358931654f719cc1d2e5c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "calculatePrice"));

            $__internal_76d9196863ef1cdfa1e46bcf9cdf827915f4bdc276120cbafff41486366b4755 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_76d9196863ef1cdfa1e46bcf9cdf827915f4bdc276120cbafff41486366b4755->enter($__internal_76d9196863ef1cdfa1e46bcf9cdf827915f4bdc276120cbafff41486366b4755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "calculatePrice"));

            // line 12
            $context["__internal_6fc7d9ca742cf54f785ce3ebc78896d5b8a27b1a1c9a050bf3fb8ff3cf39008a"] = $this;
            // line 14
            echo $context["__internal_6fc7d9ca742cf54f785ce3ebc78896d5b8a27b1a1c9a050bf3fb8ff3cf39008a"]->getconvertAndFormat(call_user_func_array($this->env->getFilter('sylius_calculate_price')->getCallable(), array(($context["variant"] ?? $this->getContext($context, "variant")), array("channel" => $this->getAttribute(($context["sylius"] ?? $this->getContext($context, "sylius")), "channel", array())))));
            
            $__internal_76d9196863ef1cdfa1e46bcf9cdf827915f4bdc276120cbafff41486366b4755->leave($__internal_76d9196863ef1cdfa1e46bcf9cdf827915f4bdc276120cbafff41486366b4755_prof);

            
            $__internal_c77a99764ac612b131a20e6c14cde60fa50482519b358931654f719cc1d2e5c1->leave($__internal_c77a99764ac612b131a20e6c14cde60fa50482519b358931654f719cc1d2e5c1_prof);

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
