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
        $__internal_478f197ce17edd0368dff86eaf0604c4a403e5a3276cad9e92e80a139679f82f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_478f197ce17edd0368dff86eaf0604c4a403e5a3276cad9e92e80a139679f82f->enter($__internal_478f197ce17edd0368dff86eaf0604c4a403e5a3276cad9e92e80a139679f82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:activite.html.twig"));

        $__internal_2d71721d72e751921e67989cdbb592ef84e33b20b11e4b43cfd6f61bca2b8953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d71721d72e751921e67989cdbb592ef84e33b20b11e4b43cfd6f61bca2b8953->enter($__internal_2d71721d72e751921e67989cdbb592ef84e33b20b11e4b43cfd6f61bca2b8953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:activite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_478f197ce17edd0368dff86eaf0604c4a403e5a3276cad9e92e80a139679f82f->leave($__internal_478f197ce17edd0368dff86eaf0604c4a403e5a3276cad9e92e80a139679f82f_prof);

        
        $__internal_2d71721d72e751921e67989cdbb592ef84e33b20b11e4b43cfd6f61bca2b8953->leave($__internal_2d71721d72e751921e67989cdbb592ef84e33b20b11e4b43cfd6f61bca2b8953_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_8aa2e4489fa0b36b75b905a897dc75afa87358345d3283cdeb0c72fb4dddb26f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aa2e4489fa0b36b75b905a897dc75afa87358345d3283cdeb0c72fb4dddb26f->enter($__internal_8aa2e4489fa0b36b75b905a897dc75afa87358345d3283cdeb0c72fb4dddb26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_ec2ee8d7aa02c2667de7f4fc2f48698ceff7815c4d2639049d7203d952579d44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec2ee8d7aa02c2667de7f4fc2f48698ceff7815c4d2639049d7203d952579d44->enter($__internal_ec2ee8d7aa02c2667de7f4fc2f48698ceff7815c4d2639049d7203d952579d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../../public/css/pages/activite.css\" type=\"text/css\" />
";
        
        $__internal_ec2ee8d7aa02c2667de7f4fc2f48698ceff7815c4d2639049d7203d952579d44->leave($__internal_ec2ee8d7aa02c2667de7f4fc2f48698ceff7815c4d2639049d7203d952579d44_prof);

        
        $__internal_8aa2e4489fa0b36b75b905a897dc75afa87358345d3283cdeb0c72fb4dddb26f->leave($__internal_8aa2e4489fa0b36b75b905a897dc75afa87358345d3283cdeb0c72fb4dddb26f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f0809d6e4c9decf28bca7e65d6534ede6fe893a08f8c2f812d0621c3d7e5e48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f0809d6e4c9decf28bca7e65d6534ede6fe893a08f8c2f812d0621c3d7e5e48->enter($__internal_3f0809d6e4c9decf28bca7e65d6534ede6fe893a08f8c2f812d0621c3d7e5e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bc1b45e3f9b550a52e70aeb12039d94829d108e4b1818140cf1053b1b4c993a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc1b45e3f9b550a52e70aeb12039d94829d108e4b1818140cf1053b1b4c993a6->enter($__internal_bc1b45e3f9b550a52e70aeb12039d94829d108e4b1818140cf1053b1b4c993a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Galerie photos";
        
        $__internal_bc1b45e3f9b550a52e70aeb12039d94829d108e4b1818140cf1053b1b4c993a6->leave($__internal_bc1b45e3f9b550a52e70aeb12039d94829d108e4b1818140cf1053b1b4c993a6_prof);

        
        $__internal_3f0809d6e4c9decf28bca7e65d6534ede6fe893a08f8c2f812d0621c3d7e5e48->leave($__internal_3f0809d6e4c9decf28bca7e65d6534ede6fe893a08f8c2f812d0621c3d7e5e48_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_d13df6a8ef353b25e01bf239dd21cf597d01181c3f1f741f3da9c3d9b0fd2174 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d13df6a8ef353b25e01bf239dd21cf597d01181c3f1f741f3da9c3d9b0fd2174->enter($__internal_d13df6a8ef353b25e01bf239dd21cf597d01181c3f1f741f3da9c3d9b0fd2174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_cd73f65827607f4a8ed44e38cd203e1522dce2240255e8628bf7841896662513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd73f65827607f4a8ed44e38cd203e1522dce2240255e8628bf7841896662513->enter($__internal_cd73f65827607f4a8ed44e38cd203e1522dce2240255e8628bf7841896662513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-lg-12\" id=\"ActivitePhoto\">
                <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new Twig_Error_Runtime('Variable "images" does not exist.', 14, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "\" class=\"photosize\">
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
        
        $__internal_cd73f65827607f4a8ed44e38cd203e1522dce2240255e8628bf7841896662513->leave($__internal_cd73f65827607f4a8ed44e38cd203e1522dce2240255e8628bf7841896662513_prof);

        
        $__internal_d13df6a8ef353b25e01bf239dd21cf597d01181c3f1f741f3da9c3d9b0fd2174->leave($__internal_d13df6a8ef353b25e01bf239dd21cf597d01181c3f1f741f3da9c3d9b0fd2174_prof);

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
        return array (  122 => 29,  117 => 27,  110 => 23,  99 => 15,  95 => 14,  89 => 10,  80 => 9,  62 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SiteBundle::base.html.twig\" %}

{% block style %}
    <link rel=\"stylesheet\" href=\"../../public/css/pages/activite.css\" type=\"text/css\" />
{% endblock %}

{% block title  %}Galerie photos{% endblock %}

{% block content %}
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-lg-12\" id=\"ActivitePhoto\">
                <img src=\"{{ images.name }}\" class=\"photosize\">
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
