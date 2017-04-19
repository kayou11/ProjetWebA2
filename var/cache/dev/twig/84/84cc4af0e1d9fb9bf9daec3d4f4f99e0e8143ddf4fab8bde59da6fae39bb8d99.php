<?php

/* SonataAdminBundle:CRUD:list_email.html.twig */
class __TwigTemplate_13c960a900773b9773380f24c36a97ce8757304dd0751da5d1872276985aa93a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea53e3af54a790510788ec6da028d949cb6fb772cddd4461ec36efc2285e8d92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea53e3af54a790510788ec6da028d949cb6fb772cddd4461ec36efc2285e8d92->enter($__internal_ea53e3af54a790510788ec6da028d949cb6fb772cddd4461ec36efc2285e8d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $__internal_fbb70e2609c37a68ea73ad717cb35bd8109135ba769b3a0c05dc234fef275b26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbb70e2609c37a68ea73ad717cb35bd8109135ba769b3a0c05dc234fef275b26->enter($__internal_fbb70e2609c37a68ea73ad717cb35bd8109135ba769b3a0c05dc234fef275b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea53e3af54a790510788ec6da028d949cb6fb772cddd4461ec36efc2285e8d92->leave($__internal_ea53e3af54a790510788ec6da028d949cb6fb772cddd4461ec36efc2285e8d92_prof);

        
        $__internal_fbb70e2609c37a68ea73ad717cb35bd8109135ba769b3a0c05dc234fef275b26->leave($__internal_fbb70e2609c37a68ea73ad717cb35bd8109135ba769b3a0c05dc234fef275b26_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_cffad043f75a26b89328be72254b00bbc533694bdd38e5cf885af79b31552025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cffad043f75a26b89328be72254b00bbc533694bdd38e5cf885af79b31552025->enter($__internal_cffad043f75a26b89328be72254b00bbc533694bdd38e5cf885af79b31552025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_c9e1b5b0c961dca5f16f896ae44b72fe779c90f784cc12b02f735e59bb83e4cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9e1b5b0c961dca5f16f896ae44b72fe779c90f784cc12b02f735e59bb83e4cc->enter($__internal_c9e1b5b0c961dca5f16f896ae44b72fe779c90f784cc12b02f735e59bb83e4cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:list_email.html.twig", 15)->display($context);
        
        $__internal_c9e1b5b0c961dca5f16f896ae44b72fe779c90f784cc12b02f735e59bb83e4cc->leave($__internal_c9e1b5b0c961dca5f16f896ae44b72fe779c90f784cc12b02f735e59bb83e4cc_prof);

        
        $__internal_cffad043f75a26b89328be72254b00bbc533694bdd38e5cf885af79b31552025->leave($__internal_cffad043f75a26b89328be72254b00bbc533694bdd38e5cf885af79b31552025_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  39 => 14,  18 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_email.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_email.html.twig");
    }
}
