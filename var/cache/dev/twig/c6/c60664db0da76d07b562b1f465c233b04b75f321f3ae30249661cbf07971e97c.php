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
        $__internal_69067b16a989d89b85e2bd61acef79ea4686018205d1f31c4f5d861cfa21cc21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69067b16a989d89b85e2bd61acef79ea4686018205d1f31c4f5d861cfa21cc21->enter($__internal_69067b16a989d89b85e2bd61acef79ea4686018205d1f31c4f5d861cfa21cc21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PayumBundle:Profiler:payum.html.twig"));

        $__internal_5b0b45b38996bc062ee81f91cdcbe4a3b690f53bbe70040c4829e4f358f4aa66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b0b45b38996bc062ee81f91cdcbe4a3b690f53bbe70040c4829e4f358f4aa66->enter($__internal_5b0b45b38996bc062ee81f91cdcbe4a3b690f53bbe70040c4829e4f358f4aa66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PayumBundle:Profiler:payum.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69067b16a989d89b85e2bd61acef79ea4686018205d1f31c4f5d861cfa21cc21->leave($__internal_69067b16a989d89b85e2bd61acef79ea4686018205d1f31c4f5d861cfa21cc21_prof);

        
        $__internal_5b0b45b38996bc062ee81f91cdcbe4a3b690f53bbe70040c4829e4f358f4aa66->leave($__internal_5b0b45b38996bc062ee81f91cdcbe4a3b690f53bbe70040c4829e4f358f4aa66_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_19eed6c204873f0008e84fa1ea49595e9e2c00f4f3829b90327296a555f1d85a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19eed6c204873f0008e84fa1ea49595e9e2c00f4f3829b90327296a555f1d85a->enter($__internal_19eed6c204873f0008e84fa1ea49595e9e2c00f4f3829b90327296a555f1d85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c0f81a32f3cd417e19010057d6f59e04c7edeaa01cf082cefcee56f73faae7cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0f81a32f3cd417e19010057d6f59e04c7edeaa01cf082cefcee56f73faae7cb->enter($__internal_c0f81a32f3cd417e19010057d6f59e04c7edeaa01cf082cefcee56f73faae7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_c0f81a32f3cd417e19010057d6f59e04c7edeaa01cf082cefcee56f73faae7cb->leave($__internal_c0f81a32f3cd417e19010057d6f59e04c7edeaa01cf082cefcee56f73faae7cb_prof);

        
        $__internal_19eed6c204873f0008e84fa1ea49595e9e2c00f4f3829b90327296a555f1d85a->leave($__internal_19eed6c204873f0008e84fa1ea49595e9e2c00f4f3829b90327296a555f1d85a_prof);

    }

    // line 17
    public function block_menu($context, array $blocks = array())
    {
        $__internal_65fc62968569b4e7e8da75dc12eafaee4ebb18417c4f55fc14d2ae3bcd2c94a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65fc62968569b4e7e8da75dc12eafaee4ebb18417c4f55fc14d2ae3bcd2c94a0->enter($__internal_65fc62968569b4e7e8da75dc12eafaee4ebb18417c4f55fc14d2ae3bcd2c94a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d99ff5d06da9f26b2d9312a9e7b1fe8c88c0fdbd9871de6135e083f50226bff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d99ff5d06da9f26b2d9312a9e7b1fe8c88c0fdbd9871de6135e083f50226bff6->enter($__internal_d99ff5d06da9f26b2d9312a9e7b1fe8c88c0fdbd9871de6135e083f50226bff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 18
        echo "    ";
        // line 19
        echo "    <span class=\"label\">
        <strong>Payum</strong>
    </span>
";
        
        $__internal_d99ff5d06da9f26b2d9312a9e7b1fe8c88c0fdbd9871de6135e083f50226bff6->leave($__internal_d99ff5d06da9f26b2d9312a9e7b1fe8c88c0fdbd9871de6135e083f50226bff6_prof);

        
        $__internal_65fc62968569b4e7e8da75dc12eafaee4ebb18417c4f55fc14d2ae3bcd2c94a0->leave($__internal_65fc62968569b4e7e8da75dc12eafaee4ebb18417c4f55fc14d2ae3bcd2c94a0_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f4b603b60a95501b79add683f4c59d87b25859bce74b6239ebc9b0db486ec058 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4b603b60a95501b79add683f4c59d87b25859bce74b6239ebc9b0db486ec058->enter($__internal_f4b603b60a95501b79add683f4c59d87b25859bce74b6239ebc9b0db486ec058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3a992c8edf953146ecdb1b83b832638dff535f3105fd0101ccecbf5279b7d4ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a992c8edf953146ecdb1b83b832638dff535f3105fd0101ccecbf5279b7d4ed->enter($__internal_3a992c8edf953146ecdb1b83b832638dff535f3105fd0101ccecbf5279b7d4ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Gateway execution graph</h2>

    <pre>";
        // line 27
        echo $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "dump", array(), "method");
        echo "</pre>
";
        
        $__internal_3a992c8edf953146ecdb1b83b832638dff535f3105fd0101ccecbf5279b7d4ed->leave($__internal_3a992c8edf953146ecdb1b83b832638dff535f3105fd0101ccecbf5279b7d4ed_prof);

        
        $__internal_f4b603b60a95501b79add683f4c59d87b25859bce74b6239ebc9b0db486ec058->leave($__internal_f4b603b60a95501b79add683f4c59d87b25859bce74b6239ebc9b0db486ec058_prof);

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
