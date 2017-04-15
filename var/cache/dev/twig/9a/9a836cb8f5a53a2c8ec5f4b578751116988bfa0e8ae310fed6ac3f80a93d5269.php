<?php

/* SyliusAdminBundle:Customer/Show:_menu.html.twig */
class __TwigTemplate_e09df99000ca70bbb9a6ded8578e1bb85498400feb09d665848797dd5397bb66 extends Twig_Template
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
        $__internal_e329c70eb4892eaccc7894c6536731134fda02e353502ce4a12a15e6c514adfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e329c70eb4892eaccc7894c6536731134fda02e353502ce4a12a15e6c514adfe->enter($__internal_e329c70eb4892eaccc7894c6536731134fda02e353502ce4a12a15e6c514adfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Show:_menu.html.twig"));

        $__internal_0e3869523051eaa7b963a39e90c64e6373f89f1bbe4f5cab9906e6409d84aef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e3869523051eaa7b963a39e90c64e6373f89f1bbe4f5cab9906e6409d84aef5->enter($__internal_0e3869523051eaa7b963a39e90c64e6373f89f1bbe4f5cab9906e6409d84aef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Show:_menu.html.twig"));

        // line 1
        echo "<div class=\"ui fluid labeled four icon item menu\">
    <div class=\"item\">
        <i class=\"alternate share icon\"></i>
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.channel"), "html", null, true);
        echo "
    </div>
    <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_customer_order_index", array("id" => $this->getAttribute(($context["customer"] ?? $this->getContext($context, "customer")), "id", array()))), "html", null, true);
        echo "\" class=\"item\">
        <i class=\"shop icon\"></i>
        ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.orders"), "html", null, true);
        echo "
    </a>
    <div class=\"item\">
        <i class=\"dollar icon\"></i>
        ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.total_value_of_orders"), "html", null, true);
        echo "
    </div>
    <div class=\"item\">
        <i class=\"dollar icon\"></i>
        ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.average_order_value"), "html", null, true);
        echo "
    </div>
</div>

";
        
        $__internal_e329c70eb4892eaccc7894c6536731134fda02e353502ce4a12a15e6c514adfe->leave($__internal_e329c70eb4892eaccc7894c6536731134fda02e353502ce4a12a15e6c514adfe_prof);

        
        $__internal_0e3869523051eaa7b963a39e90c64e6373f89f1bbe4f5cab9906e6409d84aef5->leave($__internal_0e3869523051eaa7b963a39e90c64e6373f89f1bbe4f5cab9906e6409d84aef5_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Customer/Show:_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 16,  47 => 12,  40 => 8,  35 => 6,  30 => 4,  25 => 1,);
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
    <div class=\"item\">
        <i class=\"alternate share icon\"></i>
        {{ 'sylius.ui.channel'|trans }}
    </div>
    <a href=\"{{ path('sylius_admin_customer_order_index', {'id': customer.id}) }}\" class=\"item\">
        <i class=\"shop icon\"></i>
        {{ 'sylius.ui.orders'|trans }}
    </a>
    <div class=\"item\">
        <i class=\"dollar icon\"></i>
        {{ 'sylius.ui.total_value_of_orders'|trans }}
    </div>
    <div class=\"item\">
        <i class=\"dollar icon\"></i>
        {{ 'sylius.ui.average_order_value'|trans }}
    </div>
</div>

", "SyliusAdminBundle:Customer/Show:_menu.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Customer/Show/_menu.html.twig");
    }
}
