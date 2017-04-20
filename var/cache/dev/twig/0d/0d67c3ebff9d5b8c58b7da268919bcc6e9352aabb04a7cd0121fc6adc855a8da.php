<?php

/* SiteBundle:Pages:listeactivites.html.twig */
class __TwigTemplate_317d6a2e64fe5a1b2624f98bf352e6d51e427825bce4d86c3e9a6163f6fbbd35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SiteBundle::base.html.twig", "SiteBundle:Pages:listeactivites.html.twig", 1);
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
        $__internal_eecfc0d330243aa45c8362f99f7b7e28294fac2713edcae1855330d9cd0389c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eecfc0d330243aa45c8362f99f7b7e28294fac2713edcae1855330d9cd0389c2->enter($__internal_eecfc0d330243aa45c8362f99f7b7e28294fac2713edcae1855330d9cd0389c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:listeactivites.html.twig"));

        $__internal_ad312669af3fc01dd34849f253dc26e0022fd8686b5689e01327ec799760796e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad312669af3fc01dd34849f253dc26e0022fd8686b5689e01327ec799760796e->enter($__internal_ad312669af3fc01dd34849f253dc26e0022fd8686b5689e01327ec799760796e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:listeactivites.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eecfc0d330243aa45c8362f99f7b7e28294fac2713edcae1855330d9cd0389c2->leave($__internal_eecfc0d330243aa45c8362f99f7b7e28294fac2713edcae1855330d9cd0389c2_prof);

        
        $__internal_ad312669af3fc01dd34849f253dc26e0022fd8686b5689e01327ec799760796e->leave($__internal_ad312669af3fc01dd34849f253dc26e0022fd8686b5689e01327ec799760796e_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_5dc86faf1284d40bab3db7ad26e0b88b3c434ddbd106efbd4f84f889dfa3194d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dc86faf1284d40bab3db7ad26e0b88b3c434ddbd106efbd4f84f889dfa3194d->enter($__internal_5dc86faf1284d40bab3db7ad26e0b88b3c434ddbd106efbd4f84f889dfa3194d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_bb17e03e320cb31c61c08c37037eab819532bf0cee3b79493f3b5e93606ff2fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb17e03e320cb31c61c08c37037eab819532bf0cee3b79493f3b5e93606ff2fd->enter($__internal_bb17e03e320cb31c61c08c37037eab819532bf0cee3b79493f3b5e93606ff2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../public/css/pages/listeactivite.css\" type=\"text/css\" />
";
        
        $__internal_bb17e03e320cb31c61c08c37037eab819532bf0cee3b79493f3b5e93606ff2fd->leave($__internal_bb17e03e320cb31c61c08c37037eab819532bf0cee3b79493f3b5e93606ff2fd_prof);

        
        $__internal_5dc86faf1284d40bab3db7ad26e0b88b3c434ddbd106efbd4f84f889dfa3194d->leave($__internal_5dc86faf1284d40bab3db7ad26e0b88b3c434ddbd106efbd4f84f889dfa3194d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec539b7e2d2c7f74030df717e7e1611a6bef4bafa62a983c785d9a7a66a77d9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec539b7e2d2c7f74030df717e7e1611a6bef4bafa62a983c785d9a7a66a77d9f->enter($__internal_ec539b7e2d2c7f74030df717e7e1611a6bef4bafa62a983c785d9a7a66a77d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0095a667538c17995750f6de75daaaef09cb171cf8f04e2db1febfef8b4b1647 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0095a667538c17995750f6de75daaaef09cb171cf8f04e2db1febfef8b4b1647->enter($__internal_0095a667538c17995750f6de75daaaef09cb171cf8f04e2db1febfef8b4b1647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Activité Prévues";
        
        $__internal_0095a667538c17995750f6de75daaaef09cb171cf8f04e2db1febfef8b4b1647->leave($__internal_0095a667538c17995750f6de75daaaef09cb171cf8f04e2db1febfef8b4b1647_prof);

        
        $__internal_ec539b7e2d2c7f74030df717e7e1611a6bef4bafa62a983c785d9a7a66a77d9f->leave($__internal_ec539b7e2d2c7f74030df717e7e1611a6bef4bafa62a983c785d9a7a66a77d9f_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_f6e5516b19a2ba4e035965b737122cddc7c7de9f0af396032ac758554d7dc6d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6e5516b19a2ba4e035965b737122cddc7c7de9f0af396032ac758554d7dc6d7->enter($__internal_f6e5516b19a2ba4e035965b737122cddc7c7de9f0af396032ac758554d7dc6d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_fc0acf90a809b1f069b615a87a6cccded058c1e600516518f6979255626b37ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc0acf90a809b1f069b615a87a6cccded058c1e600516518f6979255626b37ee->enter($__internal_fc0acf90a809b1f069b615a87a6cccded058c1e600516518f6979255626b37ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <div class=\"container\">
        <h2>Activité Prévues</h2>
        <div class=\"row\">
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activities"]) || array_key_exists("activities", $context) ? $context["activities"] : (function () { throw new Twig_Error_Runtime('Variable "activities" does not exist.', 13, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 14
            echo "                <div class=\"col-lg-12\" id=\"ActivitePhoto\">
                    <div class=\"col-md-2\">
                        <img src=\"../public/img/kubb.jpg\" class=\"photosize\">
                    </div>
                    <div class=\"col-md-3\">
                        <a href=\"\"><h2 class=\"BodyTitle\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["activity"], "name", array()), "html", null, true);
            echo "</h2></a>
                    </div>
                    <div class=\"col-md-1\">
                        <p>Lieu : ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["activity"], "location", array()), "html", null, true);
            echo "</p>
                        <p>Date : 20/04/2017</p>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </div>
    </div>
";
        
        $__internal_fc0acf90a809b1f069b615a87a6cccded058c1e600516518f6979255626b37ee->leave($__internal_fc0acf90a809b1f069b615a87a6cccded058c1e600516518f6979255626b37ee_prof);

        
        $__internal_f6e5516b19a2ba4e035965b737122cddc7c7de9f0af396032ac758554d7dc6d7->leave($__internal_f6e5516b19a2ba4e035965b737122cddc7c7de9f0af396032ac758554d7dc6d7_prof);

    }

    public function getTemplateName()
    {
        return "SiteBundle:Pages:listeactivites.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 27,  111 => 22,  105 => 19,  98 => 14,  94 => 13,  89 => 10,  80 => 9,  62 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SiteBundle::base.html.twig\" %}

{% block style %}
    <link rel=\"stylesheet\" href=\"../public/css/pages/listeactivite.css\" type=\"text/css\" />
{% endblock %}

{% block title  %}Activité Prévues{% endblock %}

{% block content %}
    <div class=\"container\">
        <h2>Activité Prévues</h2>
        <div class=\"row\">
            {% for activity in activities %}
                <div class=\"col-lg-12\" id=\"ActivitePhoto\">
                    <div class=\"col-md-2\">
                        <img src=\"../public/img/kubb.jpg\" class=\"photosize\">
                    </div>
                    <div class=\"col-md-3\">
                        <a href=\"\"><h2 class=\"BodyTitle\"{{ activity.name }}</h2></a>
                    </div>
                    <div class=\"col-md-1\">
                        <p>Lieu : {{ activity.location }}</p>
                        <p>Date : 20/04/2017</p>
                    </div>
                </div>
                {% endfor %}
        </div>
    </div>
{% endblock %}", "SiteBundle:Pages:listeactivites.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/SiteBundle/Resources/views/Pages/listeactivites.html.twig");
    }
}
