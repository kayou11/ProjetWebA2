<?php

/* SyliusAdminBundle:Order/Show:_notes.html.twig */
class __TwigTemplate_825ed7928d7201e35a43daca61928142327e222eb53f6d4b3e894ebf782bd675 extends Twig_Template
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
        $__internal_d537004561bf591ed2d8f54203060d408ffcec470a8b49d5142d60c6f642692e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d537004561bf591ed2d8f54203060d408ffcec470a8b49d5142d60c6f642692e->enter($__internal_d537004561bf591ed2d8f54203060d408ffcec470a8b49d5142d60c6f642692e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_notes.html.twig"));

        $__internal_f03e0d9c487162de6243a54e4d47a4c8494b4611815e3f2cd147e76dae932055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f03e0d9c487162de6243a54e4d47a4c8494b4611815e3f2cd147e76dae932055->enter($__internal_f03e0d9c487162de6243a54e4d47a4c8494b4611815e3f2cd147e76dae932055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_notes.html.twig"));

        // line 1
        if ( !(null === $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "notes", array()))) {
            // line 2
            echo "    <h4 class=\"ui top attached styled header\">
        ";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.notes"), "html", null, true);
            echo "
    </h4>
    <div class=\"ui attached segment\" id=\"sylius-order-notes\">
        ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute(($context["order"] ?? $this->getContext($context, "order")), "notes", array()), "html", null, true);
            echo "
    </div>
";
        }
        
        $__internal_d537004561bf591ed2d8f54203060d408ffcec470a8b49d5142d60c6f642692e->leave($__internal_d537004561bf591ed2d8f54203060d408ffcec470a8b49d5142d60c6f642692e_prof);

        
        $__internal_f03e0d9c487162de6243a54e4d47a4c8494b4611815e3f2cd147e76dae932055->leave($__internal_f03e0d9c487162de6243a54e4d47a4c8494b4611815e3f2cd147e76dae932055_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Show:_notes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if order.notes is not null %}
    <h4 class=\"ui top attached styled header\">
        {{ 'sylius.ui.notes'|trans }}
    </h4>
    <div class=\"ui attached segment\" id=\"sylius-order-notes\">
        {{ order.notes }}
    </div>
{% endif %}", "SyliusAdminBundle:Order/Show:_notes.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Show/_notes.html.twig");
    }
}
