<?php

/* SiteBundle:Pages:archives.html.twig */
class __TwigTemplate_8ea524968609852eeb4ec8e9fcf75206288661cce93a4e04999f2fe0981ad673 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SiteBundle::base.html.twig", "SiteBundle:Pages:archives.html.twig", 1);
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
        $__internal_45f02961c9cd1a4eba63e5c1b2e3ef5fabe8cbdb184ac9fb9f29dd00c256ecd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45f02961c9cd1a4eba63e5c1b2e3ef5fabe8cbdb184ac9fb9f29dd00c256ecd6->enter($__internal_45f02961c9cd1a4eba63e5c1b2e3ef5fabe8cbdb184ac9fb9f29dd00c256ecd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:archives.html.twig"));

        $__internal_2d44f1e1dd4f1d19a3d2e6753dde6f91ded96954c09ebee3ff91e84386a1efd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d44f1e1dd4f1d19a3d2e6753dde6f91ded96954c09ebee3ff91e84386a1efd8->enter($__internal_2d44f1e1dd4f1d19a3d2e6753dde6f91ded96954c09ebee3ff91e84386a1efd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:archives.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45f02961c9cd1a4eba63e5c1b2e3ef5fabe8cbdb184ac9fb9f29dd00c256ecd6->leave($__internal_45f02961c9cd1a4eba63e5c1b2e3ef5fabe8cbdb184ac9fb9f29dd00c256ecd6_prof);

        
        $__internal_2d44f1e1dd4f1d19a3d2e6753dde6f91ded96954c09ebee3ff91e84386a1efd8->leave($__internal_2d44f1e1dd4f1d19a3d2e6753dde6f91ded96954c09ebee3ff91e84386a1efd8_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_dda732139dd66e92af4b7d8834483c5b6a00796045039731d5b56126df10a07a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dda732139dd66e92af4b7d8834483c5b6a00796045039731d5b56126df10a07a->enter($__internal_dda732139dd66e92af4b7d8834483c5b6a00796045039731d5b56126df10a07a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_43d8b89d9e775e11f3e7b200ecd2e4b464bfb13fca4f43b706ada4d7898077d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43d8b89d9e775e11f3e7b200ecd2e4b464bfb13fca4f43b706ada4d7898077d9->enter($__internal_43d8b89d9e775e11f3e7b200ecd2e4b464bfb13fca4f43b706ada4d7898077d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../public/css/pages/listearchive.css\" type=\"text/css\" />
";
        
        $__internal_43d8b89d9e775e11f3e7b200ecd2e4b464bfb13fca4f43b706ada4d7898077d9->leave($__internal_43d8b89d9e775e11f3e7b200ecd2e4b464bfb13fca4f43b706ada4d7898077d9_prof);

        
        $__internal_dda732139dd66e92af4b7d8834483c5b6a00796045039731d5b56126df10a07a->leave($__internal_dda732139dd66e92af4b7d8834483c5b6a00796045039731d5b56126df10a07a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea14178a06d8d68c327efeabb7e8b615eb5b95a99caabfab66b7f9110098ecb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea14178a06d8d68c327efeabb7e8b615eb5b95a99caabfab66b7f9110098ecb4->enter($__internal_ea14178a06d8d68c327efeabb7e8b615eb5b95a99caabfab66b7f9110098ecb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_970c097aa277124889fcb96d54e9cb037e3fe8cb67925b3745fe4cccea8f1601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_970c097aa277124889fcb96d54e9cb037e3fe8cb67925b3745fe4cccea8f1601->enter($__internal_970c097aa277124889fcb96d54e9cb037e3fe8cb67925b3745fe4cccea8f1601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Archives";
        
        $__internal_970c097aa277124889fcb96d54e9cb037e3fe8cb67925b3745fe4cccea8f1601->leave($__internal_970c097aa277124889fcb96d54e9cb037e3fe8cb67925b3745fe4cccea8f1601_prof);

        
        $__internal_ea14178a06d8d68c327efeabb7e8b615eb5b95a99caabfab66b7f9110098ecb4->leave($__internal_ea14178a06d8d68c327efeabb7e8b615eb5b95a99caabfab66b7f9110098ecb4_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_e3b62d7c8547805458e431d8f78d73f83a5f8ea8a4bf9512d7f67777e7858978 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3b62d7c8547805458e431d8f78d73f83a5f8ea8a4bf9512d7f67777e7858978->enter($__internal_e3b62d7c8547805458e431d8f78d73f83a5f8ea8a4bf9512d7f67777e7858978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_17fbcfb4532647da08d79036eefdfc4ff7c469b1e9f0031f707f7c23b254e85b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17fbcfb4532647da08d79036eefdfc4ff7c469b1e9f0031f707f7c23b254e85b->enter($__internal_17fbcfb4532647da08d79036eefdfc4ff7c469b1e9f0031f707f7c23b254e85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <div class=\"container\">
        <h2>Archives</h2>
        <div class=\"row\">
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activities"]) || array_key_exists("activities", $context) ? $context["activities"] : (function () { throw new Twig_Error_Runtime('Variable "activities" does not exist.', 13, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 14
            echo "            <div class=\"col-lg-12\" id=\"ActivitePhoto\">
                <div class=\"col-md-2\">
                    <img src=\"../public/img/kubb.jpg\" class=\"photosize\">
                </div>
                <div class=\"col-md-3\">
                    <a href=\"\"><h2 class=\"BodyTitle\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["activity"], "name", array()), "html", null, true);
            echo "</h2></a>
                </div>
                <div class=\"col-md-1\">
                    <p>Lieu : ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["activity"], "name", array()), "html", null, true);
            echo "</p>
                    <p>Date : 20/04/2017</p>
                    <p>Nombre d'inscrits : 100<p>
                </div>
            </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </div>
    </div>
";
        
        $__internal_17fbcfb4532647da08d79036eefdfc4ff7c469b1e9f0031f707f7c23b254e85b->leave($__internal_17fbcfb4532647da08d79036eefdfc4ff7c469b1e9f0031f707f7c23b254e85b_prof);

        
        $__internal_e3b62d7c8547805458e431d8f78d73f83a5f8ea8a4bf9512d7f67777e7858978->leave($__internal_e3b62d7c8547805458e431d8f78d73f83a5f8ea8a4bf9512d7f67777e7858978_prof);

    }

    public function getTemplateName()
    {
        return "SiteBundle:Pages:archives.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 28,  111 => 22,  105 => 19,  98 => 14,  94 => 13,  89 => 10,  80 => 9,  62 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SiteBundle::base.html.twig\" %}

{% block style %}
    <link rel=\"stylesheet\" href=\"../public/css/pages/listearchive.css\" type=\"text/css\" />
{% endblock %}

{% block title  %}Archives{% endblock %}

{% block content %}
    <div class=\"container\">
        <h2>Archives</h2>
        <div class=\"row\">
            {% for activity in activities %}
            <div class=\"col-lg-12\" id=\"ActivitePhoto\">
                <div class=\"col-md-2\">
                    <img src=\"../public/img/kubb.jpg\" class=\"photosize\">
                </div>
                <div class=\"col-md-3\">
                    <a href=\"\"><h2 class=\"BodyTitle\">{{ activity.name }}</h2></a>
                </div>
                <div class=\"col-md-1\">
                    <p>Lieu : {{ activity.name }}</p>
                    <p>Date : 20/04/2017</p>
                    <p>Nombre d'inscrits : 100<p>
                </div>
            </div>
                {% endfor %}
        </div>
    </div>
{% endblock %}", "SiteBundle:Pages:archives.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/SiteBundle/Resources/views/Pages/archives.html.twig");
    }
}
