<?php

/* SiteBundle:Pages:article.html.twig */
class __TwigTemplate_f70d0584b6d83a7de25e4d16e493a1a9e3190d66271648b832f652da285c1062 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SiteBundle::base.html.twig", "SiteBundle:Pages:article.html.twig", 1);
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
        $__internal_33c40f65030a8efeb0118d8617dc4a673f56a945f01a9f2296b71e97e122b1df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33c40f65030a8efeb0118d8617dc4a673f56a945f01a9f2296b71e97e122b1df->enter($__internal_33c40f65030a8efeb0118d8617dc4a673f56a945f01a9f2296b71e97e122b1df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:article.html.twig"));

        $__internal_37ecf58692885e0f0fe0ef786480635544435027d82172e2bcd48fddd057031e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37ecf58692885e0f0fe0ef786480635544435027d82172e2bcd48fddd057031e->enter($__internal_37ecf58692885e0f0fe0ef786480635544435027d82172e2bcd48fddd057031e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33c40f65030a8efeb0118d8617dc4a673f56a945f01a9f2296b71e97e122b1df->leave($__internal_33c40f65030a8efeb0118d8617dc4a673f56a945f01a9f2296b71e97e122b1df_prof);

        
        $__internal_37ecf58692885e0f0fe0ef786480635544435027d82172e2bcd48fddd057031e->leave($__internal_37ecf58692885e0f0fe0ef786480635544435027d82172e2bcd48fddd057031e_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_6f530893d3f7131516a17766cc026e890620ae219b5caa35751fa1428483036c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f530893d3f7131516a17766cc026e890620ae219b5caa35751fa1428483036c->enter($__internal_6f530893d3f7131516a17766cc026e890620ae219b5caa35751fa1428483036c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_ff77ae217c7574722efd2b8e4ff70916c02df01dcb17ef744be88f12b549f7b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff77ae217c7574722efd2b8e4ff70916c02df01dcb17ef744be88f12b549f7b2->enter($__internal_ff77ae217c7574722efd2b8e4ff70916c02df01dcb17ef744be88f12b549f7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../../public/css/pages/activite.css\" type=\"text/css\" />
";
        
        $__internal_ff77ae217c7574722efd2b8e4ff70916c02df01dcb17ef744be88f12b549f7b2->leave($__internal_ff77ae217c7574722efd2b8e4ff70916c02df01dcb17ef744be88f12b549f7b2_prof);

        
        $__internal_6f530893d3f7131516a17766cc026e890620ae219b5caa35751fa1428483036c->leave($__internal_6f530893d3f7131516a17766cc026e890620ae219b5caa35751fa1428483036c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_377e970402fd76b1d3b95388f0deb788b9995e0da345f11d261a371d6b6d2c30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_377e970402fd76b1d3b95388f0deb788b9995e0da345f11d261a371d6b6d2c30->enter($__internal_377e970402fd76b1d3b95388f0deb788b9995e0da345f11d261a371d6b6d2c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8df91272d60fb55c7e558d321094002ea2c70f1114edc1d2ac04a91fd454cca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8df91272d60fb55c7e558d321094002ea2c70f1114edc1d2ac04a91fd454cca7->enter($__internal_8df91272d60fb55c7e558d321094002ea2c70f1114edc1d2ac04a91fd454cca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new Twig_Error_Runtime('Variable "activity" does not exist.', 7, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        
        $__internal_8df91272d60fb55c7e558d321094002ea2c70f1114edc1d2ac04a91fd454cca7->leave($__internal_8df91272d60fb55c7e558d321094002ea2c70f1114edc1d2ac04a91fd454cca7_prof);

        
        $__internal_377e970402fd76b1d3b95388f0deb788b9995e0da345f11d261a371d6b6d2c30->leave($__internal_377e970402fd76b1d3b95388f0deb788b9995e0da345f11d261a371d6b6d2c30_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_53cab00d07477ecde1f86abf5011012d24477410194f83150ef526fcd4f2541e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53cab00d07477ecde1f86abf5011012d24477410194f83150ef526fcd4f2541e->enter($__internal_53cab00d07477ecde1f86abf5011012d24477410194f83150ef526fcd4f2541e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ee347ec3fee94d1abddfe1a9c6a7e35c71630e2f3c94eff5dc7d987ede028556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee347ec3fee94d1abddfe1a9c6a7e35c71630e2f3c94eff5dc7d987ede028556->enter($__internal_ee347ec3fee94d1abddfe1a9c6a7e35c71630e2f3c94eff5dc7d987ede028556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <div class=\"container\">
        <h2 class=\"BodyTitle\">ExiaLan</h2>
        <div class=\"row\">
            <div class=\"col-md-12\" id=\"ArticlePhoto\">
                <img src=\"../public/img/exialan.jpg\" class=\"photosize\">
            </div>
            <div class=\"col-md-12\" id=\"ArticleDetails\">
                <p>Description : <p>
                <p>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"<p>
                <p>Prix : EUR xx.xx<p>
                    <br>
                    <br>
                <div class=\"ProfilBouton\">
                    <input class=\"btn btn-primary\" type=\"submit\" value=\"Ajouter au panier\">
                </div>
            </div>
        </div>

    </div>
";
        
        $__internal_ee347ec3fee94d1abddfe1a9c6a7e35c71630e2f3c94eff5dc7d987ede028556->leave($__internal_ee347ec3fee94d1abddfe1a9c6a7e35c71630e2f3c94eff5dc7d987ede028556_prof);

        
        $__internal_53cab00d07477ecde1f86abf5011012d24477410194f83150ef526fcd4f2541e->leave($__internal_53cab00d07477ecde1f86abf5011012d24477410194f83150ef526fcd4f2541e_prof);

    }

    public function getTemplateName()
    {
        return "SiteBundle:Pages:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 10,  80 => 9,  62 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SiteBundle::base.html.twig\" %}

{% block style %}
    <link rel=\"stylesheet\" href=\"../../public/css/pages/activite.css\" type=\"text/css\" />
{% endblock %}

{% block title  %}{{ activity.name }}{% endblock %}

{% block content %}
    <div class=\"container\">
        <h2 class=\"BodyTitle\">ExiaLan</h2>
        <div class=\"row\">
            <div class=\"col-md-12\" id=\"ArticlePhoto\">
                <img src=\"../public/img/exialan.jpg\" class=\"photosize\">
            </div>
            <div class=\"col-md-12\" id=\"ArticleDetails\">
                <p>Description : <p>
                <p>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"<p>
                <p>Prix : EUR xx.xx<p>
                    <br>
                    <br>
                <div class=\"ProfilBouton\">
                    <input class=\"btn btn-primary\" type=\"submit\" value=\"Ajouter au panier\">
                </div>
            </div>
        </div>

    </div>
{% endblock %}", "SiteBundle:Pages:article.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/SiteBundle/Resources/views/Pages/article.html.twig");
    }
}
