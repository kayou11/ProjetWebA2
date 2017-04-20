<?php

/* SonataAdminBundle:CRUD:list__action_edit.html.twig */
class __TwigTemplate_e48c9c2377722df285e2a750eeda514dd8aaec9f9effac523c22f2b0715127ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c5d3611ed8b3307b7b086adc409ff75d1f0938399d6daafd500d0a7ca44281ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5d3611ed8b3307b7b086adc409ff75d1f0938399d6daafd500d0a7ca44281ab->enter($__internal_c5d3611ed8b3307b7b086adc409ff75d1f0938399d6daafd500d0a7ca44281ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action_edit.html.twig"));

        $__internal_ca1be186a6908842706170900c152f9b8c29e56b0ce3a7dbc522a2b4d28c422c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca1be186a6908842706170900c152f9b8c29e56b0ce3a7dbc522a2b4d28c422c->enter($__internal_ca1be186a6908842706170900c152f9b8c29e56b0ce3a7dbc522a2b4d28c422c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action_edit.html.twig"));

        // line 11
        echo "
";
        // line 12
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "hasAccess", array(0 => "edit", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 12, $this->getSourceContext()); })())), "method") && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "hasRoute", array(0 => "edit"), "method"))) {
            // line 13
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 13, $this->getSourceContext()); })()), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 13, $this->getSourceContext()); })())), "method"), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default edit_link\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
        <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    </a>
";
        }
        
        $__internal_c5d3611ed8b3307b7b086adc409ff75d1f0938399d6daafd500d0a7ca44281ab->leave($__internal_c5d3611ed8b3307b7b086adc409ff75d1f0938399d6daafd500d0a7ca44281ab_prof);

        
        $__internal_ca1be186a6908842706170900c152f9b8c29e56b0ce3a7dbc522a2b4d28c422c->leave($__internal_ca1be186a6908842706170900c152f9b8c29e56b0ce3a7dbc522a2b4d28c422c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__action_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 15,  30 => 13,  28 => 12,  25 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% if admin.hasAccess('edit', object) and admin.hasRoute('edit') %}
    <a href=\"{{ admin.generateObjectUrl('edit', object) }}\" class=\"btn btn-sm btn-default edit_link\" title=\"{{ 'action_edit'|trans({}, 'SonataAdminBundle') }}\">
        <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
        {{ 'action_edit'|trans({}, 'SonataAdminBundle') }}
    </a>
{% endif %}
", "SonataAdminBundle:CRUD:list__action_edit.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list__action_edit.html.twig");
    }
}
