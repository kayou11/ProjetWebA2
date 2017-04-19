<?php

/* SiteBundle:Pages:membresbde.html.twig */
class __TwigTemplate_61bd2897ab9d6c75e44503a34f3575f195a1da245da941b3c03cf417212ded24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SiteBundle::base.html.twig", "SiteBundle:Pages:membresbde.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SiteBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0aedfe15f54cb2174c9221adcff40d9f1c1b449d122d7e9966670d0b0e29f7d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aedfe15f54cb2174c9221adcff40d9f1c1b449d122d7e9966670d0b0e29f7d1->enter($__internal_0aedfe15f54cb2174c9221adcff40d9f1c1b449d122d7e9966670d0b0e29f7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:membresbde.html.twig"));

        $__internal_f9a9330b6b28e2e2be267e742d3dedb51e9c8271e33a4670acb1887360a85217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a9330b6b28e2e2be267e742d3dedb51e9c8271e33a4670acb1887360a85217->enter($__internal_f9a9330b6b28e2e2be267e742d3dedb51e9c8271e33a4670acb1887360a85217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:membresbde.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0aedfe15f54cb2174c9221adcff40d9f1c1b449d122d7e9966670d0b0e29f7d1->leave($__internal_0aedfe15f54cb2174c9221adcff40d9f1c1b449d122d7e9966670d0b0e29f7d1_prof);

        
        $__internal_f9a9330b6b28e2e2be267e742d3dedb51e9c8271e33a4670acb1887360a85217->leave($__internal_f9a9330b6b28e2e2be267e742d3dedb51e9c8271e33a4670acb1887360a85217_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_bf7e90d38f818c50a37fcf5cc4b56fa8feaac67fb00bb04b33140a5ec4ae1c89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf7e90d38f818c50a37fcf5cc4b56fa8feaac67fb00bb04b33140a5ec4ae1c89->enter($__internal_bf7e90d38f818c50a37fcf5cc4b56fa8feaac67fb00bb04b33140a5ec4ae1c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_a5b3d3d06068ec62c22ed181efbb341f501d47dc96233f97dcc636f75447126e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5b3d3d06068ec62c22ed181efbb341f501d47dc96233f97dcc636f75447126e->enter($__internal_a5b3d3d06068ec62c22ed181efbb341f501d47dc96233f97dcc636f75447126e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../public/css/pages/membresbde.css\" type=\"text/css\" />
";
        
        $__internal_a5b3d3d06068ec62c22ed181efbb341f501d47dc96233f97dcc636f75447126e->leave($__internal_a5b3d3d06068ec62c22ed181efbb341f501d47dc96233f97dcc636f75447126e_prof);

        
        $__internal_bf7e90d38f818c50a37fcf5cc4b56fa8feaac67fb00bb04b33140a5ec4ae1c89->leave($__internal_bf7e90d38f818c50a37fcf5cc4b56fa8feaac67fb00bb04b33140a5ec4ae1c89_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_470a9a84ed5b10387d4238e386bf3a21c565ce0eb341fad5904746c28a8a32e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_470a9a84ed5b10387d4238e386bf3a21c565ce0eb341fad5904746c28a8a32e7->enter($__internal_470a9a84ed5b10387d4238e386bf3a21c565ce0eb341fad5904746c28a8a32e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d7b4456e332cabde1980d7d0d09fc5d4b51ae802aff1aac1a85d9800c3ac6c59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7b4456e332cabde1980d7d0d09fc5d4b51ae802aff1aac1a85d9800c3ac6c59->enter($__internal_d7b4456e332cabde1980d7d0d09fc5d4b51ae802aff1aac1a85d9800c3ac6c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Galerie photos";
        
        $__internal_d7b4456e332cabde1980d7d0d09fc5d4b51ae802aff1aac1a85d9800c3ac6c59->leave($__internal_d7b4456e332cabde1980d7d0d09fc5d4b51ae802aff1aac1a85d9800c3ac6c59_prof);

        
        $__internal_470a9a84ed5b10387d4238e386bf3a21c565ce0eb341fad5904746c28a8a32e7->leave($__internal_470a9a84ed5b10387d4238e386bf3a21c565ce0eb341fad5904746c28a8a32e7_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_68c25a845666b3d34786cba7939283f3ed1d1e4140c9c68ed60625ee3c67ebb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68c25a845666b3d34786cba7939283f3ed1d1e4140c9c68ed60625ee3c67ebb8->enter($__internal_68c25a845666b3d34786cba7939283f3ed1d1e4140c9c68ed60625ee3c67ebb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d7c86f58ff2dfa75e125ea4b3ec68a3f6f7d05c241d216ebb0f68a4675be469a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7c86f58ff2dfa75e125ea4b3ec68a3f6f7d05c241d216ebb0f68a4675be469a->enter($__internal_d7c86f58ff2dfa75e125ea4b3ec68a3f6f7d05c241d216ebb0f68a4675be469a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <div id=\"content\">
        <div class=\"container\">
            <h2 class=\"BodyTitle\">Contact</h2>
            <div class=\"PositionBoutton\">
                <button onclick=\"\" id=\"BouttonMembreBDE\">Membres du BDE</button>
                <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_contact");
        echo "\"><button onclick=\"\" id=\"BouttonContact\">Contact</button></a><br>
                <div class=\"row\">
                    <div class=\"col-md-8\">
                        <p>Président : JeanKévin</p>
                        <p>Mail : Jean@Jean.aa</p>
                        <p>Promo : A2</p>
                    </div>
                    <img src=\"kk.kk\" class=\"BorderImage\">
                    <br>
                    <br>
                    <br>
                    <div class=\"col-md-8\">
                        <p>Vice-Président : JeanKévin</p>
                        <p>Mail : Jean@Jean.aa</p>
                        <p>Promo : A2</p>
                    </div>
                    <img src=\"kk.kk\" class=\"BorderImage\">
                    <br>
                    <br>
                    <br>
                    <div class=\"col-md-8\">
                        <p>Secrétaire : JeanKévin</p>
                        <p>Mail : Jean@Jean.aa</p>
                        <p>Promo : A2</p>
                    </div>
                    <img src=\"kk.kk\" class=\"BorderImage\">
                    <br>
                    <br>
                    <br>
                    <div class=\"col-md-8\">
                        <p>Trésorier : JeanKévin</p>
                        <p>Mail : Jean@Jean.aa</p>
                        <p>Promo : A2</p>
                    </div>
                    <img src=\"kk.kk\" class=\"BorderImage\">
                </div>
            </div>
        </div>
";
        
        $__internal_d7c86f58ff2dfa75e125ea4b3ec68a3f6f7d05c241d216ebb0f68a4675be469a->leave($__internal_d7c86f58ff2dfa75e125ea4b3ec68a3f6f7d05c241d216ebb0f68a4675be469a_prof);

        
        $__internal_68c25a845666b3d34786cba7939283f3ed1d1e4140c9c68ed60625ee3c67ebb8->leave($__internal_68c25a845666b3d34786cba7939283f3ed1d1e4140c9c68ed60625ee3c67ebb8_prof);

    }

    public function getTemplateName()
    {
        return "SiteBundle:Pages:membresbde.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 15,  89 => 10,  80 => 9,  62 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SiteBundle::base.html.twig\" %}

{% block style %}
    <link rel=\"stylesheet\" href=\"../public/css/pages/membresbde.css\" type=\"text/css\" />
{% endblock %}

{% block title  %}Galerie photos{% endblock %}

{% block content %}
    <div id=\"content\">
        <div class=\"container\">
            <h2 class=\"BodyTitle\">Contact</h2>
            <div class=\"PositionBoutton\">
                <button onclick=\"\" id=\"BouttonMembreBDE\">Membres du BDE</button>
                <a href=\"{{ path('site_contact') }}\"><button onclick=\"\" id=\"BouttonContact\">Contact</button></a><br>
                <div class=\"row\">
                    <div class=\"col-md-8\">
                        <p>Président : JeanKévin</p>
                        <p>Mail : Jean@Jean.aa</p>
                        <p>Promo : A2</p>
                    </div>
                    <img src=\"kk.kk\" class=\"BorderImage\">
                    <br>
                    <br>
                    <br>
                    <div class=\"col-md-8\">
                        <p>Vice-Président : JeanKévin</p>
                        <p>Mail : Jean@Jean.aa</p>
                        <p>Promo : A2</p>
                    </div>
                    <img src=\"kk.kk\" class=\"BorderImage\">
                    <br>
                    <br>
                    <br>
                    <div class=\"col-md-8\">
                        <p>Secrétaire : JeanKévin</p>
                        <p>Mail : Jean@Jean.aa</p>
                        <p>Promo : A2</p>
                    </div>
                    <img src=\"kk.kk\" class=\"BorderImage\">
                    <br>
                    <br>
                    <br>
                    <div class=\"col-md-8\">
                        <p>Trésorier : JeanKévin</p>
                        <p>Mail : Jean@Jean.aa</p>
                        <p>Promo : A2</p>
                    </div>
                    <img src=\"kk.kk\" class=\"BorderImage\">
                </div>
            </div>
        </div>
{% endblock %}", "SiteBundle:Pages:membresbde.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/SiteBundle/Resources/views/Pages/membresbde.html.twig");
    }
}
