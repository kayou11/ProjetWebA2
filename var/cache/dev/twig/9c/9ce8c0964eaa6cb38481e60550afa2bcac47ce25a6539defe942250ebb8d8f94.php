<?php

/* SiteBundle:Pages:activite.html.twig */
class __TwigTemplate_2834394f116507f0fff6b80997dced0e1e7946c2f5e780f35c07f3a6c11f5643 extends Twig_Template
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
        $__internal_d28bbbf001ccd7ac56df9b1f9c1c294f5e23938974c4aee06adf3a428b3c3512 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d28bbbf001ccd7ac56df9b1f9c1c294f5e23938974c4aee06adf3a428b3c3512->enter($__internal_d28bbbf001ccd7ac56df9b1f9c1c294f5e23938974c4aee06adf3a428b3c3512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:activite.html.twig"));

        $__internal_1c1c98d2df8475f9dc5ffed445dd50587ca2fee27104fdced8534a8c9091577e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c1c98d2df8475f9dc5ffed445dd50587ca2fee27104fdced8534a8c9091577e->enter($__internal_1c1c98d2df8475f9dc5ffed445dd50587ca2fee27104fdced8534a8c9091577e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:activite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d28bbbf001ccd7ac56df9b1f9c1c294f5e23938974c4aee06adf3a428b3c3512->leave($__internal_d28bbbf001ccd7ac56df9b1f9c1c294f5e23938974c4aee06adf3a428b3c3512_prof);

        
        $__internal_1c1c98d2df8475f9dc5ffed445dd50587ca2fee27104fdced8534a8c9091577e->leave($__internal_1c1c98d2df8475f9dc5ffed445dd50587ca2fee27104fdced8534a8c9091577e_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_f29dc05c27a5f00780ced69f579a7803467128ee1066037c6236c0cc2a3a6102 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f29dc05c27a5f00780ced69f579a7803467128ee1066037c6236c0cc2a3a6102->enter($__internal_f29dc05c27a5f00780ced69f579a7803467128ee1066037c6236c0cc2a3a6102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_c82ebadd18a1f03a31e30ff015c8512ddefeeb766deb5c991af24585cd1bf3a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c82ebadd18a1f03a31e30ff015c8512ddefeeb766deb5c991af24585cd1bf3a7->enter($__internal_c82ebadd18a1f03a31e30ff015c8512ddefeeb766deb5c991af24585cd1bf3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../../public/css/pages/activite.css\" type=\"text/css\" />
";
        
        $__internal_c82ebadd18a1f03a31e30ff015c8512ddefeeb766deb5c991af24585cd1bf3a7->leave($__internal_c82ebadd18a1f03a31e30ff015c8512ddefeeb766deb5c991af24585cd1bf3a7_prof);

        
        $__internal_f29dc05c27a5f00780ced69f579a7803467128ee1066037c6236c0cc2a3a6102->leave($__internal_f29dc05c27a5f00780ced69f579a7803467128ee1066037c6236c0cc2a3a6102_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd3ceccd7a8f5d946c94777d4650b3f6e6829dfa74df43856922b1e01ca8d52f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd3ceccd7a8f5d946c94777d4650b3f6e6829dfa74df43856922b1e01ca8d52f->enter($__internal_bd3ceccd7a8f5d946c94777d4650b3f6e6829dfa74df43856922b1e01ca8d52f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_13ae286fa124e28f2cf259fda7609e6249467ee7dacb208a19fc733edec39e88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13ae286fa124e28f2cf259fda7609e6249467ee7dacb208a19fc733edec39e88->enter($__internal_13ae286fa124e28f2cf259fda7609e6249467ee7dacb208a19fc733edec39e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new Twig_Error_Runtime('Variable "activity" does not exist.', 7, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        
        $__internal_13ae286fa124e28f2cf259fda7609e6249467ee7dacb208a19fc733edec39e88->leave($__internal_13ae286fa124e28f2cf259fda7609e6249467ee7dacb208a19fc733edec39e88_prof);

        
        $__internal_bd3ceccd7a8f5d946c94777d4650b3f6e6829dfa74df43856922b1e01ca8d52f->leave($__internal_bd3ceccd7a8f5d946c94777d4650b3f6e6829dfa74df43856922b1e01ca8d52f_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_49161fdf39736f282535c1ee37b36dd935037d6e9b3f737aec6c87e4b18df757 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49161fdf39736f282535c1ee37b36dd935037d6e9b3f737aec6c87e4b18df757->enter($__internal_49161fdf39736f282535c1ee37b36dd935037d6e9b3f737aec6c87e4b18df757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_391db644b64b7e7cf28b463dfcc62c21d991373b2353a1ebaef9c27b8e71c506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_391db644b64b7e7cf28b463dfcc62c21d991373b2353a1ebaef9c27b8e71c506->enter($__internal_391db644b64b7e7cf28b463dfcc62c21d991373b2353a1ebaef9c27b8e71c506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_391db644b64b7e7cf28b463dfcc62c21d991373b2353a1ebaef9c27b8e71c506->leave($__internal_391db644b64b7e7cf28b463dfcc62c21d991373b2353a1ebaef9c27b8e71c506_prof);

        
        $__internal_49161fdf39736f282535c1ee37b36dd935037d6e9b3f737aec6c87e4b18df757->leave($__internal_49161fdf39736f282535c1ee37b36dd935037d6e9b3f737aec6c87e4b18df757_prof);

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
