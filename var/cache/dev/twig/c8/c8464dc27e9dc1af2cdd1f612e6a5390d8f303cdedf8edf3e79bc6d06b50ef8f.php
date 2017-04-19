<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_3cb0a428402386aad28adee8716d1ec7105911d316010ab448aa9ceba238cb1c extends Twig_Template
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
        $__internal_7f73e85b8240206c031cb959b0a6e070680bbf0b002c1b975973128e98e1665b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f73e85b8240206c031cb959b0a6e070680bbf0b002c1b975973128e98e1665b->enter($__internal_7f73e85b8240206c031cb959b0a6e070680bbf0b002c1b975973128e98e1665b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_848d72b7d10d1be94dfb353205355f6684b93871651c8e7be03011ea6030ceb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_848d72b7d10d1be94dfb353205355f6684b93871651c8e7be03011ea6030ceb1->enter($__internal_848d72b7d10d1be94dfb353205355f6684b93871651c8e7be03011ea6030ceb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f73e85b8240206c031cb959b0a6e070680bbf0b002c1b975973128e98e1665b->leave($__internal_7f73e85b8240206c031cb959b0a6e070680bbf0b002c1b975973128e98e1665b_prof);

        
        $__internal_848d72b7d10d1be94dfb353205355f6684b93871651c8e7be03011ea6030ceb1->leave($__internal_848d72b7d10d1be94dfb353205355f6684b93871651c8e7be03011ea6030ceb1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ddc10bfa09324624d4f4d013589926afdaed36a87517890a1f1692fbc341a58b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddc10bfa09324624d4f4d013589926afdaed36a87517890a1f1692fbc341a58b->enter($__internal_ddc10bfa09324624d4f4d013589926afdaed36a87517890a1f1692fbc341a58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_69d2a0fb83acf20eed84424cebeadd0ba5d9dcd3d86301768fa8d8d6472b0a66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69d2a0fb83acf20eed84424cebeadd0ba5d9dcd3d86301768fa8d8d6472b0a66->enter($__internal_69d2a0fb83acf20eed84424cebeadd0ba5d9dcd3d86301768fa8d8d6472b0a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_69d2a0fb83acf20eed84424cebeadd0ba5d9dcd3d86301768fa8d8d6472b0a66->leave($__internal_69d2a0fb83acf20eed84424cebeadd0ba5d9dcd3d86301768fa8d8d6472b0a66_prof);

        
        $__internal_ddc10bfa09324624d4f4d013589926afdaed36a87517890a1f1692fbc341a58b->leave($__internal_ddc10bfa09324624d4f4d013589926afdaed36a87517890a1f1692fbc341a58b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9b6089b9efb09be2ada089c628c33b81d90a0b7e269a26f328fdc12640b0aaef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b6089b9efb09be2ada089c628c33b81d90a0b7e269a26f328fdc12640b0aaef->enter($__internal_9b6089b9efb09be2ada089c628c33b81d90a0b7e269a26f328fdc12640b0aaef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_844eef4b4e275107679d140bf03564e3725eb44dddd5e1f7231eacd7844155bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_844eef4b4e275107679d140bf03564e3725eb44dddd5e1f7231eacd7844155bd->enter($__internal_844eef4b4e275107679d140bf03564e3725eb44dddd5e1f7231eacd7844155bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_844eef4b4e275107679d140bf03564e3725eb44dddd5e1f7231eacd7844155bd->leave($__internal_844eef4b4e275107679d140bf03564e3725eb44dddd5e1f7231eacd7844155bd_prof);

        
        $__internal_9b6089b9efb09be2ada089c628c33b81d90a0b7e269a26f328fdc12640b0aaef->leave($__internal_9b6089b9efb09be2ada089c628c33b81d90a0b7e269a26f328fdc12640b0aaef_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b20c97cf6dcb505ebfb80a6de38c202dca625e11f687e3dbe5a112a20d1cec24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b20c97cf6dcb505ebfb80a6de38c202dca625e11f687e3dbe5a112a20d1cec24->enter($__internal_b20c97cf6dcb505ebfb80a6de38c202dca625e11f687e3dbe5a112a20d1cec24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bac6eb518d8f7a3186988567381d68522d5157ed6d029e2bb06fb92dfc38addd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bac6eb518d8f7a3186988567381d68522d5157ed6d029e2bb06fb92dfc38addd->enter($__internal_bac6eb518d8f7a3186988567381d68522d5157ed6d029e2bb06fb92dfc38addd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_bac6eb518d8f7a3186988567381d68522d5157ed6d029e2bb06fb92dfc38addd->leave($__internal_bac6eb518d8f7a3186988567381d68522d5157ed6d029e2bb06fb92dfc38addd_prof);

        
        $__internal_b20c97cf6dcb505ebfb80a6de38c202dca625e11f687e3dbe5a112a20d1cec24->leave($__internal_b20c97cf6dcb505ebfb80a6de38c202dca625e11f687e3dbe5a112a20d1cec24_prof);

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
