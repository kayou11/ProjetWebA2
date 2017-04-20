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
        $__internal_753276269659bb673ff8a03662e90ef20c3803c86bb4fa741122cb0e87d1e4c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_753276269659bb673ff8a03662e90ef20c3803c86bb4fa741122cb0e87d1e4c1->enter($__internal_753276269659bb673ff8a03662e90ef20c3803c86bb4fa741122cb0e87d1e4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:listeactivites.html.twig"));

        $__internal_97bf65b99f547d6d75833a90a0bc626a3065321a1f92ae99437f802dc9feb471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97bf65b99f547d6d75833a90a0bc626a3065321a1f92ae99437f802dc9feb471->enter($__internal_97bf65b99f547d6d75833a90a0bc626a3065321a1f92ae99437f802dc9feb471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SiteBundle:Pages:listeactivites.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_753276269659bb673ff8a03662e90ef20c3803c86bb4fa741122cb0e87d1e4c1->leave($__internal_753276269659bb673ff8a03662e90ef20c3803c86bb4fa741122cb0e87d1e4c1_prof);

        
        $__internal_97bf65b99f547d6d75833a90a0bc626a3065321a1f92ae99437f802dc9feb471->leave($__internal_97bf65b99f547d6d75833a90a0bc626a3065321a1f92ae99437f802dc9feb471_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_812ecfd64ecda0eef89a5cbabcbfbe9a3bff4ceffac68f1e121ec599f261bdc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_812ecfd64ecda0eef89a5cbabcbfbe9a3bff4ceffac68f1e121ec599f261bdc6->enter($__internal_812ecfd64ecda0eef89a5cbabcbfbe9a3bff4ceffac68f1e121ec599f261bdc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_d911d871b1e5f85edb188b5da168e4015d8e7c2ecea8e27f21498616a7c60ba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d911d871b1e5f85edb188b5da168e4015d8e7c2ecea8e27f21498616a7c60ba1->enter($__internal_d911d871b1e5f85edb188b5da168e4015d8e7c2ecea8e27f21498616a7c60ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../public/css/pages/listeactivite.css\" type=\"text/css\" />
";
        
        $__internal_d911d871b1e5f85edb188b5da168e4015d8e7c2ecea8e27f21498616a7c60ba1->leave($__internal_d911d871b1e5f85edb188b5da168e4015d8e7c2ecea8e27f21498616a7c60ba1_prof);

        
        $__internal_812ecfd64ecda0eef89a5cbabcbfbe9a3bff4ceffac68f1e121ec599f261bdc6->leave($__internal_812ecfd64ecda0eef89a5cbabcbfbe9a3bff4ceffac68f1e121ec599f261bdc6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_32629fb69bbfc8c569958bcc03bf3c3490606396c9c83e9bc211f5028eba6d35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32629fb69bbfc8c569958bcc03bf3c3490606396c9c83e9bc211f5028eba6d35->enter($__internal_32629fb69bbfc8c569958bcc03bf3c3490606396c9c83e9bc211f5028eba6d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8588b85bbf1b0c5c414b1102b2c79c8870f1a0d5a71468c099f1b4668e7b7592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8588b85bbf1b0c5c414b1102b2c79c8870f1a0d5a71468c099f1b4668e7b7592->enter($__internal_8588b85bbf1b0c5c414b1102b2c79c8870f1a0d5a71468c099f1b4668e7b7592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Activité Prévues";
        
        $__internal_8588b85bbf1b0c5c414b1102b2c79c8870f1a0d5a71468c099f1b4668e7b7592->leave($__internal_8588b85bbf1b0c5c414b1102b2c79c8870f1a0d5a71468c099f1b4668e7b7592_prof);

        
        $__internal_32629fb69bbfc8c569958bcc03bf3c3490606396c9c83e9bc211f5028eba6d35->leave($__internal_32629fb69bbfc8c569958bcc03bf3c3490606396c9c83e9bc211f5028eba6d35_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_b03760d30af54512cf4a73a3f0193621a29bf2b178f2d98eff6534c3198d5634 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b03760d30af54512cf4a73a3f0193621a29bf2b178f2d98eff6534c3198d5634->enter($__internal_b03760d30af54512cf4a73a3f0193621a29bf2b178f2d98eff6534c3198d5634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_25582a774ee5c23512bc125fdd82521c5e59f3c3c41e09b36909b56d21307c5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25582a774ee5c23512bc125fdd82521c5e59f3c3c41e09b36909b56d21307c5a->enter($__internal_25582a774ee5c23512bc125fdd82521c5e59f3c3c41e09b36909b56d21307c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_25582a774ee5c23512bc125fdd82521c5e59f3c3c41e09b36909b56d21307c5a->leave($__internal_25582a774ee5c23512bc125fdd82521c5e59f3c3c41e09b36909b56d21307c5a_prof);

        
        $__internal_b03760d30af54512cf4a73a3f0193621a29bf2b178f2d98eff6534c3198d5634->leave($__internal_b03760d30af54512cf4a73a3f0193621a29bf2b178f2d98eff6534c3198d5634_prof);

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
