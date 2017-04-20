<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_b923c8616ca6daa0b81e9a1d5d935bbae7b5540fa36e5af16247804821141998 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8fba632b6aea69cc117b4c5e856f375bdd49805810f0b2e83d72c6f44e8a95b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8fba632b6aea69cc117b4c5e856f375bdd49805810f0b2e83d72c6f44e8a95b->enter($__internal_f8fba632b6aea69cc117b4c5e856f375bdd49805810f0b2e83d72c6f44e8a95b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_4311e99a2e110d34c647c77637362fe9e0c962982d9524e018b8219165c75cd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4311e99a2e110d34c647c77637362fe9e0c962982d9524e018b8219165c75cd2->enter($__internal_4311e99a2e110d34c647c77637362fe9e0c962982d9524e018b8219165c75cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f8fba632b6aea69cc117b4c5e856f375bdd49805810f0b2e83d72c6f44e8a95b->leave($__internal_f8fba632b6aea69cc117b4c5e856f375bdd49805810f0b2e83d72c6f44e8a95b_prof);

        
        $__internal_4311e99a2e110d34c647c77637362fe9e0c962982d9524e018b8219165c75cd2->leave($__internal_4311e99a2e110d34c647c77637362fe9e0c962982d9524e018b8219165c75cd2_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_89c7165fbbcb4bb9624efa0965280fcf55d21a1e2e85cec066556d72275f3ad0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89c7165fbbcb4bb9624efa0965280fcf55d21a1e2e85cec066556d72275f3ad0->enter($__internal_89c7165fbbcb4bb9624efa0965280fcf55d21a1e2e85cec066556d72275f3ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_9477d406eb2f225bbf3d8f1561a5c5948353acbd617285a30795641696a55308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9477d406eb2f225bbf3d8f1561a5c5948353acbd617285a30795641696a55308->enter($__internal_9477d406eb2f225bbf3d8f1561a5c5948353acbd617285a30795641696a55308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_9477d406eb2f225bbf3d8f1561a5c5948353acbd617285a30795641696a55308->leave($__internal_9477d406eb2f225bbf3d8f1561a5c5948353acbd617285a30795641696a55308_prof);

        
        $__internal_89c7165fbbcb4bb9624efa0965280fcf55d21a1e2e85cec066556d72275f3ad0->leave($__internal_89c7165fbbcb4bb9624efa0965280fcf55d21a1e2e85cec066556d72275f3ad0_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0a8b2e959454009ede243c7165b873a75a7f58fd250446a426f5ebd14a7f8ed8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a8b2e959454009ede243c7165b873a75a7f58fd250446a426f5ebd14a7f8ed8->enter($__internal_0a8b2e959454009ede243c7165b873a75a7f58fd250446a426f5ebd14a7f8ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_6949664f0e25c10ab95ceec44d5eb3122366f844ab9f38429052133eb64e17b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6949664f0e25c10ab95ceec44d5eb3122366f844ab9f38429052133eb64e17b7->enter($__internal_6949664f0e25c10ab95ceec44d5eb3122366f844ab9f38429052133eb64e17b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_6949664f0e25c10ab95ceec44d5eb3122366f844ab9f38429052133eb64e17b7->leave($__internal_6949664f0e25c10ab95ceec44d5eb3122366f844ab9f38429052133eb64e17b7_prof);

        
        $__internal_0a8b2e959454009ede243c7165b873a75a7f58fd250446a426f5ebd14a7f8ed8->leave($__internal_0a8b2e959454009ede243c7165b873a75a7f58fd250446a426f5ebd14a7f8ed8_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_84adcbe4e8f59832a6073a6f43cb91ffdf7f1e341f6f02ff3657b8f805eab59c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84adcbe4e8f59832a6073a6f43cb91ffdf7f1e341f6f02ff3657b8f805eab59c->enter($__internal_84adcbe4e8f59832a6073a6f43cb91ffdf7f1e341f6f02ff3657b8f805eab59c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_7924787d09ada72e839f21c7084eb7d3ffd183ad6348ce03a89c43817ef345e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7924787d09ada72e839f21c7084eb7d3ffd183ad6348ce03a89c43817ef345e2->enter($__internal_7924787d09ada72e839f21c7084eb7d3ffd183ad6348ce03a89c43817ef345e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7924787d09ada72e839f21c7084eb7d3ffd183ad6348ce03a89c43817ef345e2->leave($__internal_7924787d09ada72e839f21c7084eb7d3ffd183ad6348ce03a89c43817ef345e2_prof);

        
        $__internal_84adcbe4e8f59832a6073a6f43cb91ffdf7f1e341f6f02ff3657b8f805eab59c->leave($__internal_84adcbe4e8f59832a6073a6f43cb91ffdf7f1e341f6f02ff3657b8f805eab59c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
