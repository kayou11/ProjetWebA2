<?php

/* SyliusAdminBundle:Order/History:_address.html.twig */
class __TwigTemplate_fe5485ad0eb6f08591d1af822a5145bcb3f69934ee29f55827a70556c647c5b0 extends Twig_Template
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
        $__internal_779e58ddb77c80990cdbc1f242da0397b22a6a3e6f8b06e88040cac75b0141fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_779e58ddb77c80990cdbc1f242da0397b22a6a3e6f8b06e88040cac75b0141fa->enter($__internal_779e58ddb77c80990cdbc1f242da0397b22a6a3e6f8b06e88040cac75b0141fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/History:_address.html.twig"));

        $__internal_7f1a1600479ec667ac8effc9c585c198dce92b7cc44b6a9d9453abd536008f44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f1a1600479ec667ac8effc9c585c198dce92b7cc44b6a9d9453abd536008f44->enter($__internal_7f1a1600479ec667ac8effc9c585c198dce92b7cc44b6a9d9453abd536008f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/History:_address.html.twig"));

        // line 1
        echo "<div class=\"column\">
    <h4 class=\"ui top attached styled header\">
        ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((("sylius.ui." . ($context["type"] ?? $this->getContext($context, "type"))) . "_address")), "html", null, true);
        echo "
    </h4>
    <div class=\"ui attached segment\" id=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["type"] ?? $this->getContext($context, "type")), "html", null, true);
        echo "-address-changes\">
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_admin_partial_address_log_entry_index", array("id" => $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "id", array()))));
        echo "
    </div>
</div>
";
        
        $__internal_779e58ddb77c80990cdbc1f242da0397b22a6a3e6f8b06e88040cac75b0141fa->leave($__internal_779e58ddb77c80990cdbc1f242da0397b22a6a3e6f8b06e88040cac75b0141fa_prof);

        
        $__internal_7f1a1600479ec667ac8effc9c585c198dce92b7cc44b6a9d9453abd536008f44->leave($__internal_7f1a1600479ec667ac8effc9c585c198dce92b7cc44b6a9d9453abd536008f44_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/History:_address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  34 => 5,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"column\">
    <h4 class=\"ui top attached styled header\">
        {{ ('sylius.ui.'~type~'_address')|trans }}
    </h4>
    <div class=\"ui attached segment\" id=\"{{ type }}-address-changes\">
        {{ render(url('sylius_admin_partial_address_log_entry_index', {'id': address.id})) }}
    </div>
</div>
", "SyliusAdminBundle:Order/History:_address.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/History/_address.html.twig");
    }
}
