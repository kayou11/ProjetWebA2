<?php

/* SyliusAdminBundle:Customer/Order/Index:_headerTitle.html.twig */
class __TwigTemplate_c8550955003ac3c020e7b70c69345024665eb47835cf9757ec59f5b9bd770ea4 extends Twig_Template
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
        $__internal_d15ef8f88881a299653ddb4a797a8b8272220bd7d305965547fcaa798381af03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d15ef8f88881a299653ddb4a797a8b8272220bd7d305965547fcaa798381af03->enter($__internal_d15ef8f88881a299653ddb4a797a8b8272220bd7d305965547fcaa798381af03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Order/Index:_headerTitle.html.twig"));

        $__internal_fbe6edb8e3fcce8e0ebea02c1835b216475eafb08c2d2e4f882f445e08afbadc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbe6edb8e3fcce8e0ebea02c1835b216475eafb08c2d2e4f882f445e08afbadc->enter($__internal_fbe6edb8e3fcce8e0ebea02c1835b216475eafb08c2d2e4f882f445e08afbadc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Order/Index:_headerTitle.html.twig"));

        // line 1
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_admin_partial_customer_show", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 2
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "id"), "method"), "template" => "@SyliusAdmin/Customer/Order/Index/_customerHeader.html.twig", "vars" => $this->getAttribute(        // line 4
($context["configuration"] ?? $this->getContext($context, "configuration")), "vars", array()))));
        // line 5
        echo "
";
        
        $__internal_d15ef8f88881a299653ddb4a797a8b8272220bd7d305965547fcaa798381af03->leave($__internal_d15ef8f88881a299653ddb4a797a8b8272220bd7d305965547fcaa798381af03_prof);

        
        $__internal_fbe6edb8e3fcce8e0ebea02c1835b216475eafb08c2d2e4f882f445e08afbadc->leave($__internal_fbe6edb8e3fcce8e0ebea02c1835b216475eafb08c2d2e4f882f445e08afbadc_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Customer/Order/Index:_headerTitle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  27 => 4,  26 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ render(url('sylius_admin_partial_customer_show', {
    'id': app.request.attributes.get('id'),
    'template': '@SyliusAdmin/Customer/Order/Index/_customerHeader.html.twig',
    'vars': configuration.vars
})) }}
", "SyliusAdminBundle:Customer/Order/Index:_headerTitle.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Customer/Order/Index/_headerTitle.html.twig");
    }
}
