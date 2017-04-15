<?php

/* SyliusAdminBundle:Common/Macro:money.html.twig */
class __TwigTemplate_964673335bbf3cb006a854c67591a99aa1f76ede73b1477936902f2881c39613 extends Twig_Template
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
        $__internal_3c061ee96d80f694612992364a9601cc7f80fb7dfefca178d842cf66159875f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c061ee96d80f694612992364a9601cc7f80fb7dfefca178d842cf66159875f8->enter($__internal_3c061ee96d80f694612992364a9601cc7f80fb7dfefca178d842cf66159875f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Common/Macro:money.html.twig"));

        $__internal_1cb1024ad89e94f5458c16a39363d3884ad9092ec21279ef3d385c3608269118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cb1024ad89e94f5458c16a39363d3884ad9092ec21279ef3d385c3608269118->enter($__internal_1cb1024ad89e94f5458c16a39363d3884ad9092ec21279ef3d385c3608269118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Common/Macro:money.html.twig"));

        
        $__internal_3c061ee96d80f694612992364a9601cc7f80fb7dfefca178d842cf66159875f8->leave($__internal_3c061ee96d80f694612992364a9601cc7f80fb7dfefca178d842cf66159875f8_prof);

        
        $__internal_1cb1024ad89e94f5458c16a39363d3884ad9092ec21279ef3d385c3608269118->leave($__internal_1cb1024ad89e94f5458c16a39363d3884ad9092ec21279ef3d385c3608269118_prof);

    }

    // line 1
    public function getformat($__amount__ = null, $__currency__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "amount" => $__amount__,
            "currency" => $__currency__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_e45dbd809fb9c30852e3ec167cd4b97d720e2e7788278e3fa3b4aa559b472bb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_e45dbd809fb9c30852e3ec167cd4b97d720e2e7788278e3fa3b4aa559b472bb1->enter($__internal_e45dbd809fb9c30852e3ec167cd4b97d720e2e7788278e3fa3b4aa559b472bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "format"));

            $__internal_c8538f898fea6cd7bee04ed5cf7d1964d44c5c28d636b6192a2d1684dcf3db0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_c8538f898fea6cd7bee04ed5cf7d1964d44c5c28d636b6192a2d1684dcf3db0a->enter($__internal_c8538f898fea6cd7bee04ed5cf7d1964d44c5c28d636b6192a2d1684dcf3db0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "format"));

            // line 2
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_format_money')->getCallable(), array(($context["amount"] ?? $this->getContext($context, "amount")), ($context["currency"] ?? $this->getContext($context, "currency")), $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "localeCode", array()))), "html", null, true);
            
            $__internal_c8538f898fea6cd7bee04ed5cf7d1964d44c5c28d636b6192a2d1684dcf3db0a->leave($__internal_c8538f898fea6cd7bee04ed5cf7d1964d44c5c28d636b6192a2d1684dcf3db0a_prof);

            
            $__internal_e45dbd809fb9c30852e3ec167cd4b97d720e2e7788278e3fa3b4aa559b472bb1->leave($__internal_e45dbd809fb9c30852e3ec167cd4b97d720e2e7788278e3fa3b4aa559b472bb1_prof);

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
        return "SyliusAdminBundle:Common/Macro:money.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%- macro format(amount, currency) -%}
    {{ amount|sylius_format_money(currency, app.user.localeCode) }}
{%- endmacro -%}
", "SyliusAdminBundle:Common/Macro:money.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Common/Macro/money.html.twig");
    }
}
