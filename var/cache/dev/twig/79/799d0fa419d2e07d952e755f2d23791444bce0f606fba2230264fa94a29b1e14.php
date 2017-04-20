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
        $__internal_d2a8f593e2e33da0078ecc12d4751ae3e89ee63b732cda6cfc2acf6164fcfc72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2a8f593e2e33da0078ecc12d4751ae3e89ee63b732cda6cfc2acf6164fcfc72->enter($__internal_d2a8f593e2e33da0078ecc12d4751ae3e89ee63b732cda6cfc2acf6164fcfc72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:activite.html.twig"));

        $__internal_6b3ae0742ef7d45d0c54a76497862be7784cbad5aeacbc571a3557343c33db8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b3ae0742ef7d45d0c54a76497862be7784cbad5aeacbc571a3557343c33db8f->enter($__internal_6b3ae0742ef7d45d0c54a76497862be7784cbad5aeacbc571a3557343c33db8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:activite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2a8f593e2e33da0078ecc12d4751ae3e89ee63b732cda6cfc2acf6164fcfc72->leave($__internal_d2a8f593e2e33da0078ecc12d4751ae3e89ee63b732cda6cfc2acf6164fcfc72_prof);

        
        $__internal_6b3ae0742ef7d45d0c54a76497862be7784cbad5aeacbc571a3557343c33db8f->leave($__internal_6b3ae0742ef7d45d0c54a76497862be7784cbad5aeacbc571a3557343c33db8f_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_985d6a4da6cecb47ed5ff259a4d7b71f2121ac633f731a08327f05f81ef6c95f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_985d6a4da6cecb47ed5ff259a4d7b71f2121ac633f731a08327f05f81ef6c95f->enter($__internal_985d6a4da6cecb47ed5ff259a4d7b71f2121ac633f731a08327f05f81ef6c95f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_9fe66c848661f8117d1d2d0ebe4537e3a963bfd757697a5a4f522065cd2ee27b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fe66c848661f8117d1d2d0ebe4537e3a963bfd757697a5a4f522065cd2ee27b->enter($__internal_9fe66c848661f8117d1d2d0ebe4537e3a963bfd757697a5a4f522065cd2ee27b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../../public/css/pages/activite.css\" type=\"text/css\" />
";
        
        $__internal_9fe66c848661f8117d1d2d0ebe4537e3a963bfd757697a5a4f522065cd2ee27b->leave($__internal_9fe66c848661f8117d1d2d0ebe4537e3a963bfd757697a5a4f522065cd2ee27b_prof);

        
        $__internal_985d6a4da6cecb47ed5ff259a4d7b71f2121ac633f731a08327f05f81ef6c95f->leave($__internal_985d6a4da6cecb47ed5ff259a4d7b71f2121ac633f731a08327f05f81ef6c95f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed9838c7648e5b38bf6f75e86fbe91a96bb63f9a94152cba94acc8732859f8cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed9838c7648e5b38bf6f75e86fbe91a96bb63f9a94152cba94acc8732859f8cb->enter($__internal_ed9838c7648e5b38bf6f75e86fbe91a96bb63f9a94152cba94acc8732859f8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_876f75e3a10f5ba5da3bb8438de445b2d4f69a5031a045c7f4e1aa50c6583ac7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_876f75e3a10f5ba5da3bb8438de445b2d4f69a5031a045c7f4e1aa50c6583ac7->enter($__internal_876f75e3a10f5ba5da3bb8438de445b2d4f69a5031a045c7f4e1aa50c6583ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new Twig_Error_Runtime('Variable "activity" does not exist.', 7, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        
        $__internal_876f75e3a10f5ba5da3bb8438de445b2d4f69a5031a045c7f4e1aa50c6583ac7->leave($__internal_876f75e3a10f5ba5da3bb8438de445b2d4f69a5031a045c7f4e1aa50c6583ac7_prof);

        
        $__internal_ed9838c7648e5b38bf6f75e86fbe91a96bb63f9a94152cba94acc8732859f8cb->leave($__internal_ed9838c7648e5b38bf6f75e86fbe91a96bb63f9a94152cba94acc8732859f8cb_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_2d7161f4c4d50f6945fb7370776039d9e329cfb1920c28b617644aa439ff6268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d7161f4c4d50f6945fb7370776039d9e329cfb1920c28b617644aa439ff6268->enter($__internal_2d7161f4c4d50f6945fb7370776039d9e329cfb1920c28b617644aa439ff6268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_848b0ea6cbc6b89c4dc84bdd500a36e566f594311a3caf91ef4290ce1700d8de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_848b0ea6cbc6b89c4dc84bdd500a36e566f594311a3caf91ef4290ce1700d8de->enter($__internal_848b0ea6cbc6b89c4dc84bdd500a36e566f594311a3caf91ef4290ce1700d8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_848b0ea6cbc6b89c4dc84bdd500a36e566f594311a3caf91ef4290ce1700d8de->leave($__internal_848b0ea6cbc6b89c4dc84bdd500a36e566f594311a3caf91ef4290ce1700d8de_prof);

        
        $__internal_2d7161f4c4d50f6945fb7370776039d9e329cfb1920c28b617644aa439ff6268->leave($__internal_2d7161f4c4d50f6945fb7370776039d9e329cfb1920c28b617644aa439ff6268_prof);

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
