<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_a19f2e12ce2363850569bcb40e74a2c2ee49605757c587e11153a58ff3525493 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_07fab20593add9ce951ce6baf6550c677b95ac68f1380c3af3e04a599e0a4ef7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07fab20593add9ce951ce6baf6550c677b95ac68f1380c3af3e04a599e0a4ef7->enter($__internal_07fab20593add9ce951ce6baf6550c677b95ac68f1380c3af3e04a599e0a4ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_06f394b9986517a32e53876186b3a98a6528399ab7ac6d061c5da21699f72c2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06f394b9986517a32e53876186b3a98a6528399ab7ac6d061c5da21699f72c2c->enter($__internal_06f394b9986517a32e53876186b3a98a6528399ab7ac6d061c5da21699f72c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07fab20593add9ce951ce6baf6550c677b95ac68f1380c3af3e04a599e0a4ef7->leave($__internal_07fab20593add9ce951ce6baf6550c677b95ac68f1380c3af3e04a599e0a4ef7_prof);

        
        $__internal_06f394b9986517a32e53876186b3a98a6528399ab7ac6d061c5da21699f72c2c->leave($__internal_06f394b9986517a32e53876186b3a98a6528399ab7ac6d061c5da21699f72c2c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9348896fbb15a8170fe533e8df96ce8101f1ad0d12a8a9dc5bf609e0e7ccb8cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9348896fbb15a8170fe533e8df96ce8101f1ad0d12a8a9dc5bf609e0e7ccb8cc->enter($__internal_9348896fbb15a8170fe533e8df96ce8101f1ad0d12a8a9dc5bf609e0e7ccb8cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5ef4df3a716da7a282cf64d865fa18f5fb30afc3d31e85fd9c8f04d86d8acb5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ef4df3a716da7a282cf64d865fa18f5fb30afc3d31e85fd9c8f04d86d8acb5b->enter($__internal_5ef4df3a716da7a282cf64d865fa18f5fb30afc3d31e85fd9c8f04d86d8acb5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_5ef4df3a716da7a282cf64d865fa18f5fb30afc3d31e85fd9c8f04d86d8acb5b->leave($__internal_5ef4df3a716da7a282cf64d865fa18f5fb30afc3d31e85fd9c8f04d86d8acb5b_prof);

        
        $__internal_9348896fbb15a8170fe533e8df96ce8101f1ad0d12a8a9dc5bf609e0e7ccb8cc->leave($__internal_9348896fbb15a8170fe533e8df96ce8101f1ad0d12a8a9dc5bf609e0e7ccb8cc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
