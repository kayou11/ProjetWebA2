<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_7deb8ba337ce55e5d456ea3290e8e33e3780d7135262a8ed23a05e8390c169d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96ce031f8aec7815f8f265a5abe49d5dcc2786e97a5ecdd962a6d7e0819d8bd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96ce031f8aec7815f8f265a5abe49d5dcc2786e97a5ecdd962a6d7e0819d8bd4->enter($__internal_96ce031f8aec7815f8f265a5abe49d5dcc2786e97a5ecdd962a6d7e0819d8bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_f29fe1c479ae1bfe7ac523a71085b38c1e4ea27ecfc3262a40c3c39d30be0ec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f29fe1c479ae1bfe7ac523a71085b38c1e4ea27ecfc3262a40c3c39d30be0ec3->enter($__internal_f29fe1c479ae1bfe7ac523a71085b38c1e4ea27ecfc3262a40c3c39d30be0ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96ce031f8aec7815f8f265a5abe49d5dcc2786e97a5ecdd962a6d7e0819d8bd4->leave($__internal_96ce031f8aec7815f8f265a5abe49d5dcc2786e97a5ecdd962a6d7e0819d8bd4_prof);

        
        $__internal_f29fe1c479ae1bfe7ac523a71085b38c1e4ea27ecfc3262a40c3c39d30be0ec3->leave($__internal_f29fe1c479ae1bfe7ac523a71085b38c1e4ea27ecfc3262a40c3c39d30be0ec3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f02dbb8fafdc4e671de03f2cdb8b0f5602516ef3094ad161f5ebee0f62d93a6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f02dbb8fafdc4e671de03f2cdb8b0f5602516ef3094ad161f5ebee0f62d93a6c->enter($__internal_f02dbb8fafdc4e671de03f2cdb8b0f5602516ef3094ad161f5ebee0f62d93a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bb8d88e07f5dbcd6308c15dae9b03eaf37a92d05f0f8d48da140adfb77c8c093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb8d88e07f5dbcd6308c15dae9b03eaf37a92d05f0f8d48da140adfb77c8c093->enter($__internal_bb8d88e07f5dbcd6308c15dae9b03eaf37a92d05f0f8d48da140adfb77c8c093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_bb8d88e07f5dbcd6308c15dae9b03eaf37a92d05f0f8d48da140adfb77c8c093->leave($__internal_bb8d88e07f5dbcd6308c15dae9b03eaf37a92d05f0f8d48da140adfb77c8c093_prof);

        
        $__internal_f02dbb8fafdc4e671de03f2cdb8b0f5602516ef3094ad161f5ebee0f62d93a6c->leave($__internal_f02dbb8fafdc4e671de03f2cdb8b0f5602516ef3094ad161f5ebee0f62d93a6c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
