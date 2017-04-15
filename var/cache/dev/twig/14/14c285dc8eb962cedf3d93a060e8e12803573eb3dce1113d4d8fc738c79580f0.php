<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_6163bc8315f9b78d7432b063fcfe1616082431ca4cc782acaab2cb9466bcd131 extends Twig_Template
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
        $__internal_498db5ed3adfad4213e83e2a2d377415f90e67718b31352d5da98e1ada818688 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_498db5ed3adfad4213e83e2a2d377415f90e67718b31352d5da98e1ada818688->enter($__internal_498db5ed3adfad4213e83e2a2d377415f90e67718b31352d5da98e1ada818688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_f6444448f6435b6314d8cbeb4e3dcbaa2af9a3e5dbd083278b8db8631eef04bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6444448f6435b6314d8cbeb4e3dcbaa2af9a3e5dbd083278b8db8631eef04bf->enter($__internal_f6444448f6435b6314d8cbeb4e3dcbaa2af9a3e5dbd083278b8db8631eef04bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
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
        
        $__internal_498db5ed3adfad4213e83e2a2d377415f90e67718b31352d5da98e1ada818688->leave($__internal_498db5ed3adfad4213e83e2a2d377415f90e67718b31352d5da98e1ada818688_prof);

        
        $__internal_f6444448f6435b6314d8cbeb4e3dcbaa2af9a3e5dbd083278b8db8631eef04bf->leave($__internal_f6444448f6435b6314d8cbeb4e3dcbaa2af9a3e5dbd083278b8db8631eef04bf_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "TwigBundle:Exception:traces.xml.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
