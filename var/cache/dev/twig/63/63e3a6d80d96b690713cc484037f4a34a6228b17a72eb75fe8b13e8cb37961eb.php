<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_aabe2f4eb0632efc7cecb21b07216d24f43c1af873822a98691a6e5ce7988cd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_9c294f9aca2c9f895b246032f76ffcede4c400e3be6a1f37409f93ea651f062c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c294f9aca2c9f895b246032f76ffcede4c400e3be6a1f37409f93ea651f062c->enter($__internal_9c294f9aca2c9f895b246032f76ffcede4c400e3be6a1f37409f93ea651f062c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_7a57817ca2f8af6065f0498711b3dae1e476e051f0ed599bf89ab394125f5640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a57817ca2f8af6065f0498711b3dae1e476e051f0ed599bf89ab394125f5640->enter($__internal_7a57817ca2f8af6065f0498711b3dae1e476e051f0ed599bf89ab394125f5640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c294f9aca2c9f895b246032f76ffcede4c400e3be6a1f37409f93ea651f062c->leave($__internal_9c294f9aca2c9f895b246032f76ffcede4c400e3be6a1f37409f93ea651f062c_prof);

        
        $__internal_7a57817ca2f8af6065f0498711b3dae1e476e051f0ed599bf89ab394125f5640->leave($__internal_7a57817ca2f8af6065f0498711b3dae1e476e051f0ed599bf89ab394125f5640_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_04880ea0ecd9907c4310b13c3b15173e97f927d0510c009627a9bed44131cb47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04880ea0ecd9907c4310b13c3b15173e97f927d0510c009627a9bed44131cb47->enter($__internal_04880ea0ecd9907c4310b13c3b15173e97f927d0510c009627a9bed44131cb47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f943e5b3b1fba024468729ccec1ec100f4245aae4c7228958f8ad385a5635d6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f943e5b3b1fba024468729ccec1ec100f4245aae4c7228958f8ad385a5635d6c->enter($__internal_f943e5b3b1fba024468729ccec1ec100f4245aae4c7228958f8ad385a5635d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_f943e5b3b1fba024468729ccec1ec100f4245aae4c7228958f8ad385a5635d6c->leave($__internal_f943e5b3b1fba024468729ccec1ec100f4245aae4c7228958f8ad385a5635d6c_prof);

        
        $__internal_04880ea0ecd9907c4310b13c3b15173e97f927d0510c009627a9bed44131cb47->leave($__internal_04880ea0ecd9907c4310b13c3b15173e97f927d0510c009627a9bed44131cb47_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
