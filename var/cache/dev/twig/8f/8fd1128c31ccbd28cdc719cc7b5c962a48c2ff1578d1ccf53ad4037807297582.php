<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_392825967cba0e40c3af0aa0118691dd7690d090b395be3871807dce4c63c597 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_c1aebe8d1bce27ebc483130a7485370a9925bed641ea93f951db665ba36633ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1aebe8d1bce27ebc483130a7485370a9925bed641ea93f951db665ba36633ba->enter($__internal_c1aebe8d1bce27ebc483130a7485370a9925bed641ea93f951db665ba36633ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_2c9e653092a75057567f632df2a57bc282ec0d3dc33884b18d52d6fec6dbb158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c9e653092a75057567f632df2a57bc282ec0d3dc33884b18d52d6fec6dbb158->enter($__internal_2c9e653092a75057567f632df2a57bc282ec0d3dc33884b18d52d6fec6dbb158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1aebe8d1bce27ebc483130a7485370a9925bed641ea93f951db665ba36633ba->leave($__internal_c1aebe8d1bce27ebc483130a7485370a9925bed641ea93f951db665ba36633ba_prof);

        
        $__internal_2c9e653092a75057567f632df2a57bc282ec0d3dc33884b18d52d6fec6dbb158->leave($__internal_2c9e653092a75057567f632df2a57bc282ec0d3dc33884b18d52d6fec6dbb158_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c5e20227a00991f2c6bd6f572d567e671a7e1c1532b24d8b4e5e048f73399385 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5e20227a00991f2c6bd6f572d567e671a7e1c1532b24d8b4e5e048f73399385->enter($__internal_c5e20227a00991f2c6bd6f572d567e671a7e1c1532b24d8b4e5e048f73399385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c7a8343a8862761dfc5fe9672a6d14a66fdd58f6e36ee10e7d6d28abf4425535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7a8343a8862761dfc5fe9672a6d14a66fdd58f6e36ee10e7d6d28abf4425535->enter($__internal_c7a8343a8862761dfc5fe9672a6d14a66fdd58f6e36ee10e7d6d28abf4425535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_c7a8343a8862761dfc5fe9672a6d14a66fdd58f6e36ee10e7d6d28abf4425535->leave($__internal_c7a8343a8862761dfc5fe9672a6d14a66fdd58f6e36ee10e7d6d28abf4425535_prof);

        
        $__internal_c5e20227a00991f2c6bd6f572d567e671a7e1c1532b24d8b4e5e048f73399385->leave($__internal_c5e20227a00991f2c6bd6f572d567e671a7e1c1532b24d8b4e5e048f73399385_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
