<?php

/* SyliusShopBundle:Cart/Summary:_checkout.html.twig */
class __TwigTemplate_3bbe4a3310fc7cc224d485ded5d9946b995bb8faaa117f7bb5c76028222f998c extends Twig_Template
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
        $__internal_025332a45e8151b011faf1cee80dca1fdbfac7f0d2427c71d634b8ce674f1680 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_025332a45e8151b011faf1cee80dca1fdbfac7f0d2427c71d634b8ce674f1680->enter($__internal_025332a45e8151b011faf1cee80dca1fdbfac7f0d2427c71d634b8ce674f1680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Cart/Summary:_checkout.html.twig"));

        $__internal_e6f10cdac77a6b506c92755b906dd16dfd46f527196a885f4bf3a3e0280ed9a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6f10cdac77a6b506c92755b906dd16dfd46f527196a885f4bf3a3e0280ed9a2->enter($__internal_e6f10cdac77a6b506c92755b906dd16dfd46f527196a885f4bf3a3e0280ed9a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Cart/Summary:_checkout.html.twig"));

        // line 1
        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_checkout_start");
        echo "\" class=\"ui huge primary fluid labeled icon button\"><i class=\"check icon\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.checkout"), "html", null, true);
        echo "</a>
";
        
        $__internal_025332a45e8151b011faf1cee80dca1fdbfac7f0d2427c71d634b8ce674f1680->leave($__internal_025332a45e8151b011faf1cee80dca1fdbfac7f0d2427c71d634b8ce674f1680_prof);

        
        $__internal_e6f10cdac77a6b506c92755b906dd16dfd46f527196a885f4bf3a3e0280ed9a2->leave($__internal_e6f10cdac77a6b506c92755b906dd16dfd46f527196a885f4bf3a3e0280ed9a2_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Cart/Summary:_checkout.html.twig";
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
        return new Twig_Source("<a href=\"{{ path('sylius_shop_checkout_start') }}\" class=\"ui huge primary fluid labeled icon button\"><i class=\"check icon\"></i> {{ 'sylius.ui.checkout'|trans }}</a>
", "SyliusShopBundle:Cart/Summary:_checkout.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Cart/Summary/_checkout.html.twig");
    }
}
