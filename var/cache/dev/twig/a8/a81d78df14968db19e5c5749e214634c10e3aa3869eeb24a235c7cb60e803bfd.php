<?php

/* SyliusAdminBundle:Customer/Show:_breadcrumb.html.twig */
class __TwigTemplate_34d2b7484d31cd16506bd37f51a096fe2964b6be8fff592ef6b0269084715606 extends Twig_Template
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
        $__internal_7a2fbdfb1c705df387c9e49d7815230eeb76e9afbb707ce19f31c67e6ce0f0dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a2fbdfb1c705df387c9e49d7815230eeb76e9afbb707ce19f31c67e6ce0f0dd->enter($__internal_7a2fbdfb1c705df387c9e49d7815230eeb76e9afbb707ce19f31c67e6ce0f0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Show:_breadcrumb.html.twig"));

        $__internal_982b0ec074c04f6ef56f8366fdaa8ba89060d27809be21eef45746c05baeb993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_982b0ec074c04f6ef56f8366fdaa8ba89060d27809be21eef45746c05baeb993->enter($__internal_982b0ec074c04f6ef56f8366fdaa8ba89060d27809be21eef45746c05baeb993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Show:_breadcrumb.html.twig"));

        // line 1
        $context["breadcrumb"] = $this->loadTemplate("@SyliusAdmin/Macro/breadcrumb.html.twig", "SyliusAdminBundle:Customer/Show:_breadcrumb.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["breadcrumbs"] = array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.administration"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_dashboard")), 1 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.customers"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_customer_index")), 2 => array("label" => $this->getAttribute(        // line 6
($context["customer"] ?? $this->getContext($context, "customer")), "email", array())));
        // line 8
        echo "
";
        // line 9
        echo $context["breadcrumb"]->getcrumble(($context["breadcrumbs"] ?? $this->getContext($context, "breadcrumbs")));
        echo "
";
        
        $__internal_7a2fbdfb1c705df387c9e49d7815230eeb76e9afbb707ce19f31c67e6ce0f0dd->leave($__internal_7a2fbdfb1c705df387c9e49d7815230eeb76e9afbb707ce19f31c67e6ce0f0dd_prof);

        
        $__internal_982b0ec074c04f6ef56f8366fdaa8ba89060d27809be21eef45746c05baeb993->leave($__internal_982b0ec074c04f6ef56f8366fdaa8ba89060d27809be21eef45746c05baeb993_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Customer/Show:_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 9,  33 => 8,  31 => 6,  30 => 3,  27 => 2,  25 => 1,);
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
    { label: customer.email }
] %}

{{ breadcrumb.crumble(breadcrumbs) }}
", "SyliusAdminBundle:Customer/Show:_breadcrumb.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Customer/Show/_breadcrumb.html.twig");
    }
}
