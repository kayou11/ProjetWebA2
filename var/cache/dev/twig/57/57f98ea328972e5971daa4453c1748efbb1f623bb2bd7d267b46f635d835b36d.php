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
        $__internal_ab0bab0a68a0765c8279fc67d8d156c3b19538ff99b68ef46ae2e738382ecf1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab0bab0a68a0765c8279fc67d8d156c3b19538ff99b68ef46ae2e738382ecf1b->enter($__internal_ab0bab0a68a0765c8279fc67d8d156c3b19538ff99b68ef46ae2e738382ecf1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:archives.html.twig"));

        $__internal_c35ed4b5825636dfa7580bdab269aa95bc91558aec24b22556c533a337a11fa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c35ed4b5825636dfa7580bdab269aa95bc91558aec24b22556c533a337a11fa6->enter($__internal_c35ed4b5825636dfa7580bdab269aa95bc91558aec24b22556c533a337a11fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:archives.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab0bab0a68a0765c8279fc67d8d156c3b19538ff99b68ef46ae2e738382ecf1b->leave($__internal_ab0bab0a68a0765c8279fc67d8d156c3b19538ff99b68ef46ae2e738382ecf1b_prof);

        
        $__internal_c35ed4b5825636dfa7580bdab269aa95bc91558aec24b22556c533a337a11fa6->leave($__internal_c35ed4b5825636dfa7580bdab269aa95bc91558aec24b22556c533a337a11fa6_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_b82edd1e53cb18ef0d845ef1ff2170e7ae3bfdf2a670fbb44040d8188d972e93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b82edd1e53cb18ef0d845ef1ff2170e7ae3bfdf2a670fbb44040d8188d972e93->enter($__internal_b82edd1e53cb18ef0d845ef1ff2170e7ae3bfdf2a670fbb44040d8188d972e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_219fbaa559a3178272af1820ec558b92502f44fd862192e896e1004110ef661a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_219fbaa559a3178272af1820ec558b92502f44fd862192e896e1004110ef661a->enter($__internal_219fbaa559a3178272af1820ec558b92502f44fd862192e896e1004110ef661a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../public/css/pages/listearchive.css\" type=\"text/css\" />
";
        
        $__internal_219fbaa559a3178272af1820ec558b92502f44fd862192e896e1004110ef661a->leave($__internal_219fbaa559a3178272af1820ec558b92502f44fd862192e896e1004110ef661a_prof);

        
        $__internal_b82edd1e53cb18ef0d845ef1ff2170e7ae3bfdf2a670fbb44040d8188d972e93->leave($__internal_b82edd1e53cb18ef0d845ef1ff2170e7ae3bfdf2a670fbb44040d8188d972e93_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6363f81605cd41cab5d2bfa65bee77ae91314933e233006672aceb98fce82387 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6363f81605cd41cab5d2bfa65bee77ae91314933e233006672aceb98fce82387->enter($__internal_6363f81605cd41cab5d2bfa65bee77ae91314933e233006672aceb98fce82387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a0acb049e1e12b32ca1e5544e8ba72f7e0854075f562e69466c37084d9cf407f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0acb049e1e12b32ca1e5544e8ba72f7e0854075f562e69466c37084d9cf407f->enter($__internal_a0acb049e1e12b32ca1e5544e8ba72f7e0854075f562e69466c37084d9cf407f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Archives";
        
        $__internal_a0acb049e1e12b32ca1e5544e8ba72f7e0854075f562e69466c37084d9cf407f->leave($__internal_a0acb049e1e12b32ca1e5544e8ba72f7e0854075f562e69466c37084d9cf407f_prof);

        
        $__internal_6363f81605cd41cab5d2bfa65bee77ae91314933e233006672aceb98fce82387->leave($__internal_6363f81605cd41cab5d2bfa65bee77ae91314933e233006672aceb98fce82387_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_3b8ea55c51e0c32530e2d1a2015c6a3d673122e7e7b0f08d5536142d887b4016 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b8ea55c51e0c32530e2d1a2015c6a3d673122e7e7b0f08d5536142d887b4016->enter($__internal_3b8ea55c51e0c32530e2d1a2015c6a3d673122e7e7b0f08d5536142d887b4016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d6b5d643f7875885b95b34f8f8385df29ffb5e5dc3735734693d62c9bc0c53f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6b5d643f7875885b95b34f8f8385df29ffb5e5dc3735734693d62c9bc0c53f8->enter($__internal_d6b5d643f7875885b95b34f8f8385df29ffb5e5dc3735734693d62c9bc0c53f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_d6b5d643f7875885b95b34f8f8385df29ffb5e5dc3735734693d62c9bc0c53f8->leave($__internal_d6b5d643f7875885b95b34f8f8385df29ffb5e5dc3735734693d62c9bc0c53f8_prof);

        
        $__internal_3b8ea55c51e0c32530e2d1a2015c6a3d673122e7e7b0f08d5536142d887b4016->leave($__internal_3b8ea55c51e0c32530e2d1a2015c6a3d673122e7e7b0f08d5536142d887b4016_prof);

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
