<?php

/* SyliusAdminBundle:PromotionCoupon/Generate:_form.html.twig */
class __TwigTemplate_422d6cc2acc98f9a0e243fc439d2f5d5055dfafe1c126da6513a38d42bbdfc75 extends Twig_Template
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
        $__internal_e99e8e82214799b2f5b30d3ae2adc34ee00abfd319672d2922142d78c8564200 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e99e8e82214799b2f5b30d3ae2adc34ee00abfd319672d2922142d78c8564200->enter($__internal_e99e8e82214799b2f5b30d3ae2adc34ee00abfd319672d2922142d78c8564200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PromotionCoupon/Generate:_form.html.twig"));

        $__internal_7763cc8dba2c17c136ad5431a5fbcc38dc640afd17f86bac8d9bf419cbe93310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7763cc8dba2c17c136ad5431a5fbcc38dc640afd17f86bac8d9bf419cbe93310->enter($__internal_7763cc8dba2c17c136ad5431a5fbcc38dc640afd17f86bac8d9bf419cbe93310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PromotionCoupon/Generate:_form.html.twig"));

        // line 1
        echo "<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        <div class=\"ui segment\">
            ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
            ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "amount", array()), 'row');
        echo "
            ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "codeLength", array()), 'row');
        echo "
        </div>
    </div>
    <div class=\"column\">
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.expiration_and_usage_limits"), "html", null, true);
        echo "</h4>
            <div class=\"two fields\">
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "expiresAt", array()), 'row');
        echo "
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "usageLimit", array()), 'row');
        echo "
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_e99e8e82214799b2f5b30d3ae2adc34ee00abfd319672d2922142d78c8564200->leave($__internal_e99e8e82214799b2f5b30d3ae2adc34ee00abfd319672d2922142d78c8564200_prof);

        
        $__internal_7763cc8dba2c17c136ad5431a5fbcc38dc640afd17f86bac8d9bf419cbe93310->leave($__internal_7763cc8dba2c17c136ad5431a5fbcc38dc640afd17f86bac8d9bf419cbe93310_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:PromotionCoupon/Generate:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 14,  51 => 13,  46 => 11,  38 => 6,  34 => 5,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        <div class=\"ui segment\">
            {{ form_errors(form) }}
            {{ form_row(form.amount) }}
            {{ form_row(form.codeLength) }}
        </div>
    </div>
    <div class=\"column\">
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">{{ 'sylius.ui.expiration_and_usage_limits'|trans }}</h4>
            <div class=\"two fields\">
                {{ form_row(form.expiresAt) }}
                {{ form_row(form.usageLimit) }}
            </div>
        </div>
    </div>
</div>
", "SyliusAdminBundle:PromotionCoupon/Generate:_form.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/PromotionCoupon/Generate/_form.html.twig");
    }
}
