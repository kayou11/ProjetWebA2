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
        $__internal_5044c13ef70c3241f290168bb2d82fb804bba76927a0f613a8a22d6d7be7a9f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5044c13ef70c3241f290168bb2d82fb804bba76927a0f613a8a22d6d7be7a9f0->enter($__internal_5044c13ef70c3241f290168bb2d82fb804bba76927a0f613a8a22d6d7be7a9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_e895cba9bcf85f031896dee44a2a25619566e62448931be6b99dd7eb8d2de51f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e895cba9bcf85f031896dee44a2a25619566e62448931be6b99dd7eb8d2de51f->enter($__internal_e895cba9bcf85f031896dee44a2a25619566e62448931be6b99dd7eb8d2de51f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_5044c13ef70c3241f290168bb2d82fb804bba76927a0f613a8a22d6d7be7a9f0->leave($__internal_5044c13ef70c3241f290168bb2d82fb804bba76927a0f613a8a22d6d7be7a9f0_prof);

        
        $__internal_e895cba9bcf85f031896dee44a2a25619566e62448931be6b99dd7eb8d2de51f->leave($__internal_e895cba9bcf85f031896dee44a2a25619566e62448931be6b99dd7eb8d2de51f_prof);

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
