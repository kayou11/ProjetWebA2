<?php

/* SyliusAdminBundle:ExchangeRate/Grid/Field:targetCurrencyName.html.twig */
class __TwigTemplate_60b2f872e05fb9fe987a785d2c4898383058c62122f26b6eb28c06d357afebaf extends Twig_Template
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
        $__internal_f69fdaf799aece45c523a4a95f95b29d55de4ed0197c22f32b475188e2e9668e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f69fdaf799aece45c523a4a95f95b29d55de4ed0197c22f32b475188e2e9668e->enter($__internal_f69fdaf799aece45c523a4a95f95b29d55de4ed0197c22f32b475188e2e9668e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ExchangeRate/Grid/Field:targetCurrencyName.html.twig"));

        $__internal_566d1301d401cafc6a87154670d9471c5ba04f7ad482b3eeeb893c108ea6e9e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_566d1301d401cafc6a87154670d9471c5ba04f7ad482b3eeeb893c108ea6e9e3->enter($__internal_566d1301d401cafc6a87154670d9471c5ba04f7ad482b3eeeb893c108ea6e9e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ExchangeRate/Grid/Field:targetCurrencyName.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "targetCurrency", array()), "name", array()), "html", null, true);
        echo "
";
        
        $__internal_f69fdaf799aece45c523a4a95f95b29d55de4ed0197c22f32b475188e2e9668e->leave($__internal_f69fdaf799aece45c523a4a95f95b29d55de4ed0197c22f32b475188e2e9668e_prof);

        
        $__internal_566d1301d401cafc6a87154670d9471c5ba04f7ad482b3eeeb893c108ea6e9e3->leave($__internal_566d1301d401cafc6a87154670d9471c5ba04f7ad482b3eeeb893c108ea6e9e3_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ExchangeRate/Grid/Field:targetCurrencyName.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ data.targetCurrency.name }}
", "SyliusAdminBundle:ExchangeRate/Grid/Field:targetCurrencyName.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ExchangeRate/Grid/Field/targetCurrencyName.html.twig");
    }
}
