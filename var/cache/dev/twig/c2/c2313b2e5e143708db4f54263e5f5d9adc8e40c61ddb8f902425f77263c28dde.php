<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_d2710961d828f4d07861b2a82e1724b0e99e7964834e6547bf574d44e3444751 extends Twig_Template
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
        $__internal_e815d01e71a726cd7caa5d37c208d9e5bd3722396e0e6b675c50cd6b1c56d8e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e815d01e71a726cd7caa5d37c208d9e5bd3722396e0e6b675c50cd6b1c56d8e2->enter($__internal_e815d01e71a726cd7caa5d37c208d9e5bd3722396e0e6b675c50cd6b1c56d8e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_3cc9fc82d839ef128b11f11bea3ff35ce1cdf49a38349cd313ef10a8fb9223a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cc9fc82d839ef128b11f11bea3ff35ce1cdf49a38349cd313ef10a8fb9223a2->enter($__internal_3cc9fc82d839ef128b11f11bea3ff35ce1cdf49a38349cd313ef10a8fb9223a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_e815d01e71a726cd7caa5d37c208d9e5bd3722396e0e6b675c50cd6b1c56d8e2->leave($__internal_e815d01e71a726cd7caa5d37c208d9e5bd3722396e0e6b675c50cd6b1c56d8e2_prof);

        
        $__internal_3cc9fc82d839ef128b11f11bea3ff35ce1cdf49a38349cd313ef10a8fb9223a2->leave($__internal_3cc9fc82d839ef128b11f11bea3ff35ce1cdf49a38349cd313ef10a8fb9223a2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
