<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_e6c5a904918de2af6f02ccd98e82bee7f8e6bf94e32cffc175ef6808c688d677 extends Twig_Template
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
        $__internal_33860221136cc3f648fcd0310457d1ba9ab14c8c8f23e0d70ad54f7a928a4a54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33860221136cc3f648fcd0310457d1ba9ab14c8c8f23e0d70ad54f7a928a4a54->enter($__internal_33860221136cc3f648fcd0310457d1ba9ab14c8c8f23e0d70ad54f7a928a4a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_8a7c3c19902f13e28177af0485b5f5af3a8485a7e4d4a12541b3945cfd87436b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a7c3c19902f13e28177af0485b5f5af3a8485a7e4d4a12541b3945cfd87436b->enter($__internal_8a7c3c19902f13e28177af0485b5f5af3a8485a7e4d4a12541b3945cfd87436b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 11, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33860221136cc3f648fcd0310457d1ba9ab14c8c8f23e0d70ad54f7a928a4a54->leave($__internal_33860221136cc3f648fcd0310457d1ba9ab14c8c8f23e0d70ad54f7a928a4a54_prof);

        
        $__internal_8a7c3c19902f13e28177af0485b5f5af3a8485a7e4d4a12541b3945cfd87436b->leave($__internal_8a7c3c19902f13e28177af0485b5f5af3a8485a7e4d4a12541b3945cfd87436b_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_e6bd9f61e923f054f2a63abcd7abbd4783b12622859647b0c4ed59301b5fe171 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6bd9f61e923f054f2a63abcd7abbd4783b12622859647b0c4ed59301b5fe171->enter($__internal_e6bd9f61e923f054f2a63abcd7abbd4783b12622859647b0c4ed59301b5fe171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_9caf04c8689eb017ae5a9deeff7f61c0e4d89baf85ab72e1ffc258bd055b8aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9caf04c8689eb017ae5a9deeff7f61c0e4d89baf85ab72e1ffc258bd055b8aac->enter($__internal_9caf04c8689eb017ae5a9deeff7f61c0e4d89baf85ab72e1ffc258bd055b8aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 27, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 27, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 29, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 29, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_9caf04c8689eb017ae5a9deeff7f61c0e4d89baf85ab72e1ffc258bd055b8aac->leave($__internal_9caf04c8689eb017ae5a9deeff7f61c0e4d89baf85ab72e1ffc258bd055b8aac_prof);

        
        $__internal_e6bd9f61e923f054f2a63abcd7abbd4783b12622859647b0c4ed59301b5fe171->leave($__internal_e6bd9f61e923f054f2a63abcd7abbd4783b12622859647b0c4ed59301b5fe171_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7c3a35b24b56bc5de7233daff5f39c22dda9d5f632aba033fe519ccb79f9a3ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c3a35b24b56bc5de7233daff5f39c22dda9d5f632aba033fe519ccb79f9a3ff->enter($__internal_7c3a35b24b56bc5de7233daff5f39c22dda9d5f632aba033fe519ccb79f9a3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_81941ec8171140478d5db1cdaa7355f6bb64ac413d77f31b757ace972431c298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81941ec8171140478d5db1cdaa7355f6bb64ac413d77f31b757ace972431c298->enter($__internal_81941ec8171140478d5db1cdaa7355f6bb64ac413d77f31b757ace972431c298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 35, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 35, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 36, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 36, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_81941ec8171140478d5db1cdaa7355f6bb64ac413d77f31b757ace972431c298->leave($__internal_81941ec8171140478d5db1cdaa7355f6bb64ac413d77f31b757ace972431c298_prof);

        
        $__internal_7c3a35b24b56bc5de7233daff5f39c22dda9d5f632aba033fe519ccb79f9a3ff->leave($__internal_7c3a35b24b56bc5de7233daff5f39c22dda9d5f632aba033fe519ccb79f9a3ff_prof);

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
", "WebProfilerBundle:Profiler:info.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
