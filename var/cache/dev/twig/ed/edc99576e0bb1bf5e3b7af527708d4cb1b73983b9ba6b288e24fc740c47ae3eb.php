<?php

/* SyliusAdminBundle:Channel/Grid/Field:themeName.html.twig */
class __TwigTemplate_f5702ff4db4dc902c6602d239b4ef979f4bbdc1bf46e24eea9bfe561801fc38b extends Twig_Template
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
        $__internal_f011ddbe08e099fc3a9278ff9ab7124e9861a6cb580585634eac6744dfa04648 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f011ddbe08e099fc3a9278ff9ab7124e9861a6cb580585634eac6744dfa04648->enter($__internal_f011ddbe08e099fc3a9278ff9ab7124e9861a6cb580585634eac6744dfa04648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Channel/Grid/Field:themeName.html.twig"));

        $__internal_420a451d2a4c55a2515254da9f9db9d39ae62ce2450630ad8d4c398526f9fc8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_420a451d2a4c55a2515254da9f9db9d39ae62ce2450630ad8d4c398526f9fc8b->enter($__internal_420a451d2a4c55a2515254da9f9db9d39ae62ce2450630ad8d4c398526f9fc8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Channel/Grid/Field:themeName.html.twig"));

        // line 1
        echo "<span class=\"ui icon label\">
    <i class=\"paint brush icon\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, ((array_key_exists("data", $context)) ? (_twig_default_filter(($context["data"] ?? $this->getContext($context, "data")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.default"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.default"))), "html", null, true);
        echo "
</span>
";
        
        $__internal_f011ddbe08e099fc3a9278ff9ab7124e9861a6cb580585634eac6744dfa04648->leave($__internal_f011ddbe08e099fc3a9278ff9ab7124e9861a6cb580585634eac6744dfa04648_prof);

        
        $__internal_420a451d2a4c55a2515254da9f9db9d39ae62ce2450630ad8d4c398526f9fc8b->leave($__internal_420a451d2a4c55a2515254da9f9db9d39ae62ce2450630ad8d4c398526f9fc8b_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Channel/Grid/Field:themeName.html.twig";
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
        return new Twig_Source("<span class=\"ui icon label\">
    <i class=\"paint brush icon\"></i>
    {{ data|default('sylius.ui.default'|trans) }}
</span>
", "SyliusAdminBundle:Channel/Grid/Field:themeName.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Channel/Grid/Field/themeName.html.twig");
    }
}
