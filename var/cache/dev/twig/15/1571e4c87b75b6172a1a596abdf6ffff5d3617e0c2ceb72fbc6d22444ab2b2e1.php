<?php

/* SyliusAttributeBundle:Types:datetime.html.twig */
class __TwigTemplate_eb2d0a2d288152d275d60ad1b0e9df26961dea6b0240fd15f0bf5bfb228c59c0 extends Twig_Template
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
        $__internal_fb687d3027701840c5e722d9340d3caf0980252f0501a57f23f1e1d8c1245fac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb687d3027701840c5e722d9340d3caf0980252f0501a57f23f1e1d8c1245fac->enter($__internal_fb687d3027701840c5e722d9340d3caf0980252f0501a57f23f1e1d8c1245fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAttributeBundle:Types:datetime.html.twig"));

        $__internal_99593643900b0a3e5c7e95a20f8d50ef49195e44bea683b1df662e1f64d8e5c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99593643900b0a3e5c7e95a20f8d50ef49195e44bea683b1df662e1f64d8e5c7->enter($__internal_99593643900b0a3e5c7e95a20f8d50ef49195e44bea683b1df662e1f64d8e5c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAttributeBundle:Types:datetime.html.twig"));

        // line 1
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["attribute"] ?? null), "attribute", array(), "any", false, true), "configuration", array(), "any", false, true), "format", array(), "array", true, true)) {
            // line 2
            echo "    ";
            echo $this->env->getExtension('Sonata\IntlBundle\Twig\Extension\DateTimeExtension')->formatDatetime($this->getAttribute(($context["attribute"] ?? $this->getContext($context, "attribute")), "value", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["attribute"] ?? $this->getContext($context, "attribute")), "attribute", array()), "configuration", array()), "format", array(), "array"));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo $this->env->getExtension('Sonata\IntlBundle\Twig\Extension\DateTimeExtension')->formatDatetime($this->getAttribute(($context["attribute"] ?? $this->getContext($context, "attribute")), "value", array()));
            echo "
";
        }
        
        $__internal_fb687d3027701840c5e722d9340d3caf0980252f0501a57f23f1e1d8c1245fac->leave($__internal_fb687d3027701840c5e722d9340d3caf0980252f0501a57f23f1e1d8c1245fac_prof);

        
        $__internal_99593643900b0a3e5c7e95a20f8d50ef49195e44bea683b1df662e1f64d8e5c7->leave($__internal_99593643900b0a3e5c7e95a20f8d50ef49195e44bea683b1df662e1f64d8e5c7_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAttributeBundle:Types:datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if attribute.attribute.configuration['format'] is defined %}
    {{ attribute.value|format_datetime(attribute.attribute.configuration['format']) }}
{% else %}
    {{ attribute.value|format_datetime }}
{% endif %}
", "SyliusAttributeBundle:Types:datetime.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/views/Types/datetime.html.twig");
    }
}
