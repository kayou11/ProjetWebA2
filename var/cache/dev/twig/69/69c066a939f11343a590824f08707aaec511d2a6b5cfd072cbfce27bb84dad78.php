<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6263651adade39de1f784ad928c1ebf12155ee20abd325770b1c3859e2a00061 extends Twig_Template
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
        $__internal_a0a2fc1904be6ddbc11121aee9e016ca7c20e7fdac3a16efb71886691661dcc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0a2fc1904be6ddbc11121aee9e016ca7c20e7fdac3a16efb71886691661dcc3->enter($__internal_a0a2fc1904be6ddbc11121aee9e016ca7c20e7fdac3a16efb71886691661dcc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5f7bc5de869ccc8a6bb2306f1ff6ef5aa621ec105948e27bd12be5aa5d980190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f7bc5de869ccc8a6bb2306f1ff6ef5aa621ec105948e27bd12be5aa5d980190->enter($__internal_5f7bc5de869ccc8a6bb2306f1ff6ef5aa621ec105948e27bd12be5aa5d980190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0a2fc1904be6ddbc11121aee9e016ca7c20e7fdac3a16efb71886691661dcc3->leave($__internal_a0a2fc1904be6ddbc11121aee9e016ca7c20e7fdac3a16efb71886691661dcc3_prof);

        
        $__internal_5f7bc5de869ccc8a6bb2306f1ff6ef5aa621ec105948e27bd12be5aa5d980190->leave($__internal_5f7bc5de869ccc8a6bb2306f1ff6ef5aa621ec105948e27bd12be5aa5d980190_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1ded70c6d2da64b999abed3d5e540bda039c1dd4b98dcc796e6ca99dd4c80bbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ded70c6d2da64b999abed3d5e540bda039c1dd4b98dcc796e6ca99dd4c80bbd->enter($__internal_1ded70c6d2da64b999abed3d5e540bda039c1dd4b98dcc796e6ca99dd4c80bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3e6dc6a9682d8360c872665cd48f70e722529b3ab5e5f0e10392f1c7009dab6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e6dc6a9682d8360c872665cd48f70e722529b3ab5e5f0e10392f1c7009dab6d->enter($__internal_3e6dc6a9682d8360c872665cd48f70e722529b3ab5e5f0e10392f1c7009dab6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3e6dc6a9682d8360c872665cd48f70e722529b3ab5e5f0e10392f1c7009dab6d->leave($__internal_3e6dc6a9682d8360c872665cd48f70e722529b3ab5e5f0e10392f1c7009dab6d_prof);

        
        $__internal_1ded70c6d2da64b999abed3d5e540bda039c1dd4b98dcc796e6ca99dd4c80bbd->leave($__internal_1ded70c6d2da64b999abed3d5e540bda039c1dd4b98dcc796e6ca99dd4c80bbd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f7e5f1838e4a4f626360be0835385917cd751facd8883f1469682d88d656f0ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7e5f1838e4a4f626360be0835385917cd751facd8883f1469682d88d656f0ad->enter($__internal_f7e5f1838e4a4f626360be0835385917cd751facd8883f1469682d88d656f0ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_13560d30c19babed501555e3c6fd5bced5f3ae56a8db85344e446c37533b4f0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13560d30c19babed501555e3c6fd5bced5f3ae56a8db85344e446c37533b4f0d->enter($__internal_13560d30c19babed501555e3c6fd5bced5f3ae56a8db85344e446c37533b4f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_13560d30c19babed501555e3c6fd5bced5f3ae56a8db85344e446c37533b4f0d->leave($__internal_13560d30c19babed501555e3c6fd5bced5f3ae56a8db85344e446c37533b4f0d_prof);

        
        $__internal_f7e5f1838e4a4f626360be0835385917cd751facd8883f1469682d88d656f0ad->leave($__internal_f7e5f1838e4a4f626360be0835385917cd751facd8883f1469682d88d656f0ad_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_eb475fb1b7f9f0b277a203e754381b38bb55ccc7308c560265955587c34c2635 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb475fb1b7f9f0b277a203e754381b38bb55ccc7308c560265955587c34c2635->enter($__internal_eb475fb1b7f9f0b277a203e754381b38bb55ccc7308c560265955587c34c2635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1e3c165d5312dcbdd43f77279b21d3d7a9695cc37c9b66c0d55d5fab5636d434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e3c165d5312dcbdd43f77279b21d3d7a9695cc37c9b66c0d55d5fab5636d434->enter($__internal_1e3c165d5312dcbdd43f77279b21d3d7a9695cc37c9b66c0d55d5fab5636d434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_1e3c165d5312dcbdd43f77279b21d3d7a9695cc37c9b66c0d55d5fab5636d434->leave($__internal_1e3c165d5312dcbdd43f77279b21d3d7a9695cc37c9b66c0d55d5fab5636d434_prof);

        
        $__internal_eb475fb1b7f9f0b277a203e754381b38bb55ccc7308c560265955587c34c2635->leave($__internal_eb475fb1b7f9f0b277a203e754381b38bb55ccc7308c560265955587c34c2635_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
