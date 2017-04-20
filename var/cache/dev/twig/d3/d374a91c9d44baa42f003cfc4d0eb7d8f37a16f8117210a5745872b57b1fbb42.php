<?php

/* SiteBundle:Pages:contact.html.twig */
class __TwigTemplate_7f220d66d503d5111b17716b64ac27375e228272183bb3a3f4e2433955f12e0b extends Twig_Template
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
        $__internal_fccdab009b810bd760a6a5bf050b95adb1faed0e8bec336f59bf1a578458dda9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fccdab009b810bd760a6a5bf050b95adb1faed0e8bec336f59bf1a578458dda9->enter($__internal_fccdab009b810bd760a6a5bf050b95adb1faed0e8bec336f59bf1a578458dda9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:contact.html.twig"));

        $__internal_939b4a6ae88b0490535878c8630ccb70815a8e1572d9d57c3294c556a606d9e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_939b4a6ae88b0490535878c8630ccb70815a8e1572d9d57c3294c556a606d9e2->enter($__internal_939b4a6ae88b0490535878c8630ccb70815a8e1572d9d57c3294c556a606d9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fccdab009b810bd760a6a5bf050b95adb1faed0e8bec336f59bf1a578458dda9->leave($__internal_fccdab009b810bd760a6a5bf050b95adb1faed0e8bec336f59bf1a578458dda9_prof);

        
        $__internal_939b4a6ae88b0490535878c8630ccb70815a8e1572d9d57c3294c556a606d9e2->leave($__internal_939b4a6ae88b0490535878c8630ccb70815a8e1572d9d57c3294c556a606d9e2_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_9a6120cb56e191a20ad03e0e4b09b2bfa454dde1b2fac4c05a5ebc016fbf10c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a6120cb56e191a20ad03e0e4b09b2bfa454dde1b2fac4c05a5ebc016fbf10c9->enter($__internal_9a6120cb56e191a20ad03e0e4b09b2bfa454dde1b2fac4c05a5ebc016fbf10c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_2abf7ac159d4ca00e392442d397bc80b917ca28d1d6981906463d5e7b59503fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2abf7ac159d4ca00e392442d397bc80b917ca28d1d6981906463d5e7b59503fc->enter($__internal_2abf7ac159d4ca00e392442d397bc80b917ca28d1d6981906463d5e7b59503fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../public/css/pages/contact.css\" type=\"text/css\" />
";
        
        $__internal_2abf7ac159d4ca00e392442d397bc80b917ca28d1d6981906463d5e7b59503fc->leave($__internal_2abf7ac159d4ca00e392442d397bc80b917ca28d1d6981906463d5e7b59503fc_prof);

        
        $__internal_9a6120cb56e191a20ad03e0e4b09b2bfa454dde1b2fac4c05a5ebc016fbf10c9->leave($__internal_9a6120cb56e191a20ad03e0e4b09b2bfa454dde1b2fac4c05a5ebc016fbf10c9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_40ccebb34372daec49823f4f2868dfd9a26858feac54bc1328de83a593fa09b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40ccebb34372daec49823f4f2868dfd9a26858feac54bc1328de83a593fa09b1->enter($__internal_40ccebb34372daec49823f4f2868dfd9a26858feac54bc1328de83a593fa09b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_678820667a8172f44fff1d15959103824ca258e79a290c4c4dabaf94acbd0d4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_678820667a8172f44fff1d15959103824ca258e79a290c4c4dabaf94acbd0d4f->enter($__internal_678820667a8172f44fff1d15959103824ca258e79a290c4c4dabaf94acbd0d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_678820667a8172f44fff1d15959103824ca258e79a290c4c4dabaf94acbd0d4f->leave($__internal_678820667a8172f44fff1d15959103824ca258e79a290c4c4dabaf94acbd0d4f_prof);

        
        $__internal_40ccebb34372daec49823f4f2868dfd9a26858feac54bc1328de83a593fa09b1->leave($__internal_40ccebb34372daec49823f4f2868dfd9a26858feac54bc1328de83a593fa09b1_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_4ba4f58da682ab8da430ae62aa8c14f7ea685d46aabc5268debabe390e316fef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ba4f58da682ab8da430ae62aa8c14f7ea685d46aabc5268debabe390e316fef->enter($__internal_4ba4f58da682ab8da430ae62aa8c14f7ea685d46aabc5268debabe390e316fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_bc73ad2a1ff95529baad8e9a9024470dc7b9275a0a67def229d53d966fd059d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc73ad2a1ff95529baad8e9a9024470dc7b9275a0a67def229d53d966fd059d0->enter($__internal_bc73ad2a1ff95529baad8e9a9024470dc7b9275a0a67def229d53d966fd059d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_bc73ad2a1ff95529baad8e9a9024470dc7b9275a0a67def229d53d966fd059d0->leave($__internal_bc73ad2a1ff95529baad8e9a9024470dc7b9275a0a67def229d53d966fd059d0_prof);

        
        $__internal_4ba4f58da682ab8da430ae62aa8c14f7ea685d46aabc5268debabe390e316fef->leave($__internal_4ba4f58da682ab8da430ae62aa8c14f7ea685d46aabc5268debabe390e316fef_prof);

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
