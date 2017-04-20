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
        $__internal_ce50823685a010933622a0f8f081c6481d7c489e419794f0a2e56c7ad6e60301 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce50823685a010933622a0f8f081c6481d7c489e419794f0a2e56c7ad6e60301->enter($__internal_ce50823685a010933622a0f8f081c6481d7c489e419794f0a2e56c7ad6e60301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:listeactivites.html.twig"));

        $__internal_9288126e16787e31815779efaec316dfac4e3c40541cdf28721a4da4f5f8b5fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9288126e16787e31815779efaec316dfac4e3c40541cdf28721a4da4f5f8b5fc->enter($__internal_9288126e16787e31815779efaec316dfac4e3c40541cdf28721a4da4f5f8b5fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:listeactivites.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce50823685a010933622a0f8f081c6481d7c489e419794f0a2e56c7ad6e60301->leave($__internal_ce50823685a010933622a0f8f081c6481d7c489e419794f0a2e56c7ad6e60301_prof);

        
        $__internal_9288126e16787e31815779efaec316dfac4e3c40541cdf28721a4da4f5f8b5fc->leave($__internal_9288126e16787e31815779efaec316dfac4e3c40541cdf28721a4da4f5f8b5fc_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_39f8215046eb77f0773172f7f78dd5b76964d5543c346d91ff187dd51504204a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39f8215046eb77f0773172f7f78dd5b76964d5543c346d91ff187dd51504204a->enter($__internal_39f8215046eb77f0773172f7f78dd5b76964d5543c346d91ff187dd51504204a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_3b1350a50c4be5a803414098014926e733e831582d488098cfbab2b5683236a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b1350a50c4be5a803414098014926e733e831582d488098cfbab2b5683236a5->enter($__internal_3b1350a50c4be5a803414098014926e733e831582d488098cfbab2b5683236a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../public/css/pages/listeactivite.css\" type=\"text/css\" />
";
        
        $__internal_3b1350a50c4be5a803414098014926e733e831582d488098cfbab2b5683236a5->leave($__internal_3b1350a50c4be5a803414098014926e733e831582d488098cfbab2b5683236a5_prof);

        
        $__internal_39f8215046eb77f0773172f7f78dd5b76964d5543c346d91ff187dd51504204a->leave($__internal_39f8215046eb77f0773172f7f78dd5b76964d5543c346d91ff187dd51504204a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba80ac5d02d744463112141c1d392ebe90001a241ac39f6967310a963d2b7538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba80ac5d02d744463112141c1d392ebe90001a241ac39f6967310a963d2b7538->enter($__internal_ba80ac5d02d744463112141c1d392ebe90001a241ac39f6967310a963d2b7538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3d3dbda3336f24c304f2b8bade5c5af49c8fc99a3f83caca4ad554a341a3f944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d3dbda3336f24c304f2b8bade5c5af49c8fc99a3f83caca4ad554a341a3f944->enter($__internal_3d3dbda3336f24c304f2b8bade5c5af49c8fc99a3f83caca4ad554a341a3f944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Activité Prévues";
        
        $__internal_3d3dbda3336f24c304f2b8bade5c5af49c8fc99a3f83caca4ad554a341a3f944->leave($__internal_3d3dbda3336f24c304f2b8bade5c5af49c8fc99a3f83caca4ad554a341a3f944_prof);

        
        $__internal_ba80ac5d02d744463112141c1d392ebe90001a241ac39f6967310a963d2b7538->leave($__internal_ba80ac5d02d744463112141c1d392ebe90001a241ac39f6967310a963d2b7538_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_c0e3aba61f4a433df450d66407a5164c73cc50df734eb07881523e0934c5aab4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0e3aba61f4a433df450d66407a5164c73cc50df734eb07881523e0934c5aab4->enter($__internal_c0e3aba61f4a433df450d66407a5164c73cc50df734eb07881523e0934c5aab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7db9ea7ebe91dd3af8c840765f953054e65455108f32859f744aefd5fde71f89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7db9ea7ebe91dd3af8c840765f953054e65455108f32859f744aefd5fde71f89->enter($__internal_7db9ea7ebe91dd3af8c840765f953054e65455108f32859f744aefd5fde71f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                        <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_activite_by_id", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["activity"], "id", array()))), "html", null, true);
            echo "\"><h2 class=\"BodyTitle\">";
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
        
        $__internal_7db9ea7ebe91dd3af8c840765f953054e65455108f32859f744aefd5fde71f89->leave($__internal_7db9ea7ebe91dd3af8c840765f953054e65455108f32859f744aefd5fde71f89_prof);

        
        $__internal_c0e3aba61f4a433df450d66407a5164c73cc50df734eb07881523e0934c5aab4->leave($__internal_c0e3aba61f4a433df450d66407a5164c73cc50df734eb07881523e0934c5aab4_prof);

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
        return array (  124 => 27,  113 => 22,  105 => 19,  98 => 14,  94 => 13,  89 => 10,  80 => 9,  62 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
                        <a href=\"{{ path('site_activite_by_id', {'id': activity.id}) }}\"><h2 class=\"BodyTitle\">{{ activity.name }}</h2></a>
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
