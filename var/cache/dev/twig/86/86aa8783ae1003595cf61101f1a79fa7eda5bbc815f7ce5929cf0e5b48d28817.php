<?php

/* SyliusAdminBundle:Order/Update:_actions.html.twig */
class __TwigTemplate_6993ee02382995887d9e6db3538adcb3050e9ef1f6d81ee563880d9cf0b7780a extends Twig_Template
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
        $__internal_e887041d45db023835368709b4973b6c25d3b2b501a73777bb69da6622cca7c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e887041d45db023835368709b4973b6c25d3b2b501a73777bb69da6622cca7c7->enter($__internal_e887041d45db023835368709b4973b6c25d3b2b501a73777bb69da6622cca7c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Update:_actions.html.twig"));

        $__internal_65eaae5721f8e853d2b63a855380daaca2ac4d000295bb21300ef23b65f9616d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65eaae5721f8e853d2b63a855380daaca2ac4d000295bb21300ef23b65f9616d->enter($__internal_65eaae5721f8e853d2b63a855380daaca2ac4d000295bb21300ef23b65f9616d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Update:_actions.html.twig"));

        // line 1
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_order_show", array("id" => $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "id", array()))), "html", null, true);
        echo "\" class=\"ui labeled icon button\"><i class=\"reply icon\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.return"), "html", null, true);
        echo "</a>
";
        
        $__internal_e887041d45db023835368709b4973b6c25d3b2b501a73777bb69da6622cca7c7->leave($__internal_e887041d45db023835368709b4973b6c25d3b2b501a73777bb69da6622cca7c7_prof);

        
        $__internal_65eaae5721f8e853d2b63a855380daaca2ac4d000295bb21300ef23b65f9616d->leave($__internal_65eaae5721f8e853d2b63a855380daaca2ac4d000295bb21300ef23b65f9616d_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Update:_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"{{ path('sylius_admin_order_show', {'id': order.id}) }}\" class=\"ui labeled icon button\"><i class=\"reply icon\"></i>{{ 'sylius.ui.return'|trans }}</a>
", "SyliusAdminBundle:Order/Update:_actions.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Update/_actions.html.twig");
    }
}
