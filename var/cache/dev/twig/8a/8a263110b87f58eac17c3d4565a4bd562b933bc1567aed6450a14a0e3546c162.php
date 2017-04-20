<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_65441f6b2458d1e4e0e0ba82d47960727d870b3e9c6cdbf8f9881a02482e2df5 extends Twig_Template
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
        $__internal_8db6fe361dc2fb0c49f3c019a50aed92939a7d1e0356acd151fe00b206d023eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8db6fe361dc2fb0c49f3c019a50aed92939a7d1e0356acd151fe00b206d023eb->enter($__internal_8db6fe361dc2fb0c49f3c019a50aed92939a7d1e0356acd151fe00b206d023eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_cc3eef0f43471ddb768ef2e48424128094daff3fbf49306dafc62aa171ed08d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc3eef0f43471ddb768ef2e48424128094daff3fbf49306dafc62aa171ed08d3->enter($__internal_cc3eef0f43471ddb768ef2e48424128094daff3fbf49306dafc62aa171ed08d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8db6fe361dc2fb0c49f3c019a50aed92939a7d1e0356acd151fe00b206d023eb->leave($__internal_8db6fe361dc2fb0c49f3c019a50aed92939a7d1e0356acd151fe00b206d023eb_prof);

        
        $__internal_cc3eef0f43471ddb768ef2e48424128094daff3fbf49306dafc62aa171ed08d3->leave($__internal_cc3eef0f43471ddb768ef2e48424128094daff3fbf49306dafc62aa171ed08d3_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_df78bdf986fec5e99a7cc8df6f8caf3cab08c0bee8d512f7a123be2df8e3a566 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df78bdf986fec5e99a7cc8df6f8caf3cab08c0bee8d512f7a123be2df8e3a566->enter($__internal_df78bdf986fec5e99a7cc8df6f8caf3cab08c0bee8d512f7a123be2df8e3a566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5605b29a8228f9a7a6b0330f64eb5fdbb9bf832ea68956902c23dc428c70e277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5605b29a8228f9a7a6b0330f64eb5fdbb9bf832ea68956902c23dc428c70e277->enter($__internal_5605b29a8228f9a7a6b0330f64eb5fdbb9bf832ea68956902c23dc428c70e277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mon Compte";
        
        $__internal_5605b29a8228f9a7a6b0330f64eb5fdbb9bf832ea68956902c23dc428c70e277->leave($__internal_5605b29a8228f9a7a6b0330f64eb5fdbb9bf832ea68956902c23dc428c70e277_prof);

        
        $__internal_df78bdf986fec5e99a7cc8df6f8caf3cab08c0bee8d512f7a123be2df8e3a566->leave($__internal_df78bdf986fec5e99a7cc8df6f8caf3cab08c0bee8d512f7a123be2df8e3a566_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_566047c4371196dde9e6d96b61eba3c67d66e7e3b4eaba2250a369f87a122d4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_566047c4371196dde9e6d96b61eba3c67d66e7e3b4eaba2250a369f87a122d4e->enter($__internal_566047c4371196dde9e6d96b61eba3c67d66e7e3b4eaba2250a369f87a122d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_8ae93993616f7d1c1e2cec674221bc757dcf4c9ff37c4331c1f68fc75853a693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ae93993616f7d1c1e2cec674221bc757dcf4c9ff37c4331c1f68fc75853a693->enter($__internal_8ae93993616f7d1c1e2cec674221bc757dcf4c9ff37c4331c1f68fc75853a693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"../../public/css/pages/profil.css\" type=\"text/css\" />
";
        
        $__internal_8ae93993616f7d1c1e2cec674221bc757dcf4c9ff37c4331c1f68fc75853a693->leave($__internal_8ae93993616f7d1c1e2cec674221bc757dcf4c9ff37c4331c1f68fc75853a693_prof);

        
        $__internal_566047c4371196dde9e6d96b61eba3c67d66e7e3b4eaba2250a369f87a122d4e->leave($__internal_566047c4371196dde9e6d96b61eba3c67d66e7e3b4eaba2250a369f87a122d4e_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_447ebdf0b6c318764acaf884a7163e2daf51ad9ce725f1a180caa03c078aa2db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_447ebdf0b6c318764acaf884a7163e2daf51ad9ce725f1a180caa03c078aa2db->enter($__internal_447ebdf0b6c318764acaf884a7163e2daf51ad9ce725f1a180caa03c078aa2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_35c04346f568613a1d0f49eac44f482299b2d338177a05d3278dc19b632862e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35c04346f568613a1d0f49eac44f482299b2d338177a05d3278dc19b632862e2->enter($__internal_35c04346f568613a1d0f49eac44f482299b2d338177a05d3278dc19b632862e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        $this->loadTemplate("@User/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 7)->display($context);
        
        $__internal_35c04346f568613a1d0f49eac44f482299b2d338177a05d3278dc19b632862e2->leave($__internal_35c04346f568613a1d0f49eac44f482299b2d338177a05d3278dc19b632862e2_prof);

        
        $__internal_447ebdf0b6c318764acaf884a7163e2daf51ad9ce725f1a180caa03c078aa2db->leave($__internal_447ebdf0b6c318764acaf884a7163e2daf51ad9ce725f1a180caa03c078aa2db_prof);

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
