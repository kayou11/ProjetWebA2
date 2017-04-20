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
        $__internal_f59632e94c5acc403ea6ff7c08bab052eae02f8b7ff8a5599afc2903a4129099 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f59632e94c5acc403ea6ff7c08bab052eae02f8b7ff8a5599afc2903a4129099->enter($__internal_f59632e94c5acc403ea6ff7c08bab052eae02f8b7ff8a5599afc2903a4129099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d074c82ff5fc737fa9b8bac678044a46fb70f58d1216f92c839d15591024e8b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d074c82ff5fc737fa9b8bac678044a46fb70f58d1216f92c839d15591024e8b8->enter($__internal_d074c82ff5fc737fa9b8bac678044a46fb70f58d1216f92c839d15591024e8b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f59632e94c5acc403ea6ff7c08bab052eae02f8b7ff8a5599afc2903a4129099->leave($__internal_f59632e94c5acc403ea6ff7c08bab052eae02f8b7ff8a5599afc2903a4129099_prof);

        
        $__internal_d074c82ff5fc737fa9b8bac678044a46fb70f58d1216f92c839d15591024e8b8->leave($__internal_d074c82ff5fc737fa9b8bac678044a46fb70f58d1216f92c839d15591024e8b8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a9dc2b1a25c878d357013648431b3cd147f2511668d85d8afc654e7452e71588 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9dc2b1a25c878d357013648431b3cd147f2511668d85d8afc654e7452e71588->enter($__internal_a9dc2b1a25c878d357013648431b3cd147f2511668d85d8afc654e7452e71588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9482763223b8b53178e9c854e52a2cbf40435e56b3c44b36912f82712c574f70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9482763223b8b53178e9c854e52a2cbf40435e56b3c44b36912f82712c574f70->enter($__internal_9482763223b8b53178e9c854e52a2cbf40435e56b3c44b36912f82712c574f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9482763223b8b53178e9c854e52a2cbf40435e56b3c44b36912f82712c574f70->leave($__internal_9482763223b8b53178e9c854e52a2cbf40435e56b3c44b36912f82712c574f70_prof);

        
        $__internal_a9dc2b1a25c878d357013648431b3cd147f2511668d85d8afc654e7452e71588->leave($__internal_a9dc2b1a25c878d357013648431b3cd147f2511668d85d8afc654e7452e71588_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_839a1e04a108e6e29fd8694f86de33de471f37ef5988b9fcae3b5e0908b32480 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_839a1e04a108e6e29fd8694f86de33de471f37ef5988b9fcae3b5e0908b32480->enter($__internal_839a1e04a108e6e29fd8694f86de33de471f37ef5988b9fcae3b5e0908b32480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2f0659a16df3ccdb55b0ab03eb5c113e15dc490a405538a0025216cfedf47a07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f0659a16df3ccdb55b0ab03eb5c113e15dc490a405538a0025216cfedf47a07->enter($__internal_2f0659a16df3ccdb55b0ab03eb5c113e15dc490a405538a0025216cfedf47a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_2f0659a16df3ccdb55b0ab03eb5c113e15dc490a405538a0025216cfedf47a07->leave($__internal_2f0659a16df3ccdb55b0ab03eb5c113e15dc490a405538a0025216cfedf47a07_prof);

        
        $__internal_839a1e04a108e6e29fd8694f86de33de471f37ef5988b9fcae3b5e0908b32480->leave($__internal_839a1e04a108e6e29fd8694f86de33de471f37ef5988b9fcae3b5e0908b32480_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_77391818ac03a698ac6a73da46c7d3550fe0e46384f77b9bc8cd04524dee1c11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77391818ac03a698ac6a73da46c7d3550fe0e46384f77b9bc8cd04524dee1c11->enter($__internal_77391818ac03a698ac6a73da46c7d3550fe0e46384f77b9bc8cd04524dee1c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e4aa04e4c47db91ff94b91f6bfba632302960cef1697d0ad91fd44819784bd01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4aa04e4c47db91ff94b91f6bfba632302960cef1697d0ad91fd44819784bd01->enter($__internal_e4aa04e4c47db91ff94b91f6bfba632302960cef1697d0ad91fd44819784bd01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e4aa04e4c47db91ff94b91f6bfba632302960cef1697d0ad91fd44819784bd01->leave($__internal_e4aa04e4c47db91ff94b91f6bfba632302960cef1697d0ad91fd44819784bd01_prof);

        
        $__internal_77391818ac03a698ac6a73da46c7d3550fe0e46384f77b9bc8cd04524dee1c11->leave($__internal_77391818ac03a698ac6a73da46c7d3550fe0e46384f77b9bc8cd04524dee1c11_prof);

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
