<?php

/* PayumBundle:Profiler:payum.html.twig */
class __TwigTemplate_950c4fd58a9c0ff28784905efec209ef747d05e5fbb0dea892ecc95bf6ada5c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "PayumBundle:Profiler:payum.html.twig", 1);
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
        $__internal_472b49a476977f37ba0751a519f7cf77a4b8bc89ce13bc49abd6485d897558b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_472b49a476977f37ba0751a519f7cf77a4b8bc89ce13bc49abd6485d897558b5->enter($__internal_472b49a476977f37ba0751a519f7cf77a4b8bc89ce13bc49abd6485d897558b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PayumBundle:Profiler:payum.html.twig"));

        $__internal_8de527b52472bf12341ccaac85988ff1851cf3534e8bc53d0a3b35b9b7351872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de527b52472bf12341ccaac85988ff1851cf3534e8bc53d0a3b35b9b7351872->enter($__internal_8de527b52472bf12341ccaac85988ff1851cf3534e8bc53d0a3b35b9b7351872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PayumBundle:Profiler:payum.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_472b49a476977f37ba0751a519f7cf77a4b8bc89ce13bc49abd6485d897558b5->leave($__internal_472b49a476977f37ba0751a519f7cf77a4b8bc89ce13bc49abd6485d897558b5_prof);

        
        $__internal_8de527b52472bf12341ccaac85988ff1851cf3534e8bc53d0a3b35b9b7351872->leave($__internal_8de527b52472bf12341ccaac85988ff1851cf3534e8bc53d0a3b35b9b7351872_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f09a02958e178f556f91303c922e5322351f289d898ab3acaf9618925a07bbc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f09a02958e178f556f91303c922e5322351f289d898ab3acaf9618925a07bbc9->enter($__internal_f09a02958e178f556f91303c922e5322351f289d898ab3acaf9618925a07bbc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_10036c61e3898f4fa6de1ada0c534d1ade2c2e09161f5c6c210c4eb65f1759b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10036c61e3898f4fa6de1ada0c534d1ade2c2e09161f5c6c210c4eb65f1759b7->enter($__internal_10036c61e3898f4fa6de1ada0c534d1ade2c2e09161f5c6c210c4eb65f1759b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["icon"] = ('' === $tmp = "        <span class=\"sf-toolbar-status\">Payum</span>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 7
        echo "
    ";
        // line 8
        ob_start();
        // line 9
        echo "        <div class=\"sf-toolbar-info-piece\">
            ";
        // line 11
        echo "        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 13
        echo "
    ";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => true));
        echo "
";
        
        $__internal_10036c61e3898f4fa6de1ada0c534d1ade2c2e09161f5c6c210c4eb65f1759b7->leave($__internal_10036c61e3898f4fa6de1ada0c534d1ade2c2e09161f5c6c210c4eb65f1759b7_prof);

        
        $__internal_f09a02958e178f556f91303c922e5322351f289d898ab3acaf9618925a07bbc9->leave($__internal_f09a02958e178f556f91303c922e5322351f289d898ab3acaf9618925a07bbc9_prof);

    }

    // line 17
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cd76483f8dda626a06c4efc8766d71db8918ead8cdcf07538388d48eba175cdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd76483f8dda626a06c4efc8766d71db8918ead8cdcf07538388d48eba175cdd->enter($__internal_cd76483f8dda626a06c4efc8766d71db8918ead8cdcf07538388d48eba175cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_35eb03ea52946c5bb3835f92051ec33519b9b25fedcd6b1bcdc615125def9a8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35eb03ea52946c5bb3835f92051ec33519b9b25fedcd6b1bcdc615125def9a8a->enter($__internal_35eb03ea52946c5bb3835f92051ec33519b9b25fedcd6b1bcdc615125def9a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 18
        echo "    ";
        // line 19
        echo "    <span class=\"label\">
        <strong>Payum</strong>
    </span>
";
        
        $__internal_35eb03ea52946c5bb3835f92051ec33519b9b25fedcd6b1bcdc615125def9a8a->leave($__internal_35eb03ea52946c5bb3835f92051ec33519b9b25fedcd6b1bcdc615125def9a8a_prof);

        
        $__internal_cd76483f8dda626a06c4efc8766d71db8918ead8cdcf07538388d48eba175cdd->leave($__internal_cd76483f8dda626a06c4efc8766d71db8918ead8cdcf07538388d48eba175cdd_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a6d2b5e1087efd06c63c2896e42eb8ee9521e4dafefd325257793fb7f92d7ca2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6d2b5e1087efd06c63c2896e42eb8ee9521e4dafefd325257793fb7f92d7ca2->enter($__internal_a6d2b5e1087efd06c63c2896e42eb8ee9521e4dafefd325257793fb7f92d7ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1762d3c2c8129dcfa81899dee9ddfa17007ddde3c60c4193cc307878516fe4b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1762d3c2c8129dcfa81899dee9ddfa17007ddde3c60c4193cc307878516fe4b1->enter($__internal_1762d3c2c8129dcfa81899dee9ddfa17007ddde3c60c4193cc307878516fe4b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Gateway execution graph</h2>

    <pre>";
        // line 27
        echo $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "dump", array(), "method");
        echo "</pre>
";
        
        $__internal_1762d3c2c8129dcfa81899dee9ddfa17007ddde3c60c4193cc307878516fe4b1->leave($__internal_1762d3c2c8129dcfa81899dee9ddfa17007ddde3c60c4193cc307878516fe4b1_prof);

        
        $__internal_a6d2b5e1087efd06c63c2896e42eb8ee9521e4dafefd325257793fb7f92d7ca2->leave($__internal_a6d2b5e1087efd06c63c2896e42eb8ee9521e4dafefd325257793fb7f92d7ca2_prof);

    }

    public function getTemplateName()
    {
        return "PayumBundle:Profiler:payum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 27,  115 => 25,  106 => 24,  93 => 19,  91 => 18,  82 => 17,  70 => 14,  67 => 13,  63 => 11,  60 => 9,  58 => 8,  55 => 7,  51 => 4,  42 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        <span class=\"sf-toolbar-status\">Payum</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            {# ... #}
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { 'link': true }) }}
{% endblock %}

{% block menu %}
    {# This left-hand menu appears when using the full-screen profiler. #}
    <span class=\"label\">
        <strong>Payum</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Gateway execution graph</h2>

    <pre>{{ collector.dump()|raw }}</pre>
{% endblock %}", "PayumBundle:Profiler:payum.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/payum/payum-bundle/Resources/views/Profiler/payum.html.twig");
    }
}
