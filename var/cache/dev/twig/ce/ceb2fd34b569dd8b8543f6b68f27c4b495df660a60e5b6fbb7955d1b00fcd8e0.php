<?php

/* @SyliusShop/Register/_header.html.twig */
class __TwigTemplate_7dc5318fbd8f0aef986ec090549dd12fa31cc2b0ba2451a8ce20277628fc3bfa extends Twig_Template
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
        $__internal_ea53eb09e5dc650e9db0211f3c45cf87f212cc5a702dd6d0cf984dc2d4e419d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea53eb09e5dc650e9db0211f3c45cf87f212cc5a702dd6d0cf984dc2d4e419d8->enter($__internal_ea53eb09e5dc650e9db0211f3c45cf87f212cc5a702dd6d0cf984dc2d4e419d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Register/_header.html.twig"));

        $__internal_28661ab314b195079a223cad6df47f12d4ba1800180dd3914d6c2b8127147575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28661ab314b195079a223cad6df47f12d4ba1800180dd3914d6c2b8127147575->enter($__internal_28661ab314b195079a223cad6df47f12d4ba1800180dd3914d6c2b8127147575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Register/_header.html.twig"));

        // line 1
        echo "<div class=\"ui hidden divider\"></div>

<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        <h1 class=\"ui header\">
            <i class=\"circular user icon\"></i>
            <div class=\"content\">
                ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.register_in_the_store"), "html", null, true);
        echo "
                <div class=\"sub header\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.create_a_new_customer_account"), "html", null, true);
        echo "</div>
            </div>
        </h1>
    </div>
    <div class=\"middle aligned column\">
        <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_login");
        echo "\" class=\"ui right floated basic button\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.have_an_account_already"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.sign_in_here"), "html", null, true);
        echo ".</a>
    </div>
</div>
";
        
        $__internal_ea53eb09e5dc650e9db0211f3c45cf87f212cc5a702dd6d0cf984dc2d4e419d8->leave($__internal_ea53eb09e5dc650e9db0211f3c45cf87f212cc5a702dd6d0cf984dc2d4e419d8_prof);

        
        $__internal_28661ab314b195079a223cad6df47f12d4ba1800180dd3914d6c2b8127147575->leave($__internal_28661ab314b195079a223cad6df47f12d4ba1800180dd3914d6c2b8127147575_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Register/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 14,  38 => 9,  34 => 8,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui hidden divider\"></div>

<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        <h1 class=\"ui header\">
            <i class=\"circular user icon\"></i>
            <div class=\"content\">
                {{ 'sylius.ui.register_in_the_store'|trans }}
                <div class=\"sub header\">{{ 'sylius.ui.create_a_new_customer_account'|trans }}</div>
            </div>
        </h1>
    </div>
    <div class=\"middle aligned column\">
        <a href=\"{{ path('sylius_shop_login') }}\" class=\"ui right floated basic button\">{{ 'sylius.ui.have_an_account_already'|trans }} {{ 'sylius.ui.sign_in_here'|trans }}.</a>
    </div>
</div>
", "@SyliusShop/Register/_header.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Register/_header.html.twig");
    }
}
