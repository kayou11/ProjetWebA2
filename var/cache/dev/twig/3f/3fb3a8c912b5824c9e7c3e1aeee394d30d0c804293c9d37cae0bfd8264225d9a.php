<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d572d4d6988270ea32a15938e766bc88ad34dbb0f408cd98ed43285fd7d23e86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_b607c00f9b2ca66471e177a8bcc5172b62bb3cbd7a77067db1863f23bf1337be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b607c00f9b2ca66471e177a8bcc5172b62bb3cbd7a77067db1863f23bf1337be->enter($__internal_b607c00f9b2ca66471e177a8bcc5172b62bb3cbd7a77067db1863f23bf1337be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_10eea8d47fd078d42e5b8316e6c29279a0404d74135fcfdff6a0e90f2fe28e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10eea8d47fd078d42e5b8316e6c29279a0404d74135fcfdff6a0e90f2fe28e1f->enter($__internal_10eea8d47fd078d42e5b8316e6c29279a0404d74135fcfdff6a0e90f2fe28e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b607c00f9b2ca66471e177a8bcc5172b62bb3cbd7a77067db1863f23bf1337be->leave($__internal_b607c00f9b2ca66471e177a8bcc5172b62bb3cbd7a77067db1863f23bf1337be_prof);

        
        $__internal_10eea8d47fd078d42e5b8316e6c29279a0404d74135fcfdff6a0e90f2fe28e1f->leave($__internal_10eea8d47fd078d42e5b8316e6c29279a0404d74135fcfdff6a0e90f2fe28e1f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c96f212e16129fbc313fdc99818b60e9d959865bf1a214fbbccf72c2c8774035 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c96f212e16129fbc313fdc99818b60e9d959865bf1a214fbbccf72c2c8774035->enter($__internal_c96f212e16129fbc313fdc99818b60e9d959865bf1a214fbbccf72c2c8774035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cd65a39452777d91c78edb2394ef6323ff22ae8a8c5489c980abd229b5f1d302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd65a39452777d91c78edb2394ef6323ff22ae8a8c5489c980abd229b5f1d302->enter($__internal_cd65a39452777d91c78edb2394ef6323ff22ae8a8c5489c980abd229b5f1d302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_cd65a39452777d91c78edb2394ef6323ff22ae8a8c5489c980abd229b5f1d302->leave($__internal_cd65a39452777d91c78edb2394ef6323ff22ae8a8c5489c980abd229b5f1d302_prof);

        
        $__internal_c96f212e16129fbc313fdc99818b60e9d959865bf1a214fbbccf72c2c8774035->leave($__internal_c96f212e16129fbc313fdc99818b60e9d959865bf1a214fbbccf72c2c8774035_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_115dcff1cdc8be5d89f1cde5828625fb3f9373f7c9169d1b9857f76938c32f65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_115dcff1cdc8be5d89f1cde5828625fb3f9373f7c9169d1b9857f76938c32f65->enter($__internal_115dcff1cdc8be5d89f1cde5828625fb3f9373f7c9169d1b9857f76938c32f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f47ce7b965a32685d338ff705b53e8b62362fd17d2fb1f539ed1f2d33aa90c34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f47ce7b965a32685d338ff705b53e8b62362fd17d2fb1f539ed1f2d33aa90c34->enter($__internal_f47ce7b965a32685d338ff705b53e8b62362fd17d2fb1f539ed1f2d33aa90c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f47ce7b965a32685d338ff705b53e8b62362fd17d2fb1f539ed1f2d33aa90c34->leave($__internal_f47ce7b965a32685d338ff705b53e8b62362fd17d2fb1f539ed1f2d33aa90c34_prof);

        
        $__internal_115dcff1cdc8be5d89f1cde5828625fb3f9373f7c9169d1b9857f76938c32f65->leave($__internal_115dcff1cdc8be5d89f1cde5828625fb3f9373f7c9169d1b9857f76938c32f65_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5354f5517c1d3268caef49c11c2700ff8715703025c5821165e4d1f4fe86b3be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5354f5517c1d3268caef49c11c2700ff8715703025c5821165e4d1f4fe86b3be->enter($__internal_5354f5517c1d3268caef49c11c2700ff8715703025c5821165e4d1f4fe86b3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cf7c097b0bc3940c259193299d7c4346a336e62bbbca53826e3c3a448df37a95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf7c097b0bc3940c259193299d7c4346a336e62bbbca53826e3c3a448df37a95->enter($__internal_cf7c097b0bc3940c259193299d7c4346a336e62bbbca53826e3c3a448df37a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_cf7c097b0bc3940c259193299d7c4346a336e62bbbca53826e3c3a448df37a95->leave($__internal_cf7c097b0bc3940c259193299d7c4346a336e62bbbca53826e3c3a448df37a95_prof);

        
        $__internal_5354f5517c1d3268caef49c11c2700ff8715703025c5821165e4d1f4fe86b3be->leave($__internal_5354f5517c1d3268caef49c11c2700ff8715703025c5821165e4d1f4fe86b3be_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
