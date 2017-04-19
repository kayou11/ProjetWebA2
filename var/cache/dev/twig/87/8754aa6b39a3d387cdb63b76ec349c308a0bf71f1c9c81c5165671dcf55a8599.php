<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_4132a89a278c0af9d908f168af65a82ebf5844fcc20a64fceac072d96c6a5bf4 extends Twig_Template
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
        $__internal_86680d728b0b56a6758fa9690a8e95ff1cbe847561716c167800d1594ab4190b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86680d728b0b56a6758fa9690a8e95ff1cbe847561716c167800d1594ab4190b->enter($__internal_86680d728b0b56a6758fa9690a8e95ff1cbe847561716c167800d1594ab4190b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_3d8c7e8a3d62e0616ed7e0fe88a4e65b54d1dc01ec1743d58cadb8c07282fbcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d8c7e8a3d62e0616ed7e0fe88a4e65b54d1dc01ec1743d58cadb8c07282fbcc->enter($__internal_3d8c7e8a3d62e0616ed7e0fe88a4e65b54d1dc01ec1743d58cadb8c07282fbcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86680d728b0b56a6758fa9690a8e95ff1cbe847561716c167800d1594ab4190b->leave($__internal_86680d728b0b56a6758fa9690a8e95ff1cbe847561716c167800d1594ab4190b_prof);

        
        $__internal_3d8c7e8a3d62e0616ed7e0fe88a4e65b54d1dc01ec1743d58cadb8c07282fbcc->leave($__internal_3d8c7e8a3d62e0616ed7e0fe88a4e65b54d1dc01ec1743d58cadb8c07282fbcc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9a677cafcfebce9be4ea2a5dd2bddb23fa3778774366565ed24a1518d57dd2b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a677cafcfebce9be4ea2a5dd2bddb23fa3778774366565ed24a1518d57dd2b3->enter($__internal_9a677cafcfebce9be4ea2a5dd2bddb23fa3778774366565ed24a1518d57dd2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f9a0eb62bbcda3fd42ba1c4b4f646b9112128e24bc2f2c2a928d1f0ad2a42567 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a0eb62bbcda3fd42ba1c4b4f646b9112128e24bc2f2c2a928d1f0ad2a42567->enter($__internal_f9a0eb62bbcda3fd42ba1c4b4f646b9112128e24bc2f2c2a928d1f0ad2a42567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_f9a0eb62bbcda3fd42ba1c4b4f646b9112128e24bc2f2c2a928d1f0ad2a42567->leave($__internal_f9a0eb62bbcda3fd42ba1c4b4f646b9112128e24bc2f2c2a928d1f0ad2a42567_prof);

        
        $__internal_9a677cafcfebce9be4ea2a5dd2bddb23fa3778774366565ed24a1518d57dd2b3->leave($__internal_9a677cafcfebce9be4ea2a5dd2bddb23fa3778774366565ed24a1518d57dd2b3_prof);

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
