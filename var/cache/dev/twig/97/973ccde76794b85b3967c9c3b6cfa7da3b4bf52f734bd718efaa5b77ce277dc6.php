<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_e143b5a01b51760c32f1a298b6c1666c3664635cdda759dfdbe3a8c2fced19d7 extends Twig_Template
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
        $__internal_685e8cabb2f7b555071b886f280a4d4acec76d43799db96fdcf7d0ad3bdb0cd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_685e8cabb2f7b555071b886f280a4d4acec76d43799db96fdcf7d0ad3bdb0cd8->enter($__internal_685e8cabb2f7b555071b886f280a4d4acec76d43799db96fdcf7d0ad3bdb0cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0d2532d79ad20182df14050b7da142df2a98df8354c272cb4266f814be3984bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d2532d79ad20182df14050b7da142df2a98df8354c272cb4266f814be3984bc->enter($__internal_0d2532d79ad20182df14050b7da142df2a98df8354c272cb4266f814be3984bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_685e8cabb2f7b555071b886f280a4d4acec76d43799db96fdcf7d0ad3bdb0cd8->leave($__internal_685e8cabb2f7b555071b886f280a4d4acec76d43799db96fdcf7d0ad3bdb0cd8_prof);

        
        $__internal_0d2532d79ad20182df14050b7da142df2a98df8354c272cb4266f814be3984bc->leave($__internal_0d2532d79ad20182df14050b7da142df2a98df8354c272cb4266f814be3984bc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_892a0ee2bc31dce1f56a3786d2520ad523c2341d28336fae446b6b5b8463aae7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_892a0ee2bc31dce1f56a3786d2520ad523c2341d28336fae446b6b5b8463aae7->enter($__internal_892a0ee2bc31dce1f56a3786d2520ad523c2341d28336fae446b6b5b8463aae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_58be1872c4a818e0e4d1be711b7e6cae9e8795d64f0ce6145a3ec109fdf2fc3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58be1872c4a818e0e4d1be711b7e6cae9e8795d64f0ce6145a3ec109fdf2fc3b->enter($__internal_58be1872c4a818e0e4d1be711b7e6cae9e8795d64f0ce6145a3ec109fdf2fc3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_58be1872c4a818e0e4d1be711b7e6cae9e8795d64f0ce6145a3ec109fdf2fc3b->leave($__internal_58be1872c4a818e0e4d1be711b7e6cae9e8795d64f0ce6145a3ec109fdf2fc3b_prof);

        
        $__internal_892a0ee2bc31dce1f56a3786d2520ad523c2341d28336fae446b6b5b8463aae7->leave($__internal_892a0ee2bc31dce1f56a3786d2520ad523c2341d28336fae446b6b5b8463aae7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_70e0dddb18533024550fd89cf77aebf383e07295c559f49dd9ff730ca6d529ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70e0dddb18533024550fd89cf77aebf383e07295c559f49dd9ff730ca6d529ea->enter($__internal_70e0dddb18533024550fd89cf77aebf383e07295c559f49dd9ff730ca6d529ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c18143ee73c8d8a68400ca0c49b68c029f775fd4999c60c049d93b9b86a5a22f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c18143ee73c8d8a68400ca0c49b68c029f775fd4999c60c049d93b9b86a5a22f->enter($__internal_c18143ee73c8d8a68400ca0c49b68c029f775fd4999c60c049d93b9b86a5a22f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_c18143ee73c8d8a68400ca0c49b68c029f775fd4999c60c049d93b9b86a5a22f->leave($__internal_c18143ee73c8d8a68400ca0c49b68c029f775fd4999c60c049d93b9b86a5a22f_prof);

        
        $__internal_70e0dddb18533024550fd89cf77aebf383e07295c559f49dd9ff730ca6d529ea->leave($__internal_70e0dddb18533024550fd89cf77aebf383e07295c559f49dd9ff730ca6d529ea_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_862d2c195aa9ce620be0561bada18b48ecc87178438b80406ad2486f6c69b333 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_862d2c195aa9ce620be0561bada18b48ecc87178438b80406ad2486f6c69b333->enter($__internal_862d2c195aa9ce620be0561bada18b48ecc87178438b80406ad2486f6c69b333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f38a498decf0f8fd108f69db8bd1dffe29fa5cb771555e751a5f06137776533d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f38a498decf0f8fd108f69db8bd1dffe29fa5cb771555e751a5f06137776533d->enter($__internal_f38a498decf0f8fd108f69db8bd1dffe29fa5cb771555e751a5f06137776533d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_f38a498decf0f8fd108f69db8bd1dffe29fa5cb771555e751a5f06137776533d->leave($__internal_f38a498decf0f8fd108f69db8bd1dffe29fa5cb771555e751a5f06137776533d_prof);

        
        $__internal_862d2c195aa9ce620be0561bada18b48ecc87178438b80406ad2486f6c69b333->leave($__internal_862d2c195aa9ce620be0561bada18b48ecc87178438b80406ad2486f6c69b333_prof);

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
