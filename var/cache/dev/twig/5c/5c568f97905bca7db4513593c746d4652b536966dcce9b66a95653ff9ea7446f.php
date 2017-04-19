<?php

/* SiteBundle:Pages:galerie_album.html.twig */
class __TwigTemplate_70e611b376cebe625a9a9b870e5294eacb7499833eba513b884d5f9bc7c540ad extends Twig_Template
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
        $__internal_88e6d26bd7decdb6ae0be2aaed7cb6b46af22a79b87842df4f7e78c756124d2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88e6d26bd7decdb6ae0be2aaed7cb6b46af22a79b87842df4f7e78c756124d2c->enter($__internal_88e6d26bd7decdb6ae0be2aaed7cb6b46af22a79b87842df4f7e78c756124d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:galerie_album.html.twig"));

        $__internal_0490c6c9f6d5522eb5cc965fb72a15e3c6e35a5274aff3eb6963fc8f3b7ae072 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0490c6c9f6d5522eb5cc965fb72a15e3c6e35a5274aff3eb6963fc8f3b7ae072->enter($__internal_0490c6c9f6d5522eb5cc965fb72a15e3c6e35a5274aff3eb6963fc8f3b7ae072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:galerie_album.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88e6d26bd7decdb6ae0be2aaed7cb6b46af22a79b87842df4f7e78c756124d2c->leave($__internal_88e6d26bd7decdb6ae0be2aaed7cb6b46af22a79b87842df4f7e78c756124d2c_prof);

        
        $__internal_0490c6c9f6d5522eb5cc965fb72a15e3c6e35a5274aff3eb6963fc8f3b7ae072->leave($__internal_0490c6c9f6d5522eb5cc965fb72a15e3c6e35a5274aff3eb6963fc8f3b7ae072_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_828880374d8c2cff9c1c0edc810aefe2dccaa74eefbc996e8125b1a54a39457c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_828880374d8c2cff9c1c0edc810aefe2dccaa74eefbc996e8125b1a54a39457c->enter($__internal_828880374d8c2cff9c1c0edc810aefe2dccaa74eefbc996e8125b1a54a39457c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_1f532d1584f90821a151d279bc48124c934ef99352bfe38cb77684b97cc951dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f532d1584f90821a151d279bc48124c934ef99352bfe38cb77684b97cc951dc->enter($__internal_1f532d1584f90821a151d279bc48124c934ef99352bfe38cb77684b97cc951dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../public/css/pages/galerie_album.css\" type=\"text/css\" />
";
        
        $__internal_1f532d1584f90821a151d279bc48124c934ef99352bfe38cb77684b97cc951dc->leave($__internal_1f532d1584f90821a151d279bc48124c934ef99352bfe38cb77684b97cc951dc_prof);

        
        $__internal_828880374d8c2cff9c1c0edc810aefe2dccaa74eefbc996e8125b1a54a39457c->leave($__internal_828880374d8c2cff9c1c0edc810aefe2dccaa74eefbc996e8125b1a54a39457c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_da6460e3afb5ad00c4f932c52c56142ca027a968d26703f503f9960fcd07d49d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da6460e3afb5ad00c4f932c52c56142ca027a968d26703f503f9960fcd07d49d->enter($__internal_da6460e3afb5ad00c4f932c52c56142ca027a968d26703f503f9960fcd07d49d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7a13b6b297f588e82a708dea240b5506613248c3acfc01b4e157b31fd8d7c4e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a13b6b297f588e82a708dea240b5506613248c3acfc01b4e157b31fd8d7c4e6->enter($__internal_7a13b6b297f588e82a708dea240b5506613248c3acfc01b4e157b31fd8d7c4e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Galerie photos";
        
        $__internal_7a13b6b297f588e82a708dea240b5506613248c3acfc01b4e157b31fd8d7c4e6->leave($__internal_7a13b6b297f588e82a708dea240b5506613248c3acfc01b4e157b31fd8d7c4e6_prof);

        
        $__internal_da6460e3afb5ad00c4f932c52c56142ca027a968d26703f503f9960fcd07d49d->leave($__internal_da6460e3afb5ad00c4f932c52c56142ca027a968d26703f503f9960fcd07d49d_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_bb355dde27bac801452271b2eeb09bfa8fa959d44766696e1b9927a395dcc1e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb355dde27bac801452271b2eeb09bfa8fa959d44766696e1b9927a395dcc1e0->enter($__internal_bb355dde27bac801452271b2eeb09bfa8fa959d44766696e1b9927a395dcc1e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b1af2f22bf8b4393e8ec7f89ddb76bab99b30a74a270528b3a691a314375461c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1af2f22bf8b4393e8ec7f89ddb76bab99b30a74a270528b3a691a314375461c->enter($__internal_b1af2f22bf8b4393e8ec7f89ddb76bab99b30a74a270528b3a691a314375461c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new Twig_Error_Runtime('Variable "image" does not exist.', 43, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["albums"]) {
            // line 44
            echo "                <div class=\"item active\">
                    <div class=\"container\">
                        <div id=\"slide1\" class=\"masonry\">
                            <div class=\"post-box col-lg-4 col-md-4 col-sm-4\">
                                <img class=\"img-responsive img-thumbnail\" src=\"";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["albums"], "name", array()), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['albums'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_b1af2f22bf8b4393e8ec7f89ddb76bab99b30a74a270528b3a691a314375461c->leave($__internal_b1af2f22bf8b4393e8ec7f89ddb76bab99b30a74a270528b3a691a314375461c_prof);

        
        $__internal_bb355dde27bac801452271b2eeb09bfa8fa959d44766696e1b9927a395dcc1e0->leave($__internal_bb355dde27bac801452271b2eeb09bfa8fa959d44766696e1b9927a395dcc1e0_prof);

    }

    // line 60
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_11334127332d4baef334c3ada51592364338459414da677b2fe4b41f691aa06d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11334127332d4baef334c3ada51592364338459414da677b2fe4b41f691aa06d->enter($__internal_11334127332d4baef334c3ada51592364338459414da677b2fe4b41f691aa06d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_6967f4fb208a82bcf0b1b94a0f7fdaa21240787655e800332fba46df13d33bea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6967f4fb208a82bcf0b1b94a0f7fdaa21240787655e800332fba46df13d33bea->enter($__internal_6967f4fb208a82bcf0b1b94a0f7fdaa21240787655e800332fba46df13d33bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 61
        echo "    <script type=\"text/javascript\" src=\"../public/js/page_album.js\"></script>
";
        
        $__internal_6967f4fb208a82bcf0b1b94a0f7fdaa21240787655e800332fba46df13d33bea->leave($__internal_6967f4fb208a82bcf0b1b94a0f7fdaa21240787655e800332fba46df13d33bea_prof);

        
        $__internal_11334127332d4baef334c3ada51592364338459414da677b2fe4b41f691aa06d->leave($__internal_11334127332d4baef334c3ada51592364338459414da677b2fe4b41f691aa06d_prof);

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

                {% for albums in image %}
                <div class=\"item active\">
                    <div class=\"container\">
                        <div id=\"slide1\" class=\"masonry\">
                            <div class=\"post-box col-lg-4 col-md-4 col-sm-4\">
                                <img class=\"img-responsive img-thumbnail\" src=\"{{ albums.name }}\">
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
