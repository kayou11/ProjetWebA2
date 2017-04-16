<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_bd839a623d41e65c7ad875f8876c26b53612d034a2fd2ba100c18e03a3c8b771 extends Twig_Template
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
        $__internal_453b6694bb4ed43012bcd9e021efd1c46ea1c9a4920e4b108584142dca50fa10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_453b6694bb4ed43012bcd9e021efd1c46ea1c9a4920e4b108584142dca50fa10->enter($__internal_453b6694bb4ed43012bcd9e021efd1c46ea1c9a4920e4b108584142dca50fa10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_dabe77b6f9a605272554fdce4268b391948d8f26327ed9a13017a903b64227ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dabe77b6f9a605272554fdce4268b391948d8f26327ed9a13017a903b64227ea->enter($__internal_dabe77b6f9a605272554fdce4268b391948d8f26327ed9a13017a903b64227ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_453b6694bb4ed43012bcd9e021efd1c46ea1c9a4920e4b108584142dca50fa10->leave($__internal_453b6694bb4ed43012bcd9e021efd1c46ea1c9a4920e4b108584142dca50fa10_prof);

        
        $__internal_dabe77b6f9a605272554fdce4268b391948d8f26327ed9a13017a903b64227ea->leave($__internal_dabe77b6f9a605272554fdce4268b391948d8f26327ed9a13017a903b64227ea_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9aeedba51b4ea89d108de748400ddad2ce3b0730ab35a783fd53cbb5d15cc15b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aeedba51b4ea89d108de748400ddad2ce3b0730ab35a783fd53cbb5d15cc15b->enter($__internal_9aeedba51b4ea89d108de748400ddad2ce3b0730ab35a783fd53cbb5d15cc15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_09ec60420f94b59ccece774da5a1ed5cc09dce7514b377133f40e1beb2a4a559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09ec60420f94b59ccece774da5a1ed5cc09dce7514b377133f40e1beb2a4a559->enter($__internal_09ec60420f94b59ccece774da5a1ed5cc09dce7514b377133f40e1beb2a4a559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_09ec60420f94b59ccece774da5a1ed5cc09dce7514b377133f40e1beb2a4a559->leave($__internal_09ec60420f94b59ccece774da5a1ed5cc09dce7514b377133f40e1beb2a4a559_prof);

        
        $__internal_9aeedba51b4ea89d108de748400ddad2ce3b0730ab35a783fd53cbb5d15cc15b->leave($__internal_9aeedba51b4ea89d108de748400ddad2ce3b0730ab35a783fd53cbb5d15cc15b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_36a2be07e8eecae457e9d7cb095e297b594a81997a75b9f9ab9ea4d1acfbb1dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36a2be07e8eecae457e9d7cb095e297b594a81997a75b9f9ab9ea4d1acfbb1dd->enter($__internal_36a2be07e8eecae457e9d7cb095e297b594a81997a75b9f9ab9ea4d1acfbb1dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8d71eb9603f122b8a51f9d7a70c8913b19eb3b8811b29bcc09e2ad49990b7f1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d71eb9603f122b8a51f9d7a70c8913b19eb3b8811b29bcc09e2ad49990b7f1d->enter($__internal_8d71eb9603f122b8a51f9d7a70c8913b19eb3b8811b29bcc09e2ad49990b7f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8d71eb9603f122b8a51f9d7a70c8913b19eb3b8811b29bcc09e2ad49990b7f1d->leave($__internal_8d71eb9603f122b8a51f9d7a70c8913b19eb3b8811b29bcc09e2ad49990b7f1d_prof);

        
        $__internal_36a2be07e8eecae457e9d7cb095e297b594a81997a75b9f9ab9ea4d1acfbb1dd->leave($__internal_36a2be07e8eecae457e9d7cb095e297b594a81997a75b9f9ab9ea4d1acfbb1dd_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ea53d7af6ab5446beb841cae1f6a946e5835d9f253c284db54bbbc7175cb5eea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea53d7af6ab5446beb841cae1f6a946e5835d9f253c284db54bbbc7175cb5eea->enter($__internal_ea53d7af6ab5446beb841cae1f6a946e5835d9f253c284db54bbbc7175cb5eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ee45fbf59a15baed6163a55352f296f35d5506e689cf58e132b0cb8c8cb66a17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee45fbf59a15baed6163a55352f296f35d5506e689cf58e132b0cb8c8cb66a17->enter($__internal_ee45fbf59a15baed6163a55352f296f35d5506e689cf58e132b0cb8c8cb66a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ee45fbf59a15baed6163a55352f296f35d5506e689cf58e132b0cb8c8cb66a17->leave($__internal_ee45fbf59a15baed6163a55352f296f35d5506e689cf58e132b0cb8c8cb66a17_prof);

        
        $__internal_ea53d7af6ab5446beb841cae1f6a946e5835d9f253c284db54bbbc7175cb5eea->leave($__internal_ea53d7af6ab5446beb841cae1f6a946e5835d9f253c284db54bbbc7175cb5eea_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
