<?php

/* SyliusAdminBundle:Crud:index.html.twig */
class __TwigTemplate_fbbc086a515aa576744d13b0ea33c408d69f172cecbbbbcd01d6cec85f9f992f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SyliusAdminBundle::layout.html.twig", "SyliusAdminBundle:Crud:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SyliusAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91a498b901842278de705c37d58dbf9f2ec3c118772907eb9b3c25d5023f6a65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91a498b901842278de705c37d58dbf9f2ec3c118772907eb9b3c25d5023f6a65->enter($__internal_91a498b901842278de705c37d58dbf9f2ec3c118772907eb9b3c25d5023f6a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud:index.html.twig"));

        $__internal_0f6b5185b52a6475a0633e9460972b9171aaae16781a6f7c9d71f7aa3b5c98d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f6b5185b52a6475a0633e9460972b9171aaae16781a6f7c9d71f7aa3b5c98d5->enter($__internal_0f6b5185b52a6475a0633e9460972b9171aaae16781a6f7c9d71f7aa3b5c98d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Crud:index.html.twig"));

        // line 3
        $context["headers"] = $this->loadTemplate("SyliusUiBundle:Macro:headers.html.twig", "SyliusAdminBundle:Crud:index.html.twig", 3);
        // line 5
        $context["definition"] = $this->getAttribute(($context["resources"] ?? $this->getContext($context, "resources")), "definition", array());
        // line 6
        $context["data"] = $this->getAttribute(($context["resources"] ?? $this->getContext($context, "resources")), "data", array());
        // line 7
        $context["event_prefix"] = ((($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "applicationName", array()) . ".admin.") . $this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "name", array())) . ".index");
        // line 9
        $context["header"] = (($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["configuration"] ?? null), "vars", array(), "any", false, true), "header", array()), (($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "applicationName", array()) . ".ui.") . $this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "pluralName", array())))) : ((($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "applicationName", array()) . ".ui.") . $this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "pluralName", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91a498b901842278de705c37d58dbf9f2ec3c118772907eb9b3c25d5023f6a65->leave($__internal_91a498b901842278de705c37d58dbf9f2ec3c118772907eb9b3c25d5023f6a65_prof);

        
        $__internal_0f6b5185b52a6475a0633e9460972b9171aaae16781a6f7c9d71f7aa3b5c98d5->leave($__internal_0f6b5185b52a6475a0633e9460972b9171aaae16781a6f7c9d71f7aa3b5c98d5_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a7083976909f58a4593e85c4b0823f11b31f630ee9ee4b2c5dd1bde786d2e37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a7083976909f58a4593e85c4b0823f11b31f630ee9ee4b2c5dd1bde786d2e37->enter($__internal_5a7083976909f58a4593e85c4b0823f11b31f630ee9ee4b2c5dd1bde786d2e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4e6a2ae71685386b15fd93b9f1eaf04fe25d5759dc9446a9115f9eb0fb96421f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e6a2ae71685386b15fd93b9f1eaf04fe25d5759dc9446a9115f9eb0fb96421f->enter($__internal_4e6a2ae71685386b15fd93b9f1eaf04fe25d5759dc9446a9115f9eb0fb96421f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["header"] ?? $this->getContext($context, "header"))), "html", null, true);
        
        $__internal_4e6a2ae71685386b15fd93b9f1eaf04fe25d5759dc9446a9115f9eb0fb96421f->leave($__internal_4e6a2ae71685386b15fd93b9f1eaf04fe25d5759dc9446a9115f9eb0fb96421f_prof);

        
        $__internal_5a7083976909f58a4593e85c4b0823f11b31f630ee9ee4b2c5dd1bde786d2e37->leave($__internal_5a7083976909f58a4593e85c4b0823f11b31f630ee9ee4b2c5dd1bde786d2e37_prof);

    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        $__internal_1e4951f6ef2f1fd5fdabb72355729e14abebb3ecbdde4fea204e02507f05ca8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e4951f6ef2f1fd5fdabb72355729e14abebb3ecbdde4fea204e02507f05ca8e->enter($__internal_1e4951f6ef2f1fd5fdabb72355729e14abebb3ecbdde4fea204e02507f05ca8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e97acf2c5b2cca7ecd546824967079cc34c3fc1a893cb27fae6721479faa02de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e97acf2c5b2cca7ecd546824967079cc34c3fc1a893cb27fae6721479faa02de->enter($__internal_e97acf2c5b2cca7ecd546824967079cc34c3fc1a893cb27fae6721479faa02de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 14
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((($context["event_prefix"] ?? $this->getContext($context, "event_prefix")) . ".before_header"), array("resources" => ($context["resources"] ?? $this->getContext($context, "resources")))));
        echo "

";
        // line 16
        $this->loadTemplate("@SyliusAdmin/Crud/Index/_header.html.twig", "SyliusAdminBundle:Crud:index.html.twig", 16)->display($context);
        // line 17
        echo "
";
        // line 18
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((($context["event_prefix"] ?? $this->getContext($context, "event_prefix")) . ".after_header"), array("resources" => ($context["resources"] ?? $this->getContext($context, "resources")))));
        echo "

";
        // line 20
        $this->loadTemplate("@SyliusAdmin/Crud/Index/_content.html.twig", "SyliusAdminBundle:Crud:index.html.twig", 20)->display($context);
        // line 21
        echo "
";
        // line 22
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((($context["event_prefix"] ?? $this->getContext($context, "event_prefix")) . ".after_content"), array("resources" => ($context["resources"] ?? $this->getContext($context, "resources")))));
        echo "
";
        
        $__internal_e97acf2c5b2cca7ecd546824967079cc34c3fc1a893cb27fae6721479faa02de->leave($__internal_e97acf2c5b2cca7ecd546824967079cc34c3fc1a893cb27fae6721479faa02de_prof);

        
        $__internal_1e4951f6ef2f1fd5fdabb72355729e14abebb3ecbdde4fea204e02507f05ca8e->leave($__internal_1e4951f6ef2f1fd5fdabb72355729e14abebb3ecbdde4fea204e02507f05ca8e_prof);

    }

    // line 25
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3c148cecc1cbfdbed1bf10105394ef99aab3fa03fd17d9aced352f796b4e7393 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c148cecc1cbfdbed1bf10105394ef99aab3fa03fd17d9aced352f796b4e7393->enter($__internal_3c148cecc1cbfdbed1bf10105394ef99aab3fa03fd17d9aced352f796b4e7393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e6f9333a5c251a315f6d393a31db5f1b0d7fc947871dd8c5cc66ca3aa173211d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6f9333a5c251a315f6d393a31db5f1b0d7fc947871dd8c5cc66ca3aa173211d->enter($__internal_e6f9333a5c251a315f6d393a31db5f1b0d7fc947871dd8c5cc66ca3aa173211d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 26
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    ";
        // line 28
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((($context["event_prefix"] ?? $this->getContext($context, "event_prefix")) . ".stylesheets")));
        echo "
";
        
        $__internal_e6f9333a5c251a315f6d393a31db5f1b0d7fc947871dd8c5cc66ca3aa173211d->leave($__internal_e6f9333a5c251a315f6d393a31db5f1b0d7fc947871dd8c5cc66ca3aa173211d_prof);

        
        $__internal_3c148cecc1cbfdbed1bf10105394ef99aab3fa03fd17d9aced352f796b4e7393->leave($__internal_3c148cecc1cbfdbed1bf10105394ef99aab3fa03fd17d9aced352f796b4e7393_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3f2f8d1d5bac3733a318e07c2b779a16d0daba83edf1ce81bd925bf56863733b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f2f8d1d5bac3733a318e07c2b779a16d0daba83edf1ce81bd925bf56863733b->enter($__internal_3f2f8d1d5bac3733a318e07c2b779a16d0daba83edf1ce81bd925bf56863733b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1e3bbfa9e19ac3253f962fd4736ed2b165bed5e7956251262df259197518c99d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e3bbfa9e19ac3253f962fd4736ed2b165bed5e7956251262df259197518c99d->enter($__internal_1e3bbfa9e19ac3253f962fd4736ed2b165bed5e7956251262df259197518c99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 32
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    ";
        // line 34
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((($context["event_prefix"] ?? $this->getContext($context, "event_prefix")) . ".javascripts")));
        echo "
";
        
        $__internal_1e3bbfa9e19ac3253f962fd4736ed2b165bed5e7956251262df259197518c99d->leave($__internal_1e3bbfa9e19ac3253f962fd4736ed2b165bed5e7956251262df259197518c99d_prof);

        
        $__internal_3f2f8d1d5bac3733a318e07c2b779a16d0daba83edf1ce81bd925bf56863733b->leave($__internal_3f2f8d1d5bac3733a318e07c2b779a16d0daba83edf1ce81bd925bf56863733b_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Crud:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 34,  151 => 32,  142 => 31,  130 => 28,  124 => 26,  115 => 25,  103 => 22,  100 => 21,  98 => 20,  93 => 18,  90 => 17,  88 => 16,  83 => 14,  74 => 13,  54 => 11,  44 => 1,  42 => 9,  40 => 7,  38 => 6,  36 => 5,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SyliusAdminBundle::layout.html.twig' %}

{% import 'SyliusUiBundle:Macro:headers.html.twig' as headers %}

{% set definition = resources.definition %}
{% set data = resources.data %}
{% set event_prefix = metadata.applicationName ~ '.admin.' ~ metadata.name ~ '.index' %}

{% set header = configuration.vars.header|default(metadata.applicationName~'.ui.'~metadata.pluralName) %}

{% block title %}{{ parent() }} {{ header|trans }}{% endblock %}

{% block content %}
{{ sonata_block_render_event(event_prefix ~ '.before_header', {'resources': resources}) }}

{% include '@SyliusAdmin/Crud/Index/_header.html.twig' %}

{{ sonata_block_render_event(event_prefix ~ '.after_header', {'resources': resources}) }}

{% include '@SyliusAdmin/Crud/Index/_content.html.twig' %}

{{ sonata_block_render_event(event_prefix ~ '.after_content', {'resources': resources}) }}
{% endblock %}

{% block stylesheets %}
    {{ parent() }}

    {{ sonata_block_render_event(event_prefix ~ '.stylesheets') }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    {{ sonata_block_render_event(event_prefix ~ '.javascripts') }}
{% endblock %}
", "SyliusAdminBundle:Crud:index.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Crud/index.html.twig");
    }
}
