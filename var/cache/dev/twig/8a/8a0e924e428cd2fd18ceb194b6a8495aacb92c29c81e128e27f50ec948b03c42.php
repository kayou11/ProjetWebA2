<?php

/* SyliusShopBundle:Account/Order:show.html.twig */
class __TwigTemplate_49a3a967b6278a46b5a3ae35672c031edde1c959ce235861c89ac069bd1e3a87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/Account/layout.html.twig", "SyliusShopBundle:Account/Order:show.html.twig", 1);
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
        $__internal_77dd1d947709ee8bf60c8b75c2981d52dfe668a0ebb266d6b303a2bd1d894667 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77dd1d947709ee8bf60c8b75c2981d52dfe668a0ebb266d6b303a2bd1d894667->enter($__internal_77dd1d947709ee8bf60c8b75c2981d52dfe668a0ebb266d6b303a2bd1d894667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order:show.html.twig"));

        $__internal_51c1dcfe4d497bb56c60cda211b031490dfb407e84736f076ec9573357945efb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51c1dcfe4d497bb56c60cda211b031490dfb407e84736f076ec9573357945efb->enter($__internal_51c1dcfe4d497bb56c60cda211b031490dfb407e84736f076ec9573357945efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77dd1d947709ee8bf60c8b75c2981d52dfe668a0ebb266d6b303a2bd1d894667->leave($__internal_77dd1d947709ee8bf60c8b75c2981d52dfe668a0ebb266d6b303a2bd1d894667_prof);

        
        $__internal_51c1dcfe4d497bb56c60cda211b031490dfb407e84736f076ec9573357945efb->leave($__internal_51c1dcfe4d497bb56c60cda211b031490dfb407e84736f076ec9573357945efb_prof);

    }

    // line 3
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_8ffd25fa66c0c0c0598e1578720ef99838671602999d6b6489694926992eb52f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ffd25fa66c0c0c0598e1578720ef99838671602999d6b6489694926992eb52f->enter($__internal_8ffd25fa66c0c0c0598e1578720ef99838671602999d6b6489694926992eb52f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_70ef6cacfdaf0e4aaff612e875f672565feb090e824d34e93ec72cc8171d9854 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70ef6cacfdaf0e4aaff612e875f672565feb090e824d34e93ec72cc8171d9854->enter($__internal_70ef6cacfdaf0e4aaff612e875f672565feb090e824d34e93ec72cc8171d9854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 4
        echo "    ";
        $this->loadTemplate("@SyliusShop/Account/Order/Show/_breadcrumb.html.twig", "SyliusShopBundle:Account/Order:show.html.twig", 4)->display($context);
        
        $__internal_70ef6cacfdaf0e4aaff612e875f672565feb090e824d34e93ec72cc8171d9854->leave($__internal_70ef6cacfdaf0e4aaff612e875f672565feb090e824d34e93ec72cc8171d9854_prof);

        
        $__internal_8ffd25fa66c0c0c0598e1578720ef99838671602999d6b6489694926992eb52f->leave($__internal_8ffd25fa66c0c0c0598e1578720ef99838671602999d6b6489694926992eb52f_prof);

    }

    // line 7
    public function block_subcontent($context, array $blocks = array())
    {
        $__internal_65b248542d1ffa52cee74a7d3bf92051292f42bbf133b64078710b7d517b926b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65b248542d1ffa52cee74a7d3bf92051292f42bbf133b64078710b7d517b926b->enter($__internal_65b248542d1ffa52cee74a7d3bf92051292f42bbf133b64078710b7d517b926b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subcontent"));

        $__internal_429c15d6deb97956d269adbcf332bce9623aee3c2ab5c926e6fe62f9502416d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_429c15d6deb97956d269adbcf332bce9623aee3c2ab5c926e6fe62f9502416d5->enter($__internal_429c15d6deb97956d269adbcf332bce9623aee3c2ab5c926e6fe62f9502416d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subcontent"));

        // line 8
        echo "    ";
        $this->loadTemplate("@SyliusShop/Account/Order/Show/_header.html.twig", "SyliusShopBundle:Account/Order:show.html.twig", 8)->display($context);
        // line 9
        echo "
    ";
        // line 10
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.order.show.after_content_header", array("order" => ($context["order"] ?? $this->getContext($context, "order")))));
        echo "

    ";
        // line 12
        $this->loadTemplate("@SyliusShop/Common/Order/_summary.html.twig", "SyliusShopBundle:Account/Order:show.html.twig", 12)->display($context);
        // line 13
        echo "
    ";
        // line 14
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.account.order.show.after_summary", array("order" => ($context["order"] ?? $this->getContext($context, "order")))));
        echo "
";
        
        $__internal_429c15d6deb97956d269adbcf332bce9623aee3c2ab5c926e6fe62f9502416d5->leave($__internal_429c15d6deb97956d269adbcf332bce9623aee3c2ab5c926e6fe62f9502416d5_prof);

        
        $__internal_65b248542d1ffa52cee74a7d3bf92051292f42bbf133b64078710b7d517b926b->leave($__internal_65b248542d1ffa52cee74a7d3bf92051292f42bbf133b64078710b7d517b926b_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account/Order:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 14,  83 => 13,  81 => 12,  76 => 10,  73 => 9,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
    {% include '@SyliusShop/Account/Order/Show/_breadcrumb.html.twig' %}
{% endblock %}

{% block subcontent %}
    {% include '@SyliusShop/Account/Order/Show/_header.html.twig' %}

    {{ sonata_block_render_event('sylius.shop.account.order.show.after_content_header', {'order': order}) }}

    {% include '@SyliusShop/Common/Order/_summary.html.twig' %}

    {{ sonata_block_render_event('sylius.shop.account.order.show.after_summary', {'order': order}) }}
{% endblock %}
", "SyliusShopBundle:Account/Order:show.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/Order/show.html.twig");
    }
}
