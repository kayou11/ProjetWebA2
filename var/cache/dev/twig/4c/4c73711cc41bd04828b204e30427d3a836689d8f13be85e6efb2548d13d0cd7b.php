<?php

/* SyliusAdminBundle:Order/Label/State:cancelled.html.twig */
class __TwigTemplate_03577ce49a4c4c6cee6a59e43b37212ae019d77914f8607a0a13fff07e588bc9 extends Twig_Template
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
        $__internal_146e3be79c3e5778d704d05320cd3598b2107431ab93f64b05fcb9804a0297f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_146e3be79c3e5778d704d05320cd3598b2107431ab93f64b05fcb9804a0297f9->enter($__internal_146e3be79c3e5778d704d05320cd3598b2107431ab93f64b05fcb9804a0297f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/State:cancelled.html.twig"));

        $__internal_2b688a3ecac90012b17ffb8deccbb9bedef88a2058c6ab0ecbd7d45f0f7740c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b688a3ecac90012b17ffb8deccbb9bedef88a2058c6ab0ecbd7d45f0f7740c6->enter($__internal_2b688a3ecac90012b17ffb8deccbb9bedef88a2058c6ab0ecbd7d45f0f7740c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/State:cancelled.html.twig"));

        // line 1
        echo "<span class=\"ui yellow label\">
    <i class=\"ban icon\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
        echo "
</span>
";
        
        $__internal_146e3be79c3e5778d704d05320cd3598b2107431ab93f64b05fcb9804a0297f9->leave($__internal_146e3be79c3e5778d704d05320cd3598b2107431ab93f64b05fcb9804a0297f9_prof);

        
        $__internal_2b688a3ecac90012b17ffb8deccbb9bedef88a2058c6ab0ecbd7d45f0f7740c6->leave($__internal_2b688a3ecac90012b17ffb8deccbb9bedef88a2058c6ab0ecbd7d45f0f7740c6_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Label/State:cancelled.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"ui yellow label\">
    <i class=\"ban icon\"></i>
    {{ value|trans }}
</span>
", "SyliusAdminBundle:Order/Label/State:cancelled.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Label/State/cancelled.html.twig");
    }
}
