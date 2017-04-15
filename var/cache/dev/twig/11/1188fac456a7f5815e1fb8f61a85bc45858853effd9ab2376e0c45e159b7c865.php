<?php

/* SyliusShopBundle:Checkout/Complete:_navigation.html.twig */
class __TwigTemplate_7c41f5adb107082e73709e82a233be050032cac9e1fca4af06c9bd5943175918 extends Twig_Template
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
        $__internal_e0f38d5e1f8cb01146a7fd42d440cdd815be17fccfe4e5c59e7cfe4b95a2a537 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0f38d5e1f8cb01146a7fd42d440cdd815be17fccfe4e5c59e7cfe4b95a2a537->enter($__internal_e0f38d5e1f8cb01146a7fd42d440cdd815be17fccfe4e5c59e7cfe4b95a2a537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/Complete:_navigation.html.twig"));

        $__internal_ab92a9235dab9d54ee5d8aa6b9795a5d07776623927e588c51ce6c11de98183d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab92a9235dab9d54ee5d8aa6b9795a5d07776623927e588c51ce6c11de98183d->enter($__internal_ab92a9235dab9d54ee5d8aa6b9795a5d07776623927e588c51ce6c11de98183d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/Complete:_navigation.html.twig"));

        // line 1
        echo "<button type=\"submit\" class=\"ui huge primary fluid icon labeled button\"><i class=\"check icon\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.place_order"), "html", null, true);
        echo "</button>
";
        
        $__internal_e0f38d5e1f8cb01146a7fd42d440cdd815be17fccfe4e5c59e7cfe4b95a2a537->leave($__internal_e0f38d5e1f8cb01146a7fd42d440cdd815be17fccfe4e5c59e7cfe4b95a2a537_prof);

        
        $__internal_ab92a9235dab9d54ee5d8aa6b9795a5d07776623927e588c51ce6c11de98183d->leave($__internal_ab92a9235dab9d54ee5d8aa6b9795a5d07776623927e588c51ce6c11de98183d_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout/Complete:_navigation.html.twig";
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
        return new Twig_Source("<button type=\"submit\" class=\"ui huge primary fluid icon labeled button\"><i class=\"check icon\"></i> {{ 'sylius.ui.place_order'|trans }}</button>
", "SyliusShopBundle:Checkout/Complete:_navigation.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/Complete/_navigation.html.twig");
    }
}
