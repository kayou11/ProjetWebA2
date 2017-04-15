<?php

/* SyliusShopBundle:Login:_header.html.twig */
class __TwigTemplate_a0a98d75d28bcf60c559e38f84167b08f1737c699c0ba00208181ee5b6ef7106 extends Twig_Template
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
        $__internal_131e6bff96dc3eb0ce66ba4cf3f5638ebff7bcd91261c565a4e3e5902e64f328 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_131e6bff96dc3eb0ce66ba4cf3f5638ebff7bcd91261c565a4e3e5902e64f328->enter($__internal_131e6bff96dc3eb0ce66ba4cf3f5638ebff7bcd91261c565a4e3e5902e64f328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Login:_header.html.twig"));

        $__internal_818a3da3f6ff0af1f02b6a4cfe0b9f9675973f577fa09e8f000eefcd359ac2e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_818a3da3f6ff0af1f02b6a4cfe0b9f9675973f577fa09e8f000eefcd359ac2e8->enter($__internal_818a3da3f6ff0af1f02b6a4cfe0b9f9675973f577fa09e8f000eefcd359ac2e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Login:_header.html.twig"));

        // line 1
        echo "<h1 class=\"ui header\">
    <i class=\"circular user icon\"></i>
    <div class=\"content\">
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.customer_login"), "html", null, true);
        echo "
        <div class=\"sub header\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.access_your_store_account_or_create_a_new_one"), "html", null, true);
        echo "</div>
    </div>
</h1>

";
        
        $__internal_131e6bff96dc3eb0ce66ba4cf3f5638ebff7bcd91261c565a4e3e5902e64f328->leave($__internal_131e6bff96dc3eb0ce66ba4cf3f5638ebff7bcd91261c565a4e3e5902e64f328_prof);

        
        $__internal_818a3da3f6ff0af1f02b6a4cfe0b9f9675973f577fa09e8f000eefcd359ac2e8->leave($__internal_818a3da3f6ff0af1f02b6a4cfe0b9f9675973f577fa09e8f000eefcd359ac2e8_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Login:_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1 class=\"ui header\">
    <i class=\"circular user icon\"></i>
    <div class=\"content\">
        {{ 'sylius.ui.customer_login'|trans }}
        <div class=\"sub header\">{{ 'sylius.ui.access_your_store_account_or_create_a_new_one'|trans }}</div>
    </div>
</h1>

", "SyliusShopBundle:Login:_header.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Login/_header.html.twig");
    }
}
