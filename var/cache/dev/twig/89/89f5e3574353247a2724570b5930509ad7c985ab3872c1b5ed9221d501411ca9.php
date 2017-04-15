<?php

/* SyliusAdminBundle:ProductVariant/Generate:_form.html.twig */
class __TwigTemplate_724746aed7533d79f7b4328b729ee3986c77ee92790e59c24fd424ccc88ff6f0 extends Twig_Template
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
        $__internal_6e3f63dfb57c8c4b98c58f68b6aac626d41bb444b9e94284cc238e3938139bac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e3f63dfb57c8c4b98c58f68b6aac626d41bb444b9e94284cc238e3938139bac->enter($__internal_6e3f63dfb57c8c4b98c58f68b6aac626d41bb444b9e94284cc238e3938139bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Generate:_form.html.twig"));

        $__internal_a787713708ccdd3cdbbff4b1c0c3e7e78694799190f7fc04524728afbe99dac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a787713708ccdd3cdbbff4b1c0c3e7e78694799190f7fc04524728afbe99dac0->enter($__internal_a787713708ccdd3cdbbff4b1c0c3e7e78694799190f7fc04524728afbe99dac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Generate:_form.html.twig"));

        // line 1
        echo "<div class=\"ui segment\">
    <h4 class=\"ui dividing header\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.variants"), "html", null, true);
        echo "</h4>
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "variants", array()), 'row', array("label" => false));
        echo "
</div>
";
        
        $__internal_6e3f63dfb57c8c4b98c58f68b6aac626d41bb444b9e94284cc238e3938139bac->leave($__internal_6e3f63dfb57c8c4b98c58f68b6aac626d41bb444b9e94284cc238e3938139bac_prof);

        
        $__internal_a787713708ccdd3cdbbff4b1c0c3e7e78694799190f7fc04524728afbe99dac0->leave($__internal_a787713708ccdd3cdbbff4b1c0c3e7e78694799190f7fc04524728afbe99dac0_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductVariant/Generate:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 3,  28 => 2,  25 => 1,);
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
    <h4 class=\"ui dividing header\">{{ 'sylius.ui.variants'|trans }}</h4>
    {{ form_row(form.variants, {'label': false}) }}
</div>
", "SyliusAdminBundle:ProductVariant/Generate:_form.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/ProductVariant/Generate/_form.html.twig");
    }
}
