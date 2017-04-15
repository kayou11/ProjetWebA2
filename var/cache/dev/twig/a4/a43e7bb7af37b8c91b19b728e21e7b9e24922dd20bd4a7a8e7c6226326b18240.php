<?php

/* SyliusAdminBundle:Inventory/Index:_breadcrumb.html.twig */
class __TwigTemplate_46c9c337e8a1040ea4e2f30730bb9ed5452714b282e31debb31d308ec525ef49 extends Twig_Template
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
        $__internal_d5f50eeac7549394e2c8719ff3961dda3df9efc3e6523a46b1df367c7c3689ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5f50eeac7549394e2c8719ff3961dda3df9efc3e6523a46b1df367c7c3689ff->enter($__internal_d5f50eeac7549394e2c8719ff3961dda3df9efc3e6523a46b1df367c7c3689ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Inventory/Index:_breadcrumb.html.twig"));

        $__internal_daaf7bb81dc5aae3816c0739cd8f66f68033c23bf712c49a9d1f2ae869d383a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daaf7bb81dc5aae3816c0739cd8f66f68033c23bf712c49a9d1f2ae869d383a3->enter($__internal_daaf7bb81dc5aae3816c0739cd8f66f68033c23bf712c49a9d1f2ae869d383a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Inventory/Index:_breadcrumb.html.twig"));

        // line 1
        $context["breadcrumb"] = $this->loadTemplate("@SyliusAdmin/Macro/breadcrumb.html.twig", "SyliusAdminBundle:Inventory/Index:_breadcrumb.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo $context["breadcrumb"]->getcrumble(array(0 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.administration"), "url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_dashboard")), 1 => array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.inventory"))));
        // line 6
        echo "
";
        
        $__internal_d5f50eeac7549394e2c8719ff3961dda3df9efc3e6523a46b1df367c7c3689ff->leave($__internal_d5f50eeac7549394e2c8719ff3961dda3df9efc3e6523a46b1df367c7c3689ff_prof);

        
        $__internal_daaf7bb81dc5aae3816c0739cd8f66f68033c23bf712c49a9d1f2ae869d383a3->leave($__internal_daaf7bb81dc5aae3816c0739cd8f66f68033c23bf712c49a9d1f2ae869d383a3_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Inventory/Index:_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  30 => 3,  27 => 2,  25 => 1,);
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

{{ breadcrumb.crumble([
    { label: 'sylius.ui.administration'|trans, url: path('sylius_admin_dashboard') },
    { label: 'sylius.ui.inventory'|trans },
]) }}
", "SyliusAdminBundle:Inventory/Index:_breadcrumb.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Inventory/Index/_breadcrumb.html.twig");
    }
}
