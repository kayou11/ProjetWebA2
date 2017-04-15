<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_8f149bcb672711dc63a69d4437fa82043d87607ce79dd5e731c1b3d1157394af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db9387da0710ea86f076abf93b04fa17db48a24a6faf5aa3a200cd0877958a47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db9387da0710ea86f076abf93b04fa17db48a24a6faf5aa3a200cd0877958a47->enter($__internal_db9387da0710ea86f076abf93b04fa17db48a24a6faf5aa3a200cd0877958a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_f09adeb6ab5c2057a7b55990a77e9477b81ed1de45a57dd91d033e242e105340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f09adeb6ab5c2057a7b55990a77e9477b81ed1de45a57dd91d033e242e105340->enter($__internal_f09adeb6ab5c2057a7b55990a77e9477b81ed1de45a57dd91d033e242e105340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db9387da0710ea86f076abf93b04fa17db48a24a6faf5aa3a200cd0877958a47->leave($__internal_db9387da0710ea86f076abf93b04fa17db48a24a6faf5aa3a200cd0877958a47_prof);

        
        $__internal_f09adeb6ab5c2057a7b55990a77e9477b81ed1de45a57dd91d033e242e105340->leave($__internal_f09adeb6ab5c2057a7b55990a77e9477b81ed1de45a57dd91d033e242e105340_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_a943c7d9bb05921eb023b34bb17bc7654cd5510c6a54b90f2ccdaeb3edd451ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a943c7d9bb05921eb023b34bb17bc7654cd5510c6a54b90f2ccdaeb3edd451ca->enter($__internal_a943c7d9bb05921eb023b34bb17bc7654cd5510c6a54b90f2ccdaeb3edd451ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_bb868aed0cebaeba181c0eb9af987e3036ed103595a379f914026b7bc7bf02a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb868aed0cebaeba181c0eb9af987e3036ed103595a379f914026b7bc7bf02a4->enter($__internal_bb868aed0cebaeba181c0eb9af987e3036ed103595a379f914026b7bc7bf02a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_bb868aed0cebaeba181c0eb9af987e3036ed103595a379f914026b7bc7bf02a4->leave($__internal_bb868aed0cebaeba181c0eb9af987e3036ed103595a379f914026b7bc7bf02a4_prof);

        
        $__internal_a943c7d9bb05921eb023b34bb17bc7654cd5510c6a54b90f2ccdaeb3edd451ca->leave($__internal_a943c7d9bb05921eb023b34bb17bc7654cd5510c6a54b90f2ccdaeb3edd451ca_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2fa93e7b1c47b7f2760824ff541ea12f711f6b9531dd3d53a463e563ea832fed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fa93e7b1c47b7f2760824ff541ea12f711f6b9531dd3d53a463e563ea832fed->enter($__internal_2fa93e7b1c47b7f2760824ff541ea12f711f6b9531dd3d53a463e563ea832fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_04170b4960fe070a36596fedfaa6b1e5d5b6ec539d3ac2bd3f888527f72e3f73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04170b4960fe070a36596fedfaa6b1e5d5b6ec539d3ac2bd3f888527f72e3f73->enter($__internal_04170b4960fe070a36596fedfaa6b1e5d5b6ec539d3ac2bd3f888527f72e3f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_04170b4960fe070a36596fedfaa6b1e5d5b6ec539d3ac2bd3f888527f72e3f73->leave($__internal_04170b4960fe070a36596fedfaa6b1e5d5b6ec539d3ac2bd3f888527f72e3f73_prof);

        
        $__internal_2fa93e7b1c47b7f2760824ff541ea12f711f6b9531dd3d53a463e563ea832fed->leave($__internal_2fa93e7b1c47b7f2760824ff541ea12f711f6b9531dd3d53a463e563ea832fed_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
