<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_8492bc5076ac9ccba69d3be404bd34d9a3d070d326f13e8c6dd2fd5bd85471c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_928b493abaadb6abfadb4ecf9cae5b97079f125fadae13dea2bb73110c63ca79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_928b493abaadb6abfadb4ecf9cae5b97079f125fadae13dea2bb73110c63ca79->enter($__internal_928b493abaadb6abfadb4ecf9cae5b97079f125fadae13dea2bb73110c63ca79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_69b88f6910478e3dcf2273387e25cff49a9ad143197ff16006c8b5cc067b530c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69b88f6910478e3dcf2273387e25cff49a9ad143197ff16006c8b5cc067b530c->enter($__internal_69b88f6910478e3dcf2273387e25cff49a9ad143197ff16006c8b5cc067b530c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_928b493abaadb6abfadb4ecf9cae5b97079f125fadae13dea2bb73110c63ca79->leave($__internal_928b493abaadb6abfadb4ecf9cae5b97079f125fadae13dea2bb73110c63ca79_prof);

        
        $__internal_69b88f6910478e3dcf2273387e25cff49a9ad143197ff16006c8b5cc067b530c->leave($__internal_69b88f6910478e3dcf2273387e25cff49a9ad143197ff16006c8b5cc067b530c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_714f51c1634c7194714bd340ea771494e4ec74d463f737eff73bbf31bf3b516d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_714f51c1634c7194714bd340ea771494e4ec74d463f737eff73bbf31bf3b516d->enter($__internal_714f51c1634c7194714bd340ea771494e4ec74d463f737eff73bbf31bf3b516d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f3d859419b8de743abb232d7ba18049305b7cd8c5771781cd2541afb95571f8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3d859419b8de743abb232d7ba18049305b7cd8c5771781cd2541afb95571f8a->enter($__internal_f3d859419b8de743abb232d7ba18049305b7cd8c5771781cd2541afb95571f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_f3d859419b8de743abb232d7ba18049305b7cd8c5771781cd2541afb95571f8a->leave($__internal_f3d859419b8de743abb232d7ba18049305b7cd8c5771781cd2541afb95571f8a_prof);

        
        $__internal_714f51c1634c7194714bd340ea771494e4ec74d463f737eff73bbf31bf3b516d->leave($__internal_714f51c1634c7194714bd340ea771494e4ec74d463f737eff73bbf31bf3b516d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
