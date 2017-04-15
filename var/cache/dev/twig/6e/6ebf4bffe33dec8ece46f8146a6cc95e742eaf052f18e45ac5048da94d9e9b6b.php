<?php

/* PayumBundle:Profiler:payum.html.twig */
class __TwigTemplate_68aa6e7275177761ee0c5ae9e3360c2a25c13cc7fbfd6844fd90176a2907a27b extends Twig_Template
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
        $__internal_9b940b105c87391bc481cda9b5fd29809c9dc350c1a9e89abecc66000d4c11b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b940b105c87391bc481cda9b5fd29809c9dc350c1a9e89abecc66000d4c11b7->enter($__internal_9b940b105c87391bc481cda9b5fd29809c9dc350c1a9e89abecc66000d4c11b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PayumBundle:Profiler:payum.html.twig"));

        $__internal_46706eedaad403c7664010a3bd6047d200182b1233b3ce7e467ffb08513e4b05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46706eedaad403c7664010a3bd6047d200182b1233b3ce7e467ffb08513e4b05->enter($__internal_46706eedaad403c7664010a3bd6047d200182b1233b3ce7e467ffb08513e4b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PayumBundle:Profiler:payum.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b940b105c87391bc481cda9b5fd29809c9dc350c1a9e89abecc66000d4c11b7->leave($__internal_9b940b105c87391bc481cda9b5fd29809c9dc350c1a9e89abecc66000d4c11b7_prof);

        
        $__internal_46706eedaad403c7664010a3bd6047d200182b1233b3ce7e467ffb08513e4b05->leave($__internal_46706eedaad403c7664010a3bd6047d200182b1233b3ce7e467ffb08513e4b05_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a61bb8bd3fa8cff964836a7985c10f0e4026023e0ce271ad71f896d7e1dc4135 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a61bb8bd3fa8cff964836a7985c10f0e4026023e0ce271ad71f896d7e1dc4135->enter($__internal_a61bb8bd3fa8cff964836a7985c10f0e4026023e0ce271ad71f896d7e1dc4135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2971fbe1c2de3461749ae906b4dbcfea0f3f4984fc5b2322ef858add2ecc0bcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2971fbe1c2de3461749ae906b4dbcfea0f3f4984fc5b2322ef858add2ecc0bcf->enter($__internal_2971fbe1c2de3461749ae906b4dbcfea0f3f4984fc5b2322ef858add2ecc0bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_2971fbe1c2de3461749ae906b4dbcfea0f3f4984fc5b2322ef858add2ecc0bcf->leave($__internal_2971fbe1c2de3461749ae906b4dbcfea0f3f4984fc5b2322ef858add2ecc0bcf_prof);

        
        $__internal_a61bb8bd3fa8cff964836a7985c10f0e4026023e0ce271ad71f896d7e1dc4135->leave($__internal_a61bb8bd3fa8cff964836a7985c10f0e4026023e0ce271ad71f896d7e1dc4135_prof);

    }

    // line 17
    public function block_menu($context, array $blocks = array())
    {
        $__internal_14d0aeaa78c15fc3e8dbdaf7b161a76477219f2639eb6f0820bbb848e4810096 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14d0aeaa78c15fc3e8dbdaf7b161a76477219f2639eb6f0820bbb848e4810096->enter($__internal_14d0aeaa78c15fc3e8dbdaf7b161a76477219f2639eb6f0820bbb848e4810096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e1aa3ff1555df390d6bc10c9df11aa7ccf4e6f876c932970a2ed9713b6fff60b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1aa3ff1555df390d6bc10c9df11aa7ccf4e6f876c932970a2ed9713b6fff60b->enter($__internal_e1aa3ff1555df390d6bc10c9df11aa7ccf4e6f876c932970a2ed9713b6fff60b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 18
        echo "    ";
        // line 19
        echo "    <span class=\"label\">
        <strong>Payum</strong>
    </span>
";
        
        $__internal_e1aa3ff1555df390d6bc10c9df11aa7ccf4e6f876c932970a2ed9713b6fff60b->leave($__internal_e1aa3ff1555df390d6bc10c9df11aa7ccf4e6f876c932970a2ed9713b6fff60b_prof);

        
        $__internal_14d0aeaa78c15fc3e8dbdaf7b161a76477219f2639eb6f0820bbb848e4810096->leave($__internal_14d0aeaa78c15fc3e8dbdaf7b161a76477219f2639eb6f0820bbb848e4810096_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4a5b93c8c10a8a89a4e5d040aab07bcca4a76e3210ff88fcf6f58d0aa07653c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a5b93c8c10a8a89a4e5d040aab07bcca4a76e3210ff88fcf6f58d0aa07653c4->enter($__internal_4a5b93c8c10a8a89a4e5d040aab07bcca4a76e3210ff88fcf6f58d0aa07653c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_43fc64731a5f13047cbc221bc09d3c96bce64c6b308b6c55bb5ef36efbbc7a89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43fc64731a5f13047cbc221bc09d3c96bce64c6b308b6c55bb5ef36efbbc7a89->enter($__internal_43fc64731a5f13047cbc221bc09d3c96bce64c6b308b6c55bb5ef36efbbc7a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Gateway execution graph</h2>

    <pre>";
        // line 27
        echo $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "dump", array(), "method");
        echo "</pre>
";
        
        $__internal_43fc64731a5f13047cbc221bc09d3c96bce64c6b308b6c55bb5ef36efbbc7a89->leave($__internal_43fc64731a5f13047cbc221bc09d3c96bce64c6b308b6c55bb5ef36efbbc7a89_prof);

        
        $__internal_4a5b93c8c10a8a89a4e5d040aab07bcca4a76e3210ff88fcf6f58d0aa07653c4->leave($__internal_4a5b93c8c10a8a89a4e5d040aab07bcca4a76e3210ff88fcf6f58d0aa07653c4_prof);

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
{% endblock %}", "PayumBundle:Profiler:payum.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/payum/payum-bundle/Resources/views/Profiler/payum.html.twig");
    }
}
