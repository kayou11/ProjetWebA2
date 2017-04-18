<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6738ea6307a55c354772ee75a166e06adf522dc988f1ce9490b3e2e011e188cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_bd4b5d79b6899d2b79e695ba847fa29da6d959ed8c691fbd858bfcff03ad4005 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd4b5d79b6899d2b79e695ba847fa29da6d959ed8c691fbd858bfcff03ad4005->enter($__internal_bd4b5d79b6899d2b79e695ba847fa29da6d959ed8c691fbd858bfcff03ad4005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6e3f0b2f2a7d353f5f0f06fb4b853475569b3c03108d39e1f2da6c3c0a4df0a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e3f0b2f2a7d353f5f0f06fb4b853475569b3c03108d39e1f2da6c3c0a4df0a7->enter($__internal_6e3f0b2f2a7d353f5f0f06fb4b853475569b3c03108d39e1f2da6c3c0a4df0a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd4b5d79b6899d2b79e695ba847fa29da6d959ed8c691fbd858bfcff03ad4005->leave($__internal_bd4b5d79b6899d2b79e695ba847fa29da6d959ed8c691fbd858bfcff03ad4005_prof);

        
        $__internal_6e3f0b2f2a7d353f5f0f06fb4b853475569b3c03108d39e1f2da6c3c0a4df0a7->leave($__internal_6e3f0b2f2a7d353f5f0f06fb4b853475569b3c03108d39e1f2da6c3c0a4df0a7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_195111886db44efe620b1d427c37da75aafb5420f0b9170107551a7752d7c7c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_195111886db44efe620b1d427c37da75aafb5420f0b9170107551a7752d7c7c6->enter($__internal_195111886db44efe620b1d427c37da75aafb5420f0b9170107551a7752d7c7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ee5abac124b92fb7fd094d4a598a940c365d41acd7a4e52a59da69e7de566a71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee5abac124b92fb7fd094d4a598a940c365d41acd7a4e52a59da69e7de566a71->enter($__internal_ee5abac124b92fb7fd094d4a598a940c365d41acd7a4e52a59da69e7de566a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ee5abac124b92fb7fd094d4a598a940c365d41acd7a4e52a59da69e7de566a71->leave($__internal_ee5abac124b92fb7fd094d4a598a940c365d41acd7a4e52a59da69e7de566a71_prof);

        
        $__internal_195111886db44efe620b1d427c37da75aafb5420f0b9170107551a7752d7c7c6->leave($__internal_195111886db44efe620b1d427c37da75aafb5420f0b9170107551a7752d7c7c6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bff408108118cbd5c374113b97af1c3424c05e50f90bde6042bfdeef9822d992 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bff408108118cbd5c374113b97af1c3424c05e50f90bde6042bfdeef9822d992->enter($__internal_bff408108118cbd5c374113b97af1c3424c05e50f90bde6042bfdeef9822d992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d20cb295c7a82b07951f0b9be0d29ec870b397cf6149052d77d206186f899bab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d20cb295c7a82b07951f0b9be0d29ec870b397cf6149052d77d206186f899bab->enter($__internal_d20cb295c7a82b07951f0b9be0d29ec870b397cf6149052d77d206186f899bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d20cb295c7a82b07951f0b9be0d29ec870b397cf6149052d77d206186f899bab->leave($__internal_d20cb295c7a82b07951f0b9be0d29ec870b397cf6149052d77d206186f899bab_prof);

        
        $__internal_bff408108118cbd5c374113b97af1c3424c05e50f90bde6042bfdeef9822d992->leave($__internal_bff408108118cbd5c374113b97af1c3424c05e50f90bde6042bfdeef9822d992_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2d990fe6364ad33cee6f6cfea1ba8c4b5bf2073d3e91aac604c5e5cfbb43747a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d990fe6364ad33cee6f6cfea1ba8c4b5bf2073d3e91aac604c5e5cfbb43747a->enter($__internal_2d990fe6364ad33cee6f6cfea1ba8c4b5bf2073d3e91aac604c5e5cfbb43747a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_372c384f6c31f3789cfb3827b9910bf87b4a584a5b1d44431002b70b714c4ce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_372c384f6c31f3789cfb3827b9910bf87b4a584a5b1d44431002b70b714c4ce7->enter($__internal_372c384f6c31f3789cfb3827b9910bf87b4a584a5b1d44431002b70b714c4ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_372c384f6c31f3789cfb3827b9910bf87b4a584a5b1d44431002b70b714c4ce7->leave($__internal_372c384f6c31f3789cfb3827b9910bf87b4a584a5b1d44431002b70b714c4ce7_prof);

        
        $__internal_2d990fe6364ad33cee6f6cfea1ba8c4b5bf2073d3e91aac604c5e5cfbb43747a->leave($__internal_2d990fe6364ad33cee6f6cfea1ba8c4b5bf2073d3e91aac604c5e5cfbb43747a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\MAMP\\htdocs\\ProjetWebA2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
