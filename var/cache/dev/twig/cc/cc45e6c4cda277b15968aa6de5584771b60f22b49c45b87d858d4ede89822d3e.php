<?php

/* SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_one.html.twig */
class __TwigTemplate_7012dc876ba35ef98029702dd2593504f966b6e5d579057dfd73a509319b19d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_one.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_811b07807bbe6da03dc26d7cecc1f60fa0adbef90bf2e0c238115df9b7600054 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_811b07807bbe6da03dc26d7cecc1f60fa0adbef90bf2e0c238115df9b7600054->enter($__internal_811b07807bbe6da03dc26d7cecc1f60fa0adbef90bf2e0c238115df9b7600054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_one.html.twig"));

        $__internal_41266fb6c2c3e3a515dfa2c7ce6551e30154cd36d3eef8a60205eacbb43755da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41266fb6c2c3e3a515dfa2c7ce6551e30154cd36d3eef8a60205eacbb43755da->enter($__internal_41266fb6c2c3e3a515dfa2c7ce6551e30154cd36d3eef8a60205eacbb43755da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_811b07807bbe6da03dc26d7cecc1f60fa0adbef90bf2e0c238115df9b7600054->leave($__internal_811b07807bbe6da03dc26d7cecc1f60fa0adbef90bf2e0c238115df9b7600054_prof);

        
        $__internal_41266fb6c2c3e3a515dfa2c7ce6551e30154cd36d3eef8a60205eacbb43755da->leave($__internal_41266fb6c2c3e3a515dfa2c7ce6551e30154cd36d3eef8a60205eacbb43755da_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_acdcff6284555612d5c2440c3a9729543138048b04b3f93c9de1cedec16ed4e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acdcff6284555612d5c2440c3a9729543138048b04b3f93c9de1cedec16ed4e9->enter($__internal_acdcff6284555612d5c2440c3a9729543138048b04b3f93c9de1cedec16ed4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_9699aa2b65f167c472e51f011887add6d816b718f2597e18d9890d4dde563872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9699aa2b65f167c472e51f011887add6d816b718f2597e18d9890d4dde563872->enter($__internal_9699aa2b65f167c472e51f011887add6d816b718f2597e18d9890d4dde563872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })())) {
            // line 16
            echo "        ";
            $context["route_name"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 16, $this->getSourceContext()); })()), "options", array()), "route", array()), "name", array());
            // line 17
            echo "        ";
            if (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 17, $this->getSourceContext()); })()), "hasAssociationAdmin", array()) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 18
(isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 18, $this->getSourceContext()); })()), "associationadmin", array()), "hasRoute", array(0 => (isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new Twig_Error_Runtime('Variable "route_name" does not exist.', 18, $this->getSourceContext()); })())), "method")) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 19
(isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 19, $this->getSourceContext()); })()), "associationadmin", array()), "hasAccess", array(0 => (isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new Twig_Error_Runtime('Variable "route_name" does not exist.', 19, $this->getSourceContext()); })()), 1 => (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 19, $this->getSourceContext()); })())), "method"))) {
                // line 20
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 20, $this->getSourceContext()); })()), "associationadmin", array()), "generateObjectUrl", array(0 => (isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new Twig_Error_Runtime('Variable "route_name" does not exist.', 20, $this->getSourceContext()); })()), 1 => (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 20, $this->getSourceContext()); })()), 2 => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 20, $this->getSourceContext()); })()), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
                echo "\">
                ";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 21, $this->getSourceContext()); })())), "html", null, true);
                echo "
            </a>
        ";
            } else {
                // line 24
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 24, $this->getSourceContext()); })()), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 24, $this->getSourceContext()); })())), "html", null, true);
                echo "
        ";
            }
            // line 26
            echo "    ";
        }
        
        $__internal_9699aa2b65f167c472e51f011887add6d816b718f2597e18d9890d4dde563872->leave($__internal_9699aa2b65f167c472e51f011887add6d816b718f2597e18d9890d4dde563872_prof);

        
        $__internal_acdcff6284555612d5c2440c3a9729543138048b04b3f93c9de1cedec16ed4e9->leave($__internal_acdcff6284555612d5c2440c3a9729543138048b04b3f93c9de1cedec16ed4e9_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 26,  71 => 24,  65 => 21,  60 => 20,  58 => 19,  57 => 18,  55 => 17,  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% if value %}
        {% set route_name = field_description.options.route.name %}
        {% if field_description.hasAssociationAdmin
        and field_description.associationadmin.hasRoute(route_name)
        and field_description.associationadmin.hasAccess(route_name, value) %}
            <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, value, field_description.options.route.parameters) }}\">
                {{ value|render_relation_element(field_description) }}
            </a>
        {% else %}
            {{ value|render_relation_element(field_description) }}
        {% endif %}
    {% endif %}
{% endblock %}
", "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_one.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/CRUD/show_orm_many_to_one.html.twig");
    }
}
