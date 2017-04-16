<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_173299bb2f83fa299ea91ad9dfd070dab93f8e661081c592358e3c77607aaa25 extends Twig_Template
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
        $__internal_87ef3adf19f07f2366b8054e779c2c455e998f0297257b1d770b54e120dc03a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87ef3adf19f07f2366b8054e779c2c455e998f0297257b1d770b54e120dc03a3->enter($__internal_87ef3adf19f07f2366b8054e779c2c455e998f0297257b1d770b54e120dc03a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2c01caac3bd1efdc043b3af7766c90d688976ce559ac226422ac84c7d76a4ae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c01caac3bd1efdc043b3af7766c90d688976ce559ac226422ac84c7d76a4ae8->enter($__internal_2c01caac3bd1efdc043b3af7766c90d688976ce559ac226422ac84c7d76a4ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87ef3adf19f07f2366b8054e779c2c455e998f0297257b1d770b54e120dc03a3->leave($__internal_87ef3adf19f07f2366b8054e779c2c455e998f0297257b1d770b54e120dc03a3_prof);

        
        $__internal_2c01caac3bd1efdc043b3af7766c90d688976ce559ac226422ac84c7d76a4ae8->leave($__internal_2c01caac3bd1efdc043b3af7766c90d688976ce559ac226422ac84c7d76a4ae8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2f0d68f419ea2f3b28b02bf66cbea809a35fc1e1b88c6dfffa59df9211adcd81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f0d68f419ea2f3b28b02bf66cbea809a35fc1e1b88c6dfffa59df9211adcd81->enter($__internal_2f0d68f419ea2f3b28b02bf66cbea809a35fc1e1b88c6dfffa59df9211adcd81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c528ddea718191e5f2042e58e16fb4fac48f8d7168757ef0494af17db2636682 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c528ddea718191e5f2042e58e16fb4fac48f8d7168757ef0494af17db2636682->enter($__internal_c528ddea718191e5f2042e58e16fb4fac48f8d7168757ef0494af17db2636682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c528ddea718191e5f2042e58e16fb4fac48f8d7168757ef0494af17db2636682->leave($__internal_c528ddea718191e5f2042e58e16fb4fac48f8d7168757ef0494af17db2636682_prof);

        
        $__internal_2f0d68f419ea2f3b28b02bf66cbea809a35fc1e1b88c6dfffa59df9211adcd81->leave($__internal_2f0d68f419ea2f3b28b02bf66cbea809a35fc1e1b88c6dfffa59df9211adcd81_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f77d9fbb1ce9f4a9e45a1bb48e49151c9896d25bab13d7a864da7fa3efbfb9fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f77d9fbb1ce9f4a9e45a1bb48e49151c9896d25bab13d7a864da7fa3efbfb9fa->enter($__internal_f77d9fbb1ce9f4a9e45a1bb48e49151c9896d25bab13d7a864da7fa3efbfb9fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5e7aba94dd81ca5797aa8b8d5703ea55e9923273a1cafa5cd632027716a1ce66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e7aba94dd81ca5797aa8b8d5703ea55e9923273a1cafa5cd632027716a1ce66->enter($__internal_5e7aba94dd81ca5797aa8b8d5703ea55e9923273a1cafa5cd632027716a1ce66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_5e7aba94dd81ca5797aa8b8d5703ea55e9923273a1cafa5cd632027716a1ce66->leave($__internal_5e7aba94dd81ca5797aa8b8d5703ea55e9923273a1cafa5cd632027716a1ce66_prof);

        
        $__internal_f77d9fbb1ce9f4a9e45a1bb48e49151c9896d25bab13d7a864da7fa3efbfb9fa->leave($__internal_f77d9fbb1ce9f4a9e45a1bb48e49151c9896d25bab13d7a864da7fa3efbfb9fa_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cab954a93051a24004cdf8e586b3bc134fb4f159004ba220ac5e0dbe831f59e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cab954a93051a24004cdf8e586b3bc134fb4f159004ba220ac5e0dbe831f59e9->enter($__internal_cab954a93051a24004cdf8e586b3bc134fb4f159004ba220ac5e0dbe831f59e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2af85c7aecded540b33f967e3961536a939cd16f45126a4373d7f7007b748b72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2af85c7aecded540b33f967e3961536a939cd16f45126a4373d7f7007b748b72->enter($__internal_2af85c7aecded540b33f967e3961536a939cd16f45126a4373d7f7007b748b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_2af85c7aecded540b33f967e3961536a939cd16f45126a4373d7f7007b748b72->leave($__internal_2af85c7aecded540b33f967e3961536a939cd16f45126a4373d7f7007b748b72_prof);

        
        $__internal_cab954a93051a24004cdf8e586b3bc134fb4f159004ba220ac5e0dbe831f59e9->leave($__internal_cab954a93051a24004cdf8e586b3bc134fb4f159004ba220ac5e0dbe831f59e9_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\MAMP\\htdocs\\ProjetWebA2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
