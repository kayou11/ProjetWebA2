<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_c837514a0123ec189d82acfe22ba17b817836b5a3185b3acd55fa100b5ef3383 extends Twig_Template
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
        $__internal_202fc5dbcdb9c11dc5f163fe72ca081110adc434808906b3cedb605988a2f6d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_202fc5dbcdb9c11dc5f163fe72ca081110adc434808906b3cedb605988a2f6d1->enter($__internal_202fc5dbcdb9c11dc5f163fe72ca081110adc434808906b3cedb605988a2f6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_70a7116001ec88605b37a96e19f01d09a25c3224c0e90358a98d90cea2fbb405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70a7116001ec88605b37a96e19f01d09a25c3224c0e90358a98d90cea2fbb405->enter($__internal_70a7116001ec88605b37a96e19f01d09a25c3224c0e90358a98d90cea2fbb405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_202fc5dbcdb9c11dc5f163fe72ca081110adc434808906b3cedb605988a2f6d1->leave($__internal_202fc5dbcdb9c11dc5f163fe72ca081110adc434808906b3cedb605988a2f6d1_prof);

        
        $__internal_70a7116001ec88605b37a96e19f01d09a25c3224c0e90358a98d90cea2fbb405->leave($__internal_70a7116001ec88605b37a96e19f01d09a25c3224c0e90358a98d90cea2fbb405_prof);

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
