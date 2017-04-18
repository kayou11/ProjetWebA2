<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_e6c4eedca3ffc26ba45274d7f60e38e16c4fb9fe1a0ddc7fd4dc4ad8da9793b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@User/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@User/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5b4e6197b82eb2e4c610914ec29f34bf9689968453882fc0f83e12433e4238a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5b4e6197b82eb2e4c610914ec29f34bf9689968453882fc0f83e12433e4238a->enter($__internal_e5b4e6197b82eb2e4c610914ec29f34bf9689968453882fc0f83e12433e4238a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_257f954f5133deef77b97181fc125c765788cda9f396ae3aabdc8bbabc76d589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_257f954f5133deef77b97181fc125c765788cda9f396ae3aabdc8bbabc76d589->enter($__internal_257f954f5133deef77b97181fc125c765788cda9f396ae3aabdc8bbabc76d589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5b4e6197b82eb2e4c610914ec29f34bf9689968453882fc0f83e12433e4238a->leave($__internal_e5b4e6197b82eb2e4c610914ec29f34bf9689968453882fc0f83e12433e4238a_prof);

        
        $__internal_257f954f5133deef77b97181fc125c765788cda9f396ae3aabdc8bbabc76d589->leave($__internal_257f954f5133deef77b97181fc125c765788cda9f396ae3aabdc8bbabc76d589_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_73c35b7feb729519d2c6100b45045402c4d98764e126c49a5393d4235d0c09a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73c35b7feb729519d2c6100b45045402c4d98764e126c49a5393d4235d0c09a1->enter($__internal_73c35b7feb729519d2c6100b45045402c4d98764e126c49a5393d4235d0c09a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4ce7b88433607f578df62fd73989d781024c696180f37e97c144bae49dfb46aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ce7b88433607f578df62fd73989d781024c696180f37e97c144bae49dfb46aa->enter($__internal_4ce7b88433607f578df62fd73989d781024c696180f37e97c144bae49dfb46aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@User/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_4ce7b88433607f578df62fd73989d781024c696180f37e97c144bae49dfb46aa->leave($__internal_4ce7b88433607f578df62fd73989d781024c696180f37e97c144bae49dfb46aa_prof);

        
        $__internal_73c35b7feb729519d2c6100b45045402c4d98764e126c49a5393d4235d0c09a1->leave($__internal_73c35b7feb729519d2c6100b45045402c4d98764e126c49a5393d4235d0c09a1_prof);

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
        return new Twig_Source("{% extends \"@User/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@User/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/UserBundle/Resources/views/Profile/show.html.twig");
    }
}
