<?php

/* SyliusAdminBundle:Customer/Order/Index:_breadcrumb.html.twig */
class __TwigTemplate_4bdab186e1b20a7a815667387dd37916fa34a4c10394a6efa10bcb615036e520 extends Twig_Template
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
        $__internal_50c87fba79872a7144851b84aef9b22fe1b26363cf579f8ceb7921a7fb501a9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50c87fba79872a7144851b84aef9b22fe1b26363cf579f8ceb7921a7fb501a9a->enter($__internal_50c87fba79872a7144851b84aef9b22fe1b26363cf579f8ceb7921a7fb501a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Order/Index:_breadcrumb.html.twig"));

        $__internal_2794a802bda3286682f84952909a3e24f94c85062f01b5da724dbffc5386cf1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2794a802bda3286682f84952909a3e24f94c85062f01b5da724dbffc5386cf1b->enter($__internal_2794a802bda3286682f84952909a3e24f94c85062f01b5da724dbffc5386cf1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Order/Index:_breadcrumb.html.twig"));

        // line 1
        $context["breadcrumb"] = $this->loadTemplate("@SyliusAdmin/Macro/breadcrumb.html.twig", "SyliusAdminBundle:Customer/Order/Index:_breadcrumb.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["breadcrumbs"] = array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.administration"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_dashboard")), 1 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.customers"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_customer_index")), 2 => array("label" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 6
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "id"), "method")), 3 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.orders")));
        // line 10
        echo "
";
        // line 11
        echo $context["breadcrumb"]->getcrumble(($context["breadcrumbs"] ?? $this->getContext($context, "breadcrumbs")));
        echo "
";
        
        $__internal_50c87fba79872a7144851b84aef9b22fe1b26363cf579f8ceb7921a7fb501a9a->leave($__internal_50c87fba79872a7144851b84aef9b22fe1b26363cf579f8ceb7921a7fb501a9a_prof);

        
        $__internal_2794a802bda3286682f84952909a3e24f94c85062f01b5da724dbffc5386cf1b->leave($__internal_2794a802bda3286682f84952909a3e24f94c85062f01b5da724dbffc5386cf1b_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Customer/Order/Index:_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 11,  33 => 10,  31 => 6,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusAdmin/Macro/breadcrumb.html.twig' as breadcrumb %}

{% set breadcrumbs = [
        { label: 'sylius.ui.administration'|trans, url: path('sylius_admin_dashboard') },
        { label: 'sylius.ui.customers'|trans, url: path('sylius_admin_customer_index') },
        { label: app.request.attributes.get('id') },
        { label: 'sylius.ui.orders'|trans },
    ]
%}

{{ breadcrumb.crumble(breadcrumbs) }}
", "SyliusAdminBundle:Customer/Order/Index:_breadcrumb.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Customer/Order/Index/_breadcrumb.html.twig");
    }
}
