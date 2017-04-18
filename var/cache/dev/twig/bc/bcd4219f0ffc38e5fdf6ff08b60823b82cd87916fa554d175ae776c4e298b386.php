<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_c134052a626b2b0f37e436803a06b13725825e6ae831aa3849162ebf35d50106 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_a7dbae73be59ce8bf4fe7579241f93084dfe13a4a59a4bce8c5d306a54f653d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7dbae73be59ce8bf4fe7579241f93084dfe13a4a59a4bce8c5d306a54f653d9->enter($__internal_a7dbae73be59ce8bf4fe7579241f93084dfe13a4a59a4bce8c5d306a54f653d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_09984a69130ae74711fcc08397281759586fb0f0961a9119eede0431e220c977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09984a69130ae74711fcc08397281759586fb0f0961a9119eede0431e220c977->enter($__internal_09984a69130ae74711fcc08397281759586fb0f0961a9119eede0431e220c977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7dbae73be59ce8bf4fe7579241f93084dfe13a4a59a4bce8c5d306a54f653d9->leave($__internal_a7dbae73be59ce8bf4fe7579241f93084dfe13a4a59a4bce8c5d306a54f653d9_prof);

        
        $__internal_09984a69130ae74711fcc08397281759586fb0f0961a9119eede0431e220c977->leave($__internal_09984a69130ae74711fcc08397281759586fb0f0961a9119eede0431e220c977_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8b75f0d171709090a560bd2049972439cef4eb753ff8603c16997441038a03d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b75f0d171709090a560bd2049972439cef4eb753ff8603c16997441038a03d9->enter($__internal_8b75f0d171709090a560bd2049972439cef4eb753ff8603c16997441038a03d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2a546f18cb5972443f0ce9e4c1445c3741947cc61ae9f49d79ed34014f4f5fb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a546f18cb5972443f0ce9e4c1445c3741947cc61ae9f49d79ed34014f4f5fb3->enter($__internal_2a546f18cb5972443f0ce9e4c1445c3741947cc61ae9f49d79ed34014f4f5fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_2a546f18cb5972443f0ce9e4c1445c3741947cc61ae9f49d79ed34014f4f5fb3->leave($__internal_2a546f18cb5972443f0ce9e4c1445c3741947cc61ae9f49d79ed34014f4f5fb3_prof);

        
        $__internal_8b75f0d171709090a560bd2049972439cef4eb753ff8603c16997441038a03d9->leave($__internal_8b75f0d171709090a560bd2049972439cef4eb753ff8603c16997441038a03d9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
