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
        $__internal_a08fa079e8b5c78303affbc9bbfca2670f0694979b9967314fd6f63b273f9251 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a08fa079e8b5c78303affbc9bbfca2670f0694979b9967314fd6f63b273f9251->enter($__internal_a08fa079e8b5c78303affbc9bbfca2670f0694979b9967314fd6f63b273f9251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3844de174af190d1aab890198b321dd7d38b819f413334da55b03496442ebd6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3844de174af190d1aab890198b321dd7d38b819f413334da55b03496442ebd6e->enter($__internal_3844de174af190d1aab890198b321dd7d38b819f413334da55b03496442ebd6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a08fa079e8b5c78303affbc9bbfca2670f0694979b9967314fd6f63b273f9251->leave($__internal_a08fa079e8b5c78303affbc9bbfca2670f0694979b9967314fd6f63b273f9251_prof);

        
        $__internal_3844de174af190d1aab890198b321dd7d38b819f413334da55b03496442ebd6e->leave($__internal_3844de174af190d1aab890198b321dd7d38b819f413334da55b03496442ebd6e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_386882f2a87148e6ec47dfc9bc2a4ec14bf6d0d3d0cd06e68f9557a5b5b1c8f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_386882f2a87148e6ec47dfc9bc2a4ec14bf6d0d3d0cd06e68f9557a5b5b1c8f5->enter($__internal_386882f2a87148e6ec47dfc9bc2a4ec14bf6d0d3d0cd06e68f9557a5b5b1c8f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9bada45fea14cabc78b86ba3a182f2be97e450056a4ff86d4096b8926c47a825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bada45fea14cabc78b86ba3a182f2be97e450056a4ff86d4096b8926c47a825->enter($__internal_9bada45fea14cabc78b86ba3a182f2be97e450056a4ff86d4096b8926c47a825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9bada45fea14cabc78b86ba3a182f2be97e450056a4ff86d4096b8926c47a825->leave($__internal_9bada45fea14cabc78b86ba3a182f2be97e450056a4ff86d4096b8926c47a825_prof);

        
        $__internal_386882f2a87148e6ec47dfc9bc2a4ec14bf6d0d3d0cd06e68f9557a5b5b1c8f5->leave($__internal_386882f2a87148e6ec47dfc9bc2a4ec14bf6d0d3d0cd06e68f9557a5b5b1c8f5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_87a823bdc38bb97d15e7e12ab52bfbe08249dcc4352cdd9e6ad5122e32328bfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87a823bdc38bb97d15e7e12ab52bfbe08249dcc4352cdd9e6ad5122e32328bfa->enter($__internal_87a823bdc38bb97d15e7e12ab52bfbe08249dcc4352cdd9e6ad5122e32328bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a55f471d4e7c4fe0719e9a08f20b29b75d3b0162905bd8c009ed1506fa16ebfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a55f471d4e7c4fe0719e9a08f20b29b75d3b0162905bd8c009ed1506fa16ebfc->enter($__internal_a55f471d4e7c4fe0719e9a08f20b29b75d3b0162905bd8c009ed1506fa16ebfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_a55f471d4e7c4fe0719e9a08f20b29b75d3b0162905bd8c009ed1506fa16ebfc->leave($__internal_a55f471d4e7c4fe0719e9a08f20b29b75d3b0162905bd8c009ed1506fa16ebfc_prof);

        
        $__internal_87a823bdc38bb97d15e7e12ab52bfbe08249dcc4352cdd9e6ad5122e32328bfa->leave($__internal_87a823bdc38bb97d15e7e12ab52bfbe08249dcc4352cdd9e6ad5122e32328bfa_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_562a2bb94fa755228e15307b4f248a4549a1b6be978aa189b4ed9931b504e883 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_562a2bb94fa755228e15307b4f248a4549a1b6be978aa189b4ed9931b504e883->enter($__internal_562a2bb94fa755228e15307b4f248a4549a1b6be978aa189b4ed9931b504e883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_098c12922624b56871b017f47b05ee1d7307931fd930f4fa25ddc139668faf48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_098c12922624b56871b017f47b05ee1d7307931fd930f4fa25ddc139668faf48->enter($__internal_098c12922624b56871b017f47b05ee1d7307931fd930f4fa25ddc139668faf48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_098c12922624b56871b017f47b05ee1d7307931fd930f4fa25ddc139668faf48->leave($__internal_098c12922624b56871b017f47b05ee1d7307931fd930f4fa25ddc139668faf48_prof);

        
        $__internal_562a2bb94fa755228e15307b4f248a4549a1b6be978aa189b4ed9931b504e883->leave($__internal_562a2bb94fa755228e15307b4f248a4549a1b6be978aa189b4ed9931b504e883_prof);

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
