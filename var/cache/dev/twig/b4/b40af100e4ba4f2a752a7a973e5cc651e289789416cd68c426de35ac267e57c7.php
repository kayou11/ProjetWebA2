<?php

/* SyliusAdminBundle:Order/Grid/Field:customer.html.twig */
class __TwigTemplate_77e17ef6746867c824b20273fcac65de3876f8b738fd6e157961b0c2de5a09df extends Twig_Template
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
        $__internal_29d4c31ab1253b395409658321562f4482481de2234c281dc74281e6c7eed869 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29d4c31ab1253b395409658321562f4482481de2234c281dc74281e6c7eed869->enter($__internal_29d4c31ab1253b395409658321562f4482481de2234c281dc74281e6c7eed869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Grid/Field:customer.html.twig"));

        $__internal_631d83a7157ec0c845531f7d3af75e02aa00fd2bde99ad9f28e49b6b86f77ecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_631d83a7157ec0c845531f7d3af75e02aa00fd2bde99ad9f28e49b6b86f77ecf->enter($__internal_631d83a7157ec0c845531f7d3af75e02aa00fd2bde99ad9f28e49b6b86f77ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Grid/Field:customer.html.twig"));

        // line 1
        echo "<strong>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "lastName", array()), "html", null, true);
        echo "</strong>
<p>";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "email", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_29d4c31ab1253b395409658321562f4482481de2234c281dc74281e6c7eed869->leave($__internal_29d4c31ab1253b395409658321562f4482481de2234c281dc74281e6c7eed869_prof);

        
        $__internal_631d83a7157ec0c845531f7d3af75e02aa00fd2bde99ad9f28e49b6b86f77ecf->leave($__internal_631d83a7157ec0c845531f7d3af75e02aa00fd2bde99ad9f28e49b6b86f77ecf_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Grid/Field:customer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<strong>{{ data.firstName }} {{ data.lastName }}</strong>
<p>{{ data.email }}</p>
", "SyliusAdminBundle:Order/Grid/Field:customer.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Grid/Field/customer.html.twig");
    }
}
