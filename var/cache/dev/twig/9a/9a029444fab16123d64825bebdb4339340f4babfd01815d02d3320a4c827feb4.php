<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_e4e4a3ad31412cd418fdf57092ed9ded7889c06aec29bfd1c712e4ea68ece55c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@User/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'style' => array($this, 'block_style'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@User/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79f6655c7c4d22fed711f9d3b2806201215b85824e39bcfb77f14f327c89e7ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79f6655c7c4d22fed711f9d3b2806201215b85824e39bcfb77f14f327c89e7ae->enter($__internal_79f6655c7c4d22fed711f9d3b2806201215b85824e39bcfb77f14f327c89e7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_d7da1d275ec683c662c1778b224649512e27c65542bced27b4cecba394b7adba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7da1d275ec683c662c1778b224649512e27c65542bced27b4cecba394b7adba->enter($__internal_d7da1d275ec683c662c1778b224649512e27c65542bced27b4cecba394b7adba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79f6655c7c4d22fed711f9d3b2806201215b85824e39bcfb77f14f327c89e7ae->leave($__internal_79f6655c7c4d22fed711f9d3b2806201215b85824e39bcfb77f14f327c89e7ae_prof);

        
        $__internal_d7da1d275ec683c662c1778b224649512e27c65542bced27b4cecba394b7adba->leave($__internal_d7da1d275ec683c662c1778b224649512e27c65542bced27b4cecba394b7adba_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ddc00885bdd5425c8e328bb7030f62af6bbf6f1d3857cdbb1ea9acc539865ec0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddc00885bdd5425c8e328bb7030f62af6bbf6f1d3857cdbb1ea9acc539865ec0->enter($__internal_ddc00885bdd5425c8e328bb7030f62af6bbf6f1d3857cdbb1ea9acc539865ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f78a712273c8a350786d9c3838fccc7635844455d825a861ae94df7d1431db02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f78a712273c8a350786d9c3838fccc7635844455d825a861ae94df7d1431db02->enter($__internal_f78a712273c8a350786d9c3838fccc7635844455d825a861ae94df7d1431db02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mon Compte";
        
        $__internal_f78a712273c8a350786d9c3838fccc7635844455d825a861ae94df7d1431db02->leave($__internal_f78a712273c8a350786d9c3838fccc7635844455d825a861ae94df7d1431db02_prof);

        
        $__internal_ddc00885bdd5425c8e328bb7030f62af6bbf6f1d3857cdbb1ea9acc539865ec0->leave($__internal_ddc00885bdd5425c8e328bb7030f62af6bbf6f1d3857cdbb1ea9acc539865ec0_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_9eb47aeeaa7c191e95de4c284e6b07e860d0b01fedb4249035b327b27abd47d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eb47aeeaa7c191e95de4c284e6b07e860d0b01fedb4249035b327b27abd47d4->enter($__internal_9eb47aeeaa7c191e95de4c284e6b07e860d0b01fedb4249035b327b27abd47d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_b5a1953665001fa6888c2dfefa2926d1628073e32c296daed9fcea35f4bd67c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5a1953665001fa6888c2dfefa2926d1628073e32c296daed9fcea35f4bd67c1->enter($__internal_b5a1953665001fa6888c2dfefa2926d1628073e32c296daed9fcea35f4bd67c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../../public/css/pages/profil.css\" type=\"text/css\" />
";
        
        $__internal_b5a1953665001fa6888c2dfefa2926d1628073e32c296daed9fcea35f4bd67c1->leave($__internal_b5a1953665001fa6888c2dfefa2926d1628073e32c296daed9fcea35f4bd67c1_prof);

        
        $__internal_9eb47aeeaa7c191e95de4c284e6b07e860d0b01fedb4249035b327b27abd47d4->leave($__internal_9eb47aeeaa7c191e95de4c284e6b07e860d0b01fedb4249035b327b27abd47d4_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_91dd3e8e554faa190e618383cdb606fb725a1b05b057c2d038d26c5f47010207 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91dd3e8e554faa190e618383cdb606fb725a1b05b057c2d038d26c5f47010207->enter($__internal_91dd3e8e554faa190e618383cdb606fb725a1b05b057c2d038d26c5f47010207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_85643cbe23983cbe657d7ce1e19a6de4eb6fac277f00b4175c2e07f9d8b643b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85643cbe23983cbe657d7ce1e19a6de4eb6fac277f00b4175c2e07f9d8b643b4->enter($__internal_85643cbe23983cbe657d7ce1e19a6de4eb6fac277f00b4175c2e07f9d8b643b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        $this->loadTemplate("@User/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 7)->display($context);
        
        $__internal_85643cbe23983cbe657d7ce1e19a6de4eb6fac277f00b4175c2e07f9d8b643b4->leave($__internal_85643cbe23983cbe657d7ce1e19a6de4eb6fac277f00b4175c2e07f9d8b643b4_prof);

        
        $__internal_91dd3e8e554faa190e618383cdb606fb725a1b05b057c2d038d26c5f47010207->leave($__internal_91dd3e8e554faa190e618383cdb606fb725a1b05b057c2d038d26c5f47010207_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 7,  80 => 6,  69 => 4,  60 => 3,  42 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@User/layout.html.twig\" %}
{% block title %}Mon Compte{% endblock %}
{% block style %}
    <link rel=\"stylesheet\" href=\"../../public/css/pages/profil.css\" type=\"text/css\" />
{% endblock %}
{% block fos_user_content %}
{% include \"@User/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/UserBundle/Resources/views/Profile/show.html.twig");
    }
}
