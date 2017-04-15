<?php

/* SyliusAdminBundle:ExchangeRate:_form.html.twig */
class __TwigTemplate_8533196e8fa199163e92e4be2ba7105630d8c2f6f1a5886b1b74c5a5a119237d extends Twig_Template
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
        $__internal_dbb5ee84b06e7c1f02e8c7f708c99dfa5c6067d2abc42974135f48710f5b82a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbb5ee84b06e7c1f02e8c7f708c99dfa5c6067d2abc42974135f48710f5b82a4->enter($__internal_dbb5ee84b06e7c1f02e8c7f708c99dfa5c6067d2abc42974135f48710f5b82a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ExchangeRate:_form.html.twig"));

        $__internal_59145e401c213f6736e0447908b14ff9454d0de819f98919c26461c84e16586d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59145e401c213f6736e0447908b14ff9454d0de819f98919c26461c84e16586d->enter($__internal_59145e401c213f6736e0447908b14ff9454d0de819f98919c26461c84e16586d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ExchangeRate:_form.html.twig"));

        // line 1
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
<div class=\"three fields\">
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sourceCurrency", array()), 'row');
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "targetCurrency", array()), 'row');
        echo "
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ratio", array()), 'row');
        echo "
</div>
";
        
        $__internal_dbb5ee84b06e7c1f02e8c7f708c99dfa5c6067d2abc42974135f48710f5b82a4->leave($__internal_dbb5ee84b06e7c1f02e8c7f708c99dfa5c6067d2abc42974135f48710f5b82a4_prof);

        
        $__internal_59145e401c213f6736e0447908b14ff9454d0de819f98919c26461c84e16586d->leave($__internal_59145e401c213f6736e0447908b14ff9454d0de819f98919c26461c84e16586d_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ExchangeRate:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  34 => 4,  30 => 3,  25 => 1,);
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
<div class=\"three fields\">
    {{ form_row(form.sourceCurrency) }}
    {{ form_row(form.targetCurrency) }}
    {{ form_row(form.ratio) }}
</div>
", "SyliusAdminBundle:ExchangeRate:_form.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ExchangeRate/_form.html.twig");
    }
}
