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
        $__internal_254a1f360673f7f9088803fa3bda60b773cfd1db9d9bb558073f6780da3f2f22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_254a1f360673f7f9088803fa3bda60b773cfd1db9d9bb558073f6780da3f2f22->enter($__internal_254a1f360673f7f9088803fa3bda60b773cfd1db9d9bb558073f6780da3f2f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_814d9f8503becf468128ca4a96fd766698b57333d791e60408a3260aadd79456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_814d9f8503becf468128ca4a96fd766698b57333d791e60408a3260aadd79456->enter($__internal_814d9f8503becf468128ca4a96fd766698b57333d791e60408a3260aadd79456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_254a1f360673f7f9088803fa3bda60b773cfd1db9d9bb558073f6780da3f2f22->leave($__internal_254a1f360673f7f9088803fa3bda60b773cfd1db9d9bb558073f6780da3f2f22_prof);

        
        $__internal_814d9f8503becf468128ca4a96fd766698b57333d791e60408a3260aadd79456->leave($__internal_814d9f8503becf468128ca4a96fd766698b57333d791e60408a3260aadd79456_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ce37c1a858e472639b302584e777a57577e99c5ced584a28587c8fa80c438662 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce37c1a858e472639b302584e777a57577e99c5ced584a28587c8fa80c438662->enter($__internal_ce37c1a858e472639b302584e777a57577e99c5ced584a28587c8fa80c438662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2d978e4118d5c0cd47a3a4385f1eff1c004e3f44c7852771324426c0be299ba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d978e4118d5c0cd47a3a4385f1eff1c004e3f44c7852771324426c0be299ba3->enter($__internal_2d978e4118d5c0cd47a3a4385f1eff1c004e3f44c7852771324426c0be299ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_2d978e4118d5c0cd47a3a4385f1eff1c004e3f44c7852771324426c0be299ba3->leave($__internal_2d978e4118d5c0cd47a3a4385f1eff1c004e3f44c7852771324426c0be299ba3_prof);

        
        $__internal_ce37c1a858e472639b302584e777a57577e99c5ced584a28587c8fa80c438662->leave($__internal_ce37c1a858e472639b302584e777a57577e99c5ced584a28587c8fa80c438662_prof);

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
