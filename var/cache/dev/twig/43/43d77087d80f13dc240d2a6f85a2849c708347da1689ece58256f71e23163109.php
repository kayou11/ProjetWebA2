<?php

/* SyliusShopBundle:Checkout:_support.html.twig */
class __TwigTemplate_633c86bdb80cfc15f0b2728aa6d09dba66e5bb422c4c921b664fc911d9dac0a4 extends Twig_Template
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
        $__internal_bebabd31f0c06f7b1d6160079eb87f4529cee8f9ed5a64ecb73a2cde67adf9d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bebabd31f0c06f7b1d6160079eb87f4529cee8f9ed5a64ecb73a2cde67adf9d1->enter($__internal_bebabd31f0c06f7b1d6160079eb87f4529cee8f9ed5a64ecb73a2cde67adf9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout:_support.html.twig"));

        $__internal_f50600fdb8154bf38b95c97305dc5a0eb11f923b6cc082a7b09b8ed83d2e69d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f50600fdb8154bf38b95c97305dc5a0eb11f923b6cc082a7b09b8ed83d2e69d7->enter($__internal_f50600fdb8154bf38b95c97305dc5a0eb11f923b6cc082a7b09b8ed83d2e69d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout:_support.html.twig"));

        // line 1
        echo "<h2 class=\"ui center aligned icon header\">
    <i class=\"circular phone icon\"></i>
    +48 123 456 789
    <span class=\"sub header\">
        ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.need_assistance"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.call_us"), "html", null, true);
        echo "
    </span>
</h2>

<div class=\"ui divider\"></div>

<div class=\"ui center aligned basic segment\">
    <i class=\"huge mastercard icon\"></i>
    <i class=\"huge visa icon\"></i>
    <i class=\"huge paypal card icon\"></i>
</div>
";
        
        $__internal_bebabd31f0c06f7b1d6160079eb87f4529cee8f9ed5a64ecb73a2cde67adf9d1->leave($__internal_bebabd31f0c06f7b1d6160079eb87f4529cee8f9ed5a64ecb73a2cde67adf9d1_prof);

        
        $__internal_f50600fdb8154bf38b95c97305dc5a0eb11f923b6cc082a7b09b8ed83d2e69d7->leave($__internal_f50600fdb8154bf38b95c97305dc5a0eb11f923b6cc082a7b09b8ed83d2e69d7_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout:_support.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h2 class=\"ui center aligned icon header\">
    <i class=\"circular phone icon\"></i>
    +48 123 456 789
    <span class=\"sub header\">
        {{ 'sylius.ui.need_assistance'|trans }} {{ 'sylius.ui.call_us'|trans }}
    </span>
</h2>

<div class=\"ui divider\"></div>

<div class=\"ui center aligned basic segment\">
    <i class=\"huge mastercard icon\"></i>
    <i class=\"huge visa icon\"></i>
    <i class=\"huge paypal card icon\"></i>
</div>
", "SyliusShopBundle:Checkout:_support.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/_support.html.twig");
    }
}
