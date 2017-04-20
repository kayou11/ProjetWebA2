<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_db3e061a93cc7f339455c74787844949f1b75924bd71f08c66dbd41af5200a25 extends Twig_Template
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
        $__internal_b469bed2ef70b46d95dbf590e233c8a6c5fc9b5a1eecfff6b6c16698ff80f382 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b469bed2ef70b46d95dbf590e233c8a6c5fc9b5a1eecfff6b6c16698ff80f382->enter($__internal_b469bed2ef70b46d95dbf590e233c8a6c5fc9b5a1eecfff6b6c16698ff80f382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_82b1a16417044e3165547d7517108777261740fec597e66fafea7fd1e8bb363d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82b1a16417044e3165547d7517108777261740fec597e66fafea7fd1e8bb363d->enter($__internal_82b1a16417044e3165547d7517108777261740fec597e66fafea7fd1e8bb363d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 11, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b469bed2ef70b46d95dbf590e233c8a6c5fc9b5a1eecfff6b6c16698ff80f382->leave($__internal_b469bed2ef70b46d95dbf590e233c8a6c5fc9b5a1eecfff6b6c16698ff80f382_prof);

        
        $__internal_82b1a16417044e3165547d7517108777261740fec597e66fafea7fd1e8bb363d->leave($__internal_82b1a16417044e3165547d7517108777261740fec597e66fafea7fd1e8bb363d_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_b8e68888a68518d76179a5169a8079f5de03d583ceef799cfc69028b3a5a9de2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8e68888a68518d76179a5169a8079f5de03d583ceef799cfc69028b3a5a9de2->enter($__internal_b8e68888a68518d76179a5169a8079f5de03d583ceef799cfc69028b3a5a9de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_d5f73d0b6d59246f92efb017094157b47eccf7cd520c096a999b9807b2eff83c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5f73d0b6d59246f92efb017094157b47eccf7cd520c096a999b9807b2eff83c->enter($__internal_d5f73d0b6d59246f92efb017094157b47eccf7cd520c096a999b9807b2eff83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_d5f73d0b6d59246f92efb017094157b47eccf7cd520c096a999b9807b2eff83c->leave($__internal_d5f73d0b6d59246f92efb017094157b47eccf7cd520c096a999b9807b2eff83c_prof);

        
        $__internal_b8e68888a68518d76179a5169a8079f5de03d583ceef799cfc69028b3a5a9de2->leave($__internal_b8e68888a68518d76179a5169a8079f5de03d583ceef799cfc69028b3a5a9de2_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5f2eda87bfe124be35f77b4adb38aa51522da12e902376746f3390126efa6ec6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f2eda87bfe124be35f77b4adb38aa51522da12e902376746f3390126efa6ec6->enter($__internal_5f2eda87bfe124be35f77b4adb38aa51522da12e902376746f3390126efa6ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_01ecceb856bee6befc693a11774487b0f63c988b3cb48105a6aebe79d0504660 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01ecceb856bee6befc693a11774487b0f63c988b3cb48105a6aebe79d0504660->enter($__internal_01ecceb856bee6befc693a11774487b0f63c988b3cb48105a6aebe79d0504660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 35, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 35, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 36, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 36, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_01ecceb856bee6befc693a11774487b0f63c988b3cb48105a6aebe79d0504660->leave($__internal_01ecceb856bee6befc693a11774487b0f63c988b3cb48105a6aebe79d0504660_prof);

        
        $__internal_5f2eda87bfe124be35f77b4adb38aa51522da12e902376746f3390126efa6ec6->leave($__internal_5f2eda87bfe124be35f77b4adb38aa51522da12e902376746f3390126efa6ec6_prof);

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
