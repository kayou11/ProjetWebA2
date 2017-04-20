<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_226603587e9e392979c0bb798ea29989b4f0fa2004b9ed45990e4a5303817af5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_70e9745ce47d034e9a2fdac7c4b6e30a86e3c8c874bb4cfc888952a320d364d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70e9745ce47d034e9a2fdac7c4b6e30a86e3c8c874bb4cfc888952a320d364d7->enter($__internal_70e9745ce47d034e9a2fdac7c4b6e30a86e3c8c874bb4cfc888952a320d364d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_ac1481714a303ab57941d0abfe0d12b0d101e8be297f622c946d2f5daf26ba40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac1481714a303ab57941d0abfe0d12b0d101e8be297f622c946d2f5daf26ba40->enter($__internal_ac1481714a303ab57941d0abfe0d12b0d101e8be297f622c946d2f5daf26ba40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70e9745ce47d034e9a2fdac7c4b6e30a86e3c8c874bb4cfc888952a320d364d7->leave($__internal_70e9745ce47d034e9a2fdac7c4b6e30a86e3c8c874bb4cfc888952a320d364d7_prof);

        
        $__internal_ac1481714a303ab57941d0abfe0d12b0d101e8be297f622c946d2f5daf26ba40->leave($__internal_ac1481714a303ab57941d0abfe0d12b0d101e8be297f622c946d2f5daf26ba40_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cea1fcc1652df88ad70ba92c3548ece18ad8366690ec2e3dd482ad860d189d91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cea1fcc1652df88ad70ba92c3548ece18ad8366690ec2e3dd482ad860d189d91->enter($__internal_cea1fcc1652df88ad70ba92c3548ece18ad8366690ec2e3dd482ad860d189d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d90063f9e80eedbc8a1a8ba89b666b43cc8737a807ca5c8ddc6145120f55c023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d90063f9e80eedbc8a1a8ba89b666b43cc8737a807ca5c8ddc6145120f55c023->enter($__internal_d90063f9e80eedbc8a1a8ba89b666b43cc8737a807ca5c8ddc6145120f55c023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_d90063f9e80eedbc8a1a8ba89b666b43cc8737a807ca5c8ddc6145120f55c023->leave($__internal_d90063f9e80eedbc8a1a8ba89b666b43cc8737a807ca5c8ddc6145120f55c023_prof);

        
        $__internal_cea1fcc1652df88ad70ba92c3548ece18ad8366690ec2e3dd482ad860d189d91->leave($__internal_cea1fcc1652df88ad70ba92c3548ece18ad8366690ec2e3dd482ad860d189d91_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
