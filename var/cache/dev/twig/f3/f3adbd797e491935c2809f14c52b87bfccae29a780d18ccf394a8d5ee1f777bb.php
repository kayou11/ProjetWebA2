<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_e0580ad9cec8fb2bad5b08ea5c4793da907300e7837927f340e27c9c8421528b extends Twig_Template
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
        $__internal_500a72f720ada8162f8733520dc7dd1379c2dbbcb1a336d956d842bd74acefda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_500a72f720ada8162f8733520dc7dd1379c2dbbcb1a336d956d842bd74acefda->enter($__internal_500a72f720ada8162f8733520dc7dd1379c2dbbcb1a336d956d842bd74acefda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_32cde618dec862964345303ba233b5ab645f07c963ecb1b47d169da64fd73262 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32cde618dec862964345303ba233b5ab645f07c963ecb1b47d169da64fd73262->enter($__internal_32cde618dec862964345303ba233b5ab645f07c963ecb1b47d169da64fd73262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_500a72f720ada8162f8733520dc7dd1379c2dbbcb1a336d956d842bd74acefda->leave($__internal_500a72f720ada8162f8733520dc7dd1379c2dbbcb1a336d956d842bd74acefda_prof);

        
        $__internal_32cde618dec862964345303ba233b5ab645f07c963ecb1b47d169da64fd73262->leave($__internal_32cde618dec862964345303ba233b5ab645f07c963ecb1b47d169da64fd73262_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
