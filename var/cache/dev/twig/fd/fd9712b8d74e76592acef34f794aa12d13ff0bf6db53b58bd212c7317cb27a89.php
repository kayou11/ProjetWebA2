<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_4363926b3553d0f3dab3b248a4f2c797d49461b37e5629c3296b87d66ac7bda1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_cd4c895fb8a654af36ad9ee929c5dde376495feb73e392c5c54ca92125c5c74b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd4c895fb8a654af36ad9ee929c5dde376495feb73e392c5c54ca92125c5c74b->enter($__internal_cd4c895fb8a654af36ad9ee929c5dde376495feb73e392c5c54ca92125c5c74b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_a296b656f5a6bba025205c7c6490658a02096360a1ad60e7885f44fb6e142e99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a296b656f5a6bba025205c7c6490658a02096360a1ad60e7885f44fb6e142e99->enter($__internal_a296b656f5a6bba025205c7c6490658a02096360a1ad60e7885f44fb6e142e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd4c895fb8a654af36ad9ee929c5dde376495feb73e392c5c54ca92125c5c74b->leave($__internal_cd4c895fb8a654af36ad9ee929c5dde376495feb73e392c5c54ca92125c5c74b_prof);

        
        $__internal_a296b656f5a6bba025205c7c6490658a02096360a1ad60e7885f44fb6e142e99->leave($__internal_a296b656f5a6bba025205c7c6490658a02096360a1ad60e7885f44fb6e142e99_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2eb64aea862bda68818c2357a9dfa4c61cbe5ef9d1922ca8aff8a200967d19b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eb64aea862bda68818c2357a9dfa4c61cbe5ef9d1922ca8aff8a200967d19b8->enter($__internal_2eb64aea862bda68818c2357a9dfa4c61cbe5ef9d1922ca8aff8a200967d19b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cbb257cc0ff962a8d327ce0afed472d67df091ebc03c107096ad402c795c9a4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbb257cc0ff962a8d327ce0afed472d67df091ebc03c107096ad402c795c9a4c->enter($__internal_cbb257cc0ff962a8d327ce0afed472d67df091ebc03c107096ad402c795c9a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_cbb257cc0ff962a8d327ce0afed472d67df091ebc03c107096ad402c795c9a4c->leave($__internal_cbb257cc0ff962a8d327ce0afed472d67df091ebc03c107096ad402c795c9a4c_prof);

        
        $__internal_2eb64aea862bda68818c2357a9dfa4c61cbe5ef9d1922ca8aff8a200967d19b8->leave($__internal_2eb64aea862bda68818c2357a9dfa4c61cbe5ef9d1922ca8aff8a200967d19b8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
