<?php

/* @SyliusShop/Menu/_security.html.twig */
class __TwigTemplate_a584deef3b06940aaf6a99a6244d502e860ed7e0bb44c7b25c3de214adf755fa extends Twig_Template
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
        $__internal_931665704d2e4062be067d4f854d88d34e92a8a0fea5fa9f0d08c5cefba9b603 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_931665704d2e4062be067d4f854d88d34e92a8a0fea5fa9f0d08c5cefba9b603->enter($__internal_931665704d2e4062be067d4f854d88d34e92a8a0fea5fa9f0d08c5cefba9b603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Menu/_security.html.twig"));

        $__internal_1533e6d9967009ff2cec657edc1daf28e8431f0290c057523cdf6654dffbe24d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1533e6d9967009ff2cec657edc1daf28e8431f0290c057523cdf6654dffbe24d->enter($__internal_1533e6d9967009ff2cec657edc1daf28e8431f0290c057523cdf6654dffbe24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Menu/_security.html.twig"));

        // line 1
        echo "<div class=\"ui right stackable inverted menu\">
    ";
        // line 2
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 3
            echo "        <div class=\"item\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.hello"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "customer", array()), "fullName", array()), "html", null, true);
            echo "!</div>
        <a href=\"";
            // line 4
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_account_dashboard");
            echo "\" class=\"item\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.my_account"), "html", null, true);
            echo "</a>
        <a href=\"";
            // line 5
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_logout");
            echo "\" class=\"item sylius-logout-button\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.logout"), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 7
            echo "        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_login");
            echo "\" class=\"item\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.login"), "html", null, true);
            echo "</a>
        <a href=\"";
            // line 8
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_register");
            echo "\" class=\"item\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.register"), "html", null, true);
            echo "</a>
    ";
        }
        // line 10
        echo "</div>
";
        
        $__internal_931665704d2e4062be067d4f854d88d34e92a8a0fea5fa9f0d08c5cefba9b603->leave($__internal_931665704d2e4062be067d4f854d88d34e92a8a0fea5fa9f0d08c5cefba9b603_prof);

        
        $__internal_1533e6d9967009ff2cec657edc1daf28e8431f0290c057523cdf6654dffbe24d->leave($__internal_1533e6d9967009ff2cec657edc1daf28e8431f0290c057523cdf6654dffbe24d_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Menu/_security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 10,  57 => 8,  50 => 7,  43 => 5,  37 => 4,  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui right stackable inverted menu\">
    {% if is_granted('ROLE_USER') %}
        <div class=\"item\">{{ 'sylius.ui.hello'|trans }} {{ app.user.customer.fullName }}!</div>
        <a href=\"{{ path('sylius_shop_account_dashboard') }}\" class=\"item\">{{ 'sylius.ui.my_account'|trans }}</a>
        <a href=\"{{ path('sylius_shop_logout') }}\" class=\"item sylius-logout-button\">{{ 'sylius.ui.logout'|trans }}</a>
    {% else %}
        <a href=\"{{ path('sylius_shop_login') }}\" class=\"item\">{{ 'sylius.ui.login'|trans }}</a>
        <a href=\"{{ path('sylius_shop_register') }}\" class=\"item\">{{ 'sylius.ui.register'|trans }}</a>
    {% endif %}
</div>
", "@SyliusShop/Menu/_security.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Menu/_security.html.twig");
    }
}
