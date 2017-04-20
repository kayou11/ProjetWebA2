<?php

/* SiteBundle:Pages:activite.html.twig */
class __TwigTemplate_0b77f253c12631c6e110a6e467407ae39c0da6d84743882583bd53d7bda6edf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SiteBundle::base.html.twig", "SiteBundle:Pages:activite.html.twig", 1);
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
        $__internal_ec6c513435a318299e790686478431b28811b83e4955f9e0b1cf1e46aa724b80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec6c513435a318299e790686478431b28811b83e4955f9e0b1cf1e46aa724b80->enter($__internal_ec6c513435a318299e790686478431b28811b83e4955f9e0b1cf1e46aa724b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:activite.html.twig"));

        $__internal_74e734c0ec57f71420fb7d8dc54e13643bbdda74e414b9a54167f5a0deb2da5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74e734c0ec57f71420fb7d8dc54e13643bbdda74e414b9a54167f5a0deb2da5a->enter($__internal_74e734c0ec57f71420fb7d8dc54e13643bbdda74e414b9a54167f5a0deb2da5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:activite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec6c513435a318299e790686478431b28811b83e4955f9e0b1cf1e46aa724b80->leave($__internal_ec6c513435a318299e790686478431b28811b83e4955f9e0b1cf1e46aa724b80_prof);

        
        $__internal_74e734c0ec57f71420fb7d8dc54e13643bbdda74e414b9a54167f5a0deb2da5a->leave($__internal_74e734c0ec57f71420fb7d8dc54e13643bbdda74e414b9a54167f5a0deb2da5a_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_b0f5254eb0f88b57e908e2d559b2624bfd03ece07bd8dd2a00ae252bc6c969fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0f5254eb0f88b57e908e2d559b2624bfd03ece07bd8dd2a00ae252bc6c969fb->enter($__internal_b0f5254eb0f88b57e908e2d559b2624bfd03ece07bd8dd2a00ae252bc6c969fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_6097b3f24636ddaeb0f3c931ce10e7be2818c86ef002904edca2eba6aa777a49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6097b3f24636ddaeb0f3c931ce10e7be2818c86ef002904edca2eba6aa777a49->enter($__internal_6097b3f24636ddaeb0f3c931ce10e7be2818c86ef002904edca2eba6aa777a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../../public/css/pages/activite.css\" type=\"text/css\" />
";
        
        $__internal_6097b3f24636ddaeb0f3c931ce10e7be2818c86ef002904edca2eba6aa777a49->leave($__internal_6097b3f24636ddaeb0f3c931ce10e7be2818c86ef002904edca2eba6aa777a49_prof);

        
        $__internal_b0f5254eb0f88b57e908e2d559b2624bfd03ece07bd8dd2a00ae252bc6c969fb->leave($__internal_b0f5254eb0f88b57e908e2d559b2624bfd03ece07bd8dd2a00ae252bc6c969fb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa5e8093f33113e29e848ef392f1146bab011a3d41660d9512ab039d4fc06b9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa5e8093f33113e29e848ef392f1146bab011a3d41660d9512ab039d4fc06b9a->enter($__internal_aa5e8093f33113e29e848ef392f1146bab011a3d41660d9512ab039d4fc06b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_69b9558e58637ed8f77effe757559422ebeba43bcce9ee093935be3647c816e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69b9558e58637ed8f77effe757559422ebeba43bcce9ee093935be3647c816e6->enter($__internal_69b9558e58637ed8f77effe757559422ebeba43bcce9ee093935be3647c816e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new Twig_Error_Runtime('Variable "activity" does not exist.', 7, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        
        $__internal_69b9558e58637ed8f77effe757559422ebeba43bcce9ee093935be3647c816e6->leave($__internal_69b9558e58637ed8f77effe757559422ebeba43bcce9ee093935be3647c816e6_prof);

        
        $__internal_aa5e8093f33113e29e848ef392f1146bab011a3d41660d9512ab039d4fc06b9a->leave($__internal_aa5e8093f33113e29e848ef392f1146bab011a3d41660d9512ab039d4fc06b9a_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_c9c233e51ac77dc8a548f944f9a48d1fb8908979c8b28333720719feb553e6ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9c233e51ac77dc8a548f944f9a48d1fb8908979c8b28333720719feb553e6ac->enter($__internal_c9c233e51ac77dc8a548f944f9a48d1fb8908979c8b28333720719feb553e6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_16f00ce74eac207ec7c130be4d428a399b517749f7c7b6262c3d8b4212fdd559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16f00ce74eac207ec7c130be4d428a399b517749f7c7b6262c3d8b4212fdd559->enter($__internal_16f00ce74eac207ec7c130be4d428a399b517749f7c7b6262c3d8b4212fdd559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-lg-12\" id=\"ActivitePhoto\">
                <img src=\"../../public/img/jump_park.jpeg\" class=\"photosize\">
                <h2 class=\"BodyTitle\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new Twig_Error_Runtime('Variable "activity" does not exist.', 15, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "</h2>
            </div>
            <div class=\"col-lg-12\" id=\"ActiviteDetails\">
                <div class=\"col-md-3\">
                    <div class=\"ProfilBouton\">
                        <input class=\"btn btn-primary\" type=\"submit\" value=\"S'inscrire\">
                    </div>
                    <h3>Description</h3>
                    <p>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new Twig_Error_Runtime('Variable "activity" does not exist.', 23, $this->getSourceContext()); })()), "description", array()), "html", null, true);
        echo "<p>
                    <h3>Informations</h3>
                        <br>
                    <p>Date : 12/05/17</p>
                    <p>Où : ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new Twig_Error_Runtime('Variable "activity" does not exist.', 27, $this->getSourceContext()); })()), "location", array()), "html", null, true);
        echo "</p>
                    <br>
                    <p>Payante : ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new Twig_Error_Runtime('Variable "activity" does not exist.', 29, $this->getSourceContext()); })()), "price", array()), "html", null, true);
        echo "</p>
                </div>
                <div class=\"col-md-3\">
                    <div id=\"floating-panel\">
                        <input id=\"address\" type=\"textbox\" value=\"Sydney, NSW\">
                        <input id=\"submit\" type=\"button\" value=\"Geocode\">
                    </div>
                    <div id=\"map\"></div>
                </div>
            </div>
            <script>
                function initMap() {
                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 8,
                        center: {lat: 44.842739, lng: -0.585144}
                    });
                    var geocoder = new google.maps.Geocoder();

                    document.getElementById('submit').addEventListener('click', function() {
                        geocodeAddress(geocoder, map);
                    });
                }

                function geocodeAddress(geocoder, resultsMap) {
                    var address = document.getElementById('address').value;
                    geocoder.geocode({'address': address}, function(results, status) {
                        if (status === 'OK') {
                            resultsMap.setCenter(results[0].geometry.location);
                            var marker = new google.maps.Marker({
                                map: resultsMap,
                                position: results[0].geometry.location
                            });
                        } else {
                            alert('Geocode was not successful for the following reason: ' + status);
                        }
                    });
                }
            </script>
            <script async defer
                    src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAbrk4z_4dEYt-5rXqMhxKbyVCFQogrQj4&callback=initMap\">
            </script>
        </div>
    </div>
";
        
        $__internal_16f00ce74eac207ec7c130be4d428a399b517749f7c7b6262c3d8b4212fdd559->leave($__internal_16f00ce74eac207ec7c130be4d428a399b517749f7c7b6262c3d8b4212fdd559_prof);

        
        $__internal_c9c233e51ac77dc8a548f944f9a48d1fb8908979c8b28333720719feb553e6ac->leave($__internal_c9c233e51ac77dc8a548f944f9a48d1fb8908979c8b28333720719feb553e6ac_prof);

    }

    public function getTemplateName()
    {
        return "SiteBundle:Pages:activite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 29,  114 => 27,  107 => 23,  96 => 15,  89 => 10,  80 => 9,  62 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SiteBundle::base.html.twig\" %}

{% block style %}
    <link rel=\"stylesheet\" href=\"../../public/css/pages/activite.css\" type=\"text/css\" />
{% endblock %}

{% block title  %}{{ activity.name }}{% endblock %}

{% block content %}
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-lg-12\" id=\"ActivitePhoto\">
                <img src=\"../../public/img/jump_park.jpeg\" class=\"photosize\">
                <h2 class=\"BodyTitle\">{{ activity.name }}</h2>
            </div>
            <div class=\"col-lg-12\" id=\"ActiviteDetails\">
                <div class=\"col-md-3\">
                    <div class=\"ProfilBouton\">
                        <input class=\"btn btn-primary\" type=\"submit\" value=\"S'inscrire\">
                    </div>
                    <h3>Description</h3>
                    <p>{{ activity.description }}<p>
                    <h3>Informations</h3>
                        <br>
                    <p>Date : 12/05/17</p>
                    <p>Où : {{ activity.location }}</p>
                    <br>
                    <p>Payante : {{ activity.price }}</p>
                </div>
                <div class=\"col-md-3\">
                    <div id=\"floating-panel\">
                        <input id=\"address\" type=\"textbox\" value=\"Sydney, NSW\">
                        <input id=\"submit\" type=\"button\" value=\"Geocode\">
                    </div>
                    <div id=\"map\"></div>
                </div>
            </div>
            <script>
                function initMap() {
                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 8,
                        center: {lat: 44.842739, lng: -0.585144}
                    });
                    var geocoder = new google.maps.Geocoder();

                    document.getElementById('submit').addEventListener('click', function() {
                        geocodeAddress(geocoder, map);
                    });
                }

                function geocodeAddress(geocoder, resultsMap) {
                    var address = document.getElementById('address').value;
                    geocoder.geocode({'address': address}, function(results, status) {
                        if (status === 'OK') {
                            resultsMap.setCenter(results[0].geometry.location);
                            var marker = new google.maps.Marker({
                                map: resultsMap,
                                position: results[0].geometry.location
                            });
                        } else {
                            alert('Geocode was not successful for the following reason: ' + status);
                        }
                    });
                }
            </script>
            <script async defer
                    src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAbrk4z_4dEYt-5rXqMhxKbyVCFQogrQj4&callback=initMap\">
            </script>
        </div>
    </div>
{% endblock %}", "SiteBundle:Pages:activite.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/SiteBundle/Resources/views/Pages/activite.html.twig");
    }
}
