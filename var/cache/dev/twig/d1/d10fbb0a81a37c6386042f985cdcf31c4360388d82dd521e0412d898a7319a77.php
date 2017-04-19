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
        $__internal_1f8051d26f53ac3b31b42c6b0c96fcb50c65ef886b402deb5eec4bbd361a6373 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f8051d26f53ac3b31b42c6b0c96fcb50c65ef886b402deb5eec4bbd361a6373->enter($__internal_1f8051d26f53ac3b31b42c6b0c96fcb50c65ef886b402deb5eec4bbd361a6373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_7c0730c5e9a3ebd94916e8c8ee463f58ed236e7f2d2b09f567d79992d5240dec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c0730c5e9a3ebd94916e8c8ee463f58ed236e7f2d2b09f567d79992d5240dec->enter($__internal_7c0730c5e9a3ebd94916e8c8ee463f58ed236e7f2d2b09f567d79992d5240dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 11, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f8051d26f53ac3b31b42c6b0c96fcb50c65ef886b402deb5eec4bbd361a6373->leave($__internal_1f8051d26f53ac3b31b42c6b0c96fcb50c65ef886b402deb5eec4bbd361a6373_prof);

        
        $__internal_7c0730c5e9a3ebd94916e8c8ee463f58ed236e7f2d2b09f567d79992d5240dec->leave($__internal_7c0730c5e9a3ebd94916e8c8ee463f58ed236e7f2d2b09f567d79992d5240dec_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_8680e481e307d8ec2db73a2ee50942a01cb51057a6c58b2960b2a6e188fae58b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8680e481e307d8ec2db73a2ee50942a01cb51057a6c58b2960b2a6e188fae58b->enter($__internal_8680e481e307d8ec2db73a2ee50942a01cb51057a6c58b2960b2a6e188fae58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_b710d0d7a57172649bb8d792e30d4f1e26a71564722f6046b369a541d43eaa39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b710d0d7a57172649bb8d792e30d4f1e26a71564722f6046b369a541d43eaa39->enter($__internal_b710d0d7a57172649bb8d792e30d4f1e26a71564722f6046b369a541d43eaa39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_b710d0d7a57172649bb8d792e30d4f1e26a71564722f6046b369a541d43eaa39->leave($__internal_b710d0d7a57172649bb8d792e30d4f1e26a71564722f6046b369a541d43eaa39_prof);

        
        $__internal_8680e481e307d8ec2db73a2ee50942a01cb51057a6c58b2960b2a6e188fae58b->leave($__internal_8680e481e307d8ec2db73a2ee50942a01cb51057a6c58b2960b2a6e188fae58b_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b63c25505709607b7ee1a4f326ea9106831d978c4cfba966c051face29ac93b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b63c25505709607b7ee1a4f326ea9106831d978c4cfba966c051face29ac93b0->enter($__internal_b63c25505709607b7ee1a4f326ea9106831d978c4cfba966c051face29ac93b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_baeeb540a9b4b37655b5437314929a16dea848bce061032aa48e91dc2ca57941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baeeb540a9b4b37655b5437314929a16dea848bce061032aa48e91dc2ca57941->enter($__internal_baeeb540a9b4b37655b5437314929a16dea848bce061032aa48e91dc2ca57941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 35, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 35, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 36, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 36, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_baeeb540a9b4b37655b5437314929a16dea848bce061032aa48e91dc2ca57941->leave($__internal_baeeb540a9b4b37655b5437314929a16dea848bce061032aa48e91dc2ca57941_prof);

        
        $__internal_b63c25505709607b7ee1a4f326ea9106831d978c4cfba966c051face29ac93b0->leave($__internal_b63c25505709607b7ee1a4f326ea9106831d978c4cfba966c051face29ac93b0_prof);

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
