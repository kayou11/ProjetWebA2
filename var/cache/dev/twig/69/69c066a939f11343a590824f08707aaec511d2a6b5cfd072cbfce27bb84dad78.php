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
        $__internal_55821819e37ecc91c2333f694db48934fd113a489d57ee6b506f56ac79c15b6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55821819e37ecc91c2333f694db48934fd113a489d57ee6b506f56ac79c15b6b->enter($__internal_55821819e37ecc91c2333f694db48934fd113a489d57ee6b506f56ac79c15b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5e1d875aaf2106d732d179419a6e40cd4f0b1a8f21a43ac9eb20d3803f8902bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e1d875aaf2106d732d179419a6e40cd4f0b1a8f21a43ac9eb20d3803f8902bd->enter($__internal_5e1d875aaf2106d732d179419a6e40cd4f0b1a8f21a43ac9eb20d3803f8902bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55821819e37ecc91c2333f694db48934fd113a489d57ee6b506f56ac79c15b6b->leave($__internal_55821819e37ecc91c2333f694db48934fd113a489d57ee6b506f56ac79c15b6b_prof);

        
        $__internal_5e1d875aaf2106d732d179419a6e40cd4f0b1a8f21a43ac9eb20d3803f8902bd->leave($__internal_5e1d875aaf2106d732d179419a6e40cd4f0b1a8f21a43ac9eb20d3803f8902bd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a1a393e7d9f2e7caaa524013fdee18aa35f1ba059cefba23a70e6c375ec2177f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1a393e7d9f2e7caaa524013fdee18aa35f1ba059cefba23a70e6c375ec2177f->enter($__internal_a1a393e7d9f2e7caaa524013fdee18aa35f1ba059cefba23a70e6c375ec2177f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a24a31ebcd714ac5d7541ffb691f83e032c33a9285bfafeac5f2645f1d3287e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a24a31ebcd714ac5d7541ffb691f83e032c33a9285bfafeac5f2645f1d3287e1->enter($__internal_a24a31ebcd714ac5d7541ffb691f83e032c33a9285bfafeac5f2645f1d3287e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a24a31ebcd714ac5d7541ffb691f83e032c33a9285bfafeac5f2645f1d3287e1->leave($__internal_a24a31ebcd714ac5d7541ffb691f83e032c33a9285bfafeac5f2645f1d3287e1_prof);

        
        $__internal_a1a393e7d9f2e7caaa524013fdee18aa35f1ba059cefba23a70e6c375ec2177f->leave($__internal_a1a393e7d9f2e7caaa524013fdee18aa35f1ba059cefba23a70e6c375ec2177f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e4e396c6334bce966d2f4dcb1ba387604d19356737b357b4b253773336c0bdd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4e396c6334bce966d2f4dcb1ba387604d19356737b357b4b253773336c0bdd3->enter($__internal_e4e396c6334bce966d2f4dcb1ba387604d19356737b357b4b253773336c0bdd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_87dc498d4e08b4546e11631a0205b6728347374f889583c7cc8e0c945255c51d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87dc498d4e08b4546e11631a0205b6728347374f889583c7cc8e0c945255c51d->enter($__internal_87dc498d4e08b4546e11631a0205b6728347374f889583c7cc8e0c945255c51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_87dc498d4e08b4546e11631a0205b6728347374f889583c7cc8e0c945255c51d->leave($__internal_87dc498d4e08b4546e11631a0205b6728347374f889583c7cc8e0c945255c51d_prof);

        
        $__internal_e4e396c6334bce966d2f4dcb1ba387604d19356737b357b4b253773336c0bdd3->leave($__internal_e4e396c6334bce966d2f4dcb1ba387604d19356737b357b4b253773336c0bdd3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_efa779981e5655063985409ad0fc1a8cf998aa1d9d08ed16c81a85ec49c92e5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efa779981e5655063985409ad0fc1a8cf998aa1d9d08ed16c81a85ec49c92e5e->enter($__internal_efa779981e5655063985409ad0fc1a8cf998aa1d9d08ed16c81a85ec49c92e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5beb9252bc533e591fc36130501b8d7c331eecf8703542d8d8f3f610abaca875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5beb9252bc533e591fc36130501b8d7c331eecf8703542d8d8f3f610abaca875->enter($__internal_5beb9252bc533e591fc36130501b8d7c331eecf8703542d8d8f3f610abaca875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_5beb9252bc533e591fc36130501b8d7c331eecf8703542d8d8f3f610abaca875->leave($__internal_5beb9252bc533e591fc36130501b8d7c331eecf8703542d8d8f3f610abaca875_prof);

        
        $__internal_efa779981e5655063985409ad0fc1a8cf998aa1d9d08ed16c81a85ec49c92e5e->leave($__internal_efa779981e5655063985409ad0fc1a8cf998aa1d9d08ed16c81a85ec49c92e5e_prof);

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
