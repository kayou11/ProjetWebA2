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
        $__internal_bc9ab63901847736665f0dbb8326e59e4fcdbca29cc0f906952fc7cc6f35382b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc9ab63901847736665f0dbb8326e59e4fcdbca29cc0f906952fc7cc6f35382b->enter($__internal_bc9ab63901847736665f0dbb8326e59e4fcdbca29cc0f906952fc7cc6f35382b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_968f9362b2771e6bf806b47b27b03db66ad6a5de96b70ea6526edf1f8dd095f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_968f9362b2771e6bf806b47b27b03db66ad6a5de96b70ea6526edf1f8dd095f8->enter($__internal_968f9362b2771e6bf806b47b27b03db66ad6a5de96b70ea6526edf1f8dd095f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc9ab63901847736665f0dbb8326e59e4fcdbca29cc0f906952fc7cc6f35382b->leave($__internal_bc9ab63901847736665f0dbb8326e59e4fcdbca29cc0f906952fc7cc6f35382b_prof);

        
        $__internal_968f9362b2771e6bf806b47b27b03db66ad6a5de96b70ea6526edf1f8dd095f8->leave($__internal_968f9362b2771e6bf806b47b27b03db66ad6a5de96b70ea6526edf1f8dd095f8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b6aef1bafd9952526583faff1585b7ff2dd6f8f0d298fa51a80dfa75fbc68bce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6aef1bafd9952526583faff1585b7ff2dd6f8f0d298fa51a80dfa75fbc68bce->enter($__internal_b6aef1bafd9952526583faff1585b7ff2dd6f8f0d298fa51a80dfa75fbc68bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2625311616da715c6718dfc1a6d0c4c81b328a1b403656a6bd31aea643a814cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2625311616da715c6718dfc1a6d0c4c81b328a1b403656a6bd31aea643a814cb->enter($__internal_2625311616da715c6718dfc1a6d0c4c81b328a1b403656a6bd31aea643a814cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_2625311616da715c6718dfc1a6d0c4c81b328a1b403656a6bd31aea643a814cb->leave($__internal_2625311616da715c6718dfc1a6d0c4c81b328a1b403656a6bd31aea643a814cb_prof);

        
        $__internal_b6aef1bafd9952526583faff1585b7ff2dd6f8f0d298fa51a80dfa75fbc68bce->leave($__internal_b6aef1bafd9952526583faff1585b7ff2dd6f8f0d298fa51a80dfa75fbc68bce_prof);

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
