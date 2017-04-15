<?php

/* SyliusUiBundle:Grid/Field:enabled.html.twig */
class __TwigTemplate_f0a73585538624af18002f7f0287c4e30d0dfbef1202797468bdb9340ebacf84 extends Twig_Template
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
        $__internal_dd5ce0872ddd2c5eabe23610536e6c4153209634d61c09052ea260ed0631bf29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd5ce0872ddd2c5eabe23610536e6c4153209634d61c09052ea260ed0631bf29->enter($__internal_dd5ce0872ddd2c5eabe23610536e6c4153209634d61c09052ea260ed0631bf29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Field:enabled.html.twig"));

        $__internal_9373b62b96cea7bdffb3fd2a14f8f864dd7359f7191efa774dc00d53187ff28f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9373b62b96cea7bdffb3fd2a14f8f864dd7359f7191efa774dc00d53187ff28f->enter($__internal_9373b62b96cea7bdffb3fd2a14f8f864dd7359f7191efa774dc00d53187ff28f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Field:enabled.html.twig"));

        // line 1
        $context["label"] = $this->loadTemplate("@SyliusUi/Macro/labels.html.twig", "SyliusUiBundle:Grid/Field:enabled.html.twig", 1);
        // line 2
        echo $context["label"]->getstatus(($context["data"] ?? $this->getContext($context, "data")));
        echo "
";
        
        $__internal_dd5ce0872ddd2c5eabe23610536e6c4153209634d61c09052ea260ed0631bf29->leave($__internal_dd5ce0872ddd2c5eabe23610536e6c4153209634d61c09052ea260ed0631bf29_prof);

        
        $__internal_9373b62b96cea7bdffb3fd2a14f8f864dd7359f7191efa774dc00d53187ff28f->leave($__internal_9373b62b96cea7bdffb3fd2a14f8f864dd7359f7191efa774dc00d53187ff28f_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Field:enabled.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/labels.html.twig' as label %}
{{ label.status(data) }}
", "SyliusUiBundle:Grid/Field:enabled.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Grid/Field/enabled.html.twig");
    }
}
