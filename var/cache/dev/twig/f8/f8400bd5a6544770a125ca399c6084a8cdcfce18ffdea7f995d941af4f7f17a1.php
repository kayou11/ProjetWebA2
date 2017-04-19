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
        $__internal_4dd9b2691b674323bbb755c4c352709ef2df3bae45e2d869c1906da19a64101b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dd9b2691b674323bbb755c4c352709ef2df3bae45e2d869c1906da19a64101b->enter($__internal_4dd9b2691b674323bbb755c4c352709ef2df3bae45e2d869c1906da19a64101b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_aed85cb5c552631512ff8317a05d7c6582fe9cd763ac874e513f7b9b6fbe9ca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aed85cb5c552631512ff8317a05d7c6582fe9cd763ac874e513f7b9b6fbe9ca5->enter($__internal_aed85cb5c552631512ff8317a05d7c6582fe9cd763ac874e513f7b9b6fbe9ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4dd9b2691b674323bbb755c4c352709ef2df3bae45e2d869c1906da19a64101b->leave($__internal_4dd9b2691b674323bbb755c4c352709ef2df3bae45e2d869c1906da19a64101b_prof);

        
        $__internal_aed85cb5c552631512ff8317a05d7c6582fe9cd763ac874e513f7b9b6fbe9ca5->leave($__internal_aed85cb5c552631512ff8317a05d7c6582fe9cd763ac874e513f7b9b6fbe9ca5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9c545934731ad6998aad9646488e9c49405822422362d45e73fb1445781daf1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c545934731ad6998aad9646488e9c49405822422362d45e73fb1445781daf1a->enter($__internal_9c545934731ad6998aad9646488e9c49405822422362d45e73fb1445781daf1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_73dd14b1e78eefc822c3a4cfefb0dc840c204563ad59309f230496dd550fcd9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73dd14b1e78eefc822c3a4cfefb0dc840c204563ad59309f230496dd550fcd9b->enter($__internal_73dd14b1e78eefc822c3a4cfefb0dc840c204563ad59309f230496dd550fcd9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_73dd14b1e78eefc822c3a4cfefb0dc840c204563ad59309f230496dd550fcd9b->leave($__internal_73dd14b1e78eefc822c3a4cfefb0dc840c204563ad59309f230496dd550fcd9b_prof);

        
        $__internal_9c545934731ad6998aad9646488e9c49405822422362d45e73fb1445781daf1a->leave($__internal_9c545934731ad6998aad9646488e9c49405822422362d45e73fb1445781daf1a_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c3f24382fb56ac9e156dd4f3f796e76294b1fd7826ed1a796fff7b987020b4a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3f24382fb56ac9e156dd4f3f796e76294b1fd7826ed1a796fff7b987020b4a3->enter($__internal_c3f24382fb56ac9e156dd4f3f796e76294b1fd7826ed1a796fff7b987020b4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_e4f9180e423169888f962a053281538ade0896a46dd79efef438985da3409f10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4f9180e423169888f962a053281538ade0896a46dd79efef438985da3409f10->enter($__internal_e4f9180e423169888f962a053281538ade0896a46dd79efef438985da3409f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_e4f9180e423169888f962a053281538ade0896a46dd79efef438985da3409f10->leave($__internal_e4f9180e423169888f962a053281538ade0896a46dd79efef438985da3409f10_prof);

        
        $__internal_c3f24382fb56ac9e156dd4f3f796e76294b1fd7826ed1a796fff7b987020b4a3->leave($__internal_c3f24382fb56ac9e156dd4f3f796e76294b1fd7826ed1a796fff7b987020b4a3_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e08e9aa4a2e0b809a66383ce0b3d81a071b9576f0ab67915b40e19df90df7fe1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e08e9aa4a2e0b809a66383ce0b3d81a071b9576f0ab67915b40e19df90df7fe1->enter($__internal_e08e9aa4a2e0b809a66383ce0b3d81a071b9576f0ab67915b40e19df90df7fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_141da4911bbb87d3ae2b6c612be9af7fb988e04a3c6bfc5935f63de3314b3878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_141da4911bbb87d3ae2b6c612be9af7fb988e04a3c6bfc5935f63de3314b3878->enter($__internal_141da4911bbb87d3ae2b6c612be9af7fb988e04a3c6bfc5935f63de3314b3878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_141da4911bbb87d3ae2b6c612be9af7fb988e04a3c6bfc5935f63de3314b3878->leave($__internal_141da4911bbb87d3ae2b6c612be9af7fb988e04a3c6bfc5935f63de3314b3878_prof);

        
        $__internal_e08e9aa4a2e0b809a66383ce0b3d81a071b9576f0ab67915b40e19df90df7fe1->leave($__internal_e08e9aa4a2e0b809a66383ce0b3d81a071b9576f0ab67915b40e19df90df7fe1_prof);

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
