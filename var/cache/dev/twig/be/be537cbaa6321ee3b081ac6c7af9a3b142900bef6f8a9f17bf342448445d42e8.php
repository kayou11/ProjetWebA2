<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_be96b9124e612fe557a02b077373b2d91c056f457240e88e80b37ea1c063f472 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_b108da60bd4dc5e49d6696ce203a0f87a3b99668bcaae702f34ff65fe6034890 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b108da60bd4dc5e49d6696ce203a0f87a3b99668bcaae702f34ff65fe6034890->enter($__internal_b108da60bd4dc5e49d6696ce203a0f87a3b99668bcaae702f34ff65fe6034890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_d781c67346f4e770d6bdfc8fbbc49ddf77634fc3f23897d0b434173948c52353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d781c67346f4e770d6bdfc8fbbc49ddf77634fc3f23897d0b434173948c52353->enter($__internal_d781c67346f4e770d6bdfc8fbbc49ddf77634fc3f23897d0b434173948c52353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b108da60bd4dc5e49d6696ce203a0f87a3b99668bcaae702f34ff65fe6034890->leave($__internal_b108da60bd4dc5e49d6696ce203a0f87a3b99668bcaae702f34ff65fe6034890_prof);

        
        $__internal_d781c67346f4e770d6bdfc8fbbc49ddf77634fc3f23897d0b434173948c52353->leave($__internal_d781c67346f4e770d6bdfc8fbbc49ddf77634fc3f23897d0b434173948c52353_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_52a12ba36a9b5f79859b9dc1b81da73b1dfbd0f0fa6f1000c98f2b5fb71f35f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52a12ba36a9b5f79859b9dc1b81da73b1dfbd0f0fa6f1000c98f2b5fb71f35f3->enter($__internal_52a12ba36a9b5f79859b9dc1b81da73b1dfbd0f0fa6f1000c98f2b5fb71f35f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e9ddea26909de3c1230cafa3bfc0d12aa2a18ce40bf46033cfd7607e77d251aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9ddea26909de3c1230cafa3bfc0d12aa2a18ce40bf46033cfd7607e77d251aa->enter($__internal_e9ddea26909de3c1230cafa3bfc0d12aa2a18ce40bf46033cfd7607e77d251aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_e9ddea26909de3c1230cafa3bfc0d12aa2a18ce40bf46033cfd7607e77d251aa->leave($__internal_e9ddea26909de3c1230cafa3bfc0d12aa2a18ce40bf46033cfd7607e77d251aa_prof);

        
        $__internal_52a12ba36a9b5f79859b9dc1b81da73b1dfbd0f0fa6f1000c98f2b5fb71f35f3->leave($__internal_52a12ba36a9b5f79859b9dc1b81da73b1dfbd0f0fa6f1000c98f2b5fb71f35f3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
