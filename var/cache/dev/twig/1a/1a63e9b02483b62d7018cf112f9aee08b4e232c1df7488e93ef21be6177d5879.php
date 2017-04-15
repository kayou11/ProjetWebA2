<?php

/* SyliusPayumBundle:Action/Stripe:obtainCheckoutToken.html.twig */
class __TwigTemplate_7e0bb94f019940a6660f6ac31ac7a4f81ee8c16452c516a1201e23a06a8ac5e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((($context["layout"] ?? $this->getContext($context, "layout"))) ? (($context["layout"] ?? $this->getContext($context, "layout"))) : ("SyliusPayumBundle::layout.html.twig")), "SyliusPayumBundle:Action/Stripe:obtainCheckoutToken.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b3179dd43519da69d41c1368a63c19b141d7226c438085da06990432f1a9771 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b3179dd43519da69d41c1368a63c19b141d7226c438085da06990432f1a9771->enter($__internal_2b3179dd43519da69d41c1368a63c19b141d7226c438085da06990432f1a9771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusPayumBundle:Action/Stripe:obtainCheckoutToken.html.twig"));

        $__internal_c39a59320a8fd1bbb26e8f51fc51918532e96fc8ebcdf287e1376c8800159dd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c39a59320a8fd1bbb26e8f51fc51918532e96fc8ebcdf287e1376c8800159dd2->enter($__internal_c39a59320a8fd1bbb26e8f51fc51918532e96fc8ebcdf287e1376c8800159dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusPayumBundle:Action/Stripe:obtainCheckoutToken.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b3179dd43519da69d41c1368a63c19b141d7226c438085da06990432f1a9771->leave($__internal_2b3179dd43519da69d41c1368a63c19b141d7226c438085da06990432f1a9771_prof);

        
        $__internal_c39a59320a8fd1bbb26e8f51fc51918532e96fc8ebcdf287e1376c8800159dd2->leave($__internal_c39a59320a8fd1bbb26e8f51fc51918532e96fc8ebcdf287e1376c8800159dd2_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_79e9dd3be9e5b7ea8a6e9c2d1034ddeea70eca3a5f5077f914187d8bc9979ee1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79e9dd3be9e5b7ea8a6e9c2d1034ddeea70eca3a5f5077f914187d8bc9979ee1->enter($__internal_79e9dd3be9e5b7ea8a6e9c2d1034ddeea70eca3a5f5077f914187d8bc9979ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c56f8cd2adfa599fbc50faa7fd3084ef5e48090a9c141cb5810d8242c9e71597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c56f8cd2adfa599fbc50faa7fd3084ef5e48090a9c141cb5810d8242c9e71597->enter($__internal_c56f8cd2adfa599fbc50faa7fd3084ef5e48090a9c141cb5810d8242c9e71597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "

    <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, ((array_key_exists("actionUrl", $context)) ? (_twig_default_filter(($context["actionUrl"] ?? $this->getContext($context, "actionUrl")), "")) : ("")), "html", null, true);
        echo "\" method=\"POST\">
        <script
                src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
                data-key=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["publishable_key"] ?? $this->getContext($context, "publishable_key")), "html", null, true);
        echo "\"
                data-image=\"";
        // line 10
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["model"] ?? null), "image", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["model"] ?? null), "image", array()), "")) : ("")), "html", null, true);
        echo "\"
                data-name=\"";
        // line 11
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["model"] ?? null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["model"] ?? null), "name", array()), "")) : ("")), "html", null, true);
        echo "\"
                data-description=\"";
        // line 12
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["model"] ?? null), "description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["model"] ?? null), "description", array()), "")) : ("")), "html", null, true);
        echo "\"
                data-amount=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["model"] ?? $this->getContext($context, "model")), "amount", array()), "html", null, true);
        echo "\"
                data-currency=\"";
        // line 14
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["model"] ?? null), "currency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["model"] ?? null), "currency", array()), "USD")) : ("USD")), "html", null, true);
        echo "\">
        </script>
    </form>
";
        
        $__internal_c56f8cd2adfa599fbc50faa7fd3084ef5e48090a9c141cb5810d8242c9e71597->leave($__internal_c56f8cd2adfa599fbc50faa7fd3084ef5e48090a9c141cb5810d8242c9e71597_prof);

        
        $__internal_79e9dd3be9e5b7ea8a6e9c2d1034ddeea70eca3a5f5077f914187d8bc9979ee1->leave($__internal_79e9dd3be9e5b7ea8a6e9c2d1034ddeea70eca3a5f5077f914187d8bc9979ee1_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_64696885f1bdfc5dbab56fc89d6e095b6bd1fb9d4ed779addf24b8da53fbe963 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64696885f1bdfc5dbab56fc89d6e095b6bd1fb9d4ed779addf24b8da53fbe963->enter($__internal_64696885f1bdfc5dbab56fc89d6e095b6bd1fb9d4ed779addf24b8da53fbe963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d48034d0df1121360b87f6c6ae25f4b7c99e75726a86684dce3c215260e8f018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d48034d0df1121360b87f6c6ae25f4b7c99e75726a86684dce3c215260e8f018->enter($__internal_d48034d0df1121360b87f6c6ae25f4b7c99e75726a86684dce3c215260e8f018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {\$('form .stripe-button-el').click();});
    </script>
";
        
        $__internal_d48034d0df1121360b87f6c6ae25f4b7c99e75726a86684dce3c215260e8f018->leave($__internal_d48034d0df1121360b87f6c6ae25f4b7c99e75726a86684dce3c215260e8f018_prof);

        
        $__internal_64696885f1bdfc5dbab56fc89d6e095b6bd1fb9d4ed779addf24b8da53fbe963->leave($__internal_64696885f1bdfc5dbab56fc89d6e095b6bd1fb9d4ed779addf24b8da53fbe963_prof);

    }

    public function getTemplateName()
    {
        return "SyliusPayumBundle:Action/Stripe:obtainCheckoutToken.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 20,  95 => 19,  81 => 14,  77 => 13,  73 => 12,  69 => 11,  65 => 10,  61 => 9,  55 => 6,  49 => 4,  40 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends layout ?: 'SyliusPayumBundle::layout.html.twig' %}

{% block content %}
    {{ parent() }}

    <form action=\"{{ actionUrl|default('') }}\" method=\"POST\">
        <script
                src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
                data-key=\"{{ publishable_key }}\"
                data-image=\"{{ model.image|default(\"\") }}\"
                data-name=\"{{ model.name|default(\"\") }}\"
                data-description=\"{{ model.description|default(\"\") }}\"
                data-amount=\"{{ model.amount }}\"
                data-currency=\"{{ model.currency|default(\"USD\") }}\">
        </script>
    </form>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {\$('form .stripe-button-el').click();});
    </script>
{% endblock %}
", "SyliusPayumBundle:Action/Stripe:obtainCheckoutToken.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/PayumBundle/Resources/views/Action/Stripe/obtainCheckoutToken.html.twig");
    }
}
