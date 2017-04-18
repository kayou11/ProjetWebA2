<?php

/* SiteBundle:Pages:contact.html.twig */
class __TwigTemplate_7aecac85df696698a6786f06c72064f6f8fa72d68ad6b11b72b2d626754b4d67 extends Twig_Template
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
        $__internal_125f2c16268b2295162afd627286dfe9dd188e0ffbcadf7283719646d3e46222 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_125f2c16268b2295162afd627286dfe9dd188e0ffbcadf7283719646d3e46222->enter($__internal_125f2c16268b2295162afd627286dfe9dd188e0ffbcadf7283719646d3e46222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:contact.html.twig"));

        $__internal_a7d3befe96399778c0cb088752d85642845dcbe6168349699746b182b7b12101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7d3befe96399778c0cb088752d85642845dcbe6168349699746b182b7b12101->enter($__internal_a7d3befe96399778c0cb088752d85642845dcbe6168349699746b182b7b12101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_125f2c16268b2295162afd627286dfe9dd188e0ffbcadf7283719646d3e46222->leave($__internal_125f2c16268b2295162afd627286dfe9dd188e0ffbcadf7283719646d3e46222_prof);

        
        $__internal_a7d3befe96399778c0cb088752d85642845dcbe6168349699746b182b7b12101->leave($__internal_a7d3befe96399778c0cb088752d85642845dcbe6168349699746b182b7b12101_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_2154723f991e83079394f45dabc09938abe69c1942bf23e42f9ceea62739748d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2154723f991e83079394f45dabc09938abe69c1942bf23e42f9ceea62739748d->enter($__internal_2154723f991e83079394f45dabc09938abe69c1942bf23e42f9ceea62739748d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_5ab0cbf3abe406b5af85862f4e43a31f359caf1ec0553e22d17a7cf4bb96d1d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ab0cbf3abe406b5af85862f4e43a31f359caf1ec0553e22d17a7cf4bb96d1d9->enter($__internal_5ab0cbf3abe406b5af85862f4e43a31f359caf1ec0553e22d17a7cf4bb96d1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../public/css/pages/contact.css\" type=\"text/css\" />
";
        
        $__internal_5ab0cbf3abe406b5af85862f4e43a31f359caf1ec0553e22d17a7cf4bb96d1d9->leave($__internal_5ab0cbf3abe406b5af85862f4e43a31f359caf1ec0553e22d17a7cf4bb96d1d9_prof);

        
        $__internal_2154723f991e83079394f45dabc09938abe69c1942bf23e42f9ceea62739748d->leave($__internal_2154723f991e83079394f45dabc09938abe69c1942bf23e42f9ceea62739748d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d450bbc2517a971ae30e5b12b30fcca13e17d14f7852da9c926d69f63fa21c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d450bbc2517a971ae30e5b12b30fcca13e17d14f7852da9c926d69f63fa21c8->enter($__internal_1d450bbc2517a971ae30e5b12b30fcca13e17d14f7852da9c926d69f63fa21c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_97397869c47b1fef897fa3a9403f7218ca1eccfe46951fb14401afc4db616200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97397869c47b1fef897fa3a9403f7218ca1eccfe46951fb14401afc4db616200->enter($__internal_97397869c47b1fef897fa3a9403f7218ca1eccfe46951fb14401afc4db616200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Galerie photos";
        
        $__internal_97397869c47b1fef897fa3a9403f7218ca1eccfe46951fb14401afc4db616200->leave($__internal_97397869c47b1fef897fa3a9403f7218ca1eccfe46951fb14401afc4db616200_prof);

        
        $__internal_1d450bbc2517a971ae30e5b12b30fcca13e17d14f7852da9c926d69f63fa21c8->leave($__internal_1d450bbc2517a971ae30e5b12b30fcca13e17d14f7852da9c926d69f63fa21c8_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_c5713998f9738c07967bec4ab214607a5adf461f0c7642b5fd326108f14cbb6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5713998f9738c07967bec4ab214607a5adf461f0c7642b5fd326108f14cbb6e->enter($__internal_c5713998f9738c07967bec4ab214607a5adf461f0c7642b5fd326108f14cbb6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ed30a4380249e4330581549073a4ff494d1b644e906414697fd5e6082e0d3225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed30a4380249e4330581549073a4ff494d1b644e906414697fd5e6082e0d3225->enter($__internal_ed30a4380249e4330581549073a4ff494d1b644e906414697fd5e6082e0d3225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_ed30a4380249e4330581549073a4ff494d1b644e906414697fd5e6082e0d3225->leave($__internal_ed30a4380249e4330581549073a4ff494d1b644e906414697fd5e6082e0d3225_prof);

        
        $__internal_c5713998f9738c07967bec4ab214607a5adf461f0c7642b5fd326108f14cbb6e->leave($__internal_c5713998f9738c07967bec4ab214607a5adf461f0c7642b5fd326108f14cbb6e_prof);

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

{% block title  %}Galerie photos{% endblock %}

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
