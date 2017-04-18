<?php

/* UserBundle:Security:login.html.twig */
class __TwigTemplate_b3f3a7a388df2733a0e26316a63119ec508600b26ea6162ddaf24171d31d8f41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SiteBundle::base.html.twig", "UserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SiteBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_392ed7eed4ba34b7d3020f33f74c6042216bed7b76bf1a6fb9428eb78d5ffda0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_392ed7eed4ba34b7d3020f33f74c6042216bed7b76bf1a6fb9428eb78d5ffda0->enter($__internal_392ed7eed4ba34b7d3020f33f74c6042216bed7b76bf1a6fb9428eb78d5ffda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $__internal_ebbde84f8c0d5749b2009aa0ac9ed774c49bd1398ebe4d6346069e7c07b08fe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebbde84f8c0d5749b2009aa0ac9ed774c49bd1398ebe4d6346069e7c07b08fe2->enter($__internal_ebbde84f8c0d5749b2009aa0ac9ed774c49bd1398ebe4d6346069e7c07b08fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_392ed7eed4ba34b7d3020f33f74c6042216bed7b76bf1a6fb9428eb78d5ffda0->leave($__internal_392ed7eed4ba34b7d3020f33f74c6042216bed7b76bf1a6fb9428eb78d5ffda0_prof);

        
        $__internal_ebbde84f8c0d5749b2009aa0ac9ed774c49bd1398ebe4d6346069e7c07b08fe2->leave($__internal_ebbde84f8c0d5749b2009aa0ac9ed774c49bd1398ebe4d6346069e7c07b08fe2_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_1df04f897eec19ea80e79726e283ac081f18e67df4713b64c603319b8bf1d6e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1df04f897eec19ea80e79726e283ac081f18e67df4713b64c603319b8bf1d6e4->enter($__internal_1df04f897eec19ea80e79726e283ac081f18e67df4713b64c603319b8bf1d6e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_daac791885f8fe15370e852c1c4552fbf1154d2c316042f3b2dcc8c3898f573f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daac791885f8fe15370e852c1c4552fbf1154d2c316042f3b2dcc8c3898f573f->enter($__internal_daac791885f8fe15370e852c1c4552fbf1154d2c316042f3b2dcc8c3898f573f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        // line 5
        echo "    ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 5, $this->getSourceContext()); })())) {
            // line 6
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 6, $this->getSourceContext()); })()), "message", array()), "html", null, true);
            echo "</div>
    ";
        }
        // line 8
        echo "
    ";
        // line 10
        echo "    <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
        <label for=\"username\">Login :</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 12, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />

        <label for=\"password\">Mot de passe :</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />
        <br />
        <input type=\"submit\" value=\"Connexion\" />
    </form>
";
        
        $__internal_daac791885f8fe15370e852c1c4552fbf1154d2c316042f3b2dcc8c3898f573f->leave($__internal_daac791885f8fe15370e852c1c4552fbf1154d2c316042f3b2dcc8c3898f573f_prof);

        
        $__internal_1df04f897eec19ea80e79726e283ac081f18e67df4713b64c603319b8bf1d6e4->leave($__internal_1df04f897eec19ea80e79726e283ac081f18e67df4713b64c603319b8bf1d6e4_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 12,  63 => 10,  60 => 8,  54 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SiteBundle::base.html.twig\" %}

{% block content %}
    {# S'il y a une erreur, on l'affiche dans un joli cadre #}
    {% if error %}
        <div class=\"alert alert-danger\">{{ error.message }}</div>
    {% endif %}

    {# Le formulaire, avec URL de soumission vers la route « login_check » comme on l'a vu #}
    <form action=\"{{ path('login_check') }}\" method=\"post\">
        <label for=\"username\">Login :</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

        <label for=\"password\">Mot de passe :</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />
        <br />
        <input type=\"submit\" value=\"Connexion\" />
    </form>
{% endblock %}", "UserBundle:Security:login.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/UserBundle/Resources/views/Security/login.html.twig");
    }
}
