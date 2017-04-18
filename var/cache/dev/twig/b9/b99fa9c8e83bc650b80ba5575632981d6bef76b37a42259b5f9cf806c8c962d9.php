<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_1b20ba1c8a5041e2f3bf9635980b4009b776d06ded30fbdef0736ae5342df112 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@User/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@User/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de6f452f150816e727f75af3f30d13055c6c6e31ba4eb747d801334cb440b6ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de6f452f150816e727f75af3f30d13055c6c6e31ba4eb747d801334cb440b6ee->enter($__internal_de6f452f150816e727f75af3f30d13055c6c6e31ba4eb747d801334cb440b6ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_2e69100fde03f11a1c80420f7052421d7086dae613dd18e2bafe7e473b5733db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e69100fde03f11a1c80420f7052421d7086dae613dd18e2bafe7e473b5733db->enter($__internal_2e69100fde03f11a1c80420f7052421d7086dae613dd18e2bafe7e473b5733db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de6f452f150816e727f75af3f30d13055c6c6e31ba4eb747d801334cb440b6ee->leave($__internal_de6f452f150816e727f75af3f30d13055c6c6e31ba4eb747d801334cb440b6ee_prof);

        
        $__internal_2e69100fde03f11a1c80420f7052421d7086dae613dd18e2bafe7e473b5733db->leave($__internal_2e69100fde03f11a1c80420f7052421d7086dae613dd18e2bafe7e473b5733db_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0c195ca4ae4648a80e57e4e40460c665cb9eb7c1585907c5e75875d9fb1dc6aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c195ca4ae4648a80e57e4e40460c665cb9eb7c1585907c5e75875d9fb1dc6aa->enter($__internal_0c195ca4ae4648a80e57e4e40460c665cb9eb7c1585907c5e75875d9fb1dc6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f9a7a6e5ce853be0b00d56b7bb9b7223b3ab8e3ee52fda7f27c850fc0ccdf2b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a7a6e5ce853be0b00d56b7bb9b7223b3ab8e3ee52fda7f27c850fc0ccdf2b7->enter($__internal_f9a7a6e5ce853be0b00d56b7bb9b7223b3ab8e3ee52fda7f27c850fc0ccdf2b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "    ";
        $this->loadTemplate("@User/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 3)->display($context);
        
        $__internal_f9a7a6e5ce853be0b00d56b7bb9b7223b3ab8e3ee52fda7f27c850fc0ccdf2b7->leave($__internal_f9a7a6e5ce853be0b00d56b7bb9b7223b3ab8e3ee52fda7f27c850fc0ccdf2b7_prof);

        
        $__internal_0c195ca4ae4648a80e57e4e40460c665cb9eb7c1585907c5e75875d9fb1dc6aa->leave($__internal_0c195ca4ae4648a80e57e4e40460c665cb9eb7c1585907c5e75875d9fb1dc6aa_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@User/layout.html.twig\" %}
{% block fos_user_content %}
    {% include \"@User/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}", "@FOSUser/Registration/register.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/src/UserBundle/Resources/views/Registration/register.html.twig");
    }
}
