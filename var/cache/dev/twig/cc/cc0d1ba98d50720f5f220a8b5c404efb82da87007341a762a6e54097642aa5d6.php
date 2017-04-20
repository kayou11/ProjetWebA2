<?php

/* SiteBundle:Pages:listeactivites.html.twig */
class __TwigTemplate_a7a703dfc933b2b412f9f937e6c5f45e3debd4df5a7e5764ba4bccaabc83e52f extends Twig_Template
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
        $__internal_7d444c9bda809174c3fc39b561d1d1ce0af7b9b3026c5c0dbbf26b4d3f781080 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d444c9bda809174c3fc39b561d1d1ce0af7b9b3026c5c0dbbf26b4d3f781080->enter($__internal_7d444c9bda809174c3fc39b561d1d1ce0af7b9b3026c5c0dbbf26b4d3f781080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:listeactivites.html.twig"));

        $__internal_e9488ef55d0eb24c27bfead17f555ca1d2168a4fe749f19dc607b3b29688d927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9488ef55d0eb24c27bfead17f555ca1d2168a4fe749f19dc607b3b29688d927->enter($__internal_e9488ef55d0eb24c27bfead17f555ca1d2168a4fe749f19dc607b3b29688d927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:listeactivites.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d444c9bda809174c3fc39b561d1d1ce0af7b9b3026c5c0dbbf26b4d3f781080->leave($__internal_7d444c9bda809174c3fc39b561d1d1ce0af7b9b3026c5c0dbbf26b4d3f781080_prof);

        
        $__internal_e9488ef55d0eb24c27bfead17f555ca1d2168a4fe749f19dc607b3b29688d927->leave($__internal_e9488ef55d0eb24c27bfead17f555ca1d2168a4fe749f19dc607b3b29688d927_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_db728c65a326d7f89f101e3414bc34578765b5ce176d6434249e407dd663d7b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db728c65a326d7f89f101e3414bc34578765b5ce176d6434249e407dd663d7b7->enter($__internal_db728c65a326d7f89f101e3414bc34578765b5ce176d6434249e407dd663d7b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_f4d52295eb50c707bbf6a9008fa6981896af5344e95a0e9e604951b1b21dc5b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4d52295eb50c707bbf6a9008fa6981896af5344e95a0e9e604951b1b21dc5b5->enter($__internal_f4d52295eb50c707bbf6a9008fa6981896af5344e95a0e9e604951b1b21dc5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../public/css/pages/listeactivite.css\" type=\"text/css\" />
";
        
        $__internal_f4d52295eb50c707bbf6a9008fa6981896af5344e95a0e9e604951b1b21dc5b5->leave($__internal_f4d52295eb50c707bbf6a9008fa6981896af5344e95a0e9e604951b1b21dc5b5_prof);

        
        $__internal_db728c65a326d7f89f101e3414bc34578765b5ce176d6434249e407dd663d7b7->leave($__internal_db728c65a326d7f89f101e3414bc34578765b5ce176d6434249e407dd663d7b7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_120f2d3ea8c5f3fc746255914348542ba0814fb52618c13c96bbaa1eea78e765 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_120f2d3ea8c5f3fc746255914348542ba0814fb52618c13c96bbaa1eea78e765->enter($__internal_120f2d3ea8c5f3fc746255914348542ba0814fb52618c13c96bbaa1eea78e765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f5a49b105333218872deed9c092bae2ba18cf063aef873639c983fe2b1b651c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5a49b105333218872deed9c092bae2ba18cf063aef873639c983fe2b1b651c1->enter($__internal_f5a49b105333218872deed9c092bae2ba18cf063aef873639c983fe2b1b651c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Activité Prévues";
        
        $__internal_f5a49b105333218872deed9c092bae2ba18cf063aef873639c983fe2b1b651c1->leave($__internal_f5a49b105333218872deed9c092bae2ba18cf063aef873639c983fe2b1b651c1_prof);

        
        $__internal_120f2d3ea8c5f3fc746255914348542ba0814fb52618c13c96bbaa1eea78e765->leave($__internal_120f2d3ea8c5f3fc746255914348542ba0814fb52618c13c96bbaa1eea78e765_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_b958cebb4e61e8dc0af7e93056997f908686df8413295aef65acb66eb33e8aff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b958cebb4e61e8dc0af7e93056997f908686df8413295aef65acb66eb33e8aff->enter($__internal_b958cebb4e61e8dc0af7e93056997f908686df8413295aef65acb66eb33e8aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5dee3dff4de2f5aa8d2813b6654d93d8cc39b18e95526a76cc53c56563117bfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dee3dff4de2f5aa8d2813b6654d93d8cc39b18e95526a76cc53c56563117bfe->enter($__internal_5dee3dff4de2f5aa8d2813b6654d93d8cc39b18e95526a76cc53c56563117bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                        <a href=\"\"><h2 class=\"BodyTitle\">";
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
        
        $__internal_5dee3dff4de2f5aa8d2813b6654d93d8cc39b18e95526a76cc53c56563117bfe->leave($__internal_5dee3dff4de2f5aa8d2813b6654d93d8cc39b18e95526a76cc53c56563117bfe_prof);

        
        $__internal_b958cebb4e61e8dc0af7e93056997f908686df8413295aef65acb66eb33e8aff->leave($__internal_b958cebb4e61e8dc0af7e93056997f908686df8413295aef65acb66eb33e8aff_prof);

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
                        <a href=\"\"><h2 class=\"BodyTitle\">{{ activity.name }}</h2></a>
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
