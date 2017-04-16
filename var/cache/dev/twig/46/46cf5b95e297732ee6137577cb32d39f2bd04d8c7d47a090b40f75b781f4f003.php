<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_254f6caabe16fab24f97f95850e3e4d69f428754424313c19c57a6983370550a extends Twig_Template
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
        $__internal_74976d667abfa66441857f8ae487bfa0ca9f1d6672c73703be0748283b2ed9a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74976d667abfa66441857f8ae487bfa0ca9f1d6672c73703be0748283b2ed9a5->enter($__internal_74976d667abfa66441857f8ae487bfa0ca9f1d6672c73703be0748283b2ed9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_3ec317fb2e7fe53b71e2b93ce61effc019170504be0e80defbf4bbb704363aa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ec317fb2e7fe53b71e2b93ce61effc019170504be0e80defbf4bbb704363aa2->enter($__internal_3ec317fb2e7fe53b71e2b93ce61effc019170504be0e80defbf4bbb704363aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
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
        
        $__internal_74976d667abfa66441857f8ae487bfa0ca9f1d6672c73703be0748283b2ed9a5->leave($__internal_74976d667abfa66441857f8ae487bfa0ca9f1d6672c73703be0748283b2ed9a5_prof);

        
        $__internal_3ec317fb2e7fe53b71e2b93ce61effc019170504be0e80defbf4bbb704363aa2->leave($__internal_3ec317fb2e7fe53b71e2b93ce61effc019170504be0e80defbf4bbb704363aa2_prof);

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
