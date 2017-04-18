<?php

/* SiteBundle:Pages:membresbde.html.twig */
class __TwigTemplate_0c18813fc60878f1d51ff185c740958f39336cdd01f4226241b575752ac95841 extends Twig_Template
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
        $__internal_03b21e7186f56cf04bbcbd1512addf255d3a0810621ab7bce299e5bca2b5c444 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03b21e7186f56cf04bbcbd1512addf255d3a0810621ab7bce299e5bca2b5c444->enter($__internal_03b21e7186f56cf04bbcbd1512addf255d3a0810621ab7bce299e5bca2b5c444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:membresbde.html.twig"));

        $__internal_775ecc8024e458fe08f750affee21f36433c9437efa6f38086974a6f93eeafd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_775ecc8024e458fe08f750affee21f36433c9437efa6f38086974a6f93eeafd5->enter($__internal_775ecc8024e458fe08f750affee21f36433c9437efa6f38086974a6f93eeafd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:membresbde.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03b21e7186f56cf04bbcbd1512addf255d3a0810621ab7bce299e5bca2b5c444->leave($__internal_03b21e7186f56cf04bbcbd1512addf255d3a0810621ab7bce299e5bca2b5c444_prof);

        
        $__internal_775ecc8024e458fe08f750affee21f36433c9437efa6f38086974a6f93eeafd5->leave($__internal_775ecc8024e458fe08f750affee21f36433c9437efa6f38086974a6f93eeafd5_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_f44710f826b4185c886753f367a00a908926ff4573dd0d03d4cef7b3855183ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f44710f826b4185c886753f367a00a908926ff4573dd0d03d4cef7b3855183ac->enter($__internal_f44710f826b4185c886753f367a00a908926ff4573dd0d03d4cef7b3855183ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_8c207caa18743e056a7cd0fa781333c7212ff2cae7435657c476e2409da486e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c207caa18743e056a7cd0fa781333c7212ff2cae7435657c476e2409da486e2->enter($__internal_8c207caa18743e056a7cd0fa781333c7212ff2cae7435657c476e2409da486e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../public/css/pages/membresbde.css\" type=\"text/css\" />
";
        
        $__internal_8c207caa18743e056a7cd0fa781333c7212ff2cae7435657c476e2409da486e2->leave($__internal_8c207caa18743e056a7cd0fa781333c7212ff2cae7435657c476e2409da486e2_prof);

        
        $__internal_f44710f826b4185c886753f367a00a908926ff4573dd0d03d4cef7b3855183ac->leave($__internal_f44710f826b4185c886753f367a00a908926ff4573dd0d03d4cef7b3855183ac_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_356645491af6ce1395dd086af9123703200d252395bdaeae839a9d378c23ea0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_356645491af6ce1395dd086af9123703200d252395bdaeae839a9d378c23ea0a->enter($__internal_356645491af6ce1395dd086af9123703200d252395bdaeae839a9d378c23ea0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d15d36d3efc9f453f89de0b39e80e191fc7c64acc08b49f0a999c18034fe41dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d15d36d3efc9f453f89de0b39e80e191fc7c64acc08b49f0a999c18034fe41dd->enter($__internal_d15d36d3efc9f453f89de0b39e80e191fc7c64acc08b49f0a999c18034fe41dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Galerie photos";
        
        $__internal_d15d36d3efc9f453f89de0b39e80e191fc7c64acc08b49f0a999c18034fe41dd->leave($__internal_d15d36d3efc9f453f89de0b39e80e191fc7c64acc08b49f0a999c18034fe41dd_prof);

        
        $__internal_356645491af6ce1395dd086af9123703200d252395bdaeae839a9d378c23ea0a->leave($__internal_356645491af6ce1395dd086af9123703200d252395bdaeae839a9d378c23ea0a_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_8988f920f4d948927862a8925f996883363bcc0c69644f5ed371101461d0d996 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8988f920f4d948927862a8925f996883363bcc0c69644f5ed371101461d0d996->enter($__internal_8988f920f4d948927862a8925f996883363bcc0c69644f5ed371101461d0d996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_dd5c74153e7a1dbe8ce6484bf8b22c3ec097aab743f8e4516e53457e6db7cd0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd5c74153e7a1dbe8ce6484bf8b22c3ec097aab743f8e4516e53457e6db7cd0b->enter($__internal_dd5c74153e7a1dbe8ce6484bf8b22c3ec097aab743f8e4516e53457e6db7cd0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_dd5c74153e7a1dbe8ce6484bf8b22c3ec097aab743f8e4516e53457e6db7cd0b->leave($__internal_dd5c74153e7a1dbe8ce6484bf8b22c3ec097aab743f8e4516e53457e6db7cd0b_prof);

        
        $__internal_8988f920f4d948927862a8925f996883363bcc0c69644f5ed371101461d0d996->leave($__internal_8988f920f4d948927862a8925f996883363bcc0c69644f5ed371101461d0d996_prof);

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
