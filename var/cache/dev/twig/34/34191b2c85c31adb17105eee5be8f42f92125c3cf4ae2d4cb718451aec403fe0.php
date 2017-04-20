<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_c7e329ff82c495f9923c7534017b6a93795cdbd6029b1300c9845169823e9bcd extends Twig_Template
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
        $__internal_5a1d054114f9919ad4cedb4698b3e09ff949328f4480ff197400358837d8efac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a1d054114f9919ad4cedb4698b3e09ff949328f4480ff197400358837d8efac->enter($__internal_5a1d054114f9919ad4cedb4698b3e09ff949328f4480ff197400358837d8efac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_8e427d43ce4d44049a838d6d8f3adf7229c3ff379cd498dfe7a31e5b2e016b78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e427d43ce4d44049a838d6d8f3adf7229c3ff379cd498dfe7a31e5b2e016b78->enter($__internal_8e427d43ce4d44049a838d6d8f3adf7229c3ff379cd498dfe7a31e5b2e016b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a1d054114f9919ad4cedb4698b3e09ff949328f4480ff197400358837d8efac->leave($__internal_5a1d054114f9919ad4cedb4698b3e09ff949328f4480ff197400358837d8efac_prof);

        
        $__internal_8e427d43ce4d44049a838d6d8f3adf7229c3ff379cd498dfe7a31e5b2e016b78->leave($__internal_8e427d43ce4d44049a838d6d8f3adf7229c3ff379cd498dfe7a31e5b2e016b78_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_95a0eb7d2fb05e05390c82b52534b74f2db47a4d1176b77cb100614b14adea77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95a0eb7d2fb05e05390c82b52534b74f2db47a4d1176b77cb100614b14adea77->enter($__internal_95a0eb7d2fb05e05390c82b52534b74f2db47a4d1176b77cb100614b14adea77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1796c8d52cb6955c0a9418685543889cde5ccd2b203e4571965c3e918bc78d71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1796c8d52cb6955c0a9418685543889cde5ccd2b203e4571965c3e918bc78d71->enter($__internal_1796c8d52cb6955c0a9418685543889cde5ccd2b203e4571965c3e918bc78d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_1796c8d52cb6955c0a9418685543889cde5ccd2b203e4571965c3e918bc78d71->leave($__internal_1796c8d52cb6955c0a9418685543889cde5ccd2b203e4571965c3e918bc78d71_prof);

        
        $__internal_95a0eb7d2fb05e05390c82b52534b74f2db47a4d1176b77cb100614b14adea77->leave($__internal_95a0eb7d2fb05e05390c82b52534b74f2db47a4d1176b77cb100614b14adea77_prof);

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
