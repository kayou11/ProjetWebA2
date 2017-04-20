<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig */
class __TwigTemplate_1b1cc699fe4246968e28b64cb359316b30ebf377600e8b7a2e2cd0eaa0890446 extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff8cf117f7c56f028c11b131f202b52e1a084a95a672740e4d87aa18518ae3d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff8cf117f7c56f028c11b131f202b52e1a084a95a672740e4d87aa18518ae3d8->enter($__internal_ff8cf117f7c56f028c11b131f202b52e1a084a95a672740e4d87aa18518ae3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig"));

        $__internal_878427d21f7d61b4c7b163902dfd6d65a50396bbe7bb46b80e9800b75ce652d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_878427d21f7d61b4c7b163902dfd6d65a50396bbe7bb46b80e9800b75ce652d0->enter($__internal_878427d21f7d61b4c7b163902dfd6d65a50396bbe7bb46b80e9800b75ce652d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff8cf117f7c56f028c11b131f202b52e1a084a95a672740e4d87aa18518ae3d8->leave($__internal_ff8cf117f7c56f028c11b131f202b52e1a084a95a672740e4d87aa18518ae3d8_prof);

        
        $__internal_878427d21f7d61b4c7b163902dfd6d65a50396bbe7bb46b80e9800b75ce652d0->leave($__internal_878427d21f7d61b4c7b163902dfd6d65a50396bbe7bb46b80e9800b75ce652d0_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2dcc34a138376ee919835120909bc9da9caaef13aa591272245ac372b304d214 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dcc34a138376ee919835120909bc9da9caaef13aa591272245ac372b304d214->enter($__internal_2dcc34a138376ee919835120909bc9da9caaef13aa591272245ac372b304d214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_4781faea6e346bf9f74f1b14acfe84035fc34f6427c46c15c16fe56c43764431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4781faea6e346bf9f74f1b14acfe84035fc34f6427c46c15c16fe56c43764431->enter($__internal_4781faea6e346bf9f74f1b14acfe84035fc34f6427c46c15c16fe56c43764431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
                echo "
            ";
                // line 28
                if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 29
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
            // line 30
            echo "    ";
        }
        
        $__internal_4781faea6e346bf9f74f1b14acfe84035fc34f6427c46c15c16fe56c43764431->leave($__internal_4781faea6e346bf9f74f1b14acfe84035fc34f6427c46c15c16fe56c43764431_prof);

        
        $__internal_2dcc34a138376ee919835120909bc9da9caaef13aa591272245ac372b304d214->leave($__internal_2dcc34a138376ee919835120909bc9da9caaef13aa591272245ac372b304d214_prof);

    }

    // line 33
    public function block_relation_link($context, array $blocks = array())
    {
        $__internal_5e9beb552d3f750564b38ac553ba4826838cfce18425422911ac5c3894ef387e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e9beb552d3f750564b38ac553ba4826838cfce18425422911ac5c3894ef387e->enter($__internal_5e9beb552d3f750564b38ac553ba4826838cfce18425422911ac5c3894ef387e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        $__internal_b947867ed4f5aae5e5f879de405a7516c3521d3922e22cdf03a175e9cfe52024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b947867ed4f5aae5e5f879de405a7516c3521d3922e22cdf03a175e9cfe52024->enter($__internal_b947867ed4f5aae5e5f879de405a7516c3521d3922e22cdf03a175e9cfe52024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        // line 34
        echo "<a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 34, $this->getSourceContext()); })()), "associationadmin", array()), "generateObjectUrl", array(0 => (isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new Twig_Error_Runtime('Variable "route_name" does not exist.', 34, $this->getSourceContext()); })()), 1 => (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 34, $this->getSourceContext()); })()), 2 => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 34, $this->getSourceContext()); })()), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
        echo "\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 35, $this->getSourceContext()); })()), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 35, $this->getSourceContext()); })())), "html", null, true);
        // line 36
        echo "</a>";
        
        $__internal_b947867ed4f5aae5e5f879de405a7516c3521d3922e22cdf03a175e9cfe52024->leave($__internal_b947867ed4f5aae5e5f879de405a7516c3521d3922e22cdf03a175e9cfe52024_prof);

        
        $__internal_5e9beb552d3f750564b38ac553ba4826838cfce18425422911ac5c3894ef387e->leave($__internal_5e9beb552d3f750564b38ac553ba4826838cfce18425422911ac5c3894ef387e_prof);

    }

    // line 39
    public function block_relation_value($context, array $blocks = array())
    {
        $__internal_630a78b2dfcdf7cd5e497766894baff440e5f1b95d00778bbae6d05c6504d23f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_630a78b2dfcdf7cd5e497766894baff440e5f1b95d00778bbae6d05c6504d23f->enter($__internal_630a78b2dfcdf7cd5e497766894baff440e5f1b95d00778bbae6d05c6504d23f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        $__internal_7c845508030a63e2faad2aaa70b23370425bb79d81e0ee249b81ef2d821550b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c845508030a63e2faad2aaa70b23370425bb79d81e0ee249b81ef2d821550b3->enter($__internal_7c845508030a63e2faad2aaa70b23370425bb79d81e0ee249b81ef2d821550b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 40, $this->getSourceContext()); })()), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 40, $this->getSourceContext()); })())), "html", null, true);
        
        $__internal_7c845508030a63e2faad2aaa70b23370425bb79d81e0ee249b81ef2d821550b3->leave($__internal_7c845508030a63e2faad2aaa70b23370425bb79d81e0ee249b81ef2d821550b3_prof);

        
        $__internal_630a78b2dfcdf7cd5e497766894baff440e5f1b95d00778bbae6d05c6504d23f->leave($__internal_630a78b2dfcdf7cd5e497766894baff440e5f1b95d00778bbae6d05c6504d23f_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 40,  180 => 39,  170 => 36,  168 => 35,  164 => 34,  155 => 33,  144 => 30,  130 => 29,  126 => 28,  121 => 27,  103 => 26,  100 => 25,  86 => 24,  82 => 23,  79 => 21,  76 => 19,  74 => 18,  56 => 17,  53 => 16,  50 => 15,  41 => 14,  20 => 12,);
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
            {{ block('relation_value') }}
            {% if not loop.last %}, {% endif %}
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
", "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig", "/Users/PierreKayou/Documents/Sites Web/ProjetWebA2/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/CRUD/list_orm_many_to_many.html.twig");
    }
}
