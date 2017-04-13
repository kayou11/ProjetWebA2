<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_ba13e11fe220e6123e66db52bd9ebfa3eb9147e72e207d762308346006c0c768 extends Twig_Template
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
        $__internal_0141db971990caa3c8ad5d173e0d8058709d530b9758dc7d3c64b4e83dcb6835 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0141db971990caa3c8ad5d173e0d8058709d530b9758dc7d3c64b4e83dcb6835->enter($__internal_0141db971990caa3c8ad5d173e0d8058709d530b9758dc7d3c64b4e83dcb6835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_6cd9d79be12dfe9b456a0f396876062c46a8f8610ec3a3e5afd94420bea33bef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cd9d79be12dfe9b456a0f396876062c46a8f8610ec3a3e5afd94420bea33bef->enter($__internal_6cd9d79be12dfe9b456a0f396876062c46a8f8610ec3a3e5afd94420bea33bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_0141db971990caa3c8ad5d173e0d8058709d530b9758dc7d3c64b4e83dcb6835->leave($__internal_0141db971990caa3c8ad5d173e0d8058709d530b9758dc7d3c64b4e83dcb6835_prof);

        
        $__internal_6cd9d79be12dfe9b456a0f396876062c46a8f8610ec3a3e5afd94420bea33bef->leave($__internal_6cd9d79be12dfe9b456a0f396876062c46a8f8610ec3a3e5afd94420bea33bef_prof);

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
