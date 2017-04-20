<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_d731983aee46c82be4bc71e92ced750c9056cb46fb3f37461db0a14e9d31c3bd extends Twig_Template
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
        $__internal_a39e2fa549d5cdcb33ac7291ed51e4416e451578b9933426ad758c2f1d255ab9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a39e2fa549d5cdcb33ac7291ed51e4416e451578b9933426ad758c2f1d255ab9->enter($__internal_a39e2fa549d5cdcb33ac7291ed51e4416e451578b9933426ad758c2f1d255ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_c561495862a852b7de73aaf7492bf83f9b21d23680c77dd4bfa73184d9ad4334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c561495862a852b7de73aaf7492bf83f9b21d23680c77dd4bfa73184d9ad4334->enter($__internal_c561495862a852b7de73aaf7492bf83f9b21d23680c77dd4bfa73184d9ad4334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a39e2fa549d5cdcb33ac7291ed51e4416e451578b9933426ad758c2f1d255ab9->leave($__internal_a39e2fa549d5cdcb33ac7291ed51e4416e451578b9933426ad758c2f1d255ab9_prof);

        
        $__internal_c561495862a852b7de73aaf7492bf83f9b21d23680c77dd4bfa73184d9ad4334->leave($__internal_c561495862a852b7de73aaf7492bf83f9b21d23680c77dd4bfa73184d9ad4334_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9f5aa1f2a96146ef9fb2631533fa02c45492bcf73b57dd9d4ce86a79b59fd86f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f5aa1f2a96146ef9fb2631533fa02c45492bcf73b57dd9d4ce86a79b59fd86f->enter($__internal_9f5aa1f2a96146ef9fb2631533fa02c45492bcf73b57dd9d4ce86a79b59fd86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_d48af7b4a4885c168c89a018fe034d6b3420274485512352def14b1ed60c0299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d48af7b4a4885c168c89a018fe034d6b3420274485512352def14b1ed60c0299->enter($__internal_d48af7b4a4885c168c89a018fe034d6b3420274485512352def14b1ed60c0299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_d48af7b4a4885c168c89a018fe034d6b3420274485512352def14b1ed60c0299->leave($__internal_d48af7b4a4885c168c89a018fe034d6b3420274485512352def14b1ed60c0299_prof);

        
        $__internal_9f5aa1f2a96146ef9fb2631533fa02c45492bcf73b57dd9d4ce86a79b59fd86f->leave($__internal_9f5aa1f2a96146ef9fb2631533fa02c45492bcf73b57dd9d4ce86a79b59fd86f_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6bb38d7313f359076f0f29100dae4958c4f5ae8fe7b0a0a361fec04c63550042 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bb38d7313f359076f0f29100dae4958c4f5ae8fe7b0a0a361fec04c63550042->enter($__internal_6bb38d7313f359076f0f29100dae4958c4f5ae8fe7b0a0a361fec04c63550042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_090e826d01ae9950404092e45ff46ed98d3cb033f40227b87f1a126da465d464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_090e826d01ae9950404092e45ff46ed98d3cb033f40227b87f1a126da465d464->enter($__internal_090e826d01ae9950404092e45ff46ed98d3cb033f40227b87f1a126da465d464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_090e826d01ae9950404092e45ff46ed98d3cb033f40227b87f1a126da465d464->leave($__internal_090e826d01ae9950404092e45ff46ed98d3cb033f40227b87f1a126da465d464_prof);

        
        $__internal_6bb38d7313f359076f0f29100dae4958c4f5ae8fe7b0a0a361fec04c63550042->leave($__internal_6bb38d7313f359076f0f29100dae4958c4f5ae8fe7b0a0a361fec04c63550042_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_41c5a59adce62c5c0321939420bf4401c98717cf5a6d94e415fd7753e8202725 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41c5a59adce62c5c0321939420bf4401c98717cf5a6d94e415fd7753e8202725->enter($__internal_41c5a59adce62c5c0321939420bf4401c98717cf5a6d94e415fd7753e8202725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_4c5b66739f1876f7508b8bcfc68eb7228fb7250f8347decf5bb35bc742b629b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c5b66739f1876f7508b8bcfc68eb7228fb7250f8347decf5bb35bc742b629b8->enter($__internal_4c5b66739f1876f7508b8bcfc68eb7228fb7250f8347decf5bb35bc742b629b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4c5b66739f1876f7508b8bcfc68eb7228fb7250f8347decf5bb35bc742b629b8->leave($__internal_4c5b66739f1876f7508b8bcfc68eb7228fb7250f8347decf5bb35bc742b629b8_prof);

        
        $__internal_41c5a59adce62c5c0321939420bf4401c98717cf5a6d94e415fd7753e8202725->leave($__internal_41c5a59adce62c5c0321939420bf4401c98717cf5a6d94e415fd7753e8202725_prof);

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
