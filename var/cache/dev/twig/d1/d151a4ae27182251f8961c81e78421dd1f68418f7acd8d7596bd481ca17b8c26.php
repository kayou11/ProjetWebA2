<?php

/* SiteBundle:Pages:contact.html.twig */
class __TwigTemplate_3859ff8006417e9158c772cb43f13f857f523a731b7ab17653220f7e5c28b29d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SiteBundle::base.html.twig", "SiteBundle:Pages:contact.html.twig", 1);
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
        $__internal_eb88a2fab7d406f51812029af22178fe02bfdfe91a4d30acfb9e96b5bf704b04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb88a2fab7d406f51812029af22178fe02bfdfe91a4d30acfb9e96b5bf704b04->enter($__internal_eb88a2fab7d406f51812029af22178fe02bfdfe91a4d30acfb9e96b5bf704b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:contact.html.twig"));

        $__internal_a70b43a18a8bd9897e5a8c67981008b924e1b6e994a0e4f6955f840a4fb59a13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a70b43a18a8bd9897e5a8c67981008b924e1b6e994a0e4f6955f840a4fb59a13->enter($__internal_a70b43a18a8bd9897e5a8c67981008b924e1b6e994a0e4f6955f840a4fb59a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb88a2fab7d406f51812029af22178fe02bfdfe91a4d30acfb9e96b5bf704b04->leave($__internal_eb88a2fab7d406f51812029af22178fe02bfdfe91a4d30acfb9e96b5bf704b04_prof);

        
        $__internal_a70b43a18a8bd9897e5a8c67981008b924e1b6e994a0e4f6955f840a4fb59a13->leave($__internal_a70b43a18a8bd9897e5a8c67981008b924e1b6e994a0e4f6955f840a4fb59a13_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_edabe654deab74bd407654df016b5910f8915c253d65b566ff65b88a651d82ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edabe654deab74bd407654df016b5910f8915c253d65b566ff65b88a651d82ba->enter($__internal_edabe654deab74bd407654df016b5910f8915c253d65b566ff65b88a651d82ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_1ba28c9d9967714b409b5402d4692bfb2111240525245292b2e3e07339eb10e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ba28c9d9967714b409b5402d4692bfb2111240525245292b2e3e07339eb10e1->enter($__internal_1ba28c9d9967714b409b5402d4692bfb2111240525245292b2e3e07339eb10e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../public/css/pages/contact.css\" type=\"text/css\" />
";
        
        $__internal_1ba28c9d9967714b409b5402d4692bfb2111240525245292b2e3e07339eb10e1->leave($__internal_1ba28c9d9967714b409b5402d4692bfb2111240525245292b2e3e07339eb10e1_prof);

        
        $__internal_edabe654deab74bd407654df016b5910f8915c253d65b566ff65b88a651d82ba->leave($__internal_edabe654deab74bd407654df016b5910f8915c253d65b566ff65b88a651d82ba_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ba120b4109e0f1293a1248a4087b1f41461636fc9e1c7c0cafba0c3640ac8ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ba120b4109e0f1293a1248a4087b1f41461636fc9e1c7c0cafba0c3640ac8ba->enter($__internal_1ba120b4109e0f1293a1248a4087b1f41461636fc9e1c7c0cafba0c3640ac8ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ee9d20203aa9e1ca192be68f1a153ab3d3ed3ea420a69d74de3c63dc0d8568c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee9d20203aa9e1ca192be68f1a153ab3d3ed3ea420a69d74de3c63dc0d8568c8->enter($__internal_ee9d20203aa9e1ca192be68f1a153ab3d3ed3ea420a69d74de3c63dc0d8568c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_ee9d20203aa9e1ca192be68f1a153ab3d3ed3ea420a69d74de3c63dc0d8568c8->leave($__internal_ee9d20203aa9e1ca192be68f1a153ab3d3ed3ea420a69d74de3c63dc0d8568c8_prof);

        
        $__internal_1ba120b4109e0f1293a1248a4087b1f41461636fc9e1c7c0cafba0c3640ac8ba->leave($__internal_1ba120b4109e0f1293a1248a4087b1f41461636fc9e1c7c0cafba0c3640ac8ba_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_5ca33d53345fbd9f97e8997a61a2a3d5e13c843304ab2400050b8b545174f3c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ca33d53345fbd9f97e8997a61a2a3d5e13c843304ab2400050b8b545174f3c8->enter($__internal_5ca33d53345fbd9f97e8997a61a2a3d5e13c843304ab2400050b8b545174f3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_173de31d8b2add132d8f0d38d7919baa095fe170f40e4ef4bd03bbacea9089ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_173de31d8b2add132d8f0d38d7919baa095fe170f40e4ef4bd03bbacea9089ff->enter($__internal_173de31d8b2add132d8f0d38d7919baa095fe170f40e4ef4bd03bbacea9089ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <div id=\"content\">
        <div class=\"container\">
            <h2 class=\"BodyTitle\">Contact</h2>
            <div class=\"PositionBoutton\">
                <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_le_bde");
        echo "\"><button onclick=\"PassageBDERouge()\" id=\"BouttonMembreBDE\">Membres du BDE</button></a>
                <button onclick=\"PassageContactRouge()\" id=\"BouttonContact\">Contact</button><br>
                <div class=\"row\">
                    <div class=\"col-md-8\">
                        <p>Envoyer un mail au BDE pour soumettre une activité ou pour toutes autres informations </p>
                        <br>
                        <p>Sujet : </p>
                        <input type=\"text\" name=\"Objet\">
                        <br>
                        <br>
                        <br>
                        <p>Message : </p><textarea name=\"comments\" id=\"comments\" cols=\"50\" rows=\"6\" placeholder=\"Notez votre message ici!\"></textarea><br>
                        <button type=\"\">Pièce jointe</button><br><br>
                        <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_173de31d8b2add132d8f0d38d7919baa095fe170f40e4ef4bd03bbacea9089ff->leave($__internal_173de31d8b2add132d8f0d38d7919baa095fe170f40e4ef4bd03bbacea9089ff_prof);

        
        $__internal_5ca33d53345fbd9f97e8997a61a2a3d5e13c843304ab2400050b8b545174f3c8->leave($__internal_5ca33d53345fbd9f97e8997a61a2a3d5e13c843304ab2400050b8b545174f3c8_prof);

    }

    public function getTemplateName()
    {
        return "SiteBundle:Pages:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 14,  89 => 10,  80 => 9,  62 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SiteBundle::base.html.twig\" %}

{% block style %}
    <link rel=\"stylesheet\" href=\"../public/css/pages/contact.css\" type=\"text/css\" />
{% endblock %}

{% block title  %}Contact{% endblock %}

{% block content %}
    <div id=\"content\">
        <div class=\"container\">
            <h2 class=\"BodyTitle\">Contact</h2>
            <div class=\"PositionBoutton\">
                <a href=\"{{ path('site_le_bde') }}\"><button onclick=\"PassageBDERouge()\" id=\"BouttonMembreBDE\">Membres du BDE</button></a>
                <button onclick=\"PassageContactRouge()\" id=\"BouttonContact\">Contact</button><br>
                <div class=\"row\">
                    <div class=\"col-md-8\">
                        <p>Envoyer un mail au BDE pour soumettre une activité ou pour toutes autres informations </p>
                        <br>
                        <p>Sujet : </p>
                        <input type=\"text\" name=\"Objet\">
                        <br>
                        <br>
                        <br>
                        <p>Message : </p><textarea name=\"comments\" id=\"comments\" cols=\"50\" rows=\"6\" placeholder=\"Notez votre message ici!\"></textarea><br>
                        <button type=\"\">Pièce jointe</button><br><br>
                        <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "SiteBundle:Pages:contact.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/SiteBundle/Resources/views/Pages/contact.html.twig");
    }
}
