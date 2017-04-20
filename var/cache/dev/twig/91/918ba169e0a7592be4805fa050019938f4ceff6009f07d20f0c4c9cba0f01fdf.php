<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_f15f415eec75811543b07b4dda36bf8c1ef4cfe3478fd534747f08cf6e21c2b3 extends Twig_Template
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
        $__internal_ce73331999ea7f00b6bdc63be0744b6412e223e2a5d3481613ed16bf4c87802e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce73331999ea7f00b6bdc63be0744b6412e223e2a5d3481613ed16bf4c87802e->enter($__internal_ce73331999ea7f00b6bdc63be0744b6412e223e2a5d3481613ed16bf4c87802e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_874f18849e1c034273a2e16b2cc8c1d61c7e947621afee0dabaf351f7af7e801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_874f18849e1c034273a2e16b2cc8c1d61c7e947621afee0dabaf351f7af7e801->enter($__internal_874f18849e1c034273a2e16b2cc8c1d61c7e947621afee0dabaf351f7af7e801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
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
        
        $__internal_ce73331999ea7f00b6bdc63be0744b6412e223e2a5d3481613ed16bf4c87802e->leave($__internal_ce73331999ea7f00b6bdc63be0744b6412e223e2a5d3481613ed16bf4c87802e_prof);

        
        $__internal_874f18849e1c034273a2e16b2cc8c1d61c7e947621afee0dabaf351f7af7e801->leave($__internal_874f18849e1c034273a2e16b2cc8c1d61c7e947621afee0dabaf351f7af7e801_prof);

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

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "TwigBundle:Exception:traces.txt.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
