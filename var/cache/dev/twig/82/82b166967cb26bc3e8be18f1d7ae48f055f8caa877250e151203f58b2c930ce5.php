<?php

/* SyliusShopBundle:Account/Order:index.html.twig */
class __TwigTemplate_f6a9766231fef93ea5c6ab00adf7e99cb9fa3c8856836b1ee461dfcb2d847d84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/Account/layout.html.twig", "SyliusShopBundle:Account/Order:index.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'subcontent' => array($this, 'block_subcontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/Account/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4786ce69902c27f43de431926e89ad45e22767fc98b7cc6e675212b446ef8558 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4786ce69902c27f43de431926e89ad45e22767fc98b7cc6e675212b446ef8558->enter($__internal_4786ce69902c27f43de431926e89ad45e22767fc98b7cc6e675212b446ef8558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order:index.html.twig"));

        $__internal_2c13811c1267444033faea9f2b58cb593418e3ce648c4482931e673487a851bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c13811c1267444033faea9f2b58cb593418e3ce648c4482931e673487a851bb->enter($__internal_2c13811c1267444033faea9f2b58cb593418e3ce648c4482931e673487a851bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4786ce69902c27f43de431926e89ad45e22767fc98b7cc6e675212b446ef8558->leave($__internal_4786ce69902c27f43de431926e89ad45e22767fc98b7cc6e675212b446ef8558_prof);

        
        $__internal_2c13811c1267444033faea9f2b58cb593418e3ce648c4482931e673487a851bb->leave($__internal_2c13811c1267444033faea9f2b58cb593418e3ce648c4482931e673487a851bb_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_d065b0240dc1e4da826d8dcd9a012a242a477a98f83159e7cf21305fa1281cc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d065b0240dc1e4da826d8dcd9a012a242a477a98f83159e7cf21305fa1281cc5->enter($__internal_d065b0240dc1e4da826d8dcd9a012a242a477a98f83159e7cf21305fa1281cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_a0a74c2b7e053bdca01b2fe9f8b982615cd5aa8c1859cbc123dc8bfca10f0029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0a74c2b7e053bdca01b2fe9f8b982615cd5aa8c1859cbc123dc8bfca10f0029->enter($__internal_a0a74c2b7e053bdca01b2fe9f8b982615cd5aa8c1859cbc123dc8bfca10f0029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "    ";
        $this->loadTemplate("@SyliusShop/Account/Order/Index/_breadcrumb.html.twig", "SyliusShopBundle:Account/Order:index.html.twig", 4)->display($context);
        
        $__internal_a0a74c2b7e053bdca01b2fe9f8b982615cd5aa8c1859cbc123dc8bfca10f0029->leave($__internal_a0a74c2b7e053bdca01b2fe9f8b982615cd5aa8c1859cbc123dc8bfca10f0029_prof);

        
        $__internal_d065b0240dc1e4da826d8dcd9a012a242a477a98f83159e7cf21305fa1281cc5->leave($__internal_d065b0240dc1e4da826d8dcd9a012a242a477a98f83159e7cf21305fa1281cc5_prof);

    }

    // line 7
    public function block_subcontent($context, array $blocks = array())
    {
        $__internal_1b8e37bfcaa325a7b7ceadf74bd7b42e2e656946876a57c8916603556ec3fa1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b8e37bfcaa325a7b7ceadf74bd7b42e2e656946876a57c8916603556ec3fa1a->enter($__internal_1b8e37bfcaa325a7b7ceadf74bd7b42e2e656946876a57c8916603556ec3fa1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subcontent"));

        $__internal_1c3edf1490b8d9ddb8e0d25bd2e99755bf053542e0122212997f37a8fa1b8067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c3edf1490b8d9ddb8e0d25bd2e99755bf053542e0122212997f37a8fa1b8067->enter($__internal_1c3edf1490b8d9ddb8e0d25bd2e99755bf053542e0122212997f37a8fa1b8067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subcontent"));

        // line 8
        echo "    ";
        $this->loadTemplate("@SyliusShop/Account/Order/Index/_header.html.twig", "SyliusShopBundle:Account/Order:index.html.twig", 8)->display($context);
        // line 9
        echo "
    ";
        // line 10
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.order.index.after_content_header", array("orders" => ($context["orders"] ?? $this->getContext($context, "orders")))));
        echo "

    ";
        // line 12
        echo call_user_func_array($this->env->getFunction('sylius_grid_render')->getCallable(), array(($context["resources"] ?? $this->getContext($context, "resources")), "@SyliusUi/Grid/_default.html.twig"));
        echo "

    ";
        // line 14
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.order.index.after_grid", array("orders" => ($context["orders"] ?? $this->getContext($context, "orders")))));
        echo "
";
        
        $__internal_1c3edf1490b8d9ddb8e0d25bd2e99755bf053542e0122212997f37a8fa1b8067->leave($__internal_1c3edf1490b8d9ddb8e0d25bd2e99755bf053542e0122212997f37a8fa1b8067_prof);

        
        $__internal_1b8e37bfcaa325a7b7ceadf74bd7b42e2e656946876a57c8916603556ec3fa1a->leave($__internal_1b8e37bfcaa325a7b7ceadf74bd7b42e2e656946876a57c8916603556ec3fa1a_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account/Order:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 14,  81 => 12,  76 => 10,  73 => 9,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/Account/layout.html.twig' %}

{% block breadcrumb %}
    {% include '@SyliusShop/Account/Order/Index/_breadcrumb.html.twig' %}
{% endblock %}

{% block subcontent %}
    {% include '@SyliusShop/Account/Order/Index/_header.html.twig' %}

    {{ sonata_block_render_event('sylius.shop.account.order.index.after_content_header', {'orders': orders}) }}

    {{ sylius_grid_render(resources, '@SyliusUi/Grid/_default.html.twig') }}

    {{ sonata_block_render_event('sylius.shop.account.order.index.after_grid', {'orders': orders}) }}
{% endblock %}
", "SyliusShopBundle:Account/Order:index.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/Order/index.html.twig");
    }
}
