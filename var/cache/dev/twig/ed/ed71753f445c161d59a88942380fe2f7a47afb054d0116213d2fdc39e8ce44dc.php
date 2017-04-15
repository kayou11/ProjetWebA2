<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_91c969dbdbbb04c07c3a73da18f3731561c746aea7382bcccf9c5d98373d2f8e extends Twig_Template
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
        $__internal_de92ce364a39b60958bcd6841e7cf5a7fd6ea80c5e592d26aeb2cbb8b66cd4fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de92ce364a39b60958bcd6841e7cf5a7fd6ea80c5e592d26aeb2cbb8b66cd4fc->enter($__internal_de92ce364a39b60958bcd6841e7cf5a7fd6ea80c5e592d26aeb2cbb8b66cd4fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_f78d8e38b4aa99db82784b98bafa4e01420236be6ac6b517eff35fec23f78433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f78d8e38b4aa99db82784b98bafa4e01420236be6ac6b517eff35fec23f78433->enter($__internal_f78d8e38b4aa99db82784b98bafa4e01420236be6ac6b517eff35fec23f78433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_de92ce364a39b60958bcd6841e7cf5a7fd6ea80c5e592d26aeb2cbb8b66cd4fc->leave($__internal_de92ce364a39b60958bcd6841e7cf5a7fd6ea80c5e592d26aeb2cbb8b66cd4fc_prof);

        
        $__internal_f78d8e38b4aa99db82784b98bafa4e01420236be6ac6b517eff35fec23f78433->leave($__internal_f78d8e38b4aa99db82784b98bafa4e01420236be6ac6b517eff35fec23f78433_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
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
", "TwigBundle:Exception:traces.txt.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
