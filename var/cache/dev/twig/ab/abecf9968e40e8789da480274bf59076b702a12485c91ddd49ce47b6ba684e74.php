<?php

/* SyliusAdminBundle:Country:_form.html.twig */
class __TwigTemplate_0c134f3275eda345ca940416885d57d848fc7faa93be6c1a799b3023d96b2a31 extends Twig_Template
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
        $__internal_20bf6c35e634b483309451c3b20e980e374c6bf4ee6b04b2054b54cfc71f890b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20bf6c35e634b483309451c3b20e980e374c6bf4ee6b04b2054b54cfc71f890b->enter($__internal_20bf6c35e634b483309451c3b20e980e374c6bf4ee6b04b2054b54cfc71f890b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Country:_form.html.twig"));

        $__internal_6c05586d9f9cc2bf0a97e4c6409b9bd4ffefa907af499871fedaed4bf0bd1c63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c05586d9f9cc2bf0a97e4c6409b9bd4ffefa907af499871fedaed4bf0bd1c63->enter($__internal_6c05586d9f9cc2bf0a97e4c6409b9bd4ffefa907af499871fedaed4bf0bd1c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Country:_form.html.twig"));

        // line 1
        echo "<div class=\"ui segment\">
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "code", array()), 'row');
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "enabled", array()), 'row');
        echo "
</div>
<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.provinces"), "html", null, true);
        echo "</h4>
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "provinces", array()), 'row', array("label" => false));
        echo "
</div>
";
        
        $__internal_20bf6c35e634b483309451c3b20e980e374c6bf4ee6b04b2054b54cfc71f890b->leave($__internal_20bf6c35e634b483309451c3b20e980e374c6bf4ee6b04b2054b54cfc71f890b_prof);

        
        $__internal_6c05586d9f9cc2bf0a97e4c6409b9bd4ffefa907af499871fedaed4bf0bd1c63->leave($__internal_6c05586d9f9cc2bf0a97e4c6409b9bd4ffefa907af499871fedaed4bf0bd1c63_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Country:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  42 => 7,  36 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui segment\">
    {{ form_errors(form) }}
    {{ form_row(form.code) }}
    {{ form_row(form.enabled) }}
</div>
<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">{{ 'sylius.ui.provinces'|trans }}</h4>
    {{ form_row(form.provinces, {'label': false}) }}
</div>
", "SyliusAdminBundle:Country:_form.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Country/_form.html.twig");
    }
}
