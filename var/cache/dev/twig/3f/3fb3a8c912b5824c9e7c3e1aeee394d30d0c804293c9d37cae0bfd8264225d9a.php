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
        $__internal_f078d0e08d27a44cb4ede17b4f8af703ff330a831714d9cb18b9cc68f31de879 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f078d0e08d27a44cb4ede17b4f8af703ff330a831714d9cb18b9cc68f31de879->enter($__internal_f078d0e08d27a44cb4ede17b4f8af703ff330a831714d9cb18b9cc68f31de879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_119e2b40b4069dd7e7486a2444b98fac18459f254c44080e9bc9a7ddb4791393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_119e2b40b4069dd7e7486a2444b98fac18459f254c44080e9bc9a7ddb4791393->enter($__internal_119e2b40b4069dd7e7486a2444b98fac18459f254c44080e9bc9a7ddb4791393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f078d0e08d27a44cb4ede17b4f8af703ff330a831714d9cb18b9cc68f31de879->leave($__internal_f078d0e08d27a44cb4ede17b4f8af703ff330a831714d9cb18b9cc68f31de879_prof);

        
        $__internal_119e2b40b4069dd7e7486a2444b98fac18459f254c44080e9bc9a7ddb4791393->leave($__internal_119e2b40b4069dd7e7486a2444b98fac18459f254c44080e9bc9a7ddb4791393_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_572ce93287286c90370643c5d9d540a7ede1bce8e661102485535ec0f93a72ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_572ce93287286c90370643c5d9d540a7ede1bce8e661102485535ec0f93a72ef->enter($__internal_572ce93287286c90370643c5d9d540a7ede1bce8e661102485535ec0f93a72ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6313f2e0c877b89f8f85e653aea34ac34bb74a1b4be67b00b65e6f3db5968acb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6313f2e0c877b89f8f85e653aea34ac34bb74a1b4be67b00b65e6f3db5968acb->enter($__internal_6313f2e0c877b89f8f85e653aea34ac34bb74a1b4be67b00b65e6f3db5968acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6313f2e0c877b89f8f85e653aea34ac34bb74a1b4be67b00b65e6f3db5968acb->leave($__internal_6313f2e0c877b89f8f85e653aea34ac34bb74a1b4be67b00b65e6f3db5968acb_prof);

        
        $__internal_572ce93287286c90370643c5d9d540a7ede1bce8e661102485535ec0f93a72ef->leave($__internal_572ce93287286c90370643c5d9d540a7ede1bce8e661102485535ec0f93a72ef_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_63de5d7f254edf1406999e1e7f71ec3ea84ec6e157561a18ff756903ef55f804 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63de5d7f254edf1406999e1e7f71ec3ea84ec6e157561a18ff756903ef55f804->enter($__internal_63de5d7f254edf1406999e1e7f71ec3ea84ec6e157561a18ff756903ef55f804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_80047524faf5baa5984d49c62fbae458f11a29cb474f6b09fb094958a02b40de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80047524faf5baa5984d49c62fbae458f11a29cb474f6b09fb094958a02b40de->enter($__internal_80047524faf5baa5984d49c62fbae458f11a29cb474f6b09fb094958a02b40de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_80047524faf5baa5984d49c62fbae458f11a29cb474f6b09fb094958a02b40de->leave($__internal_80047524faf5baa5984d49c62fbae458f11a29cb474f6b09fb094958a02b40de_prof);

        
        $__internal_63de5d7f254edf1406999e1e7f71ec3ea84ec6e157561a18ff756903ef55f804->leave($__internal_63de5d7f254edf1406999e1e7f71ec3ea84ec6e157561a18ff756903ef55f804_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2d0a33b0f1e656ee8439b1f013d5a73a7aa4d71d380fd923c0b38578216b0343 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d0a33b0f1e656ee8439b1f013d5a73a7aa4d71d380fd923c0b38578216b0343->enter($__internal_2d0a33b0f1e656ee8439b1f013d5a73a7aa4d71d380fd923c0b38578216b0343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_33dc97a3c2cda3ee5e5535a8aee7c5a32302a0e7b10a117f26426a4362d05b31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33dc97a3c2cda3ee5e5535a8aee7c5a32302a0e7b10a117f26426a4362d05b31->enter($__internal_33dc97a3c2cda3ee5e5535a8aee7c5a32302a0e7b10a117f26426a4362d05b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_33dc97a3c2cda3ee5e5535a8aee7c5a32302a0e7b10a117f26426a4362d05b31->leave($__internal_33dc97a3c2cda3ee5e5535a8aee7c5a32302a0e7b10a117f26426a4362d05b31_prof);

        
        $__internal_2d0a33b0f1e656ee8439b1f013d5a73a7aa4d71d380fd923c0b38578216b0343->leave($__internal_2d0a33b0f1e656ee8439b1f013d5a73a7aa4d71d380fd923c0b38578216b0343_prof);

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
