<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_9f173b8159cd0d81cd4ad6de7a6cfc310f5e20918e278ee6dcc2cd130566397d extends Twig_Template
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
        $__internal_1cbeb37cf43d40e51d0315028b593b885b1a55fae1cd3def1e370d65111751b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cbeb37cf43d40e51d0315028b593b885b1a55fae1cd3def1e370d65111751b5->enter($__internal_1cbeb37cf43d40e51d0315028b593b885b1a55fae1cd3def1e370d65111751b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_8f2c97352fff628afb6e136398d1cdb174687b94463b7aa34299e886a78618d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f2c97352fff628afb6e136398d1cdb174687b94463b7aa34299e886a78618d3->enter($__internal_8f2c97352fff628afb6e136398d1cdb174687b94463b7aa34299e886a78618d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
        
        $__internal_1cbeb37cf43d40e51d0315028b593b885b1a55fae1cd3def1e370d65111751b5->leave($__internal_1cbeb37cf43d40e51d0315028b593b885b1a55fae1cd3def1e370d65111751b5_prof);

        
        $__internal_8f2c97352fff628afb6e136398d1cdb174687b94463b7aa34299e886a78618d3->leave($__internal_8f2c97352fff628afb6e136398d1cdb174687b94463b7aa34299e886a78618d3_prof);

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
