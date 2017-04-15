<?php

/* SyliusAdminBundle:Order/Update:_breadcrumb.html.twig */
class __TwigTemplate_2620f68fb308bef9b5ffd5f42e965e36d828afc873a991185a53695b056c9d15 extends Twig_Template
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
        $__internal_0a4da5a2f0099746bb9705ac66d1f6494a695932acef76abc507ab8d821af4dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a4da5a2f0099746bb9705ac66d1f6494a695932acef76abc507ab8d821af4dd->enter($__internal_0a4da5a2f0099746bb9705ac66d1f6494a695932acef76abc507ab8d821af4dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Update:_breadcrumb.html.twig"));

        $__internal_9c99b7571fb3c1705806a276dfaff81bc936012891247b9f92a46838042effaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c99b7571fb3c1705806a276dfaff81bc936012891247b9f92a46838042effaa->enter($__internal_9c99b7571fb3c1705806a276dfaff81bc936012891247b9f92a46838042effaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Update:_breadcrumb.html.twig"));

        // line 1
        $context["breadcrumb"] = $this->loadTemplate("@SyliusAdmin/Macro/breadcrumb.html.twig", "SyliusAdminBundle:Order/Update:_breadcrumb.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["breadcrumbs"] = array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.administration"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_dashboard")), 1 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.orders"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_order_index")), 2 => array("label" => ("#" . $this->getAttribute(        // line 6
($context["order"] ?? $this->getContext($context, "order")), "number", array())), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_order_show", array("id" => $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "id", array())))), 3 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.edit")));
        // line 10
        echo "
";
        // line 11
        echo $context["breadcrumb"]->getcrumble(($context["breadcrumbs"] ?? $this->getContext($context, "breadcrumbs")));
        echo "
";
        
        $__internal_0a4da5a2f0099746bb9705ac66d1f6494a695932acef76abc507ab8d821af4dd->leave($__internal_0a4da5a2f0099746bb9705ac66d1f6494a695932acef76abc507ab8d821af4dd_prof);

        
        $__internal_9c99b7571fb3c1705806a276dfaff81bc936012891247b9f92a46838042effaa->leave($__internal_9c99b7571fb3c1705806a276dfaff81bc936012891247b9f92a46838042effaa_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Update:_breadcrumb.html.twig";
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
        { label: 'sylius.ui.orders'|trans, url: path('sylius_admin_order_index') },
        { label: '#'~order.number, url: path('sylius_admin_order_show', {'id': order.id}) },
        { label: 'sylius.ui.edit'|trans }
    ]
%}

{{ breadcrumb.crumble(breadcrumbs) }}
", "SyliusAdminBundle:Order/Update:_breadcrumb.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Update/_breadcrumb.html.twig");
    }
}
