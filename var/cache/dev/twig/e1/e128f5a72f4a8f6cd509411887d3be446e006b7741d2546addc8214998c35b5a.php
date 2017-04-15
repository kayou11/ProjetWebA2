<?php

/* SyliusAdminBundle:PromotionCoupon:_form.html.twig */
class __TwigTemplate_c0e260ecad888a070fe57d9b9fa696c7371cfa2011d8104fb90b72a3f2cec9fd extends Twig_Template
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
        $__internal_2931fce97a13dbcca6826e5490be3016aeee3d027e8f47ce51a0759e8cfe5713 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2931fce97a13dbcca6826e5490be3016aeee3d027e8f47ce51a0759e8cfe5713->enter($__internal_2931fce97a13dbcca6826e5490be3016aeee3d027e8f47ce51a0759e8cfe5713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PromotionCoupon:_form.html.twig"));

        $__internal_82a841321d6ebef2bf11f989e649e79c8fa4b4e81ec9b5cf84f487f9e07b3294 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82a841321d6ebef2bf11f989e649e79c8fa4b4e81ec9b5cf84f487f9e07b3294->enter($__internal_82a841321d6ebef2bf11f989e649e79c8fa4b4e81ec9b5cf84f487f9e07b3294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PromotionCoupon:_form.html.twig"));

        // line 1
        echo "<div class=\"ui segment\">
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "code", array()), 'row');
        echo "
</div>
<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.expiration_and_usage_limits"), "html", null, true);
        echo "</h4>
    <div class=\"three fields\">
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "expiresAt", array()), 'row');
        echo "
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "usageLimit", array()), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "perCustomerUsageLimit", array()), 'row');
        echo "
    </div>
</div>
";
        
        $__internal_2931fce97a13dbcca6826e5490be3016aeee3d027e8f47ce51a0759e8cfe5713->leave($__internal_2931fce97a13dbcca6826e5490be3016aeee3d027e8f47ce51a0759e8cfe5713_prof);

        
        $__internal_82a841321d6ebef2bf11f989e649e79c8fa4b4e81ec9b5cf84f487f9e07b3294->leave($__internal_82a841321d6ebef2bf11f989e649e79c8fa4b4e81ec9b5cf84f487f9e07b3294_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:PromotionCoupon:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  47 => 9,  43 => 8,  38 => 6,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui segment\">
    {{ form_errors(form) }}
    {{ form_row(form.code) }}
</div>
<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">{{ 'sylius.ui.expiration_and_usage_limits'|trans }}</h4>
    <div class=\"three fields\">
        {{ form_row(form.expiresAt) }}
        {{ form_row(form.usageLimit) }}
        {{ form_row(form.perCustomerUsageLimit) }}
    </div>
</div>
", "SyliusAdminBundle:PromotionCoupon:_form.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/PromotionCoupon/_form.html.twig");
    }
}
