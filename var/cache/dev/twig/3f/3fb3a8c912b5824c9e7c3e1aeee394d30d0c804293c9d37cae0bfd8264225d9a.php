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
        $__internal_9d92e72fd6067aa1eac043f3f4f08cc843fa8b236a135698291241c5fb136507 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d92e72fd6067aa1eac043f3f4f08cc843fa8b236a135698291241c5fb136507->enter($__internal_9d92e72fd6067aa1eac043f3f4f08cc843fa8b236a135698291241c5fb136507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0e181483593371b2d73ca82fe37b2a621bc6d9effaeefa50ae02d687d5b512d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e181483593371b2d73ca82fe37b2a621bc6d9effaeefa50ae02d687d5b512d5->enter($__internal_0e181483593371b2d73ca82fe37b2a621bc6d9effaeefa50ae02d687d5b512d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d92e72fd6067aa1eac043f3f4f08cc843fa8b236a135698291241c5fb136507->leave($__internal_9d92e72fd6067aa1eac043f3f4f08cc843fa8b236a135698291241c5fb136507_prof);

        
        $__internal_0e181483593371b2d73ca82fe37b2a621bc6d9effaeefa50ae02d687d5b512d5->leave($__internal_0e181483593371b2d73ca82fe37b2a621bc6d9effaeefa50ae02d687d5b512d5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e15c32cfcba5ae1ea800f0269b0849f0452e8c17f4b09ee49dd9541c08b202de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e15c32cfcba5ae1ea800f0269b0849f0452e8c17f4b09ee49dd9541c08b202de->enter($__internal_e15c32cfcba5ae1ea800f0269b0849f0452e8c17f4b09ee49dd9541c08b202de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9e4d2f15b38d0129d4cc5ab0bd4963e849aabd73747d6baef911efe908cf5e7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e4d2f15b38d0129d4cc5ab0bd4963e849aabd73747d6baef911efe908cf5e7e->enter($__internal_9e4d2f15b38d0129d4cc5ab0bd4963e849aabd73747d6baef911efe908cf5e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9e4d2f15b38d0129d4cc5ab0bd4963e849aabd73747d6baef911efe908cf5e7e->leave($__internal_9e4d2f15b38d0129d4cc5ab0bd4963e849aabd73747d6baef911efe908cf5e7e_prof);

        
        $__internal_e15c32cfcba5ae1ea800f0269b0849f0452e8c17f4b09ee49dd9541c08b202de->leave($__internal_e15c32cfcba5ae1ea800f0269b0849f0452e8c17f4b09ee49dd9541c08b202de_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a639ce3f0b5e598254bf61829916baf8d660f72b5c13f513390ae30a0a4304d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a639ce3f0b5e598254bf61829916baf8d660f72b5c13f513390ae30a0a4304d2->enter($__internal_a639ce3f0b5e598254bf61829916baf8d660f72b5c13f513390ae30a0a4304d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_65f0748c6e49171bbfebb30b1ca4abe9bcc8a39eb522a444151b1d1b6cbc6ab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65f0748c6e49171bbfebb30b1ca4abe9bcc8a39eb522a444151b1d1b6cbc6ab2->enter($__internal_65f0748c6e49171bbfebb30b1ca4abe9bcc8a39eb522a444151b1d1b6cbc6ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_65f0748c6e49171bbfebb30b1ca4abe9bcc8a39eb522a444151b1d1b6cbc6ab2->leave($__internal_65f0748c6e49171bbfebb30b1ca4abe9bcc8a39eb522a444151b1d1b6cbc6ab2_prof);

        
        $__internal_a639ce3f0b5e598254bf61829916baf8d660f72b5c13f513390ae30a0a4304d2->leave($__internal_a639ce3f0b5e598254bf61829916baf8d660f72b5c13f513390ae30a0a4304d2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b079d803f41183eba1b75f6ceb879e604102ee5a49dbb86c9a8c273cd91be84d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b079d803f41183eba1b75f6ceb879e604102ee5a49dbb86c9a8c273cd91be84d->enter($__internal_b079d803f41183eba1b75f6ceb879e604102ee5a49dbb86c9a8c273cd91be84d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_55ce0e91e1e7ef2a3fcd2101944620d3d45dbdf94c76578297d319ab04304fea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55ce0e91e1e7ef2a3fcd2101944620d3d45dbdf94c76578297d319ab04304fea->enter($__internal_55ce0e91e1e7ef2a3fcd2101944620d3d45dbdf94c76578297d319ab04304fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_55ce0e91e1e7ef2a3fcd2101944620d3d45dbdf94c76578297d319ab04304fea->leave($__internal_55ce0e91e1e7ef2a3fcd2101944620d3d45dbdf94c76578297d319ab04304fea_prof);

        
        $__internal_b079d803f41183eba1b75f6ceb879e604102ee5a49dbb86c9a8c273cd91be84d->leave($__internal_b079d803f41183eba1b75f6ceb879e604102ee5a49dbb86c9a8c273cd91be84d_prof);

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
