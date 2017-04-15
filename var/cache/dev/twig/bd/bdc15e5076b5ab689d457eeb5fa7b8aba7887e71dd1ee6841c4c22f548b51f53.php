<?php

/* SyliusShopBundle:Checkout/Address:_navigation.html.twig */
class __TwigTemplate_949edee89896c0645edf5f27986a76d1b849a1e25362cd31e9ca739b38ac7a2f extends Twig_Template
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
        $__internal_33985ff949fa9842ac7ef9a3b825523079a136584bc5bb5eae179a788e6b8396 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33985ff949fa9842ac7ef9a3b825523079a136584bc5bb5eae179a788e6b8396->enter($__internal_33985ff949fa9842ac7ef9a3b825523079a136584bc5bb5eae179a788e6b8396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/Address:_navigation.html.twig"));

        $__internal_cf875a97fd3870d61d00a85cdc828a3fcfc9c2e21b82ec33b4a9414db595f122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf875a97fd3870d61d00a85cdc828a3fcfc9c2e21b82ec33b4a9414db595f122->enter($__internal_cf875a97fd3870d61d00a85cdc828a3fcfc9c2e21b82ec33b4a9414db595f122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/Address:_navigation.html.twig"));

        // line 1
        echo "<div class=\"ui two column grid\">
    <div class=\"column\">
        <a href=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_homepage");
        echo "\" class=\"ui large icon labeled button\"><i class=\"arrow left icon\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.back_to_store"), "html", null, true);
        echo "</a>
    </div>
    <div class=\"right aligned column\">
        <button type=\"submit\" id=\"next-step\" class=\"ui large primary icon labeled button\"><i class=\"arrow right icon\"></i> ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.next"), "html", null, true);
        echo "</button>
    </div>
</div>
";
        
        $__internal_33985ff949fa9842ac7ef9a3b825523079a136584bc5bb5eae179a788e6b8396->leave($__internal_33985ff949fa9842ac7ef9a3b825523079a136584bc5bb5eae179a788e6b8396_prof);

        
        $__internal_cf875a97fd3870d61d00a85cdc828a3fcfc9c2e21b82ec33b4a9414db595f122->leave($__internal_cf875a97fd3870d61d00a85cdc828a3fcfc9c2e21b82ec33b4a9414db595f122_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout/Address:_navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui two column grid\">
    <div class=\"column\">
        <a href=\"{{ path('sylius_shop_homepage') }}\" class=\"ui large icon labeled button\"><i class=\"arrow left icon\"></i> {{ 'sylius.ui.back_to_store'|trans }}</a>
    </div>
    <div class=\"right aligned column\">
        <button type=\"submit\" id=\"next-step\" class=\"ui large primary icon labeled button\"><i class=\"arrow right icon\"></i> {{ 'sylius.ui.next'|trans }}</button>
    </div>
</div>
", "SyliusShopBundle:Checkout/Address:_navigation.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/Address/_navigation.html.twig");
    }
}
