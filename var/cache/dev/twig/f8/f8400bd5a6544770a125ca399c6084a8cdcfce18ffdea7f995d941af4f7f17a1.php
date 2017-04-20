<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_6f25f153d03380b9af2df6407fe5db49f330b7dca80358b02acff8d9254b7c15 extends Twig_Template
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
        $__internal_192663ad977cedbf9b51b74914f9fc5cd02430ac630570022bcada63e11b1e2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_192663ad977cedbf9b51b74914f9fc5cd02430ac630570022bcada63e11b1e2f->enter($__internal_192663ad977cedbf9b51b74914f9fc5cd02430ac630570022bcada63e11b1e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_b863e526a795a5fac369e87415446f2176cf3fe2263286b5f0ba9721da341503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b863e526a795a5fac369e87415446f2176cf3fe2263286b5f0ba9721da341503->enter($__internal_b863e526a795a5fac369e87415446f2176cf3fe2263286b5f0ba9721da341503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_192663ad977cedbf9b51b74914f9fc5cd02430ac630570022bcada63e11b1e2f->leave($__internal_192663ad977cedbf9b51b74914f9fc5cd02430ac630570022bcada63e11b1e2f_prof);

        
        $__internal_b863e526a795a5fac369e87415446f2176cf3fe2263286b5f0ba9721da341503->leave($__internal_b863e526a795a5fac369e87415446f2176cf3fe2263286b5f0ba9721da341503_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_11a2d2ceb7ac619075ca112550c51e2feb102bcafed73970cec31967dd5ce801 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11a2d2ceb7ac619075ca112550c51e2feb102bcafed73970cec31967dd5ce801->enter($__internal_11a2d2ceb7ac619075ca112550c51e2feb102bcafed73970cec31967dd5ce801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_b76ddae6de43d099717ec847a0c326aff279a1bd767240ae1f0869819ca64c34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b76ddae6de43d099717ec847a0c326aff279a1bd767240ae1f0869819ca64c34->enter($__internal_b76ddae6de43d099717ec847a0c326aff279a1bd767240ae1f0869819ca64c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_b76ddae6de43d099717ec847a0c326aff279a1bd767240ae1f0869819ca64c34->leave($__internal_b76ddae6de43d099717ec847a0c326aff279a1bd767240ae1f0869819ca64c34_prof);

        
        $__internal_11a2d2ceb7ac619075ca112550c51e2feb102bcafed73970cec31967dd5ce801->leave($__internal_11a2d2ceb7ac619075ca112550c51e2feb102bcafed73970cec31967dd5ce801_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d78247e6e7f8006545e86c434e8c8784ac88e18942d68f5d7c71215e307ecb9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d78247e6e7f8006545e86c434e8c8784ac88e18942d68f5d7c71215e307ecb9e->enter($__internal_d78247e6e7f8006545e86c434e8c8784ac88e18942d68f5d7c71215e307ecb9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_7875c6ac435c3c3b80b0b97f956ce86dc49826c26bba6f1d729402243832786c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7875c6ac435c3c3b80b0b97f956ce86dc49826c26bba6f1d729402243832786c->enter($__internal_7875c6ac435c3c3b80b0b97f956ce86dc49826c26bba6f1d729402243832786c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_7875c6ac435c3c3b80b0b97f956ce86dc49826c26bba6f1d729402243832786c->leave($__internal_7875c6ac435c3c3b80b0b97f956ce86dc49826c26bba6f1d729402243832786c_prof);

        
        $__internal_d78247e6e7f8006545e86c434e8c8784ac88e18942d68f5d7c71215e307ecb9e->leave($__internal_d78247e6e7f8006545e86c434e8c8784ac88e18942d68f5d7c71215e307ecb9e_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c3cf31cbb51bc60d82218ced0f96b094699287d496c8c39e1f818f747887f695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3cf31cbb51bc60d82218ced0f96b094699287d496c8c39e1f818f747887f695->enter($__internal_c3cf31cbb51bc60d82218ced0f96b094699287d496c8c39e1f818f747887f695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_dd0018de66456eaccaf3e5de2ce2965a20b5b54b776c0bc283984523dda1f6ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd0018de66456eaccaf3e5de2ce2965a20b5b54b776c0bc283984523dda1f6ea->enter($__internal_dd0018de66456eaccaf3e5de2ce2965a20b5b54b776c0bc283984523dda1f6ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_dd0018de66456eaccaf3e5de2ce2965a20b5b54b776c0bc283984523dda1f6ea->leave($__internal_dd0018de66456eaccaf3e5de2ce2965a20b5b54b776c0bc283984523dda1f6ea_prof);

        
        $__internal_c3cf31cbb51bc60d82218ced0f96b094699287d496c8c39e1f818f747887f695->leave($__internal_c3cf31cbb51bc60d82218ced0f96b094699287d496c8c39e1f818f747887f695_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
