<?php

/* SyliusAdminBundle:Dashboard:_header.html.twig */
class __TwigTemplate_3173c3a725d04b971f5108dd497ac7efd4670209cdf6b49f195ecd05ddfcdbd0 extends Twig_Template
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
        $__internal_4534ee5a2a9961dc02fdc25ac5b9cf09178ecd74f0a2d085c0a1d1d73c23cab7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4534ee5a2a9961dc02fdc25ac5b9cf09178ecd74f0a2d085c0a1d1d73c23cab7->enter($__internal_4534ee5a2a9961dc02fdc25ac5b9cf09178ecd74f0a2d085c0a1d1d73c23cab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Dashboard:_header.html.twig"));

        $__internal_afe28ac63a532a859b9291c61df2e1b3e7b36781cd5798cb9806333de452b82a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afe28ac63a532a859b9291c61df2e1b3e7b36781cd5798cb9806333de452b82a->enter($__internal_afe28ac63a532a859b9291c61df2e1b3e7b36781cd5798cb9806333de452b82a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Dashboard:_header.html.twig"));

        // line 1
        $context["headers"] = $this->loadTemplate("SyliusUiBundle:Macro:headers.html.twig", "SyliusAdminBundle:Dashboard:_header.html.twig", 1);
        // line 2
        echo "
<div class=\"ui stackable grid\">
    <div class=\"twelve wide column\">
        ";
        // line 5
        echo $context["headers"]->getdefault($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.dashboard"), "home", $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.overview_of_your_store"));
        echo "

        ";
        // line 7
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.dashboard.header", array("channel" => ($context["channel"] ?? $this->getContext($context, "channel")), "statistics" => ($context["statistics"] ?? $this->getContext($context, "statistics")))));
        echo "
    </div>
    <div class=\"four wide middle aligned column\">
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_admin_partial_channel_index", array("template" => "@SyliusAdmin/Dashboard/_channelSwitch.html.twig", "channel" => $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "code", array()))));
        echo "
    </div>
</div>
";
        
        $__internal_4534ee5a2a9961dc02fdc25ac5b9cf09178ecd74f0a2d085c0a1d1d73c23cab7->leave($__internal_4534ee5a2a9961dc02fdc25ac5b9cf09178ecd74f0a2d085c0a1d1d73c23cab7_prof);

        
        $__internal_afe28ac63a532a859b9291c61df2e1b3e7b36781cd5798cb9806333de452b82a->leave($__internal_afe28ac63a532a859b9291c61df2e1b3e7b36781cd5798cb9806333de452b82a_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Dashboard:_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 10,  37 => 7,  32 => 5,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import 'SyliusUiBundle:Macro:headers.html.twig' as headers %}

<div class=\"ui stackable grid\">
    <div class=\"twelve wide column\">
        {{ headers.default('sylius.ui.dashboard'|trans, 'home', 'sylius.ui.overview_of_your_store'|trans) }}

        {{ sonata_block_render_event('sylius.admin.dashboard.header', {'channel': channel, 'statistics': statistics}) }}
    </div>
    <div class=\"four wide middle aligned column\">
        {{ render(url('sylius_admin_partial_channel_index', {'template': '@SyliusAdmin/Dashboard/_channelSwitch.html.twig', 'channel': channel.code})) }}
    </div>
</div>
", "SyliusAdminBundle:Dashboard:_header.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Dashboard/_header.html.twig");
    }
}
