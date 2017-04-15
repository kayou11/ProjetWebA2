<?php

/* SyliusAdminBundle:Product/Tab:_media.html.twig */
class __TwigTemplate_d80d15d8bfb438cc087ac99918cddaa47b36c0e784df0dc3dce7b3045eb8a943 extends Twig_Template
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
        $__internal_ea68d95279948339cbe2cf04d897131ec4d2d0108ecc7b6d5457aab67b3bccd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea68d95279948339cbe2cf04d897131ec4d2d0108ecc7b6d5457aab67b3bccd7->enter($__internal_ea68d95279948339cbe2cf04d897131ec4d2d0108ecc7b6d5457aab67b3bccd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Tab:_media.html.twig"));

        $__internal_608747690beedbc803a2320f039982fd989624a9cbacfc4277a8b0f3b893723b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_608747690beedbc803a2320f039982fd989624a9cbacfc4277a8b0f3b893723b->enter($__internal_608747690beedbc803a2320f039982fd989624a9cbacfc4277a8b0f3b893723b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Tab:_media.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "@SyliusAdmin/Form/imagesTheme.html.twig"));
        // line 2
        echo "
<div class=\"ui tab\" data-tab=\"media\">
    <h3 class=\"ui dividing header\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.media"), "html", null, true);
        echo "</h3>
    <br>
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "images", array()), 'row', array("label" => false));
        echo "

    ";
        // line 8
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((("sylius.admin.product." . ($context["action"] ?? $this->getContext($context, "action"))) . ".tab_media"), array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        echo "
</div>
";
        
        $__internal_ea68d95279948339cbe2cf04d897131ec4d2d0108ecc7b6d5457aab67b3bccd7->leave($__internal_ea68d95279948339cbe2cf04d897131ec4d2d0108ecc7b6d5457aab67b3bccd7_prof);

        
        $__internal_608747690beedbc803a2320f039982fd989624a9cbacfc4277a8b0f3b893723b->leave($__internal_608747690beedbc803a2320f039982fd989624a9cbacfc4277a8b0f3b893723b_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product/Tab:_media.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  36 => 6,  31 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form '@SyliusAdmin/Form/imagesTheme.html.twig' %}

<div class=\"ui tab\" data-tab=\"media\">
    <h3 class=\"ui dividing header\">{{ 'sylius.ui.media'|trans }}</h3>
    <br>
    {{ form_row(form.images, {'label': false}) }}

    {{ sonata_block_render_event('sylius.admin.product.' ~ action ~ '.tab_media', {'form': form}) }}
</div>
", "SyliusAdminBundle:Product/Tab:_media.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Tab/_media.html.twig");
    }
}
