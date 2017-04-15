<?php

/* SyliusAdminBundle:ProductAssociationType:_form.html.twig */
class __TwigTemplate_6cf9cbd5dc977b90c4c570ae753b05b1a2f441cec4f4cb8f5d94544c51cdbf29 extends Twig_Template
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
        $__internal_479db0afe6ed37b78f00967b6404d831bf76d52b0cadc3055808d83117db6976 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_479db0afe6ed37b78f00967b6404d831bf76d52b0cadc3055808d83117db6976->enter($__internal_479db0afe6ed37b78f00967b6404d831bf76d52b0cadc3055808d83117db6976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductAssociationType:_form.html.twig"));

        $__internal_4b11071b104396873e509864ced9691dd51ea25fb9624d20848bd664d4a0465d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b11071b104396873e509864ced9691dd51ea25fb9624d20848bd664d4a0465d->enter($__internal_4b11071b104396873e509864ced9691dd51ea25fb9624d20848bd664d4a0465d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductAssociationType:_form.html.twig"));

        // line 1
        $context["__internal_d90c22cd563f1c659554834c287970f8f992c624ebfeb04180a604f7a8e532b6"] = $this->loadTemplate("@SyliusAdmin/Macro/translationForm.html.twig", "SyliusAdminBundle:ProductAssociationType:_form.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "code", array()), 'row');
        echo "
";
        // line 5
        echo $context["__internal_d90c22cd563f1c659554834c287970f8f992c624ebfeb04180a604f7a8e532b6"]->gettranslationForm($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "translations", array()));
        echo "
";
        
        $__internal_479db0afe6ed37b78f00967b6404d831bf76d52b0cadc3055808d83117db6976->leave($__internal_479db0afe6ed37b78f00967b6404d831bf76d52b0cadc3055808d83117db6976_prof);

        
        $__internal_4b11071b104396873e509864ced9691dd51ea25fb9624d20848bd664d4a0465d->leave($__internal_4b11071b104396873e509864ced9691dd51ea25fb9624d20848bd664d4a0465d_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductAssociationType:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  34 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% from '@SyliusAdmin/Macro/translationForm.html.twig' import translationForm %}

{{ form_errors(form) }}
{{ form_row(form.code) }}
{{ translationForm(form.translations) }}
", "SyliusAdminBundle:ProductAssociationType:_form.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductAssociationType/_form.html.twig");
    }
}
