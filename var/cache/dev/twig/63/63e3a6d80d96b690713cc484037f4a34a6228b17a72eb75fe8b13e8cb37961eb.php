<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_aabe2f4eb0632efc7cecb21b07216d24f43c1af873822a98691a6e5ce7988cd5 extends Twig_Template
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
        $__internal_fc3a35fb33011763f279cbef3751d5c836da2a79aef8f3696eabc188a4755e38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc3a35fb33011763f279cbef3751d5c836da2a79aef8f3696eabc188a4755e38->enter($__internal_fc3a35fb33011763f279cbef3751d5c836da2a79aef8f3696eabc188a4755e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_77a9c38f295359a8b893fb7eba5a6a28cdfcc347842bd613ffed833a7be326ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77a9c38f295359a8b893fb7eba5a6a28cdfcc347842bd613ffed833a7be326ab->enter($__internal_77a9c38f295359a8b893fb7eba5a6a28cdfcc347842bd613ffed833a7be326ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc3a35fb33011763f279cbef3751d5c836da2a79aef8f3696eabc188a4755e38->leave($__internal_fc3a35fb33011763f279cbef3751d5c836da2a79aef8f3696eabc188a4755e38_prof);

        
        $__internal_77a9c38f295359a8b893fb7eba5a6a28cdfcc347842bd613ffed833a7be326ab->leave($__internal_77a9c38f295359a8b893fb7eba5a6a28cdfcc347842bd613ffed833a7be326ab_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6012dc8a25d801f38193f8591ee72ed813becc0aaa49448af58433e74b228d6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6012dc8a25d801f38193f8591ee72ed813becc0aaa49448af58433e74b228d6c->enter($__internal_6012dc8a25d801f38193f8591ee72ed813becc0aaa49448af58433e74b228d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3141fbb485b8454df1b8b29fa45791e511a05372909f1d2c9951843fa0a30931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3141fbb485b8454df1b8b29fa45791e511a05372909f1d2c9951843fa0a30931->enter($__internal_3141fbb485b8454df1b8b29fa45791e511a05372909f1d2c9951843fa0a30931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_3141fbb485b8454df1b8b29fa45791e511a05372909f1d2c9951843fa0a30931->leave($__internal_3141fbb485b8454df1b8b29fa45791e511a05372909f1d2c9951843fa0a30931_prof);

        
        $__internal_6012dc8a25d801f38193f8591ee72ed813becc0aaa49448af58433e74b228d6c->leave($__internal_6012dc8a25d801f38193f8591ee72ed813becc0aaa49448af58433e74b228d6c_prof);

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
