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
        $__internal_f0af8405fe3fd7ae096a1939703dea890a515be7106bbe33301895595b3752b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0af8405fe3fd7ae096a1939703dea890a515be7106bbe33301895595b3752b7->enter($__internal_f0af8405fe3fd7ae096a1939703dea890a515be7106bbe33301895595b3752b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_f9a70446c0d07479ed26b69256d570097b46e7dc29924fd53330919a8d7f8312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a70446c0d07479ed26b69256d570097b46e7dc29924fd53330919a8d7f8312->enter($__internal_f9a70446c0d07479ed26b69256d570097b46e7dc29924fd53330919a8d7f8312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
        
        $__internal_f0af8405fe3fd7ae096a1939703dea890a515be7106bbe33301895595b3752b7->leave($__internal_f0af8405fe3fd7ae096a1939703dea890a515be7106bbe33301895595b3752b7_prof);

        
        $__internal_f9a70446c0d07479ed26b69256d570097b46e7dc29924fd53330919a8d7f8312->leave($__internal_f9a70446c0d07479ed26b69256d570097b46e7dc29924fd53330919a8d7f8312_prof);

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
