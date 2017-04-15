<?php

/* SyliusShopBundle:Account/Order/Index:_breadcrumb.html.twig */
class __TwigTemplate_04bcbe563bed6605fcb8cd1ce968cbb497ac760fefa74c23a1d20947a2911fb9 extends Twig_Template
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
        $__internal_18f99bb3ebb68b73c22387cc17bc7629e4567d447703a235a19ffa3cccb86c28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18f99bb3ebb68b73c22387cc17bc7629e4567d447703a235a19ffa3cccb86c28->enter($__internal_18f99bb3ebb68b73c22387cc17bc7629e4567d447703a235a19ffa3cccb86c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order/Index:_breadcrumb.html.twig"));

        $__internal_7dae3b8f1695646310bc5f033a5071caafa1ae5762aa651570f06f7469503a5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dae3b8f1695646310bc5f033a5071caafa1ae5762aa651570f06f7469503a5b->enter($__internal_7dae3b8f1695646310bc5f033a5071caafa1ae5762aa651570f06f7469503a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order/Index:_breadcrumb.html.twig"));

        // line 1
        echo "<div class=\"ui breadcrumb\">
    <a href=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_homepage");
        echo "\" class=\"section\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.home"), "html", null, true);
        echo "</a>
    <div class=\"divider\"> / </div>
    <a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_account_dashboard");
        echo "\" class=\"section\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.my_account"), "html", null, true);
        echo "</a>
    <div class=\"divider\"> / </div>
    <div class=\"active section\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.order_history"), "html", null, true);
        echo "</div>
</div>
";
        
        $__internal_18f99bb3ebb68b73c22387cc17bc7629e4567d447703a235a19ffa3cccb86c28->leave($__internal_18f99bb3ebb68b73c22387cc17bc7629e4567d447703a235a19ffa3cccb86c28_prof);

        
        $__internal_7dae3b8f1695646310bc5f033a5071caafa1ae5762aa651570f06f7469503a5b->leave($__internal_7dae3b8f1695646310bc5f033a5071caafa1ae5762aa651570f06f7469503a5b_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account/Order/Index:_breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  35 => 4,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui breadcrumb\">
    <a href=\"{{ path('sylius_shop_homepage') }}\" class=\"section\">{{ 'sylius.ui.home'|trans }}</a>
    <div class=\"divider\"> / </div>
    <a href=\"{{ path('sylius_shop_account_dashboard') }}\" class=\"section\">{{ 'sylius.ui.my_account'|trans }}</a>
    <div class=\"divider\"> / </div>
    <div class=\"active section\">{{ 'sylius.ui.order_history'|trans }}</div>
</div>
", "SyliusShopBundle:Account/Order/Index:_breadcrumb.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/Order/Index/_breadcrumb.html.twig");
    }
}
