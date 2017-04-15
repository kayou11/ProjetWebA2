<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_7c1be3e21b661a920d8eb0bdd3f21afcf0c5c7d5d3b31782077f7b15ada3bd9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bce7e295fb86b19b2a58f9281ae493c9d94ee5abae1c0efc9d0279ff871cb808 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bce7e295fb86b19b2a58f9281ae493c9d94ee5abae1c0efc9d0279ff871cb808->enter($__internal_bce7e295fb86b19b2a58f9281ae493c9d94ee5abae1c0efc9d0279ff871cb808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_ead399680d5af3daeb699baba2fdb21192158ec38401cc79ce7c0df0592be401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ead399680d5af3daeb699baba2fdb21192158ec38401cc79ce7c0df0592be401->enter($__internal_ead399680d5af3daeb699baba2fdb21192158ec38401cc79ce7c0df0592be401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bce7e295fb86b19b2a58f9281ae493c9d94ee5abae1c0efc9d0279ff871cb808->leave($__internal_bce7e295fb86b19b2a58f9281ae493c9d94ee5abae1c0efc9d0279ff871cb808_prof);

        
        $__internal_ead399680d5af3daeb699baba2fdb21192158ec38401cc79ce7c0df0592be401->leave($__internal_ead399680d5af3daeb699baba2fdb21192158ec38401cc79ce7c0df0592be401_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b3ad0a914afc86b73703fbbd44e93affe7720b5040e3c41342e8c59428db964 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b3ad0a914afc86b73703fbbd44e93affe7720b5040e3c41342e8c59428db964->enter($__internal_5b3ad0a914afc86b73703fbbd44e93affe7720b5040e3c41342e8c59428db964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a8b1c1e39a65ff67ff33857645ef8bd830987ced25f19bbbb1e20c7909ea2df2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8b1c1e39a65ff67ff33857645ef8bd830987ced25f19bbbb1e20c7909ea2df2->enter($__internal_a8b1c1e39a65ff67ff33857645ef8bd830987ced25f19bbbb1e20c7909ea2df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a8b1c1e39a65ff67ff33857645ef8bd830987ced25f19bbbb1e20c7909ea2df2->leave($__internal_a8b1c1e39a65ff67ff33857645ef8bd830987ced25f19bbbb1e20c7909ea2df2_prof);

        
        $__internal_5b3ad0a914afc86b73703fbbd44e93affe7720b5040e3c41342e8c59428db964->leave($__internal_5b3ad0a914afc86b73703fbbd44e93affe7720b5040e3c41342e8c59428db964_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_227f7bc5287a04aa432b7c2bc2ac1a7b85fa43ef0bb8639829b7ca7048403b21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_227f7bc5287a04aa432b7c2bc2ac1a7b85fa43ef0bb8639829b7ca7048403b21->enter($__internal_227f7bc5287a04aa432b7c2bc2ac1a7b85fa43ef0bb8639829b7ca7048403b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_77624c9ef9fc4f1a62eaa7c3794ff603037c7019b5f3fd32b70c6fd523a61ace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77624c9ef9fc4f1a62eaa7c3794ff603037c7019b5f3fd32b70c6fd523a61ace->enter($__internal_77624c9ef9fc4f1a62eaa7c3794ff603037c7019b5f3fd32b70c6fd523a61ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_77624c9ef9fc4f1a62eaa7c3794ff603037c7019b5f3fd32b70c6fd523a61ace->leave($__internal_77624c9ef9fc4f1a62eaa7c3794ff603037c7019b5f3fd32b70c6fd523a61ace_prof);

        
        $__internal_227f7bc5287a04aa432b7c2bc2ac1a7b85fa43ef0bb8639829b7ca7048403b21->leave($__internal_227f7bc5287a04aa432b7c2bc2ac1a7b85fa43ef0bb8639829b7ca7048403b21_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
