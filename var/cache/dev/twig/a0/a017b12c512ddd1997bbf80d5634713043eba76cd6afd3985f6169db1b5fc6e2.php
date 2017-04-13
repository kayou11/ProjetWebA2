<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_917bc7bda74a026d08e3f02c96551999df1052ae28f9ce1f4d823d19c74a4ab3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84239d2bb51cb10c2ff86237c0abe816a6a68617dc8cf79a809cd62b3a540138 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84239d2bb51cb10c2ff86237c0abe816a6a68617dc8cf79a809cd62b3a540138->enter($__internal_84239d2bb51cb10c2ff86237c0abe816a6a68617dc8cf79a809cd62b3a540138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_16cbe3022f91478aac2c106382107c286e8e1c34c81d676126b664158b5a960a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16cbe3022f91478aac2c106382107c286e8e1c34c81d676126b664158b5a960a->enter($__internal_16cbe3022f91478aac2c106382107c286e8e1c34c81d676126b664158b5a960a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84239d2bb51cb10c2ff86237c0abe816a6a68617dc8cf79a809cd62b3a540138->leave($__internal_84239d2bb51cb10c2ff86237c0abe816a6a68617dc8cf79a809cd62b3a540138_prof);

        
        $__internal_16cbe3022f91478aac2c106382107c286e8e1c34c81d676126b664158b5a960a->leave($__internal_16cbe3022f91478aac2c106382107c286e8e1c34c81d676126b664158b5a960a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_af4c28c76c76e9690f4a6a442fed77170f36f0ecf6a2068ff328448022ad7137 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af4c28c76c76e9690f4a6a442fed77170f36f0ecf6a2068ff328448022ad7137->enter($__internal_af4c28c76c76e9690f4a6a442fed77170f36f0ecf6a2068ff328448022ad7137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f07d1cd0f707f814ec831f834f48f3427b9e27ea470de47597188cd051e04970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f07d1cd0f707f814ec831f834f48f3427b9e27ea470de47597188cd051e04970->enter($__internal_f07d1cd0f707f814ec831f834f48f3427b9e27ea470de47597188cd051e04970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f07d1cd0f707f814ec831f834f48f3427b9e27ea470de47597188cd051e04970->leave($__internal_f07d1cd0f707f814ec831f834f48f3427b9e27ea470de47597188cd051e04970_prof);

        
        $__internal_af4c28c76c76e9690f4a6a442fed77170f36f0ecf6a2068ff328448022ad7137->leave($__internal_af4c28c76c76e9690f4a6a442fed77170f36f0ecf6a2068ff328448022ad7137_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0e5a36eb54d775aed294ecc5c94478c55ba92b0a6edf3e97ee7c02a338dcbb0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e5a36eb54d775aed294ecc5c94478c55ba92b0a6edf3e97ee7c02a338dcbb0a->enter($__internal_0e5a36eb54d775aed294ecc5c94478c55ba92b0a6edf3e97ee7c02a338dcbb0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b1cdba707b2601c4087322fb75ced75997c9e9d86351c471071538b8d08f5019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1cdba707b2601c4087322fb75ced75997c9e9d86351c471071538b8d08f5019->enter($__internal_b1cdba707b2601c4087322fb75ced75997c9e9d86351c471071538b8d08f5019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b1cdba707b2601c4087322fb75ced75997c9e9d86351c471071538b8d08f5019->leave($__internal_b1cdba707b2601c4087322fb75ced75997c9e9d86351c471071538b8d08f5019_prof);

        
        $__internal_0e5a36eb54d775aed294ecc5c94478c55ba92b0a6edf3e97ee7c02a338dcbb0a->leave($__internal_0e5a36eb54d775aed294ecc5c94478c55ba92b0a6edf3e97ee7c02a338dcbb0a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4e529ff0f2042e7b5ad6e39c57a4b841fe40a8da614dcfc795305c9e0bf53c3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e529ff0f2042e7b5ad6e39c57a4b841fe40a8da614dcfc795305c9e0bf53c3f->enter($__internal_4e529ff0f2042e7b5ad6e39c57a4b841fe40a8da614dcfc795305c9e0bf53c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_adef40b73690b74fe9f511c132340285669294b44bbc98add4bd459c1a998dee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adef40b73690b74fe9f511c132340285669294b44bbc98add4bd459c1a998dee->enter($__internal_adef40b73690b74fe9f511c132340285669294b44bbc98add4bd459c1a998dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_adef40b73690b74fe9f511c132340285669294b44bbc98add4bd459c1a998dee->leave($__internal_adef40b73690b74fe9f511c132340285669294b44bbc98add4bd459c1a998dee_prof);

        
        $__internal_4e529ff0f2042e7b5ad6e39c57a4b841fe40a8da614dcfc795305c9e0bf53c3f->leave($__internal_4e529ff0f2042e7b5ad6e39c57a4b841fe40a8da614dcfc795305c9e0bf53c3f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
