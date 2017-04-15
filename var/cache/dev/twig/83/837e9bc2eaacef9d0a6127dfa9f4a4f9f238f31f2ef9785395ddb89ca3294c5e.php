<?php

/* SyliusAdminBundle:Dashboard:_menu.html.twig */
class __TwigTemplate_0366f554f9fff7fdbf9c07e498289d67b16f2e67a86da5daa5b91bc8d976e693 extends Twig_Template
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
        $__internal_6e76929bea865abf63d9122ec6fa3f313556ec140aa609a2f67d8a335a7c4af3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e76929bea865abf63d9122ec6fa3f313556ec140aa609a2f67d8a335a7c4af3->enter($__internal_6e76929bea865abf63d9122ec6fa3f313556ec140aa609a2f67d8a335a7c4af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Dashboard:_menu.html.twig"));

        $__internal_494ada36f7a9ec06e4c463be3c1883a443fa325621b3762671abae1fe407794e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_494ada36f7a9ec06e4c463be3c1883a443fa325621b3762671abae1fe407794e->enter($__internal_494ada36f7a9ec06e4c463be3c1883a443fa325621b3762671abae1fe407794e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Dashboard:_menu.html.twig"));

        // line 1
        echo "<div class=\"ui fluid labeled four icon item menu\">
    <a href=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_product_index");
        echo "\" class=\"item\">
        <i class=\"cubes icon\"></i>
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.products"), "html", null, true);
        echo "
    </a>
    <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_order_index");
        echo "\" class=\"item\">
        <i class=\"shop icon\"></i>
        ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.orders"), "html", null, true);
        echo "
    </a>
    <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_customer_index");
        echo "\" class=\"item\">
        <i class=\"users icon\"></i>
        ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.customers"), "html", null, true);
        echo "
    </a>
    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_promotion_index");
        echo "\" class=\"item\">
        <i class=\"ticket icon\"></i>
        ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.promotions"), "html", null, true);
        echo "
    </a>
</div>

";
        
        $__internal_6e76929bea865abf63d9122ec6fa3f313556ec140aa609a2f67d8a335a7c4af3->leave($__internal_6e76929bea865abf63d9122ec6fa3f313556ec140aa609a2f67d8a335a7c4af3_prof);

        
        $__internal_494ada36f7a9ec06e4c463be3c1883a443fa325621b3762671abae1fe407794e->leave($__internal_494ada36f7a9ec06e4c463be3c1883a443fa325621b3762671abae1fe407794e_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Dashboard:_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  58 => 14,  53 => 12,  48 => 10,  43 => 8,  38 => 6,  33 => 4,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui fluid labeled four icon item menu\">
    <a href=\"{{ path('sylius_admin_product_index') }}\" class=\"item\">
        <i class=\"cubes icon\"></i>
        {{ 'sylius.ui.products'|trans }}
    </a>
    <a href=\"{{ path('sylius_admin_order_index') }}\" class=\"item\">
        <i class=\"shop icon\"></i>
        {{ 'sylius.ui.orders'|trans }}
    </a>
    <a href=\"{{ path('sylius_admin_customer_index') }}\" class=\"item\">
        <i class=\"users icon\"></i>
        {{ 'sylius.ui.customers'|trans }}
    </a>
    <a href=\"{{ path('sylius_admin_promotion_index') }}\" class=\"item\">
        <i class=\"ticket icon\"></i>
        {{ 'sylius.ui.promotions'|trans }}
    </a>
</div>

", "SyliusAdminBundle:Dashboard:_menu.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Dashboard/_menu.html.twig");
    }
}
