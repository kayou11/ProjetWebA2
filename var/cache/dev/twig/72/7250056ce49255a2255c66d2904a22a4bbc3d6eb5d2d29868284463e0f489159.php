<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_8823f3c351a64e6b7fe6aba7fff79457722a2b5683171a887f59171b752daafd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SiteBundle::base.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SiteBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3cfc6e29ff7e5491fe4d744c2e66f3c6120ff9775ac0b1b18d6dee7bcd003886 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cfc6e29ff7e5491fe4d744c2e66f3c6120ff9775ac0b1b18d6dee7bcd003886->enter($__internal_3cfc6e29ff7e5491fe4d744c2e66f3c6120ff9775ac0b1b18d6dee7bcd003886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_d39c4f969cac3cef0846168928a0ae8853da6d3cf739b371988fd2ee721f792d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d39c4f969cac3cef0846168928a0ae8853da6d3cf739b371988fd2ee721f792d->enter($__internal_d39c4f969cac3cef0846168928a0ae8853da6d3cf739b371988fd2ee721f792d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cfc6e29ff7e5491fe4d744c2e66f3c6120ff9775ac0b1b18d6dee7bcd003886->leave($__internal_3cfc6e29ff7e5491fe4d744c2e66f3c6120ff9775ac0b1b18d6dee7bcd003886_prof);

        
        $__internal_d39c4f969cac3cef0846168928a0ae8853da6d3cf739b371988fd2ee721f792d->leave($__internal_d39c4f969cac3cef0846168928a0ae8853da6d3cf739b371988fd2ee721f792d_prof);

    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
        $__internal_189ce72f169fc5a297d4cd58fd4ee29c32cc578fb506daa09cdfd722c87890ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_189ce72f169fc5a297d4cd58fd4ee29c32cc578fb506daa09cdfd722c87890ef->enter($__internal_189ce72f169fc5a297d4cd58fd4ee29c32cc578fb506daa09cdfd722c87890ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_0c96b7446894c911f54bc25e87a90295e9950731d007e80575a60f8d3b9b0d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c96b7446894c911f54bc25e87a90295e9950731d007e80575a60f8d3b9b0d40->enter($__internal_0c96b7446894c911f54bc25e87a90295e9950731d007e80575a60f8d3b9b0d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        
        $__internal_0c96b7446894c911f54bc25e87a90295e9950731d007e80575a60f8d3b9b0d40->leave($__internal_0c96b7446894c911f54bc25e87a90295e9950731d007e80575a60f8d3b9b0d40_prof);

        
        $__internal_189ce72f169fc5a297d4cd58fd4ee29c32cc578fb506daa09cdfd722c87890ef->leave($__internal_189ce72f169fc5a297d4cd58fd4ee29c32cc578fb506daa09cdfd722c87890ef_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_9886c1e392e89418e5eb7b975af6a7f1dc4171af2c0bc5259d7975fa34863af3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9886c1e392e89418e5eb7b975af6a7f1dc4171af2c0bc5259d7975fa34863af3->enter($__internal_9886c1e392e89418e5eb7b975af6a7f1dc4171af2c0bc5259d7975fa34863af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5e19577d4e5d9db289faef0109256cce5657d2b1aa4f91e5e534936eafa4b064 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e19577d4e5d9db289faef0109256cce5657d2b1aa4f91e5e534936eafa4b064->enter($__internal_5e19577d4e5d9db289faef0109256cce5657d2b1aa4f91e5e534936eafa4b064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    ";
        // line 5
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 7
        echo "
";
        
        $__internal_5e19577d4e5d9db289faef0109256cce5657d2b1aa4f91e5e534936eafa4b064->leave($__internal_5e19577d4e5d9db289faef0109256cce5657d2b1aa4f91e5e534936eafa4b064_prof);

        
        $__internal_9886c1e392e89418e5eb7b975af6a7f1dc4171af2c0bc5259d7975fa34863af3->leave($__internal_9886c1e392e89418e5eb7b975af6a7f1dc4171af2c0bc5259d7975fa34863af3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6f2edcd68fab85c4a9d4d0001bb1c4f20e97895e4866f89c946317389987a3ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f2edcd68fab85c4a9d4d0001bb1c4f20e97895e4866f89c946317389987a3ae->enter($__internal_6f2edcd68fab85c4a9d4d0001bb1c4f20e97895e4866f89c946317389987a3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_da953176e57094210e9f0a019100724330284aca3e48ae7e787d187f94a49ece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da953176e57094210e9f0a019100724330284aca3e48ae7e787d187f94a49ece->enter($__internal_da953176e57094210e9f0a019100724330284aca3e48ae7e787d187f94a49ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    ";
        
        $__internal_da953176e57094210e9f0a019100724330284aca3e48ae7e787d187f94a49ece->leave($__internal_da953176e57094210e9f0a019100724330284aca3e48ae7e787d187f94a49ece_prof);

        
        $__internal_6f2edcd68fab85c4a9d4d0001bb1c4f20e97895e4866f89c946317389987a3ae->leave($__internal_6f2edcd68fab85c4a9d4d0001bb1c4f20e97895e4866f89c946317389987a3ae_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 6,  84 => 5,  73 => 7,  71 => 5,  68 => 4,  59 => 3,  42 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SiteBundle::base.html.twig\" %}
{% block style %}{% endblock %}
{% block content %}

    {% block fos_user_content %}
    {% endblock fos_user_content %}

{% endblock %}", "@FOSUser/layout.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/UserBundle/Resources/views/layout.html.twig");
    }
}
