<?php

/* SonataAdminBundle:CRUD:list_trans.html.twig */
class __TwigTemplate_e57bc67dfc4096a8d8fab2663cc83cbf6c0f5fb51111d4b919c2ff9af1b1c8b4 extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_trans.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_046cb95a4de927b37c3596689baf0393fbecb9d22a3d45aa51a7b41b630dc7d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_046cb95a4de927b37c3596689baf0393fbecb9d22a3d45aa51a7b41b630dc7d8->enter($__internal_046cb95a4de927b37c3596689baf0393fbecb9d22a3d45aa51a7b41b630dc7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_trans.html.twig"));

        $__internal_c0ae356270a74fbf1cda200e8a766538f2a0e51e1d42fca543400996247c45f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0ae356270a74fbf1cda200e8a766538f2a0e51e1d42fca543400996247c45f9->enter($__internal_c0ae356270a74fbf1cda200e8a766538f2a0e51e1d42fca543400996247c45f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_trans.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_046cb95a4de927b37c3596689baf0393fbecb9d22a3d45aa51a7b41b630dc7d8->leave($__internal_046cb95a4de927b37c3596689baf0393fbecb9d22a3d45aa51a7b41b630dc7d8_prof);

        
        $__internal_c0ae356270a74fbf1cda200e8a766538f2a0e51e1d42fca543400996247c45f9->leave($__internal_c0ae356270a74fbf1cda200e8a766538f2a0e51e1d42fca543400996247c45f9_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e6eb8805720d8f8a70fca20a7fca8525222e73362718339b5fb9f0d70790eb60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6eb8805720d8f8a70fca20a7fca8525222e73362718339b5fb9f0d70790eb60->enter($__internal_e6eb8805720d8f8a70fca20a7fca8525222e73362718339b5fb9f0d70790eb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_ee7658a3254a1385a4bd90e74bb653e587da39fd8a6d704a9caabd3a38e5125c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee7658a3254a1385a4bd90e74bb653e587da39fd8a6d704a9caabd3a38e5125c->enter($__internal_ee7658a3254a1385a4bd90e74bb653e587da39fd8a6d704a9caabd3a38e5125c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["translationDomain"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "catalogue", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 15, $this->getSourceContext()); })()), "translationDomain", array()))) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 15, $this->getSourceContext()); })()), "translationDomain", array())));
        // line 16
        echo "    ";
        $context["valueFormat"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "format", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "format", array()), "%s")) : ("%s"));
        // line 17
        echo "
    ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(sprintf((isset($context["valueFormat"]) || array_key_exists("valueFormat", $context) ? $context["valueFormat"] : (function () { throw new Twig_Error_Runtime('Variable "valueFormat" does not exist.', 18, $this->getSourceContext()); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 18, $this->getSourceContext()); })())), array(), (isset($context["translationDomain"]) || array_key_exists("translationDomain", $context) ? $context["translationDomain"] : (function () { throw new Twig_Error_Runtime('Variable "translationDomain" does not exist.', 18, $this->getSourceContext()); })())), "html", null, true);
        echo "
";
        
        $__internal_ee7658a3254a1385a4bd90e74bb653e587da39fd8a6d704a9caabd3a38e5125c->leave($__internal_ee7658a3254a1385a4bd90e74bb653e587da39fd8a6d704a9caabd3a38e5125c_prof);

        
        $__internal_e6eb8805720d8f8a70fca20a7fca8525222e73362718339b5fb9f0d70790eb60->leave($__internal_e6eb8805720d8f8a70fca20a7fca8525222e73362718339b5fb9f0d70790eb60_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 18,  54 => 17,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% block field%}
    {% set translationDomain = field_description.options.catalogue|default(admin.translationDomain) %}
    {% set valueFormat = field_description.options.format|default('%s') %}

    {{valueFormat|format(value)|trans({}, translationDomain)}}
{% endblock %}
", "SonataAdminBundle:CRUD:list_trans.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_trans.html.twig");
    }
}
