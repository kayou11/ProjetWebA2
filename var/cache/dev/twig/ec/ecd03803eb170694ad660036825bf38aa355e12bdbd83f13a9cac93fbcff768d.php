<?php

/* SyliusShopBundle:Account/Order/Grid/Field:number.html.twig */
class __TwigTemplate_5c88647802795e869fe814504b0571e2e5f223830f748d906653cdc99e5cb2b4 extends Twig_Template
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
        $__internal_8d4eb29fff82463eaf87315d1535ba52f2cb9493dc8396a550819df0f4353195 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d4eb29fff82463eaf87315d1535ba52f2cb9493dc8396a550819df0f4353195->enter($__internal_8d4eb29fff82463eaf87315d1535ba52f2cb9493dc8396a550819df0f4353195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order/Grid/Field:number.html.twig"));

        $__internal_50e8a56e5f42d7c3a295c3400a96ac3ba488a8348a6514ba5493449e4aa8b8ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50e8a56e5f42d7c3a295c3400a96ac3ba488a8348a6514ba5493449e4aa8b8ae->enter($__internal_50e8a56e5f42d7c3a295c3400a96ac3ba488a8348a6514ba5493449e4aa8b8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/Order/Grid/Field:number.html.twig"));

        // line 1
        echo "#";
        echo twig_escape_filter($this->env, ($context["data"] ?? $this->getContext($context, "data")), "html", null, true);
        echo "
";
        
        $__internal_8d4eb29fff82463eaf87315d1535ba52f2cb9493dc8396a550819df0f4353195->leave($__internal_8d4eb29fff82463eaf87315d1535ba52f2cb9493dc8396a550819df0f4353195_prof);

        
        $__internal_50e8a56e5f42d7c3a295c3400a96ac3ba488a8348a6514ba5493449e4aa8b8ae->leave($__internal_50e8a56e5f42d7c3a295c3400a96ac3ba488a8348a6514ba5493449e4aa8b8ae_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account/Order/Grid/Field:number.html.twig";
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
        return new Twig_Source("#{{ data }}
", "SyliusShopBundle:Account/Order/Grid/Field:number.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Account/Order/Grid/Field/number.html.twig");
    }
}
