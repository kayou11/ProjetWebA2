<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_778af4653994879445c8e722b33e8178f2910936313a35e06904d3a554f3b9e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_ae17104361b8a3a6b0ed4996193fcb0744e486660518f534b34ef5631a42631f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae17104361b8a3a6b0ed4996193fcb0744e486660518f534b34ef5631a42631f->enter($__internal_ae17104361b8a3a6b0ed4996193fcb0744e486660518f534b34ef5631a42631f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_fb5b0cecfa016cd71c319767c2e25e7dfc9dc2f1175597d68c43d379ac697018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb5b0cecfa016cd71c319767c2e25e7dfc9dc2f1175597d68c43d379ac697018->enter($__internal_fb5b0cecfa016cd71c319767c2e25e7dfc9dc2f1175597d68c43d379ac697018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae17104361b8a3a6b0ed4996193fcb0744e486660518f534b34ef5631a42631f->leave($__internal_ae17104361b8a3a6b0ed4996193fcb0744e486660518f534b34ef5631a42631f_prof);

        
        $__internal_fb5b0cecfa016cd71c319767c2e25e7dfc9dc2f1175597d68c43d379ac697018->leave($__internal_fb5b0cecfa016cd71c319767c2e25e7dfc9dc2f1175597d68c43d379ac697018_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cc070e8f82f262f9e163483238f82fd10d8c08c4d3152a7a6e6cf9c85f623495 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc070e8f82f262f9e163483238f82fd10d8c08c4d3152a7a6e6cf9c85f623495->enter($__internal_cc070e8f82f262f9e163483238f82fd10d8c08c4d3152a7a6e6cf9c85f623495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8b1521235adfbc3c8689d2679453cc422884d7225545dc0b9eacd8455977f3e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b1521235adfbc3c8689d2679453cc422884d7225545dc0b9eacd8455977f3e2->enter($__internal_8b1521235adfbc3c8689d2679453cc422884d7225545dc0b9eacd8455977f3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_8b1521235adfbc3c8689d2679453cc422884d7225545dc0b9eacd8455977f3e2->leave($__internal_8b1521235adfbc3c8689d2679453cc422884d7225545dc0b9eacd8455977f3e2_prof);

        
        $__internal_cc070e8f82f262f9e163483238f82fd10d8c08c4d3152a7a6e6cf9c85f623495->leave($__internal_cc070e8f82f262f9e163483238f82fd10d8c08c4d3152a7a6e6cf9c85f623495_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
