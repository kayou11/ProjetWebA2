<?php

/* SyliusAdminBundle:Crud/Update:_headerTitle.html.twig */
class __TwigTemplate_faa53869f1ad27e58d65defb488dc125bf641ef752f533e2474275ed49db6990 extends Twig_Template
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
        $__internal_876ac8936c2d7de17e51d9dad713eafc3a473927e1a5313397030003ae4f3215 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_876ac8936c2d7de17e51d9dad713eafc3a473927e1a5313397030003ae4f3215->enter($__internal_876ac8936c2d7de17e51d9dad713eafc3a473927e1a5313397030003ae4f3215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud/Update:_headerTitle.html.twig"));

        $__internal_cd3561ca6d9c45716bb0866a0272d5932afac673bf61b3c67165b18c553e05cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd3561ca6d9c45716bb0866a0272d5932afac673bf61b3c67165b18c553e05cf->enter($__internal_cd3561ca6d9c45716bb0866a0272d5932afac673bf61b3c67165b18c553e05cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud/Update:_headerTitle.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->getAttribute(($context["headers"] ?? $this->getContext($context, "headers")), "default", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["header"] ?? $this->getContext($context, "header"))), 1 => (($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array()), "pencil")) : ("pencil")), 2 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array()), null)) : (null)))), "method"), "html", null, true);
        echo "
";
        
        $__internal_876ac8936c2d7de17e51d9dad713eafc3a473927e1a5313397030003ae4f3215->leave($__internal_876ac8936c2d7de17e51d9dad713eafc3a473927e1a5313397030003ae4f3215_prof);

        
        $__internal_cd3561ca6d9c45716bb0866a0272d5932afac673bf61b3c67165b18c553e05cf->leave($__internal_cd3561ca6d9c45716bb0866a0272d5932afac673bf61b3c67165b18c553e05cf_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Crud/Update:_headerTitle.html.twig";
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
        return new Twig_Source("{{ headers.default(header|trans, configuration.vars.icon|default('pencil'), configuration.vars.subheader|default(null)|trans) }}
", "SyliusAdminBundle:Crud/Update:_headerTitle.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Crud/Update/_headerTitle.html.twig");
    }
}
