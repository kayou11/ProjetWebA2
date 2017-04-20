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
        $__internal_3c99e09aa9c53c3a420c54398a9cdc6815d81bf5b06ca59cffe91e623be0ca16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c99e09aa9c53c3a420c54398a9cdc6815d81bf5b06ca59cffe91e623be0ca16->enter($__internal_3c99e09aa9c53c3a420c54398a9cdc6815d81bf5b06ca59cffe91e623be0ca16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_4f30f3e941b6da40b7d64556f623ea781d71a64a5390c06ed9e47e4a5b69db39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f30f3e941b6da40b7d64556f623ea781d71a64a5390c06ed9e47e4a5b69db39->enter($__internal_4f30f3e941b6da40b7d64556f623ea781d71a64a5390c06ed9e47e4a5b69db39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3c99e09aa9c53c3a420c54398a9cdc6815d81bf5b06ca59cffe91e623be0ca16->leave($__internal_3c99e09aa9c53c3a420c54398a9cdc6815d81bf5b06ca59cffe91e623be0ca16_prof);

        
        $__internal_4f30f3e941b6da40b7d64556f623ea781d71a64a5390c06ed9e47e4a5b69db39->leave($__internal_4f30f3e941b6da40b7d64556f623ea781d71a64a5390c06ed9e47e4a5b69db39_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_83c49e0f0d6f431150a463190ad08312636fb91f7f86a4b078f850962956dbac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83c49e0f0d6f431150a463190ad08312636fb91f7f86a4b078f850962956dbac->enter($__internal_83c49e0f0d6f431150a463190ad08312636fb91f7f86a4b078f850962956dbac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_64b4f10597a0491de0f55fc38030b5587a9c1ca1582b1eb0fbd570dcf35098d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64b4f10597a0491de0f55fc38030b5587a9c1ca1582b1eb0fbd570dcf35098d6->enter($__internal_64b4f10597a0491de0f55fc38030b5587a9c1ca1582b1eb0fbd570dcf35098d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_64b4f10597a0491de0f55fc38030b5587a9c1ca1582b1eb0fbd570dcf35098d6->leave($__internal_64b4f10597a0491de0f55fc38030b5587a9c1ca1582b1eb0fbd570dcf35098d6_prof);

        
        $__internal_83c49e0f0d6f431150a463190ad08312636fb91f7f86a4b078f850962956dbac->leave($__internal_83c49e0f0d6f431150a463190ad08312636fb91f7f86a4b078f850962956dbac_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7000150d590a7bc89688862df166937d76e8f32ed145c2e6ba8cb3f906ac7069 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7000150d590a7bc89688862df166937d76e8f32ed145c2e6ba8cb3f906ac7069->enter($__internal_7000150d590a7bc89688862df166937d76e8f32ed145c2e6ba8cb3f906ac7069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_be5f92ce4ae8d2bf2134ebc8c56c6bc226d3b6db8925036783f5136bb6bdfe4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be5f92ce4ae8d2bf2134ebc8c56c6bc226d3b6db8925036783f5136bb6bdfe4b->enter($__internal_be5f92ce4ae8d2bf2134ebc8c56c6bc226d3b6db8925036783f5136bb6bdfe4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_be5f92ce4ae8d2bf2134ebc8c56c6bc226d3b6db8925036783f5136bb6bdfe4b->leave($__internal_be5f92ce4ae8d2bf2134ebc8c56c6bc226d3b6db8925036783f5136bb6bdfe4b_prof);

        
        $__internal_7000150d590a7bc89688862df166937d76e8f32ed145c2e6ba8cb3f906ac7069->leave($__internal_7000150d590a7bc89688862df166937d76e8f32ed145c2e6ba8cb3f906ac7069_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d2c8c0555bdfb1368ce6fd5999d0d029c2d623d98faa1eb5eb0afd7a58cfb072 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2c8c0555bdfb1368ce6fd5999d0d029c2d623d98faa1eb5eb0afd7a58cfb072->enter($__internal_d2c8c0555bdfb1368ce6fd5999d0d029c2d623d98faa1eb5eb0afd7a58cfb072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_d2adb1d6b6b9bb4277a78184734047b8a5e4f3a98ff2fa6c814562cc46c83d45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2adb1d6b6b9bb4277a78184734047b8a5e4f3a98ff2fa6c814562cc46c83d45->enter($__internal_d2adb1d6b6b9bb4277a78184734047b8a5e4f3a98ff2fa6c814562cc46c83d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d2adb1d6b6b9bb4277a78184734047b8a5e4f3a98ff2fa6c814562cc46c83d45->leave($__internal_d2adb1d6b6b9bb4277a78184734047b8a5e4f3a98ff2fa6c814562cc46c83d45_prof);

        
        $__internal_d2c8c0555bdfb1368ce6fd5999d0d029c2d623d98faa1eb5eb0afd7a58cfb072->leave($__internal_d2c8c0555bdfb1368ce6fd5999d0d029c2d623d98faa1eb5eb0afd7a58cfb072_prof);

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
