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
        $__internal_3bedcc59856b048280bd5e9ab2201a350608c076142059caeabd7f95da16b849 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bedcc59856b048280bd5e9ab2201a350608c076142059caeabd7f95da16b849->enter($__internal_3bedcc59856b048280bd5e9ab2201a350608c076142059caeabd7f95da16b849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:contact.html.twig"));

        $__internal_56a813aef04ff033f4548c2bc97263e0cc94c2d2972871112a2dff5ce7a235d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56a813aef04ff033f4548c2bc97263e0cc94c2d2972871112a2dff5ce7a235d7->enter($__internal_56a813aef04ff033f4548c2bc97263e0cc94c2d2972871112a2dff5ce7a235d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bedcc59856b048280bd5e9ab2201a350608c076142059caeabd7f95da16b849->leave($__internal_3bedcc59856b048280bd5e9ab2201a350608c076142059caeabd7f95da16b849_prof);

        
        $__internal_56a813aef04ff033f4548c2bc97263e0cc94c2d2972871112a2dff5ce7a235d7->leave($__internal_56a813aef04ff033f4548c2bc97263e0cc94c2d2972871112a2dff5ce7a235d7_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_1d9aec2e2f0d2258757aeba2f71e1fbcac00055ab7e4db906856cf911bdfb77b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d9aec2e2f0d2258757aeba2f71e1fbcac00055ab7e4db906856cf911bdfb77b->enter($__internal_1d9aec2e2f0d2258757aeba2f71e1fbcac00055ab7e4db906856cf911bdfb77b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_4aecb63915ed98592ec02a50a8830e8d8455701875ed9463ad067baba253e376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aecb63915ed98592ec02a50a8830e8d8455701875ed9463ad067baba253e376->enter($__internal_4aecb63915ed98592ec02a50a8830e8d8455701875ed9463ad067baba253e376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../public/css/pages/contact.css\" type=\"text/css\" />
";
        
        $__internal_4aecb63915ed98592ec02a50a8830e8d8455701875ed9463ad067baba253e376->leave($__internal_4aecb63915ed98592ec02a50a8830e8d8455701875ed9463ad067baba253e376_prof);

        
        $__internal_1d9aec2e2f0d2258757aeba2f71e1fbcac00055ab7e4db906856cf911bdfb77b->leave($__internal_1d9aec2e2f0d2258757aeba2f71e1fbcac00055ab7e4db906856cf911bdfb77b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_00c2db1b8c73ab129da0404cd97f909bd7cabd0af8747c5cb4f866aac618fb81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00c2db1b8c73ab129da0404cd97f909bd7cabd0af8747c5cb4f866aac618fb81->enter($__internal_00c2db1b8c73ab129da0404cd97f909bd7cabd0af8747c5cb4f866aac618fb81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_32aec2792cf7a3caa75f18f4981a393df6e16cdb8a68d34cf5e96694c84cb7dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32aec2792cf7a3caa75f18f4981a393df6e16cdb8a68d34cf5e96694c84cb7dc->enter($__internal_32aec2792cf7a3caa75f18f4981a393df6e16cdb8a68d34cf5e96694c84cb7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_32aec2792cf7a3caa75f18f4981a393df6e16cdb8a68d34cf5e96694c84cb7dc->leave($__internal_32aec2792cf7a3caa75f18f4981a393df6e16cdb8a68d34cf5e96694c84cb7dc_prof);

        
        $__internal_00c2db1b8c73ab129da0404cd97f909bd7cabd0af8747c5cb4f866aac618fb81->leave($__internal_00c2db1b8c73ab129da0404cd97f909bd7cabd0af8747c5cb4f866aac618fb81_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_b82d75f8fce6d017ae76fe5749b274b3e9711ef25e6e895b6d8532a5ad7a8c6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b82d75f8fce6d017ae76fe5749b274b3e9711ef25e6e895b6d8532a5ad7a8c6e->enter($__internal_b82d75f8fce6d017ae76fe5749b274b3e9711ef25e6e895b6d8532a5ad7a8c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3af4477e2ad9b7b56d966a5919690679caac8ac9cbf2bbbc75543d60142ffb4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3af4477e2ad9b7b56d966a5919690679caac8ac9cbf2bbbc75543d60142ffb4b->enter($__internal_3af4477e2ad9b7b56d966a5919690679caac8ac9cbf2bbbc75543d60142ffb4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_3af4477e2ad9b7b56d966a5919690679caac8ac9cbf2bbbc75543d60142ffb4b->leave($__internal_3af4477e2ad9b7b56d966a5919690679caac8ac9cbf2bbbc75543d60142ffb4b_prof);

        
        $__internal_b82d75f8fce6d017ae76fe5749b274b3e9711ef25e6e895b6d8532a5ad7a8c6e->leave($__internal_b82d75f8fce6d017ae76fe5749b274b3e9711ef25e6e895b6d8532a5ad7a8c6e_prof);

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
