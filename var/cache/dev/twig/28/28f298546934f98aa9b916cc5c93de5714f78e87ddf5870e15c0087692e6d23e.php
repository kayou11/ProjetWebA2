<?php

/* SyliusAdminBundle:Locale:_form.html.twig */
class __TwigTemplate_3acddc290d0f00e8f9ac8ed489e80cbfe8f4ac79013dd83003f5a44996d31678 extends Twig_Template
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
        $__internal_b73018d15fdc05fa6428529aaad81fed4c732859b5e037d730e464740844f982 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b73018d15fdc05fa6428529aaad81fed4c732859b5e037d730e464740844f982->enter($__internal_b73018d15fdc05fa6428529aaad81fed4c732859b5e037d730e464740844f982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Locale:_form.html.twig"));

        $__internal_99cd8be0b98603bfc095e1e424ea0a1af92adc6c26952ba69a729f9d2c971e6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99cd8be0b98603bfc095e1e424ea0a1af92adc6c26952ba69a729f9d2c971e6f->enter($__internal_99cd8be0b98603bfc095e1e424ea0a1af92adc6c26952ba69a729f9d2c971e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Locale:_form.html.twig"));

        // line 1
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
<div class=\"one field\">
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "code", array()), 'row');
        echo "
</div>
";
        
        $__internal_b73018d15fdc05fa6428529aaad81fed4c732859b5e037d730e464740844f982->leave($__internal_b73018d15fdc05fa6428529aaad81fed4c732859b5e037d730e464740844f982_prof);

        
        $__internal_99cd8be0b98603bfc095e1e424ea0a1af92adc6c26952ba69a729f9d2c971e6f->leave($__internal_99cd8be0b98603bfc095e1e424ea0a1af92adc6c26952ba69a729f9d2c971e6f_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Locale:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  25 => 1,);
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
<div class=\"one field\">
    {{ form_row(form.code) }}
</div>
", "SyliusAdminBundle:Locale:_form.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Locale/_form.html.twig");
    }
}
