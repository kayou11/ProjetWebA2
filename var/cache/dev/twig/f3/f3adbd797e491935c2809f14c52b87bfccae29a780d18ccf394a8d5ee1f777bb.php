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
        $__internal_fd95d8036147412e2ae9d5738589744e85e57e7a0fcf5339a2b8201d29f24255 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd95d8036147412e2ae9d5738589744e85e57e7a0fcf5339a2b8201d29f24255->enter($__internal_fd95d8036147412e2ae9d5738589744e85e57e7a0fcf5339a2b8201d29f24255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_259edd5b94a6caff549e37dcc0f9d24d3b21d4d3fd0af867455035f9c2a47957 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_259edd5b94a6caff549e37dcc0f9d24d3b21d4d3fd0af867455035f9c2a47957->enter($__internal_259edd5b94a6caff549e37dcc0f9d24d3b21d4d3fd0af867455035f9c2a47957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
        
        $__internal_fd95d8036147412e2ae9d5738589744e85e57e7a0fcf5339a2b8201d29f24255->leave($__internal_fd95d8036147412e2ae9d5738589744e85e57e7a0fcf5339a2b8201d29f24255_prof);

        
        $__internal_259edd5b94a6caff549e37dcc0f9d24d3b21d4d3fd0af867455035f9c2a47957->leave($__internal_259edd5b94a6caff549e37dcc0f9d24d3b21d4d3fd0af867455035f9c2a47957_prof);

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
