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
        $__internal_6d0e442ba0d6b4239f97236f0ad7c140c371074be93399582173c7eca7705547 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d0e442ba0d6b4239f97236f0ad7c140c371074be93399582173c7eca7705547->enter($__internal_6d0e442ba0d6b4239f97236f0ad7c140c371074be93399582173c7eca7705547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_61ed4e4e814758ea1545886000aae24612370b98f927ba4725945f340300c276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61ed4e4e814758ea1545886000aae24612370b98f927ba4725945f340300c276->enter($__internal_61ed4e4e814758ea1545886000aae24612370b98f927ba4725945f340300c276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6d0e442ba0d6b4239f97236f0ad7c140c371074be93399582173c7eca7705547->leave($__internal_6d0e442ba0d6b4239f97236f0ad7c140c371074be93399582173c7eca7705547_prof);

        
        $__internal_61ed4e4e814758ea1545886000aae24612370b98f927ba4725945f340300c276->leave($__internal_61ed4e4e814758ea1545886000aae24612370b98f927ba4725945f340300c276_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5c1f818cadae4818d6e71229639d21bc4d056055a877ac9ae79ae972c0483e71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c1f818cadae4818d6e71229639d21bc4d056055a877ac9ae79ae972c0483e71->enter($__internal_5c1f818cadae4818d6e71229639d21bc4d056055a877ac9ae79ae972c0483e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_e825213a2c00458bfcd6cccda0ec6dabde1304dc62eefb744b2f449c36bb7684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e825213a2c00458bfcd6cccda0ec6dabde1304dc62eefb744b2f449c36bb7684->enter($__internal_e825213a2c00458bfcd6cccda0ec6dabde1304dc62eefb744b2f449c36bb7684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_e825213a2c00458bfcd6cccda0ec6dabde1304dc62eefb744b2f449c36bb7684->leave($__internal_e825213a2c00458bfcd6cccda0ec6dabde1304dc62eefb744b2f449c36bb7684_prof);

        
        $__internal_5c1f818cadae4818d6e71229639d21bc4d056055a877ac9ae79ae972c0483e71->leave($__internal_5c1f818cadae4818d6e71229639d21bc4d056055a877ac9ae79ae972c0483e71_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7544c6a7d484920efbd13f9ac449135d24a77fa703d58841401550160ab14660 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7544c6a7d484920efbd13f9ac449135d24a77fa703d58841401550160ab14660->enter($__internal_7544c6a7d484920efbd13f9ac449135d24a77fa703d58841401550160ab14660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_c0207201887ae27c5c41907289b75c46fa70efa8f7c44df2aa4e522b11ab5142 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0207201887ae27c5c41907289b75c46fa70efa8f7c44df2aa4e522b11ab5142->enter($__internal_c0207201887ae27c5c41907289b75c46fa70efa8f7c44df2aa4e522b11ab5142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_c0207201887ae27c5c41907289b75c46fa70efa8f7c44df2aa4e522b11ab5142->leave($__internal_c0207201887ae27c5c41907289b75c46fa70efa8f7c44df2aa4e522b11ab5142_prof);

        
        $__internal_7544c6a7d484920efbd13f9ac449135d24a77fa703d58841401550160ab14660->leave($__internal_7544c6a7d484920efbd13f9ac449135d24a77fa703d58841401550160ab14660_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7d3aa09ebd870cd15c93340c144441d8f898833a1c221c3f9e16e7c0021dba86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d3aa09ebd870cd15c93340c144441d8f898833a1c221c3f9e16e7c0021dba86->enter($__internal_7d3aa09ebd870cd15c93340c144441d8f898833a1c221c3f9e16e7c0021dba86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_c0acf7b77296c181d9eabcc96df70018b03d74e44343077f0fd2aa63080d1a37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0acf7b77296c181d9eabcc96df70018b03d74e44343077f0fd2aa63080d1a37->enter($__internal_c0acf7b77296c181d9eabcc96df70018b03d74e44343077f0fd2aa63080d1a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c0acf7b77296c181d9eabcc96df70018b03d74e44343077f0fd2aa63080d1a37->leave($__internal_c0acf7b77296c181d9eabcc96df70018b03d74e44343077f0fd2aa63080d1a37_prof);

        
        $__internal_7d3aa09ebd870cd15c93340c144441d8f898833a1c221c3f9e16e7c0021dba86->leave($__internal_7d3aa09ebd870cd15c93340c144441d8f898833a1c221c3f9e16e7c0021dba86_prof);

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
