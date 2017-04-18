<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_c368a701496fe6fa838f98791a720f60ee94ec72833e3019cc2b76635b64adea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_dc50ae677e10a2b7123a85b89f9a0d2fb87ebfb8d780cc0f5d9d4373cc2daa03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc50ae677e10a2b7123a85b89f9a0d2fb87ebfb8d780cc0f5d9d4373cc2daa03->enter($__internal_dc50ae677e10a2b7123a85b89f9a0d2fb87ebfb8d780cc0f5d9d4373cc2daa03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_a6ffd52354dda5b5391331c6f03596ccb1dbf4051eaca764bb357b2f8abc37ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6ffd52354dda5b5391331c6f03596ccb1dbf4051eaca764bb357b2f8abc37ff->enter($__internal_a6ffd52354dda5b5391331c6f03596ccb1dbf4051eaca764bb357b2f8abc37ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc50ae677e10a2b7123a85b89f9a0d2fb87ebfb8d780cc0f5d9d4373cc2daa03->leave($__internal_dc50ae677e10a2b7123a85b89f9a0d2fb87ebfb8d780cc0f5d9d4373cc2daa03_prof);

        
        $__internal_a6ffd52354dda5b5391331c6f03596ccb1dbf4051eaca764bb357b2f8abc37ff->leave($__internal_a6ffd52354dda5b5391331c6f03596ccb1dbf4051eaca764bb357b2f8abc37ff_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a707b182a6405f6b8755411eb181e2993c5a459ca1512d230efcf48db7c5ab16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a707b182a6405f6b8755411eb181e2993c5a459ca1512d230efcf48db7c5ab16->enter($__internal_a707b182a6405f6b8755411eb181e2993c5a459ca1512d230efcf48db7c5ab16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5aa1802e37cb2ffc40f2a5124fd201e3458f7171e9836e678e2629bfde9a474a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aa1802e37cb2ffc40f2a5124fd201e3458f7171e9836e678e2629bfde9a474a->enter($__internal_5aa1802e37cb2ffc40f2a5124fd201e3458f7171e9836e678e2629bfde9a474a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_5aa1802e37cb2ffc40f2a5124fd201e3458f7171e9836e678e2629bfde9a474a->leave($__internal_5aa1802e37cb2ffc40f2a5124fd201e3458f7171e9836e678e2629bfde9a474a_prof);

        
        $__internal_a707b182a6405f6b8755411eb181e2993c5a459ca1512d230efcf48db7c5ab16->leave($__internal_a707b182a6405f6b8755411eb181e2993c5a459ca1512d230efcf48db7c5ab16_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
