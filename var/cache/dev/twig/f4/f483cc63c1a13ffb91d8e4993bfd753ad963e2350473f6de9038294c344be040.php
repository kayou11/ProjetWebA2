<?php

/* SyliusShopBundle:Checkout/SelectPayment:_unavailable.html.twig */
class __TwigTemplate_76577c3a09d9bd40e24f2721f159557caf00f21a18cc99c5c2565caf20d8bbe4 extends Twig_Template
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
        $__internal_06e1190af4f8e21e41a0d2f163dcaf2104d4a1ac5b3a109d462864eb3824c40d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06e1190af4f8e21e41a0d2f163dcaf2104d4a1ac5b3a109d462864eb3824c40d->enter($__internal_06e1190af4f8e21e41a0d2f163dcaf2104d4a1ac5b3a109d462864eb3824c40d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/SelectPayment:_unavailable.html.twig"));

        $__internal_66a4d69d351a782a1020ba4c8bff0ca637fd1cc7627176f2d34753dfbfb1f40c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66a4d69d351a782a1020ba4c8bff0ca637fd1cc7627176f2d34753dfbfb1f40c->enter($__internal_66a4d69d351a782a1020ba4c8bff0ca637fd1cc7627176f2d34753dfbfb1f40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/SelectPayment:_unavailable.html.twig"));

        // line 1
        echo "<div class=\"ui icon message\" id=\"sylius-order-cannot-be-paid\">
    <i class=\"warning sign icon\"></i>
    <div class=\"content\">
        <div class=\"header\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.warning"), "html", null, true);
        echo "</div>
        <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.no_payment_methods_available"), "html", null, true);
        echo ".</p>
    </div>
</div>
";
        
        $__internal_06e1190af4f8e21e41a0d2f163dcaf2104d4a1ac5b3a109d462864eb3824c40d->leave($__internal_06e1190af4f8e21e41a0d2f163dcaf2104d4a1ac5b3a109d462864eb3824c40d_prof);

        
        $__internal_66a4d69d351a782a1020ba4c8bff0ca637fd1cc7627176f2d34753dfbfb1f40c->leave($__internal_66a4d69d351a782a1020ba4c8bff0ca637fd1cc7627176f2d34753dfbfb1f40c_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout/SelectPayment:_unavailable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui icon message\" id=\"sylius-order-cannot-be-paid\">
    <i class=\"warning sign icon\"></i>
    <div class=\"content\">
        <div class=\"header\">{{ 'sylius.ui.warning'|trans }}</div>
        <p>{{ 'sylius.ui.no_payment_methods_available'|trans }}.</p>
    </div>
</div>
", "SyliusShopBundle:Checkout/SelectPayment:_unavailable.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/SelectPayment/_unavailable.html.twig");
    }
}
