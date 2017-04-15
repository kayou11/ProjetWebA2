<?php

/* SyliusAdminBundle:Order/Show:_breadcrumb.html.twig */
class __TwigTemplate_fac7a1bd68f55213de381b64448e7eaf8ea25e7e6134bb95eae6256a39032f17 extends Twig_Template
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
        $__internal_521094faed8f0947e3698f948926f1d459fcd9b0069864617bc45d10b13ec98c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_521094faed8f0947e3698f948926f1d459fcd9b0069864617bc45d10b13ec98c->enter($__internal_521094faed8f0947e3698f948926f1d459fcd9b0069864617bc45d10b13ec98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_breadcrumb.html.twig"));

        $__internal_75a5fc1a89ff8900716b7bb6c8fb78e335313e34141b9d2339a9534e38e90a98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75a5fc1a89ff8900716b7bb6c8fb78e335313e34141b9d2339a9534e38e90a98->enter($__internal_75a5fc1a89ff8900716b7bb6c8fb78e335313e34141b9d2339a9534e38e90a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_breadcrumb.html.twig"));

        // line 1
        $context["breadcrumb"] = $this->loadTemplate("@SyliusAdmin/Macro/breadcrumb.html.twig", "SyliusAdminBundle:Order/Show:_breadcrumb.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["breadcrumbs"] = array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.administration"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_dashboard")), 1 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.orders"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_order_index")), 2 => array("label" => ("#" . $this->getAttribute(        // line 6
($context["order"] ?? $this->getContext($context, "order")), "number", array()))));
        // line 9
        echo "
";
        // line 10
        echo $context["breadcrumb"]->getcrumble(($context["breadcrumbs"] ?? $this->getContext($context, "breadcrumbs")));
        echo "
";
        
        $__internal_521094faed8f0947e3698f948926f1d459fcd9b0069864617bc45d10b13ec98c->leave($__internal_521094faed8f0947e3698f948926f1d459fcd9b0069864617bc45d10b13ec98c_prof);

        
        $__internal_75a5fc1a89ff8900716b7bb6c8fb78e335313e34141b9d2339a9534e38e90a98->leave($__internal_75a5fc1a89ff8900716b7bb6c8fb78e335313e34141b9d2339a9534e38e90a98_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Show:_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 10,  33 => 9,  31 => 6,  30 => 3,  27 => 2,  25 => 1,);
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
        { label: '#'~order.number }
    ]
%}

{{ breadcrumb.crumble(breadcrumbs) }}
", "SyliusAdminBundle:Order/Show:_breadcrumb.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Show/_breadcrumb.html.twig");
    }
}
