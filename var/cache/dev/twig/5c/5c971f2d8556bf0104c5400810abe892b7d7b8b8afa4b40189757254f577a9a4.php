<?php

/* SyliusAdminBundle:Order/Label/State:new.html.twig */
class __TwigTemplate_ac7cf8093342905f61703a8c8d93f28f8b3280a10877efb8ee43b358e7958300 extends Twig_Template
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
        $__internal_3bafd2dee55f4599987360ce1b941e53891581f3436839bd3fcbd33c86e21d73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bafd2dee55f4599987360ce1b941e53891581f3436839bd3fcbd33c86e21d73->enter($__internal_3bafd2dee55f4599987360ce1b941e53891581f3436839bd3fcbd33c86e21d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/State:new.html.twig"));

        $__internal_d72a1d12ef29adf39da873240ba763a8e8acaa8e4cdf083fbc5128de20c7c7ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d72a1d12ef29adf39da873240ba763a8e8acaa8e4cdf083fbc5128de20c7c7ee->enter($__internal_d72a1d12ef29adf39da873240ba763a8e8acaa8e4cdf083fbc5128de20c7c7ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/State:new.html.twig"));

        // line 1
        echo "<span class=\"ui blue label\">
    <i class=\"inbox icon\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
        echo "
</span>
";
        
        $__internal_3bafd2dee55f4599987360ce1b941e53891581f3436839bd3fcbd33c86e21d73->leave($__internal_3bafd2dee55f4599987360ce1b941e53891581f3436839bd3fcbd33c86e21d73_prof);

        
        $__internal_d72a1d12ef29adf39da873240ba763a8e8acaa8e4cdf083fbc5128de20c7c7ee->leave($__internal_d72a1d12ef29adf39da873240ba763a8e8acaa8e4cdf083fbc5128de20c7c7ee_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Label/State:new.html.twig";
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
        return new Twig_Source("<span class=\"ui blue label\">
    <i class=\"inbox icon\"></i>
    {{ value|trans }}
</span>
", "SyliusAdminBundle:Order/Label/State:new.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Order/Label/State/new.html.twig");
    }
}
