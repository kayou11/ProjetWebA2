<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_226603587e9e392979c0bb798ea29989b4f0fa2004b9ed45990e4a5303817af5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_b6791285297e35dd00ac5f7edc1e6110ba1a77ec7d4088a26ddf4ae9a78a10a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6791285297e35dd00ac5f7edc1e6110ba1a77ec7d4088a26ddf4ae9a78a10a0->enter($__internal_b6791285297e35dd00ac5f7edc1e6110ba1a77ec7d4088a26ddf4ae9a78a10a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_b39146c17162e4af133a54a4f5aedc4352924f21f6e88ae77efbc54c855386ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b39146c17162e4af133a54a4f5aedc4352924f21f6e88ae77efbc54c855386ba->enter($__internal_b39146c17162e4af133a54a4f5aedc4352924f21f6e88ae77efbc54c855386ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6791285297e35dd00ac5f7edc1e6110ba1a77ec7d4088a26ddf4ae9a78a10a0->leave($__internal_b6791285297e35dd00ac5f7edc1e6110ba1a77ec7d4088a26ddf4ae9a78a10a0_prof);

        
        $__internal_b39146c17162e4af133a54a4f5aedc4352924f21f6e88ae77efbc54c855386ba->leave($__internal_b39146c17162e4af133a54a4f5aedc4352924f21f6e88ae77efbc54c855386ba_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_129aa52f26844ef2548965f0c8fbe98c9d39a45ec5ad71fa9313433500dae1c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_129aa52f26844ef2548965f0c8fbe98c9d39a45ec5ad71fa9313433500dae1c8->enter($__internal_129aa52f26844ef2548965f0c8fbe98c9d39a45ec5ad71fa9313433500dae1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cb29aef40cde5dfc468f70904efbc732a77c3e0dbd0989ace469a06f419c9318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb29aef40cde5dfc468f70904efbc732a77c3e0dbd0989ace469a06f419c9318->enter($__internal_cb29aef40cde5dfc468f70904efbc732a77c3e0dbd0989ace469a06f419c9318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_cb29aef40cde5dfc468f70904efbc732a77c3e0dbd0989ace469a06f419c9318->leave($__internal_cb29aef40cde5dfc468f70904efbc732a77c3e0dbd0989ace469a06f419c9318_prof);

        
        $__internal_129aa52f26844ef2548965f0c8fbe98c9d39a45ec5ad71fa9313433500dae1c8->leave($__internal_129aa52f26844ef2548965f0c8fbe98c9d39a45ec5ad71fa9313433500dae1c8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
