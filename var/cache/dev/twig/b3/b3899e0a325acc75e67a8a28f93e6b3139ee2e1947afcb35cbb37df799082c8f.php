<?php

/* SonataAdminBundle:CRUD:base_list_flat_field.html.twig */
class __TwigTemplate_fc6d4f06bebc514ee0c5dc73379ef4e6f15e3adc322e4e408dd8a59ba6298a64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a73ed3c2b9bc5667f622a99d4ff590dadbc6381bd27396dc18ca6769c0f38b52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a73ed3c2b9bc5667f622a99d4ff590dadbc6381bd27396dc18ca6769c0f38b52->enter($__internal_a73ed3c2b9bc5667f622a99d4ff590dadbc6381bd27396dc18ca6769c0f38b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list_flat_field.html.twig"));

        $__internal_8a348fda3471a614852720f5f844c9dfcbf1b0faac0665cc6ce9901712dd01f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a348fda3471a614852720f5f844c9dfcbf1b0faac0665cc6ce9901712dd01f5->enter($__internal_8a348fda3471a614852720f5f844c9dfcbf1b0faac0665cc6ce9901712dd01f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list_flat_field.html.twig"));

        // line 11
        echo "
<span class=\"sonata-ba-list-field sonata-ba-list-field-";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 12, $this->getSourceContext()); })()), "type", array()), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "id", array(0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 12, $this->getSourceContext()); })())), "method"), "html", null, true);
        echo "\">
    ";
        // line 13
        if ((((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 14
($context["field_description"] ?? null), "options", array(), "any", false, true), "identifier", array(), "any", true, true) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 15
($context["field_description"] ?? null), "options", array(), "any", false, true), "route", array(), "any", true, true)) && twig_get_attribute($this->env, $this->getSourceContext(),         // line 16
(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 16, $this->getSourceContext()); })()), "hasAccess", array(0 => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 16, $this->getSourceContext()); })()), "options", array()), "route", array()), "name", array()), 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 16, $this->getSourceContext()); })())), "method")) && twig_get_attribute($this->env, $this->getSourceContext(),         // line 17
(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 17, $this->getSourceContext()); })()), "hasRoute", array(0 => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 17, $this->getSourceContext()); })()), "options", array()), "route", array()), "name", array())), "method"))) {
            // line 19
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 19, $this->getSourceContext()); })()), "generateObjectUrl", array(0 => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 19, $this->getSourceContext()); })()), "options", array()), "route", array()), "name", array()), 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 19, $this->getSourceContext()); })()), 2 => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 19, $this->getSourceContext()); })()), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
            echo "\">";
            // line 20
            $this->displayBlock('field', $context, $blocks);
            // line 21
            echo "</a>
    ";
        } else {
            // line 23
            echo "        ";
            $this->displayBlock("field", $context, $blocks);
            echo "
    ";
        }
        // line 25
        echo "</span>
";
        
        $__internal_a73ed3c2b9bc5667f622a99d4ff590dadbc6381bd27396dc18ca6769c0f38b52->leave($__internal_a73ed3c2b9bc5667f622a99d4ff590dadbc6381bd27396dc18ca6769c0f38b52_prof);

        
        $__internal_8a348fda3471a614852720f5f844c9dfcbf1b0faac0665cc6ce9901712dd01f5->leave($__internal_8a348fda3471a614852720f5f844c9dfcbf1b0faac0665cc6ce9901712dd01f5_prof);

    }

    // line 20
    public function block_field($context, array $blocks = array())
    {
        $__internal_9f6cf3231183f195a1d5bae8ddbd245db4b661947ee3b72fab7055c6119c5b87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f6cf3231183f195a1d5bae8ddbd245db4b661947ee3b72fab7055c6119c5b87->enter($__internal_9f6cf3231183f195a1d5bae8ddbd245db4b661947ee3b72fab7055c6119c5b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_6465cda31e29dd7fa380417b35fea6f7c925e7cbc8e3ee38f22ce55fae23d698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6465cda31e29dd7fa380417b35fea6f7c925e7cbc8e3ee38f22ce55fae23d698->enter($__internal_6465cda31e29dd7fa380417b35fea6f7c925e7cbc8e3ee38f22ce55fae23d698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 20, $this->getSourceContext()); })()), "html", null, true);
        
        $__internal_6465cda31e29dd7fa380417b35fea6f7c925e7cbc8e3ee38f22ce55fae23d698->leave($__internal_6465cda31e29dd7fa380417b35fea6f7c925e7cbc8e3ee38f22ce55fae23d698_prof);

        
        $__internal_9f6cf3231183f195a1d5bae8ddbd245db4b661947ee3b72fab7055c6119c5b87->leave($__internal_9f6cf3231183f195a1d5bae8ddbd245db4b661947ee3b72fab7055c6119c5b87_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list_flat_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 20,  57 => 25,  51 => 23,  47 => 21,  45 => 20,  41 => 19,  39 => 17,  38 => 16,  37 => 15,  36 => 14,  35 => 13,  29 => 12,  26 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

<span class=\"sonata-ba-list-field sonata-ba-list-field-{{ field_description.type }}\" objectId=\"{{ admin.id(object) }}\">
    {% if
            field_description.options.identifier is defined
        and field_description.options.route is defined
        and admin.hasAccess(field_description.options.route.name, object)
        and admin.hasRoute(field_description.options.route.name)
    %}
        <a href=\"{{ admin.generateObjectUrl(field_description.options.route.name, object, field_description.options.route.parameters) }}\">
            {%- block field %}{{ value }}{% endblock -%}
        </a>
    {% else %}
        {{ block('field') }}
    {% endif %}
</span>
", "SonataAdminBundle:CRUD:base_list_flat_field.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_list_flat_field.html.twig");
    }
}
