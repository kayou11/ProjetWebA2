<?php

/* SyliusShopBundle:Cart/Summary:_update.html.twig */
class __TwigTemplate_a9bb030ff55391ec5b94c96fe881e15cc96556046a85348c5355a92b66f67813 extends Twig_Template
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
        $__internal_1a15c7983ee41cbcdd8e2c16c188854f889683ef036b65d5d1274e3ae4a362e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a15c7983ee41cbcdd8e2c16c188854f889683ef036b65d5d1274e3ae4a362e8->enter($__internal_1a15c7983ee41cbcdd8e2c16c188854f889683ef036b65d5d1274e3ae4a362e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Cart/Summary:_update.html.twig"));

        $__internal_4f9d9ebf9cfec9fbdf55697dd14c797e6132e24e84deb524a2e795a22bb8822a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f9d9ebf9cfec9fbdf55697dd14c797e6132e24e84deb524a2e795a22bb8822a->enter($__internal_4f9d9ebf9cfec9fbdf55697dd14c797e6132e24e84deb524a2e795a22bb8822a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Cart/Summary:_update.html.twig"));

        // line 1
        echo "<button type=\"submit\" class=\"ui icon labeled large button\" id=\"sylius-cart-update\"><i class=\"save icon\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.update_cart"), "html", null, true);
        echo "</button>
";
        
        $__internal_1a15c7983ee41cbcdd8e2c16c188854f889683ef036b65d5d1274e3ae4a362e8->leave($__internal_1a15c7983ee41cbcdd8e2c16c188854f889683ef036b65d5d1274e3ae4a362e8_prof);

        
        $__internal_4f9d9ebf9cfec9fbdf55697dd14c797e6132e24e84deb524a2e795a22bb8822a->leave($__internal_4f9d9ebf9cfec9fbdf55697dd14c797e6132e24e84deb524a2e795a22bb8822a_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Cart/Summary:_update.html.twig";
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
        return new Twig_Source("<button type=\"submit\" class=\"ui icon labeled large button\" id=\"sylius-cart-update\"><i class=\"save icon\"></i> {{ 'sylius.ui.update_cart'|trans }}</button>
", "SyliusShopBundle:Cart/Summary:_update.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Cart/Summary/_update.html.twig");
    }
}
