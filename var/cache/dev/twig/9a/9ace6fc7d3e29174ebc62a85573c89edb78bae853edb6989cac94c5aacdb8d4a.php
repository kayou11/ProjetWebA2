<?php

/* SyliusAdminBundle:Security:login.html.twig */
class __TwigTemplate_a1c6d0949417a3846aefb812e86f6f452992fc468acef5411256431b56d0b731 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusUi/Layout/centered.html.twig", "SyliusAdminBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusUi/Layout/centered.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e9128c278b2f7ecf63f79b3db865480e34b3fc19ce61bbb03f4c17726081913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e9128c278b2f7ecf63f79b3db865480e34b3fc19ce61bbb03f4c17726081913->enter($__internal_4e9128c278b2f7ecf63f79b3db865480e34b3fc19ce61bbb03f4c17726081913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Security:login.html.twig"));

        $__internal_cf9a4fb5eddfe8dbf38daf2aad44268c260a15e0c31082c5ca62ae8950168aeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf9a4fb5eddfe8dbf38daf2aad44268c260a15e0c31082c5ca62ae8950168aeb->enter($__internal_cf9a4fb5eddfe8dbf38daf2aad44268c260a15e0c31082c5ca62ae8950168aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e9128c278b2f7ecf63f79b3db865480e34b3fc19ce61bbb03f4c17726081913->leave($__internal_4e9128c278b2f7ecf63f79b3db865480e34b3fc19ce61bbb03f4c17726081913_prof);

        
        $__internal_cf9a4fb5eddfe8dbf38daf2aad44268c260a15e0c31082c5ca62ae8950168aeb->leave($__internal_cf9a4fb5eddfe8dbf38daf2aad44268c260a15e0c31082c5ca62ae8950168aeb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_662e13dd2049364fd95ee1e658444aadedcc4efbd2c2bdb995a2402bf30b1775 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_662e13dd2049364fd95ee1e658444aadedcc4efbd2c2bdb995a2402bf30b1775->enter($__internal_662e13dd2049364fd95ee1e658444aadedcc4efbd2c2bdb995a2402bf30b1775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_599952dc593815d1a2a2f475f8a58c5427cf2aa76c422c3afed91744ddf1eca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_599952dc593815d1a2a2f475f8a58c5427cf2aa76c422c3afed91744ddf1eca7->enter($__internal_599952dc593815d1a2a2f475f8a58c5427cf2aa76c422c3afed91744ddf1eca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sylius | ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.administration_panel_login"), "html", null, true);
        
        $__internal_599952dc593815d1a2a2f475f8a58c5427cf2aa76c422c3afed91744ddf1eca7->leave($__internal_599952dc593815d1a2a2f475f8a58c5427cf2aa76c422c3afed91744ddf1eca7_prof);

        
        $__internal_662e13dd2049364fd95ee1e658444aadedcc4efbd2c2bdb995a2402bf30b1775->leave($__internal_662e13dd2049364fd95ee1e658444aadedcc4efbd2c2bdb995a2402bf30b1775_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6edfb7fea85c349b8037e8616eb7ecdbe8edef8a50658fccd8a3e0de39eed89d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6edfb7fea85c349b8037e8616eb7ecdbe8edef8a50658fccd8a3e0de39eed89d->enter($__internal_6edfb7fea85c349b8037e8616eb7ecdbe8edef8a50658fccd8a3e0de39eed89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b194553893e33dab0d0b78087c0ef2824e1947144af9fa17749f051c20e547eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b194553893e33dab0d0b78087c0ef2824e1947144af9fa17749f051c20e547eb->enter($__internal_b194553893e33dab0d0b78087c0ef2824e1947144af9fa17749f051c20e547eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->loadTemplate("@SyliusUi/_stylesheets.html.twig", "SyliusAdminBundle:Security:login.html.twig", 6)->display(array_merge($context, array("path" => "assets/admin/css/style.css")));
        
        $__internal_b194553893e33dab0d0b78087c0ef2824e1947144af9fa17749f051c20e547eb->leave($__internal_b194553893e33dab0d0b78087c0ef2824e1947144af9fa17749f051c20e547eb_prof);

        
        $__internal_6edfb7fea85c349b8037e8616eb7ecdbe8edef8a50658fccd8a3e0de39eed89d->leave($__internal_6edfb7fea85c349b8037e8616eb7ecdbe8edef8a50658fccd8a3e0de39eed89d_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_328f5e49b62370bd93e0298e32fe87595b6a6e07fd806809aba14f2af9d0f2fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_328f5e49b62370bd93e0298e32fe87595b6a6e07fd806809aba14f2af9d0f2fc->enter($__internal_328f5e49b62370bd93e0298e32fe87595b6a6e07fd806809aba14f2af9d0f2fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_fcef468d1a8d41f25da7538152c91dc03e985f98ec2d0cee25556f217fa75228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcef468d1a8d41f25da7538152c91dc03e985f98ec2d0cee25556f217fa75228->enter($__internal_fcef468d1a8d41f25da7538152c91dc03e985f98ec2d0cee25556f217fa75228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.login.before_content", array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        echo "

";
        // line 12
        $this->loadTemplate("@SyliusUi/Security/_login.html.twig", "SyliusAdminBundle:Security:login.html.twig", 12)->display(array_merge($context, array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_login_check"), "paths" => array("logo" => "assets/admin/img/logo.png"))));
        // line 13
        echo "
";
        // line 14
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.login.after_content", array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        echo "
";
        
        $__internal_fcef468d1a8d41f25da7538152c91dc03e985f98ec2d0cee25556f217fa75228->leave($__internal_fcef468d1a8d41f25da7538152c91dc03e985f98ec2d0cee25556f217fa75228_prof);

        
        $__internal_328f5e49b62370bd93e0298e32fe87595b6a6e07fd806809aba14f2af9d0f2fc->leave($__internal_328f5e49b62370bd93e0298e32fe87595b6a6e07fd806809aba14f2af9d0f2fc_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_06d5283948d8b5ef0a434b18dbdd0f81fe5d7bb8a8552c53a92855ab9838852f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06d5283948d8b5ef0a434b18dbdd0f81fe5d7bb8a8552c53a92855ab9838852f->enter($__internal_06d5283948d8b5ef0a434b18dbdd0f81fe5d7bb8a8552c53a92855ab9838852f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bf2b29f2a1c24d91616c4ea50c2d496a1370c872680e8a529adb34c0f8bd956b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf2b29f2a1c24d91616c4ea50c2d496a1370c872680e8a529adb34c0f8bd956b->enter($__internal_bf2b29f2a1c24d91616c4ea50c2d496a1370c872680e8a529adb34c0f8bd956b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "    ";
        $this->loadTemplate("@SyliusUi/_javascripts.html.twig", "SyliusAdminBundle:Security:login.html.twig", 18)->display(array_merge($context, array("path" => "assets/admin/js/app.js")));
        
        $__internal_bf2b29f2a1c24d91616c4ea50c2d496a1370c872680e8a529adb34c0f8bd956b->leave($__internal_bf2b29f2a1c24d91616c4ea50c2d496a1370c872680e8a529adb34c0f8bd956b_prof);

        
        $__internal_06d5283948d8b5ef0a434b18dbdd0f81fe5d7bb8a8552c53a92855ab9838852f->leave($__internal_06d5283948d8b5ef0a434b18dbdd0f81fe5d7bb8a8552c53a92855ab9838852f_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 18,  113 => 17,  101 => 14,  98 => 13,  96 => 12,  91 => 10,  82 => 9,  71 => 6,  62 => 5,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusUi/Layout/centered.html.twig' %}

{% block title %}Sylius | {{ 'sylius.ui.administration_panel_login'|trans }}{% endblock %}

{% block stylesheets %}
    {% include '@SyliusUi/_stylesheets.html.twig' with {'path': 'assets/admin/css/style.css'} %}
{% endblock %}

{% block content %}
{{ sonata_block_render_event('sylius.admin.login.before_content', {'form': form}) }}

{% include '@SyliusUi/Security/_login.html.twig' with {'action': path('sylius_admin_login_check'), 'paths': {'logo': 'assets/admin/img/logo.png'}} %}

{{ sonata_block_render_event('sylius.admin.login.after_content', {'form': form}) }}
{% endblock %}

{% block javascripts %}
    {% include '@SyliusUi/_javascripts.html.twig' with {'path': 'assets/admin/js/app.js'} %}
{% endblock %}
", "SyliusAdminBundle:Security:login.html.twig", "/Users/PierreKayou/Documents/Sites Web/projet/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Security/login.html.twig");
    }
}
