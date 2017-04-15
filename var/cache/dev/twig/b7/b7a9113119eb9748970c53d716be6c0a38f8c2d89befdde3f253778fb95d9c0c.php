<?php

/* SyliusAdminBundle:TaxCategory:_form.html.twig */
class __TwigTemplate_26dca31222a71221e650d26cf11eb93ed2f02b4381d3d7206a345f5c0b4625d0 extends Twig_Template
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
        $__internal_e5d5a6a6904cb803c89538fa7bbd42e67b32f5c335e0c46fd6fd14226aa8695d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5d5a6a6904cb803c89538fa7bbd42e67b32f5c335e0c46fd6fd14226aa8695d->enter($__internal_e5d5a6a6904cb803c89538fa7bbd42e67b32f5c335e0c46fd6fd14226aa8695d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:TaxCategory:_form.html.twig"));

        $__internal_b68f2567131ae1f223eb108c74a0ceac2dd15d8422329022c608d040aa8ebfe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b68f2567131ae1f223eb108c74a0ceac2dd15d8422329022c608d040aa8ebfe4->enter($__internal_b68f2567131ae1f223eb108c74a0ceac2dd15d8422329022c608d040aa8ebfe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:TaxCategory:_form.html.twig"));

        // line 1
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
<div class=\"two fields\">
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "code", array()), 'row');
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'row');
        echo "
</div>
";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'row');
        echo "
";
        
        $__internal_e5d5a6a6904cb803c89538fa7bbd42e67b32f5c335e0c46fd6fd14226aa8695d->leave($__internal_e5d5a6a6904cb803c89538fa7bbd42e67b32f5c335e0c46fd6fd14226aa8695d_prof);

        
        $__internal_b68f2567131ae1f223eb108c74a0ceac2dd15d8422329022c608d040aa8ebfe4->leave($__internal_b68f2567131ae1f223eb108c74a0ceac2dd15d8422329022c608d040aa8ebfe4_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:TaxCategory:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  34 => 4,  30 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_errors(form) }}
<div class=\"two fields\">
    {{ form_row(form.code) }}
    {{ form_row(form.name) }}
</div>
{{ form_row(form.description) }}
", "SyliusAdminBundle:TaxCategory:_form.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/TaxCategory/_form.html.twig");
    }
}
