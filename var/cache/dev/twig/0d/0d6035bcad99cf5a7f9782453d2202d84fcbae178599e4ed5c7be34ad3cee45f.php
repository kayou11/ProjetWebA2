<?php

/* SiteBundle:Pages:galerie_album.html.twig */
class __TwigTemplate_c693d1bce8777125f7ecf297bb2c521ee2d980df83cea2502b6179b2b36fe0dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SiteBundle::base.html.twig", "SiteBundle:Pages:galerie_album.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SiteBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_455e3c1e28f35bfef34a8118f950864a6924fe54597d61b648266012a257eb46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_455e3c1e28f35bfef34a8118f950864a6924fe54597d61b648266012a257eb46->enter($__internal_455e3c1e28f35bfef34a8118f950864a6924fe54597d61b648266012a257eb46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:galerie_album.html.twig"));

        $__internal_921f29fd4ecd0d372a679b67619a59484ff4e6937104abb16a9dd2eb3959cd53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_921f29fd4ecd0d372a679b67619a59484ff4e6937104abb16a9dd2eb3959cd53->enter($__internal_921f29fd4ecd0d372a679b67619a59484ff4e6937104abb16a9dd2eb3959cd53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:galerie_album.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_455e3c1e28f35bfef34a8118f950864a6924fe54597d61b648266012a257eb46->leave($__internal_455e3c1e28f35bfef34a8118f950864a6924fe54597d61b648266012a257eb46_prof);

        
        $__internal_921f29fd4ecd0d372a679b67619a59484ff4e6937104abb16a9dd2eb3959cd53->leave($__internal_921f29fd4ecd0d372a679b67619a59484ff4e6937104abb16a9dd2eb3959cd53_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_7e702752b69ee29542104753e00291a61689015d0510ef72c652ca3b1afbc12f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e702752b69ee29542104753e00291a61689015d0510ef72c652ca3b1afbc12f->enter($__internal_7e702752b69ee29542104753e00291a61689015d0510ef72c652ca3b1afbc12f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_c406bed3e9a1d558d7cd930e73bf576cbfa055c06ed2c73ff53e7226bcb1448d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c406bed3e9a1d558d7cd930e73bf576cbfa055c06ed2c73ff53e7226bcb1448d->enter($__internal_c406bed3e9a1d558d7cd930e73bf576cbfa055c06ed2c73ff53e7226bcb1448d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../public/css/pages/galerie_album.css\" type=\"text/css\" />
";
        
        $__internal_c406bed3e9a1d558d7cd930e73bf576cbfa055c06ed2c73ff53e7226bcb1448d->leave($__internal_c406bed3e9a1d558d7cd930e73bf576cbfa055c06ed2c73ff53e7226bcb1448d_prof);

        
        $__internal_7e702752b69ee29542104753e00291a61689015d0510ef72c652ca3b1afbc12f->leave($__internal_7e702752b69ee29542104753e00291a61689015d0510ef72c652ca3b1afbc12f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c9b370f474778c5628632aa9c36b0f8c9a1a3190a6163cbc819af42268986fc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9b370f474778c5628632aa9c36b0f8c9a1a3190a6163cbc819af42268986fc3->enter($__internal_c9b370f474778c5628632aa9c36b0f8c9a1a3190a6163cbc819af42268986fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_18986d2a1df9d99075427920dd02ca1ce02a3aa999a09e8cb118b19ff07a838c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18986d2a1df9d99075427920dd02ca1ce02a3aa999a09e8cb118b19ff07a838c->enter($__internal_18986d2a1df9d99075427920dd02ca1ce02a3aa999a09e8cb118b19ff07a838c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Galerie photos";
        
        $__internal_18986d2a1df9d99075427920dd02ca1ce02a3aa999a09e8cb118b19ff07a838c->leave($__internal_18986d2a1df9d99075427920dd02ca1ce02a3aa999a09e8cb118b19ff07a838c_prof);

        
        $__internal_c9b370f474778c5628632aa9c36b0f8c9a1a3190a6163cbc819af42268986fc3->leave($__internal_c9b370f474778c5628632aa9c36b0f8c9a1a3190a6163cbc819af42268986fc3_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_a64e4162a33a745c07b4fccdc224c7703ea06aca8ffb3345eca3a7958ca21320 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a64e4162a33a745c07b4fccdc224c7703ea06aca8ffb3345eca3a7958ca21320->enter($__internal_a64e4162a33a745c07b4fccdc224c7703ea06aca8ffb3345eca3a7958ca21320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d7cc862353c0f609f4b026518df4653583f9769ed5c77765e3f30c5253bd229f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7cc862353c0f609f4b026518df4653583f9769ed5c77765e3f30c5253bd229f->enter($__internal_d7cc862353c0f609f4b026518df4653583f9769ed5c77765e3f30c5253bd229f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "
    <div class=\"navbar-wrapper\">
        <div class=\"container\">
            <div class=\"navbar navbar-inverse\" role=\"navigation\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <a class=\"navbar-brand\" href=\"#\">Galerie album</a>
                        <button class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    </div>
                    <div class=\"navbar-collapse collapse\">
                        <ul class=\"nav navbar-nav text-center\">
                            <li id=\"s1\" class=\"clink\">
                                <a href=\"#\" data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\">Album 1</a>
                            </li>
                            <li id=\"s2\" class=\"clink\"><a href=\"#\" data-target=\"#myCarousel\" data-slide-to=\"1\">Album 2</a></li>
                            <li id=\"s3\" class=\"clink\"><a href=\"#\" data-target=\"#myCarousel\" data-slide-to=\"2\">Album 3</a></li>
                            <li id=\"s4\" class=\"clink\"><a href=\"#\" data-target=\"#myCarousel\" data-slide-to=\"3\">Album 4</a></li>
                            <li id=\"s5\" class=\"clink\"><a href=\"#\" data-target=\"#myCarousel\" data-slide-to=\"4\">Album 5</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id=\"home\" class=\"header\">
        <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
            <div class=\"carousel-inner\">

                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new Twig_Error_Runtime('Variable "activity" does not exist.', 43, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["images"]) {
            // line 44
            echo "                <div class=\"item active\">
                    <div class=\"container\">
                        <div id=\"slide1\" class=\"masonry\">
                            <div class=\"post-box col-lg-4 col-md-4 col-sm-4\">
                                <img class=\"img-responsive img-thumbnail\" src=\"";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["images"], "name", array()), "html", null, true);
            echo "\">
                                <p><button class=\"btn btn-primary\">Enregistrer</button></p>
                                <p><button class=\"btn btn-primary\">Supprimer</button></p>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['images'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_d7cc862353c0f609f4b026518df4653583f9769ed5c77765e3f30c5253bd229f->leave($__internal_d7cc862353c0f609f4b026518df4653583f9769ed5c77765e3f30c5253bd229f_prof);

        
        $__internal_a64e4162a33a745c07b4fccdc224c7703ea06aca8ffb3345eca3a7958ca21320->leave($__internal_a64e4162a33a745c07b4fccdc224c7703ea06aca8ffb3345eca3a7958ca21320_prof);

    }

    // line 60
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_9fe93928258b62072402b83dcc4b6a5682816dcbb2c9d8335024f15c63dcf24f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fe93928258b62072402b83dcc4b6a5682816dcbb2c9d8335024f15c63dcf24f->enter($__internal_9fe93928258b62072402b83dcc4b6a5682816dcbb2c9d8335024f15c63dcf24f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_2272eeada73f5525f69a236920febabe6a2a45dc4503996f17b8b704254538d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2272eeada73f5525f69a236920febabe6a2a45dc4503996f17b8b704254538d6->enter($__internal_2272eeada73f5525f69a236920febabe6a2a45dc4503996f17b8b704254538d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 61
        echo "    <script type=\"text/javascript\" src=\"../public/js/page_album.js\"></script>
";
        
        $__internal_2272eeada73f5525f69a236920febabe6a2a45dc4503996f17b8b704254538d6->leave($__internal_2272eeada73f5525f69a236920febabe6a2a45dc4503996f17b8b704254538d6_prof);

        
        $__internal_9fe93928258b62072402b83dcc4b6a5682816dcbb2c9d8335024f15c63dcf24f->leave($__internal_9fe93928258b62072402b83dcc4b6a5682816dcbb2c9d8335024f15c63dcf24f_prof);

    }

    public function getTemplateName()
    {
        return "SiteBundle:Pages:galerie_album.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 61,  162 => 60,  149 => 56,  135 => 48,  129 => 44,  125 => 43,  90 => 10,  81 => 9,  63 => 7,  52 => 4,  43 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SiteBundle::base.html.twig\" %}

{% block style %}
    <link rel=\"stylesheet\" href=\"../public/css/pages/galerie_album.css\" type=\"text/css\" />
{% endblock %}

{% block title  %}Galerie photos{% endblock %}

{% block content %}

    <div class=\"navbar-wrapper\">
        <div class=\"container\">
            <div class=\"navbar navbar-inverse\" role=\"navigation\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <a class=\"navbar-brand\" href=\"#\">Galerie album</a>
                        <button class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    </div>
                    <div class=\"navbar-collapse collapse\">
                        <ul class=\"nav navbar-nav text-center\">
                            <li id=\"s1\" class=\"clink\">
                                <a href=\"#\" data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\">Album 1</a>
                            </li>
                            <li id=\"s2\" class=\"clink\"><a href=\"#\" data-target=\"#myCarousel\" data-slide-to=\"1\">Album 2</a></li>
                            <li id=\"s3\" class=\"clink\"><a href=\"#\" data-target=\"#myCarousel\" data-slide-to=\"2\">Album 3</a></li>
                            <li id=\"s4\" class=\"clink\"><a href=\"#\" data-target=\"#myCarousel\" data-slide-to=\"3\">Album 4</a></li>
                            <li id=\"s5\" class=\"clink\"><a href=\"#\" data-target=\"#myCarousel\" data-slide-to=\"4\">Album 5</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id=\"home\" class=\"header\">
        <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
            <div class=\"carousel-inner\">

                {% for images in activity %}
                <div class=\"item active\">
                    <div class=\"container\">
                        <div id=\"slide1\" class=\"masonry\">
                            <div class=\"post-box col-lg-4 col-md-4 col-sm-4\">
                                <img class=\"img-responsive img-thumbnail\" src=\"{{ images.name }}\">
                                <p><button class=\"btn btn-primary\">Enregistrer</button></p>
                                <p><button class=\"btn btn-primary\">Supprimer</button></p>
                            </div>
                        </div>
                    </div>
                </div>
                {% endfor %}
            </div>
        </div>
    </div>
{% endblock %}
{% block scripts %}
    <script type=\"text/javascript\" src=\"../public/js/page_album.js\"></script>
{% endblock %}", "SiteBundle:Pages:galerie_album.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/SiteBundle/Resources/views/Pages/galerie_album.html.twig");
    }
}
