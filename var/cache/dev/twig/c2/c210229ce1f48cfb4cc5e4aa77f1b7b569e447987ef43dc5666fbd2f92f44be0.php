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
        $__internal_921cd2515c8f74c6403b79e47c57fcfb7c1ad9472c203b3df84847e48fd25769 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_921cd2515c8f74c6403b79e47c57fcfb7c1ad9472c203b3df84847e48fd25769->enter($__internal_921cd2515c8f74c6403b79e47c57fcfb7c1ad9472c203b3df84847e48fd25769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_b1a468a571b83a0954add4c72588a48b91a93192e3b599d55246c6db5cfb447e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1a468a571b83a0954add4c72588a48b91a93192e3b599d55246c6db5cfb447e->enter($__internal_b1a468a571b83a0954add4c72588a48b91a93192e3b599d55246c6db5cfb447e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_921cd2515c8f74c6403b79e47c57fcfb7c1ad9472c203b3df84847e48fd25769->leave($__internal_921cd2515c8f74c6403b79e47c57fcfb7c1ad9472c203b3df84847e48fd25769_prof);

        
        $__internal_b1a468a571b83a0954add4c72588a48b91a93192e3b599d55246c6db5cfb447e->leave($__internal_b1a468a571b83a0954add4c72588a48b91a93192e3b599d55246c6db5cfb447e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_81147101f740760ad3fc0762da61b1d8f19e2edaa0771119bba7c67e78bc65e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81147101f740760ad3fc0762da61b1d8f19e2edaa0771119bba7c67e78bc65e6->enter($__internal_81147101f740760ad3fc0762da61b1d8f19e2edaa0771119bba7c67e78bc65e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_35652d5ceb11694fbc75f6791ef613e5b0dd6b629d9ea4c1e19107b029fb66ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35652d5ceb11694fbc75f6791ef613e5b0dd6b629d9ea4c1e19107b029fb66ce->enter($__internal_35652d5ceb11694fbc75f6791ef613e5b0dd6b629d9ea4c1e19107b029fb66ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_35652d5ceb11694fbc75f6791ef613e5b0dd6b629d9ea4c1e19107b029fb66ce->leave($__internal_35652d5ceb11694fbc75f6791ef613e5b0dd6b629d9ea4c1e19107b029fb66ce_prof);

        
        $__internal_81147101f740760ad3fc0762da61b1d8f19e2edaa0771119bba7c67e78bc65e6->leave($__internal_81147101f740760ad3fc0762da61b1d8f19e2edaa0771119bba7c67e78bc65e6_prof);

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
