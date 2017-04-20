<?php

/* SiteBundle:Pages:activite.html.twig */
class __TwigTemplate_a1102e6fbb8008b12388dce142b1c4ff4d11b089997280cd535a945d3ee066e9 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../../public/css/pages/activite.css\" type=\"text/css\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["activity"] ?? null), "name", array()), "html", null, true);
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-lg-12\" id=\"ActivitePhoto\">
                <img src=\"../../public/img/jump_park.jpeg\" class=\"photosize\">
                <h2 class=\"BodyTitle\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["activity"] ?? null), "name", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["activity"] ?? null), "description", array()), "html", null, true);
        echo "<p>
                    <h3>Informations</h3>
                        <br>
                    <p>Date : 12/05/17</p>
                    <p>Où : ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["activity"] ?? null), "location", array()), "html", null, true);
        echo "</p>
                    <br>
                    <p>Payante : ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["activity"] ?? null), "price", array()), "html", null, true);
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
        return array (  77 => 29,  72 => 27,  65 => 23,  54 => 15,  47 => 10,  44 => 9,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SiteBundle:Pages:activite.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/SiteBundle/Resources/views/Pages/activite.html.twig");
    }
}
