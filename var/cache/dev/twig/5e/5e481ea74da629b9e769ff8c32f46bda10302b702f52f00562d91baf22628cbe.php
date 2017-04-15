<?php

/* SyliusAdminBundle:Taxon:_media.html.twig */
class __TwigTemplate_fe1dc5bcb758f669d5b52329f7148985462a0a9c4bf4610546306dea5015c323 extends Twig_Template
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
        $__internal_38f55954fd6c7eb393179f1f3012e6d7a875cc1d233685fa8adef9a121ccafcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38f55954fd6c7eb393179f1f3012e6d7a875cc1d233685fa8adef9a121ccafcb->enter($__internal_38f55954fd6c7eb393179f1f3012e6d7a875cc1d233685fa8adef9a121ccafcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Taxon:_media.html.twig"));

        $__internal_0f3e8e3f276792bce33bc8c73ddf03b3ca1ab380328dfe965519983706c3067c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f3e8e3f276792bce33bc8c73ddf03b3ca1ab380328dfe965519983706c3067c->enter($__internal_0f3e8e3f276792bce33bc8c73ddf03b3ca1ab380328dfe965519983706c3067c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Taxon:_media.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "SyliusUiBundle:Form:imagesTheme.html.twig"));
        // line 2
        echo "
<div class=\"ui segment\">
    <h3 class=\"ui dividing header\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.media"), "html", null, true);
        echo "</h3>
    <br>
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "images", array()), 'row', array("label" => false));
        echo "
</div>
";
        
        $__internal_38f55954fd6c7eb393179f1f3012e6d7a875cc1d233685fa8adef9a121ccafcb->leave($__internal_38f55954fd6c7eb393179f1f3012e6d7a875cc1d233685fa8adef9a121ccafcb_prof);

        
        $__internal_0f3e8e3f276792bce33bc8c73ddf03b3ca1ab380328dfe965519983706c3067c->leave($__internal_0f3e8e3f276792bce33bc8c73ddf03b3ca1ab380328dfe965519983706c3067c_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Taxon:_media.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  31 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form 'SyliusUiBundle:Form:imagesTheme.html.twig' %}

<div class=\"ui segment\">
    <h3 class=\"ui dividing header\">{{ 'sylius.ui.media'|trans }}</h3>
    <br>
    {{ form_row(form.images, {'label': false}) }}
</div>
", "SyliusAdminBundle:Taxon:_media.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Taxon/_media.html.twig");
    }
}
