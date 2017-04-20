<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_ccbed40a533cdd38faac5a17606fe36edd003242aa4d860b00e3ad2d8d2f3acc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_ed3e3f3425c3681cb819c3f89a9dc5765d2938b0173e75921a4e8deb329ebdfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed3e3f3425c3681cb819c3f89a9dc5765d2938b0173e75921a4e8deb329ebdfd->enter($__internal_ed3e3f3425c3681cb819c3f89a9dc5765d2938b0173e75921a4e8deb329ebdfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_41e9899c4e749ed0f19430214b72f1b8ae07f86f0ff69619934bf9172ea8dec9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41e9899c4e749ed0f19430214b72f1b8ae07f86f0ff69619934bf9172ea8dec9->enter($__internal_41e9899c4e749ed0f19430214b72f1b8ae07f86f0ff69619934bf9172ea8dec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed3e3f3425c3681cb819c3f89a9dc5765d2938b0173e75921a4e8deb329ebdfd->leave($__internal_ed3e3f3425c3681cb819c3f89a9dc5765d2938b0173e75921a4e8deb329ebdfd_prof);

        
        $__internal_41e9899c4e749ed0f19430214b72f1b8ae07f86f0ff69619934bf9172ea8dec9->leave($__internal_41e9899c4e749ed0f19430214b72f1b8ae07f86f0ff69619934bf9172ea8dec9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_81d9afb94638004e9be6ba7b1378cb52dfc3eb88d1adc8fc229ba4e16fe0e6d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81d9afb94638004e9be6ba7b1378cb52dfc3eb88d1adc8fc229ba4e16fe0e6d4->enter($__internal_81d9afb94638004e9be6ba7b1378cb52dfc3eb88d1adc8fc229ba4e16fe0e6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_da0c8f0f1c9ecf5f7f1a8f4978fded758564caffdcc49f21eadf14752496930f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da0c8f0f1c9ecf5f7f1a8f4978fded758564caffdcc49f21eadf14752496930f->enter($__internal_da0c8f0f1c9ecf5f7f1a8f4978fded758564caffdcc49f21eadf14752496930f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_da0c8f0f1c9ecf5f7f1a8f4978fded758564caffdcc49f21eadf14752496930f->leave($__internal_da0c8f0f1c9ecf5f7f1a8f4978fded758564caffdcc49f21eadf14752496930f_prof);

        
        $__internal_81d9afb94638004e9be6ba7b1378cb52dfc3eb88d1adc8fc229ba4e16fe0e6d4->leave($__internal_81d9afb94638004e9be6ba7b1378cb52dfc3eb88d1adc8fc229ba4e16fe0e6d4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
