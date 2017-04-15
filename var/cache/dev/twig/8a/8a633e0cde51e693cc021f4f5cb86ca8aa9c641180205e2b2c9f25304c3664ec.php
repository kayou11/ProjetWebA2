<?php

/* SyliusAdminBundle:Customer/Grid/Field:verified.html.twig */
class __TwigTemplate_57dab33a028519707fe2918cd95b24972ac811041c862d273436fab7171a0cce extends Twig_Template
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
        $__internal_546889d06acab1cb79604a28f8d9aa8fd14c05c9e5ab51b0ca7487dc0d885c95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_546889d06acab1cb79604a28f8d9aa8fd14c05c9e5ab51b0ca7487dc0d885c95->enter($__internal_546889d06acab1cb79604a28f8d9aa8fd14c05c9e5ab51b0ca7487dc0d885c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Grid/Field:verified.html.twig"));

        $__internal_f031915ffe9d3d4f3aecb337cbec06823909e75f2cef8098ff25a95482a2bbc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f031915ffe9d3d4f3aecb337cbec06823909e75f2cef8098ff25a95482a2bbc9->enter($__internal_f031915ffe9d3d4f3aecb337cbec06823909e75f2cef8098ff25a95482a2bbc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Grid/Field:verified.html.twig"));

        // line 1
        $context["label"] = $this->loadTemplate("@SyliusUi/Macro/labels.html.twig", "SyliusAdminBundle:Customer/Grid/Field:verified.html.twig", 1);
        // line 2
        echo $context["label"]->getyesNo((($this->getAttribute($this->getAttribute(($context["data"] ?? null), "user", array(), "any", false, true), "verified", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["data"] ?? null), "user", array(), "any", false, true), "verified", array()), false)) : (false)));
        echo "
";
        
        $__internal_546889d06acab1cb79604a28f8d9aa8fd14c05c9e5ab51b0ca7487dc0d885c95->leave($__internal_546889d06acab1cb79604a28f8d9aa8fd14c05c9e5ab51b0ca7487dc0d885c95_prof);

        
        $__internal_f031915ffe9d3d4f3aecb337cbec06823909e75f2cef8098ff25a95482a2bbc9->leave($__internal_f031915ffe9d3d4f3aecb337cbec06823909e75f2cef8098ff25a95482a2bbc9_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Customer/Grid/Field:verified.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/labels.html.twig' as label %}
{{ label.yesNo(data.user.verified|default(false)) }}
", "SyliusAdminBundle:Customer/Grid/Field:verified.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Customer/Grid/Field/verified.html.twig");
    }
}
