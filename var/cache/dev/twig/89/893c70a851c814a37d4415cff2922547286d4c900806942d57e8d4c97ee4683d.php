<?php

/* SyliusAttributeBundle:Types:date.html.twig */
class __TwigTemplate_a3f06de29dd22bf4b8c2681345c8bcdb12617534c28d9512ec394aadabab528f extends Twig_Template
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
        $__internal_50237e8979141fc9ee1fb820140f38ca029e255b6f095d2794107bd355b6536b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50237e8979141fc9ee1fb820140f38ca029e255b6f095d2794107bd355b6536b->enter($__internal_50237e8979141fc9ee1fb820140f38ca029e255b6f095d2794107bd355b6536b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAttributeBundle:Types:date.html.twig"));

        $__internal_af116399d4b8856b15a3cb151a5be9bc747e6c78de4c1918f1ed6cd1324019e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af116399d4b8856b15a3cb151a5be9bc747e6c78de4c1918f1ed6cd1324019e9->enter($__internal_af116399d4b8856b15a3cb151a5be9bc747e6c78de4c1918f1ed6cd1324019e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAttributeBundle:Types:date.html.twig"));

        // line 1
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["attribute"] ?? null), "attribute", array(), "any", false, true), "configuration", array(), "any", false, true), "format", array(), "array", true, true)) {
            // line 2
            echo "    ";
            echo $this->env->getExtension('Sonata\IntlBundle\Twig\Extension\DateTimeExtension')->formatDate($this->getAttribute(($context["attribute"] ?? $this->getContext($context, "attribute")), "value", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["attribute"] ?? $this->getContext($context, "attribute")), "attribute", array()), "configuration", array()), "format", array(), "array"));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo $this->env->getExtension('Sonata\IntlBundle\Twig\Extension\DateTimeExtension')->formatDate($this->getAttribute(($context["attribute"] ?? $this->getContext($context, "attribute")), "value", array()));
            echo "
";
        }
        
        $__internal_50237e8979141fc9ee1fb820140f38ca029e255b6f095d2794107bd355b6536b->leave($__internal_50237e8979141fc9ee1fb820140f38ca029e255b6f095d2794107bd355b6536b_prof);

        
        $__internal_af116399d4b8856b15a3cb151a5be9bc747e6c78de4c1918f1ed6cd1324019e9->leave($__internal_af116399d4b8856b15a3cb151a5be9bc747e6c78de4c1918f1ed6cd1324019e9_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAttributeBundle:Types:date.html.twig";
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
    {{ attribute.value|format_date(attribute.attribute.configuration['format']) }}
{% else %}
    {{ attribute.value|format_date }}
{% endif %}
", "SyliusAttributeBundle:Types:date.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AttributeBundle/Resources/views/Types/date.html.twig");
    }
}
