<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_091b88b8ea60e0f3ad93e62d711c1d0d6b32b20d390c4a888cc6a7cd849c9cff extends Twig_Template
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
        $__internal_4711528bed7188dd50b4d5f759f79abda93c2c9851815d73b6bf6907060f005f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4711528bed7188dd50b4d5f759f79abda93c2c9851815d73b6bf6907060f005f->enter($__internal_4711528bed7188dd50b4d5f759f79abda93c2c9851815d73b6bf6907060f005f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_69047bb8213f4f2568ff9735fbcb22bf13a09a46f901def2d5b5abd39a168af3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69047bb8213f4f2568ff9735fbcb22bf13a09a46f901def2d5b5abd39a168af3->enter($__internal_69047bb8213f4f2568ff9735fbcb22bf13a09a46f901def2d5b5abd39a168af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_4711528bed7188dd50b4d5f759f79abda93c2c9851815d73b6bf6907060f005f->leave($__internal_4711528bed7188dd50b4d5f759f79abda93c2c9851815d73b6bf6907060f005f_prof);

        
        $__internal_69047bb8213f4f2568ff9735fbcb22bf13a09a46f901def2d5b5abd39a168af3->leave($__internal_69047bb8213f4f2568ff9735fbcb22bf13a09a46f901def2d5b5abd39a168af3_prof);

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
", "@Twig/Exception/traces.txt.twig", "C:\\MAMP\\htdocs\\ProjetWebA2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
