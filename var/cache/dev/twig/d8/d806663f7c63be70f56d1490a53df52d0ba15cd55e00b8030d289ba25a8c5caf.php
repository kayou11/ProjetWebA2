<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_f2538b35850f7394e669e9d1bd8943496937a546f6af8b87443f851dc64e20ce extends Twig_Template
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
        $__internal_9726606e5af9bf0fd95690195a28e635e1077702c7ec89de4ca33dea3bce1ad7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9726606e5af9bf0fd95690195a28e635e1077702c7ec89de4ca33dea3bce1ad7->enter($__internal_9726606e5af9bf0fd95690195a28e635e1077702c7ec89de4ca33dea3bce1ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_3e2f0c7990ef1d1cb149d088b1150f2d9ece55cc92ceaacb4fe8839d12b4281f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e2f0c7990ef1d1cb149d088b1150f2d9ece55cc92ceaacb4fe8839d12b4281f->enter($__internal_3e2f0c7990ef1d1cb149d088b1150f2d9ece55cc92ceaacb4fe8839d12b4281f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9726606e5af9bf0fd95690195a28e635e1077702c7ec89de4ca33dea3bce1ad7->leave($__internal_9726606e5af9bf0fd95690195a28e635e1077702c7ec89de4ca33dea3bce1ad7_prof);

        
        $__internal_3e2f0c7990ef1d1cb149d088b1150f2d9ece55cc92ceaacb4fe8839d12b4281f->leave($__internal_3e2f0c7990ef1d1cb149d088b1150f2d9ece55cc92ceaacb4fe8839d12b4281f_prof);

    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
        $__internal_3fa0b67eba256df79c7e5d948a04630f3d2f52c132a14391b7ab02c652a2cacf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fa0b67eba256df79c7e5d948a04630f3d2f52c132a14391b7ab02c652a2cacf->enter($__internal_3fa0b67eba256df79c7e5d948a04630f3d2f52c132a14391b7ab02c652a2cacf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_44c513171705a3313cca8a2ee3e1cfb54aaa37cdcf7b1a880a4ca85a861cd45f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44c513171705a3313cca8a2ee3e1cfb54aaa37cdcf7b1a880a4ca85a861cd45f->enter($__internal_44c513171705a3313cca8a2ee3e1cfb54aaa37cdcf7b1a880a4ca85a861cd45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        
        $__internal_44c513171705a3313cca8a2ee3e1cfb54aaa37cdcf7b1a880a4ca85a861cd45f->leave($__internal_44c513171705a3313cca8a2ee3e1cfb54aaa37cdcf7b1a880a4ca85a861cd45f_prof);

        
        $__internal_3fa0b67eba256df79c7e5d948a04630f3d2f52c132a14391b7ab02c652a2cacf->leave($__internal_3fa0b67eba256df79c7e5d948a04630f3d2f52c132a14391b7ab02c652a2cacf_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_c80784aa5c9548fbac6b9a7f0b0321b46dff696659ec088eca658488d5a64344 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c80784aa5c9548fbac6b9a7f0b0321b46dff696659ec088eca658488d5a64344->enter($__internal_c80784aa5c9548fbac6b9a7f0b0321b46dff696659ec088eca658488d5a64344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_38c5e8b40349b5bcbc08a9f4990ade4c3f65f5bd9a73ef1bc3f710a25ea6d60e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38c5e8b40349b5bcbc08a9f4990ade4c3f65f5bd9a73ef1bc3f710a25ea6d60e->enter($__internal_38c5e8b40349b5bcbc08a9f4990ade4c3f65f5bd9a73ef1bc3f710a25ea6d60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    ";
        // line 5
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 7
        echo "
";
        
        $__internal_38c5e8b40349b5bcbc08a9f4990ade4c3f65f5bd9a73ef1bc3f710a25ea6d60e->leave($__internal_38c5e8b40349b5bcbc08a9f4990ade4c3f65f5bd9a73ef1bc3f710a25ea6d60e_prof);

        
        $__internal_c80784aa5c9548fbac6b9a7f0b0321b46dff696659ec088eca658488d5a64344->leave($__internal_c80784aa5c9548fbac6b9a7f0b0321b46dff696659ec088eca658488d5a64344_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_423ca1d69bd8976f1633d2a9db656eb8071adc0875f8b86e04a3b600258770ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_423ca1d69bd8976f1633d2a9db656eb8071adc0875f8b86e04a3b600258770ff->enter($__internal_423ca1d69bd8976f1633d2a9db656eb8071adc0875f8b86e04a3b600258770ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b70db46784f3e2374013c64d577bb0463af4ba1551a89890987ad35ad1e982ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b70db46784f3e2374013c64d577bb0463af4ba1551a89890987ad35ad1e982ef->enter($__internal_b70db46784f3e2374013c64d577bb0463af4ba1551a89890987ad35ad1e982ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    ";
        
        $__internal_b70db46784f3e2374013c64d577bb0463af4ba1551a89890987ad35ad1e982ef->leave($__internal_b70db46784f3e2374013c64d577bb0463af4ba1551a89890987ad35ad1e982ef_prof);

        
        $__internal_423ca1d69bd8976f1633d2a9db656eb8071adc0875f8b86e04a3b600258770ff->leave($__internal_423ca1d69bd8976f1633d2a9db656eb8071adc0875f8b86e04a3b600258770ff_prof);

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
