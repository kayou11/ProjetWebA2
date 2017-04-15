<?php

/* SyliusUiBundle:Grid/Filter:exists.html.twig */
class __TwigTemplate_ee9d776bc0e79710d678431c6fec580b1002268c2cbf4e2b399304a276172d78 extends Twig_Template
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
        $__internal_56623aa03dda13fdb6891f4ed78aa2b0c1bbae0264df5cfb515668b8f8b4b3e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56623aa03dda13fdb6891f4ed78aa2b0c1bbae0264df5cfb515668b8f8b4b3e2->enter($__internal_56623aa03dda13fdb6891f4ed78aa2b0c1bbae0264df5cfb515668b8f8b4b3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Filter:exists.html.twig"));

        $__internal_2c0781fef2696a5fc8eef20fbbd5df1e7162b1ef175425443ffae8babd355b63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c0781fef2696a5fc8eef20fbbd5df1e7162b1ef175425443ffae8babd355b63->enter($__internal_2c0781fef2696a5fc8eef20fbbd5df1e7162b1ef175425443ffae8babd355b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Filter:exists.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "@SyliusUi/Form/theme.html.twig"));
        // line 2
        echo "
";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'row', array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["filter"] ?? $this->getContext($context, "filter")), "label", array()))));
        echo "
";
        
        $__internal_56623aa03dda13fdb6891f4ed78aa2b0c1bbae0264df5cfb515668b8f8b4b3e2->leave($__internal_56623aa03dda13fdb6891f4ed78aa2b0c1bbae0264df5cfb515668b8f8b4b3e2_prof);

        
        $__internal_2c0781fef2696a5fc8eef20fbbd5df1e7162b1ef175425443ffae8babd355b63->leave($__internal_2c0781fef2696a5fc8eef20fbbd5df1e7162b1ef175425443ffae8babd355b63_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Filter:exists.html.twig";
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

{{ form_row(form, {'label': filter.label|trans}) }}
", "SyliusUiBundle:Grid/Filter:exists.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Grid/Filter/exists.html.twig");
    }
}
