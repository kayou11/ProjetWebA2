<?php

/* SyliusAdminBundle:Currency:_form.html.twig */
class __TwigTemplate_8125178423bd140aa855d31e9a982d08122c64fbbb22436f71bb8b910f45f5a6 extends Twig_Template
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
        $__internal_3d2d9d012d82de94c712b2797dd34b186daf47b7c161c082f86e8d0ef41c1f22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d2d9d012d82de94c712b2797dd34b186daf47b7c161c082f86e8d0ef41c1f22->enter($__internal_3d2d9d012d82de94c712b2797dd34b186daf47b7c161c082f86e8d0ef41c1f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Currency:_form.html.twig"));

        $__internal_8379f64f4dc2267162a1c8e0c70f13e08f7696f585b6b87b366cd64eefdebfcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8379f64f4dc2267162a1c8e0c70f13e08f7696f585b6b87b366cd64eefdebfcf->enter($__internal_8379f64f4dc2267162a1c8e0c70f13e08f7696f585b6b87b366cd64eefdebfcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Currency:_form.html.twig"));

        // line 1
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "code", array()), 'row');
        echo "
";
        
        $__internal_3d2d9d012d82de94c712b2797dd34b186daf47b7c161c082f86e8d0ef41c1f22->leave($__internal_3d2d9d012d82de94c712b2797dd34b186daf47b7c161c082f86e8d0ef41c1f22_prof);

        
        $__internal_8379f64f4dc2267162a1c8e0c70f13e08f7696f585b6b87b366cd64eefdebfcf->leave($__internal_8379f64f4dc2267162a1c8e0c70f13e08f7696f585b6b87b366cd64eefdebfcf_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Currency:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 2,  25 => 1,);
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
{{ form_row(form.code) }}
", "SyliusAdminBundle:Currency:_form.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Currency/_form.html.twig");
    }
}
