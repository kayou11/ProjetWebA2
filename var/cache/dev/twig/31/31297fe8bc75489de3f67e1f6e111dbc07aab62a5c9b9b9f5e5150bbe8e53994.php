<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_ccbed40a533cdd38faac5a17606fe36edd003242aa4d860b00e3ad2d8d2f3acc extends Twig_Template
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
        $__internal_a1f255af75b6c9146c583345e0201f8327fcdc7eb60acb462824f358f0487df5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1f255af75b6c9146c583345e0201f8327fcdc7eb60acb462824f358f0487df5->enter($__internal_a1f255af75b6c9146c583345e0201f8327fcdc7eb60acb462824f358f0487df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_e203b99bf636ffabed41ca85d54a61ad0e764ecf4c9eb16af7e50fa3ab95ac37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e203b99bf636ffabed41ca85d54a61ad0e764ecf4c9eb16af7e50fa3ab95ac37->enter($__internal_e203b99bf636ffabed41ca85d54a61ad0e764ecf4c9eb16af7e50fa3ab95ac37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1f255af75b6c9146c583345e0201f8327fcdc7eb60acb462824f358f0487df5->leave($__internal_a1f255af75b6c9146c583345e0201f8327fcdc7eb60acb462824f358f0487df5_prof);

        
        $__internal_e203b99bf636ffabed41ca85d54a61ad0e764ecf4c9eb16af7e50fa3ab95ac37->leave($__internal_e203b99bf636ffabed41ca85d54a61ad0e764ecf4c9eb16af7e50fa3ab95ac37_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d1ba7aa7e18a62955bd2a3ca1604d00ea196fa187b9f2c1537b62ca71bdc2704 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1ba7aa7e18a62955bd2a3ca1604d00ea196fa187b9f2c1537b62ca71bdc2704->enter($__internal_d1ba7aa7e18a62955bd2a3ca1604d00ea196fa187b9f2c1537b62ca71bdc2704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_30575933dc91db49097a961ab959a73a5f0cf454cf5dcb4cafedcc28d3be27a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30575933dc91db49097a961ab959a73a5f0cf454cf5dcb4cafedcc28d3be27a7->enter($__internal_30575933dc91db49097a961ab959a73a5f0cf454cf5dcb4cafedcc28d3be27a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_30575933dc91db49097a961ab959a73a5f0cf454cf5dcb4cafedcc28d3be27a7->leave($__internal_30575933dc91db49097a961ab959a73a5f0cf454cf5dcb4cafedcc28d3be27a7_prof);

        
        $__internal_d1ba7aa7e18a62955bd2a3ca1604d00ea196fa187b9f2c1537b62ca71bdc2704->leave($__internal_d1ba7aa7e18a62955bd2a3ca1604d00ea196fa187b9f2c1537b62ca71bdc2704_prof);

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
