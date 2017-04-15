<?php

/* SyliusShopBundle:Cart/Summary:_coupon.html.twig */
class __TwigTemplate_8ed503ea0698c30d09fca1a046b65c4bfb35e8a4824fcc7af691acdae6eedd79 extends Twig_Template
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
        $__internal_07b666438641873785645cbe5ea8feb2bd48ae46a6353c77a5804d92450d5b03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07b666438641873785645cbe5ea8feb2bd48ae46a6353c77a5804d92450d5b03->enter($__internal_07b666438641873785645cbe5ea8feb2bd48ae46a6353c77a5804d92450d5b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Cart/Summary:_coupon.html.twig"));

        $__internal_547c2d1b71c58a191a4fe89e54fc9dc221f91876d20aae1ece1a69a8e7d76030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_547c2d1b71c58a191a4fe89e54fc9dc221f91876d20aae1ece1a69a8e7d76030->enter($__internal_547c2d1b71c58a191a4fe89e54fc9dc221f91876d20aae1ece1a69a8e7d76030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Cart/Summary:_coupon.html.twig"));

        // line 1
        echo "<div id=\"sylius-coupon\">
    <div class=\"ui coupon action input\">
        ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget', array("attr" => array("placeholder" => ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.enter_your_code") . "..."))));
        echo "
        <button type=\"submit\" id=\"sylius-save\" class=\"ui teal icon labeled button\"><i class=\"ticket icon\"></i> ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.apply_coupon"), "html", null, true);
        echo "</button>
    </div>
    <br>
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
</div>
";
        
        $__internal_07b666438641873785645cbe5ea8feb2bd48ae46a6353c77a5804d92450d5b03->leave($__internal_07b666438641873785645cbe5ea8feb2bd48ae46a6353c77a5804d92450d5b03_prof);

        
        $__internal_547c2d1b71c58a191a4fe89e54fc9dc221f91876d20aae1ece1a69a8e7d76030->leave($__internal_547c2d1b71c58a191a4fe89e54fc9dc221f91876d20aae1ece1a69a8e7d76030_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Cart/Summary:_coupon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"sylius-coupon\">
    <div class=\"ui coupon action input\">
        {{ form_widget(form, {'attr': {'placeholder': 'sylius.ui.enter_your_code'|trans~'...'}}) }}
        <button type=\"submit\" id=\"sylius-save\" class=\"ui teal icon labeled button\"><i class=\"ticket icon\"></i> {{ 'sylius.ui.apply_coupon'|trans }}</button>
    </div>
    <br>
    {{ form_errors(form) }}
</div>
", "SyliusShopBundle:Cart/Summary:_coupon.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Cart/Summary/_coupon.html.twig");
    }
}
