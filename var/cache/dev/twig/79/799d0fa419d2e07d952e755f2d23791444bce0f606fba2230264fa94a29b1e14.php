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
        $__internal_4025b7328871a841e3f786cb7a9e61ac22764238cdc47850b73c6e17b6adbcc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4025b7328871a841e3f786cb7a9e61ac22764238cdc47850b73c6e17b6adbcc1->enter($__internal_4025b7328871a841e3f786cb7a9e61ac22764238cdc47850b73c6e17b6adbcc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:activite.html.twig"));

        $__internal_8fec96d68eba0c0dfc174bbea7486ab01c113484687c025db8a5b85f72086713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fec96d68eba0c0dfc174bbea7486ab01c113484687c025db8a5b85f72086713->enter($__internal_8fec96d68eba0c0dfc174bbea7486ab01c113484687c025db8a5b85f72086713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:activite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4025b7328871a841e3f786cb7a9e61ac22764238cdc47850b73c6e17b6adbcc1->leave($__internal_4025b7328871a841e3f786cb7a9e61ac22764238cdc47850b73c6e17b6adbcc1_prof);

        
        $__internal_8fec96d68eba0c0dfc174bbea7486ab01c113484687c025db8a5b85f72086713->leave($__internal_8fec96d68eba0c0dfc174bbea7486ab01c113484687c025db8a5b85f72086713_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_fb44e21c21514c47d0d978055b2e40abd4142bab0e1527d8476d598693ed8bbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb44e21c21514c47d0d978055b2e40abd4142bab0e1527d8476d598693ed8bbc->enter($__internal_fb44e21c21514c47d0d978055b2e40abd4142bab0e1527d8476d598693ed8bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_7a39e52e222be95f8c375ad48c2a7486e393ffd99372646637fb5fc9b7fc7acb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a39e52e222be95f8c375ad48c2a7486e393ffd99372646637fb5fc9b7fc7acb->enter($__internal_7a39e52e222be95f8c375ad48c2a7486e393ffd99372646637fb5fc9b7fc7acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../../public/css/pages/activite.css\" type=\"text/css\" />
";
        
        $__internal_7a39e52e222be95f8c375ad48c2a7486e393ffd99372646637fb5fc9b7fc7acb->leave($__internal_7a39e52e222be95f8c375ad48c2a7486e393ffd99372646637fb5fc9b7fc7acb_prof);

        
        $__internal_fb44e21c21514c47d0d978055b2e40abd4142bab0e1527d8476d598693ed8bbc->leave($__internal_fb44e21c21514c47d0d978055b2e40abd4142bab0e1527d8476d598693ed8bbc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ae2082879de61c60a696c3c863eae8781ecd94df167bec6887591551c802d5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ae2082879de61c60a696c3c863eae8781ecd94df167bec6887591551c802d5a->enter($__internal_5ae2082879de61c60a696c3c863eae8781ecd94df167bec6887591551c802d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f2fa0eecec662d3fa0f0f79aa14ce2c937db447c7fdbbdc066d9d52c113a57dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2fa0eecec662d3fa0f0f79aa14ce2c937db447c7fdbbdc066d9d52c113a57dd->enter($__internal_f2fa0eecec662d3fa0f0f79aa14ce2c937db447c7fdbbdc066d9d52c113a57dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new Twig_Error_Runtime('Variable "activity" does not exist.', 7, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        
        $__internal_f2fa0eecec662d3fa0f0f79aa14ce2c937db447c7fdbbdc066d9d52c113a57dd->leave($__internal_f2fa0eecec662d3fa0f0f79aa14ce2c937db447c7fdbbdc066d9d52c113a57dd_prof);

        
        $__internal_5ae2082879de61c60a696c3c863eae8781ecd94df167bec6887591551c802d5a->leave($__internal_5ae2082879de61c60a696c3c863eae8781ecd94df167bec6887591551c802d5a_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_22c1ebd37a80582e136926a8afcacd484cf9bd3b195667d140a1a4cb8484b1a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22c1ebd37a80582e136926a8afcacd484cf9bd3b195667d140a1a4cb8484b1a7->enter($__internal_22c1ebd37a80582e136926a8afcacd484cf9bd3b195667d140a1a4cb8484b1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8d107f30dd28117c43d2fc605e57a37ce9a41eb25db87cca17edb41dcf31766d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d107f30dd28117c43d2fc605e57a37ce9a41eb25db87cca17edb41dcf31766d->enter($__internal_8d107f30dd28117c43d2fc605e57a37ce9a41eb25db87cca17edb41dcf31766d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-lg-12\" id=\"ActivitePhoto\">
                <img src=\"../../public/img/jump_park.jpg\" class=\"photosize\">
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
        
        $__internal_8d107f30dd28117c43d2fc605e57a37ce9a41eb25db87cca17edb41dcf31766d->leave($__internal_8d107f30dd28117c43d2fc605e57a37ce9a41eb25db87cca17edb41dcf31766d_prof);

        
        $__internal_22c1ebd37a80582e136926a8afcacd484cf9bd3b195667d140a1a4cb8484b1a7->leave($__internal_22c1ebd37a80582e136926a8afcacd484cf9bd3b195667d140a1a4cb8484b1a7_prof);

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
                <img src=\"../../public/img/jump_park.jpg\" class=\"photosize\">
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
