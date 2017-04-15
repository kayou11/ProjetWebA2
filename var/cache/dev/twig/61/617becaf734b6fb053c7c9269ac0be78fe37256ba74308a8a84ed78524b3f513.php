<?php

/* SyliusUiBundle:Grid/Filter:entity.html.twig */
class __TwigTemplate_77200ccfc70251e4e350b4360a48c66f9b19d457dc56344acc4c8a598e6efcfc extends Twig_Template
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
        $__internal_5cc11538e01dbbd2ddf7d849745ed247620ec64e3b702b26fbd3af0b6c7640e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cc11538e01dbbd2ddf7d849745ed247620ec64e3b702b26fbd3af0b6c7640e5->enter($__internal_5cc11538e01dbbd2ddf7d849745ed247620ec64e3b702b26fbd3af0b6c7640e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Filter:entity.html.twig"));

        $__internal_2e392f7b96a3f56f0b4882cbe930a71b5a6247924802af19d7544826ac936d1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e392f7b96a3f56f0b4882cbe930a71b5a6247924802af19d7544826ac936d1f->enter($__internal_2e392f7b96a3f56f0b4882cbe930a71b5a6247924802af19d7544826ac936d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Filter:entity.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "@SyliusUi/Form/theme.html.twig"));
        // line 2
        echo "
";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'row', array("label" => $this->getAttribute(($context["filter"] ?? $this->getContext($context, "filter")), "label", array())));
        echo "
";
        
        $__internal_5cc11538e01dbbd2ddf7d849745ed247620ec64e3b702b26fbd3af0b6c7640e5->leave($__internal_5cc11538e01dbbd2ddf7d849745ed247620ec64e3b702b26fbd3af0b6c7640e5_prof);

        
        $__internal_2e392f7b96a3f56f0b4882cbe930a71b5a6247924802af19d7544826ac936d1f->leave($__internal_2e392f7b96a3f56f0b4882cbe930a71b5a6247924802af19d7544826ac936d1f_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Filter:entity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form '@SyliusUi/Form/theme.html.twig' %}

{{ form_row(form, {'label': filter.label}) }}
", "SyliusUiBundle:Grid/Filter:entity.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Grid/Filter/entity.html.twig");
    }
}
