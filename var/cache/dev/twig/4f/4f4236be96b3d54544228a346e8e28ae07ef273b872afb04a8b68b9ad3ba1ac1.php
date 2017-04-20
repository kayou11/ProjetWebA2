<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig */
class __TwigTemplate_8856f90bc1f39b3122b018576fba2e82227aec06641bbc22ec050706faddea96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'relation_link' => array($this, 'block_relation_link'),
            'relation_value' => array($this, 'block_relation_value'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e080f6295484eb1e8640d50ed9979f06f9efc3a80c922613e3e0e93c853f3eac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e080f6295484eb1e8640d50ed9979f06f9efc3a80c922613e3e0e93c853f3eac->enter($__internal_e080f6295484eb1e8640d50ed9979f06f9efc3a80c922613e3e0e93c853f3eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig"));

        $__internal_1e3d22f6b2efcd9e99d9392e096436bed4585b0c8518f7752862c7d177c0b75c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e3d22f6b2efcd9e99d9392e096436bed4585b0c8518f7752862c7d177c0b75c->enter($__internal_1e3d22f6b2efcd9e99d9392e096436bed4585b0c8518f7752862c7d177c0b75c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e080f6295484eb1e8640d50ed9979f06f9efc3a80c922613e3e0e93c853f3eac->leave($__internal_e080f6295484eb1e8640d50ed9979f06f9efc3a80c922613e3e0e93c853f3eac_prof);

        
        $__internal_1e3d22f6b2efcd9e99d9392e096436bed4585b0c8518f7752862c7d177c0b75c->leave($__internal_1e3d22f6b2efcd9e99d9392e096436bed4585b0c8518f7752862c7d177c0b75c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_83457efd42ac58bae0b4e9408087c8f29aba338a7ee67d0d6158a9b1be68ab71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83457efd42ac58bae0b4e9408087c8f29aba338a7ee67d0d6158a9b1be68ab71->enter($__internal_83457efd42ac58bae0b4e9408087c8f29aba338a7ee67d0d6158a9b1be68ab71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_23da9486fa8e3eb5971a8cf6a72902c6f0a33ed38591bb22e4defffac91c0d05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23da9486fa8e3eb5971a8cf6a72902c6f0a33ed38591bb22e4defffac91c0d05->enter($__internal_23da9486fa8e3eb5971a8cf6a72902c6f0a33ed38591bb22e4defffac91c0d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["route_name"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 15, $this->getSourceContext()); })()), "options", array()), "route", array()), "name", array());
        // line 16
        echo "    ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 16, $this->getSourceContext()); })()), "hasassociationadmin", array()) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 16, $this->getSourceContext()); })()), "associationadmin", array()), "hasRoute", array(0 => (isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new Twig_Error_Runtime('Variable "route_name" does not exist.', 16, $this->getSourceContext()); })())), "method"))) {
            // line 17
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 17, $this->getSourceContext()); })()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 18
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 18, $this->getSourceContext()); })()), "associationadmin", array()), "hasAccess", array(0 => (isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new Twig_Error_Runtime('Variable "route_name" does not exist.', 18, $this->getSourceContext()); })()), 1 => $context["element"]), "method")) {
                    // line 19
                    $this->displayBlock("relation_link", $context, $blocks);
                } else {
                    // line 21
                    $this->displayBlock("relation_value", $context, $blocks);
                }
                // line 23
                if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 24
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    ";
        } else {
            // line 26
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 26, $this->getSourceContext()); })()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 27
                echo "            ";
                $this->displayBlock("relation_value", $context, $blocks);
                if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 28
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    ";
        }
        
        $__internal_23da9486fa8e3eb5971a8cf6a72902c6f0a33ed38591bb22e4defffac91c0d05->leave($__internal_23da9486fa8e3eb5971a8cf6a72902c6f0a33ed38591bb22e4defffac91c0d05_prof);

        
        $__internal_83457efd42ac58bae0b4e9408087c8f29aba338a7ee67d0d6158a9b1be68ab71->leave($__internal_83457efd42ac58bae0b4e9408087c8f29aba338a7ee67d0d6158a9b1be68ab71_prof);

    }

    // line 32
    public function block_relation_link($context, array $blocks = array())
    {
        $__internal_d87ccb979cd6c041ed7efd96678f194a9454f873302c5246f1453829b58e9fd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d87ccb979cd6c041ed7efd96678f194a9454f873302c5246f1453829b58e9fd8->enter($__internal_d87ccb979cd6c041ed7efd96678f194a9454f873302c5246f1453829b58e9fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        $__internal_add36ae19effe9c23fee2858590f88c9f77316c2bd90848e90d913a3ba0acaa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_add36ae19effe9c23fee2858590f88c9f77316c2bd90848e90d913a3ba0acaa7->enter($__internal_add36ae19effe9c23fee2858590f88c9f77316c2bd90848e90d913a3ba0acaa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        // line 33
        echo "<a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 33, $this->getSourceContext()); })()), "associationadmin", array()), "generateObjectUrl", array(0 => (isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new Twig_Error_Runtime('Variable "route_name" does not exist.', 33, $this->getSourceContext()); })()), 1 => (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 33, $this->getSourceContext()); })()), 2 => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 33, $this->getSourceContext()); })()), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
        echo "\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 34, $this->getSourceContext()); })()), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 34, $this->getSourceContext()); })())), "html", null, true);
        // line 35
        echo "</a>";
        
        $__internal_add36ae19effe9c23fee2858590f88c9f77316c2bd90848e90d913a3ba0acaa7->leave($__internal_add36ae19effe9c23fee2858590f88c9f77316c2bd90848e90d913a3ba0acaa7_prof);

        
        $__internal_d87ccb979cd6c041ed7efd96678f194a9454f873302c5246f1453829b58e9fd8->leave($__internal_d87ccb979cd6c041ed7efd96678f194a9454f873302c5246f1453829b58e9fd8_prof);

    }

    // line 38
    public function block_relation_value($context, array $blocks = array())
    {
        $__internal_ff7ca770f5833795f5930dcec2af914586debb6cb96134158807a275ce690ade = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff7ca770f5833795f5930dcec2af914586debb6cb96134158807a275ce690ade->enter($__internal_ff7ca770f5833795f5930dcec2af914586debb6cb96134158807a275ce690ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        $__internal_40dff19f8b75ca1481dad0739b6397580684cec075fb89edd1bc68991e859345 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40dff19f8b75ca1481dad0739b6397580684cec075fb89edd1bc68991e859345->enter($__internal_40dff19f8b75ca1481dad0739b6397580684cec075fb89edd1bc68991e859345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 39, $this->getSourceContext()); })()), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 39, $this->getSourceContext()); })())), "html", null, true);
        
        $__internal_40dff19f8b75ca1481dad0739b6397580684cec075fb89edd1bc68991e859345->leave($__internal_40dff19f8b75ca1481dad0739b6397580684cec075fb89edd1bc68991e859345_prof);

        
        $__internal_ff7ca770f5833795f5930dcec2af914586debb6cb96134158807a275ce690ade->leave($__internal_ff7ca770f5833795f5930dcec2af914586debb6cb96134158807a275ce690ade_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 39,  177 => 38,  167 => 35,  165 => 34,  161 => 33,  152 => 32,  141 => 29,  127 => 28,  121 => 27,  103 => 26,  100 => 25,  86 => 24,  82 => 23,  79 => 21,  76 => 19,  74 => 18,  56 => 17,  53 => 16,  50 => 15,  41 => 14,  20 => 12,);
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
    {% set route_name = field_description.options.route.name %}
    {% if field_description.hasassociationadmin and field_description.associationadmin.hasRoute(route_name) %}
        {% for element in value %}
            {%- if field_description.associationadmin.hasAccess(route_name, element) -%}
                {{ block('relation_link') }}
            {%- else -%}
                {{ block('relation_value') }}
            {%- endif -%}
            {% if not loop.last %}, {% endif %}
        {% endfor %}
    {% else %}
        {% for element in value%}
            {{ block('relation_value') }}{% if not loop.last %}, {% endif %}
        {% endfor %}
    {% endif %}
{% endblock %}

{%- block relation_link -%}
    <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, element, field_description.options.route.parameters) }}\">
        {{- element|render_relation_element(field_description) -}}
    </a>
{%- endblock -%}

{%- block relation_value -%}
    {{- element|render_relation_element(field_description) -}}
{%- endblock -%}
", "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/CRUD/list_orm_one_to_many.html.twig");
    }
}
