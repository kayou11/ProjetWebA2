<?php

/* SyliusShopBundle:Checkout:_header.html.twig */
class __TwigTemplate_8cd2d7da044148e89a4383d64c790dfa0926345890daf7060316bf841172ddf1 extends Twig_Template
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
        $__internal_bc05a43b1bf9371dbafa652b1a2e5f35bfb4f6f90dbcb57eb43c99218dee2eb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc05a43b1bf9371dbafa652b1a2e5f35bfb4f6f90dbcb57eb43c99218dee2eb7->enter($__internal_bc05a43b1bf9371dbafa652b1a2e5f35bfb4f6f90dbcb57eb43c99218dee2eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout:_header.html.twig"));

        $__internal_275c8b3ac45c6305a73f0b495646bdba1964bd76c89f2926454854b16496ded9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_275c8b3ac45c6305a73f0b495646bdba1964bd76c89f2926454854b16496ded9->enter($__internal_275c8b3ac45c6305a73f0b495646bdba1964bd76c89f2926454854b16496ded9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout:_header.html.twig"));

        // line 1
        echo "<div class=\"ui basic segment\">
    <div class=\"ui large text menu\">
        <div class=\"ui small image\">
            <a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/shop/img/logo.png"), "html", null, true);
        echo "\" /></a>
        </div>
        <div class=\"right menu\">
            ";
        // line 7
        if ( !(null === (($this->getAttribute($this->getAttribute(($context["order"] ?? null), "customer", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["order"] ?? null), "customer", array(), "any", false, true), "id", array()), null)) : (null)))) {
            // line 8
            echo "                <div class=\"item\" id=\"purchaser-email\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.checking_out_as"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["order"] ?? null), "customer", array(), "any", false, true), "fullName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["order"] ?? null), "customer", array(), "any", false, true), "fullName", array()), $this->getAttribute($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "customer", array()), "email", array()))) : ($this->getAttribute($this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "customer", array()), "email", array()))), "html", null, true);
            echo ".</div>
            ";
        } else {
            // line 10
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_login");
            echo "\" class=\"item\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.sign_in"), "html", null, true);
            echo "</a>
            ";
        }
        // line 12
        echo "        </div>
    </div>
</div>
";
        
        $__internal_bc05a43b1bf9371dbafa652b1a2e5f35bfb4f6f90dbcb57eb43c99218dee2eb7->leave($__internal_bc05a43b1bf9371dbafa652b1a2e5f35bfb4f6f90dbcb57eb43c99218dee2eb7_prof);

        
        $__internal_275c8b3ac45c6305a73f0b495646bdba1964bd76c89f2926454854b16496ded9->leave($__internal_275c8b3ac45c6305a73f0b495646bdba1964bd76c89f2926454854b16496ded9_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout:_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  48 => 10,  40 => 8,  38 => 7,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui basic segment\">
    <div class=\"ui large text menu\">
        <div class=\"ui small image\">
            <a href=\"{{ path('sylius_shop_homepage') }}\"><img src=\"{{ asset('assets/shop/img/logo.png') }}\" /></a>
        </div>
        <div class=\"right menu\">
            {% if order.customer.id|default(null) is not null %}
                <div class=\"item\" id=\"purchaser-email\">{{ 'sylius.ui.checking_out_as'|trans }} {{ order.customer.fullName|default(order.customer.email) }}.</div>
            {% else %}
                <a href=\"{{ path('sylius_shop_login') }}\" class=\"item\">{{ 'sylius.ui.sign_in'|trans }}</a>
            {% endif %}
        </div>
    </div>
</div>
", "SyliusShopBundle:Checkout:_header.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/_header.html.twig");
    }
}
