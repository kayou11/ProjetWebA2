<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6263651adade39de1f784ad928c1ebf12155ee20abd325770b1c3859e2a00061 extends Twig_Template
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
        $__internal_a1a0206f9a8201d00b657d45b532c6247264d24979cafb3ea111a510e07ffd45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1a0206f9a8201d00b657d45b532c6247264d24979cafb3ea111a510e07ffd45->enter($__internal_a1a0206f9a8201d00b657d45b532c6247264d24979cafb3ea111a510e07ffd45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_766d368fe7f224d951fd81af5e4f2429e4cbcb9bd64435e07e777464b472a444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_766d368fe7f224d951fd81af5e4f2429e4cbcb9bd64435e07e777464b472a444->enter($__internal_766d368fe7f224d951fd81af5e4f2429e4cbcb9bd64435e07e777464b472a444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1a0206f9a8201d00b657d45b532c6247264d24979cafb3ea111a510e07ffd45->leave($__internal_a1a0206f9a8201d00b657d45b532c6247264d24979cafb3ea111a510e07ffd45_prof);

        
        $__internal_766d368fe7f224d951fd81af5e4f2429e4cbcb9bd64435e07e777464b472a444->leave($__internal_766d368fe7f224d951fd81af5e4f2429e4cbcb9bd64435e07e777464b472a444_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9629724049cdc00974b0aadc6036bdf43371b6b3b2cbc4ab401ba08cfe8b9426 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9629724049cdc00974b0aadc6036bdf43371b6b3b2cbc4ab401ba08cfe8b9426->enter($__internal_9629724049cdc00974b0aadc6036bdf43371b6b3b2cbc4ab401ba08cfe8b9426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7c2a79181ac4f4e59d6d0f0331f786567037943fc16233b346cdd7b11cda4d9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c2a79181ac4f4e59d6d0f0331f786567037943fc16233b346cdd7b11cda4d9b->enter($__internal_7c2a79181ac4f4e59d6d0f0331f786567037943fc16233b346cdd7b11cda4d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7c2a79181ac4f4e59d6d0f0331f786567037943fc16233b346cdd7b11cda4d9b->leave($__internal_7c2a79181ac4f4e59d6d0f0331f786567037943fc16233b346cdd7b11cda4d9b_prof);

        
        $__internal_9629724049cdc00974b0aadc6036bdf43371b6b3b2cbc4ab401ba08cfe8b9426->leave($__internal_9629724049cdc00974b0aadc6036bdf43371b6b3b2cbc4ab401ba08cfe8b9426_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_38808d0a38cf72c708689e2fbafff3c4bf864798bce68ff2ac0332e5dd135772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38808d0a38cf72c708689e2fbafff3c4bf864798bce68ff2ac0332e5dd135772->enter($__internal_38808d0a38cf72c708689e2fbafff3c4bf864798bce68ff2ac0332e5dd135772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a89ed4fa21da16f778b570093edccfd4ad2a4b4251b4f480040c048927aa2241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a89ed4fa21da16f778b570093edccfd4ad2a4b4251b4f480040c048927aa2241->enter($__internal_a89ed4fa21da16f778b570093edccfd4ad2a4b4251b4f480040c048927aa2241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a89ed4fa21da16f778b570093edccfd4ad2a4b4251b4f480040c048927aa2241->leave($__internal_a89ed4fa21da16f778b570093edccfd4ad2a4b4251b4f480040c048927aa2241_prof);

        
        $__internal_38808d0a38cf72c708689e2fbafff3c4bf864798bce68ff2ac0332e5dd135772->leave($__internal_38808d0a38cf72c708689e2fbafff3c4bf864798bce68ff2ac0332e5dd135772_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6037ad9f3207bf23bde354a04084ae7404c8f08dd87ea5ddaa0ea5286433edd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6037ad9f3207bf23bde354a04084ae7404c8f08dd87ea5ddaa0ea5286433edd0->enter($__internal_6037ad9f3207bf23bde354a04084ae7404c8f08dd87ea5ddaa0ea5286433edd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a65245b9e04e46cbf7bd527b28ae3d18f49313607495912a65ada1137d3f122a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a65245b9e04e46cbf7bd527b28ae3d18f49313607495912a65ada1137d3f122a->enter($__internal_a65245b9e04e46cbf7bd527b28ae3d18f49313607495912a65ada1137d3f122a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_a65245b9e04e46cbf7bd527b28ae3d18f49313607495912a65ada1137d3f122a->leave($__internal_a65245b9e04e46cbf7bd527b28ae3d18f49313607495912a65ada1137d3f122a_prof);

        
        $__internal_6037ad9f3207bf23bde354a04084ae7404c8f08dd87ea5ddaa0ea5286433edd0->leave($__internal_6037ad9f3207bf23bde354a04084ae7404c8f08dd87ea5ddaa0ea5286433edd0_prof);

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
