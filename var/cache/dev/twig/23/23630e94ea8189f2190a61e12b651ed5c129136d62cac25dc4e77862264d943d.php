<?php

/* SyliusUiBundle:Grid/Field:percent.html.twig */
class __TwigTemplate_4c2cddab122a3b933a2cca5ca744e7549c71b23fc09920254f686893f6fe0265 extends Twig_Template
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
        $__internal_7dc974ec3e152bf2d342238f248262b84c83601ed1e91369178dd21fe1b3ae5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dc974ec3e152bf2d342238f248262b84c83601ed1e91369178dd21fe1b3ae5f->enter($__internal_7dc974ec3e152bf2d342238f248262b84c83601ed1e91369178dd21fe1b3ae5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Field:percent.html.twig"));

        $__internal_c4bf05af76168d9be06f7b1d8198b0cd74ac5a89180c0caafa2d23d634affd51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4bf05af76168d9be06f7b1d8198b0cd74ac5a89180c0caafa2d23d634affd51->enter($__internal_c4bf05af76168d9be06f7b1d8198b0cd74ac5a89180c0caafa2d23d634affd51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Grid/Field:percent.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, (($context["data"] ?? $this->getContext($context, "data")) * twig_number_format_filter($this->env, 100, 2)), "html", null, true);
        echo "%
";
        
        $__internal_7dc974ec3e152bf2d342238f248262b84c83601ed1e91369178dd21fe1b3ae5f->leave($__internal_7dc974ec3e152bf2d342238f248262b84c83601ed1e91369178dd21fe1b3ae5f_prof);

        
        $__internal_c4bf05af76168d9be06f7b1d8198b0cd74ac5a89180c0caafa2d23d634affd51->leave($__internal_c4bf05af76168d9be06f7b1d8198b0cd74ac5a89180c0caafa2d23d634affd51_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Grid/Field:percent.html.twig";
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
        return new Twig_Source("{{ data * 100 |number_format(2) }}%
", "SyliusUiBundle:Grid/Field:percent.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Grid/Field/percent.html.twig");
    }
}
