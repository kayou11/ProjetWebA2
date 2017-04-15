<?php

/* SyliusUiBundle:Grid/Filter:string.html.twig */
class __TwigTemplate_11d5e49e202faf3dc7b3dfe6ce28d111449e8228e12a9840b831e6daa037ad96 extends Twig_Template
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
        $__internal_07a174adeb75349e1edb90791f305f603f6eaeee2522ddebc6340ed865d7a4d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07a174adeb75349e1edb90791f305f603f6eaeee2522ddebc6340ed865d7a4d9->enter($__internal_07a174adeb75349e1edb90791f305f603f6eaeee2522ddebc6340ed865d7a4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Filter:string.html.twig"));

        $__internal_0205f53c21ce6be61b44680c244a6ff22e3901d05148e2e235726ebde3d4a20b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0205f53c21ce6be61b44680c244a6ff22e3901d05148e2e235726ebde3d4a20b->enter($__internal_0205f53c21ce6be61b44680c244a6ff22e3901d05148e2e235726ebde3d4a20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Filter:string.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "@SyliusUi/Form/theme.html.twig"));
        // line 2
        echo "
";
        // line 3
        if ($this->getAttribute(($context["form"] ?? null), "type", array(), "any", true, true)) {
            // line 4
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", array()), 'row', array("label" => $this->getAttribute(($context["filter"] ?? $this->getContext($context, "filter")), "label", array())));
            echo "
";
        }
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "value", array()), 'row', array("label" => (($this->getAttribute(($context["form"] ?? null), "type", array(), "any", true, true)) ? ("") : (false))));
        echo "
";
        
        $__internal_07a174adeb75349e1edb90791f305f603f6eaeee2522ddebc6340ed865d7a4d9->leave($__internal_07a174adeb75349e1edb90791f305f603f6eaeee2522ddebc6340ed865d7a4d9_prof);

        
        $__internal_0205f53c21ce6be61b44680c244a6ff22e3901d05148e2e235726ebde3d4a20b->leave($__internal_0205f53c21ce6be61b44680c244a6ff22e3901d05148e2e235726ebde3d4a20b_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Filter:string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
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

{% if form.type is defined %}
{{ form_row(form.type, {'label': filter.label}) }}
{% endif %}
{{ form_row(form.value, {'label': form.type is defined ? '' : false}) }}
", "SyliusUiBundle:Grid/Filter:string.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Grid/Filter/string.html.twig");
    }
}
