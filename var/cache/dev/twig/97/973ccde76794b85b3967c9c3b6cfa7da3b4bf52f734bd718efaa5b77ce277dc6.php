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
        $__internal_16bd98a4eaf8991f940ad2d113eb9a74ba0d9a28e4e7ee0d8cfb69346f7aa7f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16bd98a4eaf8991f940ad2d113eb9a74ba0d9a28e4e7ee0d8cfb69346f7aa7f9->enter($__internal_16bd98a4eaf8991f940ad2d113eb9a74ba0d9a28e4e7ee0d8cfb69346f7aa7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9d75121cbcbd8fa05732ad84580cf812233a679b5e622c7ffaf45f5c32a7a325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d75121cbcbd8fa05732ad84580cf812233a679b5e622c7ffaf45f5c32a7a325->enter($__internal_9d75121cbcbd8fa05732ad84580cf812233a679b5e622c7ffaf45f5c32a7a325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16bd98a4eaf8991f940ad2d113eb9a74ba0d9a28e4e7ee0d8cfb69346f7aa7f9->leave($__internal_16bd98a4eaf8991f940ad2d113eb9a74ba0d9a28e4e7ee0d8cfb69346f7aa7f9_prof);

        
        $__internal_9d75121cbcbd8fa05732ad84580cf812233a679b5e622c7ffaf45f5c32a7a325->leave($__internal_9d75121cbcbd8fa05732ad84580cf812233a679b5e622c7ffaf45f5c32a7a325_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_55ffe89e3f246d7225360fb6d7009bf868ec68641211f6b3f65146d47a891359 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55ffe89e3f246d7225360fb6d7009bf868ec68641211f6b3f65146d47a891359->enter($__internal_55ffe89e3f246d7225360fb6d7009bf868ec68641211f6b3f65146d47a891359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ebb70f3c76e3781d662418c7819e1c040910a0f51058a526323e4d33734b47b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebb70f3c76e3781d662418c7819e1c040910a0f51058a526323e4d33734b47b8->enter($__internal_ebb70f3c76e3781d662418c7819e1c040910a0f51058a526323e4d33734b47b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ebb70f3c76e3781d662418c7819e1c040910a0f51058a526323e4d33734b47b8->leave($__internal_ebb70f3c76e3781d662418c7819e1c040910a0f51058a526323e4d33734b47b8_prof);

        
        $__internal_55ffe89e3f246d7225360fb6d7009bf868ec68641211f6b3f65146d47a891359->leave($__internal_55ffe89e3f246d7225360fb6d7009bf868ec68641211f6b3f65146d47a891359_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3a9bb5a4586ed7cf5caa4ce70e6968c1a16e15aa4fd26dccc8b7c56cc3264f71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a9bb5a4586ed7cf5caa4ce70e6968c1a16e15aa4fd26dccc8b7c56cc3264f71->enter($__internal_3a9bb5a4586ed7cf5caa4ce70e6968c1a16e15aa4fd26dccc8b7c56cc3264f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fa26a31cab41940f45dbd4bd8fa6997d5ff13ddf57b33010b53109e44f51e125 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa26a31cab41940f45dbd4bd8fa6997d5ff13ddf57b33010b53109e44f51e125->enter($__internal_fa26a31cab41940f45dbd4bd8fa6997d5ff13ddf57b33010b53109e44f51e125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_fa26a31cab41940f45dbd4bd8fa6997d5ff13ddf57b33010b53109e44f51e125->leave($__internal_fa26a31cab41940f45dbd4bd8fa6997d5ff13ddf57b33010b53109e44f51e125_prof);

        
        $__internal_3a9bb5a4586ed7cf5caa4ce70e6968c1a16e15aa4fd26dccc8b7c56cc3264f71->leave($__internal_3a9bb5a4586ed7cf5caa4ce70e6968c1a16e15aa4fd26dccc8b7c56cc3264f71_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b5c3bcb9df3bc11e9fe3a8777b77047ef93fe3e89081e00cbee43cff684b5c66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5c3bcb9df3bc11e9fe3a8777b77047ef93fe3e89081e00cbee43cff684b5c66->enter($__internal_b5c3bcb9df3bc11e9fe3a8777b77047ef93fe3e89081e00cbee43cff684b5c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2bad28c03a0c89b0bb25fa266e7bc909d18ff959084cdd47801d15ac97917d60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bad28c03a0c89b0bb25fa266e7bc909d18ff959084cdd47801d15ac97917d60->enter($__internal_2bad28c03a0c89b0bb25fa266e7bc909d18ff959084cdd47801d15ac97917d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_2bad28c03a0c89b0bb25fa266e7bc909d18ff959084cdd47801d15ac97917d60->leave($__internal_2bad28c03a0c89b0bb25fa266e7bc909d18ff959084cdd47801d15ac97917d60_prof);

        
        $__internal_b5c3bcb9df3bc11e9fe3a8777b77047ef93fe3e89081e00cbee43cff684b5c66->leave($__internal_b5c3bcb9df3bc11e9fe3a8777b77047ef93fe3e89081e00cbee43cff684b5c66_prof);

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
