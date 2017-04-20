<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_3d8bed91586d5f00a50ce9ebf3f281adee44c2cac03c766c405419e9f95dd320 extends Twig_Template
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
        $__internal_ff6894d85d7b8a13f98d736cd6c999722d00229994ebc41bdd3fc7c28a3a6f7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff6894d85d7b8a13f98d736cd6c999722d00229994ebc41bdd3fc7c28a3a6f7f->enter($__internal_ff6894d85d7b8a13f98d736cd6c999722d00229994ebc41bdd3fc7c28a3a6f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_51382d474d526b4e9f3bd9bf9599d44d4eecd541d6bc999c81bd294088593bf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51382d474d526b4e9f3bd9bf9599d44d4eecd541d6bc999c81bd294088593bf2->enter($__internal_51382d474d526b4e9f3bd9bf9599d44d4eecd541d6bc999c81bd294088593bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ff6894d85d7b8a13f98d736cd6c999722d00229994ebc41bdd3fc7c28a3a6f7f->leave($__internal_ff6894d85d7b8a13f98d736cd6c999722d00229994ebc41bdd3fc7c28a3a6f7f_prof);

        
        $__internal_51382d474d526b4e9f3bd9bf9599d44d4eecd541d6bc999c81bd294088593bf2->leave($__internal_51382d474d526b4e9f3bd9bf9599d44d4eecd541d6bc999c81bd294088593bf2_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9297e169803575fd6d6ca241bc16732f7d2e19b51addbd56ddc9e6dd52815738 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9297e169803575fd6d6ca241bc16732f7d2e19b51addbd56ddc9e6dd52815738->enter($__internal_9297e169803575fd6d6ca241bc16732f7d2e19b51addbd56ddc9e6dd52815738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_8813ba5880646e93565063c66a0a1713294b3895e66e08e0abbbc7926814b24d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8813ba5880646e93565063c66a0a1713294b3895e66e08e0abbbc7926814b24d->enter($__internal_8813ba5880646e93565063c66a0a1713294b3895e66e08e0abbbc7926814b24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_8813ba5880646e93565063c66a0a1713294b3895e66e08e0abbbc7926814b24d->leave($__internal_8813ba5880646e93565063c66a0a1713294b3895e66e08e0abbbc7926814b24d_prof);

        
        $__internal_9297e169803575fd6d6ca241bc16732f7d2e19b51addbd56ddc9e6dd52815738->leave($__internal_9297e169803575fd6d6ca241bc16732f7d2e19b51addbd56ddc9e6dd52815738_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e7241ae0e920182d107eda4ec25448f8656afdefb1472d475bc67cad6ba23dc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7241ae0e920182d107eda4ec25448f8656afdefb1472d475bc67cad6ba23dc4->enter($__internal_e7241ae0e920182d107eda4ec25448f8656afdefb1472d475bc67cad6ba23dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_35943c6c81c442157cb131da1aacdf819314adea8a2a7864c7c39f317d570c5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35943c6c81c442157cb131da1aacdf819314adea8a2a7864c7c39f317d570c5f->enter($__internal_35943c6c81c442157cb131da1aacdf819314adea8a2a7864c7c39f317d570c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_35943c6c81c442157cb131da1aacdf819314adea8a2a7864c7c39f317d570c5f->leave($__internal_35943c6c81c442157cb131da1aacdf819314adea8a2a7864c7c39f317d570c5f_prof);

        
        $__internal_e7241ae0e920182d107eda4ec25448f8656afdefb1472d475bc67cad6ba23dc4->leave($__internal_e7241ae0e920182d107eda4ec25448f8656afdefb1472d475bc67cad6ba23dc4_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f42d66e2413d8e64f5f6a43f7a4dbf4685acf6ba90cc7c13c5e32291b2879cc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f42d66e2413d8e64f5f6a43f7a4dbf4685acf6ba90cc7c13c5e32291b2879cc3->enter($__internal_f42d66e2413d8e64f5f6a43f7a4dbf4685acf6ba90cc7c13c5e32291b2879cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_2c5ade29a8f3d2834448a5b852d798977dd51e2ff6bd52eba02946639eb4bbd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c5ade29a8f3d2834448a5b852d798977dd51e2ff6bd52eba02946639eb4bbd5->enter($__internal_2c5ade29a8f3d2834448a5b852d798977dd51e2ff6bd52eba02946639eb4bbd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2c5ade29a8f3d2834448a5b852d798977dd51e2ff6bd52eba02946639eb4bbd5->leave($__internal_2c5ade29a8f3d2834448a5b852d798977dd51e2ff6bd52eba02946639eb4bbd5_prof);

        
        $__internal_f42d66e2413d8e64f5f6a43f7a4dbf4685acf6ba90cc7c13c5e32291b2879cc3->leave($__internal_f42d66e2413d8e64f5f6a43f7a4dbf4685acf6ba90cc7c13c5e32291b2879cc3_prof);

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
