<?php

/* SonataAdminBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_b0ea5c6030e1ce1fa1b90b9c7b0fdab6bb9bd72e95ab79c35bf2ede0ba34f1ae extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d49ef8cc02bf7c51a0b7150c06dfa082f228ec8f3219d318e0a00acf41c47f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d49ef8cc02bf7c51a0b7150c06dfa082f228ec8f3219d318e0a00acf41c47f8->enter($__internal_0d49ef8cc02bf7c51a0b7150c06dfa082f228ec8f3219d318e0a00acf41c47f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $__internal_b8714c731d6e402eb46bb2878ae08e56baecd4195b723cf42fae3ec47984b822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8714c731d6e402eb46bb2878ae08e56baecd4195b723cf42fae3ec47984b822->enter($__internal_b8714c731d6e402eb46bb2878ae08e56baecd4195b723cf42fae3ec47984b822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d49ef8cc02bf7c51a0b7150c06dfa082f228ec8f3219d318e0a00acf41c47f8->leave($__internal_0d49ef8cc02bf7c51a0b7150c06dfa082f228ec8f3219d318e0a00acf41c47f8_prof);

        
        $__internal_b8714c731d6e402eb46bb2878ae08e56baecd4195b723cf42fae3ec47984b822->leave($__internal_b8714c731d6e402eb46bb2878ae08e56baecd4195b723cf42fae3ec47984b822_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_88e90615b934bb91b40abfd9359450663cd4be210c79284ec0c711fd0285bf40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88e90615b934bb91b40abfd9359450663cd4be210c79284ec0c711fd0285bf40->enter($__internal_88e90615b934bb91b40abfd9359450663cd4be210c79284ec0c711fd0285bf40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_28509de9a06ccdaf401b4b3540b2f5805defabe65b288d21593bad40961509d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28509de9a06ccdaf401b4b3540b2f5805defabe65b288d21593bad40961509d8->enter($__internal_28509de9a06ccdaf401b4b3540b2f5805defabe65b288d21593bad40961509d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 16, $this->getSourceContext()); })()), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
            echo "
    ";
        }
        
        $__internal_28509de9a06ccdaf401b4b3540b2f5805defabe65b288d21593bad40961509d8->leave($__internal_28509de9a06ccdaf401b4b3540b2f5805defabe65b288d21593bad40961509d8_prof);

        
        $__internal_88e90615b934bb91b40abfd9359450663cd4be210c79284ec0c711fd0285bf40->leave($__internal_88e90615b934bb91b40abfd9359450663cd4be210c79284ec0c711fd0285bf40_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_currency.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_currency.html.twig");
    }
}
