<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e32fe7bbc587592d7d02b52fb0d248e7f6247282752466e0f9c5031b2c7e618c extends Twig_Template
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
        $__internal_9ee7849319b263cb557d5c7b730fa39198584bbcce3bffe9351a62d64f7c9136 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ee7849319b263cb557d5c7b730fa39198584bbcce3bffe9351a62d64f7c9136->enter($__internal_9ee7849319b263cb557d5c7b730fa39198584bbcce3bffe9351a62d64f7c9136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_20c0ed079bd314fba8650b0907a7de1dab4848ab16434ee237973e7879efef27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20c0ed079bd314fba8650b0907a7de1dab4848ab16434ee237973e7879efef27->enter($__internal_20c0ed079bd314fba8650b0907a7de1dab4848ab16434ee237973e7879efef27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ee7849319b263cb557d5c7b730fa39198584bbcce3bffe9351a62d64f7c9136->leave($__internal_9ee7849319b263cb557d5c7b730fa39198584bbcce3bffe9351a62d64f7c9136_prof);

        
        $__internal_20c0ed079bd314fba8650b0907a7de1dab4848ab16434ee237973e7879efef27->leave($__internal_20c0ed079bd314fba8650b0907a7de1dab4848ab16434ee237973e7879efef27_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_96c83fbad29eaea1a882255817603763b72997178c0de0fbee2d49a62c4ded0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96c83fbad29eaea1a882255817603763b72997178c0de0fbee2d49a62c4ded0a->enter($__internal_96c83fbad29eaea1a882255817603763b72997178c0de0fbee2d49a62c4ded0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a148a41f7d2748a0e43a9cc973f64a24b8a4026360cc9d95ed76cb06c262597d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a148a41f7d2748a0e43a9cc973f64a24b8a4026360cc9d95ed76cb06c262597d->enter($__internal_a148a41f7d2748a0e43a9cc973f64a24b8a4026360cc9d95ed76cb06c262597d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a148a41f7d2748a0e43a9cc973f64a24b8a4026360cc9d95ed76cb06c262597d->leave($__internal_a148a41f7d2748a0e43a9cc973f64a24b8a4026360cc9d95ed76cb06c262597d_prof);

        
        $__internal_96c83fbad29eaea1a882255817603763b72997178c0de0fbee2d49a62c4ded0a->leave($__internal_96c83fbad29eaea1a882255817603763b72997178c0de0fbee2d49a62c4ded0a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_52c268f7292384f754efac354b298dac7e5d046c410f840bf2f69d8297da0361 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52c268f7292384f754efac354b298dac7e5d046c410f840bf2f69d8297da0361->enter($__internal_52c268f7292384f754efac354b298dac7e5d046c410f840bf2f69d8297da0361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f092e17d4fc3b31ab9b227a58e0aef70884dedc90b1a5ef38bf4a1c3687a9241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f092e17d4fc3b31ab9b227a58e0aef70884dedc90b1a5ef38bf4a1c3687a9241->enter($__internal_f092e17d4fc3b31ab9b227a58e0aef70884dedc90b1a5ef38bf4a1c3687a9241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f092e17d4fc3b31ab9b227a58e0aef70884dedc90b1a5ef38bf4a1c3687a9241->leave($__internal_f092e17d4fc3b31ab9b227a58e0aef70884dedc90b1a5ef38bf4a1c3687a9241_prof);

        
        $__internal_52c268f7292384f754efac354b298dac7e5d046c410f840bf2f69d8297da0361->leave($__internal_52c268f7292384f754efac354b298dac7e5d046c410f840bf2f69d8297da0361_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2270130e38b26917b67ec222ba4cdb0639a661a0c4b498ecd2882b1540179023 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2270130e38b26917b67ec222ba4cdb0639a661a0c4b498ecd2882b1540179023->enter($__internal_2270130e38b26917b67ec222ba4cdb0639a661a0c4b498ecd2882b1540179023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5bdbff3512bbc3d1afa978b2d63af57072352518e8cd1f7e2ca7c8572e8f347c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bdbff3512bbc3d1afa978b2d63af57072352518e8cd1f7e2ca7c8572e8f347c->enter($__internal_5bdbff3512bbc3d1afa978b2d63af57072352518e8cd1f7e2ca7c8572e8f347c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5bdbff3512bbc3d1afa978b2d63af57072352518e8cd1f7e2ca7c8572e8f347c->leave($__internal_5bdbff3512bbc3d1afa978b2d63af57072352518e8cd1f7e2ca7c8572e8f347c_prof);

        
        $__internal_2270130e38b26917b67ec222ba4cdb0639a661a0c4b498ecd2882b1540179023->leave($__internal_2270130e38b26917b67ec222ba4cdb0639a661a0c4b498ecd2882b1540179023_prof);

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
