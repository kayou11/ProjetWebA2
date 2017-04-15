<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_d27a0dc309d0ebf4096711a028d4ba7fea681e8bda5e38a8701a461c3e87330c extends Twig_Template
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
        $__internal_1bfcd6414cebfdd859751eced603a17544f53850fb3cc0a6f3252e7931956e98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bfcd6414cebfdd859751eced603a17544f53850fb3cc0a6f3252e7931956e98->enter($__internal_1bfcd6414cebfdd859751eced603a17544f53850fb3cc0a6f3252e7931956e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_41f72b57eed12b8f8c3df4e06a2c057de77e516badc37906fead6a56d48e4276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41f72b57eed12b8f8c3df4e06a2c057de77e516badc37906fead6a56d48e4276->enter($__internal_41f72b57eed12b8f8c3df4e06a2c057de77e516badc37906fead6a56d48e4276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_1bfcd6414cebfdd859751eced603a17544f53850fb3cc0a6f3252e7931956e98->leave($__internal_1bfcd6414cebfdd859751eced603a17544f53850fb3cc0a6f3252e7931956e98_prof);

        
        $__internal_41f72b57eed12b8f8c3df4e06a2c057de77e516badc37906fead6a56d48e4276->leave($__internal_41f72b57eed12b8f8c3df4e06a2c057de77e516badc37906fead6a56d48e4276_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
