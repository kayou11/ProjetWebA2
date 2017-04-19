<?php

/* SiteBundle:Pages:activites.html.twig */
class __TwigTemplate_bb1b539667deef0e26412e5a7ecdc72b8cb2c92776f91eb835de34bbcc4d2db8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SiteBundle::base.html.twig", "SiteBundle:Pages:activites.html.twig", 1);
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
        $__internal_620713349df659b412ce28f923bb30cb36eea43b26719c71e9e52067d36e3583 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_620713349df659b412ce28f923bb30cb36eea43b26719c71e9e52067d36e3583->enter($__internal_620713349df659b412ce28f923bb30cb36eea43b26719c71e9e52067d36e3583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:activites.html.twig"));

        $__internal_347c3fa76687205fb6f34412415327a31574dd07b4ed446c14d57e87579f5ef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_347c3fa76687205fb6f34412415327a31574dd07b4ed446c14d57e87579f5ef9->enter($__internal_347c3fa76687205fb6f34412415327a31574dd07b4ed446c14d57e87579f5ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:activites.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_620713349df659b412ce28f923bb30cb36eea43b26719c71e9e52067d36e3583->leave($__internal_620713349df659b412ce28f923bb30cb36eea43b26719c71e9e52067d36e3583_prof);

        
        $__internal_347c3fa76687205fb6f34412415327a31574dd07b4ed446c14d57e87579f5ef9->leave($__internal_347c3fa76687205fb6f34412415327a31574dd07b4ed446c14d57e87579f5ef9_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_9af3d40937b0f1e6eaaa5fe0a25d7c123e98c568d25ef6246aea711d00ab352e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9af3d40937b0f1e6eaaa5fe0a25d7c123e98c568d25ef6246aea711d00ab352e->enter($__internal_9af3d40937b0f1e6eaaa5fe0a25d7c123e98c568d25ef6246aea711d00ab352e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_5d5c2c3f1052261a8e21d02a5e66f2e8e5bee3ec797e88981085a868c001bf90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d5c2c3f1052261a8e21d02a5e66f2e8e5bee3ec797e88981085a868c001bf90->enter($__internal_5d5c2c3f1052261a8e21d02a5e66f2e8e5bee3ec797e88981085a868c001bf90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../public/css/pages/contact.css\" type=\"text/css\" />
";
        
        $__internal_5d5c2c3f1052261a8e21d02a5e66f2e8e5bee3ec797e88981085a868c001bf90->leave($__internal_5d5c2c3f1052261a8e21d02a5e66f2e8e5bee3ec797e88981085a868c001bf90_prof);

        
        $__internal_9af3d40937b0f1e6eaaa5fe0a25d7c123e98c568d25ef6246aea711d00ab352e->leave($__internal_9af3d40937b0f1e6eaaa5fe0a25d7c123e98c568d25ef6246aea711d00ab352e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c55bee5a4d87fff576fc81079be38764f85f7a6aae254b670ae50015b518efeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c55bee5a4d87fff576fc81079be38764f85f7a6aae254b670ae50015b518efeb->enter($__internal_c55bee5a4d87fff576fc81079be38764f85f7a6aae254b670ae50015b518efeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9b80eede0d93e4d9a349362cb957367b72b9968f1b72dfb536c318323589a8ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b80eede0d93e4d9a349362cb957367b72b9968f1b72dfb536c318323589a8ad->enter($__internal_9b80eede0d93e4d9a349362cb957367b72b9968f1b72dfb536c318323589a8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Galerie photos";
        
        $__internal_9b80eede0d93e4d9a349362cb957367b72b9968f1b72dfb536c318323589a8ad->leave($__internal_9b80eede0d93e4d9a349362cb957367b72b9968f1b72dfb536c318323589a8ad_prof);

        
        $__internal_c55bee5a4d87fff576fc81079be38764f85f7a6aae254b670ae50015b518efeb->leave($__internal_c55bee5a4d87fff576fc81079be38764f85f7a6aae254b670ae50015b518efeb_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_79707a28fd8b5a3c62e6e0b3855abc139d2160520347a0ca6003a160424b5581 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79707a28fd8b5a3c62e6e0b3855abc139d2160520347a0ca6003a160424b5581->enter($__internal_79707a28fd8b5a3c62e6e0b3855abc139d2160520347a0ca6003a160424b5581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e9ce80877fbd139c4073c721b747f92a7de19865f5c7fb6cabf7bfc8c8ecd6d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9ce80877fbd139c4073c721b747f92a7de19865f5c7fb6cabf7bfc8c8ecd6d8->enter($__internal_e9ce80877fbd139c4073c721b747f92a7de19865f5c7fb6cabf7bfc8c8ecd6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activities"]) || array_key_exists("activities", $context) ? $context["activities"] : (function () { throw new Twig_Error_Runtime('Variable "activities" does not exist.', 10, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 11
            echo "        <div>
            <button class=\"btn btn-primary\" href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_activite_by_id", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["activity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["activity"], "name", array()), "html", null, true);
            echo "</button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    <br>
    <br>
    <br>
";
        
        $__internal_e9ce80877fbd139c4073c721b747f92a7de19865f5c7fb6cabf7bfc8c8ecd6d8->leave($__internal_e9ce80877fbd139c4073c721b747f92a7de19865f5c7fb6cabf7bfc8c8ecd6d8_prof);

        
        $__internal_79707a28fd8b5a3c62e6e0b3855abc139d2160520347a0ca6003a160424b5581->leave($__internal_79707a28fd8b5a3c62e6e0b3855abc139d2160520347a0ca6003a160424b5581_prof);

    }

    public function getTemplateName()
    {
        return "SiteBundle:Pages:activites.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 15,  97 => 12,  94 => 11,  89 => 10,  80 => 9,  62 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SiteBundle::base.html.twig\" %}

{% block style %}
    <link rel=\"stylesheet\" href=\"../public/css/pages/contact.css\" type=\"text/css\" />
{% endblock %}

{% block title  %}Galerie photos{% endblock %}

{% block content %}
    {% for activity in activities %}
        <div>
            <button class=\"btn btn-primary\" href=\"{{ path('site_activite_by_id', {'id': activity.id }) }}\">{{ activity.name }}</button>
        </div>
    {% endfor %}
    <br>
    <br>
    <br>
{% endblock %}", "SiteBundle:Pages:activites.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/SiteBundle/Resources/views/Pages/activites.html.twig");
    }
}
