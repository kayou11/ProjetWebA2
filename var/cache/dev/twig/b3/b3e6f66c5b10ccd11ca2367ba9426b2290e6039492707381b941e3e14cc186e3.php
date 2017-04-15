<?php

/* SyliusUiBundle:Grid/Field:humanized.html.twig */
class __TwigTemplate_ae93f5d39110f9d34d7d53d1d425d52807801840d31477bd47c2def05474cd93 extends Twig_Template
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
        $__internal_713f2ad301d3fddfe0e113154ee91a3c904ada9efbe2c6fe4f5eba31adc3d22f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_713f2ad301d3fddfe0e113154ee91a3c904ada9efbe2c6fe4f5eba31adc3d22f->enter($__internal_713f2ad301d3fddfe0e113154ee91a3c904ada9efbe2c6fe4f5eba31adc3d22f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Field:humanized.html.twig"));

        $__internal_8d96fde7dd2afc3843e6a105302c47a2ca126813422cdb31406693ba9937782c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d96fde7dd2afc3843e6a105302c47a2ca126813422cdb31406693ba9937782c->enter($__internal_8d96fde7dd2afc3843e6a105302c47a2ca126813422cdb31406693ba9937782c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Field:humanized.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["data"] ?? $this->getContext($context, "data"))), "html", null, true);
        echo "
";
        
        $__internal_713f2ad301d3fddfe0e113154ee91a3c904ada9efbe2c6fe4f5eba31adc3d22f->leave($__internal_713f2ad301d3fddfe0e113154ee91a3c904ada9efbe2c6fe4f5eba31adc3d22f_prof);

        
        $__internal_8d96fde7dd2afc3843e6a105302c47a2ca126813422cdb31406693ba9937782c->leave($__internal_8d96fde7dd2afc3843e6a105302c47a2ca126813422cdb31406693ba9937782c_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Field:humanized.html.twig";
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
        return new Twig_Source("{{ data|humanize }}
", "SyliusUiBundle:Grid/Field:humanized.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Grid/Field/humanized.html.twig");
    }
}
