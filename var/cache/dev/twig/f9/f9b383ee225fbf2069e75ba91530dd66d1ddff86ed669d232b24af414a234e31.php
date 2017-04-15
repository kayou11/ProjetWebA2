<?php

/* SyliusAdminBundle:Order/History:_breadcrumb.html.twig */
class __TwigTemplate_7c35b3f3cb29553b3f0d72c9e3cf26770e4b66bf56bd4b25c5bf2bd6151a9f79 extends Twig_Template
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
        $__internal_86872d9ca53fabe61a3125242542ae78ffb3a5c37ec6fba4d731aa044a0c2847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86872d9ca53fabe61a3125242542ae78ffb3a5c37ec6fba4d731aa044a0c2847->enter($__internal_86872d9ca53fabe61a3125242542ae78ffb3a5c37ec6fba4d731aa044a0c2847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/History:_breadcrumb.html.twig"));

        $__internal_5ee14a1400b48d575c6b303f7d65c38487cb44a1de6f4b23bb919951fd2b53fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ee14a1400b48d575c6b303f7d65c38487cb44a1de6f4b23bb919951fd2b53fd->enter($__internal_5ee14a1400b48d575c6b303f7d65c38487cb44a1de6f4b23bb919951fd2b53fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/History:_breadcrumb.html.twig"));

        // line 1
        $context["breadcrumb"] = $this->loadTemplate("@SyliusAdmin/Macro/breadcrumb.html.twig", "SyliusAdminBundle:Order/History:_breadcrumb.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["breadcrumbs"] = array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.administration"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_dashboard")), 1 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.orders"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_order_index")), 2 => array("label" => ("#" . $this->getAttribute(        // line 6
($context["order"] ?? $this->getContext($context, "order")), "number", array())), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_order_show", array("id" => $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "id", array())))), 3 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.history")));
        // line 10
        echo "
";
        // line 11
        echo $context["breadcrumb"]->getcrumble(($context["breadcrumbs"] ?? $this->getContext($context, "breadcrumbs")));
        echo "
";
        
        $__internal_86872d9ca53fabe61a3125242542ae78ffb3a5c37ec6fba4d731aa044a0c2847->leave($__internal_86872d9ca53fabe61a3125242542ae78ffb3a5c37ec6fba4d731aa044a0c2847_prof);

        
        $__internal_5ee14a1400b48d575c6b303f7d65c38487cb44a1de6f4b23bb919951fd2b53fd->leave($__internal_5ee14a1400b48d575c6b303f7d65c38487cb44a1de6f4b23bb919951fd2b53fd_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/History:_breadcrumb.html.twig";
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
        { label: 'sylius.ui.history'|trans }
    ]
%}

{{ breadcrumb.crumble(breadcrumbs) }}
", "SyliusAdminBundle:Order/History:_breadcrumb.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/History/_breadcrumb.html.twig");
    }
}
