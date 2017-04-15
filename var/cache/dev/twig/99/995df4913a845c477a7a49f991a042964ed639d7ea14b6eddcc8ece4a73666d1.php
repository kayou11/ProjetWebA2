<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a9f5e58d17597842fe2735c1e1ebb1321aa5478336376c4e65bcc15131ee631a extends Twig_Template
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
        $__internal_44f8509af0ee18cf64c395734edd39a6a771259922ed882a624955408166396d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44f8509af0ee18cf64c395734edd39a6a771259922ed882a624955408166396d->enter($__internal_44f8509af0ee18cf64c395734edd39a6a771259922ed882a624955408166396d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f9badabd84870cf88f21a7852dbfca7065eb4eccc228e57ad1d4ea285433845e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9badabd84870cf88f21a7852dbfca7065eb4eccc228e57ad1d4ea285433845e->enter($__internal_f9badabd84870cf88f21a7852dbfca7065eb4eccc228e57ad1d4ea285433845e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44f8509af0ee18cf64c395734edd39a6a771259922ed882a624955408166396d->leave($__internal_44f8509af0ee18cf64c395734edd39a6a771259922ed882a624955408166396d_prof);

        
        $__internal_f9badabd84870cf88f21a7852dbfca7065eb4eccc228e57ad1d4ea285433845e->leave($__internal_f9badabd84870cf88f21a7852dbfca7065eb4eccc228e57ad1d4ea285433845e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_96e5ff789a589e266d0d1187d8730f2dca26de27190987572e24272d200608be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96e5ff789a589e266d0d1187d8730f2dca26de27190987572e24272d200608be->enter($__internal_96e5ff789a589e266d0d1187d8730f2dca26de27190987572e24272d200608be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0838e2422dc211b735102ae71c3fb1b23d902cb9061944b086053b4c51fe7f08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0838e2422dc211b735102ae71c3fb1b23d902cb9061944b086053b4c51fe7f08->enter($__internal_0838e2422dc211b735102ae71c3fb1b23d902cb9061944b086053b4c51fe7f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0838e2422dc211b735102ae71c3fb1b23d902cb9061944b086053b4c51fe7f08->leave($__internal_0838e2422dc211b735102ae71c3fb1b23d902cb9061944b086053b4c51fe7f08_prof);

        
        $__internal_96e5ff789a589e266d0d1187d8730f2dca26de27190987572e24272d200608be->leave($__internal_96e5ff789a589e266d0d1187d8730f2dca26de27190987572e24272d200608be_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_31c103ca6de38249b50fbe3d2476d3c2ad9ab128c96b4bd77bc75a2b1f5431fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31c103ca6de38249b50fbe3d2476d3c2ad9ab128c96b4bd77bc75a2b1f5431fe->enter($__internal_31c103ca6de38249b50fbe3d2476d3c2ad9ab128c96b4bd77bc75a2b1f5431fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a1a25d9f54dae3358c9101753e112d5421e2b8092acba1896e3104316b4ae1a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1a25d9f54dae3358c9101753e112d5421e2b8092acba1896e3104316b4ae1a1->enter($__internal_a1a25d9f54dae3358c9101753e112d5421e2b8092acba1896e3104316b4ae1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a1a25d9f54dae3358c9101753e112d5421e2b8092acba1896e3104316b4ae1a1->leave($__internal_a1a25d9f54dae3358c9101753e112d5421e2b8092acba1896e3104316b4ae1a1_prof);

        
        $__internal_31c103ca6de38249b50fbe3d2476d3c2ad9ab128c96b4bd77bc75a2b1f5431fe->leave($__internal_31c103ca6de38249b50fbe3d2476d3c2ad9ab128c96b4bd77bc75a2b1f5431fe_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_32af69e1057c94a0de5cdf09a38565dfce3d97998898137e84b7c276946b5248 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32af69e1057c94a0de5cdf09a38565dfce3d97998898137e84b7c276946b5248->enter($__internal_32af69e1057c94a0de5cdf09a38565dfce3d97998898137e84b7c276946b5248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f22f8f216a926680a04c311db43559cb03c5bcad41c949fff490742e56cf85b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f22f8f216a926680a04c311db43559cb03c5bcad41c949fff490742e56cf85b8->enter($__internal_f22f8f216a926680a04c311db43559cb03c5bcad41c949fff490742e56cf85b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f22f8f216a926680a04c311db43559cb03c5bcad41c949fff490742e56cf85b8->leave($__internal_f22f8f216a926680a04c311db43559cb03c5bcad41c949fff490742e56cf85b8_prof);

        
        $__internal_32af69e1057c94a0de5cdf09a38565dfce3d97998898137e84b7c276946b5248->leave($__internal_32af69e1057c94a0de5cdf09a38565dfce3d97998898137e84b7c276946b5248_prof);

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
