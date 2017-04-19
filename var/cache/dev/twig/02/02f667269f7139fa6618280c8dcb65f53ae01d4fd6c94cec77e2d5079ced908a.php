<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_e3c96e8018ce0e36fac9f199acf50cbaf15f79abfe326082e561c434803c627d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_8a879a134ac3191f8a9e6d02a1cd8fcdd156f22e64c418358f8be1f7d6aab791 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a879a134ac3191f8a9e6d02a1cd8fcdd156f22e64c418358f8be1f7d6aab791->enter($__internal_8a879a134ac3191f8a9e6d02a1cd8fcdd156f22e64c418358f8be1f7d6aab791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_54408f616d0f2b918b6422328e907a3a65f1a83638a29ac273ca163eaab79520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54408f616d0f2b918b6422328e907a3a65f1a83638a29ac273ca163eaab79520->enter($__internal_54408f616d0f2b918b6422328e907a3a65f1a83638a29ac273ca163eaab79520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a879a134ac3191f8a9e6d02a1cd8fcdd156f22e64c418358f8be1f7d6aab791->leave($__internal_8a879a134ac3191f8a9e6d02a1cd8fcdd156f22e64c418358f8be1f7d6aab791_prof);

        
        $__internal_54408f616d0f2b918b6422328e907a3a65f1a83638a29ac273ca163eaab79520->leave($__internal_54408f616d0f2b918b6422328e907a3a65f1a83638a29ac273ca163eaab79520_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ae4091948fd05a78d394d4c89d0b719ed72db03944b6ef847da0f84debc033ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae4091948fd05a78d394d4c89d0b719ed72db03944b6ef847da0f84debc033ab->enter($__internal_ae4091948fd05a78d394d4c89d0b719ed72db03944b6ef847da0f84debc033ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_75fac5bd3ac7f3432be83f37fbe48cb8ab7da1f1edce58b74141d112535d95a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75fac5bd3ac7f3432be83f37fbe48cb8ab7da1f1edce58b74141d112535d95a4->enter($__internal_75fac5bd3ac7f3432be83f37fbe48cb8ab7da1f1edce58b74141d112535d95a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_75fac5bd3ac7f3432be83f37fbe48cb8ab7da1f1edce58b74141d112535d95a4->leave($__internal_75fac5bd3ac7f3432be83f37fbe48cb8ab7da1f1edce58b74141d112535d95a4_prof);

        
        $__internal_ae4091948fd05a78d394d4c89d0b719ed72db03944b6ef847da0f84debc033ab->leave($__internal_ae4091948fd05a78d394d4c89d0b719ed72db03944b6ef847da0f84debc033ab_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
