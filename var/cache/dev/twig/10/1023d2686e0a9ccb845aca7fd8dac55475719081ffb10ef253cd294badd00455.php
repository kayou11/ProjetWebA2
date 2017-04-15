<?php

/* SyliusAdminBundle:Common/Form:_province.html.twig */
class __TwigTemplate_c08998dd593e782f5a39cde1defda081011d400c2d98cbda1c439f1970327d3c extends Twig_Template
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
        $__internal_55099b5408557cbd891ac3a72f51e99ade6b530512a1ee28b5e8d8d2bc69302e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55099b5408557cbd891ac3a72f51e99ade6b530512a1ee28b5e8d8d2bc69302e->enter($__internal_55099b5408557cbd891ac3a72f51e99ade6b530512a1ee28b5e8d8d2bc69302e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Common/Form:_province.html.twig"));

        $__internal_a47d341c2555f99c5b34d93c830099240025c64e6dd6eff9a64e5bd6c4132455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a47d341c2555f99c5b34d93c830099240025c64e6dd6eff9a64e5bd6c4132455->enter($__internal_a47d341c2555f99c5b34d93c830099240025c64e6dd6eff9a64e5bd6c4132455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Common/Form:_province.html.twig"));

        // line 1
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
";
        // line 2
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "choices", array(), "any", true, true)) {
            // line 3
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget', array("attr" => array("class" => "ui dropdown")));
            echo "
";
        } else {
            // line 5
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            echo "
";
        }
        
        $__internal_55099b5408557cbd891ac3a72f51e99ade6b530512a1ee28b5e8d8d2bc69302e->leave($__internal_55099b5408557cbd891ac3a72f51e99ade6b530512a1ee28b5e8d8d2bc69302e_prof);

        
        $__internal_a47d341c2555f99c5b34d93c830099240025c64e6dd6eff9a64e5bd6c4132455->leave($__internal_a47d341c2555f99c5b34d93c830099240025c64e6dd6eff9a64e5bd6c4132455_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Common/Form:_province.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,  31 => 3,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_label(form) }}
{% if form.vars.choices is defined %}
    {{ form_widget(form, {'attr': {'class': 'ui dropdown'}}) }}
{% else %}
    {{ form_widget(form) }}
{% endif %}
", "SyliusAdminBundle:Common/Form:_province.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Common/Form/_province.html.twig");
    }
}
