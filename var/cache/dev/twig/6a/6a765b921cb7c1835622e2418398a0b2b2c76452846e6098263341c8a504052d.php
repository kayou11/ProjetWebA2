<?php

/* SiteBundle:Pages:activite.html.twig */
class __TwigTemplate_ce09fffc2e73192c630f3da65520bd4a18fabbfd663ef3b6801d49a2c0913a13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SiteBundle::base.html.twig", "SiteBundle:Pages:activite.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SiteBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43c3225d8e23f4345fe035f17580bcb151b7ed375c604688593c5ed721cc3456 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43c3225d8e23f4345fe035f17580bcb151b7ed375c604688593c5ed721cc3456->enter($__internal_43c3225d8e23f4345fe035f17580bcb151b7ed375c604688593c5ed721cc3456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:activite.html.twig"));

        $__internal_ba3ed3e3fd7818f23ad257d06f80949cf3c6b027c595d31e3e8aac704c60673d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba3ed3e3fd7818f23ad257d06f80949cf3c6b027c595d31e3e8aac704c60673d->enter($__internal_ba3ed3e3fd7818f23ad257d06f80949cf3c6b027c595d31e3e8aac704c60673d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:activite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43c3225d8e23f4345fe035f17580bcb151b7ed375c604688593c5ed721cc3456->leave($__internal_43c3225d8e23f4345fe035f17580bcb151b7ed375c604688593c5ed721cc3456_prof);

        
        $__internal_ba3ed3e3fd7818f23ad257d06f80949cf3c6b027c595d31e3e8aac704c60673d->leave($__internal_ba3ed3e3fd7818f23ad257d06f80949cf3c6b027c595d31e3e8aac704c60673d_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_bb1d6efca04247e3f3403b9e72dbc914525a22ad9fd2a456fe36737f2542ba85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb1d6efca04247e3f3403b9e72dbc914525a22ad9fd2a456fe36737f2542ba85->enter($__internal_bb1d6efca04247e3f3403b9e72dbc914525a22ad9fd2a456fe36737f2542ba85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_18e04fd9ee79c5b191ab93127ee07b51150da3b3ef5866d0aaf1ab39ef78276e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18e04fd9ee79c5b191ab93127ee07b51150da3b3ef5866d0aaf1ab39ef78276e->enter($__internal_18e04fd9ee79c5b191ab93127ee07b51150da3b3ef5866d0aaf1ab39ef78276e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../public/css/pages/contact.css\" type=\"text/css\" />
";
        
        $__internal_18e04fd9ee79c5b191ab93127ee07b51150da3b3ef5866d0aaf1ab39ef78276e->leave($__internal_18e04fd9ee79c5b191ab93127ee07b51150da3b3ef5866d0aaf1ab39ef78276e_prof);

        
        $__internal_bb1d6efca04247e3f3403b9e72dbc914525a22ad9fd2a456fe36737f2542ba85->leave($__internal_bb1d6efca04247e3f3403b9e72dbc914525a22ad9fd2a456fe36737f2542ba85_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_71df8e1bdd5cd86e991802dfe8a49e783ae8240d2c0b09b4ad5f05682d9b416f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71df8e1bdd5cd86e991802dfe8a49e783ae8240d2c0b09b4ad5f05682d9b416f->enter($__internal_71df8e1bdd5cd86e991802dfe8a49e783ae8240d2c0b09b4ad5f05682d9b416f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_de07bdf93fabbd419ba758fe5e8dfb05c0a9ca0823b5132e72752afa6e7331bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de07bdf93fabbd419ba758fe5e8dfb05c0a9ca0823b5132e72752afa6e7331bd->enter($__internal_de07bdf93fabbd419ba758fe5e8dfb05c0a9ca0823b5132e72752afa6e7331bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Galerie photos";
        
        $__internal_de07bdf93fabbd419ba758fe5e8dfb05c0a9ca0823b5132e72752afa6e7331bd->leave($__internal_de07bdf93fabbd419ba758fe5e8dfb05c0a9ca0823b5132e72752afa6e7331bd_prof);

        
        $__internal_71df8e1bdd5cd86e991802dfe8a49e783ae8240d2c0b09b4ad5f05682d9b416f->leave($__internal_71df8e1bdd5cd86e991802dfe8a49e783ae8240d2c0b09b4ad5f05682d9b416f_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_2912b9b38e3f81b41fb1f0f5413963409050499095a661573a011c4d49c2660c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2912b9b38e3f81b41fb1f0f5413963409050499095a661573a011c4d49c2660c->enter($__internal_2912b9b38e3f81b41fb1f0f5413963409050499095a661573a011c4d49c2660c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2cfbc78d8032f3f652f11ddb57e3a3e0c5ac6477f80a90c8d6d730cfcf70d101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cfbc78d8032f3f652f11ddb57e3a3e0c5ac6477f80a90c8d6d730cfcf70d101->enter($__internal_2cfbc78d8032f3f652f11ddb57e3a3e0c5ac6477f80a90c8d6d730cfcf70d101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <div>
        <section>
            <p>
                ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new Twig_Error_Runtime('Variable "activity" does not exist.', 13, $this->getSourceContext()); })()), "description", array()), "html", null, true);
        echo "
            </p>
        </section>
    </div>
";
        
        $__internal_2cfbc78d8032f3f652f11ddb57e3a3e0c5ac6477f80a90c8d6d730cfcf70d101->leave($__internal_2cfbc78d8032f3f652f11ddb57e3a3e0c5ac6477f80a90c8d6d730cfcf70d101_prof);

        
        $__internal_2912b9b38e3f81b41fb1f0f5413963409050499095a661573a011c4d49c2660c->leave($__internal_2912b9b38e3f81b41fb1f0f5413963409050499095a661573a011c4d49c2660c_prof);

    }

    public function getTemplateName()
    {
        return "SiteBundle:Pages:activite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  89 => 10,  80 => 9,  62 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SiteBundle::base.html.twig\" %}

{% block style %}
    <link rel=\"stylesheet\" href=\"../public/css/pages/contact.css\" type=\"text/css\" />
{% endblock %}

{% block title  %}Galerie photos{% endblock %}

{% block content %}
    <div>
        <section>
            <p>
                {{ activity.description }}
            </p>
        </section>
    </div>
{% endblock %}", "SiteBundle:Pages:activite.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/SiteBundle/Resources/views/Pages/activite.html.twig");
    }
}
